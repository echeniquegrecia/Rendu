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
                <th>Logo</th>
                <th>Ranking</th>
            </tr>
            @foreach($team as $key)
                <tr>
                    <td><a href= {{ url('team/'.$key->id) }}>{{$key->name}} </a></td>
                    <td><img height="100" width="100" src= {{ asset('/'.$key->logo) }}  ></td>
                    <td>{{$key->ranking}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>





