@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$course->name}}
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="{{$course->image_src}}" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <p><b>{{$course->description}}</b></p>
        <h3 class="my-3"></h3>
        <ul style="list-style-type: none;margin:0;padding:0">
          <li><span style="color:#f4511e" class="far fa-clock"></span> <span style="font-weight: bold"> Durée:</span> {{$course->duration}}</li>
          <li><span style="color:#f4511e" class="	fa fa-history"></span> <span style="font-weight: bold">Fréquence:</span>  {{$course->frequency}}</li>
          <li><span style="color:#f4511e" class="fa fa-child"></span> <span style="font-weight: bold"> Cible:</span> {{$course->target}}</li>
          <li><span style="color:#f4511e" class="fa fa-lightbulb"></span> <span style="font-weight: bold"> Vêtements recommendés:</span> {{$course->recommended_outfit}}</li>
          <li><span style="color:#f4511e" class="	fa fa-credit-card"></span> <span style="font-weight: bold"> Prix/année:</span> {{$course->price}}</li>
          <li><span style="color:#f4511e" class="	fa fa-credit-card"></span> <span style="font-weight: bold">Peix/mois:</span> {{$course->price_month}}</li>

        </ul>
      </div>
  
    </div>
    
  
  </div>
  <!-- /.container -->

@endsection