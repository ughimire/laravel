@extends('backend.app')

@section('content')
    <div class="section">


        <div class="row">


            <table width="" class="bordered striped">
                <thead>

                <th>ID</th>
                <th>Login</th>

                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td> {{ $admin->ID }} </td>
                        <td> {{ $admin->Login }} </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination"> {{ $admins->links("backend.shared.pagination") }} </div>
            <div id="carousel" class="carousel">
                <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
                <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
                <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
                <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
                <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
            </div>
        </div>


    </div>
    <div class="divider"></div>


@endsection
