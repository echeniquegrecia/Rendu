
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
                <li><a href= {{ url('match/') }}>@lang('messages.Home')</a><li>
            </ul>
        </nav>
        <h7>@lang('messages.Connect your passion for the baseball with us!')</h7>
        <div class="loginsports">
            <form  method="POST" action="{{ route('login') }}">
                {{--//Email--}}
                {{ csrf_field() }}
                <div class="loginemail" {{ $errors->has('email') ? ' has-error' : '' }}>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder=@lang('messages.E-Mail Address') required autofocus>
                    @if ($errors->has('email'))
                        <div class="messageerror">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>

                {{--//Password--}}
                <div class="loginpassword"{{ $errors->has('password') ? ' has-error' : '' }}>
                    <input id="password" type="password"  name="password" placeholder=@lang('messages.Password') required>
                    @if ($errors->has('password'))
                        <div class="messageerror">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>

                {{--//Submit--}}
                <div class="submitlogin">
                    <button  type="submit">@lang('messages.Login')</button>
                </div>
            </form>
        </div>
    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>




