<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Categorie;
    use App\Models\Blog\Post;
    use App\Http\Controllers\BlogController;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class CategorieController extends BlogController{
        /** @var string - The UserController principal Model. */
        protected $model = 'Categorie';

        /**
         * Create a new Categorie.
         * @param $request - Request.
         */
        public function create(Request $request){            
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/blog#new-categorie')->withErrors($validator)->withInput();
            }
            return redirect('/panel#categories')->with('status', 'Categoría creada correctamente.');
        }

        /** Load the "Create a new Categorie" section. */
        public function showCreate(){            
            return view('blog.categorie.create', [
                'validation' => json_encode([
                    'rules' => Categorie::$validation['create']['rules'],
                    'messages' => Categorie::$validation['create']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and create the Categorie.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();
            
            $validator = Validator::make($request->all(), Categorie::$validation['create']['rules'], Categorie::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                // $data['id_user'] = Auth::user()->id_user;
                $data['id_user'] = 1;

                $data['slug'] = SlugService::createSlug(Categorie::class, 'slug', $data['name']);
                
                Categorie::create($data);
            }
        }

        /**
         * Edit a Categorie.
         * @param $request - Request.
         * @param $id_categorie - The Categorie's PK.
         */
        public function edit(Request $request, $id_categorie){
            $validator = $this->doEdit($request, $id_categorie);
            if($validator){
                $categorie = Categorie::find($id_categorie);
                return redirect("/categoria/$categorie->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#categories')->with('status', 'Categoría editada correctamente.');
        }

        /**
         * Load the "Edit a Categorie" section.
         * @param $slug - The Categorie's slug.
         */
        public function showEdit($slug){      
            $categorie = Categorie::findBySlug($slug);
            return view('blog.categorie.edit', [
                'categorie' => $categorie,
                'validation' => json_encode([
                    'rules' => Categorie::$validation['edit']['rules'],
                    'messages' => Categorie::$validation['edit']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and update the Categorie.
         * @param $request - Request.
         * @param $id_categorie - The Categorie PK.
         */
        public function doEdit(Request $request, $id_categorie){
            $data = $request->all();

            $categorie = Categorie::find($id_categorie);
            
            $validator = Validator::make($request->all(), Categorie::$validation['edit']['rules'], Categorie::$validation['edit']['messages'][$this->idiom]);
            
            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_user'] = Auth::user()->id_user;

                if($data['name'] != $categorie->name){
                    $data['slug'] = SlugService::createSlug(Categorie::class, 'slug', $data['name']);
                }

                $categorie->update($data);
            }
        }

        /**
         * Delete a Categorie.
         * @param $id_categorie - The Categorie's PK.
         */
        public function delete($id_categorie){
            $validator = $this->doDelete($id_categorie);
            if($validator){
                $categorie = Categorie::find($id_categorie);
                return redirect("/panel#posts")->with('status', 'Una publicación contiene al menos la categoría seleccionada.');
            }
            return redirect('/panel#categories')->with('status', 'Categoría eliminada correctamente.');
        }

        /**
         * Delete the Categorie.
         * @param $id_categorie - The Categorie PK.
         */
        public function doDelete($id_categorie){
            $posts = Post::where('id_categorie', '=', $id_categorie)->get();
            if(!count($posts)){
                $categorie = Categorie::find($id_categorie);
                $categorie->delete();
            }else{
                return true;
            }
        }
    }