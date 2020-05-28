<?php

class Users extends CI_Controller {
    /*
    public function show() {

        1- first use the model that will use it to get data
        but if I will use it globally register it in autoload.php

        //$this->load->model('user_model');
        //$data['results'] = $this->user_model->get_users();
        //$this->load->view('user_view', $data);
    }
    */
    public function register() {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|max_length[12]|matches[password]');
        if($this->form_validation->run() == false) {
            $data['main_view'] = "users/register_view";
            $this->load->view('layouts/main', $data);
        } else {
            if($this->user_model->create_user()) {
                $this->session->set_flashdata('user_register', 'user has been registered');
                redirect('home/index','refresh');
            } else {

            }
        }
        //load view in main.php
        //$data['main_view'] = "users/register_view";
        //$this->load->view('layouts/main', $data);
    }

    public function login() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|max_length[12]|matches[password]');

        if($this->form_validation->run() == false) {
            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('home','refresh');
            
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

           $user_id =  $this->user_model->login_user($username, $password);
           if($user_id) {
            $user_data = array(
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('login_success','you are now logged in');
            //rediredt user to admin page
            $data['main_view'] = "admin_view";
            $this->load->view('layouts/main', $data);
            //redirect('home/index','refresh');
           } else {
            $this->session->set_flashdata('login_failed','you are not logged in');
            redirect('home/index','refresh');
           }
        }
      //echo $this->input->post('username');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('home/index','refresh');
    }
}