<?php
    namespace App\Http\Controllers;

    use App\User as Usuario;
    use Auth;
    use Illuminate\Http\Request;

    class UsuarioController extends Controller{
        /** Carga la seccion "Listado de Usuarios" dentro del panel del administrador. */
        public function panel(){
            $usuarios = User::all();

            return view('usuario.panel', [
                'usuarios' => $usuarios,
                'autenticado' => Auth::user(),
            ]);
        }
        
        /**
         * Carga la seccion "Editar Usuario".
         * 
         * @param $id_usuario - El id de la Usuario.
         */
        public function showEditar($id_usuario){
            $usuario = User::find($id_usuario);

            return view('usuario.editar', [
                'usuario' => $usuario,
            ]);
        }

        /**
         * Valida y actualiza los datos..
         * 
         * @param $request - Request
         * @param $id_usuario - El id del Usuario.
         */
        public function doEditar(Request $request, $id_usuario){
            $inputData = $request->input();
            if(isset($inputData['id_nivel']) && $inputData['id_nivel'] == 1){
                $request->validate([
                    'nombre' => 'required|min:2|max:60',
                    'correo' => 'required|email|max:100|unique:users,correo,' . $id_usuario . ',id_usuario',
                    'clave' => 'nullable|min:4|max:40|confirmed',
                    'id_nivel' => 'required|numeric',
                    'id_suscriptor' => 'nullable|numeric|unique:users,id_suscriptor,' . $id_usuario . ',id_usuario',
                    'entidad' => 'required|max:300',
                    'direccion' => 'required|max:160',
                    'provincia' => 'required|max:100',
                    'cuit' => 'required|max:200',
                    'telefono' => 'required|max:100',
                    'id_tipo' => 'required|numeric',
                    'alta' => 'required|date',
                    'obras' => 'required',
                ], [
                    'nombre.required' => 'El nombre es obligatorio.',
                    'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                    'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                    'correo.required' => 'El correo es obligatorio.',
                    'correo.max' => 'El correo no puede tener más de :max caracteres.',
                    'correo.unique' => 'El correo ya está en uso.',
                    'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                    'clave.max' => 'La clave no puede tener más de :max caracteres.',
                    'clave.confirmed' => 'Las claves no son iguales.',
                    'id_nivel.required' => 'El nivel es obligatorio.',
                    'id_nivel.numeric' => 'El nivel debe ser un valor numerico.',
                    'id_suscriptor.numeric' => 'El número de suscriptor debe ser un valor numerico.',
                    'id_suscriptor.unique' => 'El número de suscriptor ya está en uso.',
                    'entidad.required' => 'La entidad es obligatoria.',
                    'entidad.max' => 'La entidad no puede tener más de :max caracteres.',
                    'direccion.required' => 'La dirección es obligatoria.',
                    'direccion.max' => 'La dirección no puede tener más de :max caracteres.',
                    'provincia.required' => 'La provincia es obligatoria.',
                    'provincia.max' => 'La provincia no puede tener más de :max caracteres.',
                    'cuit.required' => 'El número de cuit/cuil es obligatorio.',
                    'cuit.max' => 'El número de cuit/cuil no puede tener más de :max caracteres.',
                    'telefono.required' => 'El telefono es obligatorio.',
                    'telefono.max' => 'El teléfono no puede tener más de :max caracteres.',
                    'id_tipo.required' => 'El tipo de suscripción es obligatorio.',
                    'id_tipo.numeric' => 'El tipo de suscripción debe ser un valor numerico.',
                    'alta.required' => 'La fecha de alta no puede estar vacía.',
                    'alta.date' => 'La fecha de alta debe ser una fecha valida.',
                    'obras.required' => 'Una obra tiene que estar seleccionada.',
                ]);
            }else{
                $request->validate([
                    'nombre' => 'required|min:2|max:60',
                    'correo' => 'required|email|max:100|unique:users,correo,' . $id_usuario . ',id_usuario',
                    'clave' => 'nullable|min:4|max:40|confirmed',
                    'id_nivel' => 'required|numeric',
                    'id_suscriptor' => 'nullable|numeric|unique:users,id_suscriptor,' . $id_usuario . ',id_usuario',
                ], [
                    'nombre.required' => 'El nombre es obligatorio.',
                    'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                    'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                    'correo.required' => 'El correo es obligatorio.',
                    'correo.max' => 'El correo no puede tener más de :max caracteres.',
                    'correo.unique' => 'El correo ya está en uso.',
                    'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                    'clave.max' => 'La clave no puede tener más de :max caracteres.',
                    'clave.confirmed' => 'Las claves no son iguales.',
                    'id_nivel.required' => 'El nivel es obligatorio.',
                    'id_nivel.numeric' => 'El nivel debe ser un valor numerico.',
                    'id_suscriptor.numeric' => 'El número de suscriptor debe ser un valor numerico.',
                    'id_suscriptor.unique' => 'El número de suscriptor ya está en uso.',
                ]);
            }
            
            $usuario = User::find($id_usuario);

            if(isset($inputData['clave']) && $inputData['clave']){
                $inputData['clave'] = \Hash::make($inputData['clave']);
            }else{
                $inputData['clave'] = $usuario->clave;
            }

            if(!isset($inputData['cliente'])){
                $inputData['cliente'] = false;
            }else{
                $inputData['cliente'] = true;
            }
            
            $usuario->update($inputData);

            foreach($usuario->suscripciones as $suscripcion){
                $suscripcion->delete();
            }

            if($inputData['id_nivel'] == 1){
                foreach($inputData['obras'] as $obra){
                    $inputSuscripcion = [];

                    $inputSuscripcion['id_usuario'] = $usuario->id_usuario;
                    $inputSuscripcion['id_obra'] = $obra;

                    Suscripcion::create($inputSuscripcion);
                }
            }else{
                $obras = Obra::get();
                foreach($obras as $obra){
                    $inputSuscripcion = [];

                    $inputSuscripcion['id_usuario'] = $usuario->id_usuario;
                    $inputSuscripcion['id_obra'] = $obra->id_obra;

                    Suscripcion::create($inputSuscripcion);
                }
            }
            
            return redirect()->route('usuario.panel')->with('status', 'El Usuario: "' . $usuario->nombre . '" fue editado exitosamente.');
        }
    }