@extends('layouts.dashboard')
@section('content')
<h1>ajouter salle de sport </h1>
    {!!Form::open(['action' => 'GymController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div class ='form-group'>
        {{Form::label('name' , 'name')}}
        {{Form::text('name' , null , ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('adress' , 'adress')}}
        {{ Form::text('adress' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('phone_number' , 'n° téléphone')}}
        {{Form::text('phone_number' ,  null , ['class' => 'form-control'])}}
    </div>
    <div class ='form-group'>
        {{Form::label('description' , 'description')}}
        {{Form::text('description' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('image_src' , 'photo de couverture')}}
        <br>
        {{Form::file('image_src' )}}
    </div>

    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection