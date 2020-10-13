
@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  
  @if(auth::user()->role =='Admin')
  <h1>ajouter Propriétaire</h1>
  <p>le role actuel est :&nbsp @if( $user->role =='Admin')
    Administrateur
@elseif ( $user->role =='Manager')
Gérant
@elseif ( $user->role =='Owner')
Propriétaire
@else
Client
@endif </p> 
    {!! Form::open(['action' => ['UserController@update' , $user->id] , 'method' => ' Post','enctype' => 'multipart/form-data']) !!}
{{Form::label('role' , 'Role')}}
{!! Form::select('role',['Owner' => 'Propriétaire','Manager'=>'Gérant','Client'=>'client'],null,['class'=>'form-control','placeholder'=>'Choisir le Role']) !!}

{{Form::hidden('_method' , 'PUT')}}
{{Form::submit('submit' , ['class'=> 'btn btn-success'])}}
{!! Form::close() !!}
 
@elseif(auth::user()->role =='Owner')
<h1>Ajouter/Supprimer Gerant</h1>
 <p>le role actuel est :&nbsp @if( $user->role =='Admin')
    Administrateur
@elseif ( $user->role =='Manager')
Gérant
@elseif ( $user->role =='Owner')
Propriétaire
@else
Client
@endif </p> 
{!! Form::open(['action' => ['UserController@update' , $user->id] , 'method' => ' Post','enctype' => 'multipart/form-data']) !!}
{{Form::label('role' , 'Role')}}
{!! Form::select('role',['Manager'=>'Gérant','Client'=>'client'],$user->role,['class'=>'form-control','placeholder'=>'Choisir le Role']) !!}
{{Form::label('member_in' , 'Membre à')}}
{!! Form::select('member_in',[0=>'aucune', App\Gym::where('id',auth::user()->id)->pluck('name', 'id_gym')],$user->member_in,['class'=>'form-control','placeholder'=>'Choisir la salle de sport']) !!}
{{Form::hidden('_method' , 'PUT')}}
{{Form::submit('submit' , ['class'=> 'btn btn-success mt-3'])}}
{!! Form::close() !!}
@endif

   </div>
    
@endsection