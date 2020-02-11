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

				$data = array(

				'last_name' => $this->input->post('last_name'),
				'first_name' => $this->input->post('first_name'),
				'email' => $this->input->post('email'),
				'subject_message' => $this->input->post('subject_message'),
				'content_message' => $this->input->post('content_message'));
		
				$data = $this->security->xss_clean($data);

      			if($this->contact_model->post_message($data)){

        			$this->session->set_flashdata('message_sent', "MESSAGE ENVOYE AVEC SUCCES ! ");

        			redirect('home/index');
				}
			}
		}	


		public function message($id_message)
		{
		    
		    if($this->session->userdata('role')== 1){

				$data['one_message'] = $this->contact_model->get_one_message($id_message);

				$data['main_view'] = "pages/message_view";

				$this->load->view('layouts/main', $data);
		    }else{

        	    redirect("home/index");
        	}
		}


		public function delete_message($id_message)
    	{

      		$this->contact_model->delete_message($id_message);

      		$this->session->set_flashdata('message_deleted' , "MESSAGE SUPPRIME AVEC SUCCES ! ");

      		redirect("users/admin");
    	}
  	

		public function chat()
    	{

    		$this->input->get('task');
    	
    		if($this->input->get('task')== 'write'){

    			$censure = array('anal','anus','ass','batard','bitch', 'bougnoul', 'branlette ', 'chatte','chier', 'chiant', 'chieur', 'chiasse','cock', 'couille','couilles', 'cul','bite', 'enculé', 'encule', 'enculés', 'gode', 'juif', 'fellation', 'fuck', 'hitler' , 'nichon', 'nichons', 'nigger', 'nigga' , 'pédale', 'pedale','penis', 'pd', 'merde' , 'pussy', 'putain', 'rebeu', 'sale', 'salaud' ,'sales','salopard','seins', 'sex', 'shit', 'sh1t', 'slut', 'sperme', 'tarlouse', 'tapette','twat', 'vagin');
   
				$content = word_censor($this->input->post('content'), $censure, '#&!$@#&!'); 

    			$data = array(

				'author' => $this->session->userdata('username'),
				'content' => $content);
		
				$data = $this->security->xss_clean($data);
				$data = html_escape($data);
			
				if(!$data['author'] || !$data['content']){

					echo json_encode(["status" =>"error"]);
				}else{
				
					$this->media_model->post_comment($data);
					
					echo json_encode(["status" =>"succes"]);
				}
			}else{
    			
    			$comment = $this->media_model->get_comment();

    			echo json_encode($comment);
			}
		}
	}		
?>



  
