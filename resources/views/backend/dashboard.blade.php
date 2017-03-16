@extends('backend.app')

@section('content')


    <div class="section">

        <div class="row">


            <table width="" class="bordered striped">
                <thead>

                <th>ID</th>
                <th>Login</th>
                <th style="text-align: center;">Actions</th>

                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td> {{ $admin->ID }} </td>
                        <td> {{ $admin->Login }} </td>
                        <td style="position: relative">

                            <div class="fixed-action-btn horizontal click-to-toggle custom-action-btn">
                                <a class="btn-floating btn-large red" {{Auth::guard('admin')->user()->ID==$admin->ID ? '' : 'disabled=disabled title=Denied'}}>
                                    <i class="material-icons">settings</i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{Auth::guard('admin')->user()->ID==$admin->ID ? url('admin/edit/'.$admin->ID) : "#"}}"
                                           title="{{Auth::guard('admin')->user()->ID==$admin->ID ? "Edit" : "Access denied to edit"}}"
                                           class="btn-floating small-floating green"><i
                                                    class="material-icons">mode_edit</i></a>
                                    </li>
                                    <li>
                                        <a href="{{Auth::guard('admin')->user()->ID==$admin->ID ? url('admin/delete/'.$admin->ID) : "#"}}"
                                           title="{{Auth::guard('admin')->user()->ID==$admin->ID ? "Delete" : "Access denied to delete"}}"
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
            <div class="pagination"> {{ $admins->links("backend.shared.pagination") }} </div>
        </div>


    </div>
    <div class="divider"></div>


@endsection
