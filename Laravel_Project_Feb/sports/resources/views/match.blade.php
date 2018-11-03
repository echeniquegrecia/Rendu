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
                <li><a href= {{ url('register/') }}>@lang('messages.Register')</a><li>
                <li><a href= {{ url('login/') }}>@lang('messages.Login')</a><li>
                <li><a href= {{ url('playersRanking/') }}>@lang('messages.Players')</a><li>
                <li><a href= {{ url('teamRanking/') }}>@lang('messages.Teams')</a><li>
                <li><a href= {{ url('logout/') }}>@lang('messages.Logout')</a><li>
                <li><a href= {{ route('locale', 'en') }}>@lang('messages.English')</a><li>
                <li><a href= {{ route('locale', 'esp') }}>@lang('messages.Spanish')</a><li>
                <li><a href= {{ route('locale', 'fr') }}>@lang('messages.French')</a><li>
            </ul>
        </nav>
        <h8 id ="time"></h8>
        <img id ="arrow" src= {{ asset('/arrow.png') }}>
        <script type="text/javascript" src={{asset('/js/time.js') }}>
        </script>

        <table class ="tablefutureMatches">
            <tr>
                <th colspan="5">Future Matches</th>
            </tr>
            @foreach ($match as $matchs)
                <tr>

                    <td><a href="/team/{{ $matchs->id_team_1}}">{{ $tab2[$l]['t1'] }}</a></td>
                    <td>{{ $matchs->score_team_1}}</td>
                    <td>-</td>
                    <td>{{ $matchs->score_team_2}}</td>
                    <td><a href="/team/{{ $matchs->id_team_2}}">{{ $tab2[$l]['t2']}}</a></td>
                <tr><td id = "detailsmatch" colspan="5"><a href="/match/{{ $matchs->id}}">Match details</a></td></tr>
                {{$l++}}
                @endforeach
                </tr>
        </table>
        <table class ="tableMatches">
            <tr>
                <th colspan="5">Last Matches</th>
            </tr>
            @foreach ($matchpast as $matchs)
                <tr>
                    <td><a href="/team/{{ $matchs->id_team_1}}">{{ $tab1[$j]['t1'] }}</a></td>
                    <td>{{ $matchs->score_team_1}}</td>
                    <td>-</td>
                    <td>{{ $matchs->score_team_2}}</td>
                    <td><a href="/team/{{ $matchs->id_team_2}}">{{ $tab1[$j]['t2']}}</a></td>
                <tr><td id = "detailsmatch" colspan="5"><a href="/matchpast/{{ $matchs->id}}">Match details</a></td></tr>
                {{$j++}}
                @endforeach
                </tr>
        </table>
    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>





