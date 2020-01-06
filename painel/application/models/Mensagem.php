<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends CI_Model {
	
	public function listarUltimaMensagem (){

		$this->db->select('*');
		$this->db->from('mensagens');
		$this->db->order_by('data_envio', 'desc');
		$this->db->order_by('hora_envio', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	public function listarMensagens(){

		$this->db->select('*');
		$this->db->from('mensagens');
		$this->db->order_by('data_envio', 'desc');
		$this->db->order_by('hora_envio','desc');

		return $this->db->get()->result();
	}
	public function listarMensagem($id = NULL){

		$this->db->select('*');
		$this->db->from('mensagens');
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get()->result();
	}

	public function visto($id = NULL){
		if(is_numeric($id)){

			$visto = array(
				'visto' => 1
			);

			$this->db->where('id',$id);

			if($this->db->update('mensagens', $visto)){
				return true;
			} else{
				return false;
			}
		} else{
			redirect('');
		}
	}

	public function excluir($id = NULL){
		if (is_numeric($id)) {
			$this->db->where('id', $id);
			if ($this->db->delete('mensagens')) {
				redirect('admin/mensagens');
			}
			return false;
		} return false;
	}
}
