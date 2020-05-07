<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Noticia;
    use App\User;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Validator;
    use Intervention\Image\ImageManagerStatic as Image;
    use Storage;

    class NoticiaController extends Controller{
        /** @var string - El idioma a manejar. */
        protected $idiom = 'es';

        /**
         * La vista donde se ve la información de la Noticia.
         * @param $slug - El slug de la Noticia.
         */
        public function info($slug){
            $noticia = Noticia::findBySlug($slug);
            $noticia->fecha = $this->createDate($this->idiom, $noticia);
            
            $user = User::find($noticia->id_usuario);
            return view('blog.noticia.info', [
                'noticia' => $noticia,
                'user' => $user,
            ]);
        }

        /** La vista donde se ve las Noticias creadas. */
        public function list(){
            $noticias = Noticia::limit(6)->orderBy('updated_at', 'DESC')->get();
            $count = 0;
            foreach($noticias as $noticia){
                $noticia->fecha = $this->createDate($this->idiom, $noticia);
                $count++;
            }
            return view('blog.noticia.list', [
                'count' => $count,
                'noticias' => $noticias,
            ]);
        }

        /**
         * Crea una nueva Noticia.
         * @param $request - Request.
         */
        public function create(Request $request){
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/panel#nueva-noticia')->withErrors($validator)->withInput();
            }
            return redirect('/panel#noticias')->with('status', 'Noticia creada correctamente.');
        }

        /**
         * Valida y crea la Noticia.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $validator = Validator::make($request->all(), Noticia::$validation['create']['rules'], Noticia::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                if($request->hasFile('imagen')){
                    $filepath = $request->file('imagen')->hashName('noticias');
                    
                    $img = Image::make($request->file('imagen'))
                            ->resize(750, 750, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['imagen'] = $filepath;
                }
                $data['id_usuario'] = Auth::user()->id_user;

                $data['slug'] = SlugService::createSlug(Noticia::class, 'slug', $data['titulo']);
                // dd($data);
                
                $noticia = Noticia::create($data);
            }
        }

        /**
         * Edita una Noticia.
         * @param $request - Request.
         * @param $id_noticia - El PK de la Noticia.
         */
        public function edit(Request $request, $id_noticia){
            $validator = $this->doEdit($request, $id_noticia);
            if($validator){
                $noticia = Noticia::find($id_noticia);
                return redirect("/noticia/$noticia->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#noticias')->with('status', 'Noticia editada correctamente.');
        }

        /**
         * La vista donde se edita la Noticia.
         * @param $slug - El slug de la Noticia.
         */
        public function showEdit($slug){      
            $noticia = Noticia::findBySlug($slug);
            return view('blog.noticia.edit', [
                'validation' => json_encode([
                    'rules' => Noticia::$validation['edit']['rules'],
                    'messages' => Noticia::$validation['edit']['messages'][$this->idiom],
                ]),
                'noticia' => $noticia,
            ]);
        }

        /**
         * Valida y actualiza la Noticia.
         * @param $request - Request.
         * @param $id_noticia - El PK de la Noticia.
         */
        public function doEdit(Request $request, $id_noticia){
            $data = $request->all();
            
            $noticia = Noticia::find($id_noticia);
            
            $validator = Validator::make($request->all(), Noticia::$validation['edit']['rules'], Noticia::$validation['edit']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_usuario'] = Auth::user()->id_user;

                if($data['titulo'] != $noticia->titulo){
                    $data['slug'] = SlugService::createSlug(Noticia::class, 'slug', $data['titulo']);
                }

                if($request->hasFile('imagen')){
                    $currentImage = $noticia->imagen;
                    
                    $filepath = $request->file('imagen')->hashName('noticias');
                    
                    $img = Image::make($request->file('imagen'))
                            ->resize(750, 750, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['imagen'] = $filepath;
                }

                $noticia->update($data);
            
                if(isset($currentImage) && !empty($currentImage)){
                    Storage::delete($currentImage);
                }
            }
        }

        /**
         * Elimina una Noticia.
         * @param $id_noticia - El PK de la Noticia.
         */
        public function delete($id_noticia){
            $this->doDelete($id_noticia);
            return redirect('/panel#noticias')->with('status', 'Noticia eliminada correctamente.');
        }

        /**
         * Elimina una Noticia.
         * @param $id_noticia - El PK de la Notici.
         */
        public function doDelete($id_noticia){
            $post = Noticia::find($id_noticia);
            $currentImage = $post->imagen;
            $post->delete();
            if(isset($currentImage) && !empty($currentImage)){
                Storage::delete($currentImage);
            }
        }

        public function loadMore(Request $request){
            // Campos que llegan: $next
            $inputData = extract($request->all());
            $noticias = Noticia::orderBy('updated_at', 'DESC')->get();
            $noticias_collection = collect([]);
            for($int = 1; $int <= count($noticias); $int++){
                $noticias[$int - 1]->fecha = $this->createDate($this->idiom, $noticias[$int - 1]);
                $noticia = $noticias[$int - 1];
                if($int > intval($next)){
                    $noticias_collection->push($noticia);
                }
            }
            
            return response()->json([
                'error' => 0,
                'data' => $noticias_collection,
            ]);
        }
    }