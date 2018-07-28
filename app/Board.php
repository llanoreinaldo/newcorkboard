<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use newcorkboard;

class Board extends Model
{
    //
    //Laravel models have a built-in protection mechanism against mass assignment vulnerability. The fillable property is used to declare the attribute names that can be mass assigned safely. 
    //whitelists the title, description, price and availability attributes and treats them as mass assignable. We can now use the Product::create method to insert new rows into the products table.

    protected $fillable = ['name', 'email', 'id', 'hash',];
    protected $primaryKey = 'hash'; // or null

    public $incrementing = false;
    protected $hidden = ['email',];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }

    
}
