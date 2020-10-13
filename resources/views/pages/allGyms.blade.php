@extends('layouts.app')
@section('content')
<h1>Nos Salles De Sport</h1>

@if (count($gyms)> 0 )
@foreach ($gyms as $gym)
<div class ='card p-3 mt-3 mb-3'>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100% " src="{{$gym->image_src}}">
        </div>
        <div class="col-md-8 col-sm-8">
            <h2 >   <a href="/gyms/{{$gym->id_gym}}"> {{$gym->name}} </a></h2>
            <small><span class="txt_bold"> Poriétaire </span> : {{$gym->user->name}} </small> <br>
            <small> <span class="txt_bold"> Téléphone</span> :   {{$gym->phone_number}} </small><br>
            <small> <span  class="txt_bold"> Adresse  </span>: {{$gym->adress}} </small> <br>
            <small> <span  class="txt_bold"> Créé le </span> : {{$gym->created_at}}</small>
        </div>
    </div>
</div>
@endforeach

@else
<p>pas de salle de sport encore disponible</p>
@endif
@endsection
