<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
<?php $investment = $this->db->get_where('investment',array('policy_no' => $policy_no))->result_array() ?>
<?php foreach ($investment as $row): ?>
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/investment/do_update/' . $policy_no , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Membership_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code" id="member_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['member_code']; ?>" oninput="get_memberdata(this.value);" onfocusout="get_memberdata(this.value);" autofocus>
                        </div>
                         
            </div>    

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Policy_NO');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="policy_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['policy_no']; ?>" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row2) : ?>
                              <option value="<?php echo $row2['branch_id']; ?>" <?php if ($row2['branch_id']==$row['branch_id']) {
                                  echo 'selected="selected"';
                              } ?>><?php echo $row2['code'] . ' - ' . $row2['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Policy_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="policy_date" id="policy_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo date('d/m/Y',$row['policy_date']); ?>" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="form_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['form_no']; ?>" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Maturity_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="maturity_date" id="maturity_date" value="<?php echo date('d/m/Y',$row['maturity_date']); ?>" disabled="disabled" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Folio_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="folio_no"  value="<?php echo $row['folio_no']; ?>" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date_Of_Entry');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="entry_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo date('d/m/Y',$row['entry_date']); ?>" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('MR_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mr_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['mr_no']; ?>" autofocus>
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
                            <input type="text" class="form-control" name="second_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['second_name']; ?>" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Age:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="second_age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['second_age']; ?>" autofocus>
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
                           <select name="plan" class="form-control select" id="plan" onchange="dosomething(this.value);">
                              <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $plans = $this->db->get('product_master')->result_array(); ?>
                                <?php foreach ($plans as $row3) : ?>
                                <option value="<?php echo $row3['product_id']; ?>" <?php if ($row['product_id']==$row3['product_id']) {
                                    echo 'selected="selected"';
                                } ?>><?php echo $row3['plan_name'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('MODE :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mode" id="mode" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Table :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="table" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('MIS :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mis" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('AMOUNT:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="amount" id="amount" value="" autofocus>
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
                            <select name="payment_mode" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                                <option value="cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Saving">Saving</option>
                          </select>
                        </div>
            </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque/DD_No:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cheque_no" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque/DD_Date:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control datepicker" name="cheque_date" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque/DD_Bank:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cheque_bank" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_No:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_no" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Select_Amount:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="select_amount" value="" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_balance:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_balance" value="" autofocus>
                        </div>  
                </div>
            </div>
                 <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Employee_Code:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="associate_code" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Rank :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="rank" value="<?php echo $row['rank']; ?>" autofocus>
                        </div>  
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" autofocus>
                        </div>  
                </div>
                 <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Remarks :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']; ?>" autofocus>
                        </div>  
                </div>
            </div>
            <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
             <?php echo form_close();?>
		</div>
    <?php endforeach; ?>
</div>
<div id="demo"></div>
<input type="button" name="" value="Hello" onclick="get_value(3);">
<script>
function get_memberdata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            document.getElementById('demo').innerHTML = obj.member_name;
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

           //document.getElementById('demo').innerHTML = plans;
           if (obj.product_id == code) {
            document.getElementById('amount').value = obj.cosideration_amount;
            document.getElementById('term').value = 12*obj.plan_duration;
            document.getElementById('maturity_amount').value = obj.maturity_amount;
            document.getElementById('deposit_amount').value = 12*obj.cosideration_amount;
            document.getElementById('mode').value = obj.plan_type;
            document.getElementById('maturity_date').value = getmaturitydate(365*obj.plan_duration);
           
           }
        }
    }
        var code = document.getElementById('plan').value;
        var plans = <?php echo json_encode($plans); ?>;
        for (var i = plans.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(plans[i]);
           var obj = JSON.parse(txt);

           //document.getElementById('demo').innerHTML = plans;
           if (obj.product_id == code) {
            document.getElementById('amount').value = obj.cosideration_amount;
            document.getElementById('term').value = 12*obj.plan_duration;
            document.getElementById('maturity_amount').value = obj.maturity_amount;
            document.getElementById('deposit_amount').value = 12*obj.cosideration_amount;
            document.getElementById('mode').value = obj.plan_type;
            //document.getElementById('maturity_date').value = getmaturitydate(365*obj.plan_duration);
           getdate();
           }
        }
    
</script>
<script type="text/javascript">
    function addDays(theDate, days) {
    return new Date(theDate.getTime() + days*24*60*60*1000);
}

function getmaturitydate() {
//var policy_date =document.getElementById('policy_date').value;
//svar date = new Date(policy_date.getTime());

var today = addDays(new Date(), duration);
var dd = today.getDate();
var mm = today.getMonth() + 1;

var yyyy = today.getFullYear();
if (dd < 10) {
  dd = '0' + dd;
} 
if (mm < 10) {
  mm = '0' + mm;
} 
var today = dd + '/' + mm + '/' + yyyy;
return today;
}

function getdate() {
    var tt = document.getElementById('policy_date').value;
    var duration = document.getElementById('term').value;
    var days = 365*duration/12;
    var date = new Date(tt);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + parseInt(days));
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    var someFormattedDate = dd + '/' + mm + '/' + y;
    document.getElementById('maturity_date').value = someFormattedDate;
}


function dosomething(value) {
   put2values(value);
   getdate();
}
</script>
