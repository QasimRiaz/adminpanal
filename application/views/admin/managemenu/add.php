  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_menu') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/managemenu'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('menu_list') ?></a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!-- form start -->
                <div class="box-body">

                  <!-- For Messages -->
                  <?php $this->load->view('admin/includes/_messages.php') ?>

                  <?php echo form_open(base_url('admin/managemenu/add'), 'class="form-horizontal"');  ?> 
                  <div class="form-group">
                    <label for="menuname" class="col-md-12 control-label"><?= trans('menuname') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="menuname" class="form-control" id="menuname" placeholder="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="menuurl" class="col-md-12 control-label"><?= trans('menuurl') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="menuurl" class="form-control" id="menuurl" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="menuorder" class="col-md-12 control-label"><?= trans('menuorder') ?></label>

                    <div class="col-md-12">
                      <input type="number" min="0" name="menuorder" class="form-control" id="menuorder" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                <label for="role" class="col-md-2 control-label"><?= trans('select_status') ?></label>

                <div class="col-md-12">
                  <select name="status" class="form-control">
                    <option value=""><?= trans('select_status') ?></option>
                    <option value="1"  ><?= trans('active') ?></option>
                    <option value="0" ><?= trans('inactive') ?></option>
                  </select>
                </div>
              </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_menu') ?>" class="btn btn-primary pull-right">
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section> 
  </div>