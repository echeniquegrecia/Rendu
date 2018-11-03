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
        <li><a href= {{ url('register/') }}>Sign-in</a><li>
        <li><a href= {{ url('login/') }}>Login</a><li>
        <li><a href= {{ url('playersRanking/') }}>Players</a><li>
        <li><a href= {{ url('teamRanking/') }}>Teams</a><li>
        <li><a href= {{ url('admin/') }}>Administrator</a><li>
        <li><a href= {{ url('logout/') }}>Logout</a><li>
      </ul>
    </nav>
    <table class="tableAdmin">


      <form action="UpdateMatch" method="post">
        {{ csrf_field() }}
        <tr>
          <th>id_team_1</th>
          <th><input type="text" name="id_team_1" value="{{ $val['id_team_1'] }}"></th>
        </tr>
        <tr>
          <th>id_team_2</th>
          <th><input type="text" name="id_team_2" value="{{ $val['id_team_2'] }}"></th>
        </tr>
        <tr>
          <th>weather</th>
          <th><input type="text" name="weather" value="{{ $val['weather'] }}"></th>
        </tr>
        <tr>
          <th>city</th>
          <th><input type="text" name="city" value="{{ $val['city'] }}"></th>
        </tr>
        <tr>
          <th>score_team_1</th>
          <th><input type="text" name="score_team_1" value="{{ $val['score_team_1'] }}"></th>
        </tr>
        <tr>
          <th>score_team_2</th>
          <th><input type="text" name="score_team_2" value="{{ $val['score_team_2'] }}"></th>
        </tr>
        <tr>
          <th>created_at</th>
          <th><input type="text" name="created_at" value="{{ $val['created_at'] }}"></th>
        </tr>
        <tr>
          <th>updated_at</th>
          <th><input type="text" name="updated_at" value="{{ $val['updated_at'] }}"></th>
        </tr>
        <tr>
          <th>day_match</th>
          <th><input type="text" name="day_match" value="{{ $val['day_match'] }}"></th>
        </tr>
        <tr>
          <th></th>
          <th><input type="submit" name="up" id ="up" value="Update"></th>
        </tr>
      </form>

    </table>
    <p></p>

    <table class="tableAdmin2" >
      <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">id_team_1</th>
        <th scope="col">id_team_2</th>
        <th scope="col">weather</th>
        <th scope="col">city</th>
        <th scope="col">score_team_1</th>
        <th scope="col">score_team_2</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">day_match</th>
      </tr>
      </thead>
      <tbody>

      @foreach ($match as $vals)
        <tr>
          <th scope="row">{{ $vals->id }}</th>
          <td>{{ $vals->id_team_1 }}</td>
          <td>{{ $vals->id_team_2 }}</td>
          <td>{{ $vals->weather }}</td>
          <td>{{ $vals->city }}</td>
          <td>{{ $vals->score_team_1 }}</td>
          <td>{{ $vals->score_team_2 }}</td>
          <td>{{ $vals->created_at }}</td>
          <td>{{ $vals->updated_at }}</td>
          <td>{{ $vals->day_match }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>


  </div>
  <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>
