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
                    <a href= {{ url('match/') }}>Home</a>
                </li>
            </ul>
        </nav>
        <table class="tableTeams">
            <tr>
                <th>Name</th>
                <th>Photo</th>
                <th>Ranking</th>
            </tr>
            @foreach ($allPlayers as $player)
                <tr>
                    <td><a href= {{ url('players/'.$player->id) }}>{{$player->name}} </a></td>
                    <td> <img height="150" width="200" src= {{ asset('/'.$player->photoplayer) }}></td>
                    <td>{{ @$player->ranking }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>





