<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Post;
    use App\Models\Blog\Tag;

    class Feature extends Model{
        /** @var string - The table name. */
        protected $table = 'features';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_feature';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'id_tag', 'id_post',
        ];
        
        /** Get the Tag that match the PK. */
        public function tag(){
            return $this->belongsTo(Tag::class, 'id_tag', 'id_tag');
        }
        
        /** Get the Posts that match the PK. */
        public function post(){
            return $this->belongsTo(Publicacion::class, 'id_post', 'id_post');
        }
    }