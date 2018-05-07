<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT-UA Dashboard</title>

    <!-- Styles -->
     <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">


    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->


    <style>


body {
  background: #ecf0f1;
}

i {
  color: #131418;
  font-size: 24pt;
}

a {
  display: inline-block;
  width: 20%;
  margin-left: 3%;
  text-align: center;
  padding: 5px;
  text-decoration: none;
  color: white;
}

.hover, .active {
  color: #34465d;
}

header {
  position: fixed;
  width: 100%;
  background: white;
  height: 50px;
  bottom: 0;
  left: 0;
  border-top: 2px solid #131418;
  z-index: 2000000;
}

#logoUA {
  text-align: center;
  font-size: 38pt;
}

#logoUA img{
  width: 100px;
    height: 35px;
}

#sair {
  padding: 10px;
  font-size: 14pt;
  position: absolute;
  right: 0;
  top: 0;
}

nav {
  width: 100%;
  height: 49px;
  position: fixed;
  background: #2c3e50;
  top: 0;
  right: 0;
  border-bottom: 2px solid #131418;
}

.card {
  width: 650px;
  height: auto;
  margin: 0 auto;
  margin-top: 100px;
  margin-bottom: 80px;
  border: 1px solid #131418;
}

.card-header {
  width: 645px;
  background: white;
  height: 50px;
  padding-top: 5px;
  padding-left: 5px;
  border-bottom: 1px solid #131418;
}

.profile-img {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ecf0f1;
  overflow: hidden;
}
.profile-img img {
  width: 100%;
  height: 100%;
}

.profile-info {
  display: inline-block;
  padding-left: 10px;
}

.author {
  font-size: 12pt;
  font-weight: bold;
}

.cargo {
  font-size: 8pt;
}

.card-body {
  background: white;
  height: auto;
  overflow: hidden;
  border-bottom: 1px solid #131418;
}
.card-body img {
  height: 400px;
  width: 100%;
}

.news-desc {
  font-size: 12pt;
  padding: 15px;
}

.card-footer {
  width: 645px;
  background: white;
  height: 40px;
  padding-top: 5px;
  padding-left: 5px;
}

.card-footer a {
  width: 45%;
  padding-top: 0px;
}

.card:last-child {
  /* margin-bottom: 25% !important; */
}
#welcomeUserTop {
    position: absolute;
    top: 0;
    right: 65px;
}

#cuidado {
  display: inline-block;
  text-align: center;
  width: 100px;
  padding: 17px;
  text-decoration: none;
  color: white;
}

.btnsair{
  
    width: 72px;
    height: 31px;
    margin: 0;
    padding: 0;
    color: white;
    background-color: transparent;
    border: none;
    font-size: 13pt;

}

.card-header2 {
    color: white;
    width: 645px;
    background: #131418;
    height: 24px;
    padding-top: 5px;
    padding-left: 5px;
    border-bottom: 1px solid #131418;
}


input[type="text"] {
    height: 20px;
    width: 31vw;
    padding-left: 6px;
    margin-left: 115px;
    margin-top: 15px;
}

input[type="date"] {
    height: 20px;
    width: 31vw;
    padding-left: 6px;
    margin-left: 115px;
    margin-top: 15px;
}

label {
    font-size: 11pt;
    margin-right: 20px;
}



.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}

.inputfile + label {
    font-size: 13pt;
    height: 21px;
    font-weight: 500;
    color: white;
    background-color: #131418;
    display: inline-block;
    text-align: center;
    padding: 5px;
    margin-top: 15px;
    margin-left: 115px;
    width: 31vw;
}

.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}

.editButao2 {
    width: 72px;
    height: 28px;
    margin-top: 15px;
    margin-bottom: 16px;
    margin-left: 115px;
    padding-top: 0px;
    background-color: #27ae60;
    color: white;
}

i.fa.fa-upload {
    color: white;
    font-size: 13pt;
    padding-right: 10px;
}

p {
    margin-left: 15px;
}


</style>
</head>
<body>
   <header>
    <a href="/home"><i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="/eventos"><i class="fa fa-calendar-alt active" aria-hidden="true"></i></a>
    <a href="/chat"><i class="fa fa-comment" aria-hidden="true"></i></a>
     <a href="/perfil"><i class="fa fa-user" aria-hidden="true"></i></a>
  </header>
  
  <nav>
      <div id="logoUA"> <img src="/img/logo.png"/> </div> 
      <div id="welcomeUserTop"><a id="cuidado">{{ Auth::user()->name }}</a></div>
      <div id="sair">
       <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            {{ csrf_field() }}
      <button class="btnsair">sair</button>
      </form>
      </div>
  </nav>
  
    <div class="card">
   <div class="card-header2">
   <div class="profile-info">
      Criar Evento
      </div>
   </div>
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="http://ptua.desenvolvimento/eventos">
                        {{ csrf_field() }}
         <input type="text" name="titulo" placeholder="Titulo..." value="" />
                
                <input  type="text" name="descricao" placeholder="Descrição..." value="" />
                 <!--<input  type="date" name="data"  placeholder="Data..." value="" />-->
                <input  type="date" name="data" class="timepicker" placeholder="Data..." value="" />
                  <input  type="text" name="local" placeholder="Local..." value="" />
                
                <input type="file" name="eventimg" id="eventimg" class="inputfile" />
<label for="eventimg"><i class="fa fa-upload" aria-hidden="true"></i>Imagem</label>
                <button type="submit" class="editButao2">Enviar</button>
     </form>
    </div>
    </div>
      
            
                @foreach ($eventos as $evento)
                <div class="card">
    <div class="card-body">
   
                  @if ($evento->eventoHasImagem1 == 1)
        <img src="http://ptua.desenvolvimento/storage/eventos/{{$evento->id_evento}}/imagem1.jpg" alt="">
        @endif

       
                    <p><b>{{$evento->titulo}}</b> </br></br> <span>{{$evento->descricao}}</span></p>
                    <p><b>Data: </b>{{$evento->data}}</p><p><b>Local: </b>{{$evento->local}}</p>
          
            </div>
            </div>
       
             @endforeach
     
   <!--<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
 

   <script src="{{ asset('js/picker.js') }}"></script>
    
   <script src="{{ asset('js/picker.date.js') }}"></script>
   <script src="{{ asset('js/picker.time.js') }}"></script>
   <script src="{{ asset('js/legacy.js') }}"></script>

    <script>
    var picker = $('.pickadate').pickadate('picker');
 $( ".timepicker" ).click(function() {
  
   picker.close();
    });
   
    </script>-->
</body>
</html>


     

