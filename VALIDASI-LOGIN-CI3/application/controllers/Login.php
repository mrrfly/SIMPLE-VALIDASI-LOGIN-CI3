<?php
defined('BASEPATH') OR exit('No direct script access allowed');

CLASS Login EXTENDS CI_Controller{
    PUBLIC FUNCTION __CONSTRUCT(){
        PARENT::__CONSTRUCT();
        $this->load->model('Login_model');
    }

    PUBLIC FUNCTION Index(){
        $this->load->view('login_view');
    }

    PUBLIC FUNCTION cek(){
        if($this->input->post('submit')){
            $this->form_validation->set_rules('USERNAME', 'USERNAME', 'trim|required');
            $this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'trim|required');

            if($this->form_validation->run()){
                if($this->Login_model->Login() == TRUE){
                    redirect('admin/');
                }else{
                    $data['notif'] = 'USERNAME / PASSWORD SALAH';
                    $this->load->view('login_view', $data);
                }
            }else{
                $data['notif'] = validation_errors();
                $this->load->view('login_view', $data);
            }
        }
    }
}
?>