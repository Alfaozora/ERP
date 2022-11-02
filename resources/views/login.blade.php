<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-ERP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">ERP Produksi Kaos Polos</div>
                <div class="panel-body">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Oops!! </b>{{session('error')}}
                    </div>
                    @endif
                    <form role="form" action="{{ route('actionlogin') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus="" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" value="Login">Login</button>
                            <br>
                            <p class="text-center">
                                Belum punya akun?
                                <a href="{{route('register')}}">
                                    Register
                                </a>
                                sekarang!
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('style/js/jquery-1.11.1.min.js') }}">
        </script>
        <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
</body>

</html>