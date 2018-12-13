<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_model');			
	}
	
	public function index()
	{
		// $data = $this->sdm_model->GetPegawai();
		$this->load->view('home'/*,array('data' => $data)*/);
	}

	// Fungsi controller login
	public function login() {
		$this->load->view('login');
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_bpbd=$this->M_model->masuk($email,$password);

        if($cek_bpbd->num_rows() > 0){ //jika login sebagai dosen
            $data=$cek_bpbd->row_array();
            $this->session->set_userdata('masuk',TRUE);
             if($data['peran']=='bnpb'){ //Akses admin
                $this->session->set_userdata('peran','bnpb');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                $this->load->view('bnpb');
                // redirect('v_dashboard');
             }else if ($data['peran']=='fasilitator') { //akses dosen
                $this->session->set_userdata('peran','fasilitator');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                $this->load->view('fasilitator');
                // redirect('v_dashboard2');
             } else {
                $this->load->view('home');
             }
        }
	}

	// Fungsi controller logout
	function logout() {
        $this->session->sess_destroy();
		$this->load->view('home');
		// $url=base_url('');
        // redirect($url);
	}
	
	public function kategori(){$this->load->view('kategori');}

	public function berita(){$this->load->view('berita');}

	public function forum(){$this->load->view('forum');}

	public function loadRegister() {
		$this->load->view('register');
	}
	
	// Fungsi controller register
	public function register() { 
		// $this->load->view('register');
		$this->form_validation->set_rules('nama', 'NAMA','required');
        $this->form_validation->set_rules('jenis_kelamin', 'JENIS_KELAMIN','required');
        $this->form_validation->set_rules('usia', 'usia','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
     	$this->form_validation->set_rules('nomor_hp','NOMOR_HP','required');
        $this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('alasan','ALASAN','required');
		$this->form_validation->set_rules('jenjang_pendidikan','JENJANG_PENDIDIKAN','required');
		$this->form_validation->set_rules('kode_pos','KODE_POS','required');
		$this->form_validation->set_rules('alamat','ALAMAT','required');

		if($this->form_validation->run() == FALSE) {
			echo " <script> 
			alert('Terdapat kesalahan')
			</script>";
			$this->load->view('register');
		} else {
			$data['nama']   =    $this->input->post('nama');
            $data['jenis_kelamin'] =    $this->input->post('jenis_kelamin');
            $data['usia'] =    $this->input->post('usia');
            $data['email']  =    $this->input->post('email');
            $data['nomor_hp'] =    $this->input->post('nomor_hp');
            $data['password'] =    md5($this->input->post('password'));
			$data['alasan'] =      $this->input->post('alasan');
			$data['jenjang_pendidikan'] =      $this->input->post('jenjang_pendidikan');
			$data['kode_pos'] =      $this->input->post('kode_pos');
			$data['alamat'] =      $this->input->post('alamat');
 
			$this->M_model->daftar($data);

			echo "<script> 
			alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu proses aktifasi agar akun Anda dapat digunakan')
			</script>";
			$this->load->view('login');
		}
	}
	
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
