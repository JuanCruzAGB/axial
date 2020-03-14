<?php
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;

    class Web extends Model{
        /** @var array Las reglas de validación y sus mensajes correspondientes. */
        public static $validation = [
            'contactar' => [
                'rules' => [
                    'nombre' => 'nullable|min:2|max:60',
                    'correo' => 'required|email|max:100',
                    'telefono' => 'required|numeric',
                    'mensaje' => 'required|max:200',
                    // 'g-recaptcha-response' => 'required|captcha',
                ], 'messages' => [
                    'es' => [
                        'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                        'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                        'correo.required' => 'El correo es obligatorio.',
                        'correo.email' => 'Debe ser un correo valido.',
                        'correo.max' => 'El correo no puede tener más de :max caracteres.',
                        'telefono.required' => 'El teléfono es obligatorio.',
                        'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
                        'mensaje.required' => 'El mensaje es obligatorio.',
                        'mensaje.max' => 'El mensaje no puede tener más de :max caracteres.',
                        'g-recaptcha-response.required' => 'Verifique que no es un robot',
                        'g-recaptcha-response.captcha' => 'Verificación dudosa.',
                    ],
                ],
            ],
        ];
    }