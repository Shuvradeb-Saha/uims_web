<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 4/5/2018
 * Time: 11:12 AM
 */

class Chairman extends My_Controller
{
    public function view_user(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $user['users'] = $this->database->getAllUser($dept,$versity);
        $this->load->view('gui/chairman/chair_users',$user);
    }


    public function purchaseRequisition()
    {
        $this->load->view('gui/officer/officer_purchase_requisition');
    }

    public function approveOrCancelRequisition()
    {
  //      echo "ffgf";

        if($_GET['action'] == 'Approve'){
            $r_id = $_GET['r_id'];
            $this->load->model('database');
            $this->database->changeRequisitionStatus($r_id,$this->session->userdata['email']);
            header('Location: '.base_url().'chairman/view_requisition_request?msg=request accpted');
        }
        if($_GET['action'] == 'Cancel'){
            $r_id = $_GET['r_id'];
            $this->load->model('database');
            $this->database->changeCancelValue($r_id,$this->session->userdata['email']);
            header('Location: '.base_url().'chairman/view_requisition_request?msg=request canceled');
        }

    }


    public function view_requisition_request()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        //echo $dept." ".$versity.$this->session->userdata['email'];
        $data['requisition'] = $this->database->getForwardRequisitionFromDatabase($dept,$versity);
        //$data['requisitionProduct'] =$this->database->getProduct();
        // echo count($data['requisition']);
        $this->load->view('gui/chairman/chair_requisition_request',$data);
    }

    public function view_approved_request(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $data['requisition'] = $this->database->getApprovedRequisition($dept,$versity);
        //print_r($data);
        $this->load->view('gui/chairman/chair_approved_req',$data);
    }

    public function view_delivered_request(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $data['requisition'] = $this->database->getDeliveredRequisition($dept, $versity);
        $this->load->view('gui/chairman/chair_delivered_requisition', $data);
    }

    public function view_category()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept,$versity);
        $this->load->view('gui/chairman/chair_category',$category);
    }


    public function view_product(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $product['prod_list'] = $this->database->getAllProduct($dept,$versity);
        $this->load->view('gui/chairman/chair_product',$product);
    }

    public function view_purchase()
    {
        $this->load->view('gui/chairman/chair_purchase');
    }

    public function view_todays_report()
    {
        $start = date('Y-m-d').' 00:00:00';
        $end = date('Y-m-d').' 23:59:59';
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $this->load->model('database');
        $data['forward'] = $this->database->getTodaysRequisition($start, $end, $dept, $versity, 'forward');
        $data['approved'] = $this->database->getTodaysRequisition($start, $end, $dept, $versity, 'approve');
        $data['delivered'] = $this->database->getTodaysRequisition($start, $end, $dept, $versity, 'deliver');
        //print_r($data);
        $this->load->view('gui/chairman/chair_report_today',$data);
    }

    public function view_sevendays_report()
    {
        $newTo =  date('Y-m-d').' 23:59:59';
        $newFrom =  date('Y-m-d', strtotime('-7 days')).' 23:59:59';
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $this->load->model('database');
        $data['forward'] = $this->database->getDataInDateRange($newTo,$newFrom,'forward',$dept,$versity);
        $data['approved'] = $this->database->getDataInDateRange($newTo,$newFrom,'approve',$dept,$versity);
        $data['delivered'] = $this->database->getDataInDateRange($newTo,$newFrom,'deli',$dept,$versity);

         $this->load->view('gui/chairman/chair_report_sevendays',$data);
    }

    public function view_in_date_range_report()
    {
        $data['forward'] = null;
        $data['approved'] = null;
        $data['delivered'] = null;
        $this->load->view('gui/chairman/chair_report_date_range',$data);
    }

    public function getDataInDateRange()
    {
        $this->load->model('database');
        if($_GET)
        {
            $to = $_GET['to'];
            $from = $_GET['from'];
            //echo $to ." ".$from;
            $newFrom =  $this->returnDateInMysql($from).' 00:00:00';
            $newTo =  $this->returnDateInMysql($to).' 23:59:59';
           // echo $newFrom.'--'.$newTo;
            $dept = $this->session->userdata['department'];
            $versity = $this->session->userdata['versity'];

            $data['forward'] = $this->database->getDataInDateRange($newTo,$newFrom,'forward',$dept,$versity);
            $data['approved'] = $this->database->getDataInDateRange($newTo,$newFrom,'approve',$dept,$versity);
            $data['delivered'] = $this->database->getDataInDateRange($newTo,$newFrom,'deli',$dept,$versity);
          //  print_r($data);

           $this->load->view('gui/chairman/chair_report_date_range',$data);
        }
    }

    private function returnDateInMysql($date){
        $month = substr($date,0,2);
        $day = substr($date,3,2);
        $year = substr($date,6,4);
        $newDate = $year.'-'.$month.'-'.$day;
        return $newDate;
    }
}