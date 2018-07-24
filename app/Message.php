<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Message extends Model
{
    //
    protected $fillable = ['msg', 'name', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function board(){
        return $this->belongsTo('App\Board');
    }
}
