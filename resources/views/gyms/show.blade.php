@extends('layouts.dashboard')
@section('content')
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$gym->name}}
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="{{$gym->image_src}}" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <p><b>{{$gym->description}}</b></p>
        <h3 class="my-3"></h3>
        <ul>
          <li><span style="color:#f4511e" class="	fa fa-map-marker"></span> {{$gym->adress}}</li>
          <li><span style="color:#f4511e" class="fa fa-phone"></span> {{$gym->phone_number}}</li>
          
        </ul>
@if(auth::user()->role =='Owner' && $gym->id == auth::user()->id)
         <div class="row">     
            <div  class="ml-4">
            {!!Form::open(['action'=>['GymController@destroy' , $gym->id_gym] , 'method' =>'POST' ])!!}
            {{Form::hidden('_method' , 'DELETE')}}
            {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}</div>&nbsp &nbsp
             <button type="button" class="btn btn-info"><a href="/gyms/{{$gym->id_gym}}/edit" style="color:white;" >Modifier</a></button> 
             </div>
             @endif
      </div>
  
    </div>
    <!-- /.row -->
  
   
  </div>
  <!-- /.container -->


        
      


@endsection