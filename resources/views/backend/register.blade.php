@extends('backend.app')
@section('content')
    <div class="section">

        <div class="row">
            <form class="col s12" action="{{url("admin/register")}}" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Login" id="Login" type="text" class="validate" name="Login" value="{{ old('Login') }}">
                        <label for="Login">Login</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Security" type="password" class="validate" placeholder="Security" name="Security">
                        <label for="Security">Security</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="ConfirmSecurity" type="password" class="validate" placeholder="Confirm Security"
                               name="Security_confirmation">
                        <label for="ConfirmSecurity">Confirm Security</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Register" type="submit" class="btn  right" value="Register">

                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection
