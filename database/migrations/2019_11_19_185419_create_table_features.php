<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTableFeatures extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('features', function(Blueprint $table){
                $table->increments('id_feature');
                $table->unsignedInteger('id_post');
                $table->foreign('id_post')->references('id_post')->on('posts');
                $table->unsignedInteger('id_tag');
                $table->foreign('id_tag')->references('id_tag')->on('tags');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('features');
        }
    }