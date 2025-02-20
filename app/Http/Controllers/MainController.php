<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function index()
    {
        echo "Estou dentro da aplicação";
    }

    public function newnote(){
        echo 'Nova nota';
    }
}
