<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Category;
use App\Models\Event;
use App\Models\Sex;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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

    public function category($ids){
        $queryParams = [];
        parse_str($ids, $queryParams);

        $ids = $queryParams['ids'];
        $events = Event::whereHas('categories', function ($query) use ($ids) {
            $query->whereIn('categories.id', $ids);
        })->with(['categories' => function ($query) use ($ids) {
            $query->whereIn('categories.id', $ids);
        }])->get();

        $categoryNames = $events->flatMap(function ($event) {
            return $event->categories->pluck('name');
        });

        $categoryNames = $categoryNames->unique();

        return view('category', [
            'events' => $events,
            'categories' => $categoryNames
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

    public function register(Event $event = null){

        return view('register', [
            'sexes' => Sex::all()
        ]);
    }

    public function login(Event $event){

        return view('login');
    }

    public function details(Event $event){
        return view('event', [
            'event' => $event,
            'types' => Type::all()
        ]);
    }

    public function contact(){
        return view('contact');
    }

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function contactUs(Request $request){
        $validators = Validator::make($request->all(), [
            'lastname' => 'required|min:3',
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|exists:users,email',
            'phone' => 'required|regex:/^\+243[ _-]?([0-9]{3}[ _-]?){3}$/',
            'subject' => 'required|in:Suggestion,Réclamation,Demande d\'information',
            'content' => 'required|min:6',
        ]);
        $errors = $validators->errors();
        if($validators->fails()){
            return back()->withErrors($errors)->withInput();
        }

        // Envoyer l'e-mail
        Mail::to('destinataire@example.com')->send(new ContactFormMail($request->all()));

        if (empty(Mail::failures())) {
            // L'envoi du courrier électronique a réussi
            return redirect()->back()->with('success', 'L\'e-mail a été envoyé avec succès !');
        } else {
            // L'envoi du courrier électronique a échoué
            return redirect()->back()->with('error', 'Erreur lors de l\'envoi de l\'e-mail. Veuillez réessayer.');
        }

    }
}
