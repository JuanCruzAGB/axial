<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class EditUsersTable extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::dropIfExists('usuarios');
            Schema::create('users', function (Blueprint $table){
                $table->bigIncrements('id_user');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('picture');
                $table->unsignedInteger('id_presentation');
                $table->string('slug');
                $table->rememberToken();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('users');
        }
    }