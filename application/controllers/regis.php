<?php

class regis extends CI_Controller { 

    public function index() { 
       
        $this->load->view('sign_up');

    } 

    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('user');
	}


    public function savedata()
	{
        $data = array(
        'id_user' => '',
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
        'email' => $this->input->post('email'),
        'notelp' => $this->input->post('notelp'),
        'password' => md5($this->input->post('password')),
        'postal_code' => $this->input->post('postal_code')
        );
        $this->user->insertuser($data);
        redirect(base_url()."login");
    }
} 
?>