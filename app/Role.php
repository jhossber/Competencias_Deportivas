<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // protected $table = 'roles';
    // protected $primaryKey = 'id';

    // // protected $table = 'sgcd_roles';
    // // protected $primaryKey = 'role_id';

    // public function permissions()
    // {
    //     return $this->belongsToMany(Grant::class, 'role_has_permissions', 'permission_id', 'role_id');
    // }

    // public function rol()
    // {
    //     return $this->hasMany(RoleGrant::class, 'role_id');
    // }
}
