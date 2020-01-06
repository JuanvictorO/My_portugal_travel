<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamento extends CI_Model {

	public function listarUltimoOrcamento (){

		$this->db->select('*');
		$this->db->from('emails');
		$this->db->order_by('data_envio', 'desc');
		$this->db->order_by('hora_envio', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	public function listarOrcamentos(){

		$this->db->select('*');
		$this->db->from('emails');
		$this->db->order_by('data_envio', 'desc');
		$this->db->order_by('hora_envio','desc');

		return $this->db->get()->result();
	}

	public function listarOrcamento($id = NULL){

		$this->db->select('*');
		$this->db->from('emails');
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

			if($this->db->update('emails', $visto)){
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
			if ($this->db->delete('emails')) {
				redirect('admin/orcamentos');
			}
			return false;
		} return false;
	}
	
}

/* End of file Destaques.php */
/* Location: ./application/models/Destaques.php */