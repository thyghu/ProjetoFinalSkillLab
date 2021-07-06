<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('usuarios',function(Blueprint $table)
        {
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

}