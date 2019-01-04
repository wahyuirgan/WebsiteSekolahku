<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends MX_Controller {
	public function __construct()
	{ 
	    parent::__construct();
	    $this->load->model('M_pendaftar');
	}
	public function index()
	{
		$data["pendaftar"]= $this->M_pendaftar->getdata();
		$this->load->view("pendaftar/home", $data);

	}
	


}