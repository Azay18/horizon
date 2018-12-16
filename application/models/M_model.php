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

    public function daftar($data) {
        $this->db->insert('m_users',$data);
    }

    public function masuk($email,$password) {
		$query=$this->db->query("SELECT * FROM m_users WHERE email='$email' AND password=MD5('$password') LIMIT 1");
		return $query;
    }
    
    public function terima_fasilitator($id){
        $this->uri->segment($id);
        $data = "aktif";
        $this->db->update('m_users','peran',$id,$data);
        // $this->db->select("m_users',REPLACE('peran') AS '$data'");
        // $this->db->where('id_user',$id)->update('m_users','peran',$data);
    }

    public function InsertData($tableName, $data) {
		$res = $this->db->insert($tableName, $data);
		return $res;
    }
    
    public function tambah_dataDestana($data) {
        $this->db->insert('m_data_destana',$data);
    }

    public function tambah_dataLaporan($data) {
        $this->db->insert('m_laporan',$data);
    }

    public function get_data_destana($data) {
        $des = $this->db->query('SELECT m_data_destana.nama_destana FROM m_data_destana');
		return $des->result_array();
    }

    public function get_nama_fasilitator($email,$password) {
        $nam = $this->db->query("SELECT m_users.nama WHERE email='$email' AND password=MD5('$password') LIMIT 1");
    }

    // Menampilkan Data Desa
    public function GetDesa(){
        $desa = $this->db->query('SELECT * FROM m_data_destana');
        return $desa->result_array();
    }

    // Menampilkan Calon Fasilitator
    public function GetCalon(){
        $cfs = $this->db->query('SELECT * FROM m_users WHERE status="nonaktif"');
        return $cfs->result_array();
    }

    public function GetProfil(){
        $profil = $this->db->query('SELECT * FROM m_users');
        return $profil->result_array();
    }

    
  }

  ?>