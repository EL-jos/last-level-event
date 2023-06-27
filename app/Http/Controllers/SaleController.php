<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Session::forget('user');
        if (session()->has('user')){

            $sale = new Sale();
            $sale->id = (string) Str::uuid();
            $sale->ref = $request->input('ref');
            $sale->user_id = session()->get('user')['id'];
            $sale->event_id = $request->input('event_id');
            $sale->quantity = $request->input('quantity');
            $sale->type_id = $request->input('type_id');

            if ($sale->save()){
                return redirect()->back()->with('success', 'Votre demande a été reçue. Une confirmation vous sera envoyée par e-mail et par WhatsApp.');
            }else{
                return redirect()->back()->with('error', 'Une erreur s\'est produite lors de la réception de votre demande. Veuillez réessayer ultérieurement.');
            }

        }else{
            return redirect()->route('login.page')->with('warning', "Pour profiter pleinement de notre plateforme et accéder à toutes ses fonctionnalités, veuillez vous connecter à votre compte.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
