<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Sign In  </title>
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
      background-image: radial-gradient(650px circle at 30% 0%,
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
  <body style=" overflow: hidden;">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Library Module <br />
          <span style="color: hsl(218, 81%, 75%)">System</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        This Library Module System is where you can download modules that you want.
        You can also share any learning modules you have in there.
        so that we can share our knowledge and benefit others. 
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
		<?php echo form_open('Auth/user_login/');?>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form>
			<center>
			<img src="<?php echo site_url();?>assets/template/assets/images/favicon.png" alt="logo" style="height: 60px; margin-top: -15px; margin-bottom: 30px;">
		    </center>
              <!-- Email input -->
              <div class="form-outline mb-4">
			    <input id="user" type="text" class="form-control" name="username" value="" required autofocus>
                <label class="mb-2 text-muted" for="username" style="color: white;">Username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
   			    <input id="password" type="password" class="form-control" name="password" required>
                <label class="mb-2 text-muted" for="password" style="color: white;">Passsword</label>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-primary ms-auto">
				Login
			  </button>
			  <?php form_close();?>
              <!-- Register buttons -->
			  <div class="card-footer py-3 border-0" style="margin-top: 10px; color:white;">
							<div class="text-center">
								Don't have an account? <a href="<?php echo base_url('Auth/register');?>">Create One</a>
							</div>
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
						<img src="<?php echo site_url();?>assets/template/assets/images/logo.png" alt="logo" style="height: 150px; border-radius: 100%; margin-top: -20px; margin-bottom: -40px;">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							
							<?php echo form_open('Auth/user_login');?>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">Username</label>
									<input id="user" type="text" class="form-control" placeholder="Username" name="username" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							<?php form_close();?>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?php echo base_url('Auth/register');?>" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


</body>
</html>