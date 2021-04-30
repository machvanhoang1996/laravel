<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Dashboard</title>
    <meta name="description" content="Thiết kế website Hoàng Anh Adwords">
    <meta name="author" content="Hoàng Anh Adwords">
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{ asset('public/public/assets/img/metis-tile.png') }}" />
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/public/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/metismenu/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/onoffcanvas/onoffcanvas.css') }}">
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/animate.css/animate.css') }}">
	<style>
		input[name='username']{
			margin-bottom: 5px !important;
		}
	</style>
</head>
<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="{{ asset('public/public/assets/img/logo.png') }}" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="{{route('dashboard.login')}}" method="POST" role="form">
				@csrf
                <p class="text-muted text-center">
                    Vui lòng nhập tài khoản mật khẩu của bạn
                </p>
                <input type="text" name="username" placeholder="Tài khoản" class="form-control top">
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control bottom">
                <div class="checkbox">
		  <label>
		    <input type="checkbox"> Nhớ mật khẩu
		  </label>
		</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html">
                <p class="text-muted text-center">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html">
                <input type="text" placeholder="username" class="form-control top">
                <input type="email" placeholder="mail@domain.com" class="form-control middle">
                <input type="password" placeholder="password" class="form-control middle">
                <input type="password" placeholder="re-password" class="form-control bottom">
                <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
        </ul>
    </div>
  </div>
    <script src="{{ asset('public/public/assets/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/public/assets/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    $(activeForm).addClass('animated fadeIn');
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

</html>
