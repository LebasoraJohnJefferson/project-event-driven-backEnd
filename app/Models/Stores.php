<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    //
    protected $fillable = [
        'owner_id',
        'store_name',
        'store_description',
        'store_image',
    ];

    protected $primaryKey='store_id';
}
