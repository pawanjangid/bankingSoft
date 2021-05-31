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
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Id');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="loan_id" id="loan_id"  value="<?php echo $row['loan_id'] ?>"  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="form_no" value="<?php echo $row['form_no'] ?>" autofocus>
                        </div>      
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_ID');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="member_code" id="member_code"  value="<?php echo $row['member_code'] ?>"  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control datepicker" name="date" value="" autofocus>
                        </div>      
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Applicant_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="applicant_name" value="<?php echo $row['date'] ?>" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row1) : ?>
                              <option value="<?php echo $row1['branch_id']; ?>" <?php  if($row['member_code']) ?>><?php echo $row1['code'] . ' - ' . $row1['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Gurdian_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="gurdian_name" value="" autofocus>
                        </div>
                         
            </div>

			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Holder\'DOB');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="holder_dob" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Load Holder\'s Age');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="form_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                       
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea class="col-sm-12" name="address" style="height: 70px;font-size: 14px;"></textarea>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('State');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="state" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PIN_Code');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="pin_code" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Sex');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="sex" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Product_Name');?></label>
                
               <div class="col-sm-3">
                <select name="product_name" class="form-control">
                  	<option value=""><?php echo get_phrase('select');?></option>
                   	<option value="Property_loan">PROPERTY LOAN</option>
                   	<option value="gold_loan">GOLD LOAN</option>
                   	<option value="deposit_loan">DEPOSIT LOAN</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Term');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_term" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('Term');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="term" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('Mode');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="mode" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Amount');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_amount" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('ROI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="roi" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('EMI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="emi" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Interest_Type');?></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="interest_type" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Payment_By:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="payment_by" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Cheque_No:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bank_Name:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="bank_name" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('From_A/C:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="account_no" id="account_no" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
           
	            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Purpose');?></label>
	            
	            <div class="col-sm-9">
	                <textarea class="col-sm-12" name="loan_purpose" style="height: 70px;font-size: 14px;"></textarea>
	            </div>           
            </div>
		</div>
            <div class="col-sm-6">
                <div style="text-align: center;">Membership Fees And Other Deductions</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Membership:');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="membership" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Interest(%) :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="interest" id="interest" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Plan_Type :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="plan_type" id="plan_type" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Mode :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mode" id="mode" value="" autofocus>
                        </div>
                         
            </div>

            <div class="col-sm-12">
            	<div class="col-sm-3"></div>
            	<div class="col-sm-9">
            		<ul class="nav nav-tabs">
				    
				    <li class="active"><a data-toggle="tab" href="#menu1" class="active show">1st Guar..</a></li>
				    <li><a data-toggle="tab" href="#menu2">2nd Guar..</a></li>
				    <li><a data-toggle="tab" href="#menu3">3rd Guar..</a></li>
				  </ul>
            	</div>
            	  

				  <div class="tab-content" style="padding: 20px;">
				    <div id="menu1" class="tab-pane fade active in show" style="padding: 20px;">
				      	<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_No:');?></label>
	                        
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="member_no" id="member_no" value="" autofocus>
	                        </div>
                        
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Guarantor_Name :');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="guarantor_name" id="guarantor_name" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone_No:');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address:');?></label>
	                        <div class="col-sm-9">
	                            <textarea name="address" class="col-sm-9" style="height: 70px;font-size: 14px;"></textarea>
	                        </div>
            			</div>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				      				      	<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_No:');?></label>
	                        
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="member_no" id="member_no" value="" autofocus>
	                        </div>
                        
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Guarantor_Name :');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="guarantor_name" id="guarantor_name" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone_No:');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address:');?></label>
	                        <div class="col-sm-9">
	                            <textarea name="address" class="col-sm-9" style="height: 70px;font-size: 14px;"></textarea>
	                        </div>
            			</div>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				      				      	<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Member_No:');?></label>
	                        
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="member_no" id="member_no" value="" autofocus>
	                        </div>
                        
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Guarantor_Name :');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="guarantor_name" id="guarantor_name" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone_No:');?></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="" autofocus>
	                        </div>
            			</div>
            			<div class="form-group">
	                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address:');?></label>
	                        <div class="col-sm-9">
	                            <textarea name="address" class="col-sm-9" style="height: 70px;font-size: 14px;"></textarea>
	                        </div>
            			</div>
				    </div>
				  </div>
            </div>
            <div class="col-sm-12">
            	<div class="col-sm-3"></div>
            	<div class="col-sm-9">
            		<ul class="nav nav-tabs">
				    
				    <li class="active"><a data-toggle="tab" href="#menu11" class="active show">Primary Security</a></li>
				    <li><a data-toggle="tab" href="#menu12">Secondary Security</a></li>
				  </ul>
            	</div>
            	  

				  <div class="tab-content">
				    <div id="menu11" class="tab-pane fade active in show">
            			<div class="form-group">
            				<div class="col-sm-3"></div>
	                        <div class="col-sm-9">
	                            <textarea name="address" class="col-sm-9" style="height: 70px;font-size: 14px;"></textarea>
	                        </div>
            			</div>
				    </div>
				    <div id="menu12" class="tab-pane fade">
				      	
            			<div class="form-group">
            				<div class="col-sm-3"></div>
	                        <div class="col-sm-9">
	                            <textarea name="address" class="col-sm-9" style="height: 70px;font-size: 14px;"></textarea>
	                        </div>
            			</div>
				    </div>

				  </div>
            </div>
            
            <div>
            	<div class="col-sm-3"></div>
            	<div class="col-sm-9" style="font-size: 16px;">Associate Details</div>
            	<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Associate_Code:');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="associate_code" id="associate_code" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Rank:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="rank" id="rank" value="" autofocus>
                        </div>
            	</div>
            	<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Name:');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_name" id="associate_name" value="" autofocus>
                        </div>
            	</div>
            </div>


            </div>
            
             <?php echo form_close();?>
		</div>
        <div class="col-sm-3">
            <div style="text-align: center;">Payment Detail</div>
            <?php echo form_open(base_url() . 'index.php?admin/loan_entry_pay' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Id');?></label>
                        
                        <div class="col-sm-9">
                           <input type="text" class="form-control" name="loan_id" id="member_code"  value=""  autofocus>
                        </div>     
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Payment_Date');?></label>
                        
                        <div class="col-sm-6">
                           <input type="text" class="form-control datepicker" name="payment_date" value="" autofocus>
                        </div>      
            </div>
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('Pay');?></button>
            </center>
            <?php echo form_close();?>
        </div>
</div>
<script>
function get_memberdata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj.member_name;
            document.getElementById('name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('nominee_relation').value = obj.relation;

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
            document.getElementById('associate_name').value = obj.member_name;
            document.getElementById('associate_rank').value = obj.rank;

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
            document.getElementById('phone_no').value = obj.phone_no;
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
            document.getElementById('mode').value = obj.plan_mode;
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
                var duration  = document.getElementById('term').value;
                document.getElementById('deposit_amount').value = duration*amount1;
                var duration_mounth = duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = amount1*interest_rate/2000;
                    test_amount=test_amount+interest;
                    amount1 = amount1+amount2+interest;
                }
                var maturity_amount = parseInt((30*duration*amount)+test_amount);
                document.getElementById('maturity_amount').value = maturity_amount;
    }
}

    function enableaccount(value) {
    if (value == 'Cheque') {
        document.getElementById('bank_id').disabled = false;
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('cheque_no').disabled = false;
        document.getElementById('account_balance').disabled = true;
        document.getElementById('select_amount').disabled = true;
        document.getElementById('account_no').disabled = true;
    }
    else if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
         document.getElementById('account_balance').disabled = true;
        document.getElementById('select_amount').disabled = true;
        document.getElementById('account_no').disabled = true;
    }

    else if (value == 'Saving') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
         document.getElementById('account_balance').disabled = false;
        document.getElementById('select_amount').disabled = false;
        document.getElementById('account_no').disabled = false;
    }

}


</script>
