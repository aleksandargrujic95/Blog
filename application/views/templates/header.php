<!DOCTYPE html>
<html>
<head>
	<title>ciblog</title>
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/style.css">
  <script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url();?>posts">Posts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')) : ?>
        <li style="padding-right: 10px;"><a href="<?php echo base_url(); ?>users/login">Login</a></li>
        <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
      <?php endif; ?>
      <?php if($this->session->userdata('logged_in')) : ?>
        <li style="padding-right: 10px;"><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
      <?php endif; ?>
    </ul>
  </div>
  </div>
</nav>
<br><br>
<div class="container">
  <!-- Messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?= '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?= '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>

	
