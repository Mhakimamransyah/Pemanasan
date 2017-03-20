<?php 

  class Admin_model extends CI_Model{
     
    private $nama;
    private $id;
	private $ava;
	private $email;
    private $username;
    private $password;

    public function __construct(){
    	parent::__construct();
    	$this->load->database();
    }

    public function setNama($in){
    	$this->nama = $in;
    }

	public function setId($in){
        $this->id = $in;
    }
	
	public function setPassword($in){
    	$this->password = $in;
    }
	
    public function setUsername($in){
    	$this->username = $in;
    }	

    public function setAva($in){
    	$this->ava = $in;
    }	

    public function setEmail($in){
    	$this->email = $in;
    }		
	
    public function getNama(){
        return $this->nama;
    }

    public function getId(){
        return $this->id;
    }
	
    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }
	
    public function getEmail(){
        return $this->email;
    }

    public function getAva(){
        return $this->ava;
    }	

	public function fillAllData($username){
        $query = "SELECT * FROM admin WHERE username='".$username."'";
        $data =  $this->db->query($query);
        $row = $data->row_array(1);
        $this->setId($row["id"]);
        $this->setNama($row["nama"]);
		$this->setUsername($row['username']);
		$this->setEmail($row["email"]);
		$this->setAva($row['ava']);
		$this->setPassword($row['password']);		
    }

    public function login($username,$password){
       $query = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
       return  $this->db->query($query);      
    }
	
	public function updateProfile($data) {
		$res = $this->db->update('admin', $data, "username = '" .$this->session->tempdata('username'). "'");
		return $res;
	}
  }
?>