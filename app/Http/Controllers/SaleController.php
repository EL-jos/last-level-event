<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sale;
use App\Models\Type;
use App\Models\User;
use App\Notifications\RequestSaleConfirmed;
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
        //dd(Sale::all()->first()->user->username);
        return view('admin.sale.index', ['sales' => Sale::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sale.form', [
            'sale' => new Sale(),
            'users' => User::all(),
            'events' => Event::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (session()->has('user') && $request->input('user_id') === null){

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

        }elseif (!session()->has('user') && $request->input('user_id') !== null){

            $data = $request->all();
            $data['id'] = (string) Str::uuid();
            $sale = Sale::create($data);

            if ($sale != null){
                return redirect()->route('sale.index')->with('success', 'La vente a bien été ajoutée');
            }

        }else{
            return redirect()->route('login.page')->with('warning', "Pour profiter pleinement de notre plateforme et accéder à toutes ses fonctionnalités, veuillez vous connecter à votre compte.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return view('ticket.show', [
            'sale' => $sale
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        return view('admin.sale.form', [
            'sale' => $sale,
            'users' => User::all(),
            'events' => Event::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sale.index')->with('success', 'La vente a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sale.index')->with('success', 'La vente a bien été supprimé');
    }

    /**
     * @param Sale $sale
     */
    public function confirm(Sale $sale){

        $sale->status = true;
        if ($sale->save()){
            /** @var User $user */
            $user = User::find($sale->user->id);
            $user->notify(new RequestSaleConfirmed($sale));
            return redirect()->route('sale.index')->with('success', 'La vente a bien été confirmé');
        }else{
            dd('Erreur');
        }
    }
}
