<?php
/**
 * Created by PhpStorm.
 * user: bsse0
 * Date: 3/21/2018
 * Time: 6:33 PM
 */

class Pdf extends CI_Controller
{
    public function index()
    {
        if($_GET){
            $mail =  $_GET['email'];
        }

        $this->load->model('database');
        $data['dt'] = $this->database->getReqByEmail($mail);
        print_r($data);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetDisplayMode('fullwidth');


        $html = $this->load->view('gui/test', $data, true);

        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }

    public function loadLoginPage()
    {
        $this->load->view('ui/login');
    }

    public function login()
    {
        if($_GET){
            $mail =  $_GET['email'];
        }

        $this->load->model('database');
//        $dept = $this->session->userdata['department'];
//        $versity = $this->session->userdata['versity'];
        $data['dt'] = $this->database->getReqByEmail($mail);
        print_r($data);


        //echo 'login ';
    }
}