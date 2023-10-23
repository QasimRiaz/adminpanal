<div class="form-background"> 
  <div class="register-box">
  <div class="login-logo" >
    <img src="<?= base_url()?>assets/img/sitelogo.jpeg" width="150">
  <!-- <h2><a href="<?= base_url('admin'); ?>"><?= $this->general_settings['application_name']; ?></a></h2> -->
  </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"><?= trans('register_new_membership') ?></p>

        <?php $this->load->view('includes/_messages.php') ?>

        <?php echo form_open(base_url('auth/register'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
             <input type="text" name="username" id="name" class="form-control" placeholder="<?= trans('username') ?>" required>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="firstname" id="firstname"  class="form-control" placeholder="<?= trans('firstname') ?>" required>
          </div>
          <div class="form-group has-feedback">
           <input type="text" name="lastname" id="lastname" class="form-control" placeholder="<?= trans('lastname') ?>" required>
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="email" id="email" class="form-control" placeholder="<?= trans('email') ?>" required>
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" required>
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required>
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="<?= trans('mobile_no') ?>" required>
          </div>
          <div class="form-group has-feedback">
             <input type="password" name="password" id="password" class="form-control" placeholder="<?= trans('password') ?>" required>
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="<?= trans('confirm') ?>" required>
          </div>
          <div class="row">
            <div class="col-8">
            <a href="<?= base_url('auth/login'); ?>" class="text-center"><?= trans('i_already_have_membership') ?></a>
            </div>
           
            <!-- /.col -->
            <div class="col-4">
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat" value="<?= trans('register') ?>">
            </div>
            <!-- /.col -->
          </div>
        <?php echo form_close(); ?>

       
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
