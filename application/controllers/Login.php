<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller{

    public function __construct(){
        parent::__construct(); 
        $this->load->model('Users');  
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('Login');
    }

    public function inscription(){
        $this->load->view('Inscription');
    }

    public function checklogin($email="",$password=""){
       if($this->input->post('email')!=null && $this->input->post('email')!=null){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
       }

       $result = $this->Users->check_login($email, $password);
       if($result != null){
        $iduser = $result['iduser'];
        if($result['estadmin']!=0){
            $users = array(
                'iduser' => $iduser,
                'admin' => 1
            );
            $this->session->set_userdata('user',$users);
            redirect(site_url('Acceuil/index'));
        }else {
            $users = array(
                'iduser'=> $iduser,
                'admin' => 0
            );
            $this->session->set_userdata('user',$users);
            redirect(site_url('Acceuil/index'));
        }

       }else{
        $error['error'] = "Il y a une erreur";
        $this->load->view('Login',$error);   
    }

    }

    public function deconnexion(){
        $this->session->unset_userdata('user');
        redirect(base_url());
    }

    public function insertion(){
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $genre=$this->input->post('genre');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $password2=$this->input->post('password2');
        $contact=$this->input->post('contact');
        $checkadmin = 0 ; 

        if ($nom!=""  && $prenom!=""  && $genre!="" && $email!="" && $password!=""  && $password2!="" && $contact!="") {
           if(strcmp($password2,$password) !=0){
                $error['error'] = "les mots de passes doivent etre identiques";
                $this->load->view('Inscription',$error);
           } else {
            $this->Users->insert($nom,$prenom,$genre,$email,$contact,$password,$checkadmin);
            $this->Users->check_login($email,$password);
         
           }   
        }else {
            $error['error'] = "vous devez remplir tous les champs";
                $this->load->view('Inscription',$error);
        }

        }

        public function doRecherche($categorie="",$objet=""){
            $find = $this->input->post('recherche');
            $result= $this->Searsh->recherche($categorie,$objet);
            if($result!=null){
                $idcategorie =$find['idCat'];
                $idobjet =$find['idObj'];
                if($idcategorie!=0 && $idobjet!=0){
                    $id = array(
                        'idCat'=> $idcategorie ,
                        'idObj'=> $idobjet
                    );
                    $this->session->set_userdata('user',$id);
                    redirect(site_url('templates/Find'));
                }else{
                    $error['error']="Il n'y a aucun element correspondant a votre recherche";
                    $this->load->view('RechercheView',$error);
                }

            }
        }
    }
    
    

