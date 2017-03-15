<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/scss/vendor/materialize.css') }}"
          media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Lara Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body>
<div class="container">
    <form class="col m5 s12" method="post" action="{{url('admin-login')}}">


        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">perm_identity</i>
                <input id="icon_prefix" type="text" class="validate" name="Login">
                <label for="icon_prefix">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="icon_password" type="password" class="validate" name="Security">
                <label for="icon_password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="waves-effect waves-light btn right" type="submit"><i
                            class="material-icons left">perm_identity</i>Login
                </button>

            </div>
        </div>
    </form>
</div>
<footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('resources/assets/js/vendor/materialize.min.js') }}"></script>
</footer>
</body>
</html>
