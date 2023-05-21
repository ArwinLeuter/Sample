<?php if($this->session->userdata('connect') == true){
    $sess = $this->session->userdata('username');
    $admin_level = $this->session->userdata('admin_level');
  }


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
    <title>Learning Module</title>
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
          <a class="sidebar-brand brand-logo" style="text-decoration:none; font-size: 30px;" href="http://localhost/sample/Auth/index1"><span style="color: red;">M</span> O D U L E S</a>
          <a class="sidebar-brand brand-logo-mini" style="text-decoration:none; font-size: 30px;" href="http://localhost/sample/Auth/index1"><span style="color: red;">M</span></a>
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

                <a class="nav-link btn btn-success create-new-button" data-bs-toggle="modal" data-bs-target="#myModal">+ Request Module</a>

              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="<?php  echo base_url('index.php/Auth/uploadForm');?>">
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
                <a class="nav-link" href="<?php echo base_url('Auth/adding');?>">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="<?php echo base_url('assets/template/assets/images/dashboard/Group126@2x.png');?>" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Messages</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out someone is there</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                        <span>
                          <a href="<?php echo base_url('Auth/Display_message');?>" class="btn btn-outline-light btn-rounded get-started-btn">Messages</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ---------------- books -------------------------->


            <!-- ---------------- English -------------------------->
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3><a href="<?php echo base_url('auth/english');?>" style="text-decoration: none; color: white;">English</a></h3>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-primary mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $english; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a href="<?php echo base_url('Auth/english');?>" class="icon-lg  mdi mdi-book-open-variant  text-primary ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- ---------------- Mathematics -------------------------->

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3><a href="<?php echo base_url('auth/mathematics');?>" style="text-decoration: none; color: white;">Mathematics</a></h3>
                    <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-danger mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $math; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a href="<?php echo base_url('Auth/mathematics');?>" class="icon-lg  mdi mdi-book-open-variant text-danger ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- ---------------- Science -------------------------->

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3><a href="<?php echo base_url('auth/science');?>" style="text-decoration: none; color: white;">Science</a></h3>
                    <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-success mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $science; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a href="<?php echo base_url('Auth/science');?>" class="icon-lg  mdi mdi-book-open-variant text-success ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- ---------------- Filipino -------------------------->

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3><a href="<?php echo base_url('auth/filipino');?>" style="text-decoration: none; color: white;">Filipino</a></h3>
                    <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-success mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $filipino; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a  href="<?php echo base_url('Auth/filipino');?>" class="icon-lg  mdi mdi-book-open-variant text-success ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- ---------------- P.E -------------------------->

            <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3><a href="<?php echo base_url('auth/ap');?>" style="text-decoration: none; color: white;">Araling Panlipunan</a></h3>
                    <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-danger mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $ap; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a href="<?php echo base_url('Auth/ap');?>" class="icon-lg  mdi mdi-book-open-variant text-primary ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- ---------------- A.P -------------------------->
            <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3><a href="<?php echo base_url('auth/pe');?>" style="text-decoration: none; color: white;">Physical Education</a></h3>
                    <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="text-primary mb-0">Total of Modules</h3>
                        </div>
                        <h1 class="mt-2"><?php echo $pe; ?></h1>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <a href="<?php echo base_url('Auth/pe');?>" class="icon-lg  mdi mdi-book-open-variant  text-danger ms-auto"></a>
                      </div>
                    </div>
                  </div>
                </div>

            
                
              </div>
              </div>
            
            
              
            

            <!-- ---------------- end of books div -------------------------->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-us"></i>
                                </td>
                                <td>USA</td>
                                <td class="text-right"> 1500 </td>
                                <td class="text-right font-weight-medium"> 56.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-de"></i>
                                </td>
                                <td>Germany</td>
                                <td class="text-right"> 800 </td>
                                <td class="text-right font-weight-medium"> 33.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>Australia</td>
                                <td class="text-right"> 760 </td>
                                <td class="text-right font-weight-medium"> 15.45% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-gb"></i>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right"> 450 </td>
                                <td class="text-right font-weight-medium"> 25.00% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ro"></i>
                                </td>
                                <td>Romania</td>
                                <td class="text-right"> 620 </td>
                                <td class="text-right font-weight-medium"> 10.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-br"></i>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right"> 230 </td>
                                <td class="text-right font-weight-medium"> 75.00% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>

          <div class="modal" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- modal header -->
        <!-- <div class="modal-header">
          <h4 class="modal title" style="font-color: white;">Add Book</h4>
        </div> -->


        <!-- modal header -->
        <div class="modal-header">
          <h3 class="mb-0">Learning Module System</h3>
        </div>

        <!-- modal body -->
        <div class="modal-body">
         
            <div class="form-group row">
              <div class="col">
                <div class="form-outline">
                  <div class="form-group row">
                    <div class="col">

                    <h3 class="text-center mb-3">Requesting Module</h3>

                    <form action="<?php echo base_url('index.php/request_controller/insertModule') ?>" method="POST" class="p-3" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Module Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control text-light" id="module_name" name="module_name" value="" Required>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                          <input type="Date" class="form-control text-light" id="date" name="date" value="" Required>
                        </div>
                      </div>

                      
                      <div style="float: right;">
                         <button type="submit" class="btn btn-success">Post</button>
                         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                      </div>

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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