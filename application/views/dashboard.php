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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
 body {
  font-family: 'Varela Round', sans-serif;
}
.modal-confirm {    
  color: #636363;
  width: 325px;
  font-size: 14px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
} 
.modal-confirm .icon-box {
  color: #fff;    
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #82ce34;
  padding: 15px;
  text-align: center;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
  font-size: 58px;
  position: relative;
  top: 3px;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #82ce34;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #6fb32b;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
} </style>
   
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
            <h1 class="m-0">Mock Test</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mock Test</a></li>
              <li class="breadcrumb-item active">Mock Test</li>
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
         
          <!-- ./col -->
       
          <!-- ./col -->
          
          <!-- ./col -->
         
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
        <form action="<?php echo base_url() ?>Roadmap" name="form1" id="form1" method="post">
           <div class="timer mr-r">
            <button type="button" class="close" data-dismiss="modal"><time id="countdown">3:00</time></button>
          </div>
          <br>
                    <div class="form-group">
                    <h6 style="float:left;">Ques1 : What does PHP stand for? </h6>
                    <br>
                    <ol>
                      <br>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="1" />  Personal Hypertext Processor
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="2" />  Private Home Page
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q1" value="3" />  PHP: Hypertext Preprocessor
                    </li>
                    </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                    <h6 style="float:left;">Ques2 : How do you write "Hello World" in PHP?</h6>
                    <br>
                    <ol>
                      <br>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="1" />  echo "Hello World";
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="2" />  "Hello World";
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q2" value="3" />  Document.Write("Hello World");
                    </li>
                    </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                    <h6 style="float:left;">Ques3 : All variables in PHP start with which symbol ?</h6>
                    <br>
                    <ol>
                      <br>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="1" />  &
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="2" />  $
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q3" value="3" />  !
                    </li><br>
                    </ol>
                    </div>
                 
                     <div class="form-group"> 
                    <h6 style="float:left;">Ques4 :What is the correct way to end a PHP statement ?</h6>
                    <br>
                    <ol>
                      <br>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="1" />  .
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="2" />  New line
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q4" value="3" />  ;
                    </li>
                    </ol>
                    </div>
                    <br>
                     <div class="form-group"> 
                    <h6 style="float:left;">Ques5 :What is the correct way to create a function in PHP?</h6>
                    <br>
                    <ol>
                      <br>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="1" />  new_function myFunction()
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="2" />  function myFunction()
                    </li><br>
                    <li style="float:left;">
                    <input type="radio" name="q5" value="3" />  create myFunctio()
                    </li>
                    </ol>
                    </div>
                  
                    <div class="form-group">
                    <a href="#" class="trigger-btn" data-toggle="modal"><input type="submit" value="Submit" name="submit" class="btn btn-primary submit" /></a>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>


      var seconds = 180;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.form1.submit();
             $('#myModal').modal('hide');
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);



  <?php if($_SESSION['user_type']=='user'){?>
$(document).ready(function(){       
   $('#myModal').modal('show');
    }); 
    <?php } ?> 

    $('.submit').click(function(){
     var  q1 = $("input[name='q1']:checked").val();
     var  q2 = $("input[name='q2']:checked").val();
     var  q3 = $("input[name='q3']:checked").val();
     var  q4 = $("input[name='q4']:checked").val();
     var  q5 = $("input[name='q5']:checked").val();
   
      
      $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo base_url() ?>Dashboard/quiz1",
                data: 'q1='+q1+'&q2='+q2+'&q3='+q3+'&q4='+q4+'&q5='+q5,
              
                success: function (data) {
                    console.log(data);
                    if(data ['status']==1){
 
                    <?php  $message = "'+data['message']+'"; ?>
                     
                          sweetAlert({
                    title: 'Success!',
                    text: '<?php echo $message; ?>',
                    icon: 'success',
                    timer: 60000,
                    confirmButtonText: 'Ok'
                    })
                           setTimeout(function() {
                           window.location.href = "<?php echo base_url() ?>Roadmap"
                          }, 7000);

                    } else{
                        toastr.error(data['message']);
                        //alert(data['message']);
                    } 
                },
            });
      

   });

  //   //$('#model').hide();
       
  //   }
    
  </script>
</body>
</html>
