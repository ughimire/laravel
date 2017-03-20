@extends('backend.app')

@section('content')


    <div class="section">


        <div class="row">

            <div id="FileManager">

            </div>
        </div>


    </div>
    <div class="divider"></div>


@endsection

@section("scripts")

    <script type="text/javascript" src="{{ asset('resources/assets/js/vendor/FileManager.js') }}"></script>


@endsection
