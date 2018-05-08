<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 5/8/2018
 * Time: 10:39 AM
 */

class test extends CI_Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Dhaka');

        echo date('Y-m-d H:i:s').'-2018-05-08 10:17:41<br>';
        echo strtotime(date('Y-m-d H:i:s')) - strtotime('2018-05-08 10:17:41');
        if((strtotime(date('Y-m-d H:i:s')) - strtotime('2018-05-08 10:17:41') )> (24*3600)){
            echo 'hobe na';
        }else{
            echo 'hobe';
        }
        $a=1;
        if($a == 1){
            $b = 2;
        }
echo $b;

    }
}