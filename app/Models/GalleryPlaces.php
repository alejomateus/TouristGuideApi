<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryPlaces extends Model
{
    protected $table = 'galleryplaces';
    protected $primaryKey = 'id';
    protected $fillable = [
        'url','place_id'
    ];
}
