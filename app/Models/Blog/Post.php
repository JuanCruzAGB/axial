<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Category;
    use App\Models\Blog\Feature;
    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

    class Post extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'posts';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_post';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'title', 'body', 'id_category', 'id_user', 'slug',
        ];
        
        /** Get the Category that match the PK. */
        public function category(){
            return $this->belongsTo(Category::class, 'id_category', 'id_category');
        }
        
        /** Get the User that match the PK. */
        public function user(){
            return $this->belongsTo(User::class, 'id_user', 'id_user');
        }
        
        /** Get all the Features that match the PK. */
        public function features(){
            return $this->hasMany(Feature::class, 'id_post', 'id_post');
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
                    'source'	=> 'title',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }