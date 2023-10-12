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
                                    <option value="HQ" >HQ</option>
                                    <option value="Acc">Acc</option>
                                    <option value="Out Stations">Out Stations</option>
                                  
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="subloction" class=" control-label">Sub Location</label>
                              <select class="form-control select2 eg-select2" id="subloction" data-toggle="tooltip" placeholder="Select Sub Location" required="true">
                                    <option value="HQ" >HQ</option>
                                    <option value="Acc">Acc</option>
                                    <option value="Out Stations">Out Stations</option>
                                  
                                </select>
                            </div>
                        </div>

                        

                  </div>

             
                  <div class="row">

                  <div class="col-md-6">
                            <div class="form-group">
                              <label for="subloction2" class=" control-label">Sub Location 2</label>
                              <select class="form-control select2 eg-select2" id="subloction2" data-toggle="tooltip" placeholder="Select Sub Location 2" required="true">
                                    <option value="HQ" >HQ</option>
                                    <option value="Acc">Acc</option>
                                    <option value="Out Stations">Out Stations</option>
                                  
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
                                <option value="HQ" >HQ</option>
                                <option value="Acc">Acc</option>
                                <option value="Out Stations">Out Stations</option>
                              
                            </select>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="comtype" class=" control-label">Type</label>
                          <select class="form-control select2 eg-select2" id="comtype" data-toggle="tooltip" placeholder="Type" required="true">
                                <option value="HQ" >HQ</option>
                                <option value="Acc">Acc</option>
                                <option value="Out Stations">Out Stations</option>
                              
                            </select>
                        </div>
                    </div>

                 </div>
                 <div class="row">
                
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="date" class=" control-label">Date</label>
                          <input type="date" name="date" class="form-control" id="date" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="time" class=" control-label">Time</label>
                          <input type="time" name="time" class="form-control" id="time" placeholder="">
                        </div>
                    </div>
                
                    
                 </div>
                 <div class="row">
                
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="issuepicture" class=" control-label">Upload Picture</label>
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="issuepicture">
                          <label class="custom-file-label" for="issuepicture">Choose file</label>
                          </div>
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
  
   listofHQ['sublocationHQ']['Building-1'] = 'Building-1';
   listofHQ['sublocationHQ']['Building-2'] = 'Building-2';
   listofHQ['sublocationHQ']['Building-3'] = 'Building-3';
   listofHQ['sublocationHQ']['Building-4'] = 'Building-4';
   listofHQ['sublocationHQ']['Building-5'] = 'Building-5';

   listofHQ['sublocation2']['groundfloor'] = 'Ground Floor';
   listofHQ['sublocation2']['1stfloor'] = '1st Floor';
   listofHQ['sublocation2']['2ndfloor'] = '2nd Floor';
   listofHQ['sublocation2']['3rdfloor'] = '3rd Floor';
   listofHQ['sublocation2']['roof'] = 'Roof';

   listofHQ['complainttype']['HVAC'] = 'HVAC';
   listofHQ['complainttype']['CIVIl'] = 'CIVIl';
   listofHQ['complainttype']['FIRE'] = 'FIRE';
   listofHQ['complainttype']['PUMPS'] = 'PUMPS';
   listofHQ['complainttype']['ELECTRICAL'] = 'ELECTRICAL';
   listofHQ['complainttype']['MECHANICAL'] = 'MECHANICAL';
   listofHQ['complainttype']['CARPANTER'] = 'CARPANTER';
   listofHQ['complainttype']['PLUMBING'] = 'PLUMBING';
   listofHQ['complainttype']['LIFT'] = 'LIFT';
  

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
    }
};
  
  
  
  
  </script>