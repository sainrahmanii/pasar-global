<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FormAdmin;
use Illuminate\Http\Request;

class HomeController extends Controller
{    
    public function index()
    {
        return view('user.layout.selling');
    }

    public function create()
    {
        // $item = FormAdmin::all();
        return view('user.layout.form');
    }
}
