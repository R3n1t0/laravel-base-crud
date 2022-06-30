<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = [
        'title',
        'type',
        'image',
        'slug'
    ];
}
