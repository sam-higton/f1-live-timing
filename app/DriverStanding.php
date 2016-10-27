<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverStanding extends Model
{
    protected $table = "driverstandings";
    protected $primaryKey = "driverStandingsId";

    public function driver () {
        return $this->hasOne('App\Driver',"driverId","driverId");
    }

    public function race () {
        return $this->hasOne('App\Race',"raceId","raceId");
    }

}
