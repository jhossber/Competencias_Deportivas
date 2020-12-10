<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Point;
use App\Team;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$points = Point::orderBy('point_id', 'ASC')->paginate(5);
        //return view('points.index', [
        //   'points' => $points,
        //]);
        $points = DB::table('sgcd_points')
        ->join('sgcd_teams', 'sgcd_teams.team_id', '=' ,'sgcd_points.team_id')
        ->select('sgcd_points.point_id','sgcd_points.win', 'sgcd_points.lose', 'sgcd_points.walkover','sgcd_points.state','sgcd_teams.name')
        ->paginate(5);
        //return $points;
        return view('points.index', [
           'points' => $points,
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
        return view('points.create', [
           'teams' => $teams,
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $point = new Point;
        $point->team_id = $request->team;
        $point->win = $request->win;
        $point->lose = $request->lose;
        $point->walkover = $request->walkover;
        $point->save();
        return redirect()->route('point.index');
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
        $point = Point::with('team')->findOrfail($id);
        $teams = Team::all();
        return view('points.editar', [
           'teams' => $teams ,
           'point' => $point ,
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
        $point = Point::findOrfail($id);
        $point->team_id = $request->team;
        $point->win = $request->win;
        $point->lose = $request->lose;
        $point->walkover = $request->walkover;
        $point->update();
        return redirect()->route('point.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $point = Point::findOrfail($id);
        $point->state = ($point->state ? 0 : 1);
        $point->update();
        return redirect()->route('point.index');
    }
    public function searchPoint(Request $request){
        $points = DB::table('sgcd_points')
        ->join('sgcd_teams', 'sgcd_teams.team_id', '=' ,'sgcd_points.team_id')
        ->select('sgcd_points.point_id','sgcd_points.win', 'sgcd_points.lose', 'sgcd_points.walkover','sgcd_points.state','sgcd_teams.name')
        ->where('sgcd_teams.name', 'like', "%$request->buscar%")
        ->paginate(5);
//        return $points;
        return view('points.index',[
//                    'teams' => $team ,
                    'points' => $points ,
                    'search'=>$request->buscar,
                ]
                );
    }
}
