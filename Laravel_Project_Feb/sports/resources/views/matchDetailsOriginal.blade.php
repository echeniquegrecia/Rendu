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
  <div class="card-footer text-muted">

  <form action="bets" method="post">
{{ csrf_field() }}

<h3>Win some money ?</h3>

<p>choose you're team:</p>

  <input name="id_matchs" type="hidden" value="{{ $match->id}}">
  <input name="id_team" type="checkbox" value="{{ $match->id_team_1}}"> : {{ $tab1[$j]['t1'] }}
  <input name="id_team" type="checkbox" value="{{ $match->id_team_2}}"> : {{ $tab1[$j]['t2'] }}
  <p><input type="email" name="email" placeholder="email"> </p>
  <p><input type="text" name="money" placeholder="how many money bet"> € </p>
  <p><input type="submit" name="betsubmit" value="Bet"> </p>

</form>
  </div>
</div>

</div>
<p></p>
{{$j++}}
@endsection
