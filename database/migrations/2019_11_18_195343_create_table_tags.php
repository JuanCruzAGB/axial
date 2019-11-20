<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTableTags extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('tags', function(Blueprint $table){
                $table->increments('id_tag');
                $table->string('name');
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
            Schema::dropIfExists('tags');
        }
    }