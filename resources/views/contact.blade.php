@extends('layouts.app')

@section('content')
    <h1>CONTACT</h1>
    <p>this is a paragraph in contact page!!!</p>
    {!! Form::open(['url' => 'contact/submit']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'example@gmail.com'] )}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message','',['class' => 'form-control', 'placeholder' => 'Enter message'] )}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'bt btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection
