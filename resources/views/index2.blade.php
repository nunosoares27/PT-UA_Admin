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
  background: red;
  overflow: hidden;
}
.profile-img img {
  width: 100%;
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

</style>
</head>
<body>
   <header>
    <a href=""><i class="fa fa-home active" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-calendar-alt" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-comment" aria-hidden="true"></i></a>
     <a href=""><i class="fa fa-user" aria-hidden="true"></i></a>
  </header>
  
  <nav>
      <div id="logoUA"> <img src="/img/logo.png"/> </div> 
      <div id="welcomeUserTop"><a id="cuidado">{{ Auth::user()->name }}</a></div>
      <div id="sair"><a href="">sair</a></div>
  </nav>
  
  @foreach ($noticias as $noticia)

  <div class="card">
    <div class="card-header">
      <div class="profile-img">
        <img src="https://scontent.fopo1-1.fna.fbcdn.net/v/t1.0-1/p40x40/30706465_874083729468809_8715597921967407104_n.jpg?_nc_cat=0&oh=9f6650331f1b3a7e2e521d3848e04c25&oe=5B97BDCC" alt="">
      </div>
      <div class="profile-info">
        <div class="author">{{$noticia->name}}</div>
        <div class="cargo">{{$noticia->typeUser}}</div>
      </div>
    </div>
    <div class="card-body">
     @if ($noticia->noticiaHasImagem1 == 1)
      <img src="http://ptua.desenvolvimento/storage/noticias/{{$noticia->id_noticia}}/imagem1.jpg" alt="">
      @endif
       <div class="news-desc">{{$noticia->titulo}}</br></br>{!!$noticia->descricao!!}</div>
    </div>
<!--    
    <div class="card-footer">
       <a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
       <a href=""><i class="fa fa-comment" aria-hidden="true"></i></a>
    </div>
   -->
  </div>

  @endforeach
  
  
    
  

    
</body>
</html>
