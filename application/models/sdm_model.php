<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_model extends CI_Model {
	public function GetPegawai($where="")
	{
		$data = $this->db->query('SELECT pegawai.*, departemen.* FROM pegawai INNER JOIN departemen ON pegawai.departemen=departemen.kode_departemen'.$where);
		return $data->result_array();
	}

	public function GetLogin()
	{
		$data = $this->db->query('SELECT departemen.*, pegawai.* FROM departemen LEFT JOIN pegawai ON departemen.id_manajer=pegawai.id_pegawai'.$where);
		return $data->result_array();
	}

	public function Fasilitator()
	{
		$data = $this->db->query('SELECT departemen.*, pegawai.* FROM departemen LEFT JOIN pegawai ON departemen.id_manajer=pegawai.id_pegawai'.$where);
		return $data->result_array();
	}

	public function InsertData($tableName, $data)
	{
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function UpdateData($tableId, $data, $where)
	{
		$res = $this->db->update($tableId, $data, $where);
		return $res;
	}

	public function DeleteData($tableId, $where)
	{
		$res = $this->db->delete($tableId, $where);
		return $res;
	}

	public function GetDept()
	{
		$dep = $this->db->query('SELECT departemen.kode_departemen FROM departemen');
		return $dep->result_array();
	}
}
