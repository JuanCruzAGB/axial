<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Blog\TagController;
    use App\Models\Blog\Tag as Etiqueta;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class EtiquetaController extends TagController{
        /** Carga la seccion "Crear Etiqueta". */
        public function showCrear(){            
            return view('etiqueta.crear', [
                //
            ]);
        }

        /**
         * Valida y crea la Etiqueta.
         * @param $request - Request.
         */
        public function doCrear(Request $request){            
            $this->doCreate($request);
            return redirect('/')->with('status', 'Etiqueta creada correctamente.');
        }

        /**
         * Carga la seccion "Editar Etiqueta".
         * @param $slug - El slug de la Etiqueta.
         */
        public function showEditar($slug){      
            $etiqueta = Etiqueta::findBySlug($slug);      
            return view('etiqueta.editar', [
                'etiqueta' => $etiqueta,
            ]);
        }

        /**
         * Valida y actualiza la Etiqueta.
         * @param $request - Request.
         * @param $id_tag - El PK de la Etiqueta.
         */
        public function doEditar(Request $request, $id_tag){            
            $this->doEdit($request, $id_tag);
            return redirect('/')->with('status', 'Etiqueta editado correctamente.');
        }

        /**
         * Elimina la Etiqueta.
         * @param $id_tag - El PK de la Etiqueta.
         */
        public function doBorrar($id_tag){            
            $this->doDelete($id_tag);
            return redirect('/')->with('status', 'Etiqueta eliminada correctamente.');
        }
    }