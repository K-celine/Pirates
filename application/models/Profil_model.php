<?php 

class Profil_model extends CI_Model
{


	/*
	public function get_profil($role)
	{


		$this->db->where('role', $role);

		$query = $this->db->get('users');

		return $query->row();
	}*/


	public function edit_profil($email , $data)
	{

		$this->db->where('email', $email);

		$this->db->update('users', $data);

		return true;
	}

	/*public function delete_profil($email , $data)
	{

		$this->db->where('email', $email);

		$this->db->update('users', $data);

		return true;
	}*/
	
	



}
 ?>