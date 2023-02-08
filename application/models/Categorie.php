<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorie
 *
 * @author rakot
 */
class Categorie extends CI_Model{
    public function getcategorie(){
        $query= $this->db->query("select * from categorie");
        return $query->result_array();
    }
    public function addcategorie($nomcategorie){
        $sql="insert into categorie values(null,%s)";
        $sql= sprintf($sql,$this->db->escape($nomcategorie));
        $this->db->query($sql);
    }
}
