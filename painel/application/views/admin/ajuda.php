<div class="row">
   <div class="col-md-12">
      <div class="table-data__tool">
         <div class="table-data__tool-left">
            <h1 class="title-1 pt-0 "><?= $titulo_conteudo?></h1>
         </div>
      </div> 
    </div>
</div>
<section class="p-0 my-5 pb-5 section-button">
            <div  class="container">
               <div class="row">
                  <div class="col-lg-12 div-plano">
                     <div class="accordion" id="accordionExample">
                        <div class="card">
                           <div class="py-1 card-header bg-consultas" id="headingOne" >
                              <h2 class="mb-0">
                                 <button class="btn btn-block btn-consultas first-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" font-size: 1.2rem;">
                                 Como trabalhar com uma notícia?<img  id="arrow1" style="transform: rotate(180deg);" class="ml-2 arrow-plano" src="<?= base_url('assets/images/icon/icone-arrow-blue.png') ?>">
                                 </button>
                              </h2>
                           </div>
                           <style type="text/css">
                           		.card{
                           			margin-bottom: 0px;
                           		}
                              .btn-consultas:hover {
                                 color: #fed136 !important;
                              }
                              .btn-exames:hover {
                                 color: #fed136 !important;
                              }
                              .btn-consultas{
                              	color:#00587c;
                              }
                              .btn-consultas:hover{
                              	color: black !important;
                              }
                              .btn-exames{
                              	color:#00587c;
                              }
                              .arrow-plano{
                              	width: 12px;
                              	height: 12px;
                              }
                              .p{
                              	font-size: 1.08rem;
                              }
                           </style>
                           <!-- class show para ficar aberta -->
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="color: #215485;">
                              <div class="card-body px-5">
                                 <div class=" text-justify h5 alinhar-largura color-texto">
                                 	<h4>Como adicionar uma notícia?</h2><br>
                                 	<p class="p">
                                    1° - Vá para a página de <a href="<?= base_url('admin/noticias') ?>" style="text-decoration: none;">notícias</a>;<br><br>
									2° - Clique em adicionar notícias e preencha o formulário <br>(Caso queira que essa notícia venha a ser visível na página, certifique-se de marcar a opção ativo no campo Status);<br><br>
									3° - Caso queira adicionar uma imagem, clique em adicionar imagem, selecione a notícia em que você quer inserir a imagem e preencha o formulário (Certifique-se que a imagem tenha no máximo essas dimensões: 800x800);<br><br>

									Observação: Uma notícia não pode ter mais de uma imagem, antes de adicionar uma imagem a uma notícia certifique-se de que esta não possua nenhuma imagem;
 									</p><br>
 									<h4>
 									Como editar uma notícia?	
 									</h4><br>
 									<p class="p">
 									1° - Vá para a página de <a href="<?= base_url('admin/noticias') ?>" style="text-decoration: none;">notícias</a>;<br><br>
                                   2° - Digite o nome da notícia que quer editar na barra de pesquisa;
                                   <br><br>
                                   3° - Clique em editar, faça suas alterações e clique em salvar;	
 									</p><br>
 									<h4>
 										Como excluir uma notícia?
 									</h4><br>
 									<p class="p">
 										1° - Vá para a página de <a href="<?= base_url('admin/noticias') ?>" style="text-decoration: none;">notícias</a>;<br><br>
                                   2° - Digite o nome da notícia que quer editar na barra de pesquisa;
                                   <br><br>
                                   3° - Clique em excluir e confirme;
 									</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="py-1 card-header bg-consultas" id="headingOne" >
                              <h2 class="mb-0">
                                 <button class="btn btn-block btn-consultas second-btn" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseOne" style=" font-size: 1.2rem;">
                                 Como trabalhar com um Bem estar?<img  id="arrow2" class="ml-2 arrow-plano" src="<?= base_url('assets/images/icon/icone-arrow-blue.png') ?>">
                                 </button>
                              </h2>
                           </div>
                           <!-- class show para ficar aberta -->
                           <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="color: #215485;">
                              <div class="card-body px-5">
                                 <div class=" text-justify h5 alinhar-largura color-texto">
                                   <h4>Como adicionar um Bem estar?</h2><br>
                                 	<p class="p">
                                    1° - Vá para a página de <a href="<?= base_url('admin/bemEstar') ?>" style="text-decoration: none;">bem estar</a>;<br><br>
									2° - Clique em adicionar tópicos e preencha o formulário <br>(Caso queira que esse tópico venha a ser visível na página, certifique-se de marcar a opção ativo no campo Status);<br><br>
									3° - Caso queira adicionar uma imagem, clique em adicionar imagem, selecione o tópico em que você quer inserir a imagem e preencha o formulário (Certifique-se que a imagem tenha no máximo essas dimensões: 800x800);<br><br>

									Observação: Um tópico não pode ter mais de uma imagem, antes de adicionar uma imagem a um tópico certifique-se de que este não possua nenhuma imagem;
 									</p><br>
 									<h4>
 									Como editar um Bem estar?	
 									</h4><br>
 									<p class="p">
 									 1° - Vá para a página de <a href="<?= base_url('admin/bemEstar') ?>" style="text-decoration: none;">bem estar</a>;<br><br>
                                   2° - Digite o nome do tópico que quer editar na barra de pesquisa;
                                   <br><br>
                                   3° - Clique em editar, faça suas alterações e clique em salvar;	
 									</p><br>
 									<h4>
 										Como excluir um Bem estar?
 									</h4><br>
 									<p class="p">
 										1° - Vá para a página de <a href="<?= base_url('admin/bemEstar') ?>" style="text-decoration: none;">bem estar</a>;<br><br>
                                   2° - Digite o nome do tópico que quer editar na barra de pesquisa;
                                   <br><br>
                                   3° - Clique em excluir e confirme;
 									</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="card">
                           <div class="py-1 card-header bg-consultas" id="headingOne" >
                              <h2 class="mb-0">
                                 <button class="btn btn-block btn-consultas seventh-btn" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapseOne" style=" font-size: 1.2rem;">
                                 Como excluir uma imagem?<img  id="arrow7" class="ml-2 arrow-plano" src="<?= base_url('assets/images/icon/icone-arrow-blue.png') ?>">
                                 </button>
                              </h2>
                           </div>
                           <!-- class show para ficar aberta -->
                           <div id="collapse9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="color: #215485;">
                              <div class="card-body px-5">
                                 <div class=" text-justify h5 alinhar-largura color-texto">
                                    <p class="p">
                                     1° - Vá para a página de <a href="<?= base_url('admin/bemEstar') ?>" style="text-decoration: none;">bem estar</a> ou de <a href="<?= base_url('admin/noticias') ?>" style="text-decoration: none;">notícias</a>;<br><br>
                                     2° - Digite o nome do tópico/notícia que quer excluir a imagem;
                                     <br><br>
                                     3° - Clique em listar imagens, excluir e confirme a  exclusão;
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </section>


<script>
	$(".first-btn").click(function(){
		if($("#arrow1").attr("style") != "transform: rotate(180deg);"){
			$("#arrow1").css("transform","rotate(180deg)");
			$("#arrow2").css("transform","rotate(360deg)");
			$("#arrow7").css("transform","rotate(360deg)");
		} else{
			$("#arrow1").css("transform","rotate(360deg)");
		}
	});
	$(".second-btn").click(function(){
		if($("#arrow2").attr("style") != "transform: rotate(180deg);"){
			$("#arrow2").css("transform","rotate(180deg)");
			$("#arrow1").css("transform","rotate(360deg)");
			$("#arrow7").css("transform","rotate(360deg)");
		} else{
			$("#arrow2").css("transform","rotate(360deg)");
		}
	});
	$(".seventh-btn").click(function(){
		if($("#arrow7").attr("style") != "transform: rotate(180deg);"){
			$("#arrow7").css("transform","rotate(180deg)");
			$("#arrow1").css("transform","rotate(360deg)");
			$("#arrow2").css("transform","rotate(360deg)");
		} else{
			$("#arrow7").css("transform","rotate(360deg)");	
		}
	});
</script>