<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    private $meta;
    function __contruct(){
        // OBS: helper base url carregado em autoload
    }
    public function login()
    {
        $this->load->view('Login', $this->meta);
    }
}
?>
