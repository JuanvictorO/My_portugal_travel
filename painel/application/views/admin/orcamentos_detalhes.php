
	<div class="text-left">
		<h1 class="title-1 pt-0"><?= $titulo_conteudo ?></h1>
        <h4 class="mb-4 mt-2">Recebida no dia: <span id="dia"></span> às <span id="hora"></span></h4>
	</div>
	<div class="form-group row text-right">
    	<label for="nome" class="col-sm-2 col-form-label h3">Nome</label>
        <div class="col-sm-9">
        	<input type="text" class="input form-control" id="nome" placeholder="*Nome do cliente" name="nome" readonly required>
        </div>
    </div>
    <div class="form-group row text-right">
    	<label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-9">
        	<input type="text" class="input form-control" id="email" placeholder="*Email do cliente" name="email" readonly required>
        </div>
    </div>
    <div class="form-group row text-right">
        <label for="num" class="col-sm-2 col-form-label">Número</label>
        <div class="col-sm-9">
            <input type="text" class="input form-control" id="num" placeholder="*Número do cliente" name="num" readonly required>
        </div>
    </div>
    <div class="form-group row text-right">
        <label for="data" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-9">
            <input type="text" class="input form-control" id="data" placeholder="*Data pretendida" name="data" readonly required>
        </div>
    </div>
    <div class="form-group row text-right mb-5">
        <label for="msg" class="col-sm-2 col-form-label">Origem</label>
        <div class="col-sm-9">
            <textarea class="input form-control" name="origem" id="origem" placeholder="*Origem" rows="2" readonly required></textarea>
        </div>
    </div>
    <div class="form-group row text-right mb-5">
        <label for="destino" class="col-sm-2 col-form-label">Destino</label>
        <div class="col-sm-9">
            <textarea class="input form-control" name="destino" id="destino" placeholder="*Destino" rows="2" readonly required></textarea>
        </div>
    </div>
    <div class="form-group row text-right mb-5">
    	<label for="msg" class="col-sm-2 col-form-label">Mensagem</label>
        <div class="col-sm-9">
        	<textarea class="input form-control" name="msg" id="msg" placeholder="*Mensagem deixada pelo cliente" rows="8" readonly required></textarea>
        </div>
    </div>
    <div class="row">
    	<div style="margin: 0 auto;">
    		<a id="a" href="" target="_blank"><button class="btn btn-outline-info ml-5 mr-3">RESPONDER</button></a>
    		<button id="btn" class="btn btn-outline-danger mx-3 px-3">APAGAR</button>
    	</div>	
    </div>
<script>
    if($(window).width() <= 992){
        $('.form-group').removeClass('text-right'); 
    }

	var json = <?= $json ?>;
	$.each(json,function(i,json){
		$('#nome').attr('value',json.nome);
		$('#email').attr('value',json.email);
        $('#num').attr('value',json.num);

        var data = json.data_passeio.split('-');
        data = data[2]+'/'+data[1]+'/'+data[0];

        $('#data').attr('value',data);
        $('#origem').text(json.origem);
        $('#destino').text(json.destino);
		$('#msg').text(json.mensagem);

        var temp_date = json.data_envio.split("-");
        temp_date = temp_date[2]+'/'+temp_date[1]+'/'+temp_date[0];
        $('#dia').text(temp_date);
        $('#hora').text(json.hora_envio.substr(0,5));

		$('#a').attr('href','mailto:'+json.email+'?subject=Respondendo seu pedido de Orçamento');
		$('#btn').attr('onclick','excluir('+json.id+')');
	});

	function excluir(id){
		if(confirm('Tem certeza que deseja excluir esse pedido de orçamento?')){
			window.location.replace('<?= base_url('admin/deletarMensagem/') ?>'+id);
		}
	}
</script>