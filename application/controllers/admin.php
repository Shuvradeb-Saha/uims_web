<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 12:08 AM
 */

class Admin extends My_Controller
{
    public function index(){
        echo "jjadj";
    }
//authenticate user registration request
    public function authenticate(){
        if ($_POST['action'] && $_POST['email']) {
            $email = $_POST['email'];
            $this->load->model('database');
            if ($_POST['action'] == 'Approve') {
                $this->database->updateStatus($email);
                header('Location:'.base_url().'login/adminPage');
               // redirect('login/adminPage');
            }
            if($_POST['action'] == 'Cancel'){
                $this->database->updateRemove($email);
                header('Location:'.base_url().'login/adminPage');
               // redirect('login/adminPage');
            }
        }
    }

    public function removeUser(){
        if ($_POST['action'] && $_POST['email']) {
            $email = $_POST['email'];
           // print_r($email);
            $this->load->model('database');
            $this->database->updateRemove($email);
            header('Location: '.base_url().'admin/getUsers');
        }
    }


    public function getUsers(){
        $this->load->model('database');
        $data['approved'] = $this->database->getApprovedDirector();
        $data['removed'] = $this->database->getRemovedDirector();
        //print_r($data);
        $this->load->view('gui/admin_user',$data);
    }


}