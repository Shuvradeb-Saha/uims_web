<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 3/1/2018
 * Time: 1:34 AM
 */

class Database extends CI_Model
{


    public function saveForm($form_data)
    {
        $test_email = $form_data['email'];
        //return $test_email;
        $query = $this->db->query("SELECT email from user where email = '$test_email';");
        //if()
        /* $result = $query->row_array();
         $count = $result['COUNT(*)'];
         return $count;*/
        if ($query->num_rows() == 1) {
            return false;
        }

        $this->db->insert('user', $form_data);
        return true;


    }

    public function getUserWithEmail($email, $password)
    {
        $this->db->select('*')
            ->from('user')
            ->where("(user.email = '$email' AND user.password = '$password' AND user.status = 1)");


        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();

            //print_r('found');
        } else {
            return null;
        }
    }

    public function getRemovedDirector()
    {
        $query = $this->db->query("select * from user where designation = 'director' AND status = 0 AND removed = 1");
        return $query->result_array();
    }


    public function getApprovedDirector()
    {
        $query = $this->db->query("select * from user where designation = 'director' AND status = 1 AND removed = 0");
        return $query->result_array();
    }

    public function getDirectorRequest()
    {
        $query = $this->db->query("select * from user where designation = 'director' AND status = 0 AND removed = 0");
        return $query->result_array();
    }

    public function getOfficerRequest($versity, $department)
    {
        $query = $this->db->query("select * from user where designation = 'officer' AND status = 0 AND removed = 0 AND university = '$versity' AND department = '$department'");
        return $query->result_array();
    }

    public function getgeneralUserRequest($versity, $department)
    {
        $query = $this->db->query("select * from user where (designation = 'faculty' OR designation = 'staff') AND status = 0 AND removed = 0 AND university = '$versity' AND department = '$department'");
        return $query->result_array();


    }

    public function updateStatus($email)
    {
        $this->db->query("update user set status=1 where user.email = '$email'");
    }

    public function updateRemove($email)
    {
        $this->db->query("update user set removed=1, status= 0 where user.email = '$email'");
    }

    /*
     * Here category added according to department and unicersity name. In case of new officer it will help to find out those.
     */

    public function insertCategory($category_name, $cat_details, $officer_email, $dept, $versity)
    {
        $no_of_this_category = $this->db->query("select cat_name from category where cat_name = '$category_name' AND department = '$dept' AND university = '$versity' AND status = 1");
        if ($no_of_this_category->num_rows() > 0) {
            return false;
        } else {
            $this->db->query("insert into category (cat_name,cat_details,m_email,department,university) VALUES ('$category_name','$cat_details','$officer_email','$dept','$versity')");
            return true;
        }
    }

    public function getAllCategory($dept, $versity)
    {
        $query = $this->db->query("select * from category where university = '$versity' AND department = '$dept' AND status = 1");
        return $query->result_array();
    }

    public function insertProduct($data)
    {
        $name = $data['pr_name'];
        $c_id = $data['c_id'];
        $product = $this->db->query("select pr_name from product where pr_name = '$name' AND c_id = '$c_id';");
        if ($product->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('product', $data);
            return true;

        }    /*$this->db->query("insert into product (name,category,lot_number,quantity,m_email,department,university) VALUES
        ('$name',);");*/
    }

    public function getAllProduct($dept, $versity)
    {
        $query = $this->db->query("SELECT P.pr_name,C.cat_name,P.lot_number,p.quantity,p.m_email,p.add_date,p.last_update from product as P, category as C where P.c_id=C.c_id AND C.department = '$dept' AND C.university = '$versity'
 AND p.status = 1");
        return $query->result_array();
    }

    public function getProductByCategory($c_id)
    {
        $query = $this->db->get_where('product', array('c_id' => $c_id, 'status' => 1));
        // $query = $this->db->query("select * from product where c_id = '$c_id'");
        return $query->result();
    }

    public function updateProductQuantity($newAdd, $p_id)
    {
        $this->db->query("update product set quantity=quantity+$newAdd,last_update=now() where p_id='$p_id and status = 1'
");
    }

    public function getAllUser($dept, $versity)
    {
        $query = $this->db->query("select name,email,designation from user where department = '$dept' AND university = '$versity' and status=1;");
        return $query->result_array();
    }

    public function removeCategory($c_id)
    {
        $this->db->query("update category  set status = 0 where c_id = '$c_id';");
        $this->db->query("update product  set status = 0 where c_id = '$c_id';");
    }

    public function removeProduct($p_id)
    {
        $this->db->query("update product  set status = 0 where p_id = '$p_id';");
    }

    public function getProductQuantity($p_id)
    {
        $query = $this->db->query("select quantity from product where p_id = '$p_id'");
        return $query->result_array();

    }

    public function addRequisitionToDatabase($data)
    {

        return $this->db->insert('requisition', $data);
    }

    public function getRequisitionFromDatabase($dept, $versity)
    {
        $query = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.send_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 0 and r.status = 0
and r.cancel = 0");
        return $query->result_array();
    }


    public function getForwardRequisitionFromDatabase($dept, $versity)
    {
        $query = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.send_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 0
and r.cancel = 0 AND r.delivered = 0");
        return $query->result_array();
    }

    public function changeForwardValue($r_id, $m_email)
    {
        $this->db->query("update requisition  set forward = 1, m_email = '$m_email',forward_date=now() where r_id = '$r_id';");
        return;
    }

    public function changeRequisitionStatus($r_id, $c_email)
    {
        $this->db->query("update requisition  set status = 1, c_email = '$c_email', approve_date = now() where r_id = '$r_id';");
        return;

    }

    public function changeCancelValue($r_id)
    {
        $this->db->query("update requisition  set cancel = 1 where r_id = '$r_id';");
        return;
    }

    public function getApprovedRequisition($dept, $versity)
    {
        $query = $this->db->query("select r_id,u.name, pr_name,r.p_id, c.cat_name, r.quantity, r.send_date, r.approve_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.status = 1
and r.delivered = 0");
        return $query->result_array();
    }

    public function updateDeliveredRequisition($r_id, $quantity, $p_id)
    {
        $this->db->query("update requisition  set delivered = 1,delivery_date = now() where r_id = '$r_id';");
        $this->db->query("update product set quantity = quantity - '$quantity' where p_id = '$p_id'");
        return;
    }

    public function getDeliveredRequisition($dept, $versity)
    {
        $query = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.send_date, r.approve_date,r.delivery_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.status = 1
and r.delivered = 1");
        return $query->result_array();
    }

    public function getDataInDateRange($to, $from, $type, $dept, $versity)
    {
        if ($type == 'forward') {
            $forward = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 0
and r.cancel = 0 and r.delivered = 0 and r.send_date BETWEEN '$from' and '$to'");
            return $forward->result_array();
        } elseif ($type == 'approve') {
            $approved = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date,r.approve_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 1
and r.cancel = 0 and r.delivered = 0 and r.approve_date BETWEEN '$from' and '$to'");
            return $approved->result_array();

        } else {
            $delivered = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date,r.approve_date,r.delivery_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 1
and r.cancel = 0 and r.delivered = 1 and r.delivery_date BETWEEN '$from' and '$to'");
            return $delivered->result_array();
        }
    }

    public function getTodaysRequisition($from, $to, $dept, $versity, $type)
    {
        if ($type == 'forward') {
            $forward = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 0
and r.cancel = 0 and r.delivered = 0 and r.forward_date BETWEEN '$from' and '$to'");
            return $forward->result_array();
        } elseif ($type == 'approve') {
            $approved = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date,r.approve_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 1
and r.cancel = 0 and r.delivered = 0 and r.approve_date BETWEEN '$from' and '$to'");
            return $approved->result_array();

        } else {
            $delivered = $this->db->query("select r_id,u.name, pr_name, c.cat_name, r.quantity, r.forward_date, r.send_date,r.approve_date,r.delivery_date from user as u, product as p, category as c, requisition as r WHERE u.email = r.u_email and p.p_id = r.p_id and p.c_id = c.c_id and u.department = '$dept' AND u.university='$versity' and r.forward = 1 and r.status = 1
and r.cancel = 0 and r.delivered = 1 and r.delivery_date BETWEEN '$from' and '$to'");
            return $delivered->result_array();
        }
    }

    public function checkEmail($email)
    {
        $query = $this->db->query("select * from user where status = 1 and email = '$email';");
        if (count($query->result_array())) {
            return 1;
        } else {
            return 0;
        }
    }

    public function addForgetUserInfo($email, $code)
    {
        $this->db->query("INSERT INTO forget_password ( user_email, code) VALUES ('$email','$code');");
        $this->db->query("UPDATE user set reset_code = '$code' where email = '$email';");
        return 1;
    }

    public function checkForgetData($email, $code)
    {
        $query = $this->db->query("select * from forget_password where user_email = '$email' and code = '$code' and status = 0;");
        $data = $query->row();
        if(isset($data) != null)
        {
            $f_id = $data->f_id;
            if($this->checkSentDate($data->send_date,$f_id) == 0)
            {
                return 0;
            }
        }

        //$this->db->query("update forget_password set status = 1 where f_id = '$f_id';");
        return 1;
    }

    public function checkSentDate($date,$f_id)
    {
        date_default_timezone_set('Asia/Dhaka');
        $difference_in_seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($date);
        if($difference_in_seconds > (24*3600)){
            $this->db->query("update forget_password set status = 1 where f_id = '$f_id';");
            return 0;
        }
        return 1;
    }

    public function checkCodeInEmail($email, $code){
        $query = $this->db->query("select * from user where email='$email' and reset_code = '$code'");

        if(count($query->result_array())){
            return 1;
        }
        return 0;
    }

    public function updatePasswordInUser($email,$pass){
        return $this->db->query("update user set password = '$pass' where email= '$email' and status = 1;");
    }

    public function updateForgetPassStatus($email){
        $this->db->query("update forget_password set status = 1 where user_email = '$email';");
    }

}