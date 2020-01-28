<?php 

  class Actus extends CI_Controller 
  {


    	public function create_actu()
    	{
      		$this->form_validation->set_rules('title', 'Titre', 'trim|required|min_length[2]');
      		$this->form_validation->set_rules('content', 'Contenu', 'trim|required|min_length[2]');
      		$this->form_validation->set_rules('photo', 'Photo', 'trim|required');
      		$this->form_validation->set_rules('date', 'Date', 'required');
  

      		if($this->form_validation->run() == FALSE){

        		$data['main_view'] = "actus/actu_create_view";

        		$this->load->view('layouts/main', $data);
      		}else{

          		if($this->actu_model->create_actu()){

          			$this->session->set_flashdata('actu_sent', "NOUVELLE ACTU AJOUTEE AVEC SUCCES ! ");
          			
          			redirect('users/admin');

         		}
        	}
    	}

    	public function edit_actu($id_actu)
    	{

      		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
      		$this->form_validation->set_rules('content', 'Contenu', 'trim|required');

      		if($this->form_validation->run()== FALSE){

      			$data['one_actu'] = $this->home_model->get_one_actu($id_actu);

     			$data['main_view'] = 'actus/actu_edit_view';

      			$this->load->view('layouts/main', $data);

      		} else {
      
        		$data = array(
        
       			/*id' => $this->session->userdata('user_id'),*/
        		'title' => $this->input->post('title'),
        		'content' => $this->input->post('content'),
        		'photo' => $this->input->post('photo'),
        		'date' => $this->input->post('date')
        		);

        		if($this->actu_model->edit_actu($id_actu , $data)){

        			$this->session->set_flashdata('actu_modif' , "actu updated");

        			redirect("users/admin");
        		}
      		}
    	}


    	public function delete_actu($id_actu)
    	{

      		$this->actu_model->delete_actu($id_actu);

      		$this->session->set_flashdata('actu_delete' , "ACTU SUPPRIMEE AVEC SUCCES ! ");

      		redirect("users/admin");
    	}
  	}


?>