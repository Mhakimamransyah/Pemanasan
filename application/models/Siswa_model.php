<?php 

  class Siswa_model extends CI_Model{
     
     var $nama;
     var $nisn;
     var $ttl;
     var $alamat;
     var $kontak;
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

    public function getNama(){
        return $this->nama;
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

    public function setNisn($newNisn){
    	$this->nisn= $newNisn;
    }

    public function getNisn(){
        return $this->nisn;
    }

    public function setAlamat($newAlamat){
    	$this->alamat= $newAlamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function setJurusan($newJurusan){
    	$this->jurusan= $newJurusan;
    }

    public function getJurusan(){
        return $this->jurusan;
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

    public function getAsalSmp(){
        return $this->asalSMP;
    }

     public function fillAllData($nisn){
        $query = "SELECT * FROM siswa WHERE NISN='".$nisn."'";
        $data =  $this->db->query($query);
        $row = $data->row_array(1);
        $this->setNisn($row["NISN"]);
        $this->setNama($row["Nama"]);
        $this->setTtl($row["TTL"]);
        $this->setKontak($row["Kontak"]);
        $this->setAlamat($row["Alamat"]);
        $this->setJurusan($row["Jurusan"]);
        $this->setAsalSmp($row["Asal_SMP"]);
    }

    public function login($nisn,$password){
       $query = "SELECT * FROM siswa WHERE NISN='".$nisn."' AND Password='".$password."'";
       return  $this->db->query($query);;      
    }


  }

?>