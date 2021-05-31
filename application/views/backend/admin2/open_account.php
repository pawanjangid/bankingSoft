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
                
                <?php echo form_open(base_url() . 'index.php?admin/nidhi_account_manager/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
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
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Product_Name');?></label>
                        
                        <div class="col-sm-5">
                            <select name="Product_Name" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="1"><?php echo get_phrase('1_Year');?></option>
                                <option value="2"><?php echo get_phrase('2_Year');?></option>
                                <option value="3"><?php echo get_phrase('3_Year');?></option>
                                <option value="4"><?php echo get_phrase('4_year');?></option>
                                <option value="5"><?php echo get_phrase('5_year');?></option>
                                <option value="6"><?php echo get_phrase('6_year');?></option>
                                <option value="7"><?php echo get_phrase('7_Year');?></option>
                                <option value="8"><?php echo get_phrase('8_Year');?></option>
                                <option value="10"><?php echo get_phrase('10_year');?></option>
                          </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Operating_Instruction');?></label>
                        
                        <div class="col-sm-5">
                            <select name="operating_instruction" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="single"><?php echo get_phrase('Single');?></option>
                                <option value="either_or_survivor"><?php echo get_phrase('Either_or_Survivor');?></option>
                                <option value="minor_under_guardian"><?php echo get_phrase('Minor_Under_Guardian');?></option>
                                <option value="former_or_survivor"><?php echo get_phrase('Former_or_Survivor');?></option>
                                <option value="anyone_or_survivor"><?php echo get_phrase('Anyone_or_Survivor');?></option>
                                <option value="jointly_by_all"><?php echo get_phrase('Jointly_By_All');?></option>
                          </select>
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
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Deposit_Type');?></label>
                        
                        <div class="col-sm-5">
                            <select name="deposit_type" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="fixed"><?php echo get_phrase('Fixed_Deposit');?></option>
                                <option value="recurring"><?php echo get_phrase('Recurring_Deposit');?></option>
                           	</select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Amount_(in_INR)');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Funding_Instruction');?></label>
                        <div class="col-sm-5">
                            <select name="funding_instruction" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="cash"><?php echo get_phrase('Cash');?></option>
                                <option value="cheque"><?php echo get_phrase('Cheque');?></option>
                                <option value="Card"><?php echo get_phrase('Card');?></option>
                           	</select>
                        </div> 
                    </div>
                    <div class="form-group" id="cheque_number" style="display: none;">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Cheque_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="cheque_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group" id="bank_address_cheque" style="display: none;">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Bank_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="bank_address_cheque" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Duration_of_Deposit');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="duration_of_deposit" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Rate_Of_Interest');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="rate_of_interest" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Interest_Frequency');?></label>
                        <div class="col-sm-5">
                            <select name="interest_frequency" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="Monthly_Payout"><?php echo get_phrase('Monthly_Payout');?></option>
                                <option value="Quarterly_payout"><?php echo get_phrase('Quarterly_payout');?></option>
                                <option value="Cummulative"><?php echo get_phrase('Cummulative');?></option>
                           	</select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Interest_Instruction');?></label>
                        <div class="col-sm-5">
                            <select name="interest_instruction" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="Auto_Renew_Principal"><?php echo get_phrase('Auto_Renew_Principal');?></option>
                                <option value="Auto_Renew_Principal_and_interest"><?php echo get_phrase('Auto_Renew_Principal_and_interest');?></option>
                                <option value="Auto_Renew_Principal_and_pay_interest"><?php echo get_phrase('Auto_Renew_Principal_and_pay_interest');?></option>
                           	</select>
                        </div> 
                    </div>	
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Maturity_Payment_Instruction');?></label>
                        <div>
                        	
                        </div>
                        <div class="col-sm-7">
                            <input type="checkbox" name="Maturity_Payment_1" value="checked">Credit Proceeds of the new Term Deposit to my <?php echo $system_name;?> Current/Saving account number mentioned above<hr>
							<input type="checkbox" name="Maturity_Payment_2" value="checked">Payment instrument to be mailed to my address registered with <?php echo $system_name;?><hr>
							<input type="checkbox" name="Maturity_Payment_3" value="Maturity_Payment_3">Credit Proceeds to my other bank account as mentioned below through RTGS/NEFT (for Standalone FD's)
                        </div>
                       
                           
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Account_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('IFSC_Code');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="ifsc_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Branch_Name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="branch_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Branch_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="branch_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Sweep-in_Facility');?></label>
                        <div>
                        	
                        </div>
                        <div class="col-sm-7">
                            <input type="radio" name="Sweep_in_Facility" value="yes" >Yes,Required    
							<input type="radio" name="Sweep_in_Facility" value="no" > Not Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('TDS_detail');?></label>
                        <div>
                        </div>
                        <div class="col-sm-7">
                            <input type="radio" name="TDS_detail" value="yes" >Yes,Required    
							<input type="radio" name="TDS_detail" value="no_it" > No, IT Exemption
							<input type="radio" name="TDS_detail" value="no_15G" > No, Form 15G/15H attached
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Pre-mature_withdrawal_facility_required');?></label>
                        <div>
                        </div>
                        <div class="col-sm-7">
                            <input type="radio" name="withdrawal_facility" value="yes">Yes   
							<input type="radio" name="withdrawal_facility" value="no" > no     (For deposit > = INR 1 Crore)
                        </div>
                    </div>

                    <div style="font-size: 22px; color: red;">
                    	Personal Detail of Nominee
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Relation');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="relation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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
                                        <input type="file" name="photo" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
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