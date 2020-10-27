<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'sgcd_players';
    protected $primaryKey = 'player_id';
}
