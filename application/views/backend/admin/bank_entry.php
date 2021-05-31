<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/bank_transaction/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
                
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
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
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Transaction_Info:');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="trans_type" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="debit">Debit</option>
                              <option value="credit">Credit</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Payment_Method:');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="payment_method" class="form-control" required="required" onchange="enableaccount(this.value)">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="Cash">Cash</option>
                              <option value="Cheque">Cheque</option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Bank_Account :');?></label>
                        
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
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_Date');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="cheque_date" id="cheque_date" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('cheque_number');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="trans_date" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Amount');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="amount" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Remark');?></label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="remarks" autofocus></textarea>
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
	<div class="col-sm-8" style="text-align: center;">
			<div class="col-sm-11">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Bank Name</th>
                            <th>Account Number</th>
                            <th>Branch Name</th>
                            <th>Paymant Mode</th>
                            <th>Transaction Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rank = $this->db->get('account_balance')->result_array();$count =1; ?>
                        <?php foreach ($rank as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo get_phrase($this->db->get_where('bank_master', array('bank_id' => $row['bank_id']))->row()->bank_name); ?></td>
                            <td><?php echo $this->db->get_where('bank_master', array('bank_id' => $row['bank_id']))->row()->account_number; ?></td>
                            <td><?php echo $this->db->get_where('branch', array('branch_id' => $row['branch_id']))->row()->name; ?></td>
                            <td style="text-transform: capitalize;"><?php echo $row['payment_method']; ?></td>
                            <td style="text-transform: capitalize;"><?php echo $row['trans_type']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo date('d-m-Y',$row['trans_date']); ?></td>
                            <td><?php echo $row['remarks']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">
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

}
</script>