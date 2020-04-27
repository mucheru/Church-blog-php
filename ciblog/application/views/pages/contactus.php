 <link rel ="stylesheet" href ="<?php echo base_url(); ?>assets/css/contactus.css">
 
<?php echo validation_errors(); ?>  

<h2 class="text-center">Contact Form</h2>
<div class="row">
<div class="col-md-4  col-md-offset-4">


  <?php echo form_open('index.php/Email_controller/send_mail'); ?>

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" name="firstname" placeholder="first name">
    </div>

  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="lastname" placeholder="last name">
    </div>

<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="Email"> 
</div>
    
  <div class="form-group">
    <label for="subject">Subject</label>
    <textarea  name="subject" class="form-control" placeholder="message" style="height:200px"></textarea>
    </div>

<button type="submit" class ="btn btn-primary btn-block">Submit</button>
<?php echo form_close(); ?>
