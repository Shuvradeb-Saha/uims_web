<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 5/30/2018
 * Time: 12:17 PM
 */

class form extends My_Controller
{
    public function index(){
        $this->load->view('form');
    }

    public function submitted(){
        if($_POST){
            echo $_POST['name'];
        }
    }
}