@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-5 text-center mt-5">
                <h3 class="mb-3">Enter email address that you used to sign up below.</h3>
                @include('inc.errors')
                {!! Form::open(['url' => '/forgot-password/submit']) !!}
                <div class="form-group">
                    {{Form::email('email', '', ['class'=>'form-control text-center','placeholder'=>'example@gmail.com', 'required'=>'true'])}}
                </div>
                <div class="div">
                    {{
                        Form::submit('Send Email', ['class'=>'btn btn-black'] )
                    }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
