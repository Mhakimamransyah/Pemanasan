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
     var $foto;
     var $pass;
     var $asalSMP;


    public function __construct(){
      parent::__construct();
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

    public function setFoto($newFoto){
        $this->foto = $newFoto;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function insert($data){
        $query = "INSERT INTO siswa(NISN,Nama,TTL,Alamat,Kontak,Jurusan,Asal_SMP,Foto,Password) VALUES('".$data['nisn']."','".$data['nama']."','".$data['ttl']."','".$data['alamat']."','".$data['kontak']."','".$data['jurusan']."','".$data['asalSmp']."','".$data["foto"]."','".$data["password"]."')";
        $data = $this->db->query($query);
        return $data;
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
        $this->setFoto($row['Foto']);
        $this->setAsalSmp($row["Asal_SMP"]);
    }

    //its should not in here
    public function login($nisn,$password){
       $query = "SELECT * FROM siswa WHERE NISN='".$nisn."' AND Password='".$password."'";
       return  $this->db->query($query);;      
    }

    public function getClass(){
       $query = "SELECT * FROM relasi_siswa_kelas_x WHERE NISN='".$this->nisn."'"; 
       $data = $this->db->query($query);
       if($data->num_rows() > 0){

          $result = $data->row_array(1);
          $idkelas = $result["id_kelas_x"];

          $query_2 = "SELECT a.Nama_kelas_X,a.Id_kelas_x,a.Wali_kelas,a.ruangan,b.NISN,c.Nama FROM kelas_x a,relasi_ketua_kelas_kelas_x b,siswa c WHERE a.Id_kelas_x = ".$idkelas." AND a.Id_kelas_x = b.Id_kelas_x AND b.NISN = c.NISN";

          $dataKelas = $this->db->query($query_2);
          $result = $dataKelas->row_array(1);
          return $result;
       }
       else{
          return "no";
       }
    }


  }

?>