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


      <form action="UpdatePlayer" method="post">
        {{ csrf_field() }}
        <tr>
          <th>id</th>
          <td><input type="id" name="id" value="{{ $val['id'] }}"></td>
        </tr>
        <tr>
        <tr>
          <th>name</th>
          <td><input type="text" name="name" value="{{ $val['name'] }}"></td>
        </tr>
        <tr>
          <th>age</th>
          <td><input type="text" name="age" value="{{ $val['age'] }}"></td>
        </tr>
        <tr>
          <th>height</th>
          <td><input type="text" name="height" value="{{ $val['height'] }}"></td>
        </tr>
        <tr>
          <th>ranking</th>
          <td><input type="text" name="ranking" value="{{ $val['ranking'] }}"></td>
        </tr>
        <tr>
          <th>id_team</th>
          <td><input type="text" name="id_team" value="{{ $val['id_team'] }}"></td>
        </tr>
        <tr>
          <th>id_position</th>
          <td><input type="text" name="id_position" value="{{ $val['id_position'] }}"></td>
        </tr>
        <tr>
          <th>nationality</th>
          <td><input type="text" name="nationality" value="{{ $val['nationality'] }}"></td>
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
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">height</th>
        <th scope="col">ranking</th>
        <th scope="col">id_team</th>
        <th scope="col">id_position</th>
        <th scope="col">nationality</th>
      </tr>
      </thead>
      <tbody>

      @foreach ($player as $vals)
        <tr>
          <th scope="row">{{ $vals->id }}</th>
          <td>{{ $vals->name }}</td>
          <td>{{ $vals->age }}</td>
          <td>{{ $vals->height }}</td>
          <td>{{ $vals->ranking }}</td>
          <td>{{ $vals->id_team }}</td>
          <td>{{ $vals->id_position }}</td>
          <td>{{ $vals->nationality }}</td>
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
