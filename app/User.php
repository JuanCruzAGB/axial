<?php
    namespace App;

    use App\Models\Blog\Post;
    use App\Models\Blog\Presentation;
    use Auth;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable{
        use Notifiable, Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'users';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_user';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'name', 'email', 'password', 'picture', 'id_presentation', 'slug',
        ];

        /** @var array - The hidden attributes. */
        protected $hidden = [
            'password', 'remember_token',
        ];
        
        /** Get the Presentation that match the PK. */
        public function presentation(){
            return $this->belongsTo(Presentation::class, 'id_presentation', 'id_presentation');
        }

        /** Get all the Posts that match the PK. */
        public function posts(){
            return $this->hasMany(Post::class, 'id_user', 'id_user');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'log-in' => [
                'rules' => [
                    'email' => 'required|email',
                    'password' => 'required|min:4|max:40',
                ], 'messages' => [
                    'en' => [
                        'email.required' => 'The email is required.',
                        'email.email' => 'The email must be a valid email.',
                        'password.required' => 'The password is required.',
                        'password.min' => 'The password min length is :min.',
                        'password.max' => 'The password max length is :max.',
                    ], 'es' => [
                        'email.required' => 'El correo es obligatorio.',
                        'email.email' => 'El correo no es un formato válido.',
                        'password.required' => 'La password es obligatoria.',
                        'password.min' => 'La password no puede tener menos de :min caracteres.',
                        'password.max' => 'La password no puede tener más de :max caracteres.',
                    ],
                ],
            ], 'register' => [
                //
            ], 'create' => [
                //
            ], 'edit' => [
                //
            ],
        ];
        
        /**
         * The Sluggable configuration for the Model.
         * @return array
         */
        public function sluggable(){
            return [
                'slug' => [
                    'source'	=> 'name',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }