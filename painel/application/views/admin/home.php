<div class="row">
   <div class="col-md-12">
      <div class="text-center alert alert-info" role="alert">
         <h4 class="alert-heading"><?= mensagemEducacao() ?>, <?= $user->username ?>!</h4>
         <p>Você está na área administrativa do site My Portugal Travel</p>
      </div>
      <!--<?= getMsg('msgAdminHome'); ?>-->
      <h1 class="col p-0 mt-4 title">Guia rápido</h1>
      <div class="py-4 row">
         <div class="col-4 mobile">
            <div class="list-group" id="list-tab" role="tablist">
               <a class="btn btn-outline-dark list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#lista-noticias" role="tab" aria-controls="profile">Orçamentos</a>
               <a class="btn btn-outline-dark list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-dicas" role="tab" aria-controls="messages">Mensagens</a>
            </div>
         </div>
         <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            

               <div class="tab-pane fade show active" id="lista-noticias" role="tabpanel" aria-labelledby="list-profile-list">Nos <a href=" <?= base_url('admin/orcamentos') ?>">pedidos de orçamento</a> você pode visualizar os pedidos de orçamentos feitos na página principal do site My Portugal Travel e pode excluí-los caso queira. Os pedidos que ainda não foram visualizados estarão destacados por palavras em negrito. Quanto clicar em um dos pedidos, você poderá visuazar todas as suas informações e respondê-los caso queira.</div>

               <div class="tab-pane fade" id="lista-dicas" role="tabpanel" aria-labelledby="list-settings-list">Já na área de <a href="
                  <?= base_url('admin/mensagens') ?>">mensagens</a>, é praticamente igual a parte de orçamentos, a única coisa que muda nesse caso é que as mensagens terão menos informações do que os pedidos de orçamento, normalmente nelas você deve encontrar alguma pergunta feita por um usuário.</div>
            </div>
         </div>
      </div>
      <hr>
      <div class="row removeRow">
         <div class="col">
            <div class="card">
               <a href="<?= base_url('admin/orcamento_detalhes/'.$pedido_orcamento->id) ?>">
                  <div class="card-header bg-dark text-white">
                    Último pedido de orçamento feito<i class="ml-2 fas fa-external-link-alt"></i>
                  </div>
               </a>
               <div class="card-body">
                  <p><h4 class="pb-3 pt-1"><i class="mr-2 fas fa-award"></i>Email: <?= $pedido_orcamento->email ?> - <?= $pedido_orcamento->nome ?></h4>
                     <strong>Número:</strong> <?= $pedido_orcamento->num ?>
                     <br>
                     <strong>De:</strong> <?= $pedido_orcamento->origem ?> <strong>para</strong> <?= $pedido_orcamento->destino ?> 
                     <br>
                     <strong>Quantidade de pessoas:</strong> <?= $pedido_orcamento->qtdd ?>
                     <br>
                     <strong>Mensagem:</strong> <?= $pedido_orcamento->mensagem ?> 
                  </p>
                  <blockquote class=" mb-0">
                     <footer class="pt-3 blockquote-footer">Enviado no dia:<cite title="Título da fonte">  <?= formataDataTexto($pedido_orcamento->data_envio) ?> ás <?= substr($pedido_orcamento->hora_envio,0,5) ?></cite></footer>
                  </blockquote>
               </div>
            </div>
            <div class="card">
               <a href="<?= base_url('admin/msg_detalhes/'.$mensagem->id) ?>">
                  <div class="card-header bg-dark text-white">
                    Última mensagem recebida<i class="ml-2 fas fa-external-link-alt"></i>
                  </div>
               </a>
               <div class="card-body">
                  <p><h4 class="pb-3 pt-1"><i class="mr-2 fas fa-award"></i>Email: <?= $mensagem->email ?> - <?= $mensagem->nome ?></h4>
                     <strong>Mensagem:</strong> <?= $mensagem->mensagem ?> 
                  </p>
                  <blockquote class=" mb-0">
                     <footer class="pt-3 blockquote-footer">Enviado no dia:<cite title="Título da fonte">  <?= formataDataTexto($mensagem->data_envio) ?> ás <?= substr($mensagem->hora_envio,0,5) ?></cite></footer>
                  </blockquote>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<script>
   if($(window).width() < 992){
      $('.col-8').removeClass('col-8');
      $('.col-4').removeClass('col-4');

      $('.removeRow').removeClass('row');
      $('.tab-pane').addClass('px-3');
      $('.tab-pane').addClass('py-2');   

      $('.mobile').css('margin','0 auto');
      $('.title').addClass('text-center');   
   }
</script>