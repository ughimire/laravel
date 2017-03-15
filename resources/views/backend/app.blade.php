<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Application') }}</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/scss/vendor/materialize.css') }}"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/scss/vendor/backend.css') }}"
          media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
<header>

    @include("backend.shared.topbar")

    <div class="container">

        @include("backend.shared.sidebar")
    </div>

</header>
<main>
    <div class="divider"></div>

    <div class="section">

        <div class="row">
            @include("backend.shared.breadcrumb")

        </div>


    </div>
    <div class="container">
        @yield("content")
    </div>


</main>

<!-- Scripts -->
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                    content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('resources/assets/js/vendor/materialize.min.js') }}"></script>

    <script>


        $(document).ready(function () {

            $('#carousel').carousel();

        });


    </script>
</footer>

</body>
</html>
