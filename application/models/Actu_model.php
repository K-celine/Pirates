<?php 


class Actu_model extends CI_Model 
{


	public function create_actu()
	{
		$data = array(

			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'photo' => $_FILES['photo']['name'],
			'date' => $this->input->post('date')
			);

		$insert_query = $this->db->insert('actus', $data);

		return $insert_query;
	}


	public function edit_actu($id_actu, $data)
	{

		$this->db->where('id' , $id_actu);

		$this->db->update('actus', $data);

		return true;
	}

	public function delete_actu($id_actu)
	{

		$this->db->where('id' , $id_actu);

		$this->db->delete('actus');	
	}
}

?>