
<?php
class detail_con extends CI_Controller {

    

    public function index()
	{
        $this->load->model('product');
        $id_prod = $_SESSION['id_prod'];

        $data['gbr'] = $this->product->produk_detail($id_prod)->result();
        $data['brg'] = $this->product->produk_detail($id_prod)->row();
        $this->load->view('detail_produk', $data);
            $this->load->view('template/footer');
    }

    public function tambah_cart($id){

         //for the set_select() function
        $this->load->library('form_validation');

        $this->load->model('product');

        $produk = $this->product->produk_detail($id)->row();

        //library cart
        $this->load->library('cart');

        $bag = $this->cart->contents();

        $insert_new = True;
        foreach ($bag as $item) {
            if ( $item['id_prod'] == $id && $item['size'] == $this->input->post('size')) { // Set value to your variable
                $data = array('id_prod'=>$item['id_prod'],'kuantiti'=>++$item['kuantiti']);
                $this->cart->update($data);
                // set $insert_new value to False
                $insert_new = FALSE;
            }
        }

        

        if( $insert_new == TRUE){
            $data = array(
                'id_prod'      => $id,
                'nama'         => $produk->nama,
                'kategori'     => $produk->kategori,
                'deskripsi'    => $produk->deskripsi,
                'harga'        => $produk->harga,
                'kuantiti'     => 1,
                'size'         => $this->input->post('size')
            );
    
        
         $this->cart->insert($data);
        }

        redirect(base_url()."detail_con");
    }
}