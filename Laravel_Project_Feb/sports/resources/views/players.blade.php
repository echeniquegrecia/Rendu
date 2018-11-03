
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
            <nav class="navigation">
                <ul>
                    <li>
                        <a href= {{ url('playersRanking/') }}>Players</a>
                    </li>
                </ul>
            </nav>
            <img id = "photoplayer" height="150" width="200" src= {{ asset('/'.$player->photoplayer) }}>
            <img id ="photoflag" height="150" width="200" src= {{ asset('/'.$player->photonationality) }}>
            <h3>{{$player->name}}</h3>
                <table class ="tablePlayer">
                    <tr>
                        <th>Age</th>
                        <th>Height(m)</th>
                        <th>Team</th>
                        <th>Ranking</th>
                        <th>Position</th>
                        <th>Nationality</th>
                    </tr>
                    <tr>
                        <td>{{$player->age}}</td>
                        <td>{{$player->height}}</td>
                        <td>{{$player->team->name}}</td>
                        <td>{{$player->ranking}}</td>
                        <td>{{$player->position->name}}</td>
                        <td>{{$player->nationality}} </td>
                    </tr>
            </table>
        </div>
        <img id ="ball" src= {{ asset('/ball.png') }}>
    </div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>






