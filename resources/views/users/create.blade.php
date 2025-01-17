@extends('layouts.dashboard')
@section('content')
<h1>Ajouter un utilisateur</h1>
    {!!Form::open(['action' => 'UserController@store' , 'method' => 'POST' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom')}}
        {{Form::text('name' , '', ['class' => 'form-control'] )}}
    </div>

    <div class ='form-group'>
       {{Form::label('email' , 'Adresse email')}}
        {{ Form::text('email' , '', ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('password' , 'Mot de passe')}}
        {{Form::password('password' , ['class' => 'form-control']) ,csrf_field() }}
    </div>

    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection