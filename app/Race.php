<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = "races";
    protected $primaryKey = "raceId";

    /*#### RELATIONS ####*/
    public function season () {
        return $this->hasOne('App\Season','year','year');
    }

    public function circuit () {
        return $this->hasOne('App\Circuit','circuitId','circuitId');
    }

    public function driverStandings () {
        return $this->hasMany('App\DriverStanding','raceId','raceId');
    }

    public function constructorStandings () {
        return $this->hasMany('App\ConstructorStanding','raceId','raceId');
    }
    /*#### END RELATIONS ####*/

    public static function fetchRace($season, $round) {
        return self::where([
            ['year','=',$season],
            ['round','=',$round]
        ])->first();
    }

    public function newCollection(array $models = []) {
        return new RaceCollection($models);
    }

}
