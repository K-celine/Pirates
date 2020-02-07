<?php 


	class Match_model extends CI_Model
	{

		public function get_matchs()
		{
			$date = date('Y-m-d H:i:s');
		
			$this->db->where('match_datetime >=', $date);

			$query = $this->db->get('matchs');
		
			return $query->result();
		}
	

		public function get_scores()
		{
			$date = date('Y-m-d H:i:s');

			$this->db->where('match_datetime <=', $date);

			$query = $this->db->get('matchs');
		
			return $query->result();
		}


		public function get_list_match()
		{

			$this->db->order_by('match_datetime','asc');

			$query = $this->db->get('matchs');
		
			return $query->result();
		}


		public function get_standing()
		{
			$this->db->order_by('points','desc');

			$query = $this->db->get('standing');
		
			return $query->result();
		}


		public function get_one_standing($id_stand)
		{

			$this->db->where('id', $id_stand);

			$query = $this->db->get('standing');
		
			return $query->row();
		}


		public function edit_standing($id_stand, $data)
		{

			$this->db->where('id' , $id_stand);

			$this->db->update('standing', $data);

			return true;
		}


		public function create_match($data)
		{
			
			$insert_query = $this->db->insert('matchs', $data);

			return $insert_query;
		}

	
		public function edit_match($id_match, $data_match)
		{

			$this->db->where('id' , $id_match);

			$this->db->update('matchs', $data_match);

			return true;
		}


		public function get_one_match($id_match)
		{

			$this->db->where('id', $id_match);

			$query = $this->db->get('matchs');
		
			return $query->row();
		}

	
		public function delete_match($id_match)
		{

			$this->db->where('id' , $id_match);

			$this->db->delete('matchs');	
		}

		
		public function post_booking($data)
		{

			$booked = $this->db->group_start()->where('match_id' , 
			$data['match_id'])->where('user_id' , 
			$this->session->userdata('id'))->group_end()->get('booking');

			$user_book = $booked->row();

			if(isset($user_book)){

				return false;
			}else{

				$insert_query = $this->db->insert('booking', $data);

				return $insert_query;
			}
		}
		
		public function get_one_book($id_match)
		{	

			$booked = $this->db->group_start()->where('match_id', 
			$id_match)->where('user_id', $this->session->userdata('id'))->group_end()->get('booking');

  			$user_book = $booked->row();

  			return $user_book;
  		}
  	}
?>