<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/daily_deposit/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

			<div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Policy_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="policy_no" id="policy_no" required="required" value="" oninput="get_data(this.value);" autofocus>
                        </div>
                         
            </div> 
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Installment_No');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="installment_no" id="installment_no" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('To');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="installment_no_to" id="installment_no_to" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Paid');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="paid_installment" id="paid_installment" value="" autofocus>
                        </div>        
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Collection_Amount');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="collection_amount" id="collection_amount" required="required" value="" onfocusout="installment_take(this.value)" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Late_Fee:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="late_fee" id="late_fee" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Renewal_Date:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="renewal_date" required="required" value="" autofocus onchange="calculateExp(this.value);">
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Payment_Type');?></label>
                        
                        <div class="col-sm-3">
                            <select name="payment_type" class="form-control" onchange="enableaccount(this.value);">
                                <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Card">Card</option>
                                <option value="Saving_Account">Saving_Account</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Cheque_no');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" disabled="disabled" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Cheque_Date:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="cheque_date" id="cheque_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus disabled="disabled">
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Bank_Account :');?></label>
                        
                       <div class="col-sm-3 input-field">
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
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Deposit_Account');?></label>
                        
                       <div class="col-sm-7">
                            <input type="text" class="form-control" name="deposit_account" id="deposit_account"  disabled="disabled" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('SB_Account');?></label>
                        
                       <div class="col-sm-3">
                            <input type="text" class="form-control" name="saving_account" id="saving_account"  disabled="disabled" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Bal.');?></label>
                        
                       <div class="col-sm-3">
                            <input type="text" class="form-control" name="saving_balance" id="saving_balance"  disabled="disabled" value="" autofocus>
                        </div>
            </div>
			</div>
            <div class="col-sm-6">
                <div style="text-align: center;font-size: 14px;">Bank Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_name" id="member_name" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Plan_Code');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="plan_code" id="plan_code" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Term:');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="term" id="term" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Mode:');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="mode" id="mode" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Total_Installment:');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="total_installment" id="total_installment" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Installment_Amount:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="installment_amount" id="installment_amount" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Associate_Code:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_code" id="associate_code" value="" autofocus>
                       <!--  </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Introducer:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="introducer" value="" autofocus>
                        </div> -->
            </div>
           <!--  <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Associate_Name:');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="associate_name" value="" autofocus>
                        </div>   
            </div> -->
            <div class="col-sm-12" style="margin-top: 40px;">
                <center>
                    <button type="submit" class="btn btn-danger" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
                </center>
              
                    
            </div>
             <?php echo form_close();?>

		</div>
</div>
</div>
</div>

<hr>
<center><h1>HISTORY</h1></center>
<hr>
<div class="row">
    <div class="col-sm-10 offset-sm-1">
        <table class="table table-bordered">
            <thead>
                <tr style="font-size: 14px;color: green;">
                    <th>Policy NO</th>
                    <th>Due Date</th>
                    <th>Installment</th>
                    <th>Installment To</th>
                    <th>Renewal Date</th>
                    <th>Paid Installment</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px;">
                <?php $daily_deposit = $this->db->order_by('deposit_id','desc')->get_where('daily_deposit', array('payment_desc' => 1),'30')->result_array();?>
                <?php foreach ($daily_deposit as $row): ?>
                <tr>
                    <td><?php echo $row['policy_no']; $days = $this->db->get_where('investment', array('policy_no' => $row['policy_no']))->row()->paid_installment;
                   $timestamp = strtotime( '+' . $days .' days',$this->db->get_where('investment', array('policy_no' => $row['policy_no']))->row()->policy_date);?></td>
                    <td><?php echo date('d-m-Y',$timestamp); ?></td>
                    <td><?php echo $row['installment_no']; ?></td>
                    <td><?php echo $row['installment_no_to'];  ?></td>
                    <td><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
                    <td><?php echo $row['installment_no_to']; ?></td>
                    <td><?php echo $row['collection_amount']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
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
<script>
function get_data(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
           document.getElementById('member_name').value = obj.member_name;
           document.getElementById('plan_code').value = obj.plan_name;
           document.getElementById('term').value = 12*obj.plan_duration;
           document.getElementById('mode').value = obj.plan_mode;
            if (obj.plan_type=='FD') {
            document.getElementById('total_installment').value = obj.plan_duration;
           }
           if (obj.plan_type == 'RD') {
            document.getElementById('total_installment').value = obj.plan_duration*12;
           }
           if (obj.plan_type=='DRD') {
            document.getElementById('total_installment').value = obj.plan_duration*360;
           }
           document.getElementById('installment_amount').value = obj.amount;
           document.getElementById('associate_code').value = obj.associate_code;
           document.getElementById('paid_installment').value = obj.paid_installment;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_data/'; ?>" + value, true);
  xhttp.send();
}

function enableaccount(value) {
    if (value == 'Cheque') {
        document.getElementById('cheque_no').disabled = false;
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('saving_balance').disabled = true;
        document.getElementById('saving_account').disabled = true;
        document.getElementById('deposit_account').disabled = true;
        document.getElementById('bank_id').disabled = false;
    }
    else if (value == 'Saving_Account') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('saving_balance').disabled = false;
        document.getElementById('saving_account').disabled = false;
        document.getElementById('deposit_account').disabled = false;
    }else{
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('bank_id').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('saving_balance').disabled = true;
        document.getElementById('saving_account').disabled = true;
        document.getElementById('deposit_account').disabled = true;
    }

}
function calculate(amount) {

    var type = document.getElementById('plan_type').value;

    var duration  = document.getElementById('plan_duration').value;

    var amount1 = parseInt(amount);
    var amount =amount1;
    var interest_rate = document.getElementById('interest_rate').value;

    var test_amount = 0;
    if (type == 'FD') {
        
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
        if (document.getElementById('rd_payment').value == 'Monthly') {
            var amount = document.getElementById('monthly_amount').value;
            var amount1 = amount;
                var duration_mounth = 12*duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = (interest_rate*amount1)/1200;
                    test_amount = test_amount+interest;
                    amount1 = parseInt(amount1)+parseInt(amount);
                }
                var maturity_amount = duration_mounth*amount + test_amount;
                document.getElementById('maturity_amount').value = maturity_amount;
        }
        
    }
    if (type == 'MIS') {

    }
    if (type == 'DRD') {
                var amount1 = amount;
                var duration_mounth = 12*duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = (interest_rate*amount1)/2000;
                    test_amount = test_amount+interest;
                    amount1 = parseInt(amount1)+parseInt(amount);
                }
                var maturity_amount = duration_mounth*amount + test_amount;
                document.getElementById('maturity_amount').value = maturity_amount;
    }
}

function installment_take(value) {
    
    var installment = document.getElementById('installment_amount').value;
    var collection_amount = value;
    var paid_installment = document.getElementById('paid_installment').value;   
    var collected_ins = collection_amount/installment;
    document.getElementById('installment_no').value = parseInt(paid_installment)+1;
    document.getElementById('installment_no_to').value = parseInt(paid_installment)+collected_ins;
    document.getElementById('paid_installment').value = parseInt(paid_installment)+collected_ins;
}

</script>


