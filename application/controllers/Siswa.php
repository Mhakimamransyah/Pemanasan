<?php 

  class Siswa extends CI_Controller{

     function index(){
    	if(isset($_POST['submit'])){
           echo "login masuk";
    	}
    	else if(isset($_POST['create'])){
           $this->load->view("Siswa/Siswa_registration_view");
    	}
    	else{
           $this->load->view("Siswa/Siswa_login_view");
    	}
    }

  }


?>