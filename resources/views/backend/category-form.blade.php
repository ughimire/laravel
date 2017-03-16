@extends('backend.app')

@section('content')
    <div class="section">
        <div method="post" action="google.com">
            <div class="row">

                <div class="col s9">

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Category Title" id="Category" type="text" class="validate">
                            <label for="Category">Category</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="Slug" type="text" class="validate" disabled>
                            <label for="Slug">Slug</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div id="Editor" class="Editor" name="Editor"></div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col s3">

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="Category" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


    <div class="divider"></div>


@endsection


