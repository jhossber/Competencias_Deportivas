<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'sgcd_categories';
    protected $primaryKey = 'category_id';
}
