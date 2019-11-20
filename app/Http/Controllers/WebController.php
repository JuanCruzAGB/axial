<?php
    namespace App\Http\Controllers;

    use Auth;
    use Illuminate\Http\Request;

    class WebController extends Controller{
        /** Carga el modo en construcción. */
        public function construccion(){
            return view('web.construccion', [
                //
            ]);
        }

        /** Carga la seccion principal. */
        public function inicio(){            
            return view('web.inicio', [
                //
            ]);
        }

        /** Carga el panel de administracion. */
        public function panel(){
            return view('web.panel', [
                //
            ]);
        }
    }