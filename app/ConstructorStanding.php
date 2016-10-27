<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructorStanding extends Model
{
    protected $table = "constructorstandings";
    protected $primaryKey = "constructorStandingsId";

    public function constructor () {
        return $this->hasOne('App\Constructor',"constructorId","constructorId");
    }

    public function race () {
        return $this->hasOne('App\Race',"raceId","raceId");
    }
}
