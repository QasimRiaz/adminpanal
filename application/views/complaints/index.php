<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
         <!-- For Messages -->
        <?php $this->load->view('includes/_messages.php') ?>
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
                
                <th>Reported By</th>
                <th>Designation</th>
                <th>Mobile No</th>
                <th>Company Name</th>
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
                <?php  if($loggedInuser_info[0]['admin_role_id'] == 1) { ?>
                <th>Action</th>
                <?php } ?>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $index=>$row): ?>

               <?php  if($loggedInuser_info[0]['company_name'] == $row['compnay_name'] || $loggedInuser_info[0]['admin_role_id'] == 1) { ?>
            <tr>
                
                <td>
					
                    <?php if(isset($row['reportedby'])){ echo $row['reportedby'];}?>
                    
                </td>
                <td>

                <?php if(isset($row['designation'])){ echo $row['designation'];}?>
                   
                </td> 
                <td>
               
                <?php if(isset($row['mobileno'])){ echo $row['mobileno'];}?>
					
                </td>
                <td>
                
                <?php if(isset($row['compnay_name'])){ echo $row['compnay_name'];}?>
                    
                </td> 
                <td>
                
                <?php if(isset($row['loction'])){ echo $row['loction'];}?>
                    
                </td> 
                <td>
                
                <?php if(isset($row['subloction'])){ echo $row['subloction'];}?>
                    
                </td>
                <td>
                
                <?php if(isset($row['subloction2'])){ echo $row['subloction2'];}?>
                    
                </td>
                <td>
                 
                <?php if(isset($row['loctiondetails'])){ echo $row['loctiondetails'];}?>
                    
                </td>
                <td>
              
                <?php if(isset($row['workorderdetails'])){ echo $row['workorderdetails'];}?>
                    
                </td>
                <td>
                
                <?php if(isset($row['comstatus'])){ 
                    
                    
                    
                    if($row['comstatus'] == "open"){

                        echo '<button class="btn btn-xs btn-danger">Open</button>';

                    }elseif($row['comstatus'] == "inprogress"){

                        echo '<button class="btn btn-xs btn-warning">In Progress</button>';

                    }elseif($row['comstatus'] == "resolved"){

                        echo '<button class="btn btn-xs btn-success">Resolved</button>';

                    }elseif($row['comstatus'] == "closed"){

                        echo '<button class="btn btn-xs btn-info">Closed</button>';

                    }elseif($row['comstatus'] == "onhold"){

                        echo '<button class="btn btn-xs btn-warning">On Hold</button>';

                    }elseif($row['comstatus'] == "reopened"){

                        echo '<button class="btn btn-xs btn-primary">Reopened</button>';

                    }elseif($row['comstatus'] == "pendingreview"){

                        echo '<button class="btn btn-xs btn-secondary">Pending Review</button>';

                    }
                    
                    
                    
                    }?>
                 
                </td>
                <td>
                
                <?php if(isset($row['comtype'])){ echo $row['comtype'];}?>
                   
                </td>
                <td>
                 
                <?php if(isset($row['date'])){ echo $row['date'];}?>
                   
                </td>
                <td>
                
                <?php if(isset($row['tag'])){ echo $row['tag'];}?>
                   
                </td>
                <td>
                
                <?php if(isset($row['issuepicture'])){ 
                    
                    
                
                    echo '<a href="'.base_url($row["issuepicture"]).'" target="_blank"><img src="'.base_url($row["issuepicture"]).'" width="50" class="pic"></a>';
                        
                    
                    }
                    
                    ?>
                   
                </td>
                <td>
                
                <?php if(isset($row['detail'])){ echo $row['detail'];}?>
                    
                </td>
                <?php  if($loggedInuser_info[0]['admin_role_id'] == 1) { ?>
                
                <td style="width:100px">
                    <a href="<?= base_url("complaints/edit/".$row['ID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("complaints/delete/".$row['ID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>

                <?php } ?>
               
            </tr>
            <?php } ?>
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
$.post('<?=base_url('filterdata')?>',$('.filterdata').serialize(),function(){
	$('.data_container').load('<?=base_url('complaints/list_data')?>');
});
}
//------------------------------------------------------------------
function load_records()
{
$('.data_container').html('<div class="text-center"><img src="<?=base_url('assets/dist/img')?>/loading.png"/></div>');
$('.data_container').load('<?=base_url('complaints/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
$.post('<?=base_url("complaints/change_status")?>',
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
 

</script> 

<?php  if($loggedInuser_info[0]['admin_role_id'] == 1) { ?>

<script>

$(function () {
    $("#example1").DataTable({
        columnDefs: [{ width: 100, targets: 15 }],
        
        scrollX: true
      
    });
  });

</script>
<?php }else{?>

    <script>

$(function () {
    $("#example1").DataTable({
       
       
        scrollX: true
      
    });
  });

</script>

<?php }?>
