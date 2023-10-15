<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  

$currentuserlevel = user_admin_level();


?>  


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin'); ?>" class="brand-link">
    <img src="<?= base_url($this->general_settings['favicon']); ?>" alt="Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?= $this->general_settings['application_name']; ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= ucwords($this->session->userdata('username')); ?></a>
      </div>
    </div>
                     

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <?php if($currentuserlevel == 'Admin'){ ?>
      <li id="dashboard" class="nav-item has-treeview">

        <a href="<?= base_url('admin/dashboard/'); ?>" class="nav-link">
          <i class="nav-icon fa fa-pie-chart"></i>
          <p>
            Dashboard
           
          </p>
        </a>
      </li>

      <?php } ?>
      <?php if($currentuserlevel == 'Admin'){ ?>
      <li id="users" class="nav-item ">

        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-users"></i>
          <p>
            User Management
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
     
        <ul class="nav nav-treeview">

            <li class="nav-item">
              <a id="list-user" href="<?= base_url('admin/admin/'); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>User List</p>
              </a>
            </li>

            <li  class="nav-item">
              <a id="add-user" href="<?= base_url('admin/admin/add'); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add New User</p>
              </a>
            </li>

          </ul>
         
         
        </li>
        <?php } ?>
        <?php if($currentuserlevel == 'Admin'){ ?>
        <li id="workorders" class="nav-item ">

          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-flag"></i>
            <p>
              Work Order Management
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

              <li class="nav-item">
                <a id="list-workorders" href="<?= base_url('admin/complaints/'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Work Order List</p>
                </a>
              </li>

              <li  class="nav-item">
                <a id="add-workorders" href="<?= base_url('admin/complaints/add'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add New Work Order</p>
                </a>
              </li>

            </ul>
        </li>

        <?php } ?>
        <?php if($currentuserlevel == 'Admin'){ ?>
        <li id="workorders" class="nav-item ">

              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-briefcase"></i>
                <p>
                  Inventory Management
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
        </li>
        <?php } ?>
        <?php if($currentuserlevel == 'Admin'){ ?>
        <li id="workorders" class="nav-item ">

              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-line-chart"></i>
                <p>
                  PPM Management
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
        </li>
        <?php } ?>
        <?php if($currentuserlevel == 'Admin'){ ?>
        <li id="workorders" class="nav-item ">

              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-line-chart"></i>
                <p>
                  Financial Management
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
        </li>
        <?php } ?>
        <?php if($currentuserlevel == 'Client'){ ?>

              <li id="newwork" class="nav-item has-treeview">

                <a href="<?= base_url('admin/complaints/add'); ?>" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>New Work Order</p>
                </a>

              </li>
              <li id="workorderreport" class="nav-item has-treeview">

                <a href="<?= base_url('admin/complaints/'); ?>" class="nav-link">
                  <i class="nav-icon fa fa-flag"></i>
                  <p>Track Work Order</p>
                </a>
                
              </li>
              <li id="workorderreport" class="nav-item has-treeview">

                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-file-text-o"></i>
                  <p>Work Order Reports</p>
                </a>
                
              </li>
              <li id="returnmaterial" class="nav-item has-treeview">

                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-undo"></i>
                  <p>Return Material List</p>
                </a>

              </li>
              <li id="riseacomplaint" class="nav-item has-treeview">

                <a href="#" class="nav-link">
                  <i class="fa fa-exclamation-triangle"></i>
                  <p>Rise a Complaint</p>
                </a>

              </li>

              

      <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

