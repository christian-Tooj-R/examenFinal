<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Mysession.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Afficheproduit
 *
 * @author rakot
 */
class Afficheproduit extends Mysession{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Categorie');
        $this->load->model('Produit');  
    }

    public  function allproduit(){ 
        $donneuser= $this->session->user;
        $donne['user']=$donneuser['iduser'];       
        $donne['allproduit']=$this->Produit->getobjet();
        $donne['categorie']= $this->Categorie->getcategorie();
        $donne['allimage']=$this->Produit->getallimage();
        $this->load->view('Acceuil',$donne);  
    }
    
    public  function mesproduit($idObj="",$idUser=""){
        $donneuser= $this->session->user;
        $donne['user']=$donneuser['iduser'];
        $donne['mesproduits']=$this->Produit->getobjet();
        $donne['allimage']=$this->Produit->getallimage();
        $donne['categorie']= $this->Categorie->getcategorie();
        $donne['idobjet']=$idObj;
        $donne['iduser']=$idUser;
        $this->load->view('Mesproduit',$donne);  
    }
    public  function categorieprod($idCat){
        $donneuser= $this->session->user;
        $donne['user']=$donneuser['iduser'];
        $donne['allproduit']=$this->Produit->getobjetcat($idCat);
        $donne['allimage']=$this->Produit->getallimage();
        $donne['categorie']= $this->Categorie->getcategorie();
        $this->load->view('Produitparcat',$donne);  
    }
    
    public function detail($id){        
        $donne['produit']=$this->Produit->getobj($id);
        $donne['image']=$this->Produit->getimage($id);
        $this->load->view('Detail',$donne);  
    }
    
    public function demande($idEch) {
        $this->load->model('Echange');
        $donne['demande']=$this->Echange->echangerecu($idEch);
        $donne['envoi']=$this->Echange->echangeenvoyer($idEch);
        $this->load->view('Demande',$donne); 
    }
    
    public function statistique(){
        $donneuser= $this->session->user;
        $donne['user']=$donneuser['iduser'];       
        $donne['allproduit']=$this->Produit->getobjet();
        $donne['categorie']= $this->Categorie->getcategorie();
        $donne['allimage']=$this->Produit->getallimage();
        $this->load->model('Users');
        $this->load->model('Echange');
        $donne['nbuse']=$this->Users->nbutilisateur()['count(idUser)'];
        $donne['nbechange']=$this->Echange->nbechagne()['count(idEchange)'];
        $this->load->view('Acceuil',$donne); 
    }
    
    public function  historique(){
        $donne['historique']=$this->Produit->affichehistorique();
        $donne['categorie']= $this->Categorie->getcategorie();
        $this->load->view('Historique',$donne);
    }
    //put your code here
}
