<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/payment_voucher/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Voucher_Name :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="ledger_id" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $voucher = $this->db->get('ledger_master')->result_array(); ?>
                              <?php foreach ($voucher as $row) : ?>
                              <option value="<?php echo $row['ledger_id']; ?>"><?php echo $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="payment" required="required" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Mode:');?></label>
                            
                            <div class="col-sm-9">
                                <select name="payment_type" class="form-control" onchange="enableaccount(this.value);">
                                  <option value=""><?php echo get_phrase('select');?></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Saving_Account">Saving Account</option>
                              </select>
                            </div>
            </div>
            <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_Date');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="cheque_date" id="cheque_date"  value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('cheque_number');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Bank :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="bank_id" id="bank_id" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $bank = $this->db->get('bank_master')->result_array(); ?>
                              <?php foreach ($bank as $row) : ?>
                              <option value="<?php echo $row['bank_id']; ?>"><?php echo $row['bank_name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"  ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
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
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Remarks');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="remarks" required="required" value="" autofocus>
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
                            <th>Expence Category</th>
                            <th>Deposit Amount</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $paymentlist = $this->db->get_where('daily_deposit',array('payment_desc' => '2'))->result_array();$count =1; ?>
                        <?php foreach ($paymentlist as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo $this->db->get_where('ledger_master',array('ledger_id' => $row['ledger_id']))->row()->name; ?></td>
                            <td><?php echo $row['widthdraw_amount']; ?></td>
                            <td><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group">
                                    <a href="<?php echo base_url();?>index.php?admin/loadpage/voucher_print/<?php echo $row['deposit_id'];?>" class="btn btn-default btn-sm" style="margin-right: 10px;">
                                        <i class="entypo-pencil"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">

function enableaccount(value) {
    if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
       
    }
    else if (value == 'Cheque') {
        document.getElementById('cheque_no').disabled = false;
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('bank_id').disabled = false;
        
    }else{
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
      
    }

}
</script>