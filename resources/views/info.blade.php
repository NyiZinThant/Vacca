@extends('layouts.app')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Information</h1>
                <p class="lead fw-normal text-white-50 mb-0">Stay home, Stay Safe</p>
            </div>
        </div>
    </header>
    <div style="height:75vh" class="d-flex justify-content-center align-items-center">
        @if (Session::has('message'))
            <div class="alert alert-success">
                <h3 class="px-2 pt-2">{{ Session::get('message') }}</h3>
            </div>
        @elseif(Auth::user())
            <div class="alert alert-warning">
                <h3 class="px-2 pt-2">404 Page not found</h3><br>
                <a href="{{ route('home') }}">Back</a>
            </div>
        @else
            <div class="alert alert-danger">
                <h3 class="px-2 pt-2">"You need to Login to Register Vaccination Form"</h3><br>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}" style="margin-left: 10px">Register</a>
            </div>
        @endif
    </div>
@endsection
