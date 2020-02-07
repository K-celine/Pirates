<?php 

	class Home extends CI_Controller 
	{

		public function index()
		{

			$data['actus'] = $this->home_model->get_actus();

			$data['matchs'] = $this->match_model->get_matchs();
		
			$data['main_view'] = "home_view";

			$this->load->view('layouts/main', $data);
		}


		public function actu($id_actu)
		{
			
			$data['one_actu'] = $this->home_model->get_one_actu($id_actu);

			$data['main_view'] = "actus/actu_view";

			$this->load->view('layouts/main', $data);
		}


		public function subscribe_newsletter()
		{

    		$this->form_validation->set_rules('email_newsletter', 'email', 'trim|htmlspecialchars|required|valid_email');
    
			if($this->form_validation->run() == FALSE){

      			$data['main_view'] = 'home_view';
      			$this->load->view('layouts/main', $data);
			}else{

				$email = $this->input->post('email_newsletter');
				$email = $this->security->xss_clean($email);
		
				$data = array('email_subscribe' => $email);

    			if($this->home_model->subscribe_newsletter($data)){

        			$this->session->set_flashdata('newsletter_subscribed', "INSCRIPTION A LA NEWSLETTER AVEC SUCCES !");
        
        			redirect('home/index');
        		}else{
        			$this->session->set_flashdata('newsletter_failed', "VOUS ETES DEJA INSCRIT A LA NEWSLETTER");
        
        			redirect('home/index');
        		}
        	}
        }
    }
?>