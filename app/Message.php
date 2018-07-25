<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Message extends Model
{
    //
    protected $fillable = ['msg', 'name', 'board_id'];

    public function board(){
        return $this->belongsTo('App\Board');
    }
}
