<?php 

class Kelas_model extends CI_Model{
   var $nama;
   var $ruangan;
   var $password;
   var $ketuakelas;
   var $nisnketuakelas;

   function setNamaKelas($newNamaKelas){
       $this->nama = $newNamaKelas;
   }

   function setRuangan($newRuangan){
      $this->ruangan = $newRuangan;
   }

   function setPasswordKelas($newPassKelas){
     $this->password = $newPassKelas;
   }

   function setKetuaKelas($newKetuaKelas){
     $this->ketuakelas = $newKetuaKelas;
   }

   function setNisnKetuaKelas($newNisnkk){
      $this->nisnketuakelas = $newNisnkk;
   }

   function getNama(){

   }

   function getRuangan(){

   }

   function getPassword(){

   }

   function getKetuaKelas(){

   }

   function getNisnKetuaKelas(){

   }

   function insert(){
   	 $this->db->trans_start();
     $this->db->query("INSERT INTO kelas_x(Nama_kelas_X,Password,ruangan)VALUES('".$this->nama."','".$this->password."','".$this->ruangan."');");
     $this->db->query("INSERT INTO ketua_kelas_x(NISN,Nama)VALUES('".$this->nisnketuakelas."','".$this->ketuakelas."');");
     $this->db->query("INSERT INTO relasi_ketua_kelas_kelas_x(NISN,Id_kelas_X)
                       SELECT ketua_kelas_x.NISN , kelas_x.Id_kelas_x FROM ketua_kelas_x,kelas_x WHERE ketua_kelas_x.NISN = '".$this->nisnketuakelas."' AND kelas_x.Nama_kelas_X = '".$this->nama."';");
     $this->db->query(" INSERT INTO relasi_siswa_kelas_x(NISN,id_kelas_x)
                        SELECT relasi_ketua_kelas_kelas_x.NISN,relasi_ketua_kelas_kelas_x.Id_kelas_X FROM relasi_ketua_kelas_kelas_x WHERE relasi_ketua_kelas_kelas_x.NISN = '".$this->nisnketuakelas."';");
     $this->db->trans_complete();

     if ($this->db->trans_status() === FALSE)
     {
          return 1;
     }
     else{
     	 return 0;
     }
   }

   function join($nisn,$idkelas , $password){
   	  $query = "SELECT * FROM kelas_x WHERE Id_kelas_x = '".$idkelas."' AND Password='".$password."'";
   	  $data = $this->db->query($query);

   	  if($data->num_rows() > 0){
           $query_2 = "INSERT INTO relasi_siswa_kelas_x(NISN,id_kelas_x) VALUES('".$nisn."','".$idkelas."')";
           $data_2 = $this->db->query($query_2);
           return "found";
   	  }
   	  else{
         return "not found";
   	  }
   }

}
?>