@extends('backend.master')

@section('site-title')
Logout
@endsection

@section('content')
<div class="row  mx-4 my-2">
    <div class="col-xl-12">
        <!-- HTML5 Inputs -->
        <div class="card mb-4">
            <h5 class="card-header">
                @yield('site-title')
            </h5>
            <div class="card-body">
                <h4>Are you sure you want to Logout?</h4>
                <form action="{{route('submitLogout')}}" method="post">
                    @csrf
                    <div class="mb-3 ">   
                        <button type="submit" class="btn btn-outline-success">Logout</button>
                        <a href="{{route('category.view')}}" class="btn btn-outline-danger ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection