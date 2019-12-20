<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Category;
    use App\Models\Blog\Post;
    use App\Http\Controllers\BlogController;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class CategorieController extends BlogController{
        /** @var string - The UserController principal Model. */
        protected $model = 'Category';

        /**
         * Create a new Category.
         * @param $request - Request.
         */
        public function create(Request $request){            
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/blog#new-category')->withErrors($validator)->withInput();
            }
            return redirect('/panel#categories')->with('status', 'Categoría creada correctamente.');
        }

        /** Load the "Create a new Category" section. */
        public function showCreate(){            
            return view('blog.category.create', [
                'validation' => json_encode([
                    'rules' => Category::$validation['create']['rules'],
                    'messages' => Category::$validation['create']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and create the Category.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();
            
            $validator = Validator::make($request->all(), Category::$validation['create']['rules'], Category::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                // $data['id_user'] = Auth::user()->id_user;
                $data['id_user'] = 1;

                $data['slug'] = SlugService::createSlug(Category::class, 'slug', $data['name']);
                
                Category::create($data);
            }
        }

        /**
         * Edit a Category.
         * @param $request - Request.
         * @param $id_category - The Category's PK.
         */
        public function edit(Request $request, $id_category){
            $validator = $this->doEdit($request, $id_category);
            if($validator){
                $category = Category::find($id_category);
                return redirect("/categoria/$category->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#categories')->with('status', 'Categoría editada correctamente.');
        }

        /**
         * Load the "Edit a Category" section.
         * @param $slug - The Category's slug.
         */
        public function showEdit($slug){      
            $category = Category::findBySlug($slug);
            return view('blog.category.edit', [
                'category' => $category,
                'validation' => json_encode([
                    'rules' => Category::$validation['edit']['rules'],
                    'messages' => Category::$validation['edit']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and update the Category.
         * @param $request - Request.
         * @param $id_category - The Category PK.
         */
        public function doEdit(Request $request, $id_category){
            $data = $request->all();

            $category = Category::find($id_category);
            
            $validator = Validator::make($request->all(), Category::$validation['edit']['rules'], Category::$validation['edit']['messages'][$this->idiom]);
            
            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_user'] = Auth::user()->id_user;

                if($data['name'] != $category->name){
                    $data['slug'] = SlugService::createSlug(Category::class, 'slug', $data['name']);
                }

                $category->update($data);
            }
        }

        /**
         * Delete a Category.
         * @param $id_category - The Category's PK.
         */
        public function delete($id_category){
            $validator = $this->doDelete($id_category);
            if($validator){
                $category = Category::find($id_category);
                return redirect("/panel#posts")->with('status', 'Una publicación contiene al menos la categoría seleccionada.');
            }
            return redirect('/panel#categories')->with('status', 'Categoría eliminada correctamente.');
        }

        /**
         * Delete the Category.
         * @param $id_category - The Category PK.
         */
        public function doDelete($id_category){
            $posts = Post::where('id_category', '=', $id_category)->get();
            if(!count($posts)){
                $category = Category::find($id_category);
                $category->delete();
            }else{
                return true;
            }
        }
    }