<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{
    public function index()
    {

        //load user routes
        $id = session('user.id');
        $user = User::find($id)->toArray();
        $notes = User::find($id)->notes()->get()->toArray();

        echo'<pre>';
        print_r($user);
        print_r($notes);

        die();
        
        //load user routes
        return view('home');
    }

    public function newnote(){
        echo 'Nova nota';
    }
}
