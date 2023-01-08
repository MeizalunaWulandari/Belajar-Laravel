<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index($value='')
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

}
