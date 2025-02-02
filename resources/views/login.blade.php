@extends('master')

@section('page-title')
    Login Page
@endsection

@section('content')
<div class="register-container px-5">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <h2 class="text-center my-3">Login Form</h2>
        <form action="/submit-login" method="post" >
            @csrf
            <label for="form-label">Email : </label>
            <input type="email" class="form-control border border-1 border-info my-3" name="email">
            <label for="form-label">Password : </label>
            <input type="password" class="form-control border border-1 border-info my-3" name="password">
            <input type="submit" class="btn btn-outline-success my-3" value="Login">
            <input type="reset" class="btn btn-outline-danger my-3" value="Cancel">
            <span >Have no account?<a href="/register" class="btn btn-link">Register</a></span>
        </form>
    </div>
    <script>
        const alert =document.getElementsByClassName('alert')[0];
        setTimeout(() => {
            alert.remove();
        },3000)
    </script>
@endsection