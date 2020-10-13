@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="mt-3"> Gérer Vos Abonnements</h1>
    <a href="/users" class="btn orange mb-3 mt-3 " role="button" aria-pressed="true">Ajouter</a>
        
    {!!Form::open(['action' => 'subscriptionController@search' , 'method' => 'GET','style'=>'display:inline' ]) !!}
    <div class="input-group mb-3 mt-3">
   {{Form::text('search' , '', ['class' => 'form-control','placeholder' => 'Rechercher Abonnement'] )}}
   
   <div class="input-group-append"> 
     
     {{Form::button('<i class="fa fa-search"></i>' , ['type' => 'submit','class'=> 'btn orange'])}}
                     
       {!! Form::close() !!}
 </div>
 </div>
 
    <table class="table">
            <thead class="thead-dark">
              
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom De L'abonné</th>
                <th scope="col">Email De L'abonné</th>
                <th scope="col">Nom Du Cours </th>
                <th scope="col">Nom De La Salle</th>
                <th scope="col">Cré Le</th>
                <th scope="col">Expiré le </th>
              </tr>
            
              </thead>
            <tbody>
                @foreach ($subscriptions as $subscription)
                @if(auth::user()->role =='Owner')
                 @foreach ($gyms as $gym)
                @if($subscription->id_gym ==$gym->id_gym && $gym->id == auth::user()->id)
                
              <tr>
                <th scope="row">{{$subscription->id_subscription}}</th>
                <td> {{$subscription->userMember->name}}</td>
                <td> {{$subscription->userMember->email}}</td>
                <td>{{$subscription->usercourse->name}}</td>
                <td>{{$subscription->gym->name}}</td>
                <td>{{$subscription->created_at}}</td>
                <td>
                @if (   $subscription->expired_at->gt(\Carbon\Carbon::now()))
                     now
                    @endif 
                    {{$subscription->expired_at->format('y-m-d')}}
                </td>
              </tr>
              @endif
              @endforeach
              @endif

              @if(auth::user()->role =='Manager')
              @if($subscription->id_gym == auth::user()->member_in)
              <tr>
                <th scope="row">{{$subscription->id_subscription}}</th>
                <td> {{$subscription->userMember->name}} </td>
                <td> {{$subscription->userMember->email}} </td>

                <td>{{$subscription->usercourse->name}}</td>
                <td>{{$subscription->gym->name}}</td>
                <td>{{$subscription->created_at}}</td>
              
                <td>
                    @if ($subscription->created_at->isToday() )
                    <small class="fin">{{$subscription->created_at}}</small>
        
                    @endif 
                </td>
              </tr>
              @endif
              @endif
              @endforeach
         
            </tbody>
          </table>
      
   </div>
    
@endsection