@extends('templates.main')
@section('content')
<h1>{{ $season->year }} Season</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Races</h2>
            <div class="list-group">
                @foreach($races as $race)
                    <a class="list-group-item" href="/{{ $season->year }}/{{ $race->round }}/">
                        {{ $race->name }}
                    </a>
                @endforeach

            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-xs-6">
                    <h2>Driver's Standings</h2>
                    <table class="table table-responsive">
                        <thead>
                        <th>Pos</th>
                        <th>Name</th>
                        <th>Points</th>
                        </thead>
                        <tbody>
                        <?php $pos = 1; ?>
                        @foreach($driverStandings as $driverStanding)
                            <tr>
                                <td>
                                    {{ $pos++ }}
                                </td>
                                <td>
                                    {{
                                        $driverStanding->driver->forename[0]
                                        . '. ' .
                                        $driverStanding->driver->surname
                                    }}
                                </td>
                                <td>
                                    {{ $driverStanding->points }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-xs-6">
                    <h2>Constructor's Standings</h2>
                    <table class="table table-responsive">
                        <thead>
                        <th>Pos</th>
                        <th>Name</th>
                        <th>Points</th>
                        </thead>
                        <tbody>
                        <?php $pos = 1; ?>
                        @foreach($constructorStandings as $constructorStanding)
                            <tr>
                                <td>
                                    {{ $pos++ }}
                                </td>
                                <td>
                                    {{ $constructorStanding->constructor->name }}
                                </td>
                                <td>
                                    {{ $constructorStanding->points }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection