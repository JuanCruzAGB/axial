<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Category;
    use App\Models\Blog\Post;
    use App\Models\Blog\Tag;
    use Auth;
    use Illuminate\Http\Request;

    class BlogController extends Controller{
        /** @var string - The Blog's idiom. */
        protected $idiom = 'es';

        /** Load the blog's panel. */
        public function panel(){
            $categories = Category::with('user')->get();
            $tags = Tag::with('user')->get();

            $posts = Post::with('user', 'features', 'category')->get();
            $posts_count = 0;
            foreach($posts as $post){
                if(isset($post->features)){
                    $post->tags = collect([]);
                    foreach($post->features as $feature){
                        $post->tags->push(Tag::find($feature->id_tag));
                    }
                }
                $posts_count++;
            }

            $auth_posts = Post::where('id_user', '=', Auth::user()->id_user)->with('user', 'features', 'category')->get();
            $auth_posts_count = 0;
            foreach($auth_posts as $post){
                if(isset($post->features)){
                    $post->tags = collect([]);
                    foreach($post->features as $feature){
                        $post->tags->push(Tag::find($feature->id_tag));
                    }
                }
                $auth_posts_count++;
            }

            return view('blog.panel', [
                'validations' => [
                    'category' => json_encode([
                        'rules' => Category::$validation['create']['rules'],
                        'messages' => Category::$validation['create']['messages'][$this->idiom],
                    ]),
                    'post' => json_encode([
                        'rules' => Post::$validation['create']['rules'],
                        'messages' => Post::$validation['create']['messages'][$this->idiom],
                    ]),
                    'tag' => json_encode([
                        'rules' => Tag::$validation['create']['rules'],
                        'messages' => Tag::$validation['create']['messages'][$this->idiom],
                    ]),
                ], 'data' => [
                    Auth::user()->id_user => $auth_posts,
                    'categories' => $categories,
                    'posts' => $posts,
                    'tags' => $tags,
                ], 'counts' => [
                    'posts' => $posts_count,
                    Auth::user()->id_user => $auth_posts_count,
                ],
            ]);
        }
    }