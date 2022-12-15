<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    public function sesionlogin(Request $request)
    {
        $email = $request->get('email');
        $pass = $request->get('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($pass, $user->password)) {
            session()->put('email',$email);
            return Redirect::to('/products');
        } else {
            return redirect()->back()->withErrors([
                'invalid-credentials' => 'Usuario o contraseña incorrectos.'
            ]);
        }
    }

    public function forgot(){

    }

    public function signup(){
        return view('signup');
    }

    public function register(Request $request)
    {
        User::create($request->all());
        session()->put('email',$request->get('email'));
        return Redirect::to('/products');    }
}
