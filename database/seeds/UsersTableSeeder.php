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
                    'name' => 'grupoaxi',
                    'email' => 'info@grupoaxial.org',
                    'password' => \Hash::make('characarca19'),
                    'slug' => 'grupoaxi',
                    'picture' => 'users\1.jpg',
                    'id_presentation' => 1,
                ];
                $user->update($data);
            }else{
                $user = User::create([
                    'name' => 'grupoaxi',
                    'email' => 'info@grupoaxial.org',
                    'password' => \Hash::make('characarca19'),
                    'slug' => 'grupoaxi',
                    'picture' => 'users\1.jpg',
                    'id_presentation' => 1,
                ]);
            }
        }
    }