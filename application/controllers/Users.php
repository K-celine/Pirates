<?php 

  class Users extends CI_Controller 
  {

    public function register() 
    {


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




  
    public function login()
    {

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

      $data['messages'] = $this->contact_model->get_list_messages();

      $data['sub_newsletter'] = $this->user_model->get_list_sub_newsletter();

      $data['list_book'] = $this->user_model->get_list_booking();

      $data['list_admin'] = $this->user_model->get_list_admin();

      $data['main_view'] = "users/admin_view";

      $this->load->view('layouts/main', $data);

    }




    public function delete_admin($id_user)
    {

      $this->user_model->delete_admin($id_user);

      $this->session->set_flashdata('admin_delete' , "ADMIN SUPPRIMEE AVEC SUCCES ! ");

      redirect("users/admin");
    }




    public function detail_profil($id_user)
    {

      $data['one_admin'] = $this->user_model->get_one_admin($id_user);

      $data['main_view'] = "users/profil_edit_view";

      $this->load->view('layouts/main', $data);
    }

  
    

    public function edit_admin($id_user)
    {

          
      $this->user_model->edit_admin($id_user);

      $this->session->set_flashdata('profil_edited' , "LE PROFIL A ETE MODIFIE AVEC SUCCES ! ");

      redirect("users/admin");
    }
          
  
  
}


?>