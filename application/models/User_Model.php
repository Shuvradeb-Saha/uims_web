<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/26/2018
 * Time: 8:12 PM
 */

class User_Model extends CI_Model
{
    public function getuser()
    {
        //$this->load->database();
        $q = $this->db->query("select * from tab");
        $data = $q->result_array();
        return $data;
    }
}