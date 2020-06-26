@extends('layouts.app')


@section('content')
<div class="container mt-5">
    @include('inc.errors')
    <div class="row">
        <div class="col-md-5 d-md-flex">
            <div class="justify-content-center align-self-center">
                <h1 class="display-5 marked-text">Welcome to Virtual Mentoring with Jan Kelley. Please register here so we can get <span class="highlight">started.</span></h1>
            </div>
            </div>
        <div class="col-md-7">
            <div class="pl-md-5">
                @include('inc.signup-form')
            </div>
        </div>
    </div>
</div>
@endsection
