<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Post;
    use App\Http\Controllers\Controller;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class PostController extends Controller{
        /**
         * Valid and create the Post.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $request->validate(Post::$validation['es']['create']['rules'], Post::$validation['es']['create']['messages']);
            
            $data['id_user'] = Auth::user()->id_usuario;
            $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
            
            Post::create($data);
        }

        /**
         * Valid and update the Post.
         * @param $request - Request.
         * @param $id_post - The Post PK.
         */
        public function doEdit(Request $request, $id_post){
            $data = $request->all();

            $request->validate(Post::$validation['es']['edit']['rules'], Post::$validation['es']['edit']['messages']);
            
            $post = Post::find($id_post);
            
            $data['id_user'] = Auth::user()->id_usuario;
            if($data['title'] != $post->title){
                $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
            }
            
            $post->update($data);
        }

        /**
         * Delete the Post.
         * @param $id_post - The Post PK.
         */
        public function doDelete($id_post){
            $post = Post::find($id_post);
            $post->delete();
        }
    }