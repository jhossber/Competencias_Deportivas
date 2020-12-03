<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaceTeam;
use App\Team;
use App\Place;

class PlaceTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $fixtures = PlaceTeam::orderBy('place_team_id', 'ASC')->paginate(5);
        // $fixtures = PlaceTeam::orderBy('place_team_id', 'ASC')->get();
        $fixtures = PlaceTeam::with('teams')->get();
        // $fixtures = PlaceTeam::all();

        // foreach($fixtures as $valor){
        //     echo $a = $valor;
        // }

        // $fixtures->teams;

        // return $fixtures;


        return view('fixture.index', compact('fixtures'));

        return view('fixture.index', [
            'fixtures' => $fixtures,
            // 'teams_id'   => $teams_id,
            // 'teams'    => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Team::pluck('name')->all();
        // $roles = Role::pluck('id','name')->all();
        // return $teams;

        // $players = array('A','B','C','D');
        // return $players;

        // $matchs = array();
        $matchs = [];

        foreach($players as $k){
            foreach($players as $j){
                if($k == $j){
                    continue;
                }
                $z = array($k,$j);
                sort($z);
                if(!in_array($z,$matchs)){
                    $matchs[] = $z;
                }
            }
        }

        // print_r($matchs);
        return $matchs;
        dd();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
