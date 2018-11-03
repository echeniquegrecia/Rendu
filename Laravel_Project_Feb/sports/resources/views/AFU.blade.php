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

      <form action="UpdateUser" method="post">
        {{ csrf_field() }}
        <tr>
          <th>id</th>
          <td><input type="id" name="id" value="{{ $val['id'] }}"></td>
        </tr>
        <tr>
          <th>name</th>
          <td><input type="text" name="name" value="{{ $val['name'] }}"></td>
        </tr>
        <tr>
          <th>email</th>
          <td><input type="text" name="email" value="{{ $val['email'] }}"></td>
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
        <th scope="col">email</th>
      </tr>
      </thead>
      <tbody>

      @foreach ($user as $vals)
        <tr>
          <th scope="row">{{ $vals->id }}</th>
          <td>{{ $vals->name }}</td>
          <td>{{ $vals->email }}</td>
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