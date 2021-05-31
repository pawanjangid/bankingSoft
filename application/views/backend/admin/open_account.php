<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">


		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/saving_account/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-8">
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Code');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="member_code" id="member_code" value="" oninput="get_memberdata(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('AC_NO');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ac_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>    
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-6 input-field">
                            <select name="branch_id" id="branch_id" class="form-control" >
                              <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
			<div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Opening_Date');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" name="opening_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="form_no" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Applicant_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" name="applicant_name" id="applicant_name" value="" disabled="disabled" autofocus>
                        </div>         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Father_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="father_name" id="father_name" disabled="disabled" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PIN_Code');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pin_code" id="pin_code" disabled="disabled" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PAN_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pan_no" id="pan_no" disabled="disabled" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Mobile_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="mobile_no" id="mobile_no" disabled="disabled" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-4">
                            <textarea class="form-control" name="address" id="address"  disabled="disabled"></textarea>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Nominee');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nominee_name" id="nominee_name" disabled="disabled" value="" autofocus>
                        </div>           
            </div>
            
            <div>Personal Detail(Joint Account Holder 1/Guardian)</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Applicant_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_applicant_name" id="joint_applicant_name" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Mobile_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_mobile_no" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_father_name"  value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PIN_Code');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_pin_code" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date_of_Birth');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_date_of_birth" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Age');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="joint_age" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-4">
                            <textarea type="text" class="form-control" name="joint_address" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            <div><center>Introducer Details</center></div>
             <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Guarantor A/C No.');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="guarantor_ac" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Guarantor_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="guarantor_name" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Advisor_Code');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="associate_code" value="" oninput="get_associate(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Advisor_Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="advisor_name" id="advisor_name" value="" autofocus>
                        </div>
            </div>
			</div>
            <div class="col-sm-4">
                <center>Payment Detail</center>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Amount:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="opening_amount" id="opening_amount" value="" autofocus>
                        </div>  
                </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Mode:');?></label>
                        
                        <div class="col-sm-9">
                            <select name="payment_mode" class="form-control" onchange="enableaccount(this.value);">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_No:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_Date:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control datepicker" name="cheque_date" id="cheque_date" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank:');?></label>
                        
                        <div class="col-sm-9">
                            <select name="bank_id" id="bank_id" class="form-control" >
                              <option value="" disabled="disabled" selected="selected"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('bank_master')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['bank_id']; ?>"><?php echo $row['bank_name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_No:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_no" id="account_no" value="" autofocus>
                        </div>  
                </div>
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
            

            <center>
                <button type="submit" class="btn btn-default" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </center>
           
            </div>
            
             <?php echo form_close();?>
		</div>
</div>
<div id="demo"></div>
<script>
function get_memberdata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj.member_name;
            document.getElementById('applicant_name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').innerHTML = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('pan_no').value = obj.pan_card;
            document.getElementById('mobile_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('nominee_relation').value = obj.relation;
            document.getElementById('branch_id').value = obj.branch_id;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_memberdata/'; ?>" + value, true);
  xhttp.send();
}
function get_associate(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = this.responseText;
            document.getElementById('advisor_name').value = obj.member_name;

    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_associate/'; ?>" + value, true);
  xhttp.send();
}
</script>
<script type="text/javascript">

    function putvalues(code) {
        var members = <?php echo json_encode($members); ?>;
        for (var i = members.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(members[i]);
           var obj = JSON.parse(txt);
           if (obj.member_code == code) {
            document.getElementById('name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('mobile_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('nominee_relation').value = obj.relation;
            document.getElementById('member_code').value = obj.member_code;
           }
        }
    }
    function put2values(code) {
        var plans = <?php echo json_encode($plans); ?>;
        for (var i = plans.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(plans[i]);
           var obj = JSON.parse(txt);
           if (obj.product_id == code) {
            document.getElementById('term').value = 12*obj.plan_duration;
            document.getElementById('interest').value = obj.interest_rate;
            document.getElementById('plan_type').value = obj.plan_type;
           }
        }
    }
function calculate(amount) {

    var type = document.getElementById('plan_type').value;

    var duration  = document.getElementById('term').value;

    var amount1 = parseInt(amount);
    var amount =amount1;
    var interest_rate = document.getElementById('interest').value;

    var test_amount = 0;
    if (type == 'FD') {
        document.getElementById('deposit_amount').value = amount;
        var duration_mounth = duration;
        for (var i = 1; i <= duration_mounth; i++) {
            interest = (interest_rate*amount)/1200;
            test_amount = test_amount+interest;
            reminder = i%4;
            if (reminder==0) {
                amount = amount+test_amount;
            }
        }
        var maturity_amount = amount1 + test_amount;

        document.getElementById('maturity_amount').value = maturity_amount;
    }
    if (type == 'RD') {
       
            var amount1 = amount;
                var duration_mounth = duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = (interest_rate*amount1)/1200;
                    test_amount = test_amount+interest;
                    amount1 = parseInt(amount1)+parseInt(amount);
                }
                var maturity_amount = duration_mounth*amount + test_amount;
                document.getElementById('deposit_amount').value = amount*duration;
                document.getElementById('maturity_amount').value = maturity_amount;
        
    }
    if (type == 'MIS') {

    }
    if (type == 'DRD') {
                var amount1 = 30*amount;
                var amount2 = amount1;
                document.getElementById('deposit_amount').value = 12*amount1;
                var duration_mounth = duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = amount1*interest_rate/2000;
                    test_amount=test_amount+interest;
                    amount1 = amount1+amount2+interest;
                }
                var maturity_amount = parseInt((360*amount)+test_amount);
                document.getElementById('maturity_amount').value = maturity_amount;
    }
}

function enableaccount(value) {
    if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank').disabled = true;
        document.getElementById('account_no').disabled = true;
    }
    else if (value == 'Cheque') {
        document.getElementById('cheque_no').disabled = false;
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('bank').disabled = false;
        document.getElementById('account_no').disabled = false;
    }else{
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank').disabled = true;
        document.getElementById('account_no').disabled = true;
    }

}
</script>
