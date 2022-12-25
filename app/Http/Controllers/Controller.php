<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    // verificacion sesion usuario
    public function sesionlogin(Request $request)
    {
        $email = $request->get('email');
        $pass = $request->get('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($pass, $user->password)) {
            auth()->login($user);

            return Redirect::to('/products');
        } else {
            return redirect()->back()->withErrors([
                'invalid-credentials' => 'Usuario o contraseña incorrectos.'
            ]);
        }
    }

    public function signup()
    {
        return view('signup');
    }

    public function profile(User $user)
    {
        return view('profile');
    }

    public function register(Request $request)
    {
            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = User::create($request->all());

            //
            $user = auth()->login($user);

            return Redirect::to('/products');

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
