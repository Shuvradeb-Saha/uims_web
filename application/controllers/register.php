<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 2:42 PM
 */

class register extends My_Controller
{
    public function index(){
        $this->load->view('gui/register');
    }


    public function register_here(){

        $data = array('email' => $this->input->post('email'), 'name' => $this->input->post('name'), 'password' => $this->input->post('pass'), 'designation' => $this->input->post('type'),
            'university' => $this->input->post('univ'),'department' => $this->input->post('dept'),'gender' => $this->input->post('gender'));
        print_r($data);

        $this->load->model('database');
       // $s = $this->database->saveForm($data);
      //  print $s;

        if($this->database->saveForm($data)){
            redirect(base_url().'login');

        }else{
           // echo "This email already in database";
           // header('Location: '.base_url().'login?msg=You are not a registered member');
            header('Location: '.base_url().'register?err_msg=This email already registered');
        }

    }
}