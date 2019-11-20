<?php
    use App\User as Usuario;
    use Illuminate\Database\Seeder;

    class UsuariosTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            $usuario = Usuario::create([
                'nombre' => 'Pepe Diaz',
                'correo' => 'ejemplo@correo.com',
                'clave' => \Hash::make('12345678'),
                'slug' => 'pepe-diaz',
            ]);
        }
    }