<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-4">
            <div class="col-sm-12">
                <?php echo form_open(base_url() . 'index.php?agent/first/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Account_No.');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="account_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('Bank_Name');?></label>
                        
                        <div class="col-sm-8">
                            <select name="bank_name" class="form-control select2" data-validate="required" id="bank_name" 
                                data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value=""><?php echo get_phrase('bank_select');?></option>
                              <!--  -->
                          </select>
                        </div> 
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Phone_No.');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="branch_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="branch_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                
                            </textarea>
                        </div>         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Opening_Amount');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="opening_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>         
            </div>
             <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('Bank_Account_Vs_Branch');?></label>
                        
                        <div class="col-sm-8">
                            <select name="bank_name" class="form-control select2" data-validate="required" id="bank_name" 
                                data-message-required="<?php echo get_phrase('value_required');?>" multiple>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value=""><?php echo get_phrase('bank_select') . '-' . ' Code';?></option>
                              <!--  -->
                          </select>
                        </div> 
                        <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                            <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('UPDATE');?></button>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('TRASH');?></button>
                        </div>
                
            </div>


            <?php echo form_close();?>

            </div>
		</div>
        <div class="col-sm-8">
            <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Account No</th>
                            <th>Bank Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Opening Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><input type="radio" name="none"></th>
                            <th>hhhh</th>
                            <th>hhh</th>
                            <th>hh</th>
                            <th>hh</th>
                            <th>hhhh</th>
                        </tr>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>