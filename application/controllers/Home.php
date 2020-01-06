<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
 	{ 
 		parent::__construct();

 		$this->load->model('orcamento');
 		$this->load->library('session');
 	}

 	public function index(){
 		$this->load->view('home');
 	}

 	public function verificar(){
 		$this->load->library('form_validation');

 		if(!$this->session->has_userdata('verificar') || $this->session->has_userdata('verificar') && $this->session->userdata('verificar') < 5){
     		/**
             * Verifica se existe um input do tipo post
             */ 
     		if($this->input->post()){
     			/**
                 * Regras de validação form validation
                 */
     			$this->form_validation->set_rules('nome','nome','required',array(
     				'required' => 'Nome não informado, favor informar um nome! <i class="far fa-times-circle ml-2"></i>'
     			));
     			$this->form_validation->set_rules('email', 'email', 'required|valid_email|min_length[5]', array(
     				'required' => 'Email não informado, favor informar um email! <i class="far fa-times-circle ml-2"></i>', 
     				'valid_email' => 'Email inválido, favor informar um email válido! <i class="far fa-times-circle ml-2"></i>', 
     				'min_length[5]' => 'O campo email está muito pegueno! <i class="far fa-times-circle ml-2"></i>'
     			));
     			$this->form_validation->set_rules('num', 'num', 'min_length[8]|max_length[16]', array(  
     				'min_length[8]' => 'O campo número está muito pequeno! Favor informar um número válido! <i class="far fa-times-circle ml-2"></i>',
     				'man_length[16]' => 'O campo Número está muito grande! Favor informar um número válido! <i class="far fa-times-circle ml-2"></i>'
     			));
                $this->form_validation->set_rules('origem', 'origem', 'required', array(
                    'required' => 'Origem não informada, favor informar uma origem! <i class="far fa-times-circle ml-2"></i>'
                ));
                $this->form_validation->set_rules('destino', 'destino', 'required', array(
                    'required' => 'Destino não informado, favor informar um destino! <i class="far fa-times-circle ml-2"></i>'
                ));
                $this->form_validation->set_rules('data_passeio', 'data_passeio', 'required', array(
                    'required' => 'Data de passeio  não informada, favor informar uma data! <i class="far fa-times-circle ml-2"></i>'
                ));
                $this->form_validation->set_rules('qtdd', 'qtdd', 'required|numeric', array(
                    'required' => 'Quantidade de pessoas  não informada, favor informar uma quantidade! <i class="far fa-times-circle ml-2"></i>',
                    'numeric' => 'O campo quantidade de pessoas precisa ter apenas números'
                ));
                $this->form_validation->set_rules('mensagem', 'mensagem', 'max_length[1024]', array(
                    'max_length[1024]' => 'Mensagem muito longa, favor utilizar no máximo 258 caracteres! <i class="far fa-times-circle ml-2"></i>'
                ));
     			/**
                 * Verifica se as regras foram cumpridas
                 */
     			if($this->form_validation->run() == TRUE){
     				return true;
     			} else{
     				$this->session->set_flashdata('msg', preg_replace( "/\r|\n/","",validation_errors()));
     				return false;
     			}
     		} else{
     			return false;
     		}
        } else{
            $this->session->set_flashdata('msg', 'Você precisa aguardar um tempo até pedir um novo orçamento! <i class="far fa-times-circle ml-2"></i><br>');
            return false;
        }	
 	}

 	public function verificar2(){
 		$this->load->library('form_validation');

 		if(!$this->session->has_userdata('verificar2') || $this->session->has_userdata('verificar2') && $this->session->userdata('verificar2') < 4){
     		/**
             * Verifica se existe um input do tipo post
             */ 
     		if($this->input->post()){
     			/**
                 * Regras de validação form validation
                 */
     			$this->form_validation->set_rules('nome','nome','required',array(
     				'required' => 'Nome não informado, favor informar um nome! <i class="far fa-times-circle ml-2"></i>'
     			));
     			$this->form_validation->set_rules('email', 'email', 'required|valid_email|min_length[5]', array(
     				'required' => 'Email não informado, favor informar um email! <i class="far fa-times-circle ml-2"></i>', 
     				'valid_email' => 'Email inválido, favor informar um email válido! <i class="far fa-times-circle ml-2"></i>', 
     				'min_length[5]' => 'O campo email está muito pegueno! <i class="far fa-times-circle ml-2"></i>'
     			));
                $this->form_validation->set_rules('mensagem', 'mensagem', 'max_length[1024]', array(
                    'max_length[1024]' => 'Mensagem muito longa, favor utilizar no máximo 258 caracteres! <i class="far fa-times-circle ml-2"></i>'
                ));
     			/**
                 * Verifica se as regras foram cumpridas
                 */
     			if($this->form_validation->run() == TRUE){
     				return true;
     			} else{
     				$this->session->set_flashdata('msg', preg_replace( "/\r|\n/","",validation_errors()));
     				return false;
     			}
     		} else{
     			return false;
     		}
        } else{
            $this->session->set_flashdata('msg', 'Você precisa aguardar um tempo para enviar uma nova mensagem! <i class="far fa-times-circle ml-2"></i><br>');
            //isset($_SESSION['verificar2']);
            return false;
        }	
 	}

 	public function enviar(){
 		if($this->verificar() == true){
 			$dados = $this->input->post();
 			if($this->orcamento->adicionarOrcamento($dados)){
 				$this->session->set_flashdata('sucesso','Seus dados foram enviados com sucesso <i class="far fa-check-circle"></i>');

 				/*Criar seção para impedir que o usuário cadastre-se no banco novamente por um tempo */
                if($this->session->has_userdata('verificar')){
                    $_SESSION['verificar']++;
                } else{
                    $this->session->set_userdata('verificar', 1);
                }
 		 		redirect('');
 			} else{
 				redirect('');
 			}
 		} else{
 			redirect('');
 		}
 	}

 	public function enviar_msg(){
 		if($this->verificar2() == true){
 			$dados = $this->input->post();
 			if($this->orcamento->adicionarMensagem($dados)){
 				$this->session->set_flashdata('sucesso','Seus dados foram enviados com sucesso <i class="far fa-check-circle"></i>');

 				/*Criar seção para impedir que o usuário cadastre-se no banco novamente por um tempo */
                if($this->session->has_userdata('verificar2')){
                    $_SESSION['verificar2']++;
                } else{
                    $this->session->set_userdata('verificar2', 1);
                }
                redirect('');
 			} else{
 				redirect('');
 			}
 		} else{
 			redirect('');
 		}
 	}
}