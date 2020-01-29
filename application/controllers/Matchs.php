<?php 

class Matchs extends CI_Controller 
{



	public function infos()
	{
	
		$data['scores'] = $this->match_model->get_scores();

		$data['standing'] = $this->match_model->get_standing();


		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);
	}

	public function create_match()
	{
		$this->form_validation->set_rules('match_datetime', 'Date et Heure du Match', 'required');
		$this->form_validation->set_rules('name_home', 'Team Home', 'required');
		$this->form_validation->set_rules('name_visitor', 'Team Visitor', 'required');
		$this->form_validation->set_rules('image_home', 'Logo Home', 'required');
      	$this->form_validation->set_rules('image_visitor', 'Logo Visitor', 'required');
  

      	if($this->form_validation->run() == FALSE){

        	$data['main_view'] = "matchs/Match_create_view";

        	$this->load->view('layouts/main', $data);
      	}else{

          	if($this->match_model->create_match()){

          		$this->session->set_flashdata('match_created', "NOUVEAU MATCH AJOUTE AVEC SUCCES ! ");
          			
          		redirect('users/admin');

        }   }
    	
  	}

  	public function delete_match($id_match)
    {

      	$this->match_model->delete_match($id_match);

      	$this->session->set_flashdata('match_deleted' , "MATCH SUPPRIME AVEC SUCCES ! ");

      	redirect("users/admin");
    }

	

	public function edit_match($id_match)
  {

    $this->form_validation->set_rules('match_datetime', 'Date et Heure du Match', 'required');
		$this->form_validation->set_rules('name_home', 'Team Home', 'required');
		$this->form_validation->set_rules('name_visitor', 'Team Visitor', 'required');
		$this->form_validation->set_rules('image_home', 'Logo Home', 'required');
    $this->form_validation->set_rules('image_visitor', 'Logo Visitor', 'required');
      		
    if($this->form_validation->run()== FALSE){

      	$data['one_match'] = $this->match_model->get_one_match($id_match);

     		$data['main_view'] = "matchs/match_edit_view";

      	$this->load->view('layouts/main', $data);

    } else {
      
        $data_match = array(
        
      'match_datetime' => $this->input->post('match_datetime'),
      'name_home' => $this->input->post('name_home'),
      'name_visitor' => $this->input->post('name_visitor'),
      'image_home' => $this->input->post('image_home'),
      'image_visitor' => $this->input->post('image_visitor'),
      'score_home' => $this->input->post('score_home'),
      'score_visitor' => $this->input->post('score_visitor')
      
        	);

        		if($this->match_model->edit_match($id_match , $data_match)){

        			$this->session->set_flashdata('match_edited' , "MATCH EDITED ! ");

        			redirect("users/admin");
        		}
      	}
    }	

  	/*public function edit_standing()
  	{
  		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);

  	}*/
  
}


?>