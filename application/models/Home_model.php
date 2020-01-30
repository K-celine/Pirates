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


	public function subscribe_newsletter()
	{
		$email = $this->input->post('email_newsletter');
		$email = $this->security->xss_clean($email);
		$data = array(

			'email_subscribe' => $email
		);
		$this->db->where('email_subscribe', $email);
		$email_exist = $this->db->get('newsletter');
		$result = $email_exist->row();

		if(isset($result)){

			$this->session->set_flashdata('newsletter_failed', "VOUS ETES DEJA INSCRIT A LA NEWSLETTER");
        
        	redirect('home/index');
		}else{

			$insert_query = $this->db->insert('newsletter', $data);

		return $insert_query;
		}
		
	}

}
		

 ?>