<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model{

    public function check_login($email,$password){
        $sql = "SELECT iduser,estadmin from users where email=%s and mdp=%s limit 1";
		$sql = sprintf($sql,$this->db->escape($email),$this->db->escape($password));
		return $this->db->query($sql)->row_array();
    }
	
    public function insert($nom,$prenom,$email,$password ,$genre,$contact,$admin){
        $sql = "INSERT INTO users values(null,%s,%s,%s,%s,%s,%s,%d)";
        $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email) ,$this->db->escape($password),$this->db->escape($genre),$this->db->escape($contact),$this->db->escape($admin));
        $this->db->query($sql);
        $this->load->view('Login');
    }
    
    public function nbutilisateur(){
        $query= $this->db->query("select count(idUser) from users where estadmin not like 1");
        return $query->row_array();
    }
    
    
}
