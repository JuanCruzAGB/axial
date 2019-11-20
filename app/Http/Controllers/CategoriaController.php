<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Blog\CategoryController;
    use App\Models\Blog\Category as Categoria;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;

    class CategoriaController extends CategoryController{
        /** Carga la seccion "Crear Categoría". */
        public function showCrear(){            
            return view('categoria.crear', [
                //
            ]);
        }

        /**
         * Valida y crea la Categoria.
         * @param $request - Request.
         */
        public function doCrear(Request $request){            
            $this->doCreate($request);
            return redirect('/')->with('status', 'Categoria creada correctamente.');
        }

        /**
         * Carga la seccion "Editar Categoría".
         * @param $slug - El slug de la Categoria.
         */
        public function showEditar($slug){      
            $categoria = Categoria::findBySlug($slug);      
            return view('categoria.editar', [
                'categoria' => $categoria,
            ]);
        }

        /**
         * Valida y actualiza la Categoria.
         * @param $request - Request.
         * @param $id_category - El PK de la Categoria.
         */
        public function doEditar(Request $request, $id_category){            
            $this->doEdit($request, $id_category);
            return redirect('/')->with('status', 'Categoria editado correctamente.');
        }

        /**
         * Elimina la Categoria.
         * @param $id_category - El PK de la Categoria.
         */
        public function doBorrar($id_category){            
            $this->doDelete($id_category);
            return redirect('/')->with('status', 'Categoria eliminada correctamente.');
        }
    }