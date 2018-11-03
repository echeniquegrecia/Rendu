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
        <h7>@lang('messages.Register your passion for the baseball with us!')</h7>
        <div class="regisports">
            <form  method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                {{--//Name--}}
                <div class="reginame" {{ $errors->has('name') ? ' has-error' : '' }}>
                    <input id="name" type="name"  name="name" value="{{ old('name') }}" placeholder=@lang('messages.Name') required autofocus>
                    @if ($errors->has('name'))
                        <div class="messageerror">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>

                {{--//Email--}}
                <div class="regiemail" {{ $errors->has('email') ? ' has-error' : '' }}>
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
                <div class="regipassword"{{ $errors->has('password') ? ' has-error' : '' }}>
                    <input id="password" type="password"  name="password" placeholder=@lang('messages.Password') required>
                    @if ($errors->has('password'))
                        <div class="messageerror">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>

                {{--//Confirm Password--}}

                <div class="regiconfirm">
                    <input id="password-confirm" type="password"  name="password_confirmation" placeholder=@lang('messages.Confirm Password') required>
                </div>

                {{--//Submit--}}
                <div class="regisubmit">
                    <button  type="submit">@lang('messages.Register')</button>
                </div>
            </form>
        </div>
    </div>
    <img id ="ball" src= {{ asset('/ball.png') }}>
</div>
<footer>Jean Pin - Grecia Echenique - Sibel Yegec. Paris 2018.</footer>
</body>
</html>




