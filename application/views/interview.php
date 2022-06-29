<base href="http://localhost/primeheaven.com/">
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interview</title>
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
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#interview_model">Create</button>
                        </div>
						<!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Interview</li>
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
									<h3 class="card-title">Interview</h3>
									<!--    <button type="button" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#exampleModal">
                                                      ADD News
                                 </button> -->
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="interview_data" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Company name</th>
                                                <th>Date</th>
                                                 <th>Comment</th>
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
    <div class="modal fade" id="interview_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Interview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="interview_form" enctype="multipart/form-data">
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Company name</label><span style="color:red;">*</spna>
        
                            <input type="text" class="form-control company_name" name="company_name" placeholder="Enter name" value=""  />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label><span style="color:red;">*</spna>
                           <input type="date" class="form-control date" name="date" placeholder="Enter date" value=""  />
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Comment</label><span style="color:red;">*</spna>
                            <textarea class="form-control user_interview" name="user_interview" rows="3"></textarea>
                        </div>                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save_interview">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  /Model -->
    <!--  Edit category model -->
    <div class="modal fade" id="update_interview_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Interview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="update_interview_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                           <input type="hidden" class="form-control" name="interview_id"  id="interview_id" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company name</label><span style="color:red;">*</spna>
        
                            <input type="text" class="form-control" name="company_name" id="edit_company_name" placeholder="Enter name" value="<?php// echo $manage_profile->name; ?>"  />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label><span style="color:red;">*</spna>
                           <input type="date" class="form-control" name="date" id="edit_date" placeholder="Enter date" value="<?php// echo $manage_profile->name; ?>"  />
                        </div>                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Comment</label><span style="color:red;">*</spna>
                            <textarea class="form-control" name="edit_user_interview" id="edit_user_interview"  rows="3"></textarea>
                        </div>                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="update_interview">Save</button>
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
       
            $("#save_interview").click(function (event) {
               // var valid = $("#interview_form").valid();

                var user_interview = $('.user_interview').val();
                var  date = $('.date').val();
               var  company_name = $('.company_name').val();
             
            if (company_name == '') {
               $('.company_name').after('<span class="error" style="color:red;">*Please enter company name.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
                if (date == '') {
               $('.date').after('<span class="error" style="color:red;">*Please select date.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
               if (user_interview == '') {
               $('.user_interview').after('<span class="error" style="color:red;">*Please enter comment.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
               
            

                    $.ajax({
                    url:'<?php echo base_url(); ?>Interview/add_interview',
                    type:'post',    
                    data: 'user_interview='+user_interview+'&company_name='+company_name+'&date='+date,
                    success: function (data) {
                    if(data ['status']==1){
                        toastr.success(data['message']);
                        location.reload(); 
                    } else{
                        toastr.error('Interview added sucessfully');
                         location.reload();
                    } 
                   },

                });
            
        });
        // View feedback data in 10 records
        $(document).ready(function(){
			$('#interview_data').DataTable({
				'processing': true,
				'serverSide': true,
				'serverMethod': 'post',
				'ajax': {
                'url':'<?php echo base_url() ?>Interview/view_interview',
				},
				'columns': [
					
					{ data: 'id' },
                    { data: 'company_name' },
                    { data: 'date' },
					{ data: 'comment' },
					{ data: 'action' }
				]
			});
		});
        // Delete category data
        $(document).on("click",".delete_interview", function(){
            if(confirm("You sure you want to delete record")){
                var id = $(this).data('id');
                var element = this;

                $.ajax({
                    url: '<?php echo base_url(); ?>Interview/delete_interview',
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
        $(document).on("click",".update_interview", function(){
            var id = $(this).data('id');
            $("#update_interview_model").modal('show'); 
            $.ajax({
                method:'POST',
                url:'<?php echo base_url(); ?>Interview/fetch_interview',
                data:{'id': id},
                dataType:'json',
                success:function(data){
                    $('#interview_id').val(id);
                    $('#edit_user_interview').val(data.comment);
                    $('#edit_date').val(data.date);
                    $('#edit_company_name').val(data.company_name);
                },    
            });
        });
       
        $("#update_interview").click(function (event) {
            //stop submit the form, we will post it manually.
             var edit_user_interview = $('#edit_user_interview').val();
            var  edit_date = $('#edit_date').val();
            var  edit_company_name = $('#edit_company_name').val();
            var  interview_id = $('#interview_id').val();

            if (edit_company_name == '') {
               $('#edit_company_name').after('<span class="error" style="color:red;">*Please enter company name.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }

            if (edit_date == '') {
               $('#edit_date').after('<span class="error" style="color:red;">*Please select date.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
            if (edit_user_interview == '') {
               $('#edit_user_interview').after('<span class="error" style="color:red;">*Please enter comment.</span>');
                       $('.error').fadeOut(9000);

                     return false; 
                }
           
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo base_url() ?>Interview/update_interview",
                data: 'edit_company_name='+edit_company_name+'&edit_date='+edit_date+'&edit_user_interview='+edit_user_interview+'&interview_id='+interview_id,
              
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
