@extends('layouts.dashboard')
@section('content')
<h1>modifier cour</h1>
{!! Form::open(['action' => ['CourseController@update' , $course->id_cours] , 'method' => ' Post']) !!}

<div class ='form-group'>
        {{Form::label('name' , 'Nom')}}
        {{Form::text('name' , $course->name, ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('description' , 'Description')}}
        {{ Form::textarea('description' , $course->description, ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('duration' , 'Duration')}}
        {{Form::text('duration' , $course->duration ,['class' => 'form-control']) }}
    </div>

    <div class ='form-group'>
        {{Form::label('frequency' , 'Frequence')}}
         {{ Form::textarea('frequency' , $course->frequency, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('target' , 'Cible')}}
         {{ Form::textarea('target' , $course->target, ['class' => 'form-control'])}}
     </div>
     <div class ='form-group'>
        {{Form::label('recommended_outfit' , 'tenue')}}
         {{ Form::textarea('recommended_outfit' , $course->recommended_outfit, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_month' , 'Prix par mois')}}
         {{ Form::textarea('price_month' , $course->price_month, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price' , 'Prix par an')}}
         {{ Form::textarea('price' , $course->price, ['class' => 'form-control'])}}
     </div>


    {{Form::hidden('_method' , 'PUT')}}
    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection