<?php

if (isset($_SESSION['usertype'])) {
// redirect(base_url() . admin_folder . "/Dashboard");
}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Login </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/admin/images/icons/favicon111.ico" /> -->
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/fontawesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">
		<!--===============================================================================================-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	</head>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt> <img src="<?php echo base_url(); ?>assets/img/img-01.png" alt="IMG"> </div>
					<form class="login100-form validate-form" method="POST" id="login_form"> <span class="login100-form-title">
                        Login
                    </span>
						<div class="wrap-input100 btn-group btn-group-toggle col-md-12 form-group" style="text-transform: capitalize;width: 100%" data-toggle="buttons">
                            <!-- Admin -->
                            <label class="btn btn-secondary" style="width: 100%">
                            <input type="radio" style="width: 100%" name="usertype" id="option3" value="admin" autocomplete="off" checked> Admin </label>
                            <!-- TPO -->
                            <label class="btn btn-secondary" style="width: 100%">
                            <input type="radio" style="width: 100%" name="usertype" id="option3" value="tpo" autocomplete="off"> TPO </label>
                            <!-- User -->
                            <label class="btn btn-secondary active" style="width: 100%">
                            <input type="radio" style="width: 100%" name="usertype" id="option2" value="user" autocomplete="off"> Student </label>
							
						</div>
						<br>
						<div class="wrap-input100 form-group">
							<input class="input100" type="email" name="email" id="email" placeholder="Enter Email/ Enrollment No."> <span class="focus-input100"></span> <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span> </div>
						<div class="wrap-input100 form-group">
							<input class="input100" type="password" name="password"  id="password" placeholder="Enter Password"> 
                            <span class="focus-input100"></span> <span class="symbol-input100">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span> 
                         </div>
						<div class="wrap-input100 form-group">
                            <span id="error_msg" style="color:red"></span>
                         </div>
                        <div class="container-login100-form-btn">
							<span><a href="<?php echo base_url(); ?>Registration/tpo_registration" type="link">Click Here To Register <span style="color:red">TPO</span></a></span>
							<span><a href="<?php echo base_url(); ?>Registration/student_registration" type="link">Click Here To Register <span style="color:red">Student</span></a></span>
						</div>
                     
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" id="user_login"> Login </button>
						</div>
						<div class="text-center p-t-136"> </div>
					</form>
				</div>
			</div>
		</div>
		<!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/tilt/tilt.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.validate/jquery.validate.min.js"> </script> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"> </script>
		<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
		</script>
        <script>
            $(document).ready(function(){
                // $('#login_form').validate({ // initialize the plugin
                //     rules: {
                //         usertype: {
                //             required : true,
                //         },
                //         password: {
                //             required :true,
                //         }

                //     },   
                //     messages: {
                //         usertype: {
                //             required: "Please select user type",
                //         },
                //         password: {
                //             required  : "Password is required",
                //         },
                //     }, 
                //     errorElement: "span",
                //     errorPlacement: function (error, element) {
                //         error.addClass("invalid-feedback");
                //         element.closest(".form-group").append(error);
                //     },
                //     highlight: function (element, errorClass, validClass) {
                //         $(element).addClass("is-invalid");
                //     },
                //     unhighlight: function (element, errorClass, validClass) {
                //         $(element).removeClass("is-invalid");
                //     },
                // });
                $("#user_login").click(function (event) {
                    // var valid = $("#login_form").valid();
                    // if (valid == false) {
                    //     return false;
                    // }
                    //stop submit the form, we will post it manually.
                    event.preventDefault();

                    // Get form
                    var form = $('#login_form')[0];

                    // Create an FormData object 
                    var data = new FormData(form);

                    $.ajax({
                        type: "POST",
                        dataType:'json',
                        enctype: 'multipart/form-data',
                        url: "<?php echo base_url() ?>Login/user_login",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if(data['status']==1){

                                 if(data['usertype'] == 'user'){
                                   window.location.href= "<?php echo base_url() ?>Dashboard";
                                 }else if(data['usertype'] == 'tpo'){
                                    window.location.href= "<?php echo base_url() ?>Course/course_category";
                                 }else{
                                    window.location.href= "<?php echo base_url() ?>Feedback/recived_feedback";
                                 }
                            
                            } else{
                                // alert("Invalid Email & password combination");
                                document.getElementById('error_msg').innerHTML = data['message'];
                            } 
                        },
                    });
                });
            });
        </script>
	</body>

	</html>