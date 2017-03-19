<?php 

class Main extends CI_Controller{

	public function index(){
		$this->load->helper("url");
		$this->load->view('Home');
	}
	public function aksi(){
		echo "hallo";
	}
}



?>