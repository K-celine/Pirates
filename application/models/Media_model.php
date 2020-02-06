<?php 


	class Media_model extends CI_Model 
	{

		public function post_comment($data)
		{
	
			$insert_query = $this->db->insert('chat', $data);

			return $insert_query;
		}

		
		public function get_comment()
		{

			$this->db->order_by('date_created','desc');

			$this->db->limit(10);

			$query = $this->db->get('chat');

			return $query->result();
		}
	}
?>