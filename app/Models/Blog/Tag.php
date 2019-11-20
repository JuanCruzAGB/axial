<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Feature;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Tag extends Model{
        /** @var string - The table name. */
        protected $table = 'tags';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_tag';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'name', 'id_user', 'slug',
        ];
        
        /** Get all the Features that match the PK. */
        public function features(){
            return $this->hasMany(Feature::class, 'id_tag', 'id_tag');
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
    }