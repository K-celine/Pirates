<?php 


class Home_model extends CI_Model
{


	public function get_actus()
	{

		$query = $this->db->get('actus');
		
		return $query->result();
	}
	
	public function get_one_actu($id_actu)
	{

		$this->db->where('id', $id_actu);

		$query = $this->db->get('actus');
		
		return $query->row();
	}


	public function post_email()
	{
		$data = array(

			'email_subscribe' => $this->input->post('email_newsletter')
		);

		$insert_query = $this->db->insert('newsletter', $data);

		return $insert_query;
	}

}
		

 ?>