<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sports Arena</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <!-- <link href="css/app.css" rel="stylesheet"> -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
  .orange{
  background-color:#f4511e ;
  color: white;
}
</style>
</head>

<body>


  @if (Auth::User()->role != 'User' )
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right text-center" id="sidebar-wrapper">
      <div class="sidebar-heading font-weight-bold  mt-3 mb-5">
        
         <h4> Sport Arena</h4>
        
         </div>
      <div class="list-group list-group-flush">
       

        @if(auth::user()->role =='Admin')
        <a href="/users" class="list-group-item list-group-item-action bg-light font-weight-bold">Utilisateurs</a>
  


        @elseif(auth::user()->role =='Owner')
        <a href="/gyms" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Salle De Sport</a>
        <a href="/users" class="list-group-item list-group-item-action bg-light font-weight-bold">Utilisateurs</a>
        <a href="/managers" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Les gerants</a>
        <a href="/courses" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Les Cours</a>
        <a href="/subscription" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Les Abonnements</a>

        @elseif(auth::user()->role =='Manager')
        <a href="/users" class="list-group-item list-group-item-action bg-light font-weight-bold">Utilisateurs</a>
        <a href="/courses" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Les Cours</a>
        <a href="/subscription" class="list-group-item list-group-item-action bg-light font-weight-bold">Gérer Les Abonnements</a>
  @endif

      </div>
    </div>
@endif

    <!-- /#sidebar-wrapper -->

    <div style="width:100%; height:100%; position:relative; left:10px;top:0;overflow:hidden;" >

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
      <a class="col-10" href="/#about"><button class="btn orange" id="menu-toggle">Retour page d'acceuil</button></a>
        </button>
        

         <!-- Right Side Of Navbar -->
         <div class="collapse navbar-collapse col-2" id="navbarSupportedContent">
          
      
        <div class="dropdown">
          <button type="button" class="btn orange dropdown-toggle" data-toggle="dropdown">
            {{ Auth::user()->name }}
          </button>
          <div class="dropdown-menu">
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </div>
        </div> 
       </div>
      </nav>
     
      <div class="container">
        @include('inc.message')

    @yield('content')
</div>

  </div>

 
</body>

</html>