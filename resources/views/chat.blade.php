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
  margin: 10px;
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

#chatbox {
    height: 425px;
    width: 560px;
   margin: 0 auto;
  margin-top: 100px;
  margin-bottom: 80px;
  /*border: 1px solid #131418;*/
  background-color: white;
}

input[type="text"] {
    height: 35px;
    width: 475px;
    background-color: #bdc3c7;
    border: 0;
    padding: 0;
    margin: 0;
    color: black;
    padding-left: 9px;
}

button {
    width: 72px;
    height: 35px;
    margin: 0;
    padding: 0;
    background-color: #27ae60;
    color: white;
}

p {
    padding-left: 30px;
    font-size: 12pt;
    display: block;
    margin-top: -45px;
    margin-left: 41px;
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

</style>
</head>
<body>
   <header>
    <a href="/home"><i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="/eventos"><i class="fa fa-calendar-alt" aria-hidden="true"></i></a>
    <a href="/chat"><i class="fa fa-comment chat active" aria-hidden="true"></i></a>
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
  
   <div class="container" id="chatbox">
      
            <div class="" style="overflow: scroll; height: 425px;">
                
                @foreach ($dados as $dado)
                <div class="profile-img">
        <img src="http://ptua.desenvolvimento/storage/users/{{$dado->utilizador_id}}/imagem1.jpg" alt="">
      </div>
                    <p><b>{{$dado->utilizador_nome}}:</b>  <span>{{$dado->utilizador_mensagem}}</span></p>
                @endforeach
            </div>
            
            <form role="form" action="/chat" method="post">
             {{ csrf_field() }}
            <div class="" style="height: 40px;display: inline-block;
   width: 560px;
    overflow: hidden;
    ">
                <input type="text" name="mensagem" placeholder="Escreva uma mensagem..." style="" />
                <button class="">Enviar</button>
            </div>
            </form>
       
      
      </div>
       
  <script src="/js/app.js"></script>

    
</body>
</html>


     

