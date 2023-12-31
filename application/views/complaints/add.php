  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              New Work Order</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('complaints'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Work Orders</a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            
            <div class="col-md-12">
              <div class="box">
                <!-- form start -->
                <div class="box-body">

                  <!-- For Messages -->
                  <?php $this->load->view('includes/_messages.php') ?>

                
                  <?php echo form_open_multipart(base_url('complaints/add')); ?>	

                  <div class="row">

                  <div class="col-md-12"><h5>Author Information</h5></div>
                  
                  </div>
                  <br>

                  <div class="row">
                
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="reportedby" class=" control-label">Reported By</label>
                              <input type="text" name="reportedby" class="form-control" id="reportedby" value="<?php echo $loggedInuser_info[0]['firstname'].' '.$loggedInuser_info[0]['lastname'];?>" required>
                            </div>
                        </div>
                        </div>
                  <div class="row">      
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="designation" class=" control-label">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation" value="<?php echo $loggedInuser_info[0]['designation'];?>" required>
                          </div>
                        </div>

                  </div>

                  <div class="row">
                      <div class="col-md-12">
                            <div class="form-group">
                              <label for="mobileno" class=" control-label">Mobile No</label>
                              <input type="text" name="mobileno" class="form-control" id="mobileno" value="<?php echo $loggedInuser_info[0]['mobile_no'];?>" required>
                            </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                            <div class="form-group">
                              <label for="mobileno" class=" control-label">Company Name</label>
                              <input type="text" name="compnay_name" class="form-control" id="compnay_name" placeholder="Company Name" value="<?php echo $loggedInuser_info[0]['company_name'];?>" required>
                            </div>
                      </div>
                  </div>
                  <hr>
                <div class="row">

                <div class="col-md-12"><h5>Location</h5></div>

                </div>
                <br>

                <div class="row">
                
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="loction" class=" control-label">Site</label>
                              <select class="form-control select2 eg-select2" name="loction" id="loction" data-toggle="tooltip" placeholder="Select Site" required="true">
                                    <option value="" ></option>
                                    <option value="HQ" >HQ</option>
                                    <option value="Acc">Acc</option>
                                    <option value="Out Stations">Out Stations</option>
                                  
                                </select>
                            </div>
                        </div>
                        </div>
                  <div class="row">       
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="subloction" class=" control-label">Location</label>
                              <select disabled class="form-control select2 eg-select2" name="subloction" id="subloction" data-toggle="tooltip" placeholder="Select Location" required="true">
                                   
                                  
                                </select>
                            </div>
                        </div>

                        

                  </div>

             
                  <div class="row">

                  <div class="col-md-12">
                            <div class="form-group">
                              <label for="subloction2" class=" control-label">Sub Location</label>
                              <select disabled class="form-control select2 eg-select2" id="subloction2" name="subloction2" data-toggle="tooltip" placeholder="Select Sub Location" required="true">
                                   
                                  
                                </select>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="loctiondetails" class=" control-label">Locations Details</label>
                              <textarea  name="loctiondetails" rows="2" class="form-control" id="loctiondetails" ></textarea>

                            </div>
                        </div>
                        </div>
                  <div class="row"> 
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="workorderdetails" class=" control-label">Work Order Details</label>
                                
                              <textarea  name="workorderdetails" rows="2" class="form-control" id="workorderdetails" required="true"></textarea>
                                </select>
                            </div>
                        </div>

                        

                  </div>
              
                  <hr>
                <div class="row">

                <div class="col-md-12"><h5>Work Order Details </h5></div>

                </div>
                <br>

                <div class="row"  <?php if($loggedInuser_info[0]['admin_role_id'] == 2){ echo "style='display:none;'";} ?> >
          
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="comstatus" class=" control-label">Status</label>
                          <select class="form-control select2 eg-select2" name="comstatus" id="comstatus" data-toggle="tooltip" placeholder="Status" required="true">
                                <option value="open" <?php if($loggedInuser_info[0]['admin_role_id'] == 2){ echo "selected='true'";} ?> >Open</option>
                                <option value="inprogress" >In Progress</option>
                                <option value="resolved">Resolved</option>
                                <option value="closed">Closed</option>
                                <option value="onhold">On Hold</option>
                                <option value="reopened">Reopened</option>
                                <option value="pendingreview">Pending Review</option>
                              
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="comtype" class=" control-label">Complaint Type</label>
                          <select class="form-control select2 eg-select2" name="comtype" id="comtype" data-toggle="tooltip" placeholder="Type" required="true">
                                <option value="urgent" >Urgent</option>
                                <option value="normal">Normal</option>
                                <option value="planned">Planned</option>
                               
                            </select>
                        </div>
                    </div>

                 </div>
                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="date" class=" control-label">Date</label>
                          <input type="datetime-local"  value="<?php echo date('Y-m-d\TH:i'); ?>" name="date" class="form-control" id="date" placeholder="" required="true">
                        </div>
                    </div>
                    </div>
                  <div class="row"> 
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="tag" class=" control-label">TAG</label>
                          

                          <select class="form-control select2 eg-select2" id="tag" data-toggle="tooltip" name="tag" placeholder="Type" required="true" multiple="multiple">
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
                
                    
                 </div>
                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="issuepicture" class=" control-label">Upload Picture</label>
                          
                          <input type="file" name="issuepicture" accept=".png, .jpg, .jpeg, .gif, .svg" required="true">
                           <p><small class="text-success"><?= trans('allowed_types') ?>: gif, jpg, png, jpeg</small></p>
                          </div>
                          </div>
                          

                
                    
                    
                 </div>

                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="detail" class=" control-label">Issue Detail</label>
                          <textarea  name="detail" rows="5" class="form-control" id="detail" required="true"></textarea>
                        </div>
                    </div>

                    
                 </div>
                 
                 <hr>
                
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="Add Work Order" class="btn btn-primary pull-right">
                      
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


  <script>
  
   var listofHQ = {
    
    sublocationOurstation: {
        zabeelhvac: 'ZABEEL',
        alminacivil: 'AL MINA',
        airportgate5fire: 'AIRPORT GATE 5',
        jafzagate5pumps: 'JAFZA GATE 5',
        alkhailgateelectrical: 'AL KHAIL GATE',
        sobhamechanical: 'SOBHA',
        seikshuaibcarpenter: 'SEIK SHUAIB',
        alkhawaneejplumbing: 'AL KHAWANEEJ',
        alsufouh: 'AL SUFOUH',
        jabelali: 'JABEL ALI',
        dubaiinvest: 'DUBAI INVEST',
        lehab: 'LEHBAB',
        alwarqa: 'AL WARQA',
        lusaily: 'LUSAILY',
        muhaisnah: 'MUHAISNAH',
        jafzagate3: 'JAFZA GATE3',
        rashidstore: 'RASHID STORE',
        baniyas: 'BANIYAS',
        almamzar: 'AL MAMZAR',
        portsaeed: 'PORT SAEED',
        alsalal: 'AL SALAL',
        hatta: 'HATTA',
        qudra: 'QUDRA'
    },
    sublocationAcc: {
        blockA: 'Block-A',
        blockB: 'Block-B',
        blockC: 'Block-C',
        blockD: 'Block-D',
        blockE: 'Block-E'
    },
   sublocationHQ: {
        building1: 'Building-1',
        building2: 'Building-2',
        building3: 'Building-3',
        building4: 'Building-4',
        building5: 'Building-5'
    },
    sublocation2: {
        groundfloor: 'Ground Floor',
        firstfloor: '1st Floor',
        secondndfloor: '2nd Floor',
        thirdfloor: '3rd Floor',
        roof: 'Roof'
    },
    complainttype:{
        HVAC: 'HVAC',
        CIVIl: 'CIVIl',
        FIRE: 'FIRE',
        PUMPS: 'PUMPS',
        ELECTRICAL: 'ELECTRICAL',
        MECHANICAL: 'MECHANICAL',
        CARPANTER: 'CARPANTER',
        PLUMBING: 'PLUMBING',
        LIFT: 'LIFT'
    }
};
  
  
jQuery(document).ready(function () {

 

$("#workorders").addClass("menu-open");
$("#add-workorders").addClass("active");







jQuery("#loction").on("change", function () {


  var selectedfiledID = jQuery(this).val();
  jQuery("#subloction").empty();
  jQuery("#subloction2").empty();


  if(selectedfiledID == "HQ"){


    jQuery.each(listofHQ.sublocationHQ, function (index, value) {
        var option = new Option(value, index, false, false);
        jQuery("#subloction").append(option);
    });

    jQuery.each(listofHQ.sublocation2, function (index, value) {
        var option = new Option(value, index, false, false);
      
        jQuery("#subloction2").append(option);
    });


    jQuery("#subloction").removeAttr("disabled");
    jQuery("#subloction2").removeAttr("disabled");


  }else if(selectedfiledID == "Out Stations"){

    
    jQuery.each(listofHQ.sublocationOurstation, function (index, value) {
        var option = new Option(value, index, false, false);
        jQuery("#subloction").append(option);

    });

    jQuery("#subloction").removeAttr("disabled");
    jQuery("#subloction2").removeAttr("required");


  }else{

  
    jQuery.each(listofHQ.sublocationAcc, function (index, value) {
        var option = new Option(value, index, false, false);
        jQuery("#subloction").append(option);
    });
      jQuery.each(listofHQ.sublocation2, function (index, value) {
        var option = new Option(value, index, false, false);
       
        jQuery("#subloction2").append(option);
    });

    jQuery("#subloction").removeAttr("disabled");
    jQuery("#subloction2").removeAttr("disabled");



  }


  jQuery("#subloction").removeAttr("disabled");
  jQuery("#subloction2").removeAttr("disabled");



});

});
  
  </script>