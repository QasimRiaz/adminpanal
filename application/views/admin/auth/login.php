<div class="login-box" style="margin-top:5%;margin-bottom:5%;">
  <div class="login-logo" >
    <img src="<?= base_url()?>assets/img/sitelogo.jpeg" width="150">
  <!-- <h2><a href="<?= base_url('admin'); ?>"><?= $this->general_settings['application_name']; ?></a></h2> -->
  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?= trans('signin_to_start_your_session') ?></p>

      <?php $this->load->view('admin/includes/_messages.php') ?>
      
      <?php echo form_open(base_url('admin/auth/login'), 'class="login-form" '); ?>

        <div class="form-group has-feedback">
          <input type="text" name="username" id="name" class="form-control" placeholder="<?= trans('username') ?>" >
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="<?= trans('password') ?>" >
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
              <input type="checkbox"> <?= trans('remember_me') ?><br>
              <a href="<?= base_url('admin/auth/register'); ?>">SignUp</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat" value="<?= trans('signin') ?>">
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
      <a href="<?= base_url('admin/auth/forgot_password'); ?>"><?= trans('i_forgot_my_password') ?></a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->