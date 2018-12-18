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
        // $this->uri->segment($id);
        $data = 'aktif';
        $this->db->set('status',$data);
        $this->db->where('id_user', $id);
        $this->db->update('m_users');
        // $this->db->select("m_users',REPLACE('peran') AS '$data'");
        // $this->db->where('id_user',$id)->update('m_users','peran',$data);
    }

    
    public function tolak_fasilitator($id){
	    $this->db->where('id_user', $id);
	    $query = $this->db->delete('m_users');
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

    public function kategori() {
        $ya1=$this->db->query('SELECT ya1 FROM m_laporan');
        $ya2=$this->db->query('SELECT ya2 FROM m_laporan');
        $ya3=$this->db->query('SELECT ya3 FROM m_laporan');
        $ya4=$this->db->query('SELECT ya4 FROM m_laporan');
        $ya5=$this->db->query('SELECT ya5 FROM m_laporan');
        $ya6=$this->db->query('SELECT ya6 FROM m_laporan');
        $ya7=$this->db->query('SELECT ya7 FROM m_laporan');
        $tidak1=$this->db->query('SELECT tidak1 FROM m_laporan');
        $tidak2=$this->db->query('SELECT tidak2 FROM m_laporan');
        $tidak3=$this->db->query('SELECT tidak3 FROM m_laporan');
        $tidak4=$this->db->query('SELECT tidak4 FROM m_laporan');
        $tidak5=$this->db->query('SELECT tidak5 FROM m_laporan');
        $tidak6=$this->db->query('SELECT tidak6 FROM m_laporan');
        $tidak7=$this->db->query('SELECT tidak7 FROM m_laporan');
        $jumlah_ya=$ya1+$ya2+$ya3+$ya4+$ya5+$ya6+$ya7;
        $jumlah_tidak=$tidak1+$tidak2+$tidak3+$tidak4+$tidak5+$tidak6+$tidak7;
        $tanggal_laporan= date('d F Y');
        $this->db->insert('m_laporan.jumlah_ya',$jumlah_ya);
        $this->db->insert('m_laporan.jumlah_tidak',$jumlah_tidak);
        $this->db->insert('m_laporan.tanggal_laporan',$tanggal_laporan);
    }

    public function kategorikan($id) {
        $jumlah_ya= $this->db->query('SELECT jumlah_ya FROM m_laporan');
        $kategori='hiya';
        if($jumlah_ya=0){
            $kategori='Bukan Desa Tangguh Bencana';
        } else if($jumlah_ya>0 && $jumlah_ya<3){
            $kategori='Pratama';
        } else if($jumlah_ya>3 && $jumlah_ya<=5){
            $kategori='Madya';
        } else {
            $kategori='Utama';
        }
        // $this->db->insert('m_data_destana.jenis_destana',$kategori);
        $this->db->set('jenis_destana',$kategori);
        $this->db->where('id_destana', $id);
        $this->db->update('m_data_destana');
    }
    
    public function get_data_destana() {
        $des = $this->db->query('SELECT m_data_destana.nama_destana FROM m_data_destana');
		return $des->result_array();
    }

    public function get_destana() {
        $query=$this->db->query('SELECT * FROM m_data_destana WHERE jenis_destana="Belum Dikategorikan" ORDER BY id_destana DESC')->result_array();
        return $query;
    }

    public function get_nama_fasilitator($email,$password) {
        $nam = $this->db->query("SELECT m_users.nama WHERE email='$email' AND password=MD5('$password') LIMIT 1");
    }

    // Menampilkan Data Desa
    public function GetDesa($where=""){
        $desa = $this->db->query('SELECT * FROM m_data_destana'.$where);
        return $desa->result_array();
    }

    // Menampilkan Calon Fasilitator
    public function GetCalon($where=""){
        $cfs = $this->db->query('SELECT * FROM m_users WHERE status="nonaktif"'.$where);
        return $cfs->result_array();
    }

    public function GetLaporan(){
        $laporan = $this->db->query('SELECT * FROM m_laporan');
        return $laporan->result_array();
    }

    public function GetProfil(){
        $profil = $this->db->query('SELECT * FROM m_users');
        return $profil->result_array();
    }

    // public function GetLaporan(){
    //     $laporan = $this->db->query('SELECT * FROM m_laporan');
    //     return $laporan->result_array();
    // }
    
    public function DeleteData($tableId, $where){
		$lap = $this->db->delete($tableId, $where);
		return $lap;
	}
    
    public function UpdateData($tableId, $data, $where){
		$res = $this->db->update($tableId, $data, $where);
		return $res;
	}
  }


  ?>