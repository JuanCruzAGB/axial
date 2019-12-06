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
            if(isset($posts->features)){
                $posts->tags = [];
                for($i = 0; $i < count($posts->features); $i++){
                    $posts->tags[] = Tag::find($posts->features[$i]);
                }
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
                ],
            ]);
        }
    }