
<?php 

  class Wali extends CI_Controller{
     
     var $model;
     

     public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->library("session");
        $this->load->model("Wali_model");
        $this->model = new Wali_model();
     }

     //exit and entry of the program flow//MAIN CONTROL OF PROGRAM
     function index($action = "none"){ 
        if($this->session->tempdata('id_wali_murid') != null){
              $this->model->fillAllData($this->session->tempdata("id_wali_murid"));
              if($action == "profile"){
                  $this->load->view("Wali/Wali_edit_profile",["model"=>$this->model]);
              }
              else{
                  $this->load->view("Siswa/Siswa_main",["model"=>$this->model]);//Belum dibuat main menu wali    
              }
        }
        else if($this->session->tempdata('id_wali_murid') == null && $action != "none"){
              $this->session->unset_tempdata("id_wali_murid");
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
          $this->load->view("Wali/Wali_login_view");
    }

   
   //processing login siswa
    function loginProcess(){
            $this->model->setNisn($_POST['id_wali_murid']);
            $this->model->setPassword($_POST['password']);
            $data = $this->model->login($_POST['id_wali_murid'],$_POST['password']);
            
            if($data->num_rows()>0){
               $this->session->set_tempdata('id_wali_murid',$_POST['id_wali_murid'],20); //tempdata session dapat diatur expire time session 
               echo 0;
            }
            else{
               echo 1;
            }
    }

    //process logout siswa
    function logoutProcess(){
        if($this->session->tempdata('id_wali_murid') != null){
              $this->session->unset_tempdata("id_wali_murid");
              $this->session->sess_destroy();
              redirect("Wali/index");
        }
    }

    //show register form for siswa
    function register(){
       $this->load->view("Wali/Wali_register");//Register wali belum diedit
    }

  }


?>