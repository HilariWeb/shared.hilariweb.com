<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factory;

class Book extends Model
{
    //use HasFactory;
    protected $fillable = ['uuid','title','book_image'];
}
