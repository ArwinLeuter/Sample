<?php if($this->session->userdata('connect') == true){
    $sess = $this->session->userdata('username');}

    if(empty($sess)){
      redirect('Auth/index');

    }
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>English | Update Form</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo site_url();?>assets/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo site_url();?>assets/template/assets/images/favicon.png" />
    
  </head>

  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" style="text-decoration:none; font-size: 30px;" href="<?php echo base_url('Auth/ap');?>"><span style="color: red;">A</span> P</a>
          <a class="sidebar-brand brand-logo-mini" style="text-decoration:none; font-size: 30px;" href="<?php echo base_url('Auth/ap');?>"><span style="color: red;">A</span></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo base_url('assets/template/assets/images/logologo.jpg');?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $sess?></h5>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://localhost/sample/Auth/index1">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-page-variant"></i>
              </span>
              <span class="menu-title">Subject Modules</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/english');?>">English</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/mathematics');?>">Mathematics</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/science');?>">Science</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/filipino');?>">Filipino</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/ap');?>">Araling Panlipunan</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/pe');?>">Physical Education</a></li>

              </ul>
            </div>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account "></i>
              </span>
              <span class="menu-title">Account</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
              <?php if($admin_level == "admin") {?>  
               <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Activity_logs/index');?>">Activty Logs</a></li>
               <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('delete_controller/delete_logs');?>">Delete Logs</a></li> -->
               <?php }else{?>
                  <?php }?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/register');?>">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Auth/logout')?>">Log out</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo base_url('Auth/about');?>">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">About Page/Info</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/template/assets/images/logo-mini.svg');?>" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <!-- <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form> -->
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="<?php echo base_url('index.php/Auth/Display_message');?>">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div> -->
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?php echo base_url('assets/template/assets/images/logologo.jpg');?>" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $sess?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="<?php echo base_url('Auth/logout');?>">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <!------------------------------ main panel messageeeeeesssss ----------------------------------->
        <div class="container overflow bg-black" style="padding-top: 80px;">
            <div class="form-group row">
              <div class="col">
                <div class="form-outline">
                  <div class="form-group row">
                    <div class="col">

                    <h3 class="text-center mb-3">Arailing Panlipunan</h3>

                    <form action="<?php echo base_url('index.php/addap/apupdate') ?>" method="POST" class="p-3">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control text-light d-none" id="title" name="book_id" value="<?php echo $result['book_id']?>">
                          <input type="text" class="form-control text-light" id="title" name="title" value="<?php echo $result['title']?>">
                        </div>
                      </div>
                        
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Authors</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control text-light" id="authors" name="authors" value="<?php echo $result['authors']?>">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                          <input type="Date" class="form-control text-light" id="date" name="date" value="<?php echo $result['date']?>">
                        </div>
                      </div>
                      
                      <div style="float: right;">
                         <button type="submit" class="btn btn-success" >Update</button>
                         <button type="button" class="btn btn-primary"><a href="<?php echo base_url('Auth/ap');?>" style="text-decoration: none; color: white;">Cancel</a></button>
                      </div>

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
    
    
    <!-- --------------------main panel messageeeessss ends ---------------------------------->
  </div>
  


        <!--------------------- Update Modal -------------------->
        <!-- modal -->
      <!-- page-body-wrapper ends -->
    </div>

        <!-- modal header -->
        <!-- <div class="modal-header">
          <h4 class="modal title" style="font-color: white;">Add Book</h4>
        </div> -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script>
  // Code for opening the Add Modal
  <!-- Include Bootstrap and jQuery libraries -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo site_url();?>assets/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo site_url();?>assets/template/assets/js/off-canvas.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/js/misc.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/js/settings.js"></script>
    <script src="<?php echo site_url();?>assets/template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo site_url();?>assets/template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<!-- <div class="col-lg-6">
    <?php foreach($result as $row) {?>
        <div>
            <p>Name: <i><?php echo $row['user_id']?></i></p>
            <p>Message: <b><?php echo $row['groupMessage']?></p>
        </div>
    <?php }?>
</div>
<br>
<form action="<?php echo base_url('Auth/insertMessage')?>"method="post">
<textarea class="form-control" name="message"> </textarea>
<br>
<input type="Submit" value="send" style="background-color: black; color: white; font: monospace; height: 30px; width: 60px;" name="">

</div>  -->