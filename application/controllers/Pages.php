<?php 

class Pages extends CI_Controller 
{

	public function club()
	{
	
		$data['main_view'] = "pages/club_view";

		$this->load->view('layouts/main', $data);
	}


	public function team()
	{
	
		$data['main_view'] = "pages/team_view";

		$this->load->view('layouts/main', $data);
	}


	public function media()
	{
	
		$data['main_view'] = "pages/media_view";

		$this->load->view('layouts/main', $data);
	}



	public function contact()
	{
		$this->form_validation->set_rules('first_name', 'Prénom', 'htmlspecialchars|trim|required|min_length[2]|alpha');
    	$this->form_validation->set_rules('last_name', 'Nom', 'htmlspecialchars|trim|required|min_length[2]|alpha');
    	$this->form_validation->set_rules('email', 'Email', 'htmlspecialchars|trim|required|valid_email');
    	$this->form_validation->set_rules('subject_message', 'Sujet', 'htmlspecialchars|required|min_length[2]');
    	$this->form_validation->set_rules('content_message', 'Message', 'htmlspecialchars|required|min_length[2]');
	

		if($this->form_validation->run() == FALSE){

		$data['main_view'] = "pages/contact_view";

		$this->load->view('layouts/main', $data);
		}else{

      		if($this->contact_model->post_message()){

        	$this->session->set_flashdata('message_sent', "MESSAGE ENVOYE AVEC SUCCES ! ");
        	redirect('home/index');

			}
		}
	}



	public function message($id_message)
	{
		$data['one_message'] = $this->contact_model->get_one_message($id_message);

		$data['main_view'] = "pages/message_view";

		$this->load->view('layouts/main', $data);
	}

	public function delete_message($id_message)
    	{

      		$this->contact_model->delete_message($id_message);

      		$this->session->set_flashdata('message_deleted' , "MESSAGE SUPPRIME AVEC SUCCES ! ");

      		redirect("users/admin");
    	}
  	
	
}		

?>



  
