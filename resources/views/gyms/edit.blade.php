@extends('layouts.dashboard')
@section('content')
   <h1>Modifier Votre Salle De Sport </h1>
    {!!Form::open(['action' => ['GymController@update' , $gym->id_gym]  , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
   <div class ='form-group'>
        {{Form::label('name' , 'name')}}
        {{Form::text('name' , $gym->name , ['class' => 'form-control'] )}}
    </div>
    <div class ='form-group'>
       {{Form::label('adress' , 'adresse')}}
        {{ Form::text('adress' , $gym->adress , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('phone_number' , 'n° téléphone')}}
        {{Form::text('phone_number' , $gym->phone_number , ['class' => 'form-control'])}}
    </div>
    <div class ='form-group'>
        {{Form::label('description' , 'description')}}
        {{Form::text('description' ,  $gym->description , ['class' => 'form-control'])}}
    </div>

    {{Form::hidden('_method' , 'PUT')}}
    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection