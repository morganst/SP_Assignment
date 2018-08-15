<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Opportunity extends Model
{
    protected $table = 'Opportunities';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
