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
 <title>Placement Training System</title>
<!-- Bootstrap core CSS -->
<link href="assets1/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets1/css/mediumish.css" rel="stylesheet">

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
    <section class="featured-posts">
  <div class="section-title">
    <h2><span>Featured</span></h2>
  </div>
  <div class="mainheading">
    <h1 class="sitetitle">Roadmap</h1>
    <p class="lead">
       View Roadmap for Content You want to learn
    </p>
  </div>
  <div class="card-columns listfeaturedtag">
   <div>
    <!-- begin post -->
    

    <div class="card">
      <div class="row">
        <div class="col-md-5 wrapthumbnail">
          <a href="post.html">
            <div class="thumbnail" style="background-image:url(assets1/img/demopic/website-development-links-seo-webinar-cyberspace-concept.jpg);">
            </div>
          </a>
        </div>
        <div class="col-md-7">
          <div class="card-block">
            <h2 style="font-size: 30px;text-shadow: -1px -1px orangered;" class="card-title"><a href="frontend.pdf">Web Development</a></h2>
            <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
            <div class="metafooter">
            
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- end post -->

    <!-- begin post -->
    <div class="card">
      <div class="row">
        <div class="col-md-5 wrapthumbnail">
          <a href="post.html">
            <div class="thumbnail" style="background-image:url(http://localhost/PTS/assets1/img/demopic/jav.jpeg);">
            </div>
          </a>
        </div>
        <div class="col-md-7">
          <div class="card-block">
            <h2 style="font-size: 30px;text-shadow: -1px -1px orangered;" class="card-title"><a href="Java Developer Roadmap.pdf">Java</a></h2>
            <h4 class="card-text">The intent of this guide is to give you an idea about the Java ecosystem and to help guide your 
              learning if you are confused.</h4>
            <div class="metafooter">
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end post -->

    <!-- begin post -->
    <div class="card">
      <div class="row">
        <div class="col-md-5 wrapthumbnail">
          <a href="post.html">
            <div class="thumbnail" style="background-image:url(assets1/img/demopic/android.jpg);">
            </div>
          </a>
        </div>
        <div class="col-md-7">
          <div class="card-block">
            <h2 style="font-size: 30px;text-shadow: -1px -1px orangered;" class="card-title"><a href="post.html">Android</a></h2>
            <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
            <div class="metafooter">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end post -->

    <!-- begin post -->
    <div class="card">
      <div class="row">
        <div class="col-md-5 wrapthumbnail">
          <a href="post.html">
            <div class="thumbnail" style="background-image:url(assets1/img/demopic/python.jpg);">
            </div>
          </a>
        </div>
        <div class="col-md-7">
          <div class="card-block">
            <h2 style="font-size: 30px;text-shadow: -1px -1px orangered;" class="card-title"><a href="post.html">Python</a></h2>
            <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
            <div class="metafooter">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end post -->
  </div>
  </div>
  </section>

  <!-- End Featured -->

      <section class="recent-posts">
  <div class="section-title">
    <h2><span>All Roadmaps</span></h2>
  </div>
  <div class="card-columns listrecent">

    <!-- begin post -->
  
    <!-- end post -->

    <!-- begin post -->
    <div class="card">
      <a href="post.html">
        <img class="img-fluid" style="max-width: 50%;margin-left:20%;" src="assets1/img/demopic/python.jpg" alt="">
      </a>
      <div class="card-block">
        <h2 class="card-title"><a href="post.html">Python</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern Java developer in 2022</h4>
        
      </div>
    </div>
    <!-- end post -->
      <div class="card my-3" >
      <a href="post.html">
        <img  class="img-fluid" style="max-width: 50%;margin-left:20%;" src="assets1/img/demopic/android.jpg" alt="">
      </a>
      <div class="card-block">
        <h2 class="card-title"><a href="post.html">Android</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern Android Developer in 2022</h4>
        
      </div>
    </div>
    <!-- begin post -->
    <div class="card">
      <a href="post.html">
        <img class="img-fluid" style="max-width: 45%;margin-left:20%;" src="assets1/img/demopic/react.jpeg" alt="">
      </a>
      <div class="card-block">
        <h2 class="card-title"><a href="post.html">React</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern React developer in 2022</h4>
        
      </div>
    </div>
    <!-- end post -->

    <!-- begin post -->
    <div class="card">
      <a href="post.html">
        <img class="img-fluid" style="max-width: 55%;margin-left:20%;" src="assets1/img/demopic/jav.jpeg" alt="">
      </a>
      <div class="card-block">
        <h2 class="card-title"><a href="post.html">Java</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern backend developer in 2022</h4>
        
      </div>
    </div>
    <!-- end post -->

    <!-- begin post -->
    <div class="card">
      <a href="post.html">
        <img style="padding-bottom: 0px;max-width: 50%;margin-left:20%;"  class="img-fluid" src="assets1/img/demopic/backend.jpeg" alt="">
      </a>
      <div class="card-block" >
        <h2 class="card-title"><a href="post.html">Backend Developer</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern backend developer in 2022</h4>
      
      </div>
    </div>
    <!-- end post -->

    <!-- begin post -->
    <div class="card" >
      <a href="post.html">
        <img class="img-fluid" style="max-width: 70%;margin-left:20%;" src="assets1/img/demopic/golang.png" alt="">
      </a>
      <div class="card-block">
        <h2 class="card-title"><a href="post.html">Go</a></h2>
        <h4 class="card-text">Step by step guide to becoming a modern Golang Developer in 2022</h4>
      
      </div>
    </div>
    <!-- end post -->

  </div>
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

<script src="assets1/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/js/ie10-viewport-bug-workaround.js"></script>

<script>

    
  </script>
</body>
</html>
