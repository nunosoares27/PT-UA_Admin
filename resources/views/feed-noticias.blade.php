@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
     <div class="col-md-3">
    <aside class="hit_sidebar open_sidbar sidebar-slide-push">
            <ul>
                <li><a href="/home">Dashboard</a></li>
                <li><a href="/feed-noticias" class="active">Feed Noticias</a></li>
                <li><a href="/feed-duvidas">Feed Dúvidas</a></li>          
          
           <li  data-toggle="collapse" data-target="#publicar" class="collapsed active remove_text">
                  <a href="#">Publicar<span class="fa fa-angle-down"></span></a>
            </li>
                <ul class="sub-menu collapse" id="publicar">
                    <li class="active"><a href="/criarnoticia"><span class="remove_text">Noticia</span></a></li>
                    <li><a href="/criarduvida"><span class="remove_text">Dúvida</span></a></li>
                </ul>
                 
        
           <li  data-toggle="collapse" data-target="#editar" class="collapsed active remove_text">
                  <a href="#">Editar<span class="fa fa-angle-down"></span></a>
            </li>
                <ul class="sub-menu collapse" id="editar">
                    <li class="active"><a href="#"><span class="remove_text">Noticia</span></a></li>
                    <li><a href="/duvidas-user"><span class="remove_text">Dúvida</span></a></li>
                </ul>
        
              <li><a href="#">Sair</a></li>
           
            </ul>
        </aside>
        </div>

        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feed de Noticias</div>

                <div class="panel-body">
                    
                      <div class="col-lg-12">
                            
                            @foreach ($noticias as $noticia)
                                  <h3>{{$noticia->titulo}} criado por {{$noticia->name}} em {{$noticia->created_at}}</h3>
                            @if (file_exists(public_path('/storage/noticias/'. $noticia->id_noticia .'/imagem1.jpg')))
                                <img src="{{asset('/storage/noticias/'.$noticia->id_noticia)}}/imagem1.jpg" alt="..." style="width: 100%;height: auto;">
                              @endif
                                <div>{!!$noticia->descricao!!}</div>
                                 @if (file_exists(public_path('/storage/noticias/'. $noticia->id_noticia .'/imagem2.jpg')))
                                 <img src="{{asset('/storage/noticias/'.$noticia->id_noticia)}}/imagem2.jpg" alt="..." style="width: 100%;height: auto;">
                                 @endif
                                 <hr class="style-eight">
                            @endforeach
                    
                     </div>

            </div>
        </div>
    </div>
</div>
@endsection

