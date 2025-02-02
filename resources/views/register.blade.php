@extends('master')

@section('page-title')
    Register Page
@endsection

@section('content')
    <div class="register-container px-5">
        <h2 class="text-center my-3">Register Form</h2>
        <form action="/submit-register" method="post" >
            @csrf
            <label for="form-label">Name : </label>
            <input type="text" class="form-control border border-1 border-info my-3" name="name">
            <label for="form-label">Email : </label>
            <input type="email" class="form-control border border-1 border-info my-3" name="email">
            <label for="form-label">Password : </label>
            <input type="password" class="form-control border border-1 border-info my-3" name="password">
            <label for="form-label">Roles : </label>
            <select class="form-select border border-1 border-info my-3" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" class="btn btn-outline-success my-3" value="Register">
            <input type="reset" class="btn btn-outline-danger my-3" value="Cancel">
            <span >Already have an account?<a href="/login" class="btn btn-link">Login</a></span>
        </form>
    </div>
@endsection