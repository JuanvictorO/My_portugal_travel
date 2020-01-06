<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complemento_auth extends CI_Model {


	public function verificarCodSeletor ($id = NULL,$codigo_seletor = NULL){

		if ($codigo_seletor AND $id) {
			
			$this->db->select('id,email,username,forgotten_password_selector, forgotten_password_code,	forgotten_password_time');
			$this->db->from('users');
			$this->db->where('id', $id);
			//VERIFICAR AQUI A SE O TEMPO AINDA É VÁLIDO
			$this->db->where('forgotten_password_selector', $codigo_seletor);
			$this->db->limit(1);

			return $this->db->get()->row();

		}

	}

	public function verificarCodSenha ($valores = NULL){

		$codigo 	= $this->input->post('codigo');
		$id 		= $this->input->post('id');

		if ($valores) {
			
			$this->db->select('id,forgotten_password_selector, forgotten_password_code,	forgotten_password_time');
			$this->db->from('users');
			$this->db->where('id', $id);
			$this->db->where('forgotten_password_code', $codigo);
			$this->db->limit(1);

			return $this->db->get()->row();

		}

	}

	public function updateCodSenha ($valores=NULL){

		$codigo 	= $this->input->post('codigo');
		$senha 		= $this->input->post('senha');
		$id 		= $this->input->post('id');

		$senhaHash = $this->ion_auth_model->hash_password($senha);

		if ($valores) {

			$valores = array(
				'id' => $this->input->post('id'),
				'password' => $senhaHash
			);

			$this->db->where('id', $id);
			//VERIFICAR AQUI A SE O TEMPO AINDA É VÁLIDO
			$this->db->update('users', $valores);

			return TRUE;
		

		} else return FALSE;

	}

	public function getByIdComEmail ($email = NULL){
		if ($email) {
			$this->db->select('id');
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->limit(1);

			return $this->db->get()->row();
		}
	}

}

/* End of file Complemento_auth.php */
/* Location: ./application/models/Complemento_auth.php */