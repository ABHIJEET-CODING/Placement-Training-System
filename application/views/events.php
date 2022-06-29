<base href="http://localhost/primeheaven.com/">
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>event</title>
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
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#event_model">Add event</button>
                        </div>
						<!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">event</li>
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
									<h3 class="card-title">event</h3>
									<!--    <button type="button" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#exampleModal">
                                                      ADD News
                                 </button> -->
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="event_data" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Date</th>
												<th>Description</th>
												<th>Image</th>
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
    <div class="modal fade" id="event_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="event_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Title</label>
                            <input type="text" class="form-control" name="event_title" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" class="form-control" name="event_date" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description:</label>
                            <textarea class="form-control" name="event_description" rows="3"></textarea>
                        </div>                         
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control"  name="event_image" placeholder="Image" />
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save_event">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  /Model -->
    <!--  Edit category model -->
    <div class="modal fade" id="update_event_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="update_event_form" enctype="multipart/form-data">
                    <div class="modal-body">
                         <!-- hidden id -->
                         <div class="form-group">
                           <input type="hidden" class="form-control" name="edit_event_id" id="edit_event_id" />
                        </div>
                        <!-- End  -->
                        <!-- hidden image -->
                        <div class="form-group">
                           <input type="hidden" class="form-control" name="event_image_name"  id="event_image_name" />
                        </div>
                        <!-- End  -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Title</label>
                            <input type="text" class="form-control" name="edit_event_title"  id="edit_event_title" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" class="form-control" name="edit_event_date" id="edit_event_date" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description:</label>
                            <textarea class="form-control" name="edit_event_description" id="edit_event_description" rows="3"></textarea>
                        </div>                         
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control"  name="edit_event_image" id="edit_event_image" placeholder="Image" />
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="update_event">Save</button>
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
        $(document).ready(function(){
            $('#event_form').validate({ // initialize the plugin
                rules: {
                    event_category: {
                        required : true,
                    },
                    event_title: {
                        required : true,
                    },
                    event_image: {
                        required : true,
                    },
                    event_description: {
                        required : true,
                    },
                    event_duration: {
                        required : true,
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
            $("#save_event").click(function (event) {
                var valid = $("#event_form").valid();
                if (valid == false) {
                    return false;
                }
                //stop submit the form, we will post it manually.
                event.preventDefault();

                // Get form
                var form = $('#event_form')[0];

                // Create an FormData object 
                var data = new FormData(form);

                $.ajax({
                    type: "POST",
                    dataType:'json',
                    enctype: 'multipart/form-data',
                    url: "<?php echo base_url() ?>Events/add_event",
                    data: data,
                    processData: false,
                    contentType: false,
                    success : function(data){
                        if(data ['status']==1){
                          toastr.success(data['message']);  
                          location.reload();
                        // alert('ok');
                        } else {
                          toastr.error(data['message']);
                        // alert('not ok');
                        }
                    },
                });
            });
        });
        // View event data in 10 records
        $(document).ready(function(){
			$('#event_data').DataTable({
				'processing': true,
				'serverSide': true,
				'serverMethod': 'post',
				'ajax': {
                'url':'<?php echo base_url() ?>Events/view_event',
				},
				'columns': [
					// { data: 'sr' },
					{ data: 'id' },
					{ data: 'event_title' },
					{ data: 'event_date' },
					{ data: 'event_description' },
					{ data: 'event_image' },
					{ data: 'action' }
				]
			});
		});
        // Delete category data
        $(document).on("click",".delete_event", function(){
            if(confirm("You sure you want to delete record")){
                var id = $(this).data('id');
                var element = this;

                $.ajax({
                    url: '<?php echo base_url(); ?>Events/delete_event',
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
        $(document).on("click",".update_event", function(){
            var id = $(this).data('id');
            $("#update_event_model").modal('show'); 
            $.ajax({
                method:'POST',
                url:'<?php echo base_url(); ?>Events/fetch_event',
                data:{'id': id},
                dataType:'json',
                success:function(data){
                    $('#edit_event_id').val(id);
                    $('#event_image_name').val(data.event_image);
                    $('#edit_event_title').val(data.event_title);
                    $('#edit_event_description').val(data.event_description);
                    $('#edit_event_date').val(data.event_date);
                }
            });
        });
        $('#update_event_form').validate({ // initialize the plugin
                rules: {
                    edit_event_title: {
                        required : true,
                    },
                    edit_event_date: {
                        required : true,
                    },
                    edit_event_description: {
                        required : true,
                    },
                },   
                // messages: {
                //     contact_no: {
                //         required: "This field is required",
                //     },
                //     event_title: {
                //         required: "This field is required",
                //     },
                //     event_image: {
                //         required: "This field is required",
                //     },
                //     event_description: {
                //         required: "This field is required",
                //     },
                //     event_duration: {
                //         required: "This field is required",
                //     },
                // }, 
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
        $("#update_event").click(function (event) {
            //stop submit the form, we will post it manually.
            event.preventDefault();
            
            var valid = $("#update_event_form").valid();
            if (valid == false) {
                return false;
            }
            // Get form
            var form = $('#update_event_form')[0];
        
            // FormData object 
            var data = new FormData(form);
     
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo base_url() ?>Events/update_event",
                data: data,
                processData: false,
                contentType: false,
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
