<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/transaction_entry_section/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">

            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-4 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Entry_Date');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" name="renewal_date"  value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_Number');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ac_no" required="required" oninput="get_account(this.value);" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="member_name" id="member_name"  value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"></label>
                <div class="col-sm-4">
                            <select name="payment_detail" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="deposit">DEPOSIT</option>
                              <option value="withdraw">WITHDRAW</option>
                          </select>
                </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payee_Name');?></label>
                        
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="payee_name" required="required" value="" autofocus>
                        </div>
                      
            </div>
             <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Amount');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="amount" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;">Pay By :</label>
                        <div class="col-sm-4">
                                    <select name="payment_type" class="form-control" required="required" onchange="enableaccount(this.value)">
                                      <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                                      <option value="Cash">Cash</option>
                                      <option value="Card">Card</option>
                                      <option value="Cheque">Cheque</option>
                                      <option value="Saving_Acount">Saving Acount</option>
                                  </select>
                        </div>
                      
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Chq_Date');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="cheque_date" id="cheque_date"  disabled="disabled" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Chq_No');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="Cheque_no" id="cheque_no" disabled="disabled" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank:');?></label>
                        <div class="col-sm-10 input-field">
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
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Deposit_A/C_Number');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="deposit_account" id="deposit_account" disabled="disabled" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Remarks');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="remark" value="" autofocus>
                        </div>
                      
            </div>
        
			</div>
            <div class="col-sm-6">
                 <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </div>
            <?php echo form_close();?>
		</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-12" style="text-align: center;">
			<div class="col-sm-12">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Branch</th>
                            <th>Trans Date</th>
                            <th>Account No</th>
                            <th>PayBy</th>
                            <th>Deposit</th>
                            <th>WithDrawal</th>
                            <th>PayType</th>
                            <th>Cheque Date</th>
                            <th>Cheque No</th>
                            <th>BankName</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $trans = $this->db->order_by('deposit_id','desc')->get_where('daily_deposit', array('payment_desc' => '3'))->result_array();$count =1; ?>
                        <?php foreach ($trans as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo $this->db->get_where('branch', array('branch_id' => $row['branch_id']))->row()->name; ?></td>
                            <td><?php echo date('d-m-Y', $row['renewal_date']); ?></td>
                            <td><?php echo $row['ac_no']; ?></td>
                            <td><?php echo $row['payee_name']; ?></td>
                            <td><?php echo $row['collection_amount']; ?></td>
                            <td><?php echo $row['widthdraw_amount']; ?></td>
                            <td><?php echo $row['payment_type']; ?></td>
                            <td><?php echo date('d-m-Y', $row['cheque_date']); ?></td>
                            <td><?php echo $row['cheque_no']; ?></td>
                            <td><?php echo $this->db->get_where('bank_master',  array('bank_id' => $row['bank_id']))->row()->bank_name ; ?></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">
function get_account(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj.member_name;
            document.getElementById('member_name').value = obj.member_name;

    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_account/'; ?>" + value, true);
  xhttp.send();
}

 function enableaccount(value) {
    if (value == 'Cheque') {
        document.getElementById('bank_id').disabled = false;
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('cheque_no').disabled = false;
    }
    else if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
    }

    else {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
      
    }

}
</script>