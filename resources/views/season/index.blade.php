@extends('templates.main')

@section('content')
    <h1>f1 timing</h1>

    <h3>Select Season</h3>
    <div class="list-group text-center">
        @foreach($seasons as $season)
            <a class="list-group-item" href="{{ route('season.show',$season->year) }}">{{ $season->year }}</a>
        @endforeach
    </div>
@endsection

@section('bodyEnd')
    <script>

    </script>
@endsection