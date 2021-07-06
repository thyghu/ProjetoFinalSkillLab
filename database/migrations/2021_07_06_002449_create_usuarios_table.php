<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string ('nome',255);
            $table-> string ('senha',255);
            $table-> string ('email',255);
            $table-> string ('sexo',255);
            $table-> string ('nascimento',255);
            $table-> string ('endereco',255);
            $table-> string ('numero',255);
            $table-> string ('estado',255);
            $table-> string ('cidade',255);
            $table-> string ('grau',255);
            $table-> string ('mensagem',255);
            $table-> string ('cor',255);
            $table-> string ('quantidade',255);
            $table-> string ('precoTotal',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
