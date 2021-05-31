<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-4">
            <div class="col-sm-12">
                <?php echo form_open(base_url() . 'index.php?admin/bank_master/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Account_No.');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank_Name');?></label>
                        
                        <div class="col-sm-8">
                            <select name="bank_name" style="font-size: 14px;" class="form-control select2" data-validate="required" id="bank_name" 
                                data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="AU_SMALL_FINANCE_BANK"><?php echo get_phrase('AU_SMALL_FINANCE_BANK');?></option>
                              <option value="STATE_BANK_OF_INDIA"><?php echo get_phrase('STATE_BANK_OF_INDIA');?></option>
                              <option value="BANK_OF_BARODA"><?php echo get_phrase('BANK_OF_BARODA');?></option>
                              <!--  -->
                          </select>
                        </div> 
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_No.');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                
                            </textarea>
                        </div>         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Opening_Amount');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="opening_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>         
            </div>
             <div class="form-group">
                        <label for="field-2" class="col-sm-6 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank_Account_Vs_Branch');?></label>
                        
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control" style="font-size: 14px;" name="branch" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                
                            </textarea>
                        </div> 
                        <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                            <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
                        </div>
                
            </div>


            <?php echo form_close();?>

            </div>
		</div>
        <div class="col-sm-8">
            <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>Account No</th>
                            <th>Bank Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Opening Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $bank = $this->db->get('bank_master')->result_array();$count=1; ?>
                        <?php foreach ($bank as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo $row['account_number']; ?></td>
                            <td><?php echo get_phrase($row['bank_name']);?></td>
                            <td><?php echo get_phrase($row['phone_no']);?></td>
                            <td><?php echo get_phrase($row['address']);?></td>
                            <td><?php echo get_phrase($row['opening_amount']);?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>