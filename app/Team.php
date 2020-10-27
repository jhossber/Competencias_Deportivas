<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'sgcd_teams';
    protected $primaryKey = 'team_id';
}
