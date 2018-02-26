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
                    <li><a href="/duvidas-user"><span class="remove_text">Dúvida</span></a></li>
                </ul>
        
              <li><a href="#">Sair</a></li>
           
            </ul>
        </aside>
        </div>

        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dúvidas do utilizador: {{\Auth::user()->name}}</div>

                <div class="panel-body">
                    
                      <div class="col-lg-12">

                            @foreach ($duvidas as $duvida)
                                <h3>{{$duvida->pergunta}}</h3>
                                <div>{!!$duvida->descricao!!}</div>
                             
                             <div style="display:flex;justify-content: space-between;">
                                <a href="/duvida-edit/{{$duvida->id}}"><button class="prt_btn2">Editar</button></a>

                                <form method="POST" action="/duvida-edit/{{$duvida->id}}" enctype="multipart/form-data" >
                     <input name="_method" type="hidden" value="DELETE">
                      {{ csrf_field() }}
        <button type="submit"  class="prt_btn">Apagar</button>
        </form>

            </div>

            <hr class="style-eight">

                            @endforeach
                    
                     </div>

            </div>
        </div>
    </div>
</div>
@endsection

