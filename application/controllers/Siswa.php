<?php 

  class Siswa extends CI_Controller{
     
     var $model;

     public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Siswa_model");
        $this->model = new Siswa_model();
     }

     function index(){
        $this->login(); //siswa login dulu  
     }

    function login(){
       if(isset($_POST['submit'])){
           $this->load->view("Siswa/Siswa_main");
       }
       else if(isset($_POST['create'])){
           $this->register();
       }
       else{
          $this->load->view("Siswa/Siswa_login_view");
       }
    }

    function register(){
       $this->load->view("Siswa/Siswa_registration_view");
    }

  }


?>