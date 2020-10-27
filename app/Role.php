<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'sgcd_roles';
    protected $primaryKey = 'role_id';
}
