<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Post;
    use App\Models\Blog\Category;
    use App\Models\Blog\Feature;
    use App\Models\Blog\Tag;
    use App\Http\Controllers\BlogController;
    use App\User;
    use Auth;
    use Carbon\Carbon;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Validator;
    use Intervention\Image\ImageManagerStatic as Image;
    use Storage;

    class PostController extends BlogController{
        /** @var string - The UserController principal Model. */
        protected $model = 'Post';

        /**
         * The Post information view.
         * @param $slug - The Post slug.
         */
        public function panel($slug){
            $post = Post::findBySlug($slug);
            $post->date = $this->createDate($post);

            $category = Category::find($post->id_category);
            $user = User::find($post->id_user);

            $post->tags = collect([]);
            $features = Feature::where('id_post', '=', $post->id_post)->get();
            foreach($features as $feature){
                $tag = Tag::find($feature->id_tag);
                $post->tags->push($tag);
            }
            return view('blog.post.info', [
                'category' => $category,
                'post' => $post,
                'user' => $user,
            ]);
        }

        /**
         * The list of Posts that are loaded according to the Category.
         * @param $slug - The Category slug.
         */
        public function catList($slug){
            $category = Category::findBySlug($slug);
            $posts = Post::where('id_category', '=', $category->id_category)->with('category', 'features', 'user')->get();
            $count = 0;
            foreach($posts as $post){
                $post->date = $this->createDate($post);
                if(isset($post->features) && count($post->features)){
                    $post->tags = collect([]);
                    foreach($post->features as $feature){
                        $tag = Tag::find($feature->id_tag);
                        $post->tags->push($tag);
                    }
                }
                $count++;
            }
            return view('blog.post.list', [
                'count' => $count,
                'model' => $category,
                'posts' => $posts,
            ]);
        }

        /**
         * The list of Posts that are loaded according to the Tag.
         * @param $slug - The Tag slug.
         */
        public function tagList($slug){
            $tag = Tag::findBySlug($slug);
            $posts = Post::where('id_tag', '=', $tag->id_tag)->with('category', 'features')->get();
            $count = 0;
            foreach($posts as $post){
                $post->date = $this->createDate($post);
                if(isset($post->features) && count($post->features)){
                    $post->tags = collect([]);
                    foreach($post->features as $feature){
                        $tag = Tag::find($feature->id_tag);
                        $post->tags->push($tag);
                    }
                }
                $count++;
            }
            return view('blog.post.list', [
                'count' => $count,
                'model' => $tag,
                'posts' => $posts,
            ]);
        }

        /**
         * Create the Post date format text.
         * @param $post - The Post.
         */
        public function createDate($post){
            Carbon::setLocale('es');
            $date = new Carbon($post->updated_at);
            $date = $date->diffForHumans();
            return $date;
        }

        /**
         * Create a new Post.
         * @param $request - Request.
         */
        public function create(Request $request){
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/blog#new-post')->withErrors($validator)->withInput();
            }
            return redirect('/panel#posts')->with('status', 'Publicación creada correctamente.');
        }

        /** Load the "Create a new Post" section. */
        public function showCreate(){
            $categories = Category::with('user')->get();
            $tags = Tag::with('user')->get();      
            return view('blog.post.create', [
                'validation' => json_encode([
                    'rules' => Post::$validation['create']['rules'],
                    'messages' => Post::$validation['create']['messages'][$this->idiom],
                ]),
                'categories' => $categories,
                'tags' => $tags,
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

                $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
                
                $post = Post::create($data);

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

        /**
         * Edit a Post.
         * @param $request - Request.
         * @param $id_post - The Post's PK.
         */
        public function edit(Request $request, $id_post){
            $validator = $this->doEdit($request, $id_post);
            if($validator){
                $post = Post::find($id_post);
                return redirect("/publicacion/$post->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#posts')->with('status', 'Publicación editada correctamente.');
        }

        /**
         * Load the "Edit a Post" section.
         * @param $slug - The Post's slug.
         */
        public function showEdit($slug){      
            $post = Post::findBySlug($slug);
            $features = Feature::where('id_post', '=', $post->id_post)->get();
            $categories = Category::with('user')->get();
            $tags = Tag::with('user')->get();
            if($features != null){
                foreach($features as $feature){
                    foreach($tags as $tag){
                        if($feature->id_tag == $tag->id_tag){
                            $tag->selected = true;
                        }
                    }
                }
            }
            return view('blog.post.edit', [
                'validation' => json_encode([
                    'rules' => Post::$validation['edit']['rules'],
                    'messages' => Post::$validation['edit']['messages'][$this->idiom],
                ]),
                'post' => $post,
                'categories' => $categories,
                'tags' => $tags,
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
                $data['id_user'] = Auth::user()->id_user;

                if($data['title'] != $post->title){
                    $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
                }

                if($request->hasFile('image')){
                    $currentImage = $post->image;
                    
                    $filepath = $request->file('image')->hashName('posts');
                    
                    $img = Image::make($request->file('image'))
                            ->resize(525, 525, function($constrait){
                                $constrait->aspectRatio();
                                $constrait->upsize();
                            });
                            
                    Storage::put($filepath, (string) $img->encode());
                    
                    $data['image'] = $filepath;
                }

                $post->update($data);
            
                if(isset($currentImage) && !empty($currentImage)){
                    Storage::delete($currentImage);
                }

                foreach($post->features as $feature){
                    $feature->delete();
                }

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

        /**
         * Delete a Post.
         * @param $id_post - The Post's PK.
         */
        public function delete($id_post){
            $this->doDelete($id_post);
            return redirect('/panel#posts')->with('status', 'Publicación eliminada correctamente.');
        }

        /**
         * Delete the Post.
         * @param $id_post - The Post PK.
         */
        public function doDelete($id_post){
            $post = Post::find($id_post);
            $currentImage = $post->image;
            $post->delete();
            if(isset($currentImage) && !empty($currentImage)){
                Storage::delete($currentImage);
            }
        }
    }