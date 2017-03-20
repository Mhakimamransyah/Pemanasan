<?php 


 class Guru extends CI_Controller{

   function index(){
   	  	$this->load->helper('url');
   	  	$this->login();

   }
   
   function login() {
   		$this->load->helper('url');
		$this->load->view('Guru/sign-in');

	}

	function home() {
		$this->load->helper('url');
		$this->load->view('Guru/index');
	}


	function signup(){
		$this->load->view('Guru/sign-up.php') ;
	}
}
?>