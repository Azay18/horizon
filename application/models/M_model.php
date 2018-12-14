<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_model extends CI_Model{
    
    private $_table = "m_users";

    public function getAll() {
        $results = array();
        $this->db->select('*');
        $this->db->from('m_users');

        $query = $this->db->get('m_users');

        // if($query->num_rows() > 0) {
        //     $results = $query;
        // }
        return $query;
        // return $this->db->get($this->_table)->result();
    }

    function daftar($data) {
        $this->db->insert('m_users',$data);
    }

    function masuk($email,$password) {
		$query=$this->db->query("SELECT * FROM m_users WHERE email='$email' AND password=MD5('$password') LIMIT 1");
		return $query;
    }
    
    function terima_fasilitator($id){
        $this->uri->segment($id);
        $data = "aktif";
        $this->db->replace('m_users',$data);
    }

    function tambah_dataDestana($data) {
        $this->db->insert('m_data_destana',$data);
    }
  }

  ?>