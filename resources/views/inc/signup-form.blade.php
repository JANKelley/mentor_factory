{!! Form::open(['url' => 'signup/submit']) !!}
<div class="">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('company', 'Company Name')}}
                {{Form::text('company', '', ['class'=>'form-control', 'required'=>'true'])}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class'=>'form-control', 'required'=>'true'])}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', '', ['placeholder'=>'email@example.com', 'class'=>'form-control', 'required'=>'true'])}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('ifcontact', 'Innovation Factory Contact')}}
                {{Form::text('ifcontact', '', ['class'=>'form-control', 'required'=>'true'])}}
            </div>
        </div>
    </div>
    <div>
        {{
            Form::submit('Sign Up', ['class'=>'btn btn-black', 'required'=>'true'])
        }}
    </div>
    <p class="lead"></p>
    <hr class="my-4">
    <p>Already signed up, sign in below</p>
    <a class="btn btn-black arrow" href="/resource" role="button">Sign In</a>
</div>
{!! Form::close() !!}
