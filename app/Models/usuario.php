<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
  //  use HasFactory;

    protected $fillable = ['nome','senha','email','sexo','nascimento','endereco','numero','estado','cidade','grau','mensagem','cor','quantidade','precoTotal'];


}
