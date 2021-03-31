<?php
class Portfolio_model extends CI_Model{
	public function getAllPortfolio()
 	{
 		return $this->db->get('portfolio')->result_array();
 	}
	public function deletePortfolio($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('portfolio');
 	}
}