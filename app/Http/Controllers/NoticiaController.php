<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Noticia;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class NoticiaController extends Controller{
        /** @var string - El idioma a manejar. */
        protected $idiom = 'es';

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
                if($request->hasFile('image')){
                    $filepath = $request->file('image')->hashName('posts');
                    
                    $img = Image::make($request->file('image'))
                            ->resize(750, 750, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['image'] = $filepath;
                }

                $data['id_user'] = Auth::user()->id_user;

                $data['slug'] = SlugService::createSlug(Noticia::class, 'slug', $data['title']);
                
                $post = Noticia::create($data);

                if(isset($data['tags'])){
                    foreach($data['tags'] as $id_tag){
                        $auxData = [];
                        $auxData['id_post'] = $post->id_post;
                        $auxData['id_tag'] = $id_tag;
    
                        Feature::create($auxData);
                    }
                }
            }
        }
    }