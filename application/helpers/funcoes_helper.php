<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Formata data e hora no formado Brasil
 * Retorna data e horário no formato: 02 de janeiro de 2019 às 12:11
 * @param  date $data
 * @return String
 */
function formataDataTextoBr($data = NULL){

    if ($data) {

        /**
         * Separa o horário do dia
         * @var String data_time 
         * @var String data_funcao
         * @var String data_numeros
         * @var String horaCompleta
         */
        $data_time    = explode(' ', $data);
        $data_funcao  = $data_time[0];
        $data_numeros = explode('-', $data_funcao);

        $horaCompleta = explode(':', $data_time[1]);

        switch ($data_numeros[1]) {
            case '01':
                $data_nome = 'janeiro';
                break;
            
            case '02':
                $data_nome = 'fevereiro';
                break;
            
            case '03':
                $data_nome = 'março';
                break;
            
            case '04':
                $data_nome = 'abril';
                break;
            
            case '05':
                $data_nome = 'maio';
                break;
            
            case '06':
                $data_nome = 'junho';
                break;
            
            case '07':
                $data_nome = 'julho';
                break;
            
            case '08':
                $data_nome = 'agosto';
                break;
            
            case '09':
                $data_nome = 'setembro';
                break;
            
            case '10':
                $data_nome = 'outubro';
                break;
            
            case '11':
                $data_nome = 'novembro';
                break;
            
            case '12':
                $data_nome = 'dezembro';
                break;
            
            default:
                $data_nome = 'ERRO';
                break;
        }
        
        /**
         * Retorna data e horário no formato: 02 de janeiro de 2019 às 23:10
         */
        return $data_numeros[2] . ' de ' . $data_nome . ' de ' . $data_numeros[0] .' às '. $horaCompleta[0].':'.$horaCompleta[1];
    }
}

/**
 * Formata data no formado Brasil para texto
 * Retorna data no formato: 02 de janeiro de 2019
 * @param  date $data
 * @return String
 */
function formataDataTexto($data = NULL){

    /**
     * Verifica se a data existe
     */
    if ($data) {

        /**
         * Separa o horário do dia
         * @var String data_time 
         * @var String data_funcao
         * @var String data_numeros
         */
        $data_time    = explode(' ', $data);
        $data_funcao  = $data_time[0];
        $data_numeros = explode('-', $data_funcao);
        switch ($data_numeros[1]) {
            case '01':
                $data_nome = 'janeiro';
                break;
            
            case '02':
                $data_nome = 'fevereiro';
                break;
            
            case '03':
                $data_nome = 'março';
                break;
            
            case '04':
                $data_nome = 'abril';
                break;
            
            case '05':
                $data_nome = 'maio';
                break;
            
            case '06':
                $data_nome = 'junho';
                break;
            
            case '07':
                $data_nome = 'julho';
                break;
            
            case '08':
                $data_nome = 'agosto';
                break;
            
            case '09':
                $data_nome = 'setembro';
                break;
            
            case '10':
                $data_nome = 'outubro';
                break;
            
            case '11':
                $data_nome = 'novembro';
                break;
            
            case '12':
                $data_nome = 'dezembro';
                break;
            
            default:
                $data_nome = 'ERRO';
                break;
        }
        
        return $data_final = $data_numeros[2] . ' de ' . $data_nome . ' de ' . $data_numeros[0];
    }
}

/**
 * Formata data e hora no formado Brasil
 * Retorna data e horário no formato: 02/05/2019 às 23:10
 * @param  date $data
 * @return String
 */
function formataDataBr($data = NULL){
    /**
     * Verifica se a data existe
     */
    if ($data) {

        /**
         * Separa o horário do dia
         * @var String data_time 
         * @var String data_funcao
         * @var String data_numeros
         * @var String horaCompleta
         */
        $data_time    = explode(' ', $data);
        $data_funcao  = $data_time[0];
        $data_numeros = explode('-', $data_funcao);
        $horaCompleta = explode(':', $data_time[1]);

        /**
         * Retorna data e horário no formato: 02/05/2019 às 23:10
         */
        return $data_numeros[2] . '/' . $data_numeros[1] . '/' . $data_numeros[0].' às '. $horaCompleta[0].':'.$horaCompleta[1];
    }
}


