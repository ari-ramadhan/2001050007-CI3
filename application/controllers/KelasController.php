<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class KelasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KelasModel');
	}

	public function index()
	{	
		$data['isi'] = $this->KelasModel->getAll();
		
		$this->load->helper('url');
		$this->load->view('index', $data);
	}
}

