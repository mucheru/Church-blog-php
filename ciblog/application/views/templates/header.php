<html>
<head>
<title>Reedemed Gospel church Kitale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel ="stylesheet" href ="<?php echo base_url(); ?>assets/css/style.css%20">
  <script src="http://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Reedemed church</a> </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home </a></li>
          <li><a href="/ciblog/index.php/about">About Us</a></li>
          
        </li>
        <li><a href="<?php echo base_url(); ?>index.php/contactus">Contact Us</a></li>
        <li><a href="/ciblog/index.php/posts">Church Notices</a></li>
      </ul>

<?php if(!$this->session->userdata('logged_in')) : ?>

<ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>index.php/users/login">Log In</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>index.php/users/register">Register user</a></li>
      </ul>

<?php endif; ?>


      <?php if($this->session->userdata('logged_in')) : ?>
      <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>index.php/posts/create">Create Post</a></li>
      </ul>

<ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>index.php/users/logout">Log out</a></li>
      </ul>
    <!-  <ul class="nav navbar-nav navbar-right">
     <!-     <li> <!<a href="#">< <!span class="glyphicon glyphicon-log-in"><!</span><! Login</a></li>
     <!- </ul>

<?php endif; ?>


      </ul>
    </div>
  </div>
</nav>
<div class "container">

<!--Flass messages -->

<?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
  <?php endif; ?>


  <?php if($this->session->flashdata('post_created')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
  <?php endif; ?>


  <?php if($this->session->flashdata('post_updated')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_deleted')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')): ?>
  <?php echo '<p class ="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedin')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
  <?php endif; ?>