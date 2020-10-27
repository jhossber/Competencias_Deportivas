<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'sgcd_places';
    protected $primaryKey = 'place_id';
}
