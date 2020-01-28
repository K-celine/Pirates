<?php 

  class Profils extends CI_Controller 
  {

  public function edit($project_id)
	{

		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');

		$this->form_validation->set_rules('project_body', 'Project Description', 'trim|required');

		if($this->form_validation->run()== FALSE){

			$data['project_data'] = $this->project_model->get_projects_info($project_id);

			$data['main_view'] = 'projects/edit_project';

			$this->load->view('layouts/main', $data);

		} else {
			
			$data = array(
				
				'project_user_id' => $this->session->userdata('user_id'),
				'project_name' => $this->input->post('project_name'),
				'project_body' => $this->input->post('project_body')
			);

			if($this->project_model->edit_project($project_id , $data)){

				$this->session->set_flashdata('project_updated' , "Your project has been updated");

				redirect("projects/index");
			}
		}
	}
}


?>