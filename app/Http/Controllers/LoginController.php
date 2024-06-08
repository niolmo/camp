<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function reg()
    {
        return view('singup');

    }

    public function mac( Request $request)
    {
        //Валидация формы
        $request->validate([
            'name'=>['required','min:3','max:250'],
            'email'=>['required','email','min:3','max:250','unique:users'],
            'password'=>['required', 'confirmed'],
        ]);

        //Сообщение после регистрации

        $user=User::create($request->all());
        //Событие регистрации
        event(new Registered($user));
        //Аутентификация
        Auth::login($user);
        return redirect()->route('verification.notice')->with('success', 'Спасибо за регистрацию!');

//        dd($request->all()); //распечатка данных при регистрации

    }

    public function login()
    {
        return view('login');
    }

    public function loginauth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'Добро пожаловать ' .Auth::user()->name);
        }
        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не аерны.',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::logout();
        return  redirect()->route('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
};


