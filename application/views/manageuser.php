<base href="http://localhost/primeheaven.com/">
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage User</title>
	  <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">

	<style>
	.content-wrapper {
		height: unset;
	}
	</style>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		
        <?php $this->load->view('includes/header.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('includes/sidebar.php') ?> ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<!-- <h1 class="m-0"></h1>  -->
                            <!-- <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#manageinterview_model">Create</button> -->
                        </div>
						<!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Manage User</li>
							</ol>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<!-- /.card -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Manage User</h3>
									<!--    <button type="button" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#exampleModal">
                                                      ADD News
                                 </button> -->
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="manageuser_data" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
                                                <th>Department</th>
                                                <th>Email</th>
                                                <th>Contact No  </th>
												<th>Password </th>
                                                
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="artbody">
                                            
                                        </tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- /.content -->
			<!-- ./col -->
		</div>
		<!-- Main Footer -->
		<?php  $this->load->view('includes/footer.php')?>
	</div>
    <!--  Add category model -->
  
    <!--  /Model -->
    <!--  Edit category model -->
    <div class="modal fade" id="update_manageuser_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Manage User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="update_interview_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                           <input type="hidden" class="form-control" name="id"  id="id" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Name</label><span style="color:red;">*</spna>
        
                            <input class="input100 form-control" type="text" id="name" name="name" placeholder="Name"  > 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Department</label><span >*</spna>
                           <select class="input100 form-control" name="department" id="department">
                                <option selected disabled>Select department</option>
                                <option value="IT">IT</option>
                                <option value="CSE">CSE</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electrical">Electrical</option>
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label><span style="color:red;">*</span>
                            <input class="input100 form-control" type="email" id="email" name="email" placeholder="Email" > 
                        </div>  

                        <div class="form-group  ">
                            <label for="exampleInputPassword1">Conatct No</label><span style="color:red;">*</span><br>
                                <input class="input100 form-control" id="contact" type="number" name="contact_no" placeholder="Contact No" > 
                         </div>
                        <div class="form-group  ">
                            <label for="exampleInputPassword1">Password</label><span style="color:red;">*</span><br>
                                <input class="input100 form-control" id="password" type="text" name="password" placeholder="Password" > 
                         </div>						 

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="update_manageuser">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  /Model -->
	<!-- ./wrapper -->
	<!-- REQUIRED SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.validate/jquery.validate.min.js"> </script>
    
	<!-- Page specific script -->
	<script>
       
    
        // View feedback data in 10 records
        $(document).ready(function(){
			$('#manageuser_data').DataTable({
				'processing': true,
				'serverSide': true,
				'serverMethod': 'post',
				'ajax': {
                'url':'<?php echo base_url() ?>User/view_user',
				},
				'columns': [
					
					{ data: 'id' },
                    { data: 'name' },
                    { data: 'department' },
                    { data: 'email' },
					{ data: 'contact_no' },
										{ data: 'password' },
					{ data: 'action' }
				]
			});
		});
        // Delete category data
        $(document).on("click",".delete_manageuser", function(){
            if(confirm("You sure you want to delete record")){
                var id = $(this).data('id');
                var element = this;

                $.ajax({
                    url: '<?php echo base_url(); ?>User/delete_manageuser',
                    type: 'POST',
                    dataType: 'json',
                    data: {'id': id},
                    success : function(data){
                    if(data ['status']==1){
                        toastr.warning(data['message']);  
                        $(element).closest("tr").fadeOut();
                    } else {
                        toastr.error(data['message']);
                    }
                    }
                });
                return false;
            }
        })
        //  Fetch data to update
        $(document).on("click",".update_manageuser", function(){
                var id = $(this).data('id');
            $("#update_manageuser_model").modal('show'); 
            $.ajax({
                method:'POST',
                url:'<?php echo base_url(); ?>User/fetch_manageuser',
                data:{'id': id},
                dataType:'json',
                success:function(data){
                    $('#id').val(id);
                    $('#name').val(data.name);
                    $('#department').val(data.department);
                    $('#email').val(data.email);
                    $('#contact').val(data.contact_no);
					$('#password').val(data.password);
                   
                },    
            });
        });
       
        $("#update_manageuser").click(function (event) {
            //stop submit the form, we will post it manually.
            var user_id = $('#id').val();
             var edit_user_name = $('#name').val();
            var  department = $('#department :selected').text();
            var  email = $('#email').val();
            var  contact = $('#contact').val();
			var password = $('#password').val();
            
           

            if (edit_user_name == '') {
               $('#edit_user_name').after('<span class="error" style="color:red;">*Please enter user name.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }

            if (department == '') {
               $('#department').after('<span class="error" style="color:red;">*Please select department.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
            if (email == '') {
               $('#email').after('<span class="error" style="color:red;">*Please enter email.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }

                if (contact == '') {
               $('#contact').after('<span class="error" style="color:red;">*Please enter contact.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
           
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo base_url() ?>User/update_manageuser",
                data: 'edit_user_name='+edit_user_name+'&department='+department+'&email='+email+'&contact='+contact+'&user_id='+user_id,
              
                success: function (data) {
                    if(data ['status']==1){
                        toastr.success(data['message']);
                        location.reload(); 
                    } else{
                        toastr.error(data['message']);
                    } 
                },
            });
        });
    </script>
</body>

</html>
