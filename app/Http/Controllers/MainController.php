<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Operations;

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

    public function editNote($id){
        //$id = $this->decryptId($id);
        $id = Operations::decryptId($id);
        echo "Editando nota  = $id";

    }

    public function deleteNote($id){
        $id = Operations::decryptId($id);
        echo "Deletando nota  = $id";

    }

}
