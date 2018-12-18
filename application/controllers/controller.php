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
				$this->session->set_userdata('ses_noHp',$data['nomor_hp']);
				$this->session->set_userdata('ses_password',md5($data['password']));
				$this->session->set_userdata('ses_alamat',$data['alamat']);
				$this->session->set_userdata('ses_kodePos',$data['kode_pos']);
				redirect('controller/bnpb');
             }else if ($data['peran']=='fasilitator' && $data['status']=='aktif') { 
                $this->session->set_userdata('peran','fasilitator');
                $this->session->set_userdata('ses_email',$data['email']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_noHp',$data['nomor_hp']);
				$this->session->set_userdata('ses_password',md5($data['password']));
				$this->session->set_userdata('ses_alamat',$data['alamat']);
				$this->session->set_userdata('ses_kodePos',$data['kode_pos']);
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
		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal_laporan'] = date('Y-m-d');
		$data['jumlah_ya'] = $data['ya1'] + $data['ya2'] + $data['ya3'] + $data['ya4'] + $data['ya5'] + $data['ya6'] + $data['ya7'];
		$data['jumlah_tidak'] = $data['tidak1'] + $data['tidak2'] + $data['tidak3'] + $data['tidak4'] + $data['tidak5'] + $data['tidak6'] + $data['tidak7']; 
		$this->M_model->tambah_dataLaporan($data);
	
		redirect('controller/laporan');
	}

	public function kategorikan(){
		$id=$this->uri->segment(3);
		$data = $this->M_model->get_data_laporan($id);
		$data2 = $this->M_model->cek_jawaban($id);			//Cek jawaban ya / tidak
		$this->load->view('kategorikan', array('data' =>$data, 'data2'=>$data2));
	}

	// public function kategori($id_destana){
	// 	$destana = $this->M_model->GetDesa(" where id_destana = '$id_destana'");
	// 	$data = array(
	// 		"nama_destana" => $destana[0]['nama_destana'],
	// 		"jumlah_penduduk" => $destana[0]['jumlah_penduduk'],
	// 		"kecamatan" => $destana[0]['kecamatan'],
	// 		"kabupaten" => $destana[0]['kabupaten'],
	// 		"provinsi" => $destana[0]['provinsi'],
	// 		"alamat" => $destana[0]['alamat'],
	// 		"kode_pos" => $destana[0]['kode_pos']
	// 	);
	// 	$this->load->view('ubahdesa', $data);
	// }

	public function kategorib(){
		$id=$this->uri->segment(3);
		$this->M_model->kategorikan($id);
		redirect('controller/lihatlaporan');
	}

	public function dataKategori(){
		$id = $this->uri->segment(3);
		$kategori = $this->M_model->GetKategori($id);
		$this->load->view('kategorikan', array('kategori' => $kategori));
	}

	public function desa(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('desa', array('desa' => $desa));
	}

	public function b_desa(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('b_desa', array('desa' => $desa));
	}

	// Menampilkan Profil
	public function profil(){
		$profil = $this->M_model->GetProfil();
		$this->load->view('profil', array('profil' => $profil));
	}

	public function berita(){$this->load->view('berita');}
	public function f_berita(){$this->load->view('f_berita');}
	public function b_berita(){$this->load->view('b_berita');}

	public function forum(){$this->load->view('forum');}
	public function f_forum(){$this->load->view('f_forum');}
	public function b_forum(){$this->load->view('b_forum');}

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

	public function kategori(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('kategori', array ('desa' => $desa));
	}
	public function f_kategori(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('f_kategori', array ('desa' => $desa));
	}
	public function b_kategori(){
		$desa = $this->M_model->GetDesa();
		$this->load->view('b_kategori', array ('desa' => $desa));
	}

	public function laporan(){
		$laporan = $this->M_model->GetLaporan();
		$this->load->view('laporan', array('laporan' => $laporan));
	}

	public function calonfasilitator(){
		$cfs = $this->M_model->GetCalon();
		$id=$this->uri->segment(3);
		$this->load->view('calonfasilitator', array('cfs' => $cfs));
	}

	public function detailcalon($id_user){
		$cfs = $this->M_model->GetCalon(" where id_user = '$id_user'");
			$data = array(
				"nama" => $cfs[0]['nama'],
				"email" => $cfs[0]['email'],
				"nomor_hp" => $cfs[0]['nomor_hp'],
				"usia" => $cfs[0]['usia'],
				"jenis_kelamin" => $cfs[0]['jenis_kelamin'],
				"jenjang_pendidikan" => $cfs[0]['jenjang_pendidikan'],
				"alamat" => $cfs[0]['alamat'],
				"alasan" => $cfs[0]['alasan'],
				"kode_pos" => $cfs[0]['kode_pos']
			);
			$this->load->view('detailfasilitator', $data);
	}

	public function daftarLaporan() {	
		$this->load->view('lihatlaporan',array('laporan' => $laporan));
	}

	public function lihatlaporan() {
		$laporan = $this->M_model->GetLaporan();
		$this->load->view('lihatlaporan',array('laporan' => $laporan));
		
	}

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

	public function ubahlaporan(){$this->load->view('ubahlaporan');}

	public function tampilLaporan(){
		$data = $this->M_model->GetLaporan();
		$this->load->view('kategorikan', array('data'=>$data));
	}

	public function kategorikanlahP(){
		$id = $this->uri->segment(3);
		$this->M_model->kategoriP($id);
		redirect('controller/lihatlaporan');
	}

	public function kategorikanlahM(){
		$id = $this->uri->segment(3);
		$this->M_model->kategoriM($id);
		redirect('controller/lihatlaporan');
	}

	public function kategorikanlahU(){
		$id = $this->uri->segment(3);
		$this->M_model->kategoriU($id);
		redirect('controller/lihatlaporan');
	}

	public function kategorikanlahB(){
		$id = $this->uri->segment(3);
		$this->M_model->kategoriB($id);
		redirect('controller/lihatlaporan');
	}

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

		public function edit_data($id_destana){
			$destana = $this->M_model->GetDesa(" where id_destana = '$id_destana'");
			$data = array(
				"nama_destana" => $destana[0]['nama_destana'],
				"jumlah_penduduk" => $destana[0]['jumlah_penduduk'],
				"kecamatan" => $destana[0]['kecamatan'],
				"kabupaten" => $destana[0]['kabupaten'],
				"provinsi" => $destana[0]['provinsi'],
				"alamat" => $destana[0]['alamat'],
				"kode_pos" => $destana[0]['kode_pos']
			);
			$this->load->view('ubahdesa', $data);
		}

		public function do_update(){
			$nama_destana = $_POST['nama_destana'];
			$jumlah_penduduk = $_POST['jumlah_penduduk'];
			$kecamatan = $_POST['kecamatan'];
			$kabupaten = $_POST['kabupaten'];
			$provinsi = $_POST['provinsi'];
			$alamat = $_POST['alamat'];
			$kode_pos = $_POST['kode_pos'];
			$data_update = array(
				'nama_destana' => $nama_destana,
				'jumlah_penduduk' => $jumlah_penduduk,
				'kecamatan' => $kecamatan,
				'kabupaten' => $kabupaten,
				'provinsi' => $provinsi,
				'alamat' => $alamat,
				'kode_pos' => $kode_pos
			);
			$where = array('kecamatan' => $kecamatan);
			$res = $this->M_model->UpdateData('m_data_destana',$data_update,$where);
			if ($res>=1) {
				redirect('controller/desa');
			}
		}

		public function bedit_data($id_destana){
			$destana = $this->M_model->GetDesa(" where id_destana = '$id_destana'");
			$data = array(
				"nama_destana" => $destana[0]['nama_destana'],
				"jumlah_penduduk" => $destana[0]['jumlah_penduduk'],
				"kecamatan" => $destana[0]['kecamatan'],
				"kabupaten" => $destana[0]['kabupaten'],
				"provinsi" => $destana[0]['provinsi'],
				"alamat" => $destana[0]['alamat'],
				"kode_pos" => $destana[0]['kode_pos']
			);
			$this->load->view('b_ubahdesa', $data);
		}

		public function bdo_update(){
			$nama_destana = $_POST['nama_destana'];
			$jumlah_penduduk = $_POST['jumlah_penduduk'];
			$kecamatan = $_POST['kecamatan'];
			$kabupaten = $_POST['kabupaten'];
			$provinsi = $_POST['provinsi'];
			$alamat = $_POST['alamat'];
			$kode_pos = $_POST['kode_pos'];
			$data_update = array(
				'nama_destana' => $nama_destana,
				'jumlah_penduduk' => $jumlah_penduduk,
				'kecamatan' => $kecamatan,
				'kabupaten' => $kabupaten,
				'provinsi' => $provinsi,
				'alamat' => $alamat,
				'kode_pos' => $kode_pos
			);
			$where = array('kecamatan' => $kecamatan);
			$res = $this->M_model->UpdateData('m_data_destana',$data_update,$where);
			if ($res>=1) {
				redirect('controller/b_desa');
			}
		}

		public function hapus($id_laporan){
			$where = array('id_laporan' => $id_laporan);
			$lap = $this->M_model->DeleteData('m_laporan', $where);
			if ($lap>=1) {
				redirect('controller/laporan');
			}
		}

		public function hapusdesa($id_destana){
			$where = array('id_destana' => $id_destana);
			$lap = $this->M_model->DeleteData('m_data_destana', $where);
			if ($lap>=1) {
				redirect('controller/desa');
			}
		}

		// public function hapusDesa(){
		// 	$id = $this->uri->segment(3);
		// 	$proses = $this->M_model->hapus_desa($id);
		// 	redirect('controller/calonfasilitator');
		// 	}
}
