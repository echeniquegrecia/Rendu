<html>
<head>
  <title>Baseball News</title>
  <link rel="stylesheet"   href= {{ asset('/css/prototype.css') }}>
  <script type="text/javascript" href={{asset('/js/time.js') }}></script>
</head>
<body>
<div id="stadium">
  <h1>Baseball News</h1>
  <h2>...because we know</h2>
  <div class="square"></div>
  <div class="square2">
    <nav>
      <ul>
        <li><a href= {{ url('match/') }}>Home</a></li>
      </ul>
    </nav>
    <table class ="tablefutureMatchesde">
      <tr>
        <th><a href="/team/{{ $match->id_team_1}}"></a> </th>
        <th>{{ $tab1[$j]['t1'] }} {{ $match->score_team_1}}</th>
        <th>-</th>
        <th>{{ $match->score_team_2}} {{ $tab1[$j]['t2']}}</th>
        <th><a href="/team/{{ $match->id_team_2}}"></a></th>
      </tr>
      <tr>
      </tr>
      <tr>
        <td id = "match1" colspan="3">City:</td>
        <td colspan="4">{{ $match->city}}</td>
      </tr>
      <tr>
        <td id = "match2" colspan="3">Estimated Weather:</td>
        <td colspan="4" >{{ $match->weather}}</td>
      </tr>
      <tr>
        <td id = "match3" colspan="3">Date:</td>
        <td colspan="4" >{{ $match->day_match}}</td>
      </tr>
    </table>
  </div>
  <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>