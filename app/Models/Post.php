<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Input;
use Str;
class Post extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'adresse', 'phone' 
    ];
}
