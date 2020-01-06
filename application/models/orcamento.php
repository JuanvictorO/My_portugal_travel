<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
		
	/**
	 * 
	 */
	class Orcamento extends CI_Model {
		
		public function adicionarOrcamento($dados=NULL)
		{
			if ($dados) {

				$dados = array(
					'nome' => $this->input->post('nome'),
					'email' => $this->input->post('email'),
					'num' => $this->input->post('num'),
					'origem' => $this->input->post('origem'),
					'destino' => $this->input->post('destino'),
					'data_passeio' => $this->input->post('data_passeio'),
					'qtdd' => $this->input->post('qtdd'),
					'mensagem' => $this->input->post('mensagem'),
					'visto' => 0,
					'data_envio' => geraData(),
					'hora_envio' => geraHora()
				);

				if($this->db->insert('emails', $dados)){
					return true;
				}
				else{
					return false;
				}

			}
		}

		public function adicionarMensagem($dados = NULL){
			if($dados){

				$dados = array(
					'nome' => $this->input->post('nome'),
					'email' => $this->input->post('email'),
					'mensagem' => $this->input->post('mensagem'),
					'visto' => 0,
					'data_envio' => geraData(),
					'hora_envio' => geraHora()
				);

				if($this->db->insert('mensagens', $dados)){
					return true;
				}
				else{
					return false;
				}
			} else{
				return false;
			}
		}
		/*public function verificaEmail($email){
			$this->db->select('email');
			$this->db->from('newsletter');
			$this->db->where('email',$email);
			$this->db->limit(1);
			//$sql = 'SELECT email FROM newsletter WHERE email = ? LIMIT 1';
			//$this->db->query($sql,array($email));

			return $this->db->get()->row();
		}

		public function verificaNumero($num){
			$this->db->select('wpp');
			$this->db->from('newsletter');
			$this->db->where('wpp',$num);
			$this->db->limit(1);

			return $this->db->get()->row();
		}*/
	}
?>