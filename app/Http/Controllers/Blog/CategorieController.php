<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Categorie;
    use App\Http\Controllers\BlogController;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class CategorieController extends BlogController{
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
                //
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
                // $data['id_user'] = Auth::user()->id_usuario;
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
                return redirect('/blog#categorie-' . $id_categorie)->withErrors($validator)->withInput();
            }
            return redirect('/')->with('status', 'Categoría editada correctamente.');
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
                    'rules' => Categorie::$validation['create']['rules'],
                    'messages' => Categorie::$validation['create']['messages'][$this->idiom],
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
                $data['id_user'] = Auth::user()->id_usuario;

                if($data['name'] != $categorie->name){
                    $data['slug'] = SlugService::createSlug(Categorie::class, 'slug', $data['name']);
                }

                $categorie->update($data);
            }
        }

        /**
         * Delete the Categorie.
         * @param $id_categorie - The Categorie PK.
         */
        public function doDelete($id_categorie){
            $categorie = Categorie::find($id_categorie);
            $categorie->delete();
        }
    }