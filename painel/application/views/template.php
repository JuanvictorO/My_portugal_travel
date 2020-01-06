<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Acesso para clientes realizarem a visualização do exame online">
      <meta name="author" content="Tambora Filmes - www.tamborafilmes.com.br">
      <meta name="keywords" content="Hospital, Médicos, consulta exame online">
      <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/icon-logo.png');?>"/>
      <title><?= $titulo_pagina ?></title>
      <script src="<?php echo base_url('assets/vendor/jquery-3.3.1.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/correction.min.js');?>"></script>
      <?php $this->load->view('assets/css'); ?>
   </head>
   <body style="background-color: #f7f7f7" class="animsition">
      <div class="page-wrapper">
         <!-- HEADER DESKTOP-->
         <header class="cor-principal">
            <div  class="container ">
               <div class="header4-wrap ">
                  <div class="pl-4 header__logo">
                     <a href="<?= base_url('') ?>">
                     <img class="logo-gs"s src="<?php echo base_url ('assets/images/icon-logo.png');?>" alt="Plano GS" />
                     </a>
                  </div>
                  <div class="text-light pr-2 header__tool cabecalho">
                      
                  </div>
               </div>
            </div>
         </header>
         <!-- END HEADER DESKTOP -->
         <!-- PAGE CONTENT-->
         <div  class="pt-5 page-container3">
            <section>
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-md-9 col-sm-12">
                        <!-- MENU SIDEBAR-->
                        <aside class="menu-sidebar3 js-spe-sidebar">
                           <nav class="navbar-sidebar2 navbar-sidebar3">
                              <ul class="list-unstyled navbar__list">
                                 <li class="<?php if ($active == 0) echo 'active'?>">
                                    <a class="btn" href="<?php echo base_url ('admin');?>"><!--i class="fas fa-desktop"></i-->Painel de controle</a>
                                 </li>
                                 <li class="<?php if ($active == 1) echo 'active'?>">
                                    <a href="<?= base_url('admin/orcamentos') ?>">
                                    <i class="fas fa-euro-sign"></i>Orçamentos</a>
                                 </li>
                                  <li class="<?php if ($active == 2) echo 'active'?>">
                                    <a href="<?= base_url('admin/mensagens') ?>">
                                    <i class="far fa-envelope"></i>Mensagens</a>
                                 </li>

                                 <?php
                                    //INICIO SUPERUSER 
                                    if ($this->ion_auth->is_admin()) {
                                    
                                    ?>
                                    <hr>
                                <!-- <li class="<?php// if ($active == 5) echo 'active'?>">
                                    <a href="<?php // echo base_url ('superuser/logs');?>">
                                    <i class="fas fa-sitemap"></i>Logs</a>
                                 </li> -->
                                 <li class="<?php if ($active == 6) echo 'active';?>">
                                    <a href="<?php echo base_url ('superuser/usuarios');?>">
                                    <i class="fas fa-users"></i>Usuários</a>
                                 </li>
                                 <?php } //FECHA SUPERUSER?>

                                 <hr>
                                 <li class="<?php if ($active == 3) echo 'active';?>">
                                    <a href="<?php echo base_url ('admin/ajuda');?>">
                                    <i class="far fa-question-circle"></i>Ajuda</a>
                                 </li>
                                 <li>
                                    <a class="color-red" href="<?= base_url('admin/sair') ?>">
                                    <i class="fas fa-power-off"></i>Sair
                                 </a>
                                 </li>
                              </ul>
                           </nav>
                        </aside>
                        <!-- END MENU SIDEBAR-->
                     </div>
                     <div class="col-xl-9 col-md-9 col-sm-12">
                        <!-- PAGE CONTENT-->
                        <div class="page-content">
                           <?= $contents ?>
                            
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="copyright">
                                    <p>
                                       Copyright © <script>document.write(new Date().getFullYear());</script> My Portugal Travel. Todos direitos reservados. Produzido por: Juan Victor Oliveira Silva
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                     </div>
                     <!-- Botão para acionar modal -->
                     
                  </div>
               </div>
            </section>
         </div>
         <!-- END PAGE CONTENT  -->
      </div>
      <?php $this->load->view('assets/js'); ?>
   <script>
      if($(window).width() <= 992){
         $('.header__logo').removeClass('pl-4');
         $('.cabecalho').html('<strong class="mr-2">Conectado como:</strong> <?= $user->username ?>');
      } else{
         $('.cabecalho').html('<strong class="mr-2">Conectado como:</strong> <?= $user->username.' <small class="ml-2">( '.$user->email.' )</small> ' ?>');
      }
   </script>
   </body>
</html>
<!-- end document-->