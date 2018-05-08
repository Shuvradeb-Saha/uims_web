<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 1:21 AM
 */


require 'admin.php';

class Login extends My_Controller
{
    /*function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in')!=TRUE) {
            $this->load->helper('url');
            $this->session->set_userdata('last_page', current_url());
            redirect('/login');
        }
    }*/
    public $session_data = null;
    public $non = null;
    private $versity = null;
    private $department = null;
    public function index()
    {
        $this->load->view('gui/login',$this->non);
    }

    /**
     *
     */
    public function signIn()//todo ghj
    {
        $this->load->view('front/admin_page');
    }

    public function loginHere()
    {
        $data['user'] = array('email' => $this->input->post('email'), 'password' => $this->input->post('pass'));
        $this->load->model('database');
        $userdata = $this->database->getUserWithEmail($data['user']['email'], $data['user']['password']);
         // print_r($userdata);


        if ($userdata != null) {
            $this->session_data = array('name' => $userdata[0]['name'],
                'email' => $userdata[0]['email'], 'logged_in' => TRUE,'versity' => $userdata[0]['university'], 'department' => $userdata[0]['department']);
            $designation = $userdata[0]['designation'];
            $this->versity = $userdata[0]['university'];
            $this->department = $userdata[0]['department'];
            if ($designation == 'admin') {
                //array_push($this->session_data,array('type'=>'admin'));
                $this->session_data['type'] = 'admin';
                // print_r($this->session_data);
                $this->adminPage();
            } elseif ($designation == 'director' || $designation == 'Director') {
                // redirect('user/chairmanHome');
                $this->session_data['type'] = 'director';
                $this->chairmanPage();
            }elseif ($designation == 'officer'){
                $this->session_data['type'] = 'officer';
               // print_r($this->session_data);
                $this->officerPage();
            }elseif ($designation == 'faculty' || $designation == 'staff'){
                if($designation == 'faculty'){
                    $this->session_data['type'] = 'faculty';
                }else{
                    $this->session_data['type'] = 'staff';
                }

               // print_r($this->session_data);
                $this->generalUserPage();
            }

        } else {
            header('Location: '.base_url().'login?msg=You are not a registered member');
        }
    }


    public function adminPage()
    {
        $this->load->model('database');
        $deptRequest = $this->database->getDirectorRequest();
        //$data['session'] = $session_data;
        $data['req'] = $deptRequest;
        $this->session->set_userdata($this->session_data);
        $this->load->view('gui/admin_home', $data);
    }

    public function chairmanPage(){
        $this->load->model('database');
        $officerRequest['req'] = $this->database->getOfficerRequest($this->session->userdata('versity'),$this->session->userdata('department'));
        $this->session->set_userdata($this->session_data);
        $this->load->view('gui/chairman/chair_home',$officerRequest);
    }


    public function officerPage(){
        $this->session->set_userdata($this->session_data);
        $this->load->model('database');
       // $this->versity = $this->session->userdata('versity');
        $generalUserRequest['req'] = $this->database->getgeneralUserRequest($this->session->userdata('versity'),$this->session->userdata('department'));
        $this->load->view('gui/officer/officer_home',$generalUserRequest);
    }
    public function generalUserPage(){
        $this->session->set_userdata($this->session_data);
        $this->load->view('gui/generalUser/general_user');
    }

}