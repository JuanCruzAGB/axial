<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Estudio;
    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Miembro extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'miembros';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_miembro';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'nombre', 'titulo', 'puesto', 'imagen', 'cv', 'link', 'id_user', 'slug',
        ];
        
        /** Get the User that match the PK. */
        public function user(){
            return $this->belongsTo(User::class, 'id_user', 'id_user');
        }
        
        /** Get all the Estudios that match the PK. */
        public function estudios(){
            return $this->hasMany(Estudio::class, 'id_miembro', 'id_miembro');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'create' => [
                'rules' => [
                    'nombre' => 'required|min:5|max:200',
                    'titulo' => 'required|min:5|max:200',
                    'puesto' => 'required|min:5|max:200',
                    'imagen' => 'required|mimetypes:image/jpeg,image/png',
                    'estudios' => 'required|array',
                    'estudios.*' => 'max:200',
                    'cv' => 'required|max:300',
                    'link' => 'nullable|url',
                ], 'messages' => [
                    'es' => [
                        'nombre.required' => 'El nombre es obligatorio.',
                        'nombre.min' => 'El nombre debe tener al menos :min caracteres.',
                        'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                        'titulo.required' => 'El título es obligatorio.',
                        'titulo.min' => 'El título debe tener al menos :min caracteres.',
                        'titulo.max' => 'El título no puede tener más de :max caracteres.',
                        'puesto.required' => 'El puesto es obligatorio.',
                        'puesto.min' => 'El puesto debe tener al menos :min caracteres.',
                        'puesto.max' => 'El puesto no puede tener más de :max caracteres.',
                        'imagen.required' => 'La imagen es obligatoria.',
                        'imagen.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'estudios.required' => 'Al menos un estudio es obligatorio.',
                        'estudios.array' => 'Los estudios deben ser un array.',
                        'estudios.*.max' => 'El estudio no puede tener más de :max caracteres.',
                        'cv.required' => 'El cv es obligatorio.',
                        'cv.max' => 'El cv no puede tener más de :max caracteres.',
                        'link.url' => 'El link debe ser una URL.',
                    ],
                ],
            ], 'edit' => [
                'rules' => [
                    'nombre' => 'required|min:5|max:200',
                    'titulo' => 'required|min:5|max:200',
                    'puesto' => 'required|min:5|max:200',
                    'imagen' => 'nullable|mimetypes:image/jpeg,image/png',
                    'estudios' => 'required|array',
                    'estudios.*' => 'max:200',
                    'cv' => 'required|max:300',
                    'link' => 'nullable|url',
                ], 'messages' => [
                    'es' => [
                        'nombre.required' => 'El nombre es obligatorio.',
                        'nombre.min' => 'El nombre debe tener al menos :min caracteres.',
                        'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                        'titulo.required' => 'El título es obligatorio.',
                        'titulo.min' => 'El título debe tener al menos :min caracteres.',
                        'titulo.max' => 'El título no puede tener más de :max caracteres.',
                        'puesto.required' => 'El puesto es obligatorio.',
                        'puesto.min' => 'El puesto debe tener al menos :min caracteres.',
                        'puesto.max' => 'El puesto no puede tener más de :max caracteres.',
                        'imagen.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'estudios.array' => 'Los estudios deben ser un array.',
                        'estudios.required' => 'Al menos un estudio es obligatorio.',
                        'estudios.*.required' => 'Al menos un estudio es obligatorio.',
                        'cv.required' => 'El cv es obligatorio.',
                        'cv.max' => 'El cv no puede tener más de :max caracteres.',
                        'link.url' => 'El link debe ser una URL.',
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
                    'source'	=> 'nombre',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }