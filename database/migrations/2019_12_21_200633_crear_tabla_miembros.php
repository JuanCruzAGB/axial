<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CrearTablaMiembros extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('miembros', function(Blueprint $table){
                $table->increments('id_miembro');
                $table->string('nombre');
                $table->string('titulo');
                $table->string('puesto');
                $table->string('imagen');
                $table->json('estudios');
                $table->text('cv');
                $table->text('link');
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
            Schema::dropIfExists('miembros');
        }
    }