@extends('layouts.app')


@section('content')
<div class="container">
    @include('inc.errors')
    <div class="jumbotron mt-5">
    <h1 class="display-4">Home</h1>
    <p class="lead">Welcome to mentorship at jankelley</p>
    <hr class="my-4">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultrices justo velit, vitae rhoncus lacus suscipit ac. Aliquam vitae mauris nec odio fringilla venenatis. Quisque id ligula sed massa placerat viverra eget vitae arcu. Fusce et turpis sollicitudin, accumsan risus vel, lacinia turpis. Etiam malesuada consectetur massa ut ullamcorper. Praesent non pulvinar enim. Nunc eu viverra velit, non cursus libero. Morbi laoreet magna eget sem molestie mattis. Sed dignissim ullamcorper mauris, vitae accumsan urna tempor ut. Etiam eu vehicula erat. Maecenas a blandit mauris, non efficitur augue. Aliquam et ante turpis.</p>
    <a class="btn btn-primary btn-lg" href="/resource" role="button">View Resources</a>
    </div>
</div>
@endsection
