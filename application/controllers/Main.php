<?php 

class Main extends CI_Controller{

	public function index(){
		$this->load->view('Home');
	}
	public function aksi(){
		echo "hallo";
	}
}



?>