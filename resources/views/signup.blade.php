@extends('layouts.app')

@section('content')
    <div class="container">
        @include('inc.errors')
        {!! Form::open(['url' => 'signup/submit']) !!}
            <div class="col-md-8">
                <div class="form-group">
                    {{Form::label('company', 'Company Name')}}
                    {{Form::text('company', '', ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', '', ['placeholder'=>'email@example.com', 'class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('ifcontact', 'Innovation Factory Contact')}}
                    {{Form::text('ifcontact', '', ['class'=>'form-control'])}}
                </div>
                <div>
                    {{
                        Form::submit('Submit', ['class'=>'btn btn-primary'])
                    }}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
