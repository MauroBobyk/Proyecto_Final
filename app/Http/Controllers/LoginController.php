<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function register(Request $request){
        //Validar los datos

        $user = new User();

        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect('administrador');
    }


    public function login(Request $request){
        $credentials = [
            "name" => $request->name,
            "password" => $request->password,

        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->name === 'Administrador') {
                return redirect('InicioAdmin');
            } else {
                return redirect('InicioPaciente');
            }

        }else {
            return redirect('login');
        }
        
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }

}
