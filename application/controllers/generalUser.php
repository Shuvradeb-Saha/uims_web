<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 4/5/2018
 * Time: 6:07 PM
 */

class GeneralUser extends My_Controller
{
    public function view_category(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];

        $category['cat_list'] = $this->database->getAllCategory($dept,$versity);

        $this->load->view('gui/generalUser/general_category',$category);
    }
    public function view_product(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $product['prod_list'] = $this->database->getAllProduct($dept,$versity);

        $this->load->view('gui/generalUser/general_product',$product);
    }
    public function send_requisition(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept,$versity);
        $this->load->view('gui/generalUser/general_send_requisition',$category);
    }
    public function view_faculty(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $user['users'] = $this->database->getAllUser($dept,$versity);
        $this->load->view('gui/generalUser/gen_faculty',$user);
    }
    public function addRequisition(){
        if(isset($_GET)){
            $req_data = array('p_id' => $_GET['product'],'u_email' => $this->session->userdata('email'),'quantity' => $_GET['quantity']);
            $this->load->model('database');
            $result = $this->database->getProductQuantity($req_data['p_id']);
            $quantity = $result[0]['quantity'];
           // print_r($result[0]['quantity']);
            if($req_data['quantity'] > $quantity){
                header('Location: '.base_url().'generalUser/send_requisition?err_msg=Not enough product');
            }else{
                if($this->database->addRequisitionToDatabase($req_data)){
                 //   echo "added";
                    header('Location: '.base_url().'generalUser/send_requisition?msg=added');
                }else{
                    header('Location: '.base_url().'generalUser/send_requisition?msg=not added');
                    //echo "not added";
                }

            }
        }
    }




}