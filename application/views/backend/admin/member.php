<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/members/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Member_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         
            </div>
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date_of_Joining');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" style="font-size: 14px;" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" style="font-size: 14px;" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('PIN_Code:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pin_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Email_Address:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="mail" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Date_of_Birth:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_birth" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus onchange="getAge(this.value);">
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('AGE');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="age" name="age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Nominee_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Nominee_Relation:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="relation" class="form-control" style="font-size: 14px;">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $relation=$this->db->get('relation')->result_array(); ?>
                              <?php foreach ($relation as $row) : ?>
                              <option value="<?php echo $row['relation_id']; ?>"><?php echo $row['name']; ?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Blood_Group');?></label>
                        
                        <div class="col-sm-3">
                            <select name="blood_group" class="form-control" style="font-size: 14px;">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no"  value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <select name="gender" class="form-control"  style="font-size: 14px;">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('Male');?></option>
                              <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Member_Type');?></label>
                        <div class="col-sm-3">
                            <select name="member_type" class="form-control" style="font-size: 14px;">
                              <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                              <option value="nominal"><?php echo get_phrase('Nominal');?></option>
                              <option value="regular"><?php echo get_phrase('Regular');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('EDUCATION :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="education" class="form-control" style="font-size: 14px;">
                                <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                <option value="No_formal_education">No formal education</option>
                                <option value="Primary_education">Primary education</option>
                                <option value="Secondary_education">Secondary education or high school</option>
                                <option value="GED">GED</option>
                                <option value="Vocational_qualification">Vocational qualification</option>
                                <option value="Bachelor_degree">Bachelor's degree</option>
                                <option value="Master_degree">Master's degree</option>
                                <option value="Doctorate_or_higher">Doctorate or higher</option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('OCCUPATION :');?></label>
                        
                       <div class="col-sm-9">
                        <select name="occupation" class="form-control" style="font-size: 14px;">
                             <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                <option value="Govt_Job">Govt Job</option>
                                <option value="Private_Job">Private Job</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Labour">Labour</option>
                                <option value="Housewife">Housewife</option>
                                <option value="Other">Other</option>
                        </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" style="font-size: 14px;">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Joining_Amount');?></label>
                        
                       <div class="col-sm-7">
                            <input type="text" class="form-control" name="share_amount" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('REMARKS');?></label>
                        
                       <div class="col-sm-9">
                            <textarea name="remarks" style="font-size: 14px;" type="text" class="form-control" name="remarks" value="" autofocus>
                            </textarea>
                        </div>
            </div>
			</div>
            <div class="col-sm-6">
                <div style="text-align: center;">Bank Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('PAN_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pan_card" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('AADHAR_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="aadhar_no" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('ID_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_no" value="" autofocus>
                            <input type="hidden" id="today" value="<?php echo date('d/m/Y'); ?>">
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('BANK_NAME:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bank_name" value="" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('ACCOUNT_NUMBER:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_number" value="" autofocus>
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
                                        <input type="file" name="signature" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
                    
            </div>
             <?php echo form_close();?>
            <div class="form-group col-sm-3" >
               
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('UPDATE');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('TRASH');?></button>
                <div style="height: 3px;"></div>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('CLEAR');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('EXIT');?></button>
            </div>
		</div>
</div>
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

function getAge(dateString) {

    var dates = dateString.split("/");
    var d = new Date();

    var userday = dates[0];
    var usermonth = dates[1];
    var useryear = dates[2];

    var curday = d.getDate();
    var curmonth = d.getMonth()+1;
    var curyear = d.getFullYear();

    var age = curyear - useryear;

    if((curmonth < usermonth) || ( (curmonth == usermonth) && curday < userday   )){

        age--;

    }

   document.getElementById('age').value = age;
}
</script>