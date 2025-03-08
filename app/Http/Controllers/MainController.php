<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{
    public function index()
    {

        //load user routes
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();

        //load user routes
        return view('home', ['notes' => $notes]);
    }

    public function newnote(){
        echo 'Nova nota';
    }
}
