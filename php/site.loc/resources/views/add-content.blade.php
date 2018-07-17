@extends('layouts.index')
@section('')


<form method="post" action="/views/add-content">
    {!! csrf_field() !!}
        <div class="registration">
            <h1>Registration</h1>
            <div id="register_output"></div>
        <div class="form-group">
            <p><strong><center>Username</center></strong></p>                
            <p><input id="username" type="text" class="form-control" placeholder="username"></p>
            </div>
        <div class="form-group">
            <p><strong><center>Password</center></strong></p>
            <p><input id="password" type="password" class="form-control" placeholder="password"></p>
            <p><input id="password2" type="password" class="form-control" placeholder="confirm password"></p>
        </div>                
            <a href= {{ ('auth') }} >Log in</a>
            <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        </div>
</form>

@endsection