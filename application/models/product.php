<?php
class product extends CI_Model{
    public function productlist(){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('gambar', 'produk.id_produk = gambar.id_produk');
        $this->db->where('gambar.ke', 1);
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query;
        }
        else
        {
            return false;
        }
    }

    public function produk_detail($id){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('gambar', 'produk.id_produk = gambar.id_produk');
        $this->db->where('produk.id_produk', $id);
        $query = $this->db->get();
        return $query;
    }

}