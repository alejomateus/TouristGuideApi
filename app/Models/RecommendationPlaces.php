<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendationPlaces extends Model
{
    protected $table = 'recommendationsplaces';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description','place_id'
    ];
}
