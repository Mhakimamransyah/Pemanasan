<?php 

  class Admin extends CI_Controller{
  	function index(){
		$this->load->helper('url');
  		$this->load->view("Admin/index");
  	}
	
	function login() {
		$this->load->helper('url');
		$this->load->view('Admin/login');
	}
	
	function loginProcess() {
		$this->load->helper('url');
		
		//
		//
		//
		
		$this->load->view('Admin/index');
	}
  }

?>
