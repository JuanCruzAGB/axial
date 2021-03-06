<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Category;
    use App\Models\Blog\Feature;
    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Post extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string - The table name. */
        protected $table = 'posts';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_post';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'title', 'content', 'image', 'id_category', 'id_user', 'slug',
        ];
        
        /** Get the User that match the PK. */
        public function user(){
            return $this->belongsTo(User::class, 'id_user', 'id_user');
        }

        /** Get the Category that match the PK. */
        public function category(){
            return $this->belongsTo(Category::class, 'id_category', 'id_category');
        }
        
        /** Get all the Features that match the PK. */
        public function features(){
            return $this->hasMany(Feature::class, 'id_post', 'id_post');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'create' => [
                'rules' => [
                    'title' => 'required|min:5|max:200',
                    'image' => 'required|mimetypes:image/jpeg,image/png',
                    'content' => 'required',
                    'id_category' => 'required',
                ], 'messages' => [
                    'en' => [
                        'title.required' => 'The title is required.',
                        'title.min' => 'The title min length is :min.',
                        'title.max' => 'The title max length is :max.',
                        'image.required' => 'The image is required.',
                        'image.mimetypes' => 'The image mimetypes must be jpeg/jpg or png.',
                        'content.required' => 'The content is required.',
                        'id_category.required' => 'The category is required.',
                    ], 'es' => [
                        'title.required' => 'El título es obligatorio.',
                        'title.min' => 'El título debe tener al menos :min caracteres.',
                        'title.max' => 'El título no puede tener más de :max caracteres.',
                        'image.required' => 'La imagen es obligatoria.',
                        'image.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'content.required' => 'El contenido es obligatorio.',
                        'id_category.required' => 'La categoría es obligatoria.',
                    ],
                ],
            ], 'edit' => [
                'rules' => [
                    'title' => 'required|min:5|max:200',
                    'image' => 'nullable|mimetypes:image/jpeg,image/png',
                    'content' => 'required',
                    'id_category' => 'required',
                ], 'messages' => [
                    'en' => [
                        'title.required' => 'The title is required.',
                        'title.min' => 'The title min length is :min.',
                        'title.max' => 'The title max length is :max.',
                        'image.mimetypes' => 'The image mimetypes must be jpeg/jpg or png.',
                        'content.required' => 'The content is required.',
                        'id_category.required' => 'The category is required.',
                    ], 'es' => [
                        'title.required' => 'El título es obligatorio.',
                        'title.min' => 'El título debe tener al menos :min caracteres.',
                        'title.max' => 'El título no puede tener más de :max caracteres.',
                        'image.mimetypes' => 'La imagen debe ser formato jpeg/jpg o png.',
                        'content.required' => 'El contenido es obligatorio.',
                        'id_category.required' => 'La categoría es obligatoria.',
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