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


	public function create_match()
	{
		$data = array(

			'match_datetime' => $this->input->post('match_datetime'),
			'name_home' => $this->input->post('name_home'),
			'name_visitor' => $this->input->post('name_visitor'),
			'image_home' => $this->input->post('image_home'),
			'image_visitor' => $this->input->post('image_visitor'),
			'score_home' => $this->input->post('score_home'),
			'score_visitor' => $this->input->post('score_visitor')
			);

		$data = $this->security->xss_clean($data);

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

	public function post_booking()
	{

		if(!$this->session->userdata('logged_in')){

			$this->session->set_flashdata('booking_failed' , "CONNEXION NECESSAIRE POUR EFFECTUER UNE RESERVATION ");

              redirect("home/index");


		}else{

$data = array(

			'number_seat' => $this->input->post('number_seat'),
			'match_id' => $this->input->post('match_id'),
			'user_id' => $this->session->userdata('id')

		);
			$data = $this->security->xss_clean($data);

		$booked = $this->db
		->group_start()->where('match_id' , $data['match_id'])
		->where('user_id' , $this->session->userdata('id'))->group_end()->get('booking');

		$user_book = $booked->row();

		if(isset($user_book)){

			$this->session->set_flashdata('booking_failed2' , "deja reserve ! ");
			redirect("home/index");

		}else{

$insert_query = $this->db->insert('booking', $data);

		

$this->session->set_flashdata('booking_ok' , "OK BOOK ! ");


return $insert_query;





		}

		

		}
		
	}
	public function get_one_book($id_match)
	{

		$booked = $this->db
          			->group_start()
                ->where('match_id', $id_match)
                ->where('user_id', $this->session->userdata('id'))
         		->group_end()
    			->get('booking');

  $user_book = $booked->row();

  return $user_book;
	}

}
		

 ?>