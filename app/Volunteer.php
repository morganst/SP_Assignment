<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //Table name
    protected $table = 'volunteers';
    //Priamary Key
    public $primaryKey = 'id';
    //Time Stamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
