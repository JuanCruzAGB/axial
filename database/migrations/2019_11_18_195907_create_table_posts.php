<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTablePosts extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('posts', function(Blueprint $table){
                $table->increments('id_post');
                $table->string('title');
                $table->text('body');
                $table->unsignedInteger('id_category');
                $table->unsignedInteger('id_user');
                $table->string('slug');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('posts');
        }
    }