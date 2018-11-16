<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //create a has many or one to many relationship

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
