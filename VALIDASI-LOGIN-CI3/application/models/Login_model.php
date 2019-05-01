<?php
defined('BASEPATH') OR exit('No direct script access allowed');

CLASS Login_model EXTENDS CI_Model{
    PUBLIC FUNCTION Login(){
        $user = $this->input->post('USERNAME');
        $pass = $this->input->post('PASSWORD');

        $proses = $this->db->where('USERNAME', $user)
                            ->where('PASSWORD', md5($pass))
                            ->get('user');
        
        if($proses->num_rows() > 0){
            $data = array(
                'USERNAME' => $user,
                'logged_in' => TRUE
            );
            $this->session->userdata($data);

            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>