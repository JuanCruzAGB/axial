<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Blog\PostController;
    use App\Models\Blog\Post as Publicacion;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class PublicacionController extends PostController{
        /** Carga la seccion "Crear Publicación". */
        public function showCrear(){            
            return view('publicacion.crear', [
                //
            ]);
        }

        /**
         * Valida y crea la Publicacion.
         * @param $request - Request.
         */
        public function doCrear(Request $request){            
            $this->doCreate($request);
            return redirect('/')->with('status', 'Publicacion creada correctamente.');
        }

        /**
         * Carga la seccion "Editar Publicación".
         * @param $slug - El slug de la Publicacion.
         */
        public function showEditar($slug){      
            $publicacion = Publicacion::findBySlug($slug);      
            return view('publicacion.editar', [
                'publicacion' => $publicacion,
            ]);
        }

        /**
         * Valida y actualiza la Publicacion.
         * @param $request - Request.
         * @param $id_post - El PK de la Publicacion.
         */
        public function doEditar(Request $request, $id_post){            
            $this->doEdit($request, $id_post);
            return redirect('/')->with('status', 'Publicacion editado correctamente.');
        }

        /**
         * Elimina la Publicacion.
         * @param $id_post - El PK de la Publicacion.
         */
        public function doBorrar($id_post){            
            $this->doDelete($id_post);
            return redirect('/')->with('status', 'Publicacion eliminada correctamente.');
        }
    }