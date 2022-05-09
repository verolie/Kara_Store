<?php

class login extends CI_Controller { 
	
    public function index() { 
       
        $this->load->view('sign_in');

    } 

	function __construct(){
		parent::__construct();		
		$this->load->model('user');
 
	}

    public function login()
	{

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$where = array(
			'email' => $email,
			'password' => $password
			);

		
		$cek = $this->user->login("user",$where)->num_rows();
		$session_data = $this->user->login("user",$where)->row();

		if($cek > 0){
			$data_session = array(
				'id' => $session_data->userid,
				'nama' => $session_data->nama,
				'email' => $email,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("shoping_page"));
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('shoping_page'));
	}
}
?>