<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //The $guarded property contains an array of attributes that you do not want to be mass assignable. All others not in the array will be mass assignable.
    protected $guarded = [];

    use HasFactory;
}
