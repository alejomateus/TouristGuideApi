<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $table = 'places';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'description',
        'route',
        'costs',
        'schedule',
        'funfacts'
    ];
}
