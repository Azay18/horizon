<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function index()
	{
		// $data = $this->sdm_model->GetPegawai();
		$this->load->view('home'/*,array('data' => $data)*/);
	}

	public function login(){$this->load->view('login');}

	public function kategori(){$this->load->view('kategori');}

	public function berita(){$this->load->view('berita');}

	public function forum(){$this->load->view('forum');}

	public function register(){$this->load->view('register');}

	public function fasilitator(){$this->load->view('fasilitator');}

	public function bnpb(){$this->load->view('bnpb');}

	public function desa(){$this->load->view('desa');}

	public function tambahdesa(){$this->load->view('tambahdesa');}

	public function buatlaporan(){$this->load->view('buatlaporan');}

	public function laporan(){$this->load->view('laporan');}

	public function calonfasilitator(){$this->load->view('calonfasilitator');}

	public function lihatlaporan(){$this->load->view('lihatlaporan');}

	public function ubahdesa(){$this->load->view('ubahdesa');}

	public function indikator(){$this->load->view('indikator');}

	public function detaillaporan(){$this->load->view('detaillaporan');}

	public function sidebar(){$this->load->view('sidebar');}

	public function berita1(){$this->load->view('berita1');}

	// public function add_data()
	// {
	// 	$dep = $this->sdm_model->GetDept();
	// 	$this->load->view('form_add',array('dep' => $dep));
	// }

	// public function do_insert()
	// {
	// 	$nama_depan = $_POST['nama_depan'];
	// 	$nama_belakang = $_POST['nama_belakang'];
	// 	$tanggal_lahir = $_POST['tanggal_lahir'];
	// 	$jenis_kelamin = $_POST['jenis_kelamin'];
	// 	// $alamat = $_POST['alamat'];
	// 	// $gaji = $_POST['gaji'];
	// 	// $supervisor = $_POST['supervisor'];
	// 	$departemen = $_POST['departemen'];
	// 	$data_insert = array(
	// 		'nama_depan' => $nama_depan,
	// 		'nama_belakang' => $nama_belakang,
	// 		'tanggal_lahir' => $tanggal_lahir,
	// 		'jenis_kelamin' => $jenis_kelamin,
	// 		// 'alamat' => $alamat,
	// 		// 'gaji' => $gaji,
	// 		// 'supervisor' => $supervisor,
	// 		'departemen' => $departemen
	// 	);
	// 	$res = $this->sdm_model->InsertData('pegawai',$data_insert);
	// 	if ($res>=1) {
	// 		redirect('sdm_controller/index');
	// 	}else {
	// 		echo "Gagal";
	// 	}
	//   }

	// 	public function edit_data($id_pegawai){
	// 		$pegawai = $this->sdm_model->GetPegawai(" where id_pegawai = '$id_pegawai'");
	// 		$data = array(
	// 			"nama_depan" => $pegawai[0]['nama_depan'],
	// 			"nama_belakang" => $pegawai[0]['nama_belakang'],
	// 			"tanggal_lahir" => $pegawai[0]['tanggal_lahir'],
	// 			"jenis_kelamin" => $pegawai[0]['jenis_kelamin'],
	// 			"alamat" => $pegawai[0]['alamat'],
	// 			"gaji" => $pegawai[0]['gaji'],
	// 			"supervisor" => $pegawai[0]['supervisor'],
	// 			"departemen" => $pegawai[0]['departemen']
	// 		);
	// 		$this->load->view('form_edit', $data);
	// 	}

	// 	public function do_update(){
	// 		$nama_depan = $_POST['nama_depan'];
	// 		$nama_belakang = $_POST['nama_belakang'];
	// 		$tanggal_lahir = $_POST['tanggal_lahir'];
	// 		$jenis_kelamin = $_POST['jenis_kelamin'];
	// 		$alamat = $_POST['alamat'];
	// 		$gaji = $_POST['gaji'];
	// 		$supervisor = $_POST['supervisor'];
	// 		$departemen = $_POST['departemen'];
	// 		$data_update = array(
	// 			'nama_depan' => $nama_depan,
	// 			'nama_belakang' => $nama_belakang,
	// 			'tanggal_lahir' => $tanggal_lahir,
	// 			'jenis_kelamin' => $jenis_kelamin,
	// 			'alamat' => $alamat,
	// 			'gaji' => $gaji,
	// 			'supervisor' => $supervisor,
	// 			'departemen' => $departemen
	// 		);
	// 		$where = array('nama_belakang' => $nama_belakang);
	// 		$res = $this->sdm_model->UpdateData('pegawai',$data_update,$where);
	// 		if ($res>=1) {
	// 			redirect('sdm_controller/index');
	// 		}
	// 	}

	// 	public function do_delete($id_pegawai){
	// 		$where = array('id_pegawai' => $id_pegawai);
	// 		$res = $this->sdm_model->DeleteData('pegawai', $where);
	// 		if ($res>=1) {
	// 			redirect('sdm_controller/index');
	// 		}
	// 	}
}
