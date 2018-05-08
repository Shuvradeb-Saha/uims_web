<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url() ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url() ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/reg_1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/util.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">

    <div class="container-login100">

    <span >

					</span>
        <div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">

            <form class="login100-form validate-form" method="post" action="register/register_here">
					<span class="login100-form-title p-b-20">
						Sign up
					</span>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="text" name="name" placeholder="Full Name" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="text" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
                </div>


                    <?php
                        if(isset($_REQUEST['err_msg'])){
                            echo '  <div class="wrap-input100 validate-input p-b-5 p-t-5 m-b-10" style="text-align: center;background-color: red;color: white">'.$_REQUEST['err_msg'].'</div>';
                        }

                        ?>





                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="con_pass" placeholder="Confirm Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" style="width: 500px">
                    <select style="padding: 10px 74px" class="input100" name="type" required>
                        <option>Select Designation</option>
                        <option>Director</option>
                        <option value="officer">Maintenance Officer</option>
                        <option value="faculty">Faculties</option>
                        <option value="staff">Staff</option>
                    </select>
                    <span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" style="width: 500px">
                    <select style="padding: 10px 74px" class="input100" name="univ" required>
                        <option>Select University</option>
                        <option>Chittagong University</option>
                        <option>Rajshahi University</option>
                        <option>Jagannath University</option>
                        <option>Dhaka University</option>
                        <option>Khulna University</option>
                        <option>Jahangirnagar University</option>
                        <option>Chittagong University</option>
                        <option>Rajshahi University</option>
                        <option>Jagannath University</option>
                        <option>Islami University</option>
                        <option>Barisal University</option>
                    </select>
                    <span class="symbol-input100">
							<span class="lnr lnr-home"></span>
						</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" style="width: 500px">
                    <select style="padding: 10px 74px" class="input100" name="dept" required>
                        <option>Select Department</option>
                        <option>IIT</option>
                        <option>EEE</option>
                        <option>CSE</option>
                        <option>ISRT</option>
                        <option>Mathematics</option>
                        <option>Physics</option>
                        <option>Chemistry</option>
                        <option>ACCE</option>
                        <option>Statistics</option>
                        <option>Microbiology</option>
                        <option>Pharmacy</option>
                    </select>
                    <span class="symbol-input100">
							<span class="lnr lnr-apartment"></span>
						</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" style="width: 500px">
                    <div class="input100 p-t-15">
                        <label><input type="radio" value="male" name="gender">Male</label>
                        <label><input type="radio" name="gender" value="female" class="m-l-15">Female</label>
                        <span class="symbol-input100">
							<span class="lnr lnr-neutral"></span>
						</span>
                    </div>
                </div>
                 <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" style="background-color: #5e9fc4">
                        Sign up
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>


</body>
</html>