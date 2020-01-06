<div class="row">
   <div class="col-md-12">
      <div class="table-data__tool">
         <div class="table-data__tool-left">
            <h1 class="title-1 pt-0 "><?= $titulo_conteudo?></h1>
         </div>
      </div>
      <?= getMsg('msgAdminHome'); ?>
      <!-- DATA TABLE-->
      <div class="table-responsive m-b-40">
         <table class="table table-hover ">
            <thead class="thead-dark">
               <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th style="max-width: 350px;">Mensagem</th>
                  <th class="text-center">Enviado:</th>
                  <th class="text-center">Ações</th>
               </tr>
            </thead>
            <tbody id="body-table">
            </tbody>
         </table>
      </div>
      <!-- END DATA TABLE  -->
   </div>
</div>
<!-- codigo com o JSON -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
   function interna(id){
      window.location.replace("<?= base_url('admin/msg_detalhes/') ?>"+id);
   }

   function excluir(id){
      if(confirm('Tem certeza que deseja excluir essa mensagem?')){
        $.ajax({
          type:"GET",
          url: "<?= base_url('admin/deletarMensagem/') ?>"+id,
          async: false,
          success: exibirMensagens,
          error: falha
        });
      }
   }
   function exibirMensagens(){
      $.ajax({
         data: '',
         type: "GET",
         url: "<?= base_url('admin/ajaxMensagens') ?>",
         async: true,
         success: function(resultado){
            json = resultado;
            $('#body-table').empty();
            listar(json,data);
         },
         dataType: 'json'
      });
   }
   function falha(){
      alert('Algo deu errado, tente novamente mais tarde ou fale com o responsável do sistema!');
   }

   var json = <?= $json ?>;
   var data = '<?= $data ?>';
   var temp_date = 0;
   listar(json,data);
   function listar(json,data){
      $.each(json,function(i,json){

         if(json.visto == 0){
            var strong = 'font-weight-bold';
         } else{
            var strong = '';
         }
         if(data == json.data_envio){
            var tempo = json.hora_envio.substr(0,5);
         } else{
            temp_date = json.data_envio.split("-");
            temp_date = temp_date[2]+'/'+temp_date[1]+'/'+temp_date[0];
            var tempo = temp_date;
         }
         if(json.mensagem.length > 100){
            var msg = json.mensagem.substr(0,100)+'...';
         } else{
            var msg = json.mensagem;
         }
         $('#body-table').append(
               '<tr class="'+strong+'"><td onclick="interna('+json.id+')">'+json.nome.substr(0,15)+'</td><td onclick="interna('+json.id+')">'+json.email.substr(0,10)+'...</td><td style="max-width: 350px;" class="limit-3" onclick="interna('+json.id+')">'+msg+'</td><td>'+tempo+'</td><td><i class="pl-2 pointer fas fa-trash-alt" data-toggle="tooltip" title="Excluir mensagem" onclick="excluir('+json.id+')"></i><i class="fas fa-sign-in-alt ml-2" data-toggle="tooltip" title="Ver mensagem" onclick="interna('+json.id+')"></i></td></tr>'
            );
      });  
   }
</script>
<style type="text/css">
   .limit-3{
      white-space:pre-line;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
   }
</style>
