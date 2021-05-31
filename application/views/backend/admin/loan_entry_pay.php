<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<style type="text/css">
	label,input,textarea,select{
		font-size: 14px;
	}
</style>
<div class="row" style="font-size: 14px;">


		<div class="col-sm-9">
			<?php echo form_open(base_url() . 'index.php?admin/loan_entry/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Id');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="loan_code" id="loan_code" oninput="get_loandata(this.value);"  value=""  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="form_no" value="" autofocus>
                        </div>      
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_ID');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="member_code" id="member_code"  value=""  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control datepicker" name="date" value="" autofocus>
                        </div>      
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Applicant_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="applicant_name" id="member_name" value="" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Branch_Name:');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" id="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Gurdian_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" id="father_name" value="" autofocus>
                        </div>
                         
            </div>


            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Holder\'DOB');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="holder_dob" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Load Holder\'s Age');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="age" id="age" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                       
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea class="col-sm-12" name="address" id="address" style="height: 70px;font-size: 14px;"></textarea>
                        </div>           
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Education');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="education" id="education" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PIN_Code');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="pin_code" id="pin_code" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="gender" id="gender" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Product_Name');?></label>
                
               <div class="col-sm-3">
                <select name="product_id" id="product_id" class="form-control" onchange="get_loandetail(this.value);">
                    <option value=""><?php echo get_phrase('select');?></option>
                    <?php $loan_type = $this->db->get('loan_master')->result_array(); ?>
                    <?php foreach ($loan_type as $row): ?>
                        <option value="<?php echo $row['loan_id'] ?>"><?php echo $row['loan_name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Term');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_term" id="max_term" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Type');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="loan_type" id="loan_type" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Mode');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="loan_mode" id="loan_mode" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Amount');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_amount" id="loan_amount" value="" oninput="emicalculate(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('ROI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="roi" id="roi_max" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('EMI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="emi" id="emi" value="" autofocus>
                        </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Interest_Type');?></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="interest_type" id="interest_mode" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_By:');?></label>
                        
                        <div class="col-sm-3 input-field">
                            <select name="payment_method" id="payment_type" class="form-control" onchange="enableaccount(this.value);">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="Cash">Cash</option>
                              <option value="Cheque">Cheque</option>
                              <option value="Saving_Account">Saving_Account</option>
                          </select>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_No:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank_Name:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="bank_name" id="bank_name" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('From_A/C:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="account_no" id="account_no" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
           
                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Purpose');?></label>
                
                <div class="col-sm-9">
                    <textarea class="col-sm-12" name="loan_purpose"id="loan_purpose" style="height: 70px;font-size: 14px;"></textarea>
                </div>           
            </div>
        </div>
        
            <div class="col-sm-6">
                <div style="text-align: center;">Membership Fees And Other Deductions</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Gst_Tax:');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="gst_tax" id="gst_tax" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Processing_Fee:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="processing_fee" id="processing_fee" value="" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Service_Tax:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="service_tax" id="service_tax" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Insurance_Amount:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="insurance_amount" id="insurance_amount" value="" autofocus>
                        </div>
                         
            </div>
             

            
            <div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9" style="font-size: 16px;">Associate Details</div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Associate_Code:');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="associate_code" id="associate_code" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Rank:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="rank" id="rank" value="" autofocus>
                        </div>
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name:');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_name" id="associate_name" value="" autofocus>
                        </div>
                </div>
            </div>


            </div>
            
             <?php echo form_close();?>
		</div>
        <div class="col-sm-3">
            <?php echo form_open(base_url() . 'index.php?admin/loan_entry_payment/paid' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Id');?></label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" name="loan_code" id="loan_code" oninput="get_loandata(this.value);"  value=""  autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Date');?></label>
                        
                        <div class="col-sm-9">
                           <input type="text" class="form-control datepicker" name="payment_date" value="" autofocus>
                        </div>      
            </div>
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('Pay');?></button>
            </center>
            <?php echo form_close();?>
        </div>
</div>
<div id="demo"></div>
<script>
function emicalculate(value) {
        var roi = document.getElementById('roi_max').value;
        var term = document.getElementById('max_term').value;
        interest = parseInt(term)*value*parseInt(roi)/100/12;
        
        emi = (parseInt(interest)+parseInt(value))/term;
        document.getElementById('emi').value = emi;
}



function get_loandata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            document.getElementById('demo').innerHTML = this.responseText;
            document.getElementById('member_name').value = obj.member_name;
            document.getElementById('member_code').value = obj.member_code;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('age').value = obj.age;
            document.getElementById('branch_id').value = obj.branch_id;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('education').value = obj.education;
            document.getElementById('gender').value = obj.gender;
            document.getElementById('product_id').value = obj.product_id;
            document.getElementById('associate_code').value = obj.associate_code;
            document.getElementById('loan_mode').value = obj.loan_mode;
            document.getElementById('roi_max').value = obj.roi_max;
            document.getElementById('loan_amount').value = obj.loan_amount;
            document.getElementById('gst_tax').value = obj.gst_tax;
            document.getElementById('insurance_amount').value = obj.insurance_amount;
            document.getElementById('service_tax').value = obj.service_tax;
            document.getElementById('processing_fee').value = obj.processing_fee;
            document.getElementById('max_term').value = obj.max_term;
            document.getElementById('loan_purpose').value = obj.loan_purpose;
            document.getElementById('interest_mode').value = obj.interest_mode;
            document.getElementById('bank_name').value = obj.bank_name;
            document.getElementById('account_no').value = obj.account_no;
            document.getElementById('cheque_no').value = obj.cheque_no;
            document.getElementById('payment_type').value = obj.payment_type;
            document.getElementById('associate_code').value = obj.associate_code;
            emicalculate(obj.loan_amount);
            if (obj.paid=='1') {
                alert('Loan Already Paid');
            }





}
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_loandata/'; ?>" + value, true);
  xhttp.send();
}

function get_loandetail(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            document.getElementById('demo').innerHTML = this.responseText;
             document.getElementById('loan_mode').value = obj.loan_mode;
             document.getElementById('loan_term').value = obj.max_term;
             document.getElementById('roi').value = obj.roi_max;
             document.getElementById('loan_type').value = obj.loan_type;
             document.getElementById('interest_type').value = obj.interest_mode;

    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_loandetail/'; ?>" + value, true);
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
            document.getElementById('gurdian_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('nominee_relation').value = obj.relation;
            document.getElementById('member_code').value = obj.member_code;
           }
        }
    }
    


    function enableaccount(value) {
    if (value == 'Cheque') {
        document.getElementById('cheque_no').disabled = false;
        document.getElementById('loan_bank_name').disabled = true;
        document.getElementById('account_no').disabled = true;
    }
    else if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('loan_bank_name').disabled = true;
        document.getElementById('account_no').disabled = true;
    }

    else if (value == 'Saving_Account') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('account_no').disabled = false;
        document.getElementById('loan_bank_name').disabled = false;
    }

}


</script>