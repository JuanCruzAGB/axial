<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Post;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

    class Category extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'categories';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_category';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'name', 'id_user', 'slug',
        ];
        
        /** Get all the Posts that match the PK. */
        public function posts(){
            return $this->hasMany(Post::class, 'id_category', 'id_category');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'en' => [
                'create' => [
                    'rules' => [
                        //
                    ], 'messages' => [
                        //
                    ],
                ],
            ], 'es' => [
                'create' => [
                    'rules' => [
                        //
                    ], 'messages' => [
                        //
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