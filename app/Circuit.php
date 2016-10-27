<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Circuit extends Model
{
    protected $table = "circuits";
    protected $primaryKey = "circuitId";



    public function loadWikiData () {
        $api = new \Mediawiki\Api\MediawikiApi("http://en.wikipedia.org/w/api.php");
        $wikiService = new \Mediawiki\Api\MediawikiFactory($api);
        $page = $wikiService->newPageGetter()->getFromTitle($this->name);

    }


}
