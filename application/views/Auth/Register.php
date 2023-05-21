<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Sign Up</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
	<link rel="shortcut icon" href="<?php echo site_url();?>assets/template/assets/images/favicon.png" />

 </head>

 <section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: #191C24 !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
<body style="overflow: hidden;">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Library Module<br />
          <span style="color: hsl(218, 81%, 75%)">System</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        This Library Module System is where you can download modules that you want.
        You can also share any learning modules you have in there.
        so that we can share our knowledge and benefit others. 
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative" style="margin-top: -40px;">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
		  <?php echo form_open('Auth/registration_form');?>
            <form>
			<center>
			<img src="<?php echo site_url();?>assets/template/assets/images/favicon.png" alt="logo" style="height: 60px; margin-top: -15px; margin-bottom: 30px;">
		    </center>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="name" name="name" class="form-control"  value="" required autofocus>
                    <label class="form-label text-muted" for="name" style="color: white;">Full Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="user" class="form-control" name="username" value="" required autofocus>
                    <label class="form-label text-muted" for="user" style="color: white;">Username</label>
                  </div>
                </div>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" required>
                <label class="form-label text-muted" for="password" style="color: white;">Password</label>
              </div>

              <!-- Confirm Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="con_password" id="password" class="form-control" required>
                <label class="form-label text-muted" for="password">Confirm Password</label>
              </div>

             <!-- <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="admin_level" value="admin">
              <label class="form-check-label text-white" for="admin">Admin</label>
             </div>
             <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="admin_level" value="user">
              <label class="form-check-label text-white" for="user">User</label>
             </div> -->

              <!-- <div class="form-outline mb-4">
                <input type="text" name="admin_level" id="admin_level" class="form-control" required>
                <label class="form-label text-muted" for="admin_level">Account</label>
              </div> -->

              <!-- Submit button -->
              <div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-outline-primary">
										Register
									</button>
								</div>
						<?php echo form_close();?>

			  <div class="card-footer py-3 border-0" style="margin-top: 10px; color:white;">
				<div class="text-center">
					Have an account ? <a href="<?php echo site_url();?>Auth"> Login</a>
				</div>
			  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<!-- <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="<?php echo site_url();?>assets/logos.jpg" alt="logo" width="110">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							
							<?php echo form_open('Auth/registration_form');?>

                                <div class="mb-3">
									<label class="mb-2 text-muted" for="name">Full Name</label>
									<input id="name" name="name" type="text" class="form-control" value="" required autofocus>
									
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="user">Username</label>
									<input id="user" name="username" type="text" class="form-control" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" name="password" type="password" class="form-control" required>
								  
								</div>

                                <div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Confirm Passsword</label>
									<input id="password" name="con_password" type="password" class="form-control"  required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ">
										Register
									</button>
								</div>
						<?php echo form_close();?>

						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Have an account ? <a href="<?php echo site_url();?>Auth" class="text-dark"> Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->



 <script type="text/javascript">

<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('wrong')){  ?>
    toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info'))  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php
	$this->session->unset_userdata ( 'success' ); ?>
	
	<?php
    $this->session->unset_userdata ( 'wrong' ); ?>


</script>

</body>
</html>