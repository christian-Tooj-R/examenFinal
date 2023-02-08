<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Mysession.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ajout
 *
 * @author rakot
 */
class Ajout extends Mysession{
    
    public function __construct(){
        parent::__construct(); 
        $this->load->model('Users');  
        $this->load->helper('url');
    }
    
    public function getechange($idObj,$idUser){            
        redirect('afficheproduit/mesproduit/'.$idObj.'/'.$idUser);
    }
    public function insertechange($objetatakalo,$idUser,$idtakalo){        
        $donneuser= $this->session->user;
        $user=$donneuser['iduser'];
        $validation=0;
        $this->load->model('Echange');  
        $this->Echange->insertechange($user,$idUser,$objetatakalo,$idtakalo,$validation);
        
        redirect('acceuil');        
    }
    
    public function supobjet($id){
        $this->load->model('Produit'); 
        $this->Produit->supimage($id); 
        $this->Produit->deleteobjet($id);
        
        redirect('acceuil');
    }
    
    public function annuleechange($idEch){
        $this->load->model('Echange');
        $this->Echange->annulationechange($idEch);
        redirect('acceuil');
    }
    
    public function validationechange($idEch,$idObj,$idUser,$idObj1,$idUser1){
        $this->load->model('Echange');
        $this->load->model('Produit');        
        $this->Produit->updateuser($idUser1,$idObj);
        $this->Produit->updateuser($idUser,$idObj1);
        $this->Produit->iserthistorique($idEch,$idObj,$idUser);
        $this->Produit->iserthistorique($idEch,$idObj1,$idUser1);        
        $this->Echange->confirmationechange($idEch);
        redirect('acceuil');
    }
}
