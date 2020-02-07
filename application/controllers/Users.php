<?php 

  class Users extends CI_Controller 
  {

        public function register() 
        {

            $this->form_validation->set_rules('first_name', 'Prénom', 'htmlspecialchars|trim|required|min_length[2]|alpha');
            $this->form_validation->set_rules('last_name', 'Nom', 'htmlspecialchars|trim|required|min_length[2]|alpha');
            $this->form_validation->set_rules('email', 'Email', 'htmlspecialchars|trim|required|valid_email');
            $this->form_validation->set_rules('username', 'Pseudo', 'htmlspecialchars|trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Mot de passe', 'htmlspecialchars|trim|required|min_length[8]|regex_match[#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#]');
            $this->form_validation->set_rules('confirm_password', 'Confirmation du mot de passe', 'htmlspecialchars|trim|required|matches[password]');
            $this->form_validation->set_rules('news_suscribe', 'Souscription', 'htmlspecialchars');

            if($this->form_validation->run() == FALSE){

                $data['main_view'] = 'users/register_view';
                $this->load->view('layouts/main', $data);
            }else{

                $pass_encrypted = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

                $data = array(

                'first_name'=> $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'password'  => $pass_encrypted,
                'news_subscribe'=> $this->input->post('news_subscribe'));

                $data = $this->security->xss_clean($data);

                if($this->user_model->create_user($data)){

                    $this->session->set_flashdata('user_registered', " COMPTE CREE AVEC SUCCES ! ");
          
                    redirect('home/index');
                }
            }
        }
    

        public function login()
        {

            $this->form_validation->set_rules('email', 'Email', 'htmlspecialchars|trim|required');
            $this->form_validation->set_rules('password', 'Mot de passe', 'htmlspecialchars|trim|required');

            if($this->form_validation->run() == FALSE){

                $data = array('errors' => validation_errors());

                $this->session->set_flashdata($data);
        
                redirect('home/index');
            }else{

                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $email = $this->security->xss_clean($email);
                $password = $this->security->xss_clean($password);

                $user = $this->user_model->login_user($email, $password);
        
                if($user){

                    $user_data = array(

                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'role' => $user->role,
                    'username'=>$user->username,
                    'logged_in' => true);

                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('loggin_ok', 'BONJOUR '.$this->session->userdata('username').' ! ');
          
                    redirect('home/index');
                }else{

                    $this->session->set_flashdata('loggin_failed', "ECHEC DE CONNEXION : EMAIL OU MOT DE PASSE INCORRECT ");
        
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

            $data['list_match'] = $this->match_model->get_list_match();

            $data['standing'] = $this->match_model->get_standing();

            $data['main_view'] = "users/admin_view";

            $this->load->view('layouts/main', $data);
        }
    

        public function edit_admin($id_user)
        {
   
            $this->user_model->edit_admin($id_user);

            $this->session->set_flashdata('admin_edited' , "PROFIL MODIFIE AVEC SUCCES ! ");

            redirect("users/admin");
        }


        public function form_create_admin()
        {

            $data['main_view'] = "users/admin_create_view";

            $this->load->view('layouts/main', $data);
        }  
    
        
        public function create_admin()
        {

            $this->form_validation->set_rules('email', 'Email', 'htmlspecialchars|trim|required|valid_email');

            $email = $this->input->post('email');

            $email = $this->security->xss_clean($email);

            $result = $this->user_model->create_admin($email);

            if($result){

                $this->session->set_flashdata('admin_created' , "ADMIN AJOUTE AVEC SUCCES ! ");

                redirect("users/admin");
            }
        }
    }
?>