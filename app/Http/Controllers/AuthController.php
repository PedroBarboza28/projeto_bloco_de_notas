<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {

        // form validation
         $request->validate([
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:16',
         ],
         // error messages
 [
            'text_username.required' => 'O email é obrigatório',
            'text_username.email' => 'Insira um email válido',
            'text_password.required' => 'A senha é obrigatória',
            'text_password.min' => 'A senha deve ter pelo menos 6 caracteres',
            'text_password.max' => 'A senha deve ter no máximo 16 caracteres',
         ]
        );

         // get user input
         $username = $request->input('text_username');
         $password = $request->input('text_password');

         $user = User::where('username', $username)
         ->where('deleted_at', null)
         ->first();

         if(!$user) {
            return
            redirect()
            ->back()
            ->withInput()
            ->with('loginError', 'Usuário ou senha inválidos');
         }

         // check if password is correct
         //password_veryfy é uma função nativa do php que compara as senhas inserida pelo o usuário com
         // a senha armazenada no banco
         if(!password_verify($password, $user->password)) {
            return
            redirect()
            ->back()
            ->withInput()
            ->with('loginError', 'senha inválida');
         }

         //update last login
         $user->last_login = date('Y-m-d H:i:s');
         $user->save();

         // login user
         session([
            'user' => [
            'id' => $user->id,
            'username' => $user->username]
        ]);

        // rederect to home
        return redirect()->to('/');

    //      //obtém todos os usuários do banco de dados
    // $userModel = new User();
    // $users = $userModel::all()->toArray();
    // echo '<pre>'; // formata o array
    // print_r($users); // busca os dados da trabela e imprime na tela

    }


    public function logout()
    {
        // logout from the application
        session()->forget('user');
        return redirect()->to('/login');
    }
}
