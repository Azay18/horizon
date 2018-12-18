<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_get_data_desa extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_model');			
	}
	
	public function index()
	{
		$data['m_data_destana']=$this->M_model->get_destana();
		$this->load->view('buatlaporan',$data);
    }
}