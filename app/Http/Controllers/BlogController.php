<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Categorie;
    use App\Models\Blog\Post;
    use App\Models\Blog\Tag;
    use Auth;
    use Illuminate\Http\Request;

    class BlogController extends Controller{
        /** @var string - The Blog's idiom. */
        protected $idiom = 'es';

        /** Load the blog's home. */
        public function home(){
            $categories = Categorie::with('user')->get();
            $posts = Post::with('user', 'features', 'categorie')->get();
            $tags = Tag::with('user')->get();
            foreach($posts as $post){
                if(isset($post->features)){
                    $post->tags = collect([]);
                    foreach($post->features as $feature){
                        $post->tags->push(Tag::find($feature->id_tag));
                    }
                }
            }
            $posts_count = 0;
            foreach($posts as $post){
                $posts_count++;
            }
            return view('blog.home', [
                'validations' => [
                    'categorie' => json_encode([
                        'rules' => Categorie::$validation['create']['rules'],
                        'messages' => Categorie::$validation['create']['messages'][$this->idiom],
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
                    'categories' => $categories,
                    'posts' => $posts,
                    'tags' => $tags,
                ], 'counts' => [
                    'posts' => $posts_count,
                ],
            ]);
        }
    }