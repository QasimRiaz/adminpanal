<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($title)? $title.' - ' : 'Title -' ?> <?= $this->general_settings['application_name']; ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.jpg">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DropZone -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/dropzone/dropzone.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/select2/select2.css">

</head>
<style>

  .bg-cover-bt{


    background-color: #fdf6e4;
    
  }


</style>

<body class="hold-transition sidebar-mini <?=  (isset($bg_cover)) ? 'bg-cover-bt' : '' ?>">

<!-- Main Wrapper Start -->
<div class="wrapper">

  <!-- Navbar -->

  <?php if(!isset($navbar)): ?>

  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url() ?>/admin/general_settings/" class="nav-link" target="_blank"><?= trans('settings') ?></a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><?= trans('contact') ?></a>
      </li> 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('admin/auth/logout') ?>" class="nav-link"><?= trans('logout') ?></a>
      </li> -->
    </ul>
    

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Languages -->
       <?php  $languages = get_language_list(); ?>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="Languages">
          <i class="fa fa-cog fa-2x"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
        <a href="<?= base_url() ?>/admin/profile/" class="nav-link">
            <i class="fa fa-user mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>/admin/change_pwd/" class="nav-link">
            <i class="fa fa-key mr-2"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>/admin/auth/logout" class="nav-link">
            <i class="fa fa-sign-out mr-2"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
        <a href="<?= base_url() ?>/admin/general_settings/" class="nav-link">
            <i class="fa fa-cogs mr-2"></i> <?= trans('settings') ?>
          </a>
          <div class="dropdown-divider"></div>
          
         
      </li> 
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      
      
    </ul> 
  </nav>

  <?php endif; ?>

  <!-- /.navbar -->


  <!-- Sideabr -->

  <?php if(!isset($sidebar)): ?>

  <?php $this->load->view('admin/includes/_sidebar'); ?>

  <?php endif; ?>

  <!-- / .Sideabr -->
