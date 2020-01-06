<!DOCTYPE html> 
<html lang="pt-pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="">
      <meta name="author" content="CEFET Campus Nova Friburgo">
      <link class="icon" rel="shortcut icon" type="image/png" href="<?= base_url('assets/') ?>img/logos/icon-logo.png">
      <title>My Portugal Travel | Viaje com segurança e conforto!</title>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <link href="<?= base_url('assets/') ?>vendor/animates/animate.min.css" rel="stylesheet">
      <!-- Fontes -->
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />
      <link  href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
      <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- páginas css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/index.css">
   </head>
   <body id="page-top">
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/') ?>img/layout/ponte-lisboa.png" align="center">
         <div class="text-left wow fadeIn pt-5"  data-wow-delay="0.3s" style="width: 80%;">
            <div class="div-logo text-left my-4 pb-2">
               <img class="logo img-fluid" src="<?= base_url('assets/') ?>img/logos/logo22.png">
            </div>
            <div class="row">
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 pl-0">
               <h1 class="text-parallax wow fadeInLeft title font-weight-bold text-white pt-4" data-wow-delay="0.3s">Rápido. Prático. Seguro.</h1>
               <h1 class="text-parallax font-weight-bold title wow fadeInLeft mt-4" data-wow-delay="0.5s" style="color: #f26b55">Reserve seu transfer e<br> seu tour personalizado.</h1> 
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 row section-ticket mt-4 pt-2">
               <div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0 div-ticket">
                  <img class="img-fluid ticket pt-1" src="<?= base_url('assets/') ?>img/layout/tag.png">
               </div>
               <div class="col-10 col-sm-10 col-md-10 col-lg-10 text-white font-weight-bold wow fadeInRight">
                  <h2>10% off</h2>
                  <h5>Na sua primeira reserva</h5>
                  <button class="regate btn text-white btn-resgatar px-4 py-2">RESGATAR</button>               
               </div>
            </div>
            </div>
            <div class="row">
               <div id="form-orc" class="col-sm-12 col-md-4 col-lg-4 mt-5 pl-0">
                  <form action="<?= base_url('home/enviar') ?>" method="POST">
                     <div class="group form-group">
                        <input type="text" class="form-control input" id="origem" placeholder="Origem" name="origem" required>
                     </div>
                     <div class="group form-group py-1">
                        <input type="text" class="form-control input" id="destino" placeholder="Destino" name="destino" required>
                     </div>
                     <div class="group form-group row">
                        <div id="div-data" class="col-12 col-sm-12 col-md-6 col-lg-6 pr-2">
                           <input id="data" class="input form-control" type="text" name="data_passeio" onfocus="(this.type='date')"  placeholder="Data Pretendida">
                        </div>
                        <div id="div-pessoa" class="col-12 col-sm-12 col-md-6 col-lg-6 pl-2">
                           <input id="pessoas" class="input form-control" type="number" name="qtdd" placeholder="Pessoas">
                        </div>
                     </div>
                     <div id="second-form" style="display: none;">
                        <div class="group form-group row">
                           <div id="div-data2" class="col-12 col-sm-12 col-md-6 col-lg-6 pr-2">
                              <input type="text" class="form-control input" id="nome" placeholder="Nome" name="nome" required>
                           </div>
                           <div id="div-pessoa2" class="col-12 col-sm-12 col-md-6 col-lg-6 pl-2">
                              <input id="num" class="input form-control" type="number" name="num" placeholder="Telefone">
                           </div>
                        </div>
                        <div class="group1 form-group py-1">
                           <input type="email" class="form-control input" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="group1 form-group py-1">
                           <textarea class="form-control input" id="msg" rows="2" name="mensagem" placeholder="Mensagem" maxlength="1024"></textarea>
                        </div>
                     </div>  
                     <div class="text-right mt-1">
                        <button id="botao" class="btn text-white py-3" type="btn" style="background-color: #f26b55;">SOLICITAR ORÇAMENTO</button>
                     </div>
                  </form>
               </div>
               <div class="col-sm-12 col-md-8 col-lg-8 div-car">
                  <img class="img-fluid mt-5" src="<?= base_url('assets/') ?>img/layout/aa.png">
               </div> 
            </div>
         </div>
         <img class="first-triangle" src="<?= base_url('assets/') ?>img/layout/triangulo2red.png" style="width: 100%;height: auto;">
      </div>
      <img src="<?= base_url('assets/') ?>img/layout/triangulo4.png" style="width: 100%;height:auto;transform: rotateX(180deg);">
      <div class="container apresentacao diagonal-design" style="margin-top: 100px;margin-bottom: 80px;">
         <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 div-topicos">
               <div class="row">   
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                     <i class="fas fa-tag icon" style="transform: rotate(90deg);color:#f26b55;"></i>
                  </div>
                  <div class="col-10 col-sm-10 col-md-10 col-lg-10 topicos text-justify">
                     <h4 class="text-left font-weight-bold">Ótimos preços</h4>
                     <p>
                        Nulla quis lorem ut libero malesuada feugiat. Arcu erat, accumsan id imperdiet et, porttitor
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 div-topicos">
               <div class="row">   
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                     <i class="fas fa-shield-alt icon" style="color:#f26b55;"></i>
                  </div>
                  <div class="col-10 col-sm-10 col-md-10 col-lg-10 topicos text-justify">
                     <h4 class="text-left font-weight-bold">Modernidade e segurança</h4>
                     <p>
                        Nulla quis lorem ut libero malesuada feugiat. Arcu erat, accumsan id imperdiet et, porttitor
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 div-topicos">
               <div class="row">   
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                     <i class="far fa-clock icon" style="color:#f26b55;"></i>
                  </div>
                  <div class="col-10 col-sm-10 col-md-10 col-lg-10 topicos text-justify">
                     <h4 class="text-left font-weight-bold">Serviço Personalizado</h4>
                     <p>
                        Nulla quis lorem ut libero malesuada feugiat. Arcu erat, accumsan id imperdiet et, porttitor
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 div-topicos">
               <div class="row">   
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                     <i class="fas fa-map-marker-alt icon" style="color:#f26b55;"></i>
                  </div>
                  <div class="col-10 col-sm-10 col-md-10 col-lg-10 topicos text-justify">
                     <h4 class="text-left font-weight-bold title-topicos">Local e destino</h4>
                     <p class="p-topicos">
                        Nulla quis lorem ut libero malesuada feugiat. Arcu erat, accumsan id imperdiet et, porttitor
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <img class="img-fluid" src="<?= base_url('assets/') ?>img/layout/triangulo.png" style="width: 100%;height:auto;">
      <div class="" style="background-color: #f5f6f7;">
         <div class="container valores" style="padding-top: 60px;padding-bottom: 50px;">
            <div class="valores-title text-center">
               <h2 class="font-weight-bold mb-5 valores-title">Nossos Valores</h2>
            </div>
            <div class="row">
               <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="div-imagens mx-2">
                     <div class="img-div">
                        <img id="img-1" class="img-fluid" src="<?= base_url('assets/') ?>img/layout/work.jpg">
                     </div>
                     <div class="div-text py-3 px-3" style="background-color: #fff;">
                        <h4 class="text-center font-weight-bold">Segurança e Pontualidade</h4>
                        <p class="text-justify" style="color: #646464;">Segurança, Conforto e Pontualidade são os factores fundamentais para a excelência na prestação desse tipo de serviço. Por isso, nós somos rígidos nesses quesitos, para que nossos clientes não tenham nenhuma preocupação a mais. E desfrutar de suas férias, passeio ou descanso, sejam seus únicos pensamentos. Somos criteriosos nesses requisitos e buscamos nos superar a cada dia. Nos trabalhamos e você descansa.</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="div-imagens mx-2">
                     <div class="img-div">
                        <img id="img-2" class="img-fluid" src="<?= base_url('assets/') ?>img/layout/minivan2.png">
                     </div>
                     <div class="div-text py-3 px-3" style="background-color: #fff;">
                        <h4 class="text-center font-weight-bold">Serviço personalizado</h4>
                        <p class="text-justify" style="color: #646464;">Seu Tours, Transfere ou Roteiro, com a sua cara? Claro que sim. Personalizamos os serviços prestados aos nossos clientes, atendendo aos variados gostos e públicos. Tentamos nos superar em cada momento, para que nossos clientes se sintam os mais satisfeitos possível. Sempre buscamos atendê-los, claro, respeitando a ética, conforto, nossa filosofia de trabalho e a experiência no bem estar. Esses itens, contam muito para que tudo transcorra com total harmonia e satisfação quanto na personalização dos serviços.</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="div-imagens mx-2">
                     <div class="img-div">
                        <img id="img-3" class="img-fluid" src="<?= base_url('assets/') ?>img/layout/pet-friendly.jpg">
                     </div>
                     <div class="div-text py-3 px-3" style="background-color: #fff;">
                        <h4 class="text-center font-weight-bold">Tour Familiares e Pet Friendly</h4>
                        <p class="text-justify" style="color: #646464;">A Cordialidade, Respeito e a Eficiência são parte da receita para se obter a satisfação total pelos serviços prestados. Não queremos só clientes, queremos amigos que confiem em nosso trabalho. Para isso, preparamos tudo com zelo e carinho, para que se sintam em um ambiente familiar, de total confiança, ética e integridade moral. Tendo a certeza que sua família é o seu maior patrimônio, colocamos o nosso profissionalismo em primeiro lugar para atender nossos clientes em total confiabilidade.</p>
                        <p class="text-justify" style="color: #646464;">Ir de férias com um animal de estimação não tem de ser um problema. Bem- estar e satisfação dos nossos clientes estão em primeiro lugar. Disponibilizamos, sob contacto prévio, itinerários e serviços especializados para total conforto do seu Pet. Falo conosco o que você precisa e nó tentarem te ajudar.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/') ?>img/layout/landscape-car-blue.jpg" align="center">
         <div class="container">
         <h2 class="text-center font-weight-bold text-white title-satisfacao">Satisfação Garantida</h2>   
            <div class="row row-satisfacao text-left">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                  <div class="row">
                     <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                     <div class="col-11 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                  <div class="row">
                     <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                     <div class="col-11 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                  <div class="row">
                     <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                     <div class="col-11 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                  </div>
               </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                     <div class="row">
                        <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                        <div class="col-11 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                     <div class="row">
                        <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                        <div class="col-11 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 text-satisfacao">
                     <div class="row">
                        <div class="icon col-1 col-sm-1 col-md-1 col-lg-1 px-2"><i class="fas fa-check-circle" style="color: #f26b55;"></i></div>
                        <div class="col-10 col-sm-11 col-md-11 col-lg-11">Curabitur arcu erat, accumsan id imperdiet et</div>
                     </div>
                  </div>
            </div>
            <div class="text-center">
               <a id="orc-1" href="#form-orc">
                  <button class="btn-satisfacao btn text-white py-3" type="btn" style="background-color: #f26b55;">PEDIR ORÇAMENTO</button>
               </a>
            </div>
         </div>
      </div>
      <div class="container" align="center" style="margin-top: -100px;">
         <div class="blue px-4 z-depth-5 shadow rounded">
            <h2 class="title-blue font-weight-bold">Deslocar-se em Portugal<br class="br-blue"> nunca<br class="br-blue2"> foi tão simples</h2>
            <div class="row">
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <i class="  icon-blue fas fa-tag" style="color: #f26b55;transform: rotate(90deg);"></i>
                  <h3 class="font-weight-bold mt-2">10% off</h3>
                  <p>Na sua primeira reserva</p>
                  <button class="regate btn btn-resgatar text-white px-4 py-3">RESGATAR</button>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <i class="icon-blue fas fa-phone" style="color: #f26b55;"></i>
                  <h3 class="font-weight-bold mt-2">Reserve por Telefone</h3>
                  <p>Disponível 24/7</p>
                  <a href="tel:+351999999999"><button class="btn btn-resgatar text-white px-4 py-3">+351 999-9999</button></a>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <i class="icon-blue fas fa-envelope" style="color: #f26b55;"></i>
                  <h3 class="font-weight-bold mt-2">Estamos online</h3>
                  <p>Envie-nos uma mensagem</p>
                  <a id="mens" href="#nome2">
                     <button class="btn btn-resgatar text-white px-4 py-3">ENVIAR</button>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="container section-clientes">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 px-4">
               <h2 class="font-weight-bold title-clientes">Clientes 100% satisfeitos</h2>
               <p  style="color: #646464; font-size: 18px;">Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
               <img class="img-fluid" src="<?= base_url('assets/') ?>img/layout/familia-minivan.png">
               <div class="row">
                  <div class="mt-4 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                     <p class="font-weight-bold mt-2" style="font-size: 18px;">Nós cuidados de si e da sua família com responsabilidade e total segurança</p>
                     <p style="font-size: 18px;color: #646464;">Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et </p>
                  </div>
                  <div class="mt-4 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                     <img class="img-fluid mb-4" src="<?= base_url('assets/') ?>img/layout/family2.jpg">
                  </div>
               </div>
            </div>
            <div class="mt-2 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class="sub-comentarios">
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <div class="comentario mt-4" style="color: #646464; font-size: 18px;">
                     <p>Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                     <p class="mt-2 font-weight-bold">Jone Doe</p>
                  </div>
               </div>
               <div class="sub-comentarios mt-2">
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <div class="comentario mt-4" style="color: #646464; font-size: 18px;">
                     <p>Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                     <p class="mt-2 font-weight-bold">Jone Doe</p>
                  </div>
               </div>
               <div class="sub-comentarios mt-2">
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <i class="estrelas fas fa-star px-1" style="color: #f26b55;"></i>
                  <div class="comentario mt-4" style="color: #646464; font-size: 18px;">
                     <p>Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                     <p class="mt-2 font-weight-bold">Jone Doe</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <img src="<?= base_url('assets/') ?>img/layout/triangulo3.png" style="width: 100%;height:auto;">
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/') ?>img/layout/bridge2.jpg" align="center">
         <img src="<?= base_url('assets/') ?>img/layout/triangulo2red.png" style="width: 100%;height:auto;transform: rotateX(180deg);">
         <div class="container div-transporte text-white">
            <h1 class="font-weight-bold title-transporte">Aproveite sua estada em<br class="br-transporte"> Portugal e deixe o <br class="br-transporte">transporte por nossa conta</h1>
            <div class="row mt-5 pt-3 mb-4">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">
                  <p class="font-weight-bold" style="font-size: 20px;"><ins>Turismo</ins></p>
                  <p class="p-transporte pr-2" style="font-size: 18px;">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada.</p>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">
                  <p class="font-weight-bold" style="font-size: 20px;"><ins>Negócios e Eventos</ins></p>
                  <p class="p-transporte pr-2" style="font-size: 18px;">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada.</p>
               </div>
            </div>
            <a class="btn-orc" href="#form-orc">
            <button class="btn text-white py-3 mt-4" type="btn" style="background-color: #f26b55; margin-bottom: 70px;" >SOLICITAR UM ORÇAMENTO</button>  
            </a>
         </div>
      </div>
      <div style="background-color: #3050d1;" align="center">
         <div class="container div-contato" style="padding-top: 70px; padding-bottom: 65px;">
            <h1 class="text-white font-weight-bold title-contato mb-3">Fale Conosco</h1>
            <div class="row mt-5">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <form action="<?= base_url('home/enviar_msg') ?>" method="POST">
                     <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                           <div class="group form-group">
                              <input type="text" class="form-control input" id="nome2" placeholder="Nome" name="nome" required>
                           </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                           <input type="email" class="form-control input" id="email" placeholder="Email" name="email" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <textarea class="form-control input" id="msg" rows="5" placeholder="Mensagem" name="mensagem" maxlength="1024" required></textarea>
                    </div>
                    <div class="text-right">
                     <button class="btn text-white px-4 py-3 mt-4" type="submit" style="background-color: #f26b55; margin-bottom: 70px;">ENVIAR</button>
                    </div>
                  </form>
               </div>
               <div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-white pl-5 padding-left">
                  <div class="row mt-3">
                        <div style="background-color: white; border-radius: 50%; width: 32px; height: 32px;">
                           <i class="fas fa-envelope pt-2" style="color: #3050d1;"></i>   
                        </div>
                     <a class="text-white" href="mailto:myportugaltravel@myportugaltravel.com">
                        <p class="ml-3" style="font-size: 18px;">info@consultoriaportugal.com</p>
                     </a>
                  </div>
                  <div class="row mt-3">
                     
                        <div style="background-color: white; border-radius: 50%; width: 32px; height: 32px;">
                           <i class="fas fa-phone pt-2" style="color: #3050d1;"></i>   
                        </div>
                        <a class="text-white" href="tel:+351999999999">
                        <p class="ml-3" style="font-size: 18px;">+351 999-9999</p>
                     </a>
                  </div>
                  <div class="row mt-3">
                     <div style="background-color: white; border-radius: 50%; width: 32px; height: 32px;">
                        <i class="fas fa-map-marker-alt pt-2" style="color: #3050d1;"></i>   
                     </div>
                     <p class="ml-3" style="font-size: 18px;">DNA Cascais</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <!-- MODAL ERROR -->
           <div class="modal fade" id="msg_fail" tabindex="-1" role="dialog" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content py-4">
                 <div class="modal-body text-center">
                   <span class="text-danger"></span><br>
                   <span class="text-secondary">Clique fora da caixa para fechar</span> 
                 </div>
               </div>
             </div>
           </div>
         <!-- MODAL SUCCESS -->
           <div class="modal fade" id="msg_success" tabindex="-1" role="dialog" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content py-4">
                 <div class="modal-body text-center">
                   <span class="text-success"></span><br>
                   <span class="text-secondary">Clique fora da caixa para fechar</span> 
                 </div>
               </div>
             </div>
           </div>        
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
           <script>
              <?php
                  $sucesso = $this->session->flashdata('sucesso');
                  $error = $this->session->flashdata('msg');
                  if(isset($error)){
               ?>
                  $('#msg_fail').modal('show');
                  $('.text-danger').html('<?= $error ?>');
               <?php
                  } else if(isset($sucesso)){
               ?>
                  $('#msg_success').modal('show');
                  $('.text-success').html('<?= $sucesso ?>');
               <?php
                  }
               ?>
           </script>
      <script>
         
         $('.btn-orc').click(function(){
            $doc.animate({
               scrollTop: $( $.attr(this,'href')).offset().top - 50
            }, 1200);
            return false;
         });
         $('#mens').click(function(){
            $doc.animate({
               scrollTop: $( $.attr(this,'href')).offset().top - 50
            }, 800);
            $('#nome2').focus();
            return false;
         });


         cont = 0;
         $('#botao').click(function(){
            if($('#origem').val() == ""){
               alert('O campo Origem não foi preenchido!');
               $('#origem').focus();
            }
            else if($('#destino').val() == ""){
               alert('O campo Destino não foi preencuido!');
               $('#destino').focus();
            }
            else if($('#data').val()== ""){
               alert('O campo data não foi preenchido!');
               $('#data').focus();
            }
            else if($('#pessoas').val() == ""){
               alert('O campo Quantidade de pessoas não foi preenchido!');
               $('#pessoas').focus();
            }
            else{
               $('#origem').hide(1000);
               $('#destino').hide(1000);
               $('#data').hide(1000);
               $('#pessoas').hide(1000);
               $('#second-form').show(2000);
               $('#botao').attr('type','submit');
               $('#botao').text('   ENVIAR   ');
               cont = 1;
            }
         });  
         
         $('.regate').click(function(){
            if(cont == 0){
               $('#origem').focus();
            } else{
               $('#nome').focus();
            }
         });

         if($(window).width() < 768){
            $('#div-data').removeClass('pr-2');
            $('#div-pessoa').removeClass('pl-2');
            $('#div-pessoa').addClass('pt-4');

            $('#div-data2').removeClass('pr-2');
            $('#div-pessoa2').removeClass('pl-2');
            $('#div-pessoa2').addClass('pt-4');

            $('.apresentacao').attr('style','margin-top: 50px;margin-bottom: 30px;');
            $('.div-topicos').addClass('mx-2');
            $('.div-topicos').addClass('my-2');

            $('.div-imagens').addClass('my-3');
            $('.valores-title h2').removeClass('mb-5');

            $('.icon').removeClass('px-2');

            $('.blue').removeClass('px-4');
            $('.blue').addClass('px-3');

            $('.br-transporte').hide();
            if($(window).width() < 576){
               $('.blue').removeClass('px-3');
            }
            $('.br-blue').hide();
         } else{
            $('.br-blue2').hide();
         }
      </script>
   </body>
   <script src="<?= base_url('assets/') ?>vendor/parallax/parallax.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="<?= base_url('assets/') ?>vendor/wow/wow.min.js"></script>
   <script>new WOW().init();</script>
</html>