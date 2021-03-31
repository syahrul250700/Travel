<?php 
class Contact_model extends CI_Model{
	public function getAllContact()
 	{
 		return $this->db->get('contact')->result_array();
 	}
 	function sendContact($nama,$email,$no_telepon,$pesan){
		$hsl=$this->db->query("INSERT INTO contact(nama,email,no_telepon,pesan) VALUES ('$nama','$email','$no_telepon','$pesan')");
		return $hsl;
	}
	public function deleteContact($id){
		$this->db->where('id', $id);
 		$this->db->delete('contact');
	}
}
