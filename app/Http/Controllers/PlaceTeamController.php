<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaceTeam;
use App\Team;
use App\Place;
use Illuminate\Support\Facades\DB;

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
        $teams = Team::all();
        $places = Place::all();

        return view('fixture.create', [
           'teams' => $teams,
           'places' => $places,
        ]
        );



        $players = Team::pluck('name')->all();
        // $roles = Role::pluck('id','name')->all();
        // return $teams;

        // $players = array('A','B','C','D');
        // return $players;

        // $matchs = array();
        // $matchs = [];

        // foreach($players as $k){
        //     foreach($players as $j){
        //         if($k == $j){
        //             continue;
        //         }
        //         $z = array($k,$j);
        //         sort($z);
        //         if(!in_array($z,$matchs)){
        //             $matchs[] = $z;
        //         }
        //     }
        // }
        // print_r($matchs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fixture = new PlaceTeam;
        $fixture->team_one = $request->team_one;
        $fixture->team_two = $request->team_two;
        $fixture->place_id = $request->place;

        $fixture->date_time = $request->date_time;
        $fixture->date_game = $request->date_game;

        $fixture->save();
        return redirect()->route('fixture.index');
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
        // $teamscategories = DB::table('sgcd_teams')
        // ->join('sgcd_categories', 'sgcd_categories.category_id', '=' ,'sgcd_teams.category_id')
        // ->select('sgcd_categories.category_id as id_category', 'sgcd_categories.name as namecategory', DB::raw('count(sgcd_teams.team_id) as nroteams'))
        // ->where('category_id', $id)
        // ->groupBy('sgcd_categories.name')
        // // ->orderBy('nroteams', 'DESC')
        // ->get();

        $fixture = PlaceTeam::with('teams', 'places')->findOrfail($id);
        $teams = Team::all();
        $places = Place::all();

        return view('fixture.editar', [
           'teams' => $teams ,
           'fixture' => $fixture,
           'places' => $places,
        ]);


        // $teamc = Team::orderby('team_id','DESC')
        //         ->where('category_id', '=', "$id")
        //         ->get();

        // $count = 1;
        // //         // ->paginate(5);
        // return view('fixture.editar',[
        //     'teamc' => $teamc,
        //     'count' => $count,
        // ]);

        // return +$teamc;


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
