<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Message extends Eloquent
{
    //
    protected $fillable = ['msg', 'author'];
}
