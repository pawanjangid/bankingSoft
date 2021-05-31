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
                
                <?php echo form_open(base_url() . 'index.php?admin/daily_account_manager/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
                	 <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Account_Type');?></label>
                        
                        <div class="col-sm-5">
                            <select name="account_type" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="Saving_Account"><?php echo get_phrase('Saving_Account');?></option>
                                <option value="Fixed_Deposit"><?php echo get_phrase('Fixed_Deposit');?></option>
                                <option value="Installment_Deposit"><?php echo get_phrase('Installment_Deposit');?></option>
                               
                          </select>
                        </div> 
                    </div>

                   <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Membership_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="membership_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Customer_ID_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="customer_id_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Account_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div>
                        For A
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo_A');?></label>
                        
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
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Select_Plan');?></label>
                        <div class="col-sm-5">
                            <select name="select_plan" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="12"><?php echo get_phrase('12_Month');?></option>
                                <option value="24"><?php echo get_phrase('24_Month');?></option>
                                <option value="36"><?php echo get_phrase('36_Month');?></option>
                                <option value="48"><?php echo get_phrase('48_Month');?></option>
                                <option value="60"><?php echo get_phrase('60_Month');?></option>
                            </select>
                        </div> 
                    </div>
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Interest_Rate(Annual)');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="interest_rate" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Amount_(in_INR)');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Date');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
<!-- for B user -->
                    <div>
                        For B
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo_B');?></label>
                        
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
                                        <input type="file" name="photo_b" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('S/o,D/o,W/o');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="fathername_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('date_of_birth');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="birthday_b" value="" data-start-view="2">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Marital_Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="marital_status_b" class="form-control" data-validate="required"
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
                            <input type="number" class="form-control" name="aadhar_b" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('PAN_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="pan_number_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Other_id_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="other_id_number_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('mobile_no');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="number_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Permanent_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="permanent_address_b" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-5">
                            <select name="gender_b" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="male"><?php echo get_phrase('Male');?></option>
                                <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div> 
                    </div>

<!-- end for B -->
<!-- age restriction-->
  <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('In_Cash_the_depisit_is_in_name_of_minor');?></label>
                        
                        <div class="col-sm-5">
                            <select name="underage" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return showdiv(this.value)">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="no"><?php echo get_phrase('no');?></option>
                                <option value="yes"><?php echo get_phrase('yes');?></option>
                          </select>
                        </div> 
                    </div>
                    <div id="showdiv" style="display: none">
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Guardian_Name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="guardian_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Relationship_with_minor');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="relation_guardian" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Address_of_Guardian');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address_guardian" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>

                    </div>


<!-- end restriction -->




                    <div style="font-size: 22px; color: red;">
                    	Personal Detail of Nominee
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Relation');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_relation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('S/o,D/o,W/o');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_fathername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('date_of_birth');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="nominee_birthday" value="" data-start-view="2">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Marital_Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="nominee_marital_status" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="unmarried"><?php echo get_phrase('Unmarried');?></option>
                                <option value="married"><?php echo get_phrase('Married');?></option>
                                <option value="other"><?php echo get_phrase('Other');?></option>
                          </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Aadhar');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="nominee_aadhar" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('PAN_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_pan_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('mobile_no');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="nominee_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Permanent_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nominee_permanent_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-5">
                            <select name="nominee_gender" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="male"><?php echo get_phrase('Male');?></option>
                                <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div> 
                    </div>
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Signature');?></label>
                        
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
                                        <input type="file" name="signature" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Open_Account');?></button>
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