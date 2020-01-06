<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Acesso para o adm visualizar dados do site">
      <meta name="author" content="Juan Victor Oliveira Silva - +55 22 999593275">
      <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/icon-logo.png');?>"/>
      <title><?= $titulo_pagina ?></title>
      <script src="<?php echo base_url('assets/vendor/jquery-3.3.1.min.js');?>"></script>
      <?php $this->load->view('assets/css'); ?>
   </head>
   <body class="cor-principal animsition">
      <div class="page-wrapper">
         <div >
            <div class="container">
               <div class="login-wrap">
                  <div class="login-content">
                     <div class="login-logo">
                        <a href="<?php echo base_url('');?>">
                        <img style="width: 115px; height: auto;" src="<?php echo base_url('assets/images/icon-logo.png');?>" alt="Logo Plano GS">
                        </a>
                     </div>
                     <div class="login-form ">
                        <form action="<?= base_url('') ?>" method="post" class="needs-validation" novalidate>
                           <?= getMsg('msgLogin'); ?>
                           <?= getMsg('msgDesconectado'); ?>
                           <?= validation_errors('<div class="text-center alert alert-warning" role="alert"><i class="fas fa-exclamation-triangle"></i> ','</div>'); ?>
                           <div class="form-group">
                              <label>E-mail</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fas fa-at"></i>
                                 </div>
                                 <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Senha</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fas fa-key"></i>
                                 </div>
                                 <input autocomplete="off" type="password" id="senha" name="senha" placeholder="Digite sua senha" class="form-control">
                              </div>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="id_conectado" name="manter_conectado">
                              <label for="id_conectado" class="custom-control-label">Manter conectado</label>
                           </div>
                           <button class="btn-block btn-success p-2 mb-3 mt-3" type="submit">ENTRAR</button>
                        </form>
                     </div>
                     <div class="text-center py-3">
                        <p>
                           Copyright © <script>document.write(new Date().getFullYear());</script> My Portugal Travel. Todos direitos reservados. <br>Produzido por: Juan Victor Oliveira Silva
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('assets/js'); ?>
   </body>
</html>
<!-- end document-->