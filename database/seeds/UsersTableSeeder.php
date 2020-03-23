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
            $user = User::create([
                'name' => 'Dummy',
                'email' => 'ejemplo@correo.com',
                'password' => \Hash::make('12345678'),
                'slug' => 'dummy',
                'picture' => 'users\1.jpg',
                'id_presentation' => 1,
            ]);
        }
    }