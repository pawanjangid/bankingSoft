<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">


		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/investment/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Membership_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code" id="member_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" oninput="get_memberdata(this.value);" autofocus>
                        </div>
                         
            </div>    

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Policy_NO');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="policy_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Policy_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="policy_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="form_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Maturity_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="maturity_date" id="maturity_date" value="" disabled="disabled" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Folio_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="folio_no"  value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date_Of_Entry');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="entry_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('MR_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mr_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>           
            </div>
            
            <div>First Application Details</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" disabled="disabled" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Father/Husband_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="disabled" name="father_name" id="father_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" disabled="disabled" name="address" id="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </textarea>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PIN_Code:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" disabled="disabled" name="pin_code" id="pin_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" disabled="disabled" name="phone_no" id="phone_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div>Second Application Details</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="second_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Age:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="second_age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Relation');?></label>
                        
                       <div class="col-sm-3">
                            <select name="second_relation" class="form-control" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php $relation=$this->db->get('relation')->result_array(); ?>
                                <?php foreach ($relation as $row2): ?>
                                    <option value="<?php echo $row2['relation_id']; ?>"><?php echo $row2['name'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Nominee_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nominee_name" id="nominee_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Nominee_Relation:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="nominee_relation" class="form-control" id="nominee_relation">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php $relation=$this->db->get('relation')->result_array(); ?>
                                <?php foreach ($relation as $row2): ?>
                                    <option value="<?php echo $row2['relation_id']; ?>"><?php echo $row2['name'];?></option>
                                <?php endforeach; ?>
                              
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('AGE');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nominee_age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
           
            
			</div>
            <div class="col-sm-6">
                <div style="text-align: center;">Plan Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Plan Code:');?></label>
                        
                        <div class="col-sm-3">
                           <select name="plan" class="form-control select" id="plan" onchange="put2values(this.value)">
                              <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                              <?php $plans = $this->db->get('product_master')->result_array(); ?>
                                <?php foreach ($plans as $row3) : ?>
                                <option value="<?php echo $row3['product_id']; ?>"><?php echo $row3['plan_name'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Interest(%) :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="interest" id="interest" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Plan_Type :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="plan_type" id="plan_type" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Mode :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mode" id="mode" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('AMOUNT:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="amount" id="amount" value="" oninput="calculate(this.value);" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Depoit_Amount:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="deposit_amount" id="deposit_amount" value="" autofocus>
                        </div> 
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('TERM:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="term" id="term" value="" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Maturity_Amount:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="maturity_amount" id="maturity_amount" value="" autofocus>
                        </div> 
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('REG. AMT:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="regamt" value="" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bonus:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="bonus" value="" autofocus>
                        </div>  
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('MIS_Return :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mis_return" value="" autofocus>
                        </div> 
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="term2" value="" autofocus>
                        </div>   
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Distinctive_No:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="distinctive_no" value="" autofocus>
                        </div> 
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('To :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="to_distinctive_no" value="" autofocus>
                        </div>   
            </div>
            <div class="col-sm-3">
            
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Mode:');?></label>
                            
                            <div class="col-sm-9">
                                <select name="payment_mode" class="form-control" onchange="enableaccount(this.value)">
                                  <option value=""><?php echo get_phrase('select');?></option>
                                  
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Saving">Saving</option>
                              </select>
                            </div>
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque/DD_No:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque/DD_Date:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control datepicker" name="cheque_date" id="cheque_date" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank:');?></label>
                        <div class="col-sm-9 input-field">
                            <select name="bank_id" id="bank_id" class="form-control" required="required" >
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $bank = $this->db->get('bank_master')->result_array(); ?>
                              <?php foreach ($bank as $row) : ?>
                              <option value="<?php echo $row['bank_id']; ?>"><?php echo get_phrase($row['bank_name'])  . ' -' . $row['account_number'];?></option>
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
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Select_Amount:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="select_amount" id="select_amount" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_balance:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_balance" id="account_balance" value="" autofocus>
                        </div>  
                </div>
            </div>
                 <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Employee_Code:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="associate_code" value="" oninput="get_associate(this.value);">
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Rank :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="associate_rank" id="associate_rank" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_name" id="associate_name" value="" autofocus>
                        </div>  
                </div>
                 <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Remarks :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="remarks" value="" autofocus>
                        </div>  
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
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
