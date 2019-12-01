<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Post;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Categorie extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'categories';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_categorie';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'name', 'id_user', 'slug',
        ];
        
        /** Get all the Posts that match the PK. */
        public function categories(){
            return $this->hasMany(Post::class, 'id_categorie', 'id_categorie');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'create' => [
                'rules' => [
                    'name' => 'required|min:10|max:200',
                ], 'messages' => [
                    'en' => [
                        'name.required' => 'The name is required.',
                        'name.min' => 'The name min length is :min.',
                        'name.max' => 'The name max length is :max.',
                    ], 'es' => [
                        'name.required' => 'El nombre es obligatorio.',
                        'name.min' => 'El nombre debe tener al menos :min caracteres.',
                        'name.max' => 'El nombre no puede tener más de :max caracteres.',
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
                    'source'	=> 'name',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }