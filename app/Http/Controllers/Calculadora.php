<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculadora extends Controller
{
    public function index()
    {
        $nome = 'Thiago David';

        $nota1 = 8;
        $nota2 = 7;
        $nota3 = 9;

        $media = ($nota1 + $nota2 + $nota3)/3;

        return view('calc', compact('nome','nota1','nota2','nota3','media'));
    }
}

?>
