<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?agent/first/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Date_of_Joining');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fathername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PIN_Code:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pin_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Email_Address:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Date_of_Birth:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="email" class="form-control datepicker" name="brithday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('AGE');?></label>
                        
                        <div class="col-sm-3">
                            <input type="email" class="form-control" name="age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Nominee_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Nominee_Relation:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="nominee_relation" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value=""><?php echo get_phrase('Relation');?></option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('AGE');?></label>
                        
                        <div class="col-sm-3">
                            <input type="email" class="form-control" name="age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Blood_Group');?></label>
                        
                        <div class="col-sm-3">
                            <select name="blood_group" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value=""><?php echo get_phrase('Relation');?></option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="email" class="form-control" name="phone_no"  value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <select name="blood_group" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('Male');?></option>
                              <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_Type');?></label>
                        <div class="col-sm-3">
                            <select name="member_type" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="nominal"><?php echo get_phrase('Nominal');?></option>
                              <option value="regular"><?php echo get_phrase('Regular');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('EDUCATION :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="member_type" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="nominal"><?php echo get_phrase('Nominal');?></option>
                              <option value="regular"><?php echo get_phrase('Regular');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('OCCUPATION :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="occupation" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="nominal"><?php echo get_phrase('Nominal');?></option>
                              <option value="regular"><?php echo get_phrase('Regular');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="occupation" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="bagru"><?php echo get_phrase('bagru');?></option>
                              <option value="jpr"><?php echo get_phrase('jpr');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Share_Amount');?></label>
                        
                       <div class="col-sm-7">
                            <input type="email" class="form-control" name="share_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('REMARKS');?></label>
                        
                       <div class="col-sm-9">
                            <textarea type="email" class="form-control" name="remarks" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
			</div>
            <div class="col-sm-6">
                <div style="text-align: center;">Bank Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PAN_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pan_card_no" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PASSPORT_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="passport_no" value="" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('BANK_NAME:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bank_name" value="" autofocus>
                        </div>   
            </div>
           
            </div>
             <?php echo form_close();?>
            <div class="form-group col-sm-3" >
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('UPDATE');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('TRASH');?></button>
                <div style="height: 3px;"></div>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('CLEAR');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('EXIT');?></button>
            </div>
		</div>
</div>
