<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    //Laravel models have a built-in protection mechanism against mass assignment vulnerability. The fillable property is used to declare the attribute names that can be mass assigned safely. 
    //whitelists the title, description, price and availability attributes and treats them as mass assignable. We can now use the Product::create method to insert new rows into the products table.

    protected $fillable = ['url', 'title', 'description', 'image_url', 'boardId'];
}
