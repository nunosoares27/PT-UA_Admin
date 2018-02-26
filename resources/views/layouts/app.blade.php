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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
button#mceu_0-open {
    display: none;
}
.prt_btn{height:50px;line-height:50px;color:#ffffff;font-size:15px;font-weight:400;border-radius:0px;padding:0 20px;min-width:140px;outline:none;cursor:pointer;display:inline-block;text-align:center;text-transform:capitalize;background-color:#f6483b;border:1px solid #f6483b;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-ms-transition:all 0.3s;-o-transition:all 0.3s;transition:all 0.3s;}
.prt_btn:hover, .prt_btn:focus{color:#f6483b;background-color:#111111;border:1px solid #f6483b;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-ms-transition:all 0.3s;-o-transition:all 0.3s;transition:all 0.3s;}

.prt_btn2 {
    height: 50px;
    line-height: 50px;
    color: #ffffff;
    font-size: 15px;
    font-weight: 400;
    border-radius: 0px;
    padding: 0 20px;
    min-width: 140px;
    outline: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    text-transform: capitalize;
    background-color: #333;
    border: 1px solid #f6483b;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.prt_btn2:hover, .prt_btn2:focus{color:#f6483b;background-color:#111111;border:1px solid #f6483b;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-ms-transition:all 0.3s;-o-transition:all 0.3s;transition:all 0.3s;}


.contact7 .contact7-form {
    margin-top: 50px;
    margin-bottom: 100px;
    overflow: hidden;
    border: 5px solid #548ce9;
    border-radius: 10%;
    padding: 30px 30px 30px 30px;
}

.contact7 .contact7-form form {
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.contact7-form{
    margin-top: 1.5% !important;
}
.contact7 .contact7-form .form-control {
    background: transparent;
    border: 1px solid #c7c7c7;
    margin-top: 25px;
    margin-bottom: 25px;
}

.contact7 .contact7-form .btn-default {
    background-color: #548ce9;
    color: #fff;
    border-radius: 0;
}

.contact7 .contact7-form .btn-default:hover {
    background-color: #000;
    color: #fff;
    border-radius: 0;
}

.form-control {
    opacity: 0.2;
    -webkit-transition: opacity 1s ease-in;
  -moz-transition: opacity 1s ease-in;
  -o-transition: opacity 1s ease-in;
  transition: opacity 1s ease-in;
}

.form-control:hover, .form-control:focus {
    opacity: 1;
}

    .navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
    -webkit-box-shadow: 0px 3px #00000045;
    -moz-box-shadow: 0px 3px #00000045;
    box-shadow: 0px 3px #00000045;
}

        .introbanner{
           display: flex;
           justify-content: center;
           flex-direction: column;
           text-align: center;
           height: 600px;
           font-size: 46px;
           font-weight: 800;
           color: white;
           text-shadow: 3px 3px #000;
        }

       .content-background{
           margin-top: -23px;
                width: 100vw;
                height:630px;
                background-image: url(http://ricta2016.web.ua.pt/wp-content/uploads/2014/12/6.jpg);
  
                /* Background image is centered vertically and horizontally at all times */
                background-position: center center;
                
                /* Background image doesn't tile */
                background-repeat: no-repeat;
                
                /* Background image is fixed in the viewport so that it doesn't move when 
                    the content's height is greater than the image's height */
                background-attachment: fixed;
                
                /* This is what makes the background image rescale based
                    on the container's size */
                background-size: cover;
                
                /* Set a background color that will be displayed
                    while the background image is loading */
                background-color: #464646;
            }
aside ul{
    margin:0px;
    padding:0px;
}
aside ul li{
    list-style-type: none;
}
aside ul li a{
    font-family: 'TitilliumWeb';
    display:block;
    text-decoration:none;
    text-align:left;
    color: #eeeeee;
    background-color: transparent;
    font-size: 16px;
    padding: 18px 20px 16px;
    transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
}
aside ul li a:hover{
    background-color:#1A293F;
    color:#fff;
    text-decoration: none;
    
}
a:focus {
    outline: none;
    outline-offset: none;
}

aside a:hover, a:focus {
    color: #fff;
    text-decoration: none;
    background-color:#1A293F;
}
aside ul li a .nav-icon{
    margin-right:15px;
    font-size:20px!important;
}

.remove_text{
     transition-delay: 2s;
}
.text_hide{
    display:none;
     transition-delay: 2s;
}
aside ul li a span{
    display: table-cell;
    padding-left:15px;
}

aside.hit_sidebar.open_sidbar {
    background-color: #22313F;
    width: 200px;
    height: 100vh;
    margin-left: -70px;
    margin-top: -23px;
    position: fixed;
}


.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}

ul#publicar {
    background-color: #34495E;
    color: white;
}

ul#editar {
    background-color: #34495E;
    color: white;
}


.panel-heading {
    color: #3131ad;

}



</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       PT-UA
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                            <li><a href="{{ route('register') }}">Registar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

     @section('tinymce')

        @show
    
</body>
</html>
