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

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');


    if($this->form_validation->run() == FALSE){

      $data = array(
        'errors' => validation_errors()
      );

      /*$this->session->set_flashdata($data);
      redirect('home/index');
      */

    }else{

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      

      $user_id = $this->user_model->login_user($username, $password);

      if($user_id) {

        $user_data = array(

         		'user_id' => $user_id,
          		'username' => $username,
          		'logged_in' => true
        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success', 'Tu es bien connecté');

        //$data['main_view'] = "admin_view";

        //$this->load->view('layouts/main', $data);

        redirect('home/index');


      }else{

        $this->session->set_flashdata('login_failed', "Tu n'es pas connecté");
        
        redirect('home/index');
        
      }
    }

  }

 /* public function logout(){

    $this->session->sess_destroy();

    redirect('home/index');

  }*/

}

?>