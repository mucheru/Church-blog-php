 <link rel ="stylesheet" href ="<?php echo base_url(); ?>assets/css/login.css">

<?php echo form_open('index.php/users/login'); ?>
<div class="row">
<div class="col-md-4  col-md-offset-4">
<h1 class="text-center"><?php echo $title; ?></h1>
<div class="form-group">
<input type="text" name="username" class="form-control" placeholder="EnterUsername" required autofocus>
</div>

<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Enter password" required autofocus>
</div>
<button type="submit" class="btn btn-primary btn-block">Login</button>
</div>
</div>
<?php echo form_close(); ?>