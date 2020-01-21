<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Miembro;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Validator;
    use Intervention\Image\ImageManagerStatic as Image;
    use Storage;

    class MiembroController extends Controller{
        /** @var string - El idioma a manejar. */
        protected $idiom = 'es';

        /**
         * Crea un nuevo Miembro.
         * @param $request - Request.
         */
        public function create(Request $request){
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/panel#nuevo-miembro')->withErrors($validator)->withInput();
            }
            return redirect('/panel#miembros')->with('status', 'Miembro creado correctamente.');
        }

        /**
         * Valida y crea el Miembro.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $validator = Validator::make($request->all(), Miembro::$validation['create']['rules'], Miembro::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                if($request->hasFile('imagen')){
                    $filepath = $request->file('imagen')->hashName('miembros');
                    
                    $img = Image::make($request->file('imagen'))
                            ->resize(750, 750, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['imagen'] = $filepath;
                }

                $data['id_usuario'] = Auth::user()->id_user;

                $data['slug'] = SlugService::createSlug(Miembro::class, 'slug', $data['nombre']);
                
                $miembro = Miembro::create($data);
            }
        }

        /**
         * Edita un Miembro.
         * @param $request - Request.
         * @param $id_miembro - El PK del Miembro.
         */
        public function edit(Request $request, $id_miembro){
            $validator = $this->doEdit($request, $id_miembro);
            if($validator){
                $miembro = Miembro::find($id_miembro);
                return redirect("/miembro/$miembro->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#miembros')->with('status', 'Miembro editado correctamente.');
        }

        /**
         * La vista donde se edita el Miembro.
         * @param $slug - El slug del Miembro.
         */
        public function showEdit($slug){      
            $miembro = Miembro::findBySlug($slug);
            return view('blog.miembro.edit', [
                'validation' => json_encode([
                    'rules' => Miembro::$validation['edit']['rules'],
                    'messages' => Miembro::$validation['edit']['messages'][$this->idiom],
                ]),
                'miembro' => $miembro,
            ]);
        }

        /**
         * Valida y actualiza un Miembro.
         * @param $request - Request.
         * @param $id_miembro - El PK del Miembro.
         */
        public function doEdit(Request $request, $id_miembro){
            $data = $request->all();
            
            $miembro = Miembro::find($id_miembro);
            
            $validator = Validator::make($request->all(), Miembro::$validation['edit']['rules'], Miembro::$validation['edit']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_usuario'] = Auth::user()->id_user;

                if($data['nombre'] != $miembro->nombre){
                    $data['slug'] = SlugService::createSlug(Miembro::class, 'slug', $data['nombre']);
                }

                if($request->hasFile('imagen')){
                    $currentImage = $miembro->imagen;
                    
                    $filepath = $request->file('imagen')->hashName('miembros');
                    
                    $img = Image::make($request->file('imagen'))
                            ->resize(750, 750, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['imagen'] = $filepath;
                }

                $miembro->update($data);
            
                if(isset($currentImage) && !empty($currentImage)){
                    Storage::delete($currentImage);
                }
            }
        }

        /**
         * Elimina un Miembro.
         * @param $id_miembro - El PK del Miembro.
         */
        public function delete($id_miembro){
            $this->doDelete($id_miembro);
            return redirect('/panel#miembros')->with('status', 'Miembro eliminado correctamente.');
        }

        /**
         * Elimina un Miembro.
         * @param $id_miembro - El PK del Miembro.
         */
        public function doDelete($id_miembro){
            $miembro = Miembro::find($id_miembro);
            $currentImage = $miembro->imagen;
            $miembro->delete();
            if(isset($currentImage) && !empty($currentImage)){
                Storage::delete($currentImage);
            }
        }
    }