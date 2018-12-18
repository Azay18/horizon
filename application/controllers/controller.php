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

        if($cek_bpbd->num_rows() > 0){ 
            $data=$cek_bpbd->row_array();
            $this->session->set_userdata('masuk',TRUE);
             if($data['peran']=='bnpb' && $data['status']=='aktif'){ 
                $this->session->set_userdata('peran','bnpb');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('controller/bnpb');
             }else if ($data['peran']=='fasilitator' && $data['status']=='aktif') { 
                $this->session->set_userdata('peran','fasilitator');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('controller/fasilitator');
             } else {
                $this->load->view('home');
             }
        }
	}

	// Fungsi controller logout
	function logout() {
        $this->session->sess_destroy();
		$this->load->view('home');
	}

	// Fungsi controller tambah data destana
	function tambah_dataDesa() {
		$data['nama_destana'] = $this->input->post('nama_destana');
		$data['alamat']   =    $this->input->post('alamat');
        $data['kecamatan'] =    $this->input->post('kecamatan');
        $data['kabupaten'] =    $this->input->post('kabupaten');
        $data['provinsi']  =    $this->input->post('provinsi');
        $data['jumlah_penduduk'] =    $this->input->post('jumlah_penduduk');
        $data['kode_pos'] =    ($this->input->post('kode_pos'));
 
		$this->M_model->tambah_dataDestana($data);
	
		redirect('controller/desa');
	}

	// Tampilkan data nama destana di view form tambah destana (select choice)
	public function tambah_dataDesaTangguh() {
		$dep = $this->M_model->get_data_destana();
		$this->load->view('tambahdesa',array('dep' => $dep));
	}
	
	// Fungsi controller identitas laporan
	function identitas_laporan() {
		$data['nama_fasilitator'] = $this->input->post('nama_fasilitator');
		$data['nama_desa']   =    $this->input->post('nama_destana');
        $data['ya1'] =    $this->input->post('jawaban1');
        $data['tidak1'] =    ($this->input->post('jawaban1'));
		$data['ya2'] =    $this->input->post('jawaban2');
        $data['tidak2'] =    ($this->input->post('jawaban2'));
		$data['ya3'] =    $this->input->post('jawaban3');
        $data['tidak3'] =    ($this->input->post('jawaban3'));
		$data['ya4'] =    $this->input->post('jawaban4');
        $data['tidak4'] =    ($this->input->post('jawaban4'));
		$data['ya5'] =    $this->input->post('jawaban5');
        $data['tidak5'] =    ($this->input->post('jawaban5'));
		$data['ya6'] =    $this->input->post('jawaban6');
        $data['tidak6'] =    ($this->input->post('jawaban6'));
		$data['ya7'] =    $this->input->post('jawaban7');
		$data['tidak7'] =    ($this->input->post('jawaban7'));
		$data['tanggal_laporan'] = date('d F Y');
		$data['jumlah_ya'] = $data['ya1'] + $data['ya2'] + $data['ya3'] + $data['ya4'] + $data['ya5'] + $data['ya6'] + $data['ya7'];
		$data['jumlah_tidak'] = $data['tidak1'] + $data['tidak2'] + $data['tidak3'] + $data['tidak4'] + $data['tidak5'] + $data['tidak6'] + $data['tidak7']; 
		$this->M_model->tambah_dataLaporan($data);
	
		redirect('controller/laporan');
	}

	// Menampilkan Data Desa
	public function kategori(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('kategori', array('desa' => $desa));
	}

	public function desa(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('desa', array('desa' => $desa));
	}

	// Menampilkan Profil
	public function profil(){
		$profil = $this->M_model->GetProfil();
		$this->load->view('profil', array('profil' => $profil));
	}

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
		// $this->form_validation->set_rules('foto', 'foto','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
     	$this->form_validation->set_rules('nomor_hp','NOMOR_HP','required');
        $this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('alasan','ALASAN','required');
		$this->form_validation->set_rules('jenjang_pendidikan','JENJANG_PENDIDIKAN','required');
		$this->form_validation->set_rules('kode_pos','KODE_POS','required');
		$this->form_validation->set_rules('alamat','ALAMAT','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$data['nama']   =    $this->input->post('nama');
            $data['jenis_kelamin'] =    $this->input->post('jenis_kelamin');
			$data['usia'] =    $this->input->post('usia');
			// $data['foto'] =    $this->input->post('foto');
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

	public function select_nama_desa() {
		$des = $this->M_model->get_data_destana();
		$this->load->view('buatlaporan',array('des' => $des));
	}

	public function ambil_nama_desa() {
		$data['m_data_destana']=$this->M_model->get_destana();
		$this->load->view('buatlaporan',$data);
	}
	
	public function peta() {
		$this->load->library('googlemaps');

		$config['kmlLayerURL'] = 'https://www.flickr.com/services/feeds/geo';
		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('peta', $data);
	}
	public function fasilitator(){$this->load->view('fasilitator');}

	public function bnpb(){$this->load->view('bnpb');}

	public function tambahdesa(){$this->load->view('tambahdesa');}

	public function buatlaporan(){$this->load->view('buatlaporan');}

	public function laporan(){
		$laporan = $this->M_model->GetLaporan();
		$this->load->view('laporan', array('laporan' => $laporan));
	}

	public function calonfasilitator(){
		$cfs = $this->M_model->GetCalon();
		$id=$this->uri->segment(3);
		$dc = $this->M_model->detailcalon($id);
		$this->load->view('calonfasilitator', array('cfs' => $cfs, 'dc' => $dc));
	}

	public function daftarLaporan() {
		$laporan = $this->M_model->GetLaporan();
		$this->load->view('lihatlaporan',array('laporan' => $laporan));
	}

	public function lihatlaporan(){$this->load->view('lihatlaporan');}

	public function ubahdesa(){$this->load->view('ubahdesa');}

	public function indikator(){$this->load->view('indikator');}

	public function detaillaporan(){$this->load->view('detaillaporan');}

	public function sidebar(){$this->load->view('sidebar');}

	public function berita1(){$this->load->view('berita1');}

	public function berita2(){$this->load->view('berita2');}

	public function berita3(){$this->load->view('berita3');}

	public function berita4(){$this->load->view('berita4');}

	public function berita5(){$this->load->view('berita5');}

	public function berita6(){$this->load->view('berita6');}

	public function terimaFasilitator() {
		$id=$this->uri->segment(3);
		$this->M_model->terima_fasilitator($id);
		redirect('controller/calonfasilitator');
		// $this->load->view('calonfasilitator');
	}

	public function tolakFasilitator() {
		$id = $this->uri->segment(3);
		$proses = $this->M_model->tolak_fasilitator($id);
		redirect('controller/calonfasilitator');
		// $this->load->view('calonfasilitator');
	}
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
