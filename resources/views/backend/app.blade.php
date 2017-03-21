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


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/scss/vendor/materialize.css') }}"
          media="screen,projection"/>


    <link href="{{ asset('resources/assets/scss/vendor/materialNote.css') }}" rel="stylesheet"/>
    <link href="{{ asset('resources/assets/css/vendor/codeMirror/codemirror.css') }}" rel="stylesheet"/>
    <link href="{{ asset('resources/assets/css/vendor/codeMirror/monokai.css') }}" rel="stylesheet"/>


    <link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/scss/vendor/backend.css') }}"
          media="screen,projection"/>
    @yield("styles")
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
    <div class="container newcontainer">
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


    <script type="text/javascript">

        /*
         Initialize global variable for javascript

         */


        var BASE_URL = '{{ url('/') }}/';
        var BASE_PATH = '{{ base_path() }}/';
        var RESOURCES_PATH = '{{ asset('/resources/') }}/';


    </script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('resources/assets/js/vendor/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/ckMaterializeOverrides.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/codeMirror/codemirror.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/codeMirror/xml.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/materialNote.js') }}"></script>
    <script>


        $(document).ready(function () {


            var toolbar = [
                ['style', ['style', 'bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['fonts', ['fontsize', 'fontname']],
                ['color', ['color']],
                ['undo', ['undo', 'redo', 'help']],
                ['ckMedia', ['ckImageUploader', 'ckVideoEmbeeder']],
                ['misc', ['link', 'picture', 'table', 'hr', 'codeview', 'fullscreen']],
                ['para', ['ul', 'ol', 'paragraph', 'leftButton', 'centerButton', 'rightButton', 'justifyButton', 'outdentButton', 'indentButton']],
                ['height', ['lineheight']],
            ];

            $('.Editor').materialnote({
                toolbar: toolbar,
                height: 550,
                minHeight: 100,
                defaultBackColor: '#fff'
            });

            /*$('.Editor').materialnote({
             airMode: true,
             airPopover: [
             ['color', ['color']],
             ['font', ['bold', 'underline', 'clear']],
             ['para', ['ul', 'paragraph']],
             ['table', ['table']],
             ['insert', ['link', 'picture']]
             ]
             });*/
        });


    </script>

    @yield("scripts")
</footer>

</body>
</html>
