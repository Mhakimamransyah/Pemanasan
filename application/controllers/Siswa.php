<?php 

  class Siswa extends CI_Controller{
     
     var $model;
     

     public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->library("session");
<<<<<<< HEAD
=======
        $this->load->library("upload",$this->getUploadConfigurasi());

>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
        $this->load->model("Siswa_model");
        $this->model = new Siswa_model();
     }

     //exit and entry of the program flow//MAIN CONTROL OF PROGRAM
     function index($action = "none"){ 
        if($this->session->tempdata('nisn') != null){
              $this->model->fillAllData($this->session->tempdata("nisn"));
              if($action == "profile"){
                  $this->load->view("Siswa/Siswa_profile",["model"=>$this->model]);
              }
              else{
                  $this->load->view("Siswa/Siswa_main",["model"=>$this->model]);    
              }
        }
        else if($this->session->tempdata('nisn') == null && $action != "none"){
              $this->session->unset_tempdata("nisn");
              $this->session->sess_destroy();
              $this->session->set_flashdata("message","sorry session timeout, you need to login back"); //flashdata session 
              $action = "";

              $this->login();
        }
        else{
               $this->login(); //siswa login first!!  
            }
     }

    //show login form siswa
    function login(){
          $this->load->view("Siswa/Siswa_login_view");
    }

   
   //processing login siswa
    function loginProcess(){
            $this->model->setNisn($_POST['nisn']);
            $this->model->setPassword($_POST['password']);
            $data = $this->model->login($_POST['nisn'],$_POST['password']);
            
            if($data->num_rows()>0){
<<<<<<< HEAD
               $this->session->set_tempdata('nisn',$_POST['nisn'],20); //tempdata session dapat diatur expire time session 
=======
               $this->session->set_tempdata('nisn',$_POST['nisn'],2000); //tempdata session dapat diatur expire time session 
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
               echo 0;
            }
            else{
               echo 1;
            }
    }

    //process logout siswa
    function logoutProcess(){
<<<<<<< HEAD
        if($this->session->tempdata('nisn') != null){
              $this->session->unset_tempdata("nisn");
              $this->session->sess_destroy();
              redirect("Siswa/index");
        }
=======
              $this->session->unset_tempdata("nisn");
              $this->session->sess_destroy();
              redirect("Siswa/index");
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
    }

    //show register form for siswa
    function register(){
       $this->load->view("Siswa/Siswa_registration_view");
<<<<<<< HEAD
=======
    }

    function registerProcess(){
        if($_POST['password'] != $_POST['confirmpass']){
           
           echo 2;    
        
        }
        else{
           if($this->upload->do_upload("inputimg1")){
             
                if(isset($_POST["jurusan"])){
                        $data = [ "nama" => $_POST['nama'],
                        "nisn" => $_POST["nisn"],
                        "ttl" => $_POST['ttl'],
                        "alamat" => $_POST['alamat'],
                        "jurusan" => $_POST['jurusan'],
                        "kontak" => $_POST['kontak'],
                        "asalSmp" => $_POST['smp'],
                        "password" => $_POST['password'],
                        "foto" => $this->upload->data("file_name")];
                       $this->model->insert($data);
                       $this->session->set_flashdata("welcome","true"); //flashdata sessionc untuk menyapa pengguna baru
                       $this->session->set_tempdata('nisn',$_POST["nisn"],2000); 
                       $this->index();
                  }
                else{
                       echo "jurusan belum diisi"; //Need to handle view script
                }
          }
          else{
              echo "gagal upload foto"; //Need to handle view script
          }
      }
        
    }

    function getUploadConfigurasi(){
       $config  = ['upload_path' => "./resource/siswa/img/fotosiswa",
                  'allowed_types' => 'jpg|png|bmp',
                  'max_size' => '20000'];
        return $config;
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
    }

  }


?>