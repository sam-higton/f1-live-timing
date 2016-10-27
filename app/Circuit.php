<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Circuit extends Model
{
    protected $table = "circuits";
    protected $primaryKey = "circuitId";



    public function getWikiData () {

        $wikiData = \App\CircuitWikiData::getData($this);



    }


}
