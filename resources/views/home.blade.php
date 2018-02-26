@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
     <div class="col-md-3">
    <aside class="hit_sidebar open_sidbar sidebar-slide-push">
            <ul>
                <li><a href="/home">Dashboard</a></li>
                <li><a href="#" class="active">Feed Noticias</a></li>
                <li><a href="/feed-duvidas">Feed Dúvidas</a></li>          
          
           <li  data-toggle="collapse" data-target="#publicar" class="collapsed active remove_text">
                  <a href="#">Publicar<span class="fa fa-angle-down"></span></a>
            </li>
                <ul class="sub-menu collapse" id="publicar">
                    <li class="active"><a href="#"><span class="remove_text">Noticia</span></a></li>
                    <li><a href="/criarduvida"><span class="remove_text">Dúvida</span></a></li>
                </ul>
                 
        
           <li  data-toggle="collapse" data-target="#editar" class="collapsed active remove_text">
                  <a href="#">Editar<span class="fa fa-angle-down"></span></a>
            </li>
                <ul class="sub-menu collapse" id="editar">
                    <li class="active"><a href="#"><span class="remove_text">Noticia</span></a></li>
                    <li><a href="#"><span class="remove_text">Dúvida</span></a></li>
                </ul>
        
              <li><a href="#">Sair</a></li>
           
            </ul>
        </aside>
        </div>

        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Confirmar pedidos de adesão</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($utilizadorAvalidar) > 0)
                         @foreach ($utilizadorAvalidar as $uv)
                            <h4>{{$uv->name}} - {{$uv->email}} - {{$uv->typeUser}}</h4>
                            <p>email confirmado: 
                            @if ($uv->confirmedEmail === 1)
                                confirmado com sucesso
                            @else
                                não confirmado
                            @endif
                            
                            </p>
                               <form method="POST" action="/confirmAdmin/{{$uv->id}}" enctype="multipart/form-data" >
                     <input name="_method" type="hidden" value="PUT">
                      {{ csrf_field() }}
                            <button class="prt_btn">Validar</button>

                            </form>
                        @endforeach

                    @else
                        <p>Sem pedidos de adesão!!!</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
