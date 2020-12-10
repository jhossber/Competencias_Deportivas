<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'sgcd_points';
    protected $primaryKey = 'point_id';

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
