@extends('templates.main')
@section('content')
    <h1 xmlns="http://www.w3.org/1999/html">{{ $season }} {{ $race->name }}</h1>
    <div class="row">
        <div class="col-md-6 track-map">

        </div>
        <div class="col-md-6 race-stats">

        </div>
    </div>
    <a href="#" class="btn btn-default btn-huge">
        <span class="glyphicon glyphicon-play"></span> <br />
        Live Timing
    </a>
    <a href="#" class="btn btn-default btn-huge">
        <span class="glyphicon glyphicon-play"></span> <br />
        Results - Race
    </a>
    <a href="#" class="btn btn-default btn-huge">
        <span class="glyphicon glyphicon-play"></span> <br />
        Results - Qualifying
    </a>
    <a href="#" class="btn btn-default btn-huge">
        <span class="glyphicon glyphicon-play"></span> <br />
        Championship Standings
    </a>

@endsection