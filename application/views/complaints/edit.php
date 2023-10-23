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

                
                  <?php echo form_open_multipart(base_url('complaints/edit?'.$complaints['id'])); ?>	


                  <input type="hidden" value="<?php echo $complaints['id'];?>" name="complaintID"/>

                  <div class="row">

                  <div class="col-md-12"><h5>Author Information</h5></div>
                  
                  </div>
                  <br>

                  <div class="row">
                
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="reportedby" class=" control-label">Reported By</label>
                              <input type="text" name="reportedby" class="form-control" value="<?php echo $complaints['reportedby'];?>" id="reportedby" placeholder="" required="true">
                            </div>
                        </div>
                        </div>
                  <div class="row">      
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="designation" class=" control-label">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation" value="<?php echo $complaints['designation'];?>" placeholder="" required="true">
                          </div>
                        </div>

                  </div>

                  <div class="row">
                      <div class="col-md-12">
                            <div class="form-group">
                              <label for="mobileno" class=" control-label">Mobile No</label>
                              <input type="text" name="mobileno" class="form-control" id="mobileno" value="<?php echo $complaints['mobileno'];?>" placeholder="" required="true">
                            </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                            <div class="form-group">
                              <label for="mobileno" class=" control-label">Company Name</label>
                              <input type="text" name="compnay_name" class="form-control" id="compnay_name" value="<?php if(isset($complaints['compnay_name'])){echo $complaints['compnay_name'];}?>" placeholder="Company Name" required="true">
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
                                    <option value="HQ" <?php if($complaints['loction'] == "HQ"){echo 'selected="true"';}?>>HQ</option>
                                    <option value="Acc" <?php if($complaints['loction'] == "Acc"){echo 'selected="true"';}?>>Acc</option>
                                    <option value="Out Stations" <?php if($complaints['loction'] == "Out Stations"){echo 'selected="true"';}?>>Out Stations</option>
                                  
                                </select>
                            </div>
                        </div>
                        </div>
                  <div class="row">       
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="subloction" class=" control-label">Location</label>
                              <select  class="form-control select2 eg-select2" name="subloction" id="subloction" data-toggle="tooltip" placeholder="Select Location" required="true">
                              <?php if($complaints['loction'] == "HQ"){?>

                                <option value="building1" <?php if($complaints['subloction'] == "building1"){echo 'selected="true"';}?>>Building-1</option>
                                <option value="building2" <?php if($complaints['subloction'] == "building2"){echo 'selected="true"';}?>>Building-2</option>
                                <option value="building3" <?php if($complaints['subloction'] == "building3"){echo 'selected="true"';}?>>Building-3</option>
                                <option value="building4" <?php if($complaints['subloction'] == "building4"){echo 'selected="true"';}?>>Building-4</option>
                                <option value="building5" <?php if($complaints['subloction'] == "building5"){echo 'selected="true"';}?>>Building-5</option>



                              <?php }elseif($complaints['loction'] == "Acc"){ ?>

                                <option value="blockA" <?php if($complaints['subloction'] == "blockA"){echo 'selected="true"';}?>>Block-A</option>
                                <option value="blockB" <?php if($complaints['subloction'] == "blockB"){echo 'selected="true"';}?>>Block-B</option>
                                <option value="blockC" <?php if($complaints['subloction'] == "blockC"){echo 'selected="true"';}?>>Block-C</option>
                                <option value="blockD" <?php if($complaints['subloction'] == "blockD"){echo 'selected="true"';}?>>Block-D</option>
                                <option value="blockE" <?php if($complaints['subloction'] == "blockE"){echo 'selected="true"';}?>>Block-E</option>

                              
                              
                              <?php }elseif($complaints['loction'] == "Out Stations"){ ?>

                                        <option value="zabeelhvac" <?php if($complaints['subloction'] == "zabeelhvac"){echo 'selected="true"';}?>>ZABEEL</option>
                                        <option value="alminacivil" <?php if($complaints['subloction'] == "alminacivil"){echo 'selected="true"';}?>>AL MINA</option>
                                        <option value="airportgate5fire" <?php if($complaints['subloction'] == "airportgate5fire"){echo 'selected="true"';}?>>AIRPORT GATE 5</option>
                                        <option value="jafzagate5pumps" <?php if($complaints['subloction'] == "jafzagate5pumps"){echo 'selected="true"';}?>>JAFZA GATE 5</option>
                                        <option value="alkhailgateelectrical" <?php if($complaints['subloction'] == "alkhailgateelectrical"){echo 'selected="true"';}?>>AL KHAIL GATE</option>
                                        <option value="sobhamechanical" <?php if($complaints['subloction'] == "sobhamechanical"){echo 'selected="true"';}?>>SOBHA</option>
                                        <option value="seikshuaibcarpenter" <?php if($complaints['subloction'] == "seikshuaibcarpenter"){echo 'selected="true"';}?>>SEIK SHUAIB</option>
                                        <option value="alkhawaneejplumbing" <?php if($complaints['subloction'] == "alkhawaneejplumbing"){echo 'selected="true"';}?>>AL KHAWANEEJ</option>
                                        <option value="alsufouh" <?php if($complaints['subloction'] == "alsufouh"){echo 'selected="true"';}?>>AL SUFOUH</option>
                                        <option value="jabelali" <?php if($complaints['subloction'] == "jabelali"){echo 'selected="true"';}?>>JABEL ALI</option>
                                        <option value="dubaiinvest" <?php if($complaints['subloction'] == "dubaiinvest"){echo 'selected="true"';}?>>DUBAI INVEST</option>
                                        <option value="lehab" <?php if($complaints['subloction'] == "lehab"){echo 'selected="true"';}?>>LEHBAB</option>
                                        <option value="alwarqa" <?php if($complaints['subloction'] == "alwarqa"){echo 'selected="true"';}?>>AL WARQA</option>
                                        <option value="lusaily" <?php if($complaints['subloction'] == "lusaily"){echo 'selected="true"';}?>>LUSAILY</option>
                                        <option value="muhaisnah" <?php if($complaints['subloction'] == "muhaisnah"){echo 'selected="true"';}?>>MUHAISNAH</option>
                                        <option value="jafzagate3" <?php if($complaints['subloction'] == "jafzagate3"){echo 'selected="true"';}?>>JAFZA GATE3</option>
                                        <option value="rashidstore" <?php if($complaints['subloction'] == "rashidstore"){echo 'selected="true"';}?>>RASHID STORE</option>
                                        <option value="baniyas" <?php if($complaints['subloction'] == "baniyas"){echo 'selected="true"';}?>>BANIYAS</option>
                                        <option value="almamzar" <?php if($complaints['subloction'] == "almamzar"){echo 'selected="true"';}?>>AL MAMZAR</option>
                                        <option value="portsaeed" <?php if($complaints['subloction'] == "portsaeed"){echo 'selected="true"';}?>>PORT SAEED</option>
                                        <option value="alsalal" <?php if($complaints['subloction'] == "alsalal"){echo 'selected="true"';}?>>AL SALAL</option>
                                        <option value="hatta" <?php if($complaints['subloction'] == "hatta"){echo 'selected="true"';}?>>HATTA</option>
                                        <option value="qudra" <?php if($complaints['subloction'] == "qudra"){echo 'selected="true"';}?>>QUDRA</option>

                                <?php } ?>
                                  
                                </select>
                            </div>
                        </div>

                        

                  </div>

             
                  <div class="row">

                  <div class="col-md-12">
                            <div class="form-group">
                              <label for="subloction2" class=" control-label">Sub Location</label>
                              <select  class="form-control select2 eg-select2" id="subloction2" name="subloction2" data-toggle="tooltip" placeholder="Select Sub Location" required="true">
                              <?php if($complaints['loction'] == "HQ"){?>

                                <option value="groundfloor" <?php if($complaints['subloction2'] == "groundfloor"){echo 'selected="true"';}?>>Ground Floor</option>
                                <option value="firstfloor" <?php if($complaints['subloction2'] == "firstfloor"){echo 'selected="true"';}?>>1st Floor</option>
                                <option value="secondndfloor" <?php if($complaints['subloction2'] == "secondndfloor"){echo 'selected="true"';}?>>2nd Floor</option>
                                <option value="thirdfloor" <?php if($complaints['subloction2'] == "thirdfloor"){echo 'selected="true"';}?>>3rd Floor</option>
                                <option value="roof" <?php if($complaints['subloction2'] == "roof"){echo 'selected="true"';}?>>Roof</option>


                            <?php }elseif($complaints['loction'] == "Acc"){ ?>

                              <option value="groundfloor" <?php if($complaints['subloction2'] == "groundfloor"){echo 'selected="true"';}?>>Ground Floor</option>
                                <option value="firstfloor" <?php if($complaints['subloction2'] == "firstfloor"){echo 'selected="true"';}?>>1st Floor</option>
                                <option value="secondndfloor" <?php if($complaints['subloction2'] == "secondndfloor"){echo 'selected="true"';}?>>2nd Floor</option>
                                <option value="thirdfloor" <?php if($complaints['subloction2'] == "thirdfloor"){echo 'selected="true"';}?>>3rd Floor</option>
                                <option value="roof" <?php if($complaints['subloction2'] == "roof"){echo 'selected="true"';}?>>Roof</option>


                            <?php }elseif($complaints['loction'] == "Out Stations"){ ?>


                              <?php } ?>
                                  
                                </select>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="loctiondetails" class=" control-label">Locations Details</label>
                              <textarea  name="loctiondetails" rows="2" class="form-control" id="loctiondetails"  ><?php echo $complaints['loctiondetails'];?></textarea>

                            </div>
                        </div>
                        </div>
                  <div class="row"> 
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="workorderdetails" class=" control-label">Work Order Details</label>
                                
                              <textarea  name="workorderdetails" rows="2" class="form-control" id="workorderdetails" required="true" ><?php echo $complaints['workorderdetails'];?></textarea>
                                </select>
                            </div>
                        </div>

                        

                  </div>
              
                  <hr>
                <div class="row">

                <div class="col-md-12"><h5>Work Order Details </h5></div>

                </div>
                <br>

                <div class="row">
          
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="comstatus" class=" control-label">Status</label>
                          <select class="form-control select2 eg-select2" name="comstatus" id="comstatus" data-toggle="tooltip" placeholder="Status" required="true">
                                <option value="open" <?php if($complaints['comstatus'] == "open"){echo 'selected="true"';}?>>Open</option>
                                <option value="inprogress" <?php if($complaints['comstatus'] == "inprogress"){echo 'selected="true"';}?>>In Progress</option>
                                <option value="resolved" <?php if($complaints['comstatus'] == "resolved"){echo 'selected="true"';}?>>Resolved</option>
                                <option value="closed" <?php if($complaints['comstatus'] == "closed"){echo 'selected="true"';}?>>Closed</option>
                                <option value="onhold" <?php if($complaints['comstatus'] == "onhold"){echo 'selected="true"';}?>>On Hold</option>
                                <option value="reopened" <?php if($complaints['comstatus'] == "reopened"){echo 'selected="true"';}?>>Reopened</option>
                                <option value="pendingreview" <?php if($complaints['comstatus'] == "pendingreview"){echo 'selected="true"';}?>>Pending Review</option>
                              
                            </select>
                        </div>
                    </div>
                    </div>
                  <div class="row"> 
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="comtype" class=" control-label">Complaint Type</label>
                          <select class="form-control select2 eg-select2" name="comtype" id="comtype" data-toggle="tooltip" placeholder="Type" required="true">
                                <option value="urgent" <?php if($complaints['comtype'] == "pendingreview"){echo 'selected="true"';}?>>Urgent</option>
                                <option value="normal" <?php if($complaints['comtype'] == "pendingreview"){echo 'selected="true"';}?>>Normal</option>
                                <option value="planned" <?php if($complaints['comtype'] == "pendingreview"){echo 'selected="true"';}?>>Planned</option>
                               
                            </select>
                        </div>
                    </div>

                 </div>
                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="date" class=" control-label">Date</label>
                          <input type="datetime-local"  value="<?php echo $complaints['date']; ?>" name="date" class="form-control" id="date" placeholder="" required="true">
                        </div>
                    </div>
                    </div>
                  <div class="row"> 
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="tag" class=" control-label">TAG</label>
                          

                          <select class="form-control select2 eg-select2" id="tag" data-toggle="tooltip" name="tag" placeholder="Type" required="true" multiple="multiple">
                                <option value="HVAC" <?php if($complaints['tag'] == "HVAC"){echo 'selected="true"';}?>>HVAC</option>
                                <option value="CIVIl" <?php if($complaints['tag'] == "CIVIl"){echo 'selected="true"';}?>>CIVIl</option>
                                <option value="FIRE" <?php if($complaints['tag'] == "FIRE"){echo 'selected="true"';}?>>FIRE</option>
                                <option value="PUMPS" <?php if($complaints['tag'] == "PUMPS"){echo 'selected="true"';}?>>PUMPS</option>
                                <option value="ELECTRICAL" <?php if($complaints['tag'] == "ELECTRICAL"){echo 'selected="true"';}?>>ELECTRICAL</option>
                                <option value="MECHANICAL" <?php if($complaints['tag'] == "MECHANICAL"){echo 'selected="true"';}?>>MECHANICAL</option>
                                <option value="CARPANTER" <?php if($complaints['tag'] == "CARPANTER"){echo 'selected="true"';}?>>CARPANTER</option>
                                <option value="PLUMBING" <?php if($complaints['tag'] == "PLUMBING"){echo 'selected="true"';}?>>PLUMBING</option>
                                <option value="LIFT" <?php if($complaints['tag'] == "LIFT"){echo 'selected="true"';}?>>LIFT</option>
                              
                            </select>
                        </div>
                    </div>
                
                    
                 </div>
                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="issuepicture" class=" control-label">Upload Picture</label>
                          <?php if(!empty($complaints['issuepicture'])): ?>
                               <p><img src="<?= base_url($complaints['issuepicture']); ?>" width="50" class="favicon"></p>
                           <?php endif; ?> 
                           <input type="hidden" name="old_issuepicture" value="<?php echo html_escape($complaints['issuepicture']); ?>">
                           <input type="file" name="issuepicture" accept=".png, .jpg, .jpeg, .gif, .svg" >
                           <p><small class="text-success"><?= trans('allowed_types') ?>: gif, jpg, png, jpeg</small></p>
                          </div>
                          </div>
                          

                
                    
                    
                 </div>

                 <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="detail" class=" control-label">Issue Detail</label>
                          <textarea  name="detail" rows="5" class="form-control" id="detail" required="true"><?php echo $complaints['detail'];?></textarea>
                        </div>
                    </div>

                    
                 </div>
                 
                 <hr>
                
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="Update Work Order" class="btn btn-primary pull-right">
                      
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