<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vecinda extends Model
{
    protected $fillable = ['title', 'name', 'nickname', 'image','apartament', 'description'];
}