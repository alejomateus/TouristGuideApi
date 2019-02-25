<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityPlaces extends Model
{
    protected $table = 'activitysplaces';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description','place_id'
    ];
}
