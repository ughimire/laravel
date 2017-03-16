@extends('backend.app')

@section('content')


    <div class="section">

        <a href="{{url('admin/category/add')}}" class="btn-floating btn-large waves-effect waves-light red right"><i
                    class="material-icons">add</i></a>

        <div class="row">


            <table width="" class="bordered striped">
                <thead>

                <th>ID</th>
                <th>Login</th>
                <th style="text-align: center;">Actions</th>

                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->ID }} </td>
                        <td> {{ $category->Category }} </td>
                        <td style="position: relative">

                            <div class="fixed-action-btn horizontal click-to-toggle custom-action-btn">
                                <a class="btn-floating btn-large red">
                                    <i class="material-icons">settings</i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/category/edit/'.$category->ID)}}"
                                           title="Category edit"
                                           class="btn-floating small-floating green"><i
                                                    class="material-icons">mode_edit</i></a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/category/edit/'.$category->ID)}}"
                                           title="Category delete"
                                           class="btn-floating small-floating red darken-1"><i
                                                    class="material-icons">delete</i></a>
                                    </li>

                                </ul>
                            </div>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination"> {{ $categories->links("backend.shared.pagination") }} </div>
        </div>


    </div>
    <div class="divider"></div>


@endsection
