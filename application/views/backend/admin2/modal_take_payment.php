<hr />
<?php echo form_open(base_url() . 'index.php?admin/account_take_payment/take/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>


 <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Account_Type');?></label>
                        
                        <div class="col-sm-5">
                            <select name="account_type" id="account_type" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>" onchange="display()">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="daily_account"><?php echo get_phrase('Daily_account');?></option>
                                <option value="Saving_Account"><?php echo get_phrase('Saving_Account');?></option>
                                <option value="Fixed_Deposit"><?php echo get_phrase('Fixed_Deposit');?></option>
                          </select>
                        </div> 
                    </div>
<div class="form-group" style="display: none;" id="account">
                        <label for="field-1" class="col-sm-3 control-label" style="text-align: left;"><?php echo get_phrase('Account_Number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="account_id" name="account_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" placeholder="Enter Account Number" autofocus>
                        </div>
                        <div class="col-sm-5">
                          <input type="button" class="btn btn-info" onclick="get_detail_account()" value="Get_Info">
                        </div>
                    </div>
<div id="information" class="col-sm-5">
  


</div>
<?php echo form_close();?>







<script type="text/javascript">

    function display() {
      document.getElementById('account').style.display = 'block';
    }
    function get_detail_account() {
      var account_type = document.getElementById('account_type').value;
      var account_id = document.getElementById('account_id').value;
      $.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_account_detail/'+account_type + '/'+account_id,
            success: function(response)
            {
                jQuery('#information').html(response);
            }
        });
    }
</script>
