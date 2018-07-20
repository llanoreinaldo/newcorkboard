<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Tag extends Eloquent
{
    //
    protected $fillable = ['name', 'boardId'];
}
