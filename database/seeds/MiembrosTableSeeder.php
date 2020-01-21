<?php
    use App\Models\Blog\Miembro;
    use Illuminate\Database\Seeder;

    class MiembrosTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            $miembro = Miembro::create([
                'nombre' => 'Pepe Diaz',
                'titulo' => 'Superheroe de oficina',
                'puesto' => 'Jefazo',
                'imagen' => 'miembros/5qKiIf6fKpxmZs09KQBZ8tmLeGD0i6ECHKvCGHFw.jpeg',
                'cv' => '<p>La gente se lo suele confundir con <strong>Batman</strong>&nbsp;debido a que su apellido es&nbsp;<strong>Diaz</strong>&nbsp;al igual que&nbsp;<strong>Bruno Diaz</strong>&nbsp;(osea <strong>Batman</strong>, para los brutos que no sepan)</p>',
                'link' => 'https://www.youtube.com/?gl=AR&hl=es-419',
                'slug' => 'pepe-diaz',
                'id_usuario' => 1,
            ]);
            $miembro = Miembro::create([
                'nombre' => 'Manolo Solo',
                'titulo' => 'Administración de peces',
                'puesto' => 'Capitán',
                'imagen' => 'miembros/AzLDbVXQBTyzLPzHlJSDxYGBOGutz6bXjIgcqROK.png',
                'cv' => '<p>Es un simple pescador que tiene serios problemas de vision.</p>

                <p>Se confunde a su mejor amigo&nbsp;<strong>CON UN GATO</strong></p>
                
                <p>&iquest;Que otra cosa te podes esperar?</p>',
                'link' => null,
                'slug' => 'manolo-solo',
                'id_usuario' => 1,
            ]);
        }
    }
