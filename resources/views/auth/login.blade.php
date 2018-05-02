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


input[type="text"] {
    height: 20px;
    width: 31vw;
    padding-left: 6px;
    margin-left: 16px;
    margin-top: 15px;
}

form.form-horizontal {
    margin-top: 150px;
    margin-left: 152px;
}

input#email {
    width: 250px;
    height: 25px;
    margin-bottom: 25px;
}

input#password {
    width: 250px;
    height: 25px;
    margin-bottom: 25px;
}




</style>
</head>
<body>
  
  <nav>
      <div id="logoUA"> <img src="/img/logo.png"/> </div> 
      <div id="welcomeUserTop"><a id="cuidado">Entrar</a></div>
      <div id="sair">
       <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            {{ csrf_field() }}
      <button class="btnsair">Registar</button>
      </form>
      </div>
  </nav>
  
   <div class="container" id="chatbox">
      
            <div class="" style="overflow: scroll; height: 425px;">
                
                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           
                           
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-mail..." value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    

                           
                                <input id="password" placeholder="Password..." type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                       
                                <button type="submit" class="">
                                    Entrar
                                </button>

                               
                    </form>


              </div>
      
      </div>
       
  

    
</body>
</html>

 <!--<div class="content-background">
<div class="container" style="display: flex;
           justify-content: center;
           flex-direction: column;
           text-align: center;height: 600px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Entrar</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu a sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
-->
