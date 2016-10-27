<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = "seasons";
    protected $primaryKey = "year";


    /*#### RELATIONS ####*/
    public function races () {
        return $this->hasMany('App\Race','year','year');
    }
    /*#### END RELATIONS ####*/

    public function getFinalDriverStandings () {
        $finalRace = $this->races->sortByDesc('round')->first();
        return $finalRace->driverStandings->sortByDesc('points');
    }

    public function getFinalConstructorStandings () {
        $finalRace = $this->races->sortByDesc('round')->first();
        return $finalRace->constructorStandings->sortByDesc('points');
    }

    static function all($columns = ['*']) {
        return self::orderBy('year','ASC')->get($columns);
    }

    static function optionList() {
        $seasons = self::all();
        $optionsArray = [];
        foreach($seasons as $season) {
            $optionsArray[$season->year] = $season->year;
        }
        return $optionsArray;
    }

}
