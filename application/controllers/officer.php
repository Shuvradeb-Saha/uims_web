<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 4/5/2018
 * Time: 4:29 PM
 */

class Officer extends My_Controller
{

    public function authenticate()
    {
        if ($_POST['action'] && $_POST['email']) {
            $email = $_POST['email'];
            $this->load->model('database');
            if ($_POST['action'] == 'Approve') {
                $this->database->updateStatus($email);
                header('Location:' . base_url() . 'login/officerPage');
                // redirect('login/adminPage');
            }
            if ($_POST['action'] == 'Cancel') {
                $this->database->updateRemove($email);
                header('Location:' . base_url() . 'login/officerPage');
                // redirect('login/adminPage');
            }
        }
    }


    public function addCategory()
    {
        //print_r($category);
        $this->load->view('gui/officer/officer_add_category');
    }

    public function addCategoryToDatabase()
    {
        $this->load->model('database');
        if (isset($_GET)) {
            $category_name = $_GET['category'];
            $category_details = $_GET['details'];
            $officer_email = $this->session->userdata['email'];
            $dept = $this->session->userdata['department'];
            $versity = $this->session->userdata['versity'];
            $a = $this->database->insertCategory($category_name, $category_details,$officer_email, $dept, $versity);
            if ($a) {
                header('Location:' . base_url() . 'officer/addCategory?msg=New Category Added');
            } else {
                header('Location:' . base_url() . 'officer/addCategory?msg=Category Already Exists');
            }
            // header('Location:'.base_url().'officer/addCategory?msg=New Category Added..');
        }
    }

    public function addProduct()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept, $versity);

        $this->load->view('gui/officer/officer_add_product', $category);
    }

    public function addProductToDatabase()
    {
        $this->load->model('database');
        if (isset($_GET)) {
            $data = array('pr_name' => $_GET['p_name'],
                'c_id' => $_GET['category'],
                'lot_number' => $_GET['lot_no'],
                'quantity' => $_GET['quantity'],
                'm_email' => $this->session->userdata['email'],
            );

            //print_r($data);
            $a = $this->database->insertProduct($data);
            if ($a) {
                header('Location:' . base_url() . 'officer/addProduct?msg=New Product added succesfully');
                //echo 'data added';
            } else {
                header('Location:' . base_url() . 'officer/addProduct?msg=Product already exist. Can Update only.');
                //echo 'data not added';
            }
        }

    }

    public function getProductByCid()
    {
        $this->load->model('database');
        $c_id = $this->input->post('category_id');
        //print_r($c_id);
        $products = $this->database->getProductByCategory($c_id);
        if (count($products) > 0) {
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Product</option>option>';
            foreach ($products as $product) {
                $pro_select_box .= '<option value="' . $product->p_id . '">' . $product->pr_name . '</option>';
            }
            echo json_encode($pro_select_box);
        }
    }

    public function category()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];

        $category['cat_list'] = $this->database->getAllCategory($dept, $versity);
        //print_r($category);
        $this->load->view('gui/officer/officer_category', $category);
    }

    public function product()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $product['prod_list'] = $this->database->getAllProduct($dept, $versity);
        //print_r($product);
        $this->load->view('gui/officer/officer_product', $product);
    }

    public function forwardOrCancelButton()
    {

        if ($_GET['action'] == 'Forward') {
            $r_id = $_GET['r_id'];
            $this->load->model('database');
            $this->database->changeForwardValue($r_id, $this->session->userdata['email']);
            header('Location: ' . base_url() . 'officer/forwardRequisition');
        }
        if ($_GET['action'] == 'Cancel') {
            $r_id = $_GET['r_id'];
            $this->load->model('database');
            $this->database->changeCancelValue($r_id, $this->session->userdata['email']);
            header('Location: ' . base_url() . 'officer/forwardRequisition');
        }

    }


    public function forwardRequisition()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        //echo $dept." ".$versity;
        $data['requisition'] = $this->database->getRequisitionFromDatabase($dept, $versity);
        //$data['requisitionProduct'] =$this->database->getProduct();
        // echo count($data['requisition']);
        // echo '<br><br><br>';
        // print_r($data['requisition'][0]['p_id']);
        // echo '<br><br><br>';
        // print_r($data['requisition']);
        $this->load->view('gui/officer/officer_forward_requisition', $data);
    }

    public function purchaseRequisition()
    {
        $this->load->view('gui/officer/officer_purchase_requisition');
    }

    public function removeCategory()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept, $versity);
        $this->load->view('gui/officer/officer_remove_category', $category);
    }

    public function removeProduct()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept, $versity);
        $this->load->view('gui/officer/officer_remove_product', $category);
    }

    public function updateProduct()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $category['cat_list'] = $this->database->getAllCategory($dept, $versity);
        $this->load->view('gui/officer/officer_update_product', $category);
    }

    public function updateQuantity()
    {
        if ($_GET) {
            $newAdd = $_GET['quantity'];
            $p_id = $_GET['product'];
            $this->load->model('database');
            $this->database->updateProductQuantity($newAdd, $p_id);
            header('Location:' . base_url() . 'officer/updateProduct?msg=Quntity Updated');
        }
    }

    public function viewUser()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $user['users'] = $this->database->getAllUser($dept, $versity);
        $this->load->view('gui/officer/officer_view_user', $user);
    }

    public function removeACategory()
    {
        $cat_id = null;
        if ($_GET['category']) {
            $this->load->model('database');
            $cat_id = $_GET['category'];
            //$this->load->database();
            $this->database->removeCategory($cat_id);
            header('Location:' . base_url() . '/officer/removeCategory?msg=Category Removed');

        }
    }

    public function removeAProduct()
    {
        if ($_GET) {
            $this->load->model('database');
            $p_id = $_GET['product'];
            //$this->load->database();
            $this->database->removeProduct($p_id);
            header('Location:' . base_url() . '/officer/removeProduct?msg=Product Removed');

        }
    }

    public function viewApprovedRequisition()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $data['requisition'] = $this->database->getApprovedRequisition($dept, $versity);
        $this->load->view('gui/officer/officer_deliver', $data);
    }

    public function viewDeliveredRequisition()
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $data['requisition'] = $this->database->getDeliveredRequisition($dept, $versity);

        $this->load->view('gui/officer/officer_delivered_product', $data);
    }

    public function requisitionDelivered()
    {
        if ($_GET) {
            $r_id = $_GET['r_id'];
            $quantity = $_GET['quantity'];
            $p_id = $_GET['p_id'];
            $this->load->model('database');
            $this->database->updateDeliveredRequisition($r_id, $quantity, $p_id);
            header('Location: ' . base_url() . 'officer/viewApprovedRequisition');
        }
    }

    public function getUserCount()
    {
        print_r($this->getRequestCount('user'));
    }

    public function getRequisitionCount()
    {
        print_r($this->getRequestCount('requistion'));
    }

    public function getRequestCount($type)
    {
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];

        if($type == 'user'){
            return $this->database->getgeneralUserRequest($versity, $dept);
        }else{
            return $this->database->getRequisitionFromDatabase($versity, $dept);
        }
    }
}