<?php 

  class Actus extends CI_Controller 
  {


    	public function create_actu()
    	{
      		$this->form_validation->set_rules('title', 'Titre', 'trim|required|min_length[2]');
      		$this->form_validation->set_rules('content', 'Contenu', 'trim|required|min_length[2]');
      		$this->form_validation->set_rules('date', 'Date', 'required');
  

      		if($this->form_validation->run() == FALSE){

        		$data['main_view'] = "actus/actu_create_view";

        		$this->load->view('layouts/main', $data);
      		}else{

          		if($this->actu_model->create_actu()){

                $config['upload_path']          = './assets/images/actu/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 4000;
                $config['max_height']           = 4000;

                $this->load->library('upload', $config);
                
            if($this->upload->do_upload('photo')){

$this->session->set_flashdata('actu_created', "ACTU AJOUTEE AVEC SUCCES ! ");
                
                redirect('users/admin');


               }


          			

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
        
        		'title' => $this->input->post('title'),
        		'content' => $this->input->post('content'),
        		'photo' => $this->input->post('photo'),
        		'date' => $this->input->post('date')
        		);

        		if($this->actu_model->edit_actu($id_actu , $data)){

        			$this->session->set_flashdata('actu_updated' , "ACTU MODIFIEE AVEC SUCCES ! ");

        			redirect("users/admin");
        		}
      		}
    	}


    	public function delete_actu($id_actu)
    	{

      		$this->actu_model->delete_actu($id_actu);

      		$this->session->set_flashdata('actu_deleted' , "ACTU SUPPRIMEE AVEC SUCCES ! ");

      		redirect("users/admin");
    	}
  	}


?>