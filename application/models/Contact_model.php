<?php 


class Contact_model extends CI_Model
{


	public function post_message()
	{
		$data = array(

			'last_name' => $this->input->post('last_name'),
			'first_name' => $this->input->post('first_name'),
			'email' => $this->input->post('email'),
			'subject_message' => $this->input->post('subject_message'),
			'content_message' => $this->input->post('content_message')
		);

		$insert_query = $this->db->insert('messages', $data);

		return $insert_query;
	}

}
		

 ?>