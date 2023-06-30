<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Image;
use App\Models\Organiser;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index', ['events' => Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.form', [
            'event' => new Event(),
            'categories' => Category::all(),
            'organisers' => Organiser::all()
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

        $event = Event::create($data);

        if($event != null){

            $event->categories()->attach($request->input("category_id"));

            if($data['price_standard']){

                $idPrice = (string) Str::uuid();

                $price = Price::create([
                    'id' => $idPrice,
                    'amount' => $data['price_standard'],
                    'type_id' => 1
                ]);

                if ($price != null){
                    $event->prices()->attach($idPrice);
                }

            }

            if($data['price_vip']){

                $idPrice = (string) Str::uuid();

                $price = Price::create([
                    'id' => $idPrice,
                    'amount' => $data['price_vip'],
                    'type_id' => 2
                ]);

                if ($price != null){
                    $event->prices()->attach($idPrice);
                }

            }

            if ($request->path_large->isValid() && $request->path_miniature->isValid()){

                $currentDateTime = Carbon::now();
                $formattedDateTime = $currentDateTime->format('Ymd_His');

                $path_large = $formattedDateTime . '.' . $request->path_large->getClientOriginalExtension();
                $path_miniature = $formattedDateTime . '.min.' . $request->path_miniature->getClientOriginalExtension();

                $request->path_large->move(public_path('events'), $path_large);
                $request->path_miniature->move(public_path('events'), $path_miniature);

                $data = [
                    'id' => (string) Str::uuid(),
                    'path_large' => "events/" . $path_large,
                    'path_miniature' => "events/" . $path_miniature,
                    'event_id' => $event->id,
                ];

                $image = Image::create($data);
                if($image != null){
                    return redirect()->route('event.index')->with('success', 'L\'événement a bien été ajoutée');
                }else{
                    dd('erreur');
                }
            }else{
                dd('erreur');
            }

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
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.form', [
            'event' => $event,
            'categories' => Category::all(),
            'organisers' => Organiser::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {

        $isOk = $event->update($request->only(
            ['title', 'date', 'time', 'duration', 'location', 'organiser_id', 'description']
        ));
        if($isOk){

            $event->categories()->sync($request->input("category_id"));

            if($request->input('price_standard')){

                $price = Price::firstOrNew(['type_id' => 1]);

                if ($price->exists) {
                    $price->amount = $request->input('price_standard');
                }else{
                    $price->id = (string) Str::uuid();
                    $price->amount = $request->input('price_standard');
                }

                $price->save();

                if ($price->wasRecentlyCreated) {
                    // Le modèle a été récemment créé
                    // Faire quelque chose en cas de création
                    $event->prices()->attach($price->id);
                } else {
                    // Le modèle existait déjà et a été mis à jour
                    // Faire quelque chose en cas de mise à jour
                }
            }

            if($request->input('price_vip')){

                $price = Price::firstOrNew(['type_id' => 2]);

                if ($price->exists) {
                    $price->amount = $request->input('price_vip');
                }else{
                    $price->id = (string) Str::uuid();
                    $price->amount = $request->input('price_vip');
                }

                $price->save();

                if ($price->wasRecentlyCreated) {
                    // Le modèle a été récemment créé
                    // Faire quelque chose en cas de création
                    $event->prices()->attach($price->id);
                } else {
                    // Le modèle existait déjà et a été mis à jour
                    // Faire quelque chose en cas de mise à jour
                }
            }

            if (isset($request->path_large)){
                if ($request->path_large->isValid()){

                    $currentDateTime = Carbon::now();
                    $formattedDateTime = $currentDateTime->format('Ymd_His');

                    $path_large = $formattedDateTime . '.' . $request->path_large->getClientOriginalExtension();
                    //$path_miniature = $formattedDateTime . '.min.' . $request->path_miniature->getClientOriginalExtension();

                    $request->path_large->move(public_path('events'), $path_large);
                    //$request->path_miniature->move(public_path('assets/events'), $path_miniature);
                    $image = Image::find($event->image->id);
                    if ($image != null){
                        $image->path_large = "events/" . $path_large;
                        $image->save();
                    }

                }else{
                    dd('erreur');
                }
            }

            if (isset($request->path_miniature)){
                if ($request->path_miniature->isValid()){

                    $currentDateTime = Carbon::now();
                    $formattedDateTime = $currentDateTime->format('Ymd_His');

                    //$path_large = $formattedDateTime . '.' . $request->path_large->getClientOriginalExtension();
                    $path_miniature = $formattedDateTime . '.min.' . $request->path_miniature->getClientOriginalExtension();

                    //$request->path_large->move(public_path('assets/events'), $path_large);
                    $request->path_miniature->move(public_path('events'), $path_miniature);

                    $image = Image::find($event->image->id);
                    if ($image != null){
                        $image->path_miniature = "events/" . $path_miniature;
                        $image->save();
                    }

                }else{
                    dd('erreur');
                }
            }

            return redirect()->route('event.index')->with('success', 'L\'article a bien été modifié');
        }else{
            dd('ERRUR');
        }
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
