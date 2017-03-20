<?php 

  class Admin extends CI_Controller{
  	
	public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->library("session");
        $this->load->model("Admin_model");
        $this->model = new Admin_model();
    }
	
	function index() {
		$this->page('index');
	}	
	
	function page($action, $action2='') {
        if($this->session->tempdata('username') != null){
            $this->model->fillAllData($this->session->tempdata("username"));
			
            if($action == "index"){				
				$komponen = $this->loadKomponen();
            } elseif($action == 'profile') {
				$komponen = $this->loadKomponen($this->load->view('Admin/konten_profile', ["model" => $this->model], true));
            } elseif($action == 'siswa') {
				$sidebar['menu'] = 'siswa';
				if($action2 == 'semua') {
					$sidebar['submenu'] = 'semua';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_siswa_all', ["model" => $this->model], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_siswa_add', ["model" => $this->model], true), $sidebar);
				}
			} elseif($action == 'guru') {
				$sidebar['menu'] = 'guru';
				if($action2 == 'semua') {
					$sidebar['submenu'] = 'semua';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_guru_all', ["model" => $this->model], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_guru_add', ["model" => $this->model], true), $sidebar);
				}
			} elseif($action == 'wali') {
				$sidebar['menu'] = 'wali';
				if($action2 == 'semua') {
					$sidebar['submenu'] = 'semua';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_wali_all', ["model" => $this->model], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_wali_add', ["model" => $this->model], true), $sidebar);
				}
			}
			$this->load->view("Admin/index", $komponen);
        }
        else if($this->session->tempdata('username') == null){
			$this->session->unset_tempdata("username");
			$this->session->sess_destroy();
			$this->session->set_flashdata("message","session timed out, you need to login"); //flashdata session 
			$action = "";

			$this->login();
        }
        else {
			$this->login(); 
		}
	}
	
	function login() {
		$this->load->helper('url');
		$this->load->view('Admin/login');
	}

    function loginProcess(){
		$this->model->setUsername($_POST['username']);
		$this->model->setPassword($_POST['password']);
		$data = $this->model->login($_POST['username'],$_POST['password']);
		
		if($data->num_rows()>0){
		   $this->session->set_tempdata('username',$_POST['username'],60*10); //tempdata session dapat diatur expire time session 
		   echo 1;
		}
		else{
		   echo 0;
		}
    }

    //process logout siswa
    function logoutProcess(){
        if($this->session->tempdata('username') != null){
			$this->session->unset_tempdata("username");
			$this->session->sess_destroy();
			redirect("Admin/login");
        }
    }
	
	function loadKomponen($konten='', $activeSidebar = array('menu' => '', 'submenu' => '')) {
		if($konten == '') {
			$konten = $this->load->view('Admin/konten_home', array(), true);		
		}
		
		$komponen = array (
			'header' => $this->load->view('Admin/header', ["model" => $this->model], true),
			'sidebar' => $this->load->view('Admin/sidebar', array("model" => $this->model, 'menu' => $activeSidebar['menu'], 'submenu' => $activeSidebar['submenu']), true),
			'sidebar_control' => $this->load->view('Admin/sidebar_control', array(), true),
			'konten' => $konten,
			'footer' => $this->load->view('Admin/footer', array(), true)
		);
		
		return $komponen;
	}
	
	function updateProfile() {	
		$result = $this->model->updateProfile($_POST);
		echo $result;
		$this->session->set_tempdata("username", $_POST['username']);
	}
  }

?>
