<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function cadastro()
    {
        $user = Auth::user();
        return view('cadastro')->with('users', $user);

    }

    public function menu()
    {
        $user = Auth::user();
        return view('home')->with('users', $user);

    }
}
