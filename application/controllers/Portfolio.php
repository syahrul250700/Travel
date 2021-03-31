<?php

class Portfolio extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Halaman Portfolio';

		$data['Portfolio'] = $this->db->get('portfolio')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/footer');
	}
}