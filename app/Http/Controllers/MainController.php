<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

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

        try{
            $id = Crypt::decrypt($id);
            echo 'Editando nota ' . $id;

        } catch(DecryptException $e){
            return redirect()->route('home');
        }

    }

    public function deleteNote($id){
        try{
            $id = Crypt::decrypt($id);
            echo 'Editando nota ' . $id;

        } catch(DecryptException $e){
            return redirect()->route('home');
        }
    }
}
