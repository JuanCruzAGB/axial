<?php
    use App\User;
    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            if($user = User::find(1)){
                $data = [
                    'name' => 'Pepe Diaz',
                    'email' => 'ejemplo@correo.com',
                    'password' => \Hash::make('12345678'),
                    'slug' => 'pepe-diaz',
                    'picture' => 'users\1.jpg',
                    'id_presentation' => 1,
                ];
                $user->update($data);
            }else{
                $user = User::create([
                    'name' => 'Pepe Diaz',
                    'email' => 'ejemplo@correo.com',
                    'password' => \Hash::make('12345678'),
                    'slug' => 'pepe-diaz',
                    'picture' => 'users\1.jpg',
                    'id_presentation' => 1,
                ]);
            }
        }
    }