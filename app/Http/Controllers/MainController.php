<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function index()
    {
        //load user routes
        return view('home');
    }

    public function newnote(){
        echo 'Nova nota';
    }
}
