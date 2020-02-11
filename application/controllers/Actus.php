<?php 

    class Actus extends CI_Controller 
    {

        public function create_actu()
        {

            if($this->session->userdata('role')== 1){

                $this->form_validation->set_rules('title', 'Titre', 'trim|htmlspecialchars|required|min_length[2]');
                $this->form_validation->set_rules('content', 'Contenu', 'trim|htmlspecialchars|required|min_length[2]');
                $this->form_validation->set_rules('photo', 'Photo', 'htmlspecialchars');
                $this->form_validation->set_rules('date', 'Date', 'required|htmlspecialchars');

                if($this->form_validation->run() == FALSE){

                    $data['main_view'] = "actus/actu_create_view";

                    $this->load->view('layouts/main', $data);
                }else{

                    $data = array(

                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'photo' => $_FILES['photo']['name'],
                    'date' => $this->input->post('date'));

                    $data = $this->security->xss_clean($data);

                    if($this->actu_model->create_actu($data)){

                        $config['upload_path']          = './assets/images/actu/';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 1000;
                        $config['max_width']            = 3000;
                        $config['max_height']           = 2000;

                        $this->load->library('upload', $config);
                
                        if($this->upload->do_upload('photo')){

                            $this->session->set_flashdata('actu_created', "ACTU AJOUTEE AVEC SUCCES ! ");

                            redirect('users/admin');
                        }
                    }
                }
            }else{

                redirect("home/index");
            }
        }


        public function edit_actu($id_actu)
        {

            if($this->session->userdata('role')== 1){

                $this->form_validation->set_rules('title', 'Titre', 'trim|htmlspecialchars|required');
                $this->form_validation->set_rules('content', 'Contenu', 'trim|htmlspecialchars|required');
                $this->form_validation->set_rules('photo', 'Photo', 'htmlspecialchars');
                $this->form_validation->set_rules('date', 'Date', 'required|htmlspecialchars');

                if($this->form_validation->run()== FALSE){

                    $data['one_actu'] = $this->home_model->get_one_actu($id_actu);

                    $data['main_view'] = 'actus/actu_edit_view';

                    $this->load->view('layouts/main', $data);
                }else{

                    $data = array(

                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'photo' => $this->input->post('photo'),
                    'date' => $this->input->post('date'));

                    $data = $this->security->xss_clean($data);

                    if($this->actu_model->edit_actu($id_actu , $data)){

                        $this->session->set_flashdata('actu_edited' , "ACTU MODIFIEE AVEC SUCCES ! ");

                        redirect("users/admin");
                    }
                }
            }else{
 
                redirect("home/index");
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