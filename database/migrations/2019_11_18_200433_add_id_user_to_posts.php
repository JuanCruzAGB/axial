<?php
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddIdUserToPosts extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            /* Schema::table('posts', function(Blueprint $table){
                $table->foreign('id_user')->references('id_usuario')->on('usuarios');
            }); */
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            //
        }
    }