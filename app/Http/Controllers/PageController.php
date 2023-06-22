<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function category(){
        return view('category');
    }

    public function event(){
        return view('event');
    }

    public function faq(){
        return view('faq');
    }

    public function confidentialite(){
        return view('confidentialite');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
}
