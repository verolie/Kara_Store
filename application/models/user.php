<?php
    class user extends CI_Model{


        function login($table,$where){		
            return $this->db->get_where($table,$where);
        }
        

	    function insertuser($data)
	    {
            return $this->db->insert('user',$data);
	    }
    }