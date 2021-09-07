<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalho_academicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 300);
            $table->enum('tipo', ['TCC', 'Artigo', 'Trabalho Academico']);
            $table->string('autor', 250);
            $table->string('orientador', 250);
            $table->date('data');
            $table->string('curso', 100);
            $table->string('idioma', 100);
            $table->integer('paginas');
            $table->text('resumo');
            $table->text('link');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalho_academicos');
    }
}
