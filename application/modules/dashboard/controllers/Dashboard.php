<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct()
	{ 
	    parent::__construct();
	    $this->load->model('M_dashboard');
	}
	public function index()
	{
		$this->load->view("dashboard/home", TRUE);

	}
	public function post_insert(){
		$dataInsert = array(
			'nama_lengkap' 	=> $this->input->post("namalngkp"),
			'nik' => $this->input->post("nonik"),
			'no_pendaftaran' 	=> $this->input->post("nopendf"),
			'tempat_lahir' 	=> $this->input->post("tmplhr"),
			'tgl_lahir' 	=> date( 'Y-m-d', strtotime( $this->input->post('tgllhr') ) ),
			'alamat' 	=> $this->input->post("alamat"),
			'email' 	=> $this->input->post("email"),
			'no_hp' 	=> $this->input->post("nohp"),
			'date_created' 	=> date("Y-m-d H:i:s")
		);

		if ($this->M_dashboard->insert($dataInsert)){ 
			$this->session->set_flashdata('report', "<div class='alert alert-success'>Anda Berhasil Terdaftar!</div>");
			redirect('pendaftar');
		}else{
			$data["pesan"] = "<div class='alert alert-danger'>Gagal Menambahkan Data!</div>";
		}
	}

}