<div class="col-md-12">
     <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading" style="background-color: #ff2250;">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('Open_Account');?>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open(base_url() . 'index.php?admin/membership_account_manager/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
                

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo');?></label>
                        
                        <div class="col-sm-5">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                    <img src="http://placehold.it/200x200" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="photo_a" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('S/o,D/o,W/o');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="fathername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('date_of_birth');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Marital_Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="marital_status" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="unmarried"><?php echo get_phrase('Unmarried');?></option>
                                <option value="married"><?php echo get_phrase('Married');?></option>
                                <option value="other"><?php echo get_phrase('Other');?></option>
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Aadhar_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="aadhar" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('PAN_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="pan_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Other_id_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="other_id_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('mobile_no');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Permanent_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="permanent_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-5">
                            <select name="gender" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="male"><?php echo get_phrase('Male');?></option>
                                <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div> 
                    </div>
                   
               
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Bankers_name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="bankers_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Branch');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="branch" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('A/C Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="account_number" value="" >
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('IFSC_Code');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="ifsc_code" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Edu._Qualification');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="edu_qualification" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Present_Occupation');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="present_occupation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Introduced_by:(Name_&_Address_Of_the_Introducer');?></label>
                        <div class="col-sm-5">
                            <select name="agent_id" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                                    <?php $agent = $this->db->get('agent')->result_array(); ?>
                                    <?php foreach ($agent as $row): ?>
                                <option value="<?php echo $row['agent_id'] ?>"><?php echo $row['name'];?></option>
                               <?php endforeach; ?>
                          </select>
                    </div>
                   </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
   

</div>
    </div>

<script type="text/javascript">
    function showdiv(value) {
        if (value == 'yes') {
            document.getElementById('showdiv').style.display = 'block';
        }
        if (value == 'no') {
            document.getElementById('showdiv').style.display = 'none';
        }
    }
</script>