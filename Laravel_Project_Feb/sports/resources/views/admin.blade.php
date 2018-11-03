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
        <li><a href= {{ url('logout/') }}>Logout</a><li>
      </ul>
    </nav>
    <table class="tableAdmin">
      <tr>
        <form action="admin/deluser" method="post">
          {{ csrf_field() }}
          <th>Delete an User</th>
          <td><select name="bet">
              <option value="0"></option>
              @foreach ($user as $users)
                <option value="{{ $users->id }}"> {{ $users->id }}</option>
              @endforeach
            </select></td>
          <td><input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
      <tr>
        <form action="admin/updateuserform" method="post">
          {{ csrf_field() }}
          <th>Update a User</th>
          <td><select name="user">
              <option value="0"></option>
              @foreach ($user as $users)
                <option value ="{{ $users->id }}">{{ $users->id }}</option>>
              @endforeach
            </select></td>
          <td><input type="submit" name="up" class="btn btn-info" value="UPDATE"></td>
        </form>
      </tr>
      <tr>
      </tr>
      <tr>
        <form action="admin/delmatch" method="post">
          {{ csrf_field() }}
          <th>Delete a match</th>
          <td>  <select name="match">
              <option value="0"></option>
              @foreach ($match as $matches)
                <option value="{{ $matches->id }}"> {{ $matches->id }}</option>
              @endforeach
            </select></td>
          <td><input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
      <tr>
        <form action="admin/updatematchform" method="post">
          {{ csrf_field() }}
          <th>Update a match</th>
          <td> <select name="match">
              <option value="0"></option>
              @foreach ($match as $matches)
                <option value ="{{ $matches->id }}">{{ $matches->id }}</option>>
              @endforeach
            </select></td>
          <td><input type="submit" name="up" class="btn btn-info" value="UPDATE"></td>
        </form>
      </tr>
      <tr>
      </tr>
      <tr>
        <form action="delplayer" method="post">
          {{ csrf_field() }}
          <th>Delete a player</th>
          <td><select name="player">
              <option value="0"></option>
              @foreach ($player as $players)
                <option value="{{ $players->id }}"> {{ $players->name }}</option>
              @endforeach
            </select></td>
          <td><input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
      <tr>
        <form action="admin/updateplayerform" method="post">
          {{ csrf_field() }}
          <th>Update a player</th>
          <td><select name="player">
              <option value="0"></option>
              @foreach ($player as $players)
                <option value ="{{ $players->id }}">{{ $players->id }}</option>>
              @endforeach
            </select></td>
          <td><input type="submit" name="up" class="btn btn-info" value="UPDATE"></td>
        </form>

      </tr>
      <tr>
      </tr>
      <tr>
        <form action="delteam" method="post">
          {{ csrf_field() }}
          <th>Delete a team</th>
          <td><select name="team">
              <option value="0"></option>
              @foreach ($team as $teams)
                <option value="{{ $teams->id }}"> {{ $teams->name }}</option>
              @endforeach
            </select></td>
          <td><input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
      <tr>
        <form action="admin/updateteamform" method="post">
          {{ csrf_field() }}
          <th>Update a Team</th>
          <td>  <select name="team">
              <option value="0"></option>
              @foreach ($team as $teams)
                <option value ="{{ $teams->id }}">{{ $teams->id }}</option>>
              @endforeach
            </select></td>
          <td><input type="submit" name="up" class="btn btn-info" value="UPDATE"></td>
        </form>
      </tr>
      <tr>
      </tr>
      <tr>
        <form action="delposition" method="post">
          {{ csrf_field() }}
          <th>Delete a position</th>
          <td><select name="position">
              <option value="0"></option>
              @foreach ($position as $positions)
                <option value="{{ $positions->id }}"> {{ $positions->name }}</option>
              @endforeach
            </select></td>
          <td> <input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
      <tr>
        <form action="admin/updatepositionform" method="post">
          {{ csrf_field() }}
          <th>Update a position</th>
          <td><select name="position">
              <option value="0"></option>
              @foreach ($position as $positions)
                <option value ="{{ $positions->id }}">{{ $positions->id }}</option>>
              @endforeach
            </select></td>
          <td>  <input type="submit" name="up" class="btn btn-info" value="UPDATE"></td>
        </form>
      </tr>
      <tr>
      </tr>
      <tr>
        <form action="admin/delbet" method="post">
          {{ csrf_field() }}
          <th>Delete a bet</th>
          <td><select name="bet">
              <option value="0"></option>
              @foreach ($bet as $bets)
                <option value="{{ $bets->id }}"> {{ $bets->id }}</option>
              @endforeach
            </select></td>
          <td><input type="submit" name="del" class="btn btn-danger" value="DEL"></td>
        </form>
      </tr>
    </table>
  </div>
  <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>
