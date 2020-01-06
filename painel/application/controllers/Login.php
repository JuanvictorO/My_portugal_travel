<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @author Matheus de Castro <matheuscastroweb@gmail.com>
 * @copyright tamborafilmes.com.br Tambora Filmes
 * @version 1.0 
 */

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /**
         * Carregamento das librarys
         */
        $this->load->library('form_validation');
        $this->load->library('recaptcha');
        $this->load->library('email');

        /**
         * Carregamento dos models
         */
        $this->load->model('complemento_auth');

        /**
         * Verifica se está logado
         */
        if ($this->ion_auth->logged_in()) {
            redirect('admin');
        }
        
        

    }


    /**
     * Página de login
     * @param post $this->input->post()
     * @return void
     */
    public function index()
    {
       // session_destroy();
        /**
         * Verifica se existe um input do tipo post
         */ 
        if ($this->input->post()) {

            /**
             * Regras de validação form validation
             */
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|min_length[5]', array(
                'min_length[5]' => 'O campo email deve ter pelo menos 5 caracteres.'
            ));
            $this->form_validation->set_rules('senha', 'senha', 'required|min_length[8]', array(
                'min_length' => 'O campo senha deve ter pelo menos 8 caracteres.'
            ));
            
            
            /**
             * Verifica se as regras foram cumpridas
             */
            if ($this->form_validation->run() == TRUE) {
                
                /**
                 * Lista de variaveis
                 * @var String $email
                 * @var String $senha
                 * @var bollean $manter
                 * @var int $num_attempts
                 *
                 */
                $email        = $this->input->post('email');
                $senha        = $this->input->post('senha');
                $manter       = $this->input->post('manter_conectado');
                $num_attempts = $this->ion_auth->get_attempts_num($email);
                
                /**
                 * Verifica se o numero de tentativas feitas de login é maior que dois
                 */
                if ($num_attempts > 3) {

                    /**
                     *  @return String function setMsg
                     */
                    setMsg('msgLogin', 'Você excedeu o limite de tentativas. Tente mais tarde', 'alerta');
                    log_message('debug', '[user='.$email.'] ultrapassou os limites de tentativas de login');
                    redirect('');
                } 

                /**
                 * Else do numero de tentativas feitas
                 */
                else {

                    /**
                     * Verifica se é o usuário possui login e senha corretos cadastrados
                     * @var String $email
                     * @var String $senha
                     * @var bollean $manter
                     */
                    if ($this->ion_auth->login($email, $senha, $manter)) {
                        log_message('debug', '[user='.$email.'] realizou o login com sucesso');
                        redirect('admin');
                    } else {

                        /**
                         * Informa a quantidade de tentativas que restam caso a senha esteja incorreta
                         * @var int $num_attempts
                         */
                        if ($num_attempts == 0) {
                            setMsg('msgLogin', 'E-mail ou senha incorretos Restam 3 tentativas', 'erro');
                            log_message('debug', '[user='.$email.'] falhou ao acessar o sistema [1º tentativa]'); 
                        } else if ($num_attempts == 1) {
                            setMsg('msgLogin', 'E-mail ou senha incorretos. Restam 2 tentativas', 'erro');
                            log_message('debug', '[user='.$email.'] falhou ao acessar o sistema [2º tentativa]');
                        } else if ($num_attempts == 2) {
                            setMsg('msgLogin', 'E-mail ou senha incorretos. Restam 1 tentativa', 'erro');
                            log_message('debug', '[user='.$email.'] falhou ao acessar o sistema [3º tentativa]');
                        } else if ($num_attempts == 3) {
                            setMsg('msgLogin', 'Você excedeu o limite de tentativas. Tente mais tarde', 'alerta');
                            log_message('debug', '[user='.$email.'] excedeu o limite de tentativas de login');
                        }

                        /**
                         * Redireciona para o login
                         */
                        redirect('');
                    }
                }
                
            } 

            /**
             * Else da verificação do form validation
             */
            else {

                /**
                 * Recarrega novamente a página de login
                 */
                $data['titulo_pagina'] = 'Login | My Portugal Travel';
                $this->load->view('login', $data);
            }
            
        }
        
        /**
         * Else caso não exista um input do tipo post
         */
        else {
            $data['titulo_pagina'] = 'Login | My Portugal Travel';
            $this->load->view('login', $data);
        }
        
    }
   /* public function criar_user(){
        $username = 'Juan Victor';
        $password = '26022001MPT';
        $email = 'juanvictoroliveira2009@gmail.com';
        $additional_data = array(
            'first_name' => 'Juan Victor',
            'last_name' => 'Oliveira Silva'
        );
        $group = array('1');
        if($this->ion_auth->register($username, $password, $email, $additional_data, $group)){
            echo 'Usuário logado';
        }
    }*/

}
  
    
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */