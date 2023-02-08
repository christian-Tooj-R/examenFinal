<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Mysession.php");
class Acceuil extends Mysession{

    public function __construct(){
        parent::__construct();  
        $this->load->helper('url');
    }

    public function index(){     
        $donneuser= $this->session->user;
        $donne['user']=$donneuser['iduser'];
        $this->load->model('Categorie');
        $this->load->model('Produit');  
        $donne['allimage']=$this->Produit->getallimage();
        $donne['allproduit']=$this->Produit->getobjet();
        $donne['categorie']= $this->Categorie->getcategorie();
        $this->load->view('Acceuil',$donne);   
    }
    
}
