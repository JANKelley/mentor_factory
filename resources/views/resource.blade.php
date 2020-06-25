@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron mt-5">
    <h1 class="display-4">Protected Resource!</h1>
    <p class="lead">Make an appointment using Calendly.</p>
    <hr class="my-4">
    <ul class="list-group">
        <li class="list-group-item">Petyr Baelish <a href="#" class="btn btn-primary">Book a meeting</a></li>
        <li class="list-group-item">Jon Snow <a href="#" class="btn btn-primary">Book a meeting</a></li>
        <li class="list-group-item">Tyrion Lannister <a href="#" class="btn btn-primary">Book a meeting</a></li>
        <li class="list-group-item">Khal Drogo <a href="#" class="btn btn-primary">Book a meeting</a></li>
        <li class="list-group-item">Jaime Lannister <a href="#" class="btn btn-primary">Book a meeting</a></li>
    </ul>
    </div>
</div>
@endsection