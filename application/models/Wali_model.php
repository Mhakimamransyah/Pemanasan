<?php 

  class Wali_model extends CI_Model{
     
     var $nama;
     var $ttl;
     var $alamat;
     var $kontak;
     var $id_wali_murid;
     var $pass;


    public function __construct(){
    	parent::__construct();
    	$this->load->database();
    }

    public function setnama_wali($newNama){
    	$this->nama_wali = $newNama;
    }

    public function getNama(){
        return $this->nama_wali;
    }

    public function setTtl($newTtl){
        $this->ttl = $newTtl;
    }

    public function getTtl(){
        return $this->ttl;
    }

    public function setKontak($newKontak){
        $this->kontak = $newKontak;
    }

    public function getKontak(){
        return $this->kontak;
    }

    public function setAlamat($newAlamat){
    	$this->alamat= $newAlamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function setIDwaliMurid($newIDWm){
    	$this->id_wali_murid= $newIDWm;
    }

    public function getIDwaliMurid(){
        $this->id_wali_murid;
    }

    public function setPassword($newPassword){
    	$this->pass = $newPassword;
    }

     public function fillAllData($id_wali_murid){
        $query = "SELECT * FROM siswa WHERE NISN='".$id_wali_murid."'";
        $data =  $this->db->query($query);
        $row = $data->row_array(1);
        $this->setIDwaliMurid($row["id_wali_murid"]);
        $this->setNama($row["nama_wali"]);
        $this->setTtl($row["TTL"]);
        $this->setAlamat($row["alamat"]);
        $this->setKontak($row["telepon"]);
    }

    public function login($nisn,$password){
       $query = "SELECT * FROM wali_murid WHERE id_wali_murid='".$id_wali_murid."' AND Password='".$password."'";
       return  $this->db->query($query);;      
    }


  }

?>