<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home', [
            'events' => Event::all(),
            'categories' => Category::all()
        ]);
    }

    public function about(){
        return view('about');
    }

    public function category(Category $category){

        return view('category', [
            'events' => $category->events,
            'category' => $category
        ]);
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

    public function details(Event $event){
        return view('event', [
            'event' => $event,
            'types' => Type::all()
        ]);
    }
}
