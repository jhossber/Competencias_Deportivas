<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use App\Player;
use App\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::orderBy('player_id', 'ASC')->paginate(5);

        return view('player.index', [
            'players' => $players,
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

        return view('player.create', [
            'teams' => $teams,
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
        $player = new Player;

        $player->team_id = $request->team;

        $player->ci = $request->ci;
        $player->name       = $request->name;
        $player->first_name = $request->first_name;
        $player->last_name  = $request->last_name;
        $player->gender      = $request->gender;
        $player->date_birth = $request->date_birth;
        $player->photo = $request->photo;
        $player->email = $request->email;

        // Imagen
        if($request->file('photo')){
            $path = Storage::disk('public')->put('players_photo', $request->file('photo'));
            $path2 = substr($path, 14);
            $player->fill(['photo' => $path2])->save();
        }
        return redirect()->route('player.index');
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
        $player = Player::with('team')->findOrfail($id);
        $teams = Team::all();

        $date = date("Y-m-d", strtotime($player->date_birth));
        $photo = $player->photo; //Observado

        return view('player.editar',[
            'player' => $player,
            'teams' => $teams,
            'date' => $date,
            'photo' => $photo,
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
        $player = Player::find($id);

        $player->team_id = $request->team;

        $player->ci = $request->ci;
        $player->name       = $request->name;
        $player->first_name = $request->first_name;
        $player->last_name  = $request->last_name;
        $player->gender      = $request->gender;
        $player->date_birth = $request->date_birth;
        $player->email = $request->email;
        // $player->photo = $request->photo;

        $player->update();

        // Imagen
        if($request->file('photo')){
            $path = Storage::disk('public')->put('players_photo', $request->file('photo'));
            $path2 = substr($path, 14);
            $player->fill(['photo' => $path2])->update();
        }

        return redirect()->route('player.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $player        = Player::findOrFail($id);
        $player->state = ($player->state ? 0 : 1);
        $player->update();
        return redirect()->route('player.index');
    }

    public function searchPlayer(Request $request)
    {

        $players = Player::orderBy('player_id', 'DESC')
            ->where('ci', 'LIKE', "%$request->buscar%")
            ->paginate(5);

        return view('player.index', [
            'players'  => $players,
            'search' => $request->buscar,
        ]);
    }
}
