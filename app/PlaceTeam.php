<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceTeam extends Model
{
    protected $table = 'sgcd_place_teams';
    protected $primaryKey = 'place_team_id';

    public function teams()
    {
        return $this->belongsTo(Team::class,'team_id');
    }

    public function places()
    {
        return $this->belongsTo(Team::class, 'place_id');
    }
}
