<?php


class Contact extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Contact';

		$data['Contact'] = $this->db->get('contact')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('contact/index', $data);
		$this->load->view('templates/footer');
	}
 	function send(){
	    $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$no_telepon=htmlspecialchars($this->input->post('no_telepon',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
		$this->load->model('Contact_model');
		$this->Contact_model->sendContact($nama,$email,$no_telepon,$pesan);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('contact');
}
}