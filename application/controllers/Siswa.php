<?php 

  class Siswa extends CI_Controller{
     
     var $model;

     public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
        $this->load->model("Siswa_model");
        $this->model = new Siswa_model();
     }

     function index(){
        if($this->session->has_userdata('nisn')){
             $this->load->view("Siswa/Siswa_main");
        }
        else{
               $this->login(); //siswa login dulu  
            }
     }

    function login(){
          $this->load->view("Siswa/Siswa_login_view");
    }

    function SiswaCredentialPoint(){
        if(isset($_POST['otentikasi'])){
             $this->load->view("Siswa/Siswa_main");
        }
    }

    function loginProcess(){
            $this->model->setNisn($_POST['nisn']);
            $this->model->setPassword($_POST['password']);
            $data = $this->model->login($_POST['nisn'],$_POST['password']);

            if($data->num_rows()>0){
               $this->session->set_userdata('nisn',$_POST['nisn']);      
               echo 0;
            }
            else{
               echo 1;
            }
    }

    function logoutProcess(){
        if($this->session->has_userdata('nisn')){
              $this->session->unset_userdata("nisn");
              $this->session->sess_destroy();
              redirect("Siswa/index");
        }
    }

    function register(){
       $this->load->view("Siswa/Siswa_registration_view");
    }

  }


?>