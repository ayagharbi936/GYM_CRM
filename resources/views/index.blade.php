<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Sport Arena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url("../image/cover.jpg");
    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  height: 650px;
    color: #fff;
    padding: 150px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .fa {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .card {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .card:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .card-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .card-header {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .card-footer {
    background-color: white !important;
  }
  .card-footer h3 {
    font-size: 32px;
  }
  .card-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .card-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: rgba(0,0,0, .2);
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
 
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  #this{
   background-color: #F4511E; 
  }
  .orange{
  background-color:#f4511e ;
  color: white;
}
.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
.btn-store {
  color: #777777;
  min-width: 140px;
  padding: 12px 20px !important;
  border-color: #dddddd !important;
}

.btn-store:focus, 
.btn-store:hover {
  color: #ffffff !important;
  background-color: #f4511e;
  border-color: #f4511e !important;
}

.btn-store .btn-label, 
.btn-store .btn-caption {
  display: block;
  text-align: left;
  line-height: 1;
}

.btn-store .btn-caption {
  font-size: 12px;
}
.btn-label {
  font-size: 10px;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

   <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="#myPage">Logo</a>
       </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Accueil</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#pricing">Paiement</a></li>
        <li><a href="/allGyms">Salles de sport</a></li>
        <li><a href="/login">Gérer votre salle de sport</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
    <h1>Sport Arena</h1> 
    <p>Un espace Pour Vos Salles De Sport</p>
    <a href="/login" class="btn orange">Commencer!</a>
  </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>A propos</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Voir plus</button>
    </div>
    <div class="col-sm-4">
      <img src="../image/mockup.png" class="img-rounded" alt="mobile">

    </div>
  </div>
</div>
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>Ce que nous offrons</h4>
    <br>
    <div class="row ">
      <div class="col-sm-4">
        <span class="fa fa-compass "></span>
        <h4>Guide</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="fa fa-cog "></span>
        <h4>Gestion</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="fa	fa-users "></span>
        <h4>Communauté</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
        
  </div>
  <div id="pricing" class="container-fluid">
    <div class="text-center">
      <h2>Paiement</h2>
      <h4>Choisissez un plan de paiement qui vous convient</h4>
    </div>
    <div class="row ">
      <div class="col-sm-4 col-xs-12">
        <div class="card  text-center">
          <div class="card-header">
            <h1>Basic</h1>
          </div>
          <div class="card-body">
            <p><strong>20</strong> Lorem</p>
            <p><strong>15</strong> Ipsum</p>
            <p><strong>5</strong> Dolor</p>
            <p><strong>2</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="card-footer">
            <h3>19dt</h3>
            <h4>par mois</h4>
            <button class="btn btn-lg">S'inscrire</button>
          </div>
        </div>      
      </div>     
      <div class="col-sm-4 col-xs-12">
        <div class="card  text-center">
          <div class="card-header">
            <h1>Pro</h1>
          </div>
          <div class="card-body">
            <p><strong>50</strong> Lorem</p>
            <p><strong>25</strong> Ipsum</p>
            <p><strong>10</strong> Dolor</p>
            <p><strong>5</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="card-footer">
            <h3>29dt</h3>
            <h4>par mois</h4>
            <button class="btn btn-lg">S'inscrire</button>
          </div>
        </div>      
      </div>       
      <div class="col-sm-4 col-xs-12">
        <div class="card  text-center">
          <div class="card-header">
            <h1>Premium</h1>
          </div>
          <div class="card-body">
            <p><strong>100</strong> Lorem</p>
            <p><strong>50</strong> Ipsum</p>
            <p><strong>25</strong> Dolor</p>
            <p><strong>10</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="card-footer">
            <h3>49dt</h3>
            <h4>par mois</h4>
            <button class="btn btn-lg">S'inscrire</button>
          </div>
        </div>      
      </div>    
    </div>
  </div>
   <!-- Container (Contact Section) -->
   <div id="contact" class="container-fluid bg-grey">
   <h2 class="text-center">CONTACT</h2>
   <div class="row">
      <div class="col-sm-5">
        <p>Contactez-nous et nous vous répondrons dans les 24 heures.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Tunisia , tunis</p>
        <p><span class="glyphicon glyphicon-phone"></span> +216 12345678</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
     </div>
     <div class="col-sm-7 ">
       <div class="row">
         <div class="col-sm-6 form-group">
           <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
         </div>
         <div class="col-sm-6 form-group">
           <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
         </div>
       </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
  
    <ul class="foote_bottom_ul_amrc">
      <li><a href="#about">Accueil</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#pricing">Paiement</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="/login">Gérer votre salle de sport</a></li>
    </ul>
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @2020 | conçu par <a href="#">T-Cody</a></p>
    
    <ul class="social_footer_ul text-center">
    <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <br/>
    <!--social_footer_ul ends here-->
   <div class="row text-center  ">
        
            <p >
                <a href="#" class="btn btn-store">
                    <span class="fab fa-apple fa-2x pull-left"></span> 
                    <span class="btn-label">Download on the</span>
                    <span class="btn-caption">App Store</span>
                </a>
                <a href="#" class="btn btn-store">
                    <span class="fab fa-android fa-2x pull-left"></span> 
                    <span class="btn-label">Download on the</span>
                    <span class="btn-caption">Google Play</span>
                </a>
               
            </p>
    </div>
  
</div>


</body>