<?php 
if ( ! defined('BASEPATH'))
	exit('No direct script access allowed');

class Superuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		/**
		 * Verifica se não está logado
		 */
		if (!$this->ion_auth->logged_in()){

		    setMsg('msgLogin','Você não está logado','alerta');
		    redirect('');

		}

		/**
		 * Verifica se não é admin 
		 */
		if (!$this->ion_auth->is_admin()){
			$user =  $this->ion_auth->user()->row();
			log_message('debug', '[user='.$user->email.'] tentou acessar uma área restrita');
			redirect('');

		}

		 /**
         * Carregamento das models
         */
		 $this->load->model('complemento_auth');
	}


	/**
	 * Carregamento da página usuários
	 * @param array $data
	 * @return void
	 */
	public function usuarios()
	{	

		/**
		 * @var String $titulo_pagina 
		 * @var String $titulo_conteudo 
		 * @var int $active 
		 * @var array $usuarios
		 * @var int $contagem_destaques 
		 * @var array $user 
		 */
		
		$data['titulo_pagina'] = 'Usuários | My Portugal Travel';
		$data['titulo_conteudo'] = 'Usuários';
		$data['active'] = 6;
		$data['usuarios'] = $this->ion_auth->users()->result();
		$data['user'] =  $this->ion_auth->user()->row();

		$user =  $this->ion_auth->user()->row();
		log_message('debug', '[user='.$user->email.'] acessou a página restrita de usuários');

		/**
		 * Load da página
		 */
		$this->template->load('template','admin/usuarios',$data);
	}

	/**
	 * Função de adicionar usuário
	 * @return boolean
	 */
	public function adicionarUsuario()
	{

		/**
		 * @var String $username usuario
		 * @var String $password senha
		 * @var String $email email
		 * @var int $additional_data status 
		 * @var int $group grupo de usuário
		 */
		
		$user =  $this->ion_auth->user()->row();
		
		$username 	= $this->input->post('nome');
   		$password 	= $this->input->post('senha');
   		$email 		= $this->input->post('email');
    	$additional_data = array(
                'active' => 1
                );

    	$group = array($this->input->post('group')); 

    	/**
    	 * Verifica se o email não existe
    	 */
    	if (!$this->ion_auth->email_check($email)){

    		/**
    		 * Registra o usuário
    		 */
    		if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)){

    			/**
    			 * Seta a mensagem e redireciona
    			 */
    			log_message('debug', '[user='.$user->email.'] cadastrou o usuário [email='.$email.']');
				setMsg('msgSuperuserUsuarios','Usuário cadastrado com sucesso','sucesso');
		    	redirect('superuser/usuarios');
			}

			/**
			 * Else Caso não seja possível cadastrar o usuário
			 */
			else {

				/**
				 * Seta a mensagem e redireciona
				 */
				log_message('error', '[user='.$user->email.'] falhou ao cadastrar o usuário [email='.$email.']');
				setMsg('msgSuperuserUsuarios','Ocorreu um erro ao cadastrar o usuário','erro');
			    redirect('superuser/usuarios');
			}

    	}

    	/**
    	 * Else caso o email exista
    	 */
    	else {

    		/**
    		 * Seta mensagem e redireciona
    		 */
    		log_message('error', '[user='.$user->email.'] falhou ao cadastrar um usuário com email já existente [email='.$email.']');
    	  	setMsg('msgSuperuserUsuarios','Este endereço de e-mail já está sendo utilizado','erro');
		    redirect('superuser/usuarios');
    	}
	}

	/**
	 * Função para editar usuário
	 * @param int $id id do usuario
     * @param array $data conteudo a ser mudado
	 * @return boolean
	 */
	public function editarUsuario()
	{
		$user =  $this->ion_auth->user()->row();
			
		/**
		 * @var int $id
		 */
		$id = $this->input->post('id');

		/**
		 * Recebe os dados do post para atualização
		 * @var array $data
		 */
	    $data = array(
          	'username' 	=> $this->input->post('nome'),
          	'email' 	=> $this->input->post('email'),
          	'password' 	=> $this->input->post('senha'),
          	'active' 	=> $this->input->post('status')		
           );


	    /**
	     * Bloqueia alteraçaõ caso seja o admin 1 do sistema
	     * @var [type]
	     */
	    if ($id == 1) {

	    	/**
	    	 * Seta mensagem e redireciona
	    	 */
	    	log_message('error', '[user='.$user->email.'] falhou ao atualizar o administrador [email='.$data['email'].'');
			setMsg('msgSuperuserUsuarios','Você não pode atualizar o administrador do sistema','alerta');
		    redirect('superuser/usuarios');
		}

		/**
		 * Else caso não seja o admin 1
		 */
		else {

			/**
			 * Faz o update no banco de dados
			 * @param int $id id do usuário
			 * @param array $data conteudo a ser atualizado
			 * @return boolean
			 */
			if ($this->ion_auth->update($id, $data)){

				/**
				 * Seta a mensagem e redireciona
				 */
				
				log_message('debug', '[user='.$user->email.'] atualizou o usuário [email='.$data['email'].']');
				setMsg('msgSuperuserUsuarios','Usuário atualizado com sucesso','sucesso');
				redirect('superuser/usuarios');
			}

			/**
			 * Else caso não seja possível atualizar o usuário
			 */
			else {

				/**
				 * Seta a mensagem e redireciona
				 */
				log_message('error', '[user='.$user->email.'] falhou ao atualizar o usuário [email='.$data['email'].']');
				setMsg('msgSuperuserUsuarios','Ocorreu um erro ao atualizar o usuário','erro');
		    	redirect('superuser/usuarios');
			}

		}

	}

	/**
	 * Função para deletar usuário
	 * @param  int $id_usuario 
	 * @return boolean
	 */
	public function deletarUsuario($id_usuario=NULL)
	{
		/**
		 * Verofica se foi passado um ID
		 */
		if ($id_usuario) {

				/**
				 * Bloqueia a exclusão caso seja o admin 1 do sistema
				 * @var int $id_usuario
				 */
				if ($id_usuario == 1) {

					/**
					 * Seta a mensagem e redireciona
					 */
					setMsg('msgSuperuserUsuarios','Você não pode deletar o administrador do sistema','alerta');
			    	redirect('superuser/usuarios');
				}

				/**
				 * Else caso não seja admin 1
				 */
				else {

					/**
					 * Função para deletar usuário
					 * @param int $id_usuario
					 * @return boolean
					 */
					if ($this->ion_auth->delete_user($id_usuario)) {

						/**
						 * Seta mensagem e redireciona
						 */
						
						log_message('debug', '[user='.$user->email.'] deletou o usuário [id='.$id_usuario.']');
						setMsg('msgSuperuserUsuarios','Usuário deletado com sucesso','sucesso');
			    		redirect('superuser/usuarios');
					}

					/**
					 * Else caso não consiga deletar usuário
					 */
					else{

						/**
						 * Seta mensagem e redireciona
						 */
						
						log_message('debug', '[user='.$user->email.'] falhou ao deletar o usuário [id='.$id_usuario.']');
						setMsg('msgSuperuserUsuarios','Ocorreu um erro ao deletar usuário','erro');
			    		redirect('superuser/usuarios');
					}	
				}/** Fecha else caso não seja admin */ 
			
		} /* Fecha else caso não seja passado um ID de usuário */
	}

}

/* End of file Superuser.php */
/* Location: ./application/controllers/Superuser.php */