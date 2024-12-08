@extends('backend.master')

@section('site-title')
    Dashboard
@endsection

@section('session_message')
    @if (Session::has('message'))
        <p>
            {{Session::get('message')}}
        </p>
    @endif
@endsection