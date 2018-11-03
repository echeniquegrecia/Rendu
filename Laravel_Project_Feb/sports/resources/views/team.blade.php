<html>
<head>
    <title>Baseball News</title>
    <link rel="stylesheet"   href= {{ asset('/css/prototype.css') }}>
</head>
<body>
<div id="stadium">
    <h1>Baseball News</h1>
    <h2>...because we know</h2>
    <div class="square"></div>
    <div class="square2">
        <nav>
            <ul>
                <li>
                    <a href= {{ url('teamRanking/') }}>Teams</a>
                </li>
            </ul>
        </nav>
        <img class="logoteam2" src= {{ asset('/'.$team->logo) }}>
        <table class="tableEachTeams">
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Ranking</th>
                {{--<th>Players</th>--}}
            </tr>
            <tr>
                <td>{{$team->name}}</td>
                <td>{{$team->city}}</td>
                <td>{{$team->ranking}}</td>
                </tr>
        </table>
        <table class="tableEachPlayers">
            <tr>
                <th>Players</th>
            </tr>
            <tr>
                <td>@foreach($player as $key)<a href= {{ url('players/'.$key->id) }}>{{$key->name}}</a><br>@endforeach</td>

            </tr>
        </table>


    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>





