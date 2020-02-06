<?php 


	class Contact_model extends CI_Model
	{


		public function post_message($data)
		{
		
			$insert_query = $this->db->insert('messages', $data);

			return $insert_query;
		}


		public function get_list_messages()
		{

			$query = $this->db->get('messages');
		
			return $query->result();
		}
	
		public function get_one_message($id_message)
		{
		
			$this->db->where('id', $id_message);

			$query = $this->db->get('messages');
		
			return $query->row();
		}


		public function delete_message($id_message)
		{

			$this->db->where('id' , $id_message);

			$this->db->delete('messages');	
		}
	}
?>