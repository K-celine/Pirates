<?php 


class User_model extends CI_Model {


	public function create_user()
	{

		$options = ['cost' => 12];

		$encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

			'first_name' => $this->input->post('first_name'),
			'last_name'  => $this->input->post('last_name'),
			'email'		 => $this->input->post('email'),
			'username' 	 => $this->input->post('username'),
			'password'	 => $encrypted_pass
		);
		
		$insert_data = $this->db->insert('users', $data);

		return $insert_data;
	}


	public function login_user($username, $password)
	{
		
		$this->db->where('username', $username);

		$result = $this->db->get('users');

		$db_password = $result->row(6)->password;

		if(password_verify($password, $db_password)) {

			return $result->row(0)->id;
		}else{

			return false;
		}
	}
}

?>