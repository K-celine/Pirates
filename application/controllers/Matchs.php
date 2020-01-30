<?php 

class Matchs extends CI_Controller 
{



	public function infos()
	{
    $data['matchs'] = $this->match_model->get_matchs();
	
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

          		$this->session->set_flashdata('match_created', "MATCH AJOUTE AVEC SUCCES ! ");
          			
          		redirect('users/admin');

        }   }
    	
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

        			$this->session->set_flashdata('match_edited' , "MATCH EDITE AVEC SUCCES ! ");

        			redirect("users/admin");
        		}
      	}
    }	

    public function delete_match($id_match)
    {

        $this->match_model->delete_match($id_match);

        $this->session->set_flashdata('match_deleted' , "MATCH SUPPRIME AVEC SUCCES ! ");

        redirect("users/admin");
    }

    public function edit_standing($id_stand)
  	{
      $this->form_validation->set_rules('team', 'Equipe', 'required');
  		$this->form_validation->set_rules('win', 'Gagné', 'required');
      $this->form_validation->set_rules('lose', 'Perdu', 'required');
      $this->form_validation->set_rules('points', 'Points', 'required');

    if($this->form_validation->run()== FALSE){

        $data['one_stand'] = $this->match_model->get_one_standing($id_stand);

        $data['main_view'] = "matchs/standing_edit_view";

        $this->load->view('layouts/main', $data);

    } else {
      
        $data = array(
        'team' => $this->input->post('team'),
      'win' => $this->input->post('win'),
      'lose' => $this->input->post('lose'),
      'points' => $this->input->post('points'),
  
          );

            if($this->match_model->edit_standing($id_stand , $data)){

              $this->session->set_flashdata('standing_edited' , "CLASSEMENT EDITE AVEC SUCCES ! ");

              redirect("users/admin");
            }
        }

  	}
    public function booking()
  {
    
    $this->load->library('Pdf');

    $this->match_model->post_booking();

    $data['info_booker']= $this->match_model->get_one_match($this->input->post('match_id'));
    $data['number_seat']= $this->input->post('number_seat');

    $this->load->view('Booking_match', $data);

          //$this->session->set_flashdata('message_sent', "MESSAGE ENVOYE AVEC SUCCES ! ");
          //redirect('home/index');

         
  
    }
  
}


?>