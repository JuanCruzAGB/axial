<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Category;
    use App\Http\Controllers\Controller;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class CategoryController extends Controller{
        /**
         * Valid and create the Category.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $request->validate(Category::$validation['es']['create']['rules'], Category::$validation['es']['create']['messages']);
            
            $data['id_user'] = Auth::user()->id_usuario;
            $data['slug'] = SlugService::createSlug(Category::class, 'slug', $data['name']);
            
            Category::create($data);
        }

        /**
         * Valid and update the Category.
         * @param $request - Request.
         * @param $id_category - The Category PK.
         */
        public function doEdit(Request $request, $id_category){
            $data = $request->all();

            $request->validate(Category::$validation['es']['edit']['rules'], Category::$validation['es']['edit']['messages']);
            
            $category = Category::find($id_category);
            
            $data['id_user'] = Auth::user()->id_usuario;
            if($data['name'] != $category->name){
                $data['slug'] = SlugService::createSlug(Category::class, 'slug', $data['name']);
            }
            
            $category->update($data);
        }

        /**
         * Delete the Category.
         * @param $id_category - The Category PK.
         */
        public function doDelete($id_category){
            $category = Category::find($id_category);
            $category->delete();
        }
    }