@extends('layouts.app')

@section('content')
@foreach ($match as $matchs)
<div class="container">

  <div class="card text-center">
  <div class="card-header">
    <a href="/team/{{ $matchs->id_team_1}}"> {{ $tab1[$j]['t1'] }} {{ $matchs->score_team_1}} </a> - <a href="/team/{{ $matchs->id_team_2}}"> {{ $matchs->score_team_2}} {{ $tab1[$j]['t2']}} </a>
  </div>

  <div class="card-footer text-muted">
    <p></p>
  <p>  <a href="/match/{{ $matchs->id}}">détails du match</a> </p>
  </div>
</div>




</div>
<p></p>
{{$j++}}
@endforeach
@endsection
