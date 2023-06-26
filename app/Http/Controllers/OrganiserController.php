<?php

namespace App\Http\Controllers;

use App\Models\Organiser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrganiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.organiser.index', ['organisers' => Organiser::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organiser.form', [
            'organiser' => new Organiser(),
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
        $data = $request->all();
        $data['id'] = (string) Str::uuid();

        $organiser = Organiser::create($data);
        if($organiser != null){
            return redirect()->route('organiser.index')->with('success', 'L\'organisateur a bien été ajoutée');
        }else{
            dd('erreur');
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
     * @param  Organiser $organiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Organiser $organiser)
    {
        return view('admin.organiser.form', [
            'organiser' => $organiser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Organiser $organiser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organiser $organiser)
    {
        $organiser->update($request->all());
        return redirect()->route('organiser.index')->with('success', 'L\'organisateur a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Organiser $organiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organiser $organiser)
    {
        $organiser->delete();
        return redirect()->route('organiser.index')->with('success', 'L\'organisateur a bien été supprimé');
    }
}
