@extends('layouts.auth-pages')

@section('content')
<div class="row mt-2">
    <div class="col-12 col-md-8 offset-2">
        <div class="alert alert-danger text-center">
            <strong>Uh, uh, uh! </strong>
            Bawal Ka Dito Kaibigan !!!!
        </div>
    </div>
    <div class="col-12 col-md-4 offset-4 mb-3">
        @auth
            <a href="{{ URL::previous() }}" class="btn btn-secondary btn-block btn-sm">Back</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-warning btn-block btn-sm">Login</a>
        @endauth
    </div>
    <div class="col-12 col-md-4 offset-4">
        <img src="{{ asset('images/not-authorized.gif') }}" alt="Not Authorized" class="img-fluid">
    </div>
</div>
@endsection
