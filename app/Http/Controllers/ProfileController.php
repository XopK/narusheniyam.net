<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function application(){
        return view('application');
    }

    public function create_application(Request $request){
        $request->validate([
            'num_auto' => 'required',
            'description' => 'required',
        ],[
            'num_auto.required' => 'Поле обязательно для заполнения!',
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
            return redirect()->back()->with('success', 'Заявление подано!');
        }else{
            return redirect()->back()->with('error', 'Ошибка подачи!');
        }
    }
}
