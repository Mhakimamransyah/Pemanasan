<?php 

  class Admin extends CI_Controller{
  	
	public function __construct(){
        parent::__construct();
        $this->load->helper("url");
		$this->load->helper("file");
        $this->load->database();
        $this->load->library("session");
        $this->load->model("Admin_model");
        $this->model = new Admin_model();
    }
	
	function index() {
		$this->page('index');
	}	
	
	function page($action, $action2='', $action3='') {
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
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_siswa_all', ['siswas' => $this->model->retrieveAll('siswa')], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_siswa_add', [], true), $sidebar);
				}
			} elseif($action == 'guru') {
				$sidebar['menu'] = 'guru';
				if($action2 == 'semua') {
					$sidebar['submenu'] = 'semua';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_guru_all', ['gurus' => $this->model->retrieveAll('guru')], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_guru_add', [], true), $sidebar);
				}
			} elseif($action == 'wali') {
				$sidebar['menu'] = 'wali';
				if($action2 == 'semua') {
					$sidebar['submenu'] = 'semua';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_wali_all', ['walis' => $this->model->retrieveAll('wali_murid')], true), $sidebar);
				} elseif($action2 == 'tambah') {
					$sidebar['submenu'] = 'tambah';
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_wali_add', [], true), $sidebar);
				}
			} elseif($action == 'detail') {
				if($action2 == 'siswa') {
					$result = $this->model->retrieve('siswa', array('NISN' => $action3));
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_siswa_edit', ['data' => $result], true));
				} elseif($action2 == 'guru') {
					$result = $this->model->retrieve('guru', array('NIP' => $action3));
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_guru_edit', ['data' => $result], true));				
				} elseif($action2 == 'wali') {
					$result = $this->model->retrieve('wali_murid', array('id_wali_murid' => $action3));
					$komponen = $this->loadKomponen($this->load->view('Admin/konten_wali_edit', ['data' => $result], true));				
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
	
	function updateProfile($action) {	
		if($action == 'admin') {
			$result = $this->model->update('admin', $_POST, "username = '" .$this->session->tempdata('username'). "'");
			echo $result;
			$this->session->set_tempdata("username", $_POST['username'],60*10);
		} elseif($action == 'siswa') {
			$result = $this->model->update('siswa', $_POST, "NISN = '" .$_POST['NISN']. "'");
			echo $result;
		} elseif($action == 'guru') {
			$result = $this->model->update('guru', $_POST, "NIP = '" .$_POST['NIP']. "'");
			echo $result;
		} elseif($action == 'wali') {
			$result = $this->model->update('wali_murid', $_POST, "id_wali_murid = '" .$_POST['id_wali_murid']. "'");
			echo $result;
		}
	}
	
	function updateAvatar($action) {	
		if($action == 'admin') {
			$this->load->library("upload",$this->configUpload('admin'));	
			if($this->upload->do_upload('ava')) {
				$this->model->fillAllData($this->session->tempdata("username"));
				$prev_ava = "resource/admin/dist/img/" .$this->model->getAva();
				$data['ava'] = $this->upload->data('file_name');
				$result = $this->model->update('admin',$data,"username = '" .$this->session->tempdata('username'). "'");
				echo $result;
				$this->session->set_tempdata("username", $this->model->getUsername(),60*10);
				unlink($prev_ava);
			} else {
				$error = $this->upload->display_errors(' ',' ');
				echo $error;
			}
		} elseif($action == 'siswa') {
			$this->load->library("upload",$this->configUpload('siswa'));	
			if($this->upload->do_upload('Foto')) {
				$result = $this->model->retrieve('siswa', array('NISN' => $_POST['NISN']));
				$prev_ava = "resource/siswa/img/fotosiswa/" .$result[0]['Foto'];
				$data['Foto'] = $this->upload->data('file_name');
				$result = $this->model->update('siswa', $data, "NISN = '" .$_POST['NISN']. "'");
				echo $result;
				unlink($prev_ava);
			} else {
				$error = $this->upload->display_errors(' ',' ');
				echo $error;
			}			
		} elseif($action == 'guru') {
			
		} elseif($action == 'wali') {
		
		}
	}	
	
	function delete($action, $action2) {
		if($action == 'siswa') {
			
		} elseif($action == 'guru') {
			
		} elseif($action == 'admin') {
			
		}
	}
	
	function configUpload($in) {
		$config = array(			
			'allowed_types' => 'jpg|png|bmp|gif|jpeg',
			'max_size' => '20000'			
		);
		if($in == 'admin') {
			$config['upload_path'] = './resource/admin/dist/img';
		} elseif($in == 'siswa') {
			$config['upload_path'] = './resource/siswa/img/fotosiswa';
		} elseif($in == 'guru') {
			$config['upload_path'] = './resource/Guru/dist/img';
		} elseif($in == 'wali') {
			$config['upload_path'] = './resource/wali/dist/img';
		} 
		
		return $config;
	}
	
	function tambah($action) {
		if($action == 'siswa') {
			$this->load->library("upload",$this->configUpload('siswa'));
			if($this->upload->do_upload('Foto')) {
				$data = $_POST;
				$data['Foto'] = $this->upload->data('file_name');
				$result = $this->model->add('siswa', $data);
				echo $result;
			} else {
				$error = $this->upload->display_errors(' ',' ');
				echo $error;
			}
		} elseif($action == 'wali') {
			$result = $this->model->add('wali_murid', $_POST);
			echo $result;					
		} elseif($action == 'guru') {
			$result = $this->model->add('guru', $_POST);
			echo $result;					
		}
	}
  }
?>
