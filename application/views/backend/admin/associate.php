<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" >
		<div class="col-sm-12">
            <?php echo form_open(base_url() . 'index.php?admin/associate/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            
            <div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Associate_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_code" id="associate_code" required="required" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Membership_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code" id="member_code" required="required" value="" oninput="get_memberdata(this.value);" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Date_of_Joining');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no" required="required" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Agent_Rank');?></label>
                        
                        <div class="col-sm-3">
                           <select name="rank_id" class="form-control select" id="rank" onchange="put2values(this.value)">
                              <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                              <?php $rank = $this->db->get('rank')->result_array(); ?>
                                <?php foreach ($rank as $row) : ?>
                                <option value="<?php echo $row['rank_id']; ?>"><?php echo $row['rank'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Designation');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="Designation" id="Designation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" id="father_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="address" id="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('PIN_Code:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pin_code" id="pin_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
           
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Nominee_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nominee_name" id="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Nominee_Relation:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="relation" id="relation" class="form-control" >
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $relation=$this->db->get('relation')->result_array(); ?>
                              <?php foreach ($relation as $row) : ?>
                              <option value="<?php echo $row['relation_id']; ?>"><?php echo $row['name']; ?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Blood_Group');?></label>
                        
                        <div class="col-sm-3">
                            <select name="blood_group" id="blood_group" class="form-control" >
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
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <select name="gender" id="gender" class="form-control">
                              <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('Male');?></option>
                              <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('EDUCATION :');?></label>
                        
                       <div class="col-sm-9">
                            <select name="education" id="education" class="form-control" >
                                <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                                <option value="" disabled="disabled">-- select one --</option>
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
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Introducer_Code:');?></label>
                        
                        <div class="col-sm-3">
                           <select name="introducer_code" class="form-control select" id="introducer_code" onchange="put3values(this.value)">
                              <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                              <?php $associate = $this->db->get('associate')->result_array(); ?>
                                <?php foreach ($associate as $row) : ?>
                                <option value="<?php echo $row['associate_code']; ?>"><?php echo $row['associate_code'] . '-' . $this->db->get_where('members', array('member_code' => $row['member_code']))->row()->member_name;?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('RANK');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="rank2" id="rank2" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" >
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('REG. AMT:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="regamt" value="" autofocus>
                        </div>   
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('REMARKS');?></label>
                        
                       <div class="col-sm-9">
                            <textarea name="remarks" type="text" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            </div>
            <div class="col-sm-6">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('PAN_CARD_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pan_card" id="pan_card" value="" autofocus>
                        </div>
                         
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('AAdhar_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" value="" autofocus>
                        </div>
                         
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('ID_NO:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_no" id="id_no" value="" autofocus>
                        </div>
                         
                    </div>
                    <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('PASSPORT_NO:');?></label>
                                
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="passport_no" id="passport_no" value="" autofocus>
                                </div>   
                    </div>
                    <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('BANK_NAME:');?></label>
                                
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="bank_name" id="bank_name" value="" autofocus>
                                </div>   
                    </div>
                    <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Account_Number:');?></label>
                                
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="account_number" id="account_number" value="" autofocus>
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
                                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </center>
            
             <?php echo form_close();?>
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
<script type="text/javascript">

    function putvalues(code) {
        var members = <?php echo json_encode($members); ?>;
        for (var i = members.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(members[i]);
           var obj = JSON.parse(txt);
           if (obj.member_code == code) {
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('relation').value = obj.relation;
            document.getElementById('date_of_birth').value = obj.date_of_birth;
            document.getElementById('age').value = obj.age;
            document.getElementById('education').value = obj.education;
            document.getElementById('pan_card').value = obj.pan_card;
            document.getElementById('passport_no').value = obj.passport_no;
            document.getElementById('bank_name').value = obj.bank_name;
            document.getElementById('account_number').value = obj.account_number;
           }
        }
    }
    function put2values(code) {
        var rank = <?php echo json_encode($rank); ?>;
        for (var i = rank.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(rank[i]);
           var obj = JSON.parse(txt);
           if (obj.rank_id == code) {
            document.getElementById('Designation').value = obj.Designation;
           }
        }
    }
    function put3values(code) {
        var associate = <?php echo json_encode($associate); ?>;
        for (var i = associate.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(associate[i]);
           var obj = JSON.parse(txt);
           if (obj.associate_code == code) {
            document.getElementById('rank2').value = obj.rank_id;
           }
        }
    }


    
</script>
<script>
function get_memberdata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            document.getElementById('name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('relation').value = obj.relation;
            document.getElementById('blood_group').value = obj.blood_group;
            document.getElementById('gender').value = obj.gender;
            document.getElementById('education').value = obj.education;
            document.getElementById('pan_card').value = obj.pan_card;
            document.getElementById('passport_no').value = obj.passport_no;
            document.getElementById('bank_name').value = obj.bank_name;
            document.getElementById('account_number').value = obj.account_number;
            document.getElementById('aadhar_no').value = obj.aadhar_no;
            document.getElementById('id_no').value = obj.id_no;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_memberdata/'; ?>" + value, true);
  xhttp.send();
}
    
</script>