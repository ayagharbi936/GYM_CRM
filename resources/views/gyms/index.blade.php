@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="mt-3"> Gérer Vos Salles De Sport</h1>
    <a href="/gyms/create" class="btn orange mb-3 mt-3 " role="button" aria-pressed="true">Ajouter</a>
     <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom de la salle</th>
                <th scope="col">crée le</th>
                <th scope="col">modifiée le </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($gyms as $gym)
                @if(auth::user()->role =='Owner' && $gym->id == auth::user()->id)
                
              <tr>
                <th scope="row">{{$gym->id_gym}}</th>
                <td><a href="/gyms/{{$gym->id_gym}}"> {{$gym->name}} </a></td>
                <td>{{$gym->created_at}}</td>
                <td>{{$gym->updated_at}}</td>
              </tr>
              
              @elseif(auth::user()->role =='Admin')
              <tr>
                <th scope="row">{{$gym->id_gym}}</th>
                <td><a href="/gyms/{{$gym->id_gym}}"> {{$gym->name}} </a></td>
                <td>{{$gym->created_at}}</td>
                <td>{{$gym->updated_at}}</td>
              </tr>
              @endif
              @endforeach
              
            </tbody>
          </table>
     
   </div>
    
@endsection