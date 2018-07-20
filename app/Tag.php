<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Tag extends Model
{
    //
    protected $fillable = ['name', 'boardId'];
}
