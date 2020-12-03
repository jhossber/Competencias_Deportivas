<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'sgcd_teams';
    protected $primaryKey = 'team_id';

    protected $fillabel = [
    	'name',
    ];

    public function placeteams()
    {
        return $this->hasOne(PlaceTeam::class, 'place_team_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
