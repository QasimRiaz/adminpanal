  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              Add New Complaint</h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/complaints'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Complaints</a>
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

                  <?php echo form_open(base_url('admin/complaints/add'), 'class="form-horizontal"');  ?> 

                  <div class="row">

                  <div class="col-md-12"><h5>Complaint Author Information</h5></div>
                  
                  </div>
                  <br>

                  <div class="row">
                
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="reportedby" class=" control-label">Reported By</label>
                              <input type="text" name="reportedby" class="form-control" id="reportedby" placeholder="">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="designation" class=" control-label">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation" placeholder="">
                          </div>
                        </div>

                  </div>

                  <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="mobileno" class=" control-label">Mobile No</label>
                              <input type="text" name="mobileno" class="form-control" id="mobileno" placeholder="">
                            </div>
                      </div>
                  </div>
                  <hr>
                <div class="row">

                <div class="col-md-12"><h5>Location</h5></div>

                </div>
                <br>

                <div class="row">
                
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="loction" class=" control-label">Location</label>
                              <select class="form-control select2 eg-select2" id="loction" data-toggle="tooltip" placeholder="Select Location" required="true">
                                    <option value="" ></option>
                                    <option value="HQ" >HQ</option>
                                    <option value="Acc">Acc</option>
                                    <option value="Out Stations">Out Stations</option>
                                  
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="subloction" class=" control-label">Sub Location</label>
                              <select disabled class="form-control select2 eg-select2" id="subloction" data-toggle="tooltip" placeholder="Select Sub Location" required="true">
                                   
                                  
                                </select>
                            </div>
                        </div>

                        

                  </div>

             
                  <div class="row">

                  <div class="col-md-6">
                            <div class="form-group">
                              <label for="subloction2" class=" control-label">Sub Location 2</label>
                              <select disabled class="form-control select2 eg-select2" id="subloction2" data-toggle="tooltip" placeholder="Select Sub Location 2" required="true">
                                   
                                  
                                </select>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="loctiondetails" class=" control-label">Locations Details</label>
                              <textarea  name="loctiondetails" rows="2" class="form-control" id="loctiondetails" ></textarea>

                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="workorderdetails" class=" control-label">Work Order Details</label>
                                
                              <textarea  name="workorderdetails" rows="2" class="form-control" id="workorderdetails" ></textarea>
                                </select>
                            </div>
                        </div>

                        

                  </div>
              
                  <hr>
                <div class="row">

                <div class="col-md-12"><h5>Complaint Details </h5></div>

                </div>
                <br>

                <div class="row">
          
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="comstatus" class=" control-label">Status</label>
                          <select class="form-control select2 eg-select2" id="comstatus" data-toggle="tooltip" placeholder="Status" required="true">
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
                          <label for="comtype" class=" control-label">Complaint Type</label>
                          <select class="form-control select2 eg-select2" id="comtype" data-toggle="tooltip" placeholder="Type" required="true">
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
                
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="date" class=" control-label">Date</label>
                          <input type="datetime-local"  value="<?php echo date('Y-m-d\TH:i'); ?>" name="date" class="form-control" id="date" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="tag" class=" control-label">TAG</label>
                          <input type="text" name="tag" class="form-control" id="tag" placeholder="">
                        </div>
                    </div>
                
                    
                 </div>
                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="issuepicture" class=" control-label">Upload Picture</label>
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="issuepicture">
                          <label class="custom-file-label" for="issuepicture">Choose file</label>
                          </div>
                          </div>
                          </div>
                          

                
                    
                    
                 </div>

                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="issuepicture" class=" control-label">Issue Detail</label>
                          <textarea  name="issuepicture" rows="5" class="form-control" id="detail" ></textarea>
                        </div>
                    </div>

                    
                 </div>
                 
                 <hr>
                
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="Add Complaints" class="btn btn-primary pull-right">
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
        zabeelhvac: 'ZABEEL HVAC',
        alminacivil: 'AL MINA CIVIl',
        airportgate5fire: 'AIRPORT GATE 5 FIRE',
        jafzagate5pumps: 'JAFZA GATE 5 PUMPS',
        alkhailgateelectrical: 'AL KHAIL GATE ELECTRICAL',
        sobhamechanical: 'SOBHA MECHANICAL',
        seikshuaibcarpenter: 'SEIK SHUAIB CARPANTER',
        alkhawaneejplumbing: 'AL KHAWANEEJ PLUMBING',
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
        console.log(option);
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
        console.log(option);
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