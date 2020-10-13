@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="mt-3">Trouver Tous Les Utilisateurs</h1>
    <a href="/users/create" class="btn  orange mb-3 mt-3 " role="button" aria-pressed="true">Ajouter</a>
    
           
      {!!Form::open(['action' => 'UserController@search' , 'method' => 'GET','style'=>'display:inline' ]) !!}
       <div class="input-group mb-3 mt-3">
      {{Form::text('search' , '', ['class' => 'form-control','placeholder' => 'Rechercher Utilisateur'] )}}
      
      <div class="input-group-append"> 
        
        {{Form::button('<i class="fa fa-search"></i>' , ['type' => 'submit','class'=> 'btn orange'])}}
                        
          {!! Form::close() !!}
    </div>
    </div>
    
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Sexe</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Adresse</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Cré le</th>
                <th scope="col">Modifié le</th>
                <th scope="col">role</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                @if($user->role == 'Client')
              <tr>
                <th scope="row">{{$user->id}}</th>
                
                <td> <a href="/users/{{$user->id}}"> {{$user->name}} </a></td> 
                <td>{{$user->email}}</td>
                <td>{{$user->sexe}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->adress}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                   <td>
                 <a href="/users/{{$user->id}}/edit" > {{$user->role}}</a>
                </td>
                  @endif
                 

              </tr>
              @endforeach
         
            </tbody>
          </table>
      
   </div>
    
@endsection