/**
 * Mensagem de educação para o usuário
 * @return String
 */
function mensagemEducacao()
{
    ini_set("date.timezone", "Europe/Lisbon");
    /**
     * Setar fuso-horário de Brasília
     */
    date_default_timezone_set('Europe/Lisbon');

    /**
     * @var int $date
     */
    $date = date('H');
    
    /**
     * Verifica o valor do horário para retornar a mensagem
     */
    switch ($date) {
        
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            return 'Boa madrugada';
        
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
            return 'Bom dia';
        
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
            return 'Boa tarde';
        
        default:
            return 'Boa noite';
            break;
    }
}

/**
 * Converter unixtimestram em data legível
 * @param  int $timestamp 
 * @return String 
 */
function converterUnix($timestamp = NULL)
{ 
    /**
     * Converte o unix para formato DD/MM/AAA às HH:MM
     */
    if ($timestamp) { 
        $timestamp = strtotime("-3 hours",$timestamp);
        $timestamp = gmdate("d/m/Y à\s H:i\h", $timestamp);

        return $timestamp;
    }
}
function geraHora(){
    date_default_timezone_set('Europe/Lisbon');
    $hora = date('H:i');
    return $hora;
}
function geraData(){
    date_default_timezone_set('Europe/Lisbon');
    $data = date('Y/m/d');
    return $data;
}
/**
 * Verifica se o horário passado é válido no tempo de 30 minutos com o horário atual
 * para liberar a redefinição de senha
 * @param  date $data_Solicitacao FormatoUnix
 * @return Boolean
 */
function verificarHorario($data_Solicitacao){

    date_default_timezone_set('Europe/Lisbon');

    /**
     * @var date $data_Solicitacao
     */
    
    $date = date('Y/m/d H:i:s');
    /**
     * $date_Final Transformar para unixtimestamp]
     * @var date
     */
    $date_Final = strtotime($date);
    
    
    if (($date_Final - $data_Solicitacao) < 600) {
        return true;

    }
    else {
        return false;
    }

}


/**
 * Função para setar a mensagem
 * @param String $id   id da mensagem
 * @param String $msg  conteudo da mensagem
 * @param enum[erro,sucesso,alerta]
 * @return String or boolean
 */
function setMsg($id, $msg, $tipo)
{
    /**
     * Instanciando o CI
     */
    $CI =& get_instance();
    
    /**
     * Tipos de mensagems
     */
    switch ($tipo) {
        
        case 'erro':
            $CI->session->set_flashdata($id, '<div class="text-center flash-data-aviso alert alert-danger" role="alert"><i class="fas fa-times-circle"></i> ' . $msg . '</div>');
            break;
        
        case 'sucesso':
            $CI->session->set_flashdata($id, '<div class="text-center flash-data-aviso alert alert-success" role="alert"><i class="fas fa-check-circle"></i> ' . $msg . '</div>');
            break;
        
        case 'alerta':
            $CI->session->set_flashdata($id, '<div class="text-center flash-data-aviso alert alert-warning" role="alert"><i class="fas fa-exclamation-triangle"></i> ' . $msg . '</div>');
            break;
    }
    
    /**
     * Caso não exista tipo
     */
    return FALSE;
}

/**
 * Função para pegar a mensagem na view
 * @param  String $id valor setado para buscar a mensagem
 * @return String
 */
function getMsg($id)
{
    /**
     * Instancia o CI
     */
    $CI =& get_instance();
    
    /**
     * Busca se existe o flashdata
     */
    if ($CI->session->flashdata($id)) {
        echo $CI->session->flashdata($id);
    }
    
}