
@extends('layouts.app')
@section('content')
<!-- Page Content -->
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
      </div>
  
    </div>
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Voir Cours</h3>
  
    <div class="row">
        @foreach ($gym->cours as $cours)

      <div class="col-md-3 col-sm-6 mb-4 " >
        <div style="background-color: rgba(0, 0, 0, 0.5);">
        <a href="/courses/{{$cours->id_cours}}">
          <div class="card" >
            <img class="card-img-top" src="{{$cours->image_src}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">{{$cours->name}}</h4>
              <button class="orange"> <a href="#" class="btn orange">Voir Plus</a></button>
            </div>
          </div>
              
            </a>
        </div>
      </div>
  
  @endforeach 
    </div>
    <!-- /.row -->
  
  </div>
  <!-- /.container -->

@endsection