<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CircuitWikiData extends Model
{
    protected $table = "circuit_wiki_data";
    protected $primaryKey = "id";

    static function getData (Circuit $circuit) {

        $result = self::where('circuitId',$circuit->circuitId)->first();
        if(!is_null($result)) {
            return $result;
        } else {
            $newWikiData = new CircuitWikiData();
            $wikiData = self::loadFromWiki($circuit);
        }
    }

    static function loadFromWiki(Circuit $circuit) {
        $api = new \Mediawiki\Api\MediawikiApi("http://en.wikipedia.org/w/api.php");
        $wikiService = new \Mediawiki\Api\MediawikiFactory($api);
        $page = $wikiService->newPageGetter()->getFromTitle($circuit->name);
        dd($page);
    }

}
