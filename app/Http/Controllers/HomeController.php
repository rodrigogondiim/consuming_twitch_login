<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {   
        return view('welcome');
    }
    
    public function Log()
    {
        $this->getUser();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
