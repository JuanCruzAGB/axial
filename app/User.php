<?php
    namespace App;

    use App\Models\Blog\Post;
    use Auth;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable{
        use Notifiable;

        /** @var string - El nombre de la tabla. */
        protected $table = 'usuarios';
        
        /** @var string - El nombre de la PK. */
        protected $primaryKey = 'id_usuario';

        /** @var array - Los atributos que se van a cargar de forma masiva. */
        protected $fillable = [
            'nombre', 'correo', 'clave', 'slug',
        ];

        /** @var array - Los atributos que no se van a ver. */
        protected $hidden = [
            'clave', 'remember_token',
        ];
        
        /** Trae todos los Posts que coincidan con el PK. */
        public function publicaciones(){
            return $this->hasMany(Post::class, 'id_user', 'id_usuario');
        }
        
        /** @var array - Las reglas de validación y sus mensajes correspondientes. */
        public static $validation = [
            'ingresar' => [
                'rules' => [
                    'correo' => 'required|email',
                    'clave' => 'required|min:4|max:40',
                ], 'messages' => [
                    'correo.required' => 'El correo es obligatorio.',
                    'correo.email' => 'El correo no es un formato válido.',
                    'clave.required' => 'La clave es obligatoria.',
                    'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                    'clave.max' => 'La clave no puede tener más de :max caracteres.',
                ],
            ],
        ];

        /** Establece cual campo va a funcionar como la "Password" guardada para verificar su Autenticacion. */
        public function getAuthPassword(){
            return $this->clave;
        }
    }