<?php
    use App\Models\Blog\Presentation;
    use Illuminate\Database\Seeder;

    class PresentationsTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            if($presentation = Presentation::find(1)){
                $data = [
                    'title' => 'Example presentation\'s title',
                    'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam suscipit totam, sit autem eaque aperiam dicta accusantium laudantium quibusdam deleniti asperiores repellendus tempore quod delectus hic dolor doloremque, quisquam impedit.',
                    'id_user' => 1,
                ];
                $presentation->update($data);
            }else{
                $presentation = Presentation::create([
                    'title' => 'Example presentation\'s title',
                    'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam suscipit totam, sit autem eaque aperiam dicta accusantium laudantium quibusdam deleniti asperiores repellendus tempore quod delectus hic dolor doloremque, quisquam impedit.',
                    'id_user' => 1,
                ]);
            }
        }
    }