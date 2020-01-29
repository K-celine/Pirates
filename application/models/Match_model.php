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

}
		

 ?>