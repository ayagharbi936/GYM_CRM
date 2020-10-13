@extends('layouts.dashboard')
@section('content')
<h1>Les gerants</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/users" class="btn btn-primary">Ajouter gerant</a>
      </div>
    </div>
  </div>
@if (count($users)> 0 )
@foreach ($gyms as $gym)
@if(auth::user()->id == $gym->id)
@foreach ($users as $user)

@if($user->member_in == $gym->id_gym)
<div class ='card p-3 mt-3 mb-3'>
    <div class="row">
        <div class="col-md-2 col-sm-2" style=" width: 100%;
        height: 300px;
        min-height: 200px;
        position: relative;
        
        background: url('{{$user->imageSrc}}') center no-repeat;
        background-size: cover;">
           
        </div>
        <div class="col-md-10 col-sm-10">
                <h2 >   <a href="/users/{{$user->id}}"> {{$user->name}} </a></h2>
                <small><span class="txt_bold"> Inscrit le</span> : {{$user->created_at}} </small> <br>
                <small> <span class="txt_bold"> Gérant à</span> :  {{$gym->name}} </small><br>
                <small> <span  class="txt_bold"> Role :</span>
                @if ( $user->role =='Manager')
            Gérant
@endif</small><br>
                <small> <span  class="txt_bold"> Adresse email :</span>  {{$user->email}} </small><br>
                <small> <span class="txt_bold"> téléphone :</span>  {{$user->phone}} </small>
        </div>
    </div>
</div>
    @endif
@endforeach
@endif
@endforeach
@else
<p>aucun gerant</p>
@endif
@endsection