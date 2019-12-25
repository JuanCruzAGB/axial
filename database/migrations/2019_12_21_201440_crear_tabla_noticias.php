<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CrearTablaNoticias extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('noticias', function(Blueprint $table){
                $table->increments('id_noticia');
                $table->string('titulo');
                $table->string('imagen');
                $table->text('contenido');
                $table->unsignedInteger('id_usuario');
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
            Schema::dropIfExists('noticias');
        }
    }