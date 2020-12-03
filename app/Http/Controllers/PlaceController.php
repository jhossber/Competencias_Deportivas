<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place= Place::orderby('place_id','ASC')->paginate(5);
        return view('place.index',[
                    'places'=>$place,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place;
        $place->name = $request->name;
        $place->description = $request->description;
        $place->location = $request->location;
        $place->save();

        return redirect()->route('place.index');
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
        $place = Place::find($id);

        return view('place.editar',[
                    'place'=>$place,
        ]);
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
        $place = Place::findOrfail($id);
        $place->name = $request->name;
        $place->description = $request->description;
        $place->location = $request->location;
        $place->update();

        return redirect()->route('place.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $place = Place::findOrfail($id);
        $place->state = ($place->state ? 0 : 1);
        $place->update();
        return redirect()->route('place.index');
    }

    public function searchPlace(Request $request){
        $place = Place::orderby('place_id','DESC')
                ->where('name', 'like', "%$request->buscar%")
                ->paginate(5);

        return view('place.index',[
                    'places'=>$place,
                    'search'=>$request->buscar,
                ]
                );

    }
}
