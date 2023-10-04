  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_page') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/managecontent'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('pageslist') ?></a>
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

                  <?php echo form_open(base_url('admin/managecontent/add'), 'class="form-horizontal"');  ?> 

                  <div class="form-group">
                           <label class="control-label">Page Banner</label><br/>
                           
                           <input type="file" name="post_excerpt" accept=".png, .jpg, .jpeg, .gif, .svg">
                           <p><small class="text-success"><?= trans('allowed_types') ?>: gif, jpg, png, jpeg</small></p>
                          
                       </div>


                  <div class="form-group">
                    <label for="post_title" class="col-md-12 control-label"><?= trans('post_title') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="post_title" class="form-control" id="post_title" placeholder="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="post_content" class="col-md-12 control-label"><?= trans('post_content') ?></label>

                    <div class="col-md-12">
                    <textarea name="post_content" class="textarea form-control" rows="10"></textarea>
                    </div>
                  </div>
                 

                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_page') ?>" class="btn btn-primary pull-right">
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