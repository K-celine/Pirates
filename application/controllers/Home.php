<?php 

class Home extends CI_Controller 
{


	public function index()
	{
		$data['actus'] = $this->home_model->get_actus();

		$data['logos'] = $this->home_model->get_logos();

		$data['main_view'] = "home_view";

		$this->load->view('layouts/main', $data);
	}



	public function subscribe_newsletter()
	{

    	$this->form_validation->set_rules('email_newsletter', 'email', 'trim|required|valid_email');
    
		if($this->form_validation->run() == FALSE){

      		$data['main_view'] = 'home_view';
      		$this->load->view('layouts/main', $data);


    	}else{

    		if($this->home_model->post_email()){

        	$this->session->set_flashdata('newsletter_subscribed', "INSCRIPTION A LA NEWSLETTER DES PIRATES REALISEE AVEC SUCCES !");
        
        	redirect('home/index');

      		}
      	}	
  	}
  
}

?>