<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class EditPostsTable extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
           /*  Schema::table('posts', function(Blueprint $table){
                $table->foreign('id_user')->references('id_user')->on('users');
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