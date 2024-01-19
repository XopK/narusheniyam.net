<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {

        if(!isset($request->sort)){
            $appl = $this->get_app();
        }else{
            $appl = $this->get_app('desc');
        }
        return view('admin.index', [
            'application' => $appl,
        ]);
    }

    protected function get_app($sort = 'asc')
    {

        return Application::orderBy('created_at', $sort)->get();
    }
}
