<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Forum';
        return view('pages.index',) ->with('title', $title);
    }

    public function login(){
        $title = 'Login';
        return view('pages.login') ->with('title', $title);
    }

    public function register(){
        $title = 'Register';
        return view('pages.register') ->with('title', $title);
    }
}
