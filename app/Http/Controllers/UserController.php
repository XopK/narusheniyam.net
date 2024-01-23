<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signup()
    {
        return view('signUp');
    }

    public function signup_valid(Request $request)
    {
        $request->validate([
            'login' => 'required|unique:users',
            'password' => 'required|min:6',
            'name' => 'required|regex:/[А-Яа-яЁё]/u',
            'phone' => 'required|regex:/\+7\([0-9][0-9][0-9]\)[0-9]{3}(\-)[0-9]{2}(\-)[0-9]{2}$/',
            'email' => 'required|email',
        ], [
            'login.required' => 'Заполните поле!',
            'password.required' => 'Заполните поле!',
            'name.required' => 'Заполните поле!',
            'name.regex' => 'Только русские символы!',
            'phone.required' => 'Заполните поле!',
            'phone.regex' => 'Введите требуемый формат!',
            'email.required' => 'Заполните поле!',
            'login.unique' => 'Данный логин занят!',
            'password' => 'Ваш пароль должен содержать минимум 6 символов!',
            'email.email' => 'Введите действительный адрес электроной почты!',
        ]);

        $userData = $request->all();

        $parts = explode(' ', $userData['name']);

        $user = User::create([
            'login' => $userData['login'],
            'password' => Hash::make($userData['password']),
            'name' => $parts[1],
            'surname' => $parts[0],
            'patronymic' => $parts[2],
            'id_role' => 2,
            'phone' => $userData['phone'],
            'email' => $userData['email'],
        ]);
        Auth::login($user);
        if ($user) {
            return redirect('profile')->with('success', "Успешная регистрация");
        } else {
            return redirect('signup');
        }
    }


    public function signin_valid(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ], [
            'login.required' => 'Заполните поле!',
            'password.required' => 'Заполните поле!',
        ]);

        $userData = $request->all();

        if (Auth::attempt([
            'login' => $userData['login'],
            'password' => $userData['password'],
        ])) {
            if (Auth::user()->id_role == 1) {
                return redirect('admin');
            } else {
                return redirect('profile')->with('success', 'Успешная авторизация!');
            }
        } else {
            return redirect()->back()->with('error', 'Ошибка авторизации');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
