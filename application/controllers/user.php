<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 12:07 AM
 */
class User extends My_Controller
{
    public function index(){
        $this->load->view('gui/welcome');
    }

    /**
     *
     */
    /*public function adminPage(){

        $this->load->model('database');
        $deptRequest['req'] = $this->database->getDirectorRequest();
        if($deptRequest == null){
            echo 'not found';
        }

        $this->load->view('gui/admin_home',$deptRequest);
    }*/

   /* public function chairmanHome(){
        $this->load->view('gui/director_home');
    }

    public function view_category(){
        $this->load->view('gui/chairman/chair_category');
    }*/
    public function viewUser(){
        $this->load->model('database');
        $dept = $this->session->userdata['department'];
        $versity = $this->session->userdata['versity'];
        $user['users'] = $this->database->getAllUser($dept,$versity);
        $this->load->view('gui/officer/officer_view_user',$user);
    }


    public function view_product(){
        $this->load->view('gui/chairman/chair_product');
    }

    public function verifyAndSendMail()
    {

     //   echo 'dfdfd';
        if($_GET){
            $email = $_GET['email'];
        }

        $this->load->model('database');
        if($this->database->checkEmail($email) != 1){
            header('Location: '.base_url().'user/forgetPassword?error=Your email is not registered.');
        }

        $code  = rand(99999,999999);

        $val = $this->database->addForgetUserInfo($email,$code);
        if($val != 1){
            return;
        }

        $config = array('protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sahashaishab@gmail.com',
            'smtp_pass' => 'thoughtlesssaha0815iit'
        );


        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('sahashaishab@gmail.com','saha');
        $this->email->to($email);
        $this->email->subject('Reset password');
        $html = '<a>'.base_url().'user/resetPassword?email='.$email.'&code='.$code.'</a>';
        $this->email->message('Click the link to change your password. '.$html);

        if($this->email->send()){
            $this->load->view('gui/mailSentSuccess');
        }else{
            echo 'error';
        }


    }

    public function forgetPassword()
    {
        $this->load->view('gui/forget.php');
    }

    public function resetPassword()
    {
        $this->load->model('database');

        $flag = 0;


        if ($_REQUEST) {

            $email = $_REQUEST['email'];
            $code = $_REQUEST['code'];


            if($this->database->checkForgetData($email,$code) == 1){
                $flag = 1;
            }

        }
        if($flag == 1){
            $this->load->view('gui/reset_password');
        }else{
            header('Location; '.base_url().'user/forgetPassword?error=Your request time has expired. Resend request.');
        }



    }
    public function changeForgotPassword(){
        $this->load->model('database');
        if($_GET){

            $email = $_GET['email'];
            $code =$_GET['code'];
            /*$html = "<a href='<?php echo base_url();?>user/forgetPassword'>Click here</a> to resend link.";*/
            if($this->database->checkCodeInEmail($email,$code) == 0){
                header('Location: '.$_SERVER['REQUEST_URI'].'&match_error=1');
            }

            $pass = $_GET['password'];
            if($this->database->updatePasswordInUser($email,$pass)){
                $this->database->updateForgetPassStatus($email);
                header('Location: '.base_url().'login?flag=new');
            }

           // $email =
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}