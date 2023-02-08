<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Controller{
    public function getContenu(){

        $data['title'] = 'Contenu ';
        $data['contents'] = 'templates/contenu';
        // on charge la page dans le template
        $this->load->view('templates/template', $data);
    }
}