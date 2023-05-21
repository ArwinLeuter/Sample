<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Vetcare Pet Clinic</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/style1.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/style_Appointment.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


 
<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>V</span>etcare Pet Clinic</p>
        <a href="<?php echo base_url('Auth/Dashboard')?>" class="icon-a"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;Dashboard</a>
        <a href="<?php echo base_url('Auth/Appointment')?>" class="icon-a"><i class="fa fa-stethoscope"></i>&nbsp;&nbsp;Appointment</a>
        <a href="#" class="icon-a"><i class="far fa-folder-open"></i>&nbsp;&nbsp;Pre-Assessment</a>
        <a href="#" class="icon-a"><i class="fas fa-folder-open"></i>&nbsp;&nbsp;Consultation</a>
        <a href="#" class="icon-a"><i class="fas fa-paw"></i>&nbsp;&nbsp;Pet Information</a>
        <a href="#" class="icon-a"><i class="fa fa-user"></i>&nbsp;&nbsp;Accounts</a>
        <a href="<?php echo base_url('Auth/logout') ?>" class="icon-a"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Logout</a>
    </div>

                
            <div id="main">

                <div class="head">
                    <div class="col-div-6">
                        <span style="font-size:25px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
                        <span style="font-size:25px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
                    </div>
                </div>
            </div>

        <?php
            if($this->session->flashdata('insert_save_response') === TRUE)
            {
                echo '<div class="alert alert-custom  fade in alert-dismissable show" role="alert">
                             You have Succesfully Created an Appointment!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
            if($this->session->flashdata('insert_save_response') === FALSE)
            { 
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                             An error Occur. Please Try Again!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
        ?>
            <div class="Add_Appoint">
                <button type="button" id="btnadd" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#Appointment_add">
              + Add Appointment
            </button>
            </div>

<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Owner_Name</th>
    <th>Appoinment_Date</th>
    <th>Appointment_Time</th>
    <th>Email_address</th>
  </tr>
  <tbody>
    <pre>
    <?php

        

    ?>
  </pre>
  </tbody>
</table>





<!-- Modal -->
    <div class="modal fade" id="Appointment_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Appointment Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <?php echo form_open('Auth/Appointment_add');?>
                    <div id="petstit" class="far fa-user-circle"> Pet Owner's Information</div>
                <div class="legend"></div>

            <label for="Oname" class="Oname">Owner's Name:</label>
            <input type="Text" id="Oname" name="Owner_Name" placeholder="Surname, First name, MI">

            <label for="Date" class="ApDate">Appoinment Date:</label>
            <input type="date" id="Date" name="Appoinment_Date"><br>

            <span class="AppT">Appointment Time:<input type="time" class="form-controlmb-2" placeholder="AppointmentTime" name="Appointment_Time"></span>

            <label for="Eadd">Email Address:</label>
            <input type="Text" id="Eadd" name="Email_address"><br>

            <label for="Paddress" class="Padd">Provincial Address:</label>
            <input type="Text" id="Paddress" name="Provincial_Add"><br>

            <label for="Cnum" class="Cnum">Contact Number:</label>
            <input type="number" id="Cnum" name="Contact_num"><br>

            <div class="legend"></div>
            <div id="petstit" class="fas fa-paw"> Pets Information</div>
            <div class="legend"></div>

            <label for="Pname" class="Pname">Pet's Name:</label>
            <input type="Text" id="Pname" name="Pet_Name" placeholder="Pet Name">

            <label for="RoA" id="RoA">Reason of Appointment:</label>
            <select id="RoaSelect" name="Reason_of_Appointment">
                <option value="Vaccination">Vaccination</option>
                <option value="Pet Surgery">Pet Surgery</option>
                <option value="Consultation">Consultation</option>
                <option value="Check Up">Check Up</option>
            </select><br>

            <label for="Number" class="Other">Other Reasons:</label><br>
            <textarea name="Other_Reasons" id="Other" rows="3" cols="100" placeholder="Enter Other Reasons "></textarea>
    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="save post" name="save">Save Appointment</button>
        
          </div>
          <?php echo form_close();?>
        </div>
      </div>
  </div>
  




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

   $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '5px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '10px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>
     <script type="text/javascript">


<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('wrong')){  ?>
    toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>

<?php
    $this->session->unset_userdata ( 'success' ); ?>
    
    <?php
    $this->session->unset_userdata ( 'wrong' ); ?>

</script>
</body>
</html>