<?php
    if(!isset($_SESSION['id'])){
        redirect ('Login');
    }
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <h2 class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">PTS</span>
</h2>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
            <!-- <div class="image"> -->
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            <!-- </div> -->
            <!-- <div class="info">
               
            </div> -->
        <!-- </div> -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

        <!-- Sidebar Menu -->
        <?php if($_SESSION['user_type'] != 'tpo' && $_SESSION['user_type'] != 'admin'){ ?>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Mock Test
                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?//php echo base_url() ?>Course/course_category" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Course Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?//php echo base_url() ?>Course/course" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Course 
                        </p>
                    </a>
                </li> -->
            </ul>
        <?php }?>
            <?php if($_SESSION['user_type'] == 'user'){ ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
               
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Roadmap" class="nav-link">
                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>
                            Road map
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Feedback" class="nav-link">
                    <i class='far fa-comment'></i>
                        <p>
                            Send feedback
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Events/event_view" class="nav-link">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                        <p>
                            Events
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Course/course" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Course 
                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Interview" class="nav-link">
                    <i class="fa fa-list" aria-hidden="true"></i>
                        <p>
                            Add Interview Experience 
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Interview/recived_interview" class="nav-link">
                    <i class="fa fa-list" aria-hidden="true"></i>
                        <p>
                            Interviews 
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <?php } ?>
            <?php if($_SESSION['user_type'] == 'tpo'){ ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                      <a href="<?php echo base_url() ?>Course/course_category" class="nav-link">
                          <i class="nav-icon fa fa-th-large"></i>
                          <p>
                            Course Category
                            <!-- <i class="right fas fa-angle-left"></i> -->
                          </p>
                      </a>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a href="<?php echo base_url() ?>Course/student" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Student Detail                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Course/course" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Course 
                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <?php } ?>
            <?php if($_SESSION['user_type'] == 'tpo'){ ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Events" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Events 
                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Manageinterview" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Manage Interview                  Experiences
                          <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Interview/recived_interview" class="nav-link">
                    <i class="fa fa-list" aria-hidden="true"></i>
                        <p>
                            Interviews 
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
            <?php } ?>
            <?php if($_SESSION['user_type'] == 'admin'){ ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>Feedback/recived_feedback" class="nav-link">
                        <i class='far fa-comment'></i>
                        <p>
                        Recived Feedback
                        <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
            </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                      <a href="<?php echo base_url() ?>User" class="nav-link">
                          <i class="nav-icon fa fa-th-large"></i>
                          <p>
                            Manage User
                            <!-- <i class="right fas fa-angle-left"></i> -->
                          </p>
                      </a>
                </li>
            </ul>
            <?php } ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- <li class="nav-item">
                    <a href="<?//php echo base_url() ?>Profile" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Manage Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>