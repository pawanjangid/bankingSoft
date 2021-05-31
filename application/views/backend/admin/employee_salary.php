<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">


		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/employee_salary/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-8">
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Employee_code');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="employee_code" id="employee_code" value="" oninput="get_employeedata(this.value);" autofocus>
                        </div>
                        
            </div> 
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank_name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="bank_name" id="bank_name" value="" oninput="get_employeedata(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('AC_NO');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="bank_ac" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>     
            
			<div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Joining_Date');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" name="date_of_joining" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('grade');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="grade" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('designation');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" name="designation" id="designation" value="" autofocus>
                        </div>         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PF_no');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="PF_no" id="PF_no" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('UAN_no');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="UAN_no" id="UAN_no" value="" autofocus>
                        </div>           
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PAN_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="PAN_no" id="PAN_no" disabled="disabled" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('ESI_no');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ESI_no" id="ESI_no" value="" autofocus>
                        </div>           
            </div>
            
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('meal_reference_id');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="meal_reference_id" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('super_annuation_id');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="super_annuation_id" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('NPS_PRAN');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="NPS_PRAN" value="" autofocus>
                        </div>
            </div>
            <div><center>Salary Detail</center></div>
             <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Basic Pay');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="basic_pay" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('HRA');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="HRA" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Special_Allow');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="special_allow" value=""  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('petrol_reimb');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="petrol_reimb" id="petrol_reimb" value="" autofocus>
                        </div>
            </div>
			</div>
            <div class="col-sm-4">
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_Subsidy');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone_subsidy" id="phone_subsidy" value="" autofocus>
                        </div>  
                </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Driver_salary');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="driver_salary" id="driver_salary" value="" autofocus>
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
