<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage profile - PTS-7</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.css">
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('includes/header.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('includes/sidebar.php') ?> ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Welcome <?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; }?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Profile</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" id="manage_profile_form">
                                    <div class="card-body">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $manage_profile->name; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Department</label>
                                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo $manage_profile->department; ?>" readonly />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $manage_profile->email; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Contact No</label>
                                            <input type="text" class="form-control" name="contact_no" placeholder="Enter contact_no" value="<?php echo $manage_profile->contact_no; ?>" />
                                        </div>
                                       
                                       
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1">Old password</label>
                                            <input type="password" class="form-control" name="old_password" placeholder="Password" />
                                        </div> -->
                                        <div class="form-group">
                                           <button type="button" class="btn btn-link" data-toggle="modal" data-target="#change_password">Chnage password?</button>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer  float-right">
                                        <a href="<?php echo base_url() ?>Dashboard" class="btn btn-light">Cancle</a>
                                        <button type="button" id="update_profile" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- /.card -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('includes/footer.php') ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="update_password_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old password</label><span style="color:red";>*</span>
                            <input type="password" class="form-control" name="old_password" placeholder="Password" />
                            <span id="error_msg" style="color:red";></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New password</label><span style="color:red";>*</span>
                            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm password</label><span style="color:red";>*</span>
                            <input type="password" class="form-control"  id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
                        </div>                         
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="update_password">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.validate/jquery.validate.min.js"> </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#manage_profile_form').validate({ // initialize the plugin
                rules: {
                    contact_no: {
                        required : true,
                        maxlength : 10,
                    },
                },   
                messages: {
                    contact_no: {
                        required: "This field is required",
                    },
                }, 
                errorElement: "span",
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");
                    element.closest(".form-group").append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass("is-invalid");
                },
            });
            $("#update_profile").click(function (event) {
                var valid = $("#manage_profile_form").valid();
                if (valid == false) {
                    return false;
                }
                //stop submit the form, we will post it manually.
                event.preventDefault();

                // Get form
                var form = $('#manage_profile_form')[0];

                // Create an FormData object 
                var data = new FormData(form);

                $.ajax({
                    type: "POST",
                    dataType:'json',
                    enctype: 'multipart/form-data',
                    url: "<?php echo base_url() ?>Profile/update_profile_data",
                    data: data,
                    processData: false,
                    contentType: false,
                    success : function(data){
                        if(data ['status']==1){
                          toastr.success(data['message']);  
                          location.reload();
                        } else {
                          toastr.error(data['message']);
                        }
                    },
                });
            });
            // Update password
            $('#update_password_form').validate({ // initialize the plugin
                rules: {
                    old_password: {
                        required : true
                    },
                    new_password: {
                        required : true,
                        minlength : 6,
                    },
                    confirm_password: {
                        equalTo : "#new_password"
                    },
                },   
                messages: {
                    confirm_password: {
                        equalTo: "Old password does not match",
                    },
                }, 
                errorElement: "span",
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");
                    element.closest(".form-group").append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass("is-invalid");
                },
            });
            $("#update_password").click(function (event) {
                var valid = $("#update_password_form").valid();
                if (valid == false) {
                    return false;
                }
                //stop submit the form, we will post it manually.
                event.preventDefault();

                // Get form
                var form = $('#update_password_form')[0];

                // Create an FormData object 
                var data = new FormData(form);

                $.ajax({
                    type: "POST",
                    dataType:'json',
                    enctype: 'multipart/form-data',
                    url: "<?php echo base_url() ?>Profile/update_password",
                    data: data,
                    processData: false,
                    contentType: false,
                    success : function(data){
                        if(data ['status']==1){
                          toastr.success("password chaged");  
                          location.reload();
                        } else {
                        //   toastr.error(data['message']);
                            document.getElementById('error_msg').innerHTML = data['message'];
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>