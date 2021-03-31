<?php 


 class Team_model extends CI_model
 {
 	public function getAllTeam()
 	{
 		return $this->db->get('team')->result_array();
 	}
 	public function tambahDataTeam()
 	{
 		$data = [
 			"nama" => $this->input->post('nama', true),
 			"jumlah_anggota" => $this->input->post('jumlah_anggota', true),
 			"ketua" => $this->input->post('ketua', true),
 			"gambar" => $this->input->post('gambar', true),

 		];
 		$this->db->insert('team', $data);
 	}
 	public function deleteTeam($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('team');
 	}
 	public function getTeamById($id)
 	{
 		return $this->db->get_where('team', ['id' => $id])->row_array();
 	}
 	public function ubahDataTeam()
 	{
 		$data = [
 			"nama" => $this->input->post('nama', true),
 			"jumlah_anggota" => $this->input->post('jumlah_anggota', true),
 			"ketua" => $this->input->post('ketua', true),
 			"gambar" => $this->input->post('gambar', true),


 		];
 		$this->db->where('id', $this->input->post('id'));
 		$this->db->update('team', $data);
 	}
 	public function cariDataTeam()
 	{
 		$keyword = $this->input->post('keyword', true);
 		$this->db->like('nama', $keyword);
 		$this->db->or_like('ketua', $keyword);
 		return $this->db->get('team')->result_array();
 	}
 }