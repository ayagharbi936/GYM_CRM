@extends('layouts.dashboard')
@section('content')
<h1>Ajouter Cours</h1>
    {!!Form::open(['action' => 'CourseController@store' , 'method' => 'POST'  , 'enctype' => 'multipart/form-data' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom')}}
        {{Form::text('name' , null, ['class' => 'form-control'] )}}
    </div>
    <div class ='form-group'>
       {{Form::label('description' , 'Description')}}
        {{ Form::textarea('description' , null, ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('duration' , 'Duration')}}
        {{Form::text('duration' , null, ['class' => 'form-control']) }}
    </div>

    <div class ='form-group'>
        {{Form::label('frequency' , 'Frequence')}}
         {{ Form::text('frequency' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('target' , 'Cible')}}
         {{ Form::text('target' , null, ['class' => 'form-control'])}}
     </div>
     <div class ='form-group'>
        {{Form::label('recommended_outfit' , 'tenue')}}
         {{ Form::text('recommended_outfit' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_month' , 'Prix par mois')}}
         {{ Form::text('price_month' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price' , 'Prix par annéé')}}
         {{ Form::text('price' , null, ['class' => 'form-control'])}}
     </div>
     @if(auth::user()->role =='Owner')
     <div class ='form-group'>
        {{Form::label('id_gym' , 'Salle de sport')}}
     {!! Form::select('id_gym',[0=>'aucune', App\Gym::where('id',auth::user()->id)->pluck('name', 'id_gym')],['class'=>'form-control','placeholder'=>'Choisir la salle de sport']) !!}
    </div>
    @endif
    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection