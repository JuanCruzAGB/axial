<?php
    namespace App\Models\Blog;

    use App\User;
    use Illuminate\Database\Eloquent\Model;

    class Presentation extends Model{
        /** @var string - The table name. */
        protected $table = 'presentations';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_presentation';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'title', 'content', 'id_user',
        ];
        
        /** Get the User that match the PK. */
        public function user(){
            return $this->belongsTo(User::class, 'id_user', 'id_user');
        }
        
        /** @var array - Validation messages and rules. */
        public static $validation = [
            'create' => [
                //
            ], 'edit' => [
                'rules' => [
                    'title' => 'required|min:5|max:200',
                    'content' => 'required',
                ], 'messages' => [
                    'en' => [
                        'title.required' => 'The title is required.',
                        'title.min' => 'The title min length is :min.',
                        'title.max' => 'The title max length is :max.',
                        'content.required' => 'The content is required.',
                    ], 'es' => [
                        'title.required' => 'El título es obligatorio.',
                        'title.min' => 'El título debe tener al menos :min caracteres.',
                        'title.max' => 'El título no puede tener más de :max caracteres.',
                        'content.required' => 'El contenido es obligatorio.',
                    ],
                ],
            ],
        ];
    }