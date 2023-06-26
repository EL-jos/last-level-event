<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Image;
use App\Models\Organiser;
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

            if ($request->path_large->isValid() && $request->path_miniature->isValid()){

                $currentDateTime = Carbon::now();
                $formattedDateTime = $currentDateTime->format('Ymd_His');

                $path_large = $formattedDateTime . '.' . $request->path_large->getClientOriginalExtension();
                $path_miniature = $formattedDateTime . '.' . $request->path_miniature->getClientOriginalExtension();

                $request->path_large->move(public_path('events'), $path_large);
                $request->path_miniature->move(public_path('events'), $path_miniature);

                $data[] = [
                    'path_large' => "events/" . $path_large,
                    'path_miniature' => "events/" . $path_miniature,
                    'event_id' => $event->id,
                ];
            }

            //dd($event);
            Image::insert($data);

            return redirect()->route('event.index')->with('success', 'L\'événement a bien été ajoutée');
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
