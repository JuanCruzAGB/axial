<?php
    namespace App\Http\Controllers;

    use Auth;
    use Illuminate\Http\Request;

    class BlogController extends Controller{
        /** Carga la seccion principal. */
        public function inicio(){            
            return view('web.blog.inicio', [
                //
            ]);
        }
    }