<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    private $meta;
    function __contruct(){

    }
    public function forgot_password()
    {
        $this->load->view('recuperacao_de_senha', $this->meta);
    }
    public function login()
    {
        // necessario para gerar formulario
        $this->load->helper('form');
        // necessario para validar formulario
        $this->load->library('form_validation');

        // regras do formulario


        // Nota: precisa configurar o roteamento do site + precisa NAO carregar outra URL no submit do formulario
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required');


        if ($this->form_validation->run() == FALSE):
            $this->meta['form_errors'] = validation_errors();
        else:
            //$form_data = $this->form->post();
            $this->meta['form_errors'] = NULL;
        endif;

        
        $this->load->view('Login', $this->meta);
    }
}
?>
