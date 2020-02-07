<?php 


	class Home_model extends CI_Model
	{


		public function get_actus()
		{

			$this->db->order_by('date','desc');
		
			$query = $this->db->get('actus');
		
			return $query->result();
		}
	
		public function get_one_actu($id_actu)
		{

			$this->db->where('id', $id_actu);

			$query = $this->db->get('actus');
		
			return $query->row();
		}


		public function subscribe_newsletter($data)
		{
		
		$this->db->where('email_subscribe', $data['email_subscribe']);
		$email_exist = $this->db->get('newsletter');
		$result = $email_exist->row();

		if(isset($result)){

			return false;
		}else{

			$insert_query = $this->db->insert('newsletter', $data);

		return $insert_query;
		}
		
	}

}
		

 ?>