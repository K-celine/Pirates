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

	public function get_standing()
	{
		$this->db->order_by('points','desc');

		$query = $this->db->get('standing');
		
		return $query->result();
	}
}
		

 ?>