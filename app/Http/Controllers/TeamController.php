<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Category;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teamsLink = Team::orderBy('team_id', 'ASC')->paginate(2);

        $teams = DB::table('sgcd_teams')
        ->join('sgcd_categories', 'sgcd_categories.category_id', '=' ,'sgcd_teams.category_id')
        ->select('sgcd_teams.team_id', 'sgcd_teams.name', 'sgcd_teams.description', 'sgcd_teams.state', 'sgcd_categories.name as namecategory')
        ->paginate(5);

        return view('team.index', [
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('team.create', [
            'categories' => $categories,
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
        $teams = new Team;

        $teams->category_id = $request->category;
        $teams->name = $request->name;
        $teams->description = $request->description;

        $teams->save();
        return redirect()->route('team.index');
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
        $teams = Team::with('category')->findOrfail($id);
        $categories = Category::all();

        return view('team.editar',[
            'team' => $teams,
            'categories' => $categories,
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
        $teams = Team::find($id);

        $teams->category_id = $request->category;

        $teams->name       = $request->name;
        $teams->description = $request->description;

        $teams->update();

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $teams        = Team::findOrFail($id);
        $teams->state = ($teams->state ? 0 : 1);
        $teams->update();
        return redirect()->route('team.index');
    }

    public function searchTeam(Request $request){
        $teams = Team::orderby('team_id','DESC')
                ->where('name', 'like', "%$request->buscar%")
                ->paginate(5);

        return view('team.index',[
                    'teams'=>$teams,
                    'search'=>$request->buscar,
                ]
                );

    }
}
