<?php 

class Paketwisata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Team_model');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		
		$data['judul'] = 'Wisata';
		$data['Paketwisata'] = $this->Team_model->getAllTeam();
		if( $this->input->post('keyword') ){
			$data['Paketwisata'] = $this->Team_model->cariDataTeam();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('paketwisata/index', $data);
		$this->load->view('templates/footer');

	}
	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Team';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jumlah_anggota', 'Jumlah Anggota', 'required|numeric');
		$this->form_validation->set_rules('ketua', 'Ketua', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');


		if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('team/tambah');
				$this->load->view('templates/footer');
		}else{
			$this->Team_model->tambahDataTeam();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('team');
		}
		
	}
	public function hapus($id)
	{
		$this->Team_model->hapusDataTeam($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('team');
	}
	public function detail($id)
	{
		$data['judul'] = 'Detail Data Team';
		$data['team'] = $this->Team_model->getTeamById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('team/detail', $data);
		$this->load->view('templates/footer');
	}
	

}