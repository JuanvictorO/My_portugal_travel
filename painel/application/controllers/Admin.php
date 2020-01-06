<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

			if (!$this->ion_auth->logged_in())
		    {
		      setMsg('msgLogin','Você não está logado','alerta');
		      redirect(''); 
		    }
	    	
	    	$this->load->model('orcamento');
	    	$this->load->model('mensagem');
	}

	//Página home
	public function index(){

		$user =  $this->ion_auth->user()->row();
		log_message('debug', '[user='.$user->email.'] acessou a página principal');

		$data['titulo_pagina'] 		= 'Painel de controle | My Portugal Travel';
		$data['titulo_conteudo'] 	= 'Painel de controle';
		$data['tipo_conteudo']		= 'painel de controle';
		$data['active'] 			= 0;

		$data['mensagem'] = $this->mensagem->listarUltimaMensagem();
		$data['user'] 				= $this->ion_auth->user()->row();
		$data['pedido_orcamento'] 	= $this->orcamento->listarUltimoOrcamento();
		
		$this->template->load('template','admin/home',$data);
	}

	//Ajax com as mensagens na tabela de mensagens
	function ajaxMensagens(){
		$json = $this->mensagem->listarMensagens();
		echo json_encode($json);
	}

	//Página de mensagens
	public function mensagens(){
		$this->load->helper('funcoes_helper');

		$user =  $this->ion_auth->user()->row();
		log_message('debug', '[user='.$user->email.'] acessou a página de mensagens');

		$data['titulo_pagina'] = 'Caixa de mensagens | My Portugal Travel';
		$data['titulo_conteudo'] 	= 'Caixa de mensagens';
		$data['tipo_conteudo']		= 'Mensagens';
		$data['active'] 			= 2;

		$data['user'] 				= $this->ion_auth->user()->row();

		$data['json'] = json_encode($this->mensagem->listarMensagens());
		$data['data'] = geraData();

		$this->template->load('template','admin/mensagens',$data);
	}

	public function msg_detalhes($id = NULL){
		if(is_numeric($id)){
			$user =  $this->ion_auth->user()->row();
			log_message('debug', '[user='.$user->email.'] acessou a página interna de mensagens:  [id='.$id.']');

			$data['titulo_pagina'] = 'Detalhes da mensagem | My Portugal Travel';
			$data['titulo_conteudo'] 	= 'Detalhes da mensagem';
			$data['tipo_conteudo']		= 'Mensagem';
			$data['active'] 			= 2;

			$data['user'] 				= $this->ion_auth->user()->row();

			$retorno = $this->mensagem->listarMensagem($id);
			$data['json'] = json_encode($retorno);
			foreach($retorno as $mensagem){
				$visto = $mensagem->visto;
			}
			if($visto == 0){
				if($this->mensagem->visto($id)){

				} else{
					redirect('');
				}
			}
			$this->template->load('template','admin/msg_detalhes',$data);
		} else{
			$user =  $this->ion_auth->user()->row();
			log_message('debug', '[user='.$user->email.'] tentou acessar a página interna de mensagens: [id = '.$id.']');			
			redirect('');
		}
	}

	public function deletarMensagem($id_mensagem = NULL){
		$user =  $this->ion_auth->user()->row();
		
		if (is_numeric($id_mensagem)) {

			if ($this->mensagem->excluir($id_mensagem)) {
				log_message('debug', '[user='.$user->email.'] deletou a mensagem: [id='.$id_mensagem.']');
				//return true;
			}else{
				log_message('error', '[user='.$user->email.'] falhou ao excluir a mensagem: [id='.$id_mensagem.']');
				//return false;
			}
		} else{
			//return false;
		}
	}

	public function orcamentos(){
		$this->load->helper('funcoes_helper');

		$user =  $this->ion_auth->user()->row();
		log_message('debug', '[user='.$user->email.'] acessou a página de orçamentos');

		$data['titulo_pagina'] = 'Caixa de pedidos de orçamentos | My Portugal Travel';
		$data['titulo_conteudo'] 	= 'Caixa de pedidos de orçamentos';
		$data['tipo_conteudo']		= 'Pedidos de orçamentos';
		$data['active'] 			= 1;

		$data['user'] 				= $this->ion_auth->user()->row();

		$data['json'] = json_encode($this->orcamento->listarOrcamentos());
		$data['data'] = geraData();

		$this->template->load('template','admin/orcamentos',$data);
	}

	public function orcamento_detalhes($id = NULL){
		if(is_numeric($id)){
			$user =  $this->ion_auth->user()->row();
			log_message('debug', '[user='.$user->email.'] acessou a página interna de orçamentos:  [id='.$id.']');

			$data['titulo_pagina'] = 'Detalhes do orçamento | My Portugal Travel';
			$data['titulo_conteudo'] 	= 'Detalhes do pedido de orçamento';
			$data['tipo_conteudo']		= 'Pedidos de orçamentos';
			$data['active'] 			= 1;

			$data['user'] 				= $this->ion_auth->user()->row();

			$retorno = $this->orcamento->listarOrcamento($id);
			$data['json'] = json_encode($retorno);
			foreach($retorno as $orcamento){
				$visto = $orcamento->visto;
			}
			if($visto == 0){
				if($this->orcamento->visto($id)){

				} else{
					redirect('');
				}
			}
			$this->template->load('template','admin/orcamentos_detalhes',$data);
		} else{
			$user =  $this->ion_auth->user()->row();
			log_message('debug', '[user='.$user->email.'] tentou acessar a página interna de pedidos de orcamento: [id = '.$id.']');			
			redirect('');
		}
	}

	public function deletarOrcamento($id_orcamento = NULL){
		$user =  $this->ion_auth->user()->row();
		
		if (is_numeric($id_orcamento)) {

			if ($this->orcamento->excluir($id_orcamento)) {
				log_message('debug', '[user='.$user->email.'] deletou o pedido de orçamento: [id='.$id_orcamento.']');
				//return true;
			}else{
				log_message('error', '[user='.$user->email.'] falhou ao excluir o pedido de orçamento: [id='.$id_orcamento.']');
				//return false;
			}
		} else{
			//return false;
		}
	}

	//Página de ajuda
	public function ajuda(){
		$user =  $this->ion_auth->user()->row();

		$data['titulo_pagina'] 		= 'Ajuda | My Portugal Travel';
		$data['titulo_conteudo'] 	= 'Ajuda';
		$data['active'] 			= 4;

		//$data['contagem_destaques'] = $this->destaques->quantidadeDestaques();
		//$data['user'] 				= $this->ion_auth->user()->row();

		log_message('debug', '[user='.$user->email.'] acessou a página de ajuda');
		
		$this->template->load('template','admin/ajuda',$data);
	}

	//Página de sair
	public function sair(){
		$user =  $this->ion_auth->user()->row();	
		log_message('debug', '[user='.$user->email.'] deslogou do sistema');
		$this->ion_auth->logout();
		setMsg('msgLogin','Você foi deslogado com sucesso','sucesso');
		redirect('');
	}

}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */