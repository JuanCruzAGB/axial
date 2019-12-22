<?php
    namespace App\Models\Blog;

    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Noticia extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'noticias';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_noticia';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'titulo', 'imagen', 'contenido', 'id_user', 'slug',
        ];
        
        /** Get the User that match the PK. */
        public function user(){
            return $this->belongsTo(User::class, 'id_user', 'id_user');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'create' => [
                'rules' => [
                    'titulo' => 'required|min:5|max:200',
                    'imagen' => 'required|mimetypes:image/jpeg,image/png',
                    'contenido' => 'required',
                ], 'messages' => [
                    'es' => [
                        'titulo.required' => 'El título es obligatorio.',
                        'titulo.min' => 'El título debe tener al menos :min caracteres.',
                        'titulo.max' => 'El título no puede tener más de :max caracteres.',
                        'imagen.required' => 'La imagen es obligatoria.',
                        'imagen.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'contenido.required' => 'El contenido es obligatorio.',
                    ],
                ],
            ], 'edit' => [
                'rules' => [
                    'titulo' => 'required|min:5|max:200',
                    'imagen' => 'nullable|mimetypes:image/jpeg,image/png',
                    'contenido' => 'required',
                ], 'messages' => [
                    'es' => [
                        'titulo.required' => 'El título es obligatorio.',
                        'titulo.min' => 'El título debe tener al menos :min caracteres.',
                        'titulo.max' => 'El título no puede tener más de :max caracteres.',
                        'imagen.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'contenido.required' => 'El contenido es obligatorio.',
                    ],
                ],
            ],
        ];
        
        /**
         * The Sluggable configuration for the Model.
         * @return array
         */
        public function sluggable(){
            return [
                'slug' => [
                    'source'	=> 'titulo',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }