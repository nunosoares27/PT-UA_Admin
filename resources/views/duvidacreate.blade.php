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
                <div class="panel-heading">Publicar Dúvida</div>

                <div class="panel-body">
                    
                      <div class="col-lg-12">

                               <form method="POST" action="/criarduvida" enctype="multipart/form-data" >
                     
                      {{ csrf_field() }}

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                        <label for="pergunta">Pergunta</label>
                         <input id="pergunta" type="text" class="form-control" name="pergunta">
                        </div>
        </div>

        <div class="col-lg-12">
                   <div class="form-group">
  <label for="">Descrição:</label>
  <textarea class="form-control" rows="5" id="projectdescription" name="descricao" 
  ></textarea>
</div>

<div class="col-lg-12 text-center">
<button href="" class="btn btn-lg btn-success" style="margin-top: 5px;" type="submit">Enviar</button>
       </div>             
        
        </div>
     

        </form>

                     </div>       
                        
                        <a href="/home" class="btn btn-info" style="margin-top: 25px;">voltar</a>
                    
                    </div>




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('tinymce')

    @parent
    <script src='./js/tinymce/js/tinymce/tinymce.min.js'></script>

    <script>
tinymce.init({
  selector: 'textarea',
  height: 300,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
  </script>


@endsection