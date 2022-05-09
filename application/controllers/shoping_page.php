<?php

class shoping_page extends CI_Controller { 

    public function index() { 
       //Load the URL helper
       $user = "";


       if ( !isset($_SESSION['nama'])){
        $dataus['user'] = 'Sign in';
        $data['barang'] = $this->product->productlist()->result();
        $this->load->view('template/header', $dataus);
        $this->load->view('shop_home', $data);
        $this->load->view('template/footer');
       }
       else{
        $dataus['user'] = $_SESSION['nama'];
        $data['barang'] = $this->product->productlist()->result();
        $this->load->view('template/header', $dataus);
        $this->load->view('shop_home', $data);
        $this->load->view('template/footer');
       }
    } 

    public function pindah_detail($id_prod)
	{
			$data_session = array(
				'id_prod' => $id_prod,
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("detail_con"));

	}
    
} 
?>