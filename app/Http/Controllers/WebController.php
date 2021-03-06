<?php
    namespace App\Http\Controllers;

    use App\Models\Blog\Miembro;
    use App\Models\Blog\Noticia;
    use App\Models\Web;
    use Auth;
    use Illuminate\Http\Request;

    class WebController extends Controller{
        /** @var string - El idioma a manejar. */
        protected $idiom = 'es';

        /** Carga el modo en construcción. */
        public function construccion(){
            return view('web.construccion', [
                //
            ]);
        }

        /** Carga la seccion principal. */
        public function inicio(){       
            $miembros = Miembro::all();
            return view('web.inicio', [
                'miembros' => $miembros,
                'validation' => json_encode([
                    'rules' => Web::$validation['contactar']['rules'],
                    'messages' => Web::$validation['contactar']['messages'][$this->idiom],
                ]),
            ]);
        }

        /** Carga el panel de administracion. */
        public function panel(){
            $miembros = Miembro::orderBy('updated_at', 'DESC')->get();
            $miembros_count = 0;
            foreach($miembros as $miembro){
                $miembro->date = $this->createDate('es', $miembro);
                $miembros_count++;
            }

            $noticias = Noticia::orderBy('updated_at', 'DESC')->get();
            $noticias_count = 0;
            foreach($noticias as $noticia){
                $noticia->date = $this->createDate('es', $noticia);
                $noticias_count++;
            }

            return view('blog.panel', [
                'validations' => [
                    'miembro' => json_encode([
                        'rules' => Miembro::$validation['create']['rules'],
                        'messages' => Miembro::$validation['create']['messages'][$this->idiom],
                    ]),
                    'noticia' => json_encode([
                        'rules' => Noticia::$validation['create']['rules'],
                        'messages' => Noticia::$validation['create']['messages'][$this->idiom],
                    ]),
                ], 'data' => [
                    'miembros' => $miembros,
                    'noticias' => $noticias,
                ], 'counts' => [
                    'miembros' => $miembros_count,
                    'noticias' => $noticias_count,
                ],
            ]);
        }

        /** Carga la sección especialidades. */
        public function quienes(){
            $miembros = Miembro::all();
            $miembros_count = 0;
            foreach($miembros as $miembro){
                $miembro->date = $this->createDate('es', $miembro);
                $miembros_count++;
            }

            return view('web.quienes-somos',[
                'data' => [
                    'miembros' => $miembros,
                ], 'counts' => [
                    'miembros' => $miembros_count,
                ],
            ]);
        }

        /** Carga la sección especialidades. */
        public function especialidades(){
            return view('web.especialidades');
        }
    }