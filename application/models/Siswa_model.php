<?php 

  class Siswa_model extends CI_Model{
     
     var $nama;
     var $nisn;
     var $alamat;
     var $jurusan;
     var $id_wali_kelas;
     var $id_wali_murid;
     var $pass;
     var $asalSMP;


    public function __construct(){
    	parent::__construct();
    	$this->load->database();
    }

    public function setNama($newNama){
    	$this->nama = $newNama;
    }

    public function setNisn($newNisn){
    	$this->nisn= $newNisn;
    }

    public function getNisn(){
        return $this->nisn;
    }

    public function setAlamat($newAlamat){
    	$this->alamat= $newAlamat;
    }

    public function setJurusan($newJurusan){
    	$this->jurusan= $newJurusan;
    }

    public function setIDwaliKelas($newIDWk){
    	$this->id_wali_kelas= $newIDWk;
    }

    public function setIDwaliMurid($newIDWm){
    	$this->id_wali_murid= $newIDWm;
    }

    public function setPassword($newPassword){
    	$this->pass = $newPassword;
    }

    public function setAsalSmp($newAsalSmp){
    	$this->asalSMP = $newAsalSmp;
    }

    public function login($nisn,$password){
       $query = "SELECT * FROM siswa WHERE NISN='".$nisn."' AND Password='".$password."'";
       return  $this->db->query($query);;      
    }


  }

?>