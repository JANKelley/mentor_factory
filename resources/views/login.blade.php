@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 text-center">
            @include('inc.errors')
            {!! Form::open(['url' => '/login/auth']) !!}
            <div class="form-group">
                {{Form::label('passcode', 'Passcode' )}}
                {{Form::text('passcode', '', ['class'=>'form-control text-center', 'required'=>'true'])}}
            </div>
            <div class="div">
                {{
                    Form::submit('Authorize', ['class'=>'btn btn-black'] )
                }}
            </div>
        {!! Form::close() !!}
            <p class="mt-5"><a href="/forgot-password">Forgot Password ?</a></p>
        </div>
    </div>
</div>

@endsection
