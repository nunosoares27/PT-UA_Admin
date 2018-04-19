@extends('layouts.app')

@section('content')

      <div class="container">
        <div class="row">
            <div class="col-lg-12" style="border: 3px solid black; height: 80vh; overflow: hidden;">
                <h3 class="text-center">sala de chat</h3>
                @foreach ($dados as $dado)
                    <p>{{$dado->utilizador_nome}}:  <span>{{$dado->utilizador_mensagem}}</span></p>
                @endforeach
            </div>
            <!--<div class="col-lg-4" style="border: 3px solid black; height: 80vh; overflow: hidden;">
              <h3 class="text-center">Lista de utilizadores</h3>
            </div>-->
            <form role="form" action="/chat" method="post">
             {{ csrf_field() }}
            <div class="col-lg-12" style="border: 3px solid black; height: 40px; overflow: hidden;">
                <input type="text" name="mensagem" placeholder="Escreva uma mensagem..." style="width: 92%;height: 100%;margin: 0px;padding: 0px;margin-left: -2%;" />
                <button class="btn btn-md btn-success">Enviar</button>
            </div>
            </form>
        </div>
      
      </div>
       


@endsection
