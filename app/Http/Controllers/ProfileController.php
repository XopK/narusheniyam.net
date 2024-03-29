<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $application = Auth::user()->get_application()->with('get_status')->paginate(5);
        return view('profile', ['application' => $application]);
    }

    public function application(){
        return view('application');
    }

    public function create_application(Request $request){
        $request->validate([
            'num_auto' => 'required|regex:/[А-Яа-яЁё]\d{3}[А-Яа-яЁё]{2}\d{2,3}/u',
            'description' => 'required',
        ],[
            'num_auto.required' => 'Поле обязательно для заполнения!',
            'num_auto.regex' => 'Введите действительный формат!',
            'description.required' => 'Поле обязательно для заполнения!',
        ]);

        $appData = $request->all();
        $user = Auth::user()->id;

        $application = Application::create([
            'number_auto' => $appData['num_auto'],
            'violation' => $appData['description'],
            'id_status' => 1,
            'id_user' => $user,
        ]);

        if($application){
            return redirect()->back()->with('success', 'Заявление подана!');
        }else{
            return redirect()->back()->with('error', 'Ошибка подачи!');
        }
    }
}
