<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Echange
 *
 * @author rakot
 */
class Echange extends CI_Model{
    public function getechange(){
        $query= $this->db->query("select * from echange");
        return $query->result_array();
    }
    
    public function insertechange($idUManakalo,$idUMandray,$idAtakalo,$idTakalo,$confirmation){
        $sql = "INSERT INTO echange values(null,%s,%s,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($idUManakalo),$this->db->escape($idUMandray),$this->db->escape($idTakalo),$this->db->escape($idAtakalo),$this->db->escape($confirmation));
        $this->db->query($sql);
        $this->load->view('Acceuil');
    }
    
    public function confirmationechange($idEchange){
        $sql = "update echange set validation=1 where idEchange=%s";
        $sql = sprintf($sql,$this->db->escape($idEchange));
        $this->db->query($sql);
        $this->load->view('Acceuil');
    }
    
    public function annulationechange($idEchange){
        $sql = "delete from echange where idEchange=%s";
        $sql = sprintf($sql,$this->db->escape($idEchange));
        $this->db->query($sql);
    }
    
    public function echangeenvoyer($iduser){
       $sql = "select * from echange where idUserMandefa=%s";
       $sql=sprintf($sql,$this->db->escape($iduser));
       return $this->db->query($sql)->result_array();
    }
    
    public function echangerecu($iduser){
       $sql = "select * from echange where idUserMandray=%s and validation=0";
       $sql=sprintf($sql,$this->db->escape($iduser));
       return $this->db->query($sql)->result_array();
    }
    public function nbechagne(){
        $query= $this->db->query("select count(idEchange) from echange where validation like 1");
        return $query->row_array();
    }
}
