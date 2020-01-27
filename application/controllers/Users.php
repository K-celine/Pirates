<?php 

  class Users extends CI_Controller {

  


    public function register() {


      $this->form_validation->set_rules('first_name', 'Prénom', 'trim|required|min_length[2]|alpha');
      $this->form_validation->set_rules('last_name', 'Nom', 'trim|required|min_length[2]|alpha');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('username', 'Pseudo', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('confirm_password', 'Confirmation du mot de passe', 'trim|required|matches[password]');


      if($this->form_validation->run() == FALSE){

      $data['main_view'] = 'users/register_view';
      $this->load->view('layouts/main', $data);


      }else{

        if($this->user_model->create_user()){

          $this->session->set_flashdata('user_registered', "VOTRE COMPTE A ETE CREE AVEC SUCCES ! ");
          redirect('home/index');

        }else{

        };
      };
    }
  
    public function login() {

      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');


      if($this->form_validation->run() == FALSE){

        $data = array(
        'errors' => validation_errors()
      );

        $this->session->set_flashdata($data);
        redirect('home/index');

      }else{

      $email = $this->input->post('email');
      $password = $this->input->post('password');
      

      $user = $this->user_model->login_user($email, $password);

      if($user) {

        $user_data = array(

         		'id' => $user->id,
          	'email' => $email->email,
            'role' =>$role->role,
            'username'=>$username->username,
          	'logged_in' => true
        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success', 'nom du USERNAME');

        
        //$data['main_view'] = "home_view";

        //$this->load->view('layouts/main', $data);

        redirect('home/index');


      }else{

        $this->session->set_flashdata('login_failed', "Tu n'es pas connecté");
        
        redirect('home/index');
        
       }
      }

    }

    public function logout()
    {

      $this->session->sess_destroy();

      redirect('home/index');
    }

     
    public function admin()
    {

      $data['actus'] = $this->home_model->get_actus();

      $data['messages'] = $this->user_model->get_list_messages();

      $data['sub_newsletter'] = $this->user_model->get_list_sub_newsletter();

      $data['list_book'] = $this->user_model->get_list_booking();

      $data['main_view'] = "users/admin_view";

      $this->load->view('layouts/main', $data);

    }


    public function admin_actu($id_actu)
    {

      $this->form_validation->set_rules('title', 'Titre', 'trim|required');
      $this->form_validation->set_rules('content', 'Contenu', 'trim|required');

      if($this->form_validation->run()== FALSE){

      $data['one_actu'] = $this->home_model->get_one_actu($id_actu);

      $data['main_view'] = 'users/admin_actu_view';

      $this->load->view('layouts/main', $data);

      } else {
      
      $data = array(
        
        /*id' => $this->session->userdata('user_id'),*/
        'title' => $this->input->post('title'),
        'content' => $this->input->post('content'),
        'photo' => $this->input->post('photo'),
        'date' => $this->input->post('date')
      );

      if($this->user_model->edit_actu($id_actu , $data)){

        $this->session->set_flashdata('actu_modifié' , "Your project has been updated");

        redirect("users/admin");
      }
    }
  


    /*public function delete($project_id)
    {

      $this->project_model->delete_project_tasks($project_id);

      $this->project_model->delete_project($project_id);

      $this->session->set_flashdata('project_deleted' , "Your project has been deleted");

      redirect("projects/index");
    }*/
}
}

?>