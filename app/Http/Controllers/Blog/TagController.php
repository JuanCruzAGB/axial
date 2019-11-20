<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Tag;
    use App\Http\Controllers\Controller;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class TagController extends Controller{
        /**
         * Valid and create the Tag.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $request->validate(Tag::$validation['es']['create']['rules'], Tag::$validation['es']['create']['messages']);
            
            $data['id_user'] = Auth::user()->id_usuario;
            $data['slug'] = SlugService::createSlug(Tag::class, 'slug', $data['name']);
            
            Tag::create($data);
        }

        /**
         * Valid and update the Tag.
         * @param $request - Request.
         * @param $id_tag - The Tag PK.
         */
        public function doEdit(Request $request, $id_tag){
            $data = $request->all();

            $request->validate(Tag::$validation['es']['edit']['rules'], Tag::$validation['es']['edit']['messages']);
            
            $tag = Tag::find($id_tag);
            
            $data['id_user'] = Auth::user()->id_usuario;
            if($data['name'] != $tag->name){
                $data['slug'] = SlugService::createSlug(Tag::class, 'slug', $data['name']);
            }
            
            $tag->update($data);
        }

        /**
         * Delete the Tag.
         * @param $id_tag - The Tag PK.
         */
        public function doDelete($id_tag){
            $tag = Tag::find($id_tag);
            $tag->delete();
        }
    }