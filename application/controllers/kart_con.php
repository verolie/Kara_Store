<?php
class kart_con extends CI_Controller {
    public function index()
	{
        $this->load->model("product");

        
        if ($_SESSION['nama'] == ''){
            $dataus['user'] = 'Sign in';
            //$this->load->view('template/header');
            $this->load->view('kart', $dataus);
            $this->load->view('template/footer');
           }
           else{
            $dataus['user'] = $_SESSION['nama'];
            //ini nanti benerin desainnya
            //$this->load->view('template/header', $dataus);
            $this->load->view('kart', $dataus);
            $this->load->view('template/footer');
           }

           
	}

    public function produk_data(){
        
        $data['product'] = $this->product->produk_detail()->result();

    }

    
}