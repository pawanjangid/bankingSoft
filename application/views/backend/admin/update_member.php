<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name . '-' . $member_code); ?></h2></div>
</div>
<hr>

<?php $member = $this->db->get_where('members', array('member_code' => $member_code))->result_array(); ?>
<?php foreach ($member as $row) : ?>
<div class="row" style="font-size: 16px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/members/do_update/' . $member_code , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;"><?php echo get_phrase('Date_of_Joining');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo date('d/m/Y',$row['date_of_joining']); ?>" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['application_no']; ?>" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['member_name']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['father_name']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autofocus><?php echo $row['address']; ?>
                            </textarea>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('PIN_Code:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pin_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['pin_code']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Email_Address:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="mail" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['email']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Date_of_Birth:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_birth" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo date('d/m/Y',$row['date_of_birth']); ?>" autofocus onchange="calculateExp(this.value);">
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('AGE');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="age" name="age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['age']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Nominee_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['nominee_name']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Nominee_Relation:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="relation" class="form-control" >
                              <option value=""  disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $relation=$this->db->get('relation')->result_array(); ?>
                              <?php foreach ($relation as $row3) : ?>
                              <option value="<?php echo $row3['relation_id']; ?>" <?php if ($row['relation_id'] == $row3['relation_id']) {echo 'selected="selected"';} ?>><?php echo $row3['name']; ?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Blood_Group');?></label>
                        
                        <div class="col-sm-3">
                            <select name="blood_group" class="form-control" >
                                <option value="A+" <?php if ($row['blood_group'] == 'A+') {echo 'selected="selected"';} ?>>A+</option>
                                <option value="A-" <?php if ($row['blood_group'] == 'A-') {echo 'selected="selected"';} ?>>A-</option>
                                <option value="B+" <?php if ($row['blood_group'] == 'B+') {echo 'selected="selected"';} ?>>B+</option>
                                <option value="B-" <?php if ($row['blood_group'] == 'B-') {echo 'selected="selected"';} ?>>B-</option>
                                <option value="AB+" <?php if ($row['blood_group'] == 'AB+') {echo 'selected="selected"';} ?>>AB+</option>
                                <option value="AB-" <?php if ($row['blood_group'] == 'AB-') {echo 'selected="selected"';} ?>>AB-</option>
                                <option value="O+" <?php if ($row['blood_group'] == 'O+') {echo 'selected="selected"';} ?>>O+</option>
                                <option value="O-" <?php if ($row['blood_group'] == 'O-') {echo 'selected="selected"';} ?>>O-</option>
                                <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no"  value="<?php echo $row['phone_no']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <select name="gender" class="form-control">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="male" <?php if ($row['gender'] == 'male') {echo 'selected="selected"';} ?>><?php echo get_phrase('Male');?></option>
                              <option value="female" <?php if ($row['gender'] == 'female') {echo 'selected="selected"';} ?>><?php echo get_phrase('Female');?></option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Member_Type');?></label>
                        <div class="col-sm-3">
                            <select name="member_type" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="nominal" <?php if ($row['member_type'] == 'nominal') {echo 'selected="selected"';} ?>><?php echo get_phrase('Nominal');?></option>
                              <option value="regular" <?php if ($row['member_type'] == 'regular') {echo 'selected="selected"';} ?>><?php echo get_phrase('Regular');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('EDUCATION :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="education" class="form-control" >
                                <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                                <option value="" disabled="disabled">-- select one --</option>
                                <option value="No_formal_education" <?php if ($row['education'] == 'No_formal_education') {echo 'selected="selected"';} ?>>No formal education</option>
                                <option value="Primary_education" <?php if ($row['education'] == 'Primary education') {echo 'selected="selected"';} ?>>Primary education</option>
                                <option value="Secondary_education" <?php if ($row['education'] == 'Secondary_education') {echo 'selected="selected"';} ?>>Secondary education or high school</option>
                                <option value="GED" <?php if ($row['education'] == 'GED') {echo 'selected="selected"';} ?>>GED</option>
                                <option value="Vocational_qualification" <?php if ($row['education'] == 'Vocational_qualification') {echo 'selected="selected"';} ?>>Vocational qualification</option>
                                <option value="Bachelor_degree" <?php if ($row['education'] == 'Bachelor_degree') {echo 'selected="selected"';} ?>>Bachelor's degree</option>
                                <option value="Master_degree" <?php if ($row['education'] == 'Master_degree') {echo 'selected="selected"';} ?>>Master's degree</option>
                                <option value="Doctorate_or_higher" <?php if ($row['education'] == 'Doctorate_or_higher') {echo 'selected="selected"';} ?>>Doctorate or higher</option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('OCCUPATION :');?></label>
                        
                       <div class="col-sm-9">
                        <select name="occupation" class="form-control" >
                             <option value="" disabled="disabled">-- select one --</option>
                                <option value="Govt_Job" <?php if ($row['occupation'] == 'Govt_Job') {echo 'selected="selected"';} ?>>Govt Job</option>
                                <option value="Private_Job" <?php if ($row['occupation'] == 'Private_Job') {echo 'selected="selected"';} ?>>Private Job</option>
                                <option value="Farmer" <?php if ($row['occupation'] == 'Farmer') {echo 'selected="selected"';} ?>>Farmer</option>
                                <option value="Labour" <?php if ($row['occupation'] == 'Labour') {echo 'selected="selected"';} ?>>Labour</option>
                                <option value="Housewife" <?php if ($row['occupation'] == 'Housewife') {echo 'selected="selected"';} ?>>Housewife</option>
                                <option value="Other" <?php if ($row['occupation'] == 'Other') {echo 'selected="selected"';} ?>>Other</option>
                        </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_code" class="form-control" >
                              <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row2) : ?>
                              <option value="<?php echo $row2['code']; ?>" <?php if ($row['branch_code'] == $row2['branch_code']) {echo 'selected="selected"';} ?>><?php echo $row2['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Share_Amount');?></label>
                        
                       <div class="col-sm-7">
                            <input type="text" class="form-control" name="share_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['share_amount']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('REMARKS');?></label>
                        
                       <div class="col-sm-9">
                            <textarea name="remarks" type="text" class="form-control" name="remarks" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus><?php echo $row['remarks']; ?>
                            </textarea>
                        </div>
            </div>
			</div>
            <div class="col-sm-6">
                <div style="text-align: center;">Bank Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('PAN_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pan_card" value="<?php echo $row['pan_card']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('AADHAR_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="aadhar_no" value="<?php echo $row['aadhar_no']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('ID_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_no" value="<?php echo $row['id_no']; ?>" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('PASSPORT_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="passport_no" value="<?php echo $row['passport_no']; ?>" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('BANK_NAME:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name']; ?>" autofocus>
                        </div>   
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Photo');?></label>
                        
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
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Signature');?></label>
                        
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
                </div>
            </div>
            <center><button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('UPDATE');?></button></center>
              
                    
            </div>
             <?php echo form_close();?>
		</div>
</div>
<?php endforeach; ?>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>
<script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        
</script>
<script type="text/javascript">
    function calculateExp(birthDate) {
    birthDate = new Date(birthDate);
    var now = new Date();
    otherDate = new Date(now.getFullYear(),now.getMonth(),now.getDate());
    var years = (otherDate.getFullYear() - birthDate.getFullYear() );


    if (otherDate.getMonth() < birthDate.getMonth() || otherDate.getMonth() == birthDate.getMonth() && otherDate.getDate() < birthDate.getDate()) {
        years--;
    }
 document.getElementById('age').value = years;
}
</script>