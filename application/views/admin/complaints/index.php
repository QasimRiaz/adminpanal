<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
         <!-- For Messages -->
        <?php $this->load->view('admin/includes/_messages.php') ?>
        <div class="card" >
        <div class="card-body">
                <div class="d-inline-block">
                  <h3 class="card-title">
                    <i class="fa fa-list"></i>
                    Work Orders
                  </h3>
              </div></div>
        <div class="card" style="display:none;">
            <div class="card-body">
                <div class="d-inline-block">
                  <h3 class="card-title">
                    <i class="fa fa-list"></i>
                    Work Orders
                  </h3>
              </div>
              <div class="d-inline-block float-right">
                
              </div>
            </div>
            <div class="card-body">
                <?php echo form_open("/",'class="filterdata"') ?>    
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="type" class="form-control" id="comtype" onchange="filter_data()" placeholder="Work Orders Type">

                                <option value=""></option>

                                <option value="HVAC" >HVAC</option>
                                <option value="CIVIl">CIVIl</option>
                                <option value="FIRE">FIRE</option>
                                <option value="PUMPS">PUMPS</option>
                                <option value="ELECTRICAL">ELECTRICAL</option>
                                <option value="MECHANICAL">MECHANICAL</option>
                                <option value="CARPANTER">CARPANTER</option>
                                <option value="PLUMBING">PLUMBING</option>
                                <option value="LIFT">LIFT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="status" id="status" class="form-control" onchange="filter_data()" placeholder="Work Orders Status">

                                <option value=""></option>

                                <option value="open" >Open</option>
                                <option value="inprogress" >In Progress</option>
                                <option value="resolved">Resolved</option>
                                <option value="closed">Closed</option>
                                <option value="onhold">On Hold</option>
                                <option value="reopened">Reopened</option>
                                <option value="pendingreview">Pending Review</option>
                              
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="keyword" class="form-control"  placeholder="<?= trans('search_from_here') ?>..." onkeyup="filter_data()" />
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?> 
            </div> 
        </div>
    </section>


    <!-- Main content -->
    <section class="content mt10">
    	<div class="card">
    		<div class="card-body">
               <!-- Load Admin list (json request)-->
               <div class="data_container"><div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Action</th>
                <th>Reported By</th>
                <th>Designation</th>
                <th>Mobile No</th>
                <th>Site</th>
                <th>Location</th>
                <th>Sub Location</th>
                <th>Locations Details</th>
                <th>Work Order Details</th>
                <th>Status</th>
                <th>Work Order Type</th>
                <th>Date</th>
                <th>TAG</th>
                <th>Picture</th>
                <th>Issue Detail</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $index=>$row): ?>
            <tr>
                <td style="width:100px">
                    <a href="<?= base_url("admin/complaints/edit/".$row['ID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/complaints/delete/".$row['ID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
                <td>
					<?=$row['reportedby']?> 
                    
                </td>
                <td>
                    <?=$row['designation']?>
                </td> 
                <td>
					<?=$row['mobileno']?>
                </td>
                <td>
                    <?=$row['loction']?>
                </td> 
                <td>
                    <?=$row['subloction']?>
                </td>
                <td>
                    <?=$row['subloction2']?>
                </td>
                <td>
                    <?=$row['loctiondetails']?>
                </td>
                <td>
                    <?=$row['workorderdetails']?>
                </td>
                <td>
                    <?=$row['comstatus']?>
                </td>
                <td>
                    <?=$row['comtype']?>
                </td>
                <td>
                    <?=$row['date']?>
                </td>
                <td>
                    <?=$row['tag']?>
                </td>
                <td>
                    <?=$row['issuepicture']?>
                </td>
                <td>
                    <?=$row['detail']?>
                </td>
                
                
               
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div></div>
           </div>
       </div>
    </section>
    <!-- /.content -->
</div>



<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>


<!-- <script>
//------------------------------------------------------------------
function filter_data()
{
$('.data_container').html('<div class="text-center"><img src="<?=base_url('assets/dist/img')?>/loading.png"/></div>');
$.post('<?=base_url('admin/admin/filterdata')?>',$('.filterdata').serialize(),function(){
	$('.data_container').load('<?=base_url('admin/complaints/list_data')?>');
});
}
//------------------------------------------------------------------
function load_records()
{
$('.data_container').html('<div class="text-center"><img src="<?=base_url('assets/dist/img')?>/loading.png"/></div>');
$('.data_container').load('<?=base_url('admin/complaints/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
$.post('<?=base_url("admin/complaints/change_status")?>',
{
    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
	id : $(this).data('id'),
	status : $(this).is(':checked')==true?1:0
},
function(data){
	$.notify("Status Changed Successfully", "success");
});
});
</script> -->

<script>

jQuery(document).ready(function () {

 

$("#workorders").addClass("menu-open");
$("#list-workorders").addClass("active");


});
  $(function () {
    $("#example1").DataTable({
        columnDefs: [{ width: 100, targets: 0 }],
        fixedColumns: true,
        scrollX: true
      
    });
  });

</script> 
