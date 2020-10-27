<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleGrant extends Model
{
    protected $table = 'sgcd_role_grants';
    protected $primaryKey = 'role_grant_id';
}
