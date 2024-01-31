@extends('layouts.welcomelayout')
@section('content')
    <div class="wrapper">
        <form method='POST' action='login'>
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            <h2>Login</h2>

            <div class="input-field">
                <input type="text" required name="Email">
                <label>Enter your Email</label>
            </div>
            <div class="input-field">
                <input type="password" required name="pswd">
                <label>Enter your password</label>
            </div>
            <div class="forget">
                <label for="remember">
                    <input type="checkbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="{{ asset('/register/view') }}">Register</a></p>
            </div>
        </form>
    </div>
@stop
