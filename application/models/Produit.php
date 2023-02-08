<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objet
 *
 * @author rakot
 */
class Produit extends CI_Model{
    //put your code here
    public function getobjet(){
        $query= $this->db->query("select * from objet");
        return $query->result_array();
    }   
    
    public function getimage($idObj){
        $query="select * from image where idObj=%s";
        $query= sprintf($query,$this->db->escape($idObj));
        return $this->db->query($query)->result_array();
    }
    
    public function getobj($idObj){
        $query= "select * from objet where idObj = %d";
        $query= sprintf($query,$this->db->escape(intval($idObj)));        
        return $this->db->query($query)->result_array();
    }
    
    public function getallimage(){
        $query= $this->db->query("select * from image");
        return $query->result_array();
    }
    
    public function getobjetuser($idUser){
        $query= $this->db->query("select * from objet where idUser=%d");
        $query= sprintf($query,$this->db->escape($idUser));
        return $query->result_array();
    }
    
    public function supimage($idobj){
        $sql="delete from image where idObj=%s";
        $sql= sprintf($sql,$this->db->escape($idobj));
        $this->db->query($sql);
    }

        public function getobjetnotuser($idUser){
        $query= $this->db->query("select * from objet where idUser not like %d");
        $query= sprintf($query,$this->db->escape(intval($idUser)));
        return $query->result_array();
    }
    
    public function addobjet($idUser,$idCat,$nom,$desc,$prix){
        $sql="insert into objet values(null,%d,%d,%s,%s,%d)";
        $sql= sprintf($sql,$this->db->escape($idUser),$this->db->escape($idCat),$this->db->escape($nom),$this->db->escape($desc),$this->db->escape($prix));
        $this->db->query($sql);
    }
    
    public function updateobjet($idObj,$idUser,$idCat,$nom,$desc,$prix){
        $sql="update objet set idUser=%d,idCat=%d,nom=%s,description=%s,prix=%d where idObj=%d";
        $sql= sprintf($sql,$this->db->escape($idUser),$this->db->escape($idCat),$this->db->escape($nom),$this->db->escape($desc),$this->db->escape($prix),$this->db->escape($idObj));
        $this->db->query($sql);
    }
    
    public function deleteobjet($idObjet){
        $sql="delete from objet where idObj=%s";
        $sql= sprintf($sql,$this->db->escape($idObjet));
        $this->db->query($sql);
    }
    
    public function getobjetcat($idCat){
        $sql="select * from objet where idCat=%d";
        $sql= sprintf($sql,$this->db->escape(intval($idCat)));
        return $this->db->query($sql)->result_array();
    }
    
    
    public function iserthistorique($idEch,$idObj,$idUser){
        $sql = "INSERT INTO historique values(null,%s,%s,%s,now())";
        $sql = sprintf($sql,$this->db->escape($idEch),$this->db->escape($idObj),$this->db->escape($idUser));
        $this->db->query($sql);
        $this->load->view('Acceuil');
    }
    
    public function updateuser($idUser,$idObj){
        $sql="update objet set idUser=%d where idObj=%d";
        $sql= sprintf($sql,$this->db->escape(intval($idUser)),$this->db->escape(intval($idObj)));
        echo '________'.$sql;
        $this->db->query($sql);
    }
     public function affichehistorique(){
        $sql="select user.nom,user.prenom,historique.DHEchange,objet.nom as objet from user
	join historique on historique.iduser=user.iduser
	join objet on objet.idobj=historique.idobj order by  historique.DHEchange;";
    return $this->db->query($sql)->result_array();
    }
}
