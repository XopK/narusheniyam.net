<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function signup(){
        return view('signUp');
    }

    public function signup_valid(Request $request){
        $request->validate([
            'login' => 'required|unique:users',
            'password' => 'required|min:6',
            // 'name' => 'required|regex:/^[А-Яа-яЁё\s\n]+$/',
            // 'surname' => 'required|regex:/^[А-Яа-яЁё\s\n]+$/',
            // 'patronymic' => 'required|regex:/^[А-Яа-яЁё\s\n]+$/',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $userData = $request->all();

        $user = User::create([
            'login' => $userData['login'],
            'password' => Hash::make($userData['password']),
            'name' => $userData['name'],
            'surname' => $userData['surname'],
            'patronymic' => $userData['patronymic'],
            'role' => 'Пользователь',
            'phone'=> $userData['phone'],
            'email' => $userData['email'],
        ]);

        if($user){
            return redirect('signin')->with('success', "Успешная регистрация");
        }else{
            return redirect('signup');
        }
    }
}
