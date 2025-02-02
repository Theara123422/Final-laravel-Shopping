@extends('master')

@section('page-title')
    Dashboard Page
@endsection

@section('content')
    <div class="dashboard">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2>Welcome to dashboard page.</h2>
    </div>
    <script>
        const alert =document.getElementsByClassName('alert')[0];
        setTimeout(() => {
            alert.remove();
        },3000)
    </script>
@endsection