<?php 

Class Siswadb{

	var $siswa;
    
    
	function siswaClass($nisn){
      $query = "SELECT * FROM relasi_siswa_kelas_x WHERE NISN='".$nisn."'";
      $data = $this->db->query($query);
      return $data->num_rows();
	}
}


?>