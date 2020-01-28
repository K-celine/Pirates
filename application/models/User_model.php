<?php 


class User_model extends CI_Model {


	public function create_user()
	{

		$pass_encrypted = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

		$data = array(

			'first_name' 	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'email'		 	=> $this->input->post('email'),
			'username' 	 	=> $this->input->post('username'),
			'password'	 	=> $pass_encrypted,
			'news_subscribe'=> $this->input->post('news_subscribe')
		);


			if($this->input->post('news_subscribe') == 1){

				$data_news = array(
			
				'email_subscribe'	=> $this->input->post('email'),
			
				);

			$insert_data_news = $this->db->insert('newsletter', $data_news);
			
			}

		$insert_data = $this->db->insert('users', $data);

		return $insert_data;
	}


	public function login_user($email, $password)
	{
		
		$this->db->where('email', $email);

		$result = $this->db->get('users');

		$db_password = $result->row(5)->password;

		if(password_verify($password, $db_password)) {

			return $result->row();
		}else{

			return false;
		}
	}

	public function get_list_sub_newsletter()
	{

		$query = $this->db->get('newsletter');
		
		return $query->result();
	}

	public function get_list_booking()
	{

		$query = $this->db->get('booking');
		
		return $query->result();
	}

	public function get_list_admin()
	{

		$this->db->where('role =' , 1);

		$query = $this->db->get('users');
		
		return $query->result();
	}

	public function delete_admin($id_user)
	{

		$this->db->where('id' , $id_user);

		$this->db->delete('users');	
	}

	public function get_one_admin($id_user)
	{

		$this->db->where('id', $id_user);

		$query = $this->db->get('users');
		
		return $query->row();
	}

	public function edit_admin($id_user)
	{
		
		$this->db->where('id' , $id_user);

		$this->db->set('role =' , 0);

		$this->db->update('users');

		return true;

	}

}

?>