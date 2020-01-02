<?php
    namespace App\Models\Blog;

    use App\Models\Blog\Miembro;
    use Illuminate\Database\Eloquent\Model;

    class Estudio extends Model{
        /** @var string - The table name. */
        protected $table = 'estudios';
        
        /** @var string - The PK name. */
        protected $primaryKey = 'id_estudio';

        /** @var array - The attributes that are mass assignable. */
        protected $fillable = [
            'titulo', 'id_miembro',
        ];
        
        /** Get the User that match the PK. */
        public function miembro(){
            return $this->belongsTo(Miembro::class, 'id_miembro', 'id_miembro');
        }
    }