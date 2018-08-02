<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Priamary Key
    public $primaryKey = 'id';
    //Time Stamps
    public $timestamps = true;
}
