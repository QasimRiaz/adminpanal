  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-pencil"></i>
              <?= trans('edit_menu') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/managemenu'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('menu_list') ?></a>
          </div>
        </div>
        <div class="card-body">   
           <!-- For Messages -->
            <?php $this->load->view('admin/includes/_messages.php') ?>
              
            <?php echo form_open(base_url('admin/managemenu/edit/'.$admin['ID']), 'class="form-horizontal"' )?> 
              <div class="form-group">
                <label for="menuname" class="col-md-2 control-label"><?= trans('menuname') ?></label>

                <div class="col-md-12">
                  <input type="text" name="menuname" value="<?= $admin['post_title']; ?>" class="form-control" id="menuname" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="menuurl" class="col-md-2 control-label"><?= trans('menuurl') ?></label>

                <div class="col-md-12">
                  <input type="text" name="menuurl" value="<?= $admin['post_content']; ?>" class="form-control" id="menuurl" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="menuorder" class="col-md-2 control-label"><?= trans('menuorder') ?></label>

                <div class="col-md-12">
                  <input type="text" name="menuorder" value="<?= $admin['menu_order']; ?>" class="form-control" id="menuorder" placeholder="">
                </div>
              </div>

              
              <div class="form-group">
                <label for="role" class="col-md-2 control-label"><?= trans('select_status') ?></label>

                <div class="col-md-12">
                  <select name="status" class="form-control">
                    <option value=""><?= trans('select_status') ?></option>
                    <option value="1" <?= ($admin['post_status'] == 1)?'selected': '' ?> ><?= trans('active') ?></option>
                    <option value="0" <?= ($admin['post_status'] == 0)?'selected': '' ?>><?= trans('inactive') ?></option>
                  </select>
                </div>
              </div>

           
                  
             
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="Update Menu" class="btn btn-primary pull-right">
                  </div>
                </div>
                <?php echo form_close(); ?>
              </div>
              <!-- /.box-body -->
            </div>
    </section>
  </div>