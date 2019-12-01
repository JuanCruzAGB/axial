<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Post;
    use App\Http\Controllers\BlogController;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class PostController extends BlogController{
        /**
         * Create a new Post.
         * @param $request - Request.
         */
        public function create(Request $request){            
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/blog#new-post')->withErrors($validator)->withInput();
            }
            return redirect('/')->with('status', 'Publicación creada correctamente.');
        }

        /** Load the "Create a new Post" section. */
        public function showCreate(){            
            return view('blog.post.create', [
                //
            ]);
        }

        /**
         * Valid and create the Post.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();

            $validator = Validator::make($request->all(), Post::$validation['create']['rules'], Post::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                $data['id_user'] = Auth::user()->id_usuario;

                $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
                
                Post::create($data);
            }
        }

        /**
         * Edit a Post.
         * @param $request - Request.
         * @param $id_post - The Post's PK.
         */
        public function edit(Request $request, $id_post){
            $validator = $this->doEdit($request, $id_post);
            if($validator){
                return redirect('/blog#post-' . $id_post)->withErrors($validator)->withInput();
            }
            return redirect('/')->with('status', 'Publicación editada correctamente.');
        }

        /**
         * Load the "Edit a Post" section.
         * @param $slug - The Post's slug.
         */
        public function showEdit($slug){      
            $post = Post::findBySlug($slug);      
            return view('blog.post.edit', [
                'post' => $post,
            ]);
        }

        /**
         * Valid and update the Post.
         * @param $request - Request.
         * @param $id_post - The Post PK.
         */
        public function doEdit(Request $request, $id_post){
            $data = $request->all();

            $post = Post::find($id_post);
            
            $validator = Validator::make($request->all(), Post::$validation['edit']['rules'], Post::$validation['edit']['messages'][$this->idiom]);
            
            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_user'] = Auth::user()->id_usuario;

                if($data['title'] != $post->title){
                    $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
                }

                $post->update($data);
            }
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