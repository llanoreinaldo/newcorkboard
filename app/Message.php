<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Message extends Model
{
    //
    protected $fillable = ['msg', 'author'];
}
