<h2 class="text-center">Ajouter Abonnement</h2>
    {!!Form::open(['action' => 'subscriptionController@store' , 'method' => 'POST' ]) !!}



    @if(auth::user()->role =='Manager')
    <div class ='form-group'>
    {{Form::label('id_course' , 'Identifiant du cours')}}
    {!! Form::select('id_course',App\Course::where('id_gym',auth::user()->member_in)->pluck('name', 'id_cours'),null,['class'=>'form-control','placeholder'=>'Choisir le cours']) !!}
        </div>
    @endif
        @if(auth::user()->role =='Owner')
        <div class ='form-group'>
           {{Form::label('id_gym' , 'Salle de sport')}}
        {!! Form::select('id_gym',App\Gym::where('id',auth::user()->id)->pluck('name', 'id_gym'),['class'=>'form-control','placeholder'=>'Choisir la salle de sport']) !!}
       </div>
       <div class ='form-group'>
        {{Form::label('id_course' , 'Identifiant du cours')}}
        {!! Form::select('id_course',App\Course::whereHas('gymsbelongs', function (Illuminate\Database\Eloquent\Builder $query) {
            $query->where('id', auth::user()->id);
             })->get()->pluck('name', 'id_cours'),null,['class'=>'form-control','placeholder'=>'Choisir le cours']) !!}
       </div>
      
       @endif
    <div class ='form-group'>
       {{Form::label('expired_at' , "date d'expiration")}}
            {{Form::text('expired_at' ,null, ['class' => 'form-control' , 'placeholder' => 'aa-mm-jj'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('id' , "Identifiant d'utilisateur")}}

            {{Form::text('id' , $user->id, ['class' => 'form-control' , 'placeholder' => 'name'])}}
        </div>



    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
