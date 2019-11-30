<?php
    namespace App\Http\Controllers;

    use Auth;
    use Illuminate\Http\Request;

    class BlogController extends Controller{
        /** Load the blog's home. */
        public function home(){            
            return view('blog.home', [
                //
            ]);
        }
    }