<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = 'Volunteers';

    public $primaryKey = 'id';

    public $timestamps = true;
}
