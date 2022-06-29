<?php 
  // echo"<pre>";
  // print_r($_SESSION);
  // die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PTS - Dashboard</title>

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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css"  />
   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php $this->load->view('includes/header.php') ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- Quiz Model -->
            <div id="myModal" class="modal fade" role="dialog" style="top:0%;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--         <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body text-center">
        <form action="#" method="post">
                    <div class="form-group">
                    <h6>Ques1 : What does PHP stand for? </h6>
                    
                    <ol>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="1" /> Personal Hypertext Processor
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="2" /> Private Home Page
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="3" /> PHP: Hypertext Preprocessor
                    </li>
                    </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                    <h6>Ques2 : How do you write "Hello World" in PHP?</h6>
                    <ol>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="1" /> echo "Hello World";
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="2" /> "Hello World";
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="3" /> Document.Write("Hello World");
                    </li>
                    </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                    <h6>Ques3 : All variables in PHP start with which symbol ?</h6>
                    <ol>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="1" /> &
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="2" /> $
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="3" /> !
                    </li><br>
                    </ol>
                    </div>
                    
                     <div class="form-group"> 
                    <h6>Ques4 :What is the correct way to end a PHP statement ?</h6>
                    <ol>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="1" /> .
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="2" />New line
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="3" />;
                    </li>
                    </ol>
                    </div>
                     <div class="form-group"> 
                    <h6>Ques5 :What is the correct way to create a function in PHP?</h6>
                    <ol>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="1" />new_function myFunction()
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="2" />function myFunction()
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="3" />create myFunctio()
                    </li>
                    </ol>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary submit "/>
                    </div>
                    </form>
      </div>
      <div class="modal-footer">
        <!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>

        <!---end Quiz Model-->
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
<!-- AdminLTE App -->
 <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.validate/jquery.validate.min.js"> </script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script>
$(document).ready(function(){       
   $('#myModal').modal('show');
    });  

   $('.submit').click(function(){
     var  q1 = $("input[name='q1']:checked").val();
     var  q2 = $("input[name='q2']:checked").val();
     var  q3 = $("input[name='q3']:checked").val();
     var  q4 = $("input[name='q4']:checked").val();
     var  q5 = $("input[name='q5']:checked").val();

     if(q1 == ''){
         alert('Please select all field');
     }else{
      $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo base_url() ?>Dashboard/quiz1",
                data: 'q1='+q1+'&q2='+q2+'&q3='+q3+'&q4='+q4+'&q5='+q5,
              
                success: function (data) {
                    console.log(data);
                    if(data ['status']==1){
                     
                        alert(data['message']);
                         e.preventDefault();
                        window.location.href= "<?php echo base_url() ?>Dashboard";
                       
                    } else{
                        toastr.error(data['message']);
                        //alert(data['message']);
                    } 
                },
            });
       $('#model').hide();
    }

   });
     

  //   //$('#model').hide();
       
  //   }
    
  </script>
</body>
</html>
