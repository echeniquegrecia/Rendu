@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="card text-center">
      <div class="card-header">
        <a href="/team/{{ $match->id_team_1}}"> {{ $tab1[$j]['t1'] }} {{ $match->score_team_1}} </a> - <a href="/team/{{ $match->id_team_2}}"> {{ $match->score_team_2}} {{ $tab1[$j]['t2']}} </a>
      </div>
      <div class="card-body">
        <p class="card-text">stade : {{ $match->city}}</p>
        <p class="card-text">weather : {{ $match->weather}}</p>
      </div>

    </div>

  </div>
  <p></p>
  {{$j++}}
@endsection