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

     //exit and entry of the program flow//MAIN CONTROL OF PROGRAM
     function index($action = "none"){ 
        if($this->session->tempdata('nisn') != null){
              if($action == "profile"){
                  $this->load->view("Siswa/Siswa_profile");
              }
              else{
                 $this->load->view("Siswa/Siswa_main");
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
               $this->session->set_tempdata('nisn',$_POST['nisn'],20); //flashdata session dapat diatur expire time session
               echo 0;
            }
            else{
               echo 1;
            }
    }

    //process logout siswa
    function logoutProcess(){
        if($this->session->tempdata('nisn') != null){
              $this->session->unset_tempdata("nisn");
              $this->session->sess_destroy();
              redirect("Siswa/index");
        }
    }

    //show register form for siswa
    function register(){
       $this->load->view("Siswa/Siswa_registration_view");
    }

  }


?>