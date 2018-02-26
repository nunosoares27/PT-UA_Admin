@extends('layouts.app')

@section('content')

      
            <div class="content-background">
            <div class="content">
                <div class="introbanner">
                    Regista-te na Comunidade
                   <div class="centerbtns">
                   <a href="/#features">
                            <button class="prt_btn2" style="align-self:center;">Saber +</button>
                    </a>
                    <a href="{{ route('register') }}">
                    <button class="prt_btn" style="align-self:center;">Registar</button>
                    </a>
                   </div> 
                    
                </div>
                
                </div>
               
            </div>
        </div>

        <!-- Container (Services Section) -->
<div id="features" class="container-fluid text-center" style="min-height: 100vh; padding: 100px;">
  <h2>Funcionalidades</h2>
  <h4 style="margin-bottom: 80px;">Disponibilizadas para toda a Comunidade</h4>
  
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fa fa-calendar-alt fa-5x !important"></span>
      <h4>EVENTOS</h4>
      <p>Fica a par de todos os eventos a decorrer dentro do Campus...</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-graduation-cap fa-5x !important"></span>
      <h4>FORMAÇÕES</h4>
      <p>Inscreve-te nas ações de formação para que consigas adquirir competências fundamentais ao teu sucesso académico e profissional...</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-newspaper fa-5x !important"></span>
      <h4>FEED DE NOTÍCIAS E DÚVIDAS</h4>
      <p>Publica notícias e dúvidas tuas, e/ou ajuda a restante comunidade partilhando os teus conhecimentos...</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fa fa-comments fa-5x !important"></span>
      <h4>CHAT</h4>
      <p>Mantém o contacto com os teus mentores, tutores, e restante comunidade através do nosso modo de chat...</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-map-marker fa-5x !important"></span>
      <h4>MAPA</h4>
      <p>Consulta o nosso Mapa para que a navegação dentro do campus seja bastante simples e rápida...</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-user fa-5x !important"></span>
      <h4 style="color:#303030;">ADICIONA OUTROS UTILIZADORES</h4>
      <p>Cada utilizador, têm a sua própria página de perfil, e através da qual podes seguir e acompanhar as postagens de outros utilizadores..</p>
    </div>
  </div>
</div>






<div class="container-fluid text-center"  style="min-height: 100vh; padding: 100px; background-color:#34495e;">
							<div >
								<h2 style="color:white;">Perguntas Frequentes</h2>
  <h4 style="margin-bottom: 80px; color:white;">Algumas das questões + frequentes.</h4>
							</div>

             

                    <div class="col-lg-10 col-lg-push-1">
    <div class="tab-content panels-faq">
      <div class="tab-pane active" id="tab1">
        <div class="panel-group" id="help-accordion-1">
          <div class="panel panel-default panel-help">
            <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>How do I edit my profile?</h3>
              </div>
            </a>
            <div id="opret-produkt" class="collapse in">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>How do I upload a new profile picture?</h3>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#ret-pris" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>Can I change my phone number?</h3>
              </div>
            </a>
            <div id="ret-pris" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#slet-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>Where do I change my privacy settings?</h3>
              </div>
            </a>
            <div id="slet-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#opret-kampagne" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>What is this?</h3>
              </div>
            </a>
            <div id="opret-kampagne" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>	
      <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
  </div>
 </div>









            
						<div class="container-fluid text-center"  style="min-height: 100vh; padding: 100px; background-color: #2c3e50; color: white;">
							<div >
								<h2>Contactos</h2>
  <h4 style="margin-bottom: 80px;">Envie e-mail para + esclarecimentos.</h4>
							</div>

								<div class="col-md-6 col-md-push-3">

                    <div class="contact7-form">
                        <!-- Form -->
                        <form role="form"  method="POST" action="/welcome-email">
                             {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                             <div class="form-group">
                                <textarea class="form-control" name="mensagem" rows="10" placeholder="Mensagem" required></textarea>
                            </div>
                            
                            <button type="submit" class="prt_btn">Enviar</button>
                        </form>
                        <!-- /Form -->
                    </div>
                   
                </div>
					
					 </div>
                 
                     
					


@endsection
