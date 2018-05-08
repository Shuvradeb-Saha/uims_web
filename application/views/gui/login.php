<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <?php
        if($this->session->userdata('type') == 'admin'){
            header('Location:'.base_url().'login/adminPage');
        }elseif ($this->session->userdata('type') == 'director'){
            header('Location:'.base_url().'login/chairmanPage');
        }elseif ($this->session->userdata('type') == 'officer'){
            header('Location:'.base_url().'login/officerPage');
        }elseif ($this->session->userdata('type') == 'faculty' || $this->session->userdata('type') == 'staff'){
            header('Location:'.base_url().'login/generalUserPage');
        }
    ?>

    <div class="container-login100" style="background-image: url('<?php echo base_url() ?>/assets/image/bg-01.jpg');">
         <span >
             <img src="<?php echo base_url(); ?>/assets/image/ims.png">
         </span>
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

            <form class="login100-form validate-form" action="<?php echo base_url();?>login/loginHere" method="post">

                <span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23" >
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="email" placeholder="Type your email" required>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Type your password" required>
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <?php
                if(isset($_REQUEST['msg'])){
                    echo '<div class="text-center m-t-30 p-t-10 p-b-10 bgblack text-white">'.$_REQUEST['msg']. '</div>';
                }
                ?>
                <div class="text-right p-t-8 p-b-31">
                    <a href="<?php echo base_url()?>user/forgetPassword">
                        Forgot password?
                    </a>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                            </button>
                    </div>
                </div>
                <div class="txt1 text-center p-t-54 p-b-20">
						<span class="txt1 p-b-17">
							Not yet a member?
						</span>
                    <a href="register" class="txt2">
                        &nbsp;Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>