@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="mt-3"> Gérer Vos Cours</h1>
    <a href="/courses/create" class="btn  orange mb-3 mt-3 " role="button" aria-pressed="true">Ajouter</a>
     <table class="table">
            <thead class="thead-dark">
              @if(auth::user()->role =='Manager')
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Du Cours</th>
                <th scope="col">Cré Le</th>
                <th scope="col">Modifié le </th>
              </tr>
              @endif
              @if(auth::user()->role =='Owner')
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Du Cours</th>
                <th scope="col">Salle De Sport</th>
                <th scope="col">Cré Le</th>
                <th scope="col">Modifié le </th>
              </tr>
              @endif
            </thead>
            <tbody>
                @foreach ($course as $course)
                @if(auth::user()->role =='Manager')
                @if($course->id_gym == auth::user()->member_in)
              <tr>
                <th scope="row">{{$course->id_cours}}</th>
                <td><a href="/courses/{{$course->id_cours}}"> {{$course->name}} </a></td>
                <td>{{$course->created_at}}</td>
                <td>{{$course->updated_at}}</td>
              </tr>
              @endif
              @endif
              
              @if(auth::user()->role =='Owner')
              @foreach ($gyms as $gym)
              @if($course->id_gym ==$gym->id_gym && $gym->id == auth::user()->id)
              <tr>
                <th scope="row">{{$course->id_cours}}</th>
                <td><a href="/courses/{{$course->id_cours}}"> {{$course->name}} </a></td>
                <td><a href="/gyms/{{$gym->id_gym}}"> {{$gym->name}} </a></td>
                <td>{{$course->created_at}}</td>
                <td>{{$course->updated_at}}</td>
              </tr>
              @endif
              @endforeach
              @endif
              @endforeach
         
            </tbody>
          </table>
      
   </div>
    
@endsection