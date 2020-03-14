<?php
    namespace App\Http\Controllers;

    use App\Mail\Contactar;
    use App\Models\Web;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Validator;

    class MailController extends Controller{
        /**
         * Send Contact Mail.
         * @param Request $request
         */
        public function contactar(Request $request){
            $inputData = $request->input();

            $validator = Validator::make($request->all(), Web::$validation['contactar']['rules'], Web::$validation['contactar']['messages']['es']);
 
            $objDemo = new \stdClass();
            $objDemo->nombre = $inputData['nombre'];
            $objDemo->correo = $inputData['correo'];
            $objDemo->telefono = $inputData['telefono'];
            $objDemo->mensaje = $inputData['mensaje'];
            
            Mail::to('juancarmentia@gmail.com')->send(new Contactar($objDemo));

            return redirect()->route('mail.gracias');
        }

        /** De vuelve la visgta de mensaje de exito. */
        public function gracias(){
            return view('mail.gracias');
        }
    }