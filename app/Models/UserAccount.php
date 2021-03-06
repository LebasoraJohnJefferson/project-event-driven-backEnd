<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    protected $fillable =[
        'firstName','lastName','userName','email','address'
    ];
    protected $hidden = [
        'password'
    ];
}
