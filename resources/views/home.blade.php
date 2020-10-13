@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue dans votre Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            

                        </div>
                    @endif
<a type="button" href='/dashboard' class="btn btn-success">Clique ici</a>
               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
