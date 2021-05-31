<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<?php $product = $this->db->get_where('product_master', array('product_id' => $data_id))->result_array(); ?>
<?php foreach ($product as $row): ?>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/product_master/do_update/' . $data_id , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
            <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Plan_Type');?></label>
                        
                        <div class="col-sm-6">
                            <select name="plan_type" id="plan_type" class="form-control select" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="inputenable(this.value)">
                              <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="FD" <?php if ($row['plan_type'] == 'FD') {echo 'selected="selected"';} ?>><?php echo get_phrase('FD');?></option>
                              <option value="RD" <?php if ($row['plan_type'] == 'RD') {echo 'selected="selected"';} ?>><?php echo get_phrase('RD');?></option>
                              <option value="DRD" <?php if ($row['plan_type'] == 'DRD') {echo 'selected="selected"';} ?>><?php echo get_phrase('DRD');?></option>
                              <option value="MIS" <?php if ($row['plan_type'] == 'MIS') {echo 'selected="selected"';} ?>><?php echo get_phrase('MIS');?></option>
                          </select>
                        </div> 
            </div>
            <div class="form-group" id="rd_payment_mode" style="display: none;">
                        <label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('RD_Payment_Mode');?></label>
                        
                        <div class="col-sm-6">
                            <select name="rd_payment" id="rd_payment" class="form-control select" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="modeenable(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="Monthly"><?php echo get_phrase('Monthly');?></option>
                              <option value="Quarterly"><?php echo get_phrase('Quarterly');?></option>
                              <option value="Half_Yearly"><?php echo get_phrase('Half_Yearly');?></option>
                              <option value="Yearly"><?php echo get_phrase('Yearly');?></option>
                          </select>
                        </div> 
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_plan_duration');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="plan_duration" name="plan_duration" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['plan_duration']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Consideration_Amount');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cosideration_amount" name="cosideration_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['cosideration_amount']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Monthly_Amount');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="monthly_amount" name="monthly_amount" value="<?php echo $row['monthly_amount']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Half_year_Amount');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="half_year_amount" name="half_year_amount" value="<?php echo $row['half_year_amount']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Interest_Percentage(%)');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="interest_rate" name="interest_rate" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['interest_rate']; ?>" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Maturity_Amount');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="maturity_amount" name="maturity_amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['maturity_amount']; ?>" autofocus>
                        </div>
                         
            </div>
			</div>
            <div class="col-sm-6">
                <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Select_plan_Category');?></label>
                        
                        <div class="col-sm-6">
                            <select name="plan_category" class="form-control select" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                  <option value="" disabled="disabled"><?php echo get_phrase('select');?></option>
                                  <option value="normal" <?php if ($row['plan_type'] == 'normal') {echo 'selected="selected"';} ?>><?php echo get_phrase('Normal');?></option>
                                  <option value="special" <?php if ($row['plan_type'] == 'special') {echo 'selected="selected"';} ?>><?php echo get_phrase('Special');?></option>
                            </select>
                        </div> 
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('');?></label>
                        
                        <div class="col-sm-6">
                            
                        </div>
                         
                </div>
                
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Enter_Quarterly_Amount');?></label>
                    
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="quarterly_amount" name="quarterly_amount" value="<?php echo $row['quarterly_amount']; ?>" autofocus>
                        </div>
                         
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Yearly_Amount');?></label>
                        
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="yearly_amount" name="yearly_amount" value="<?php echo $row['yearly_amount']; ?>" autofocus>
                            </div>
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"></label>
                        
                        <div class="col-sm-6">
                            <input type="button" class="btn btn-primary" onclick="calculate()" value="CALCULATE AMOUNT">
                        </div>
                         
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Quota_Percentage(%)');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="quota_percentage" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['quota_percentage']; ?>" autofocus>
                        </div>
                         
                </div>
                <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Plan_Name');?></label>
                        
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="plan_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['plan_name']; ?>" autofocus>
                        </div>
                         
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('UPDATE');?></button>
            </center>
            
            <?php echo form_close();?>
		</div>
</div>
<?php endforeach; ?>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-12" style="text-align: center;">
	   <div class="col-sm-11">
		<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>Plan Name</th>
                            <th>Plan type</th>
                            <th>Interest Rate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <?php $dataget = $this->db->get('product_master')->result_array();$count = 1; ?>
                    <?php foreach ($dataget as $row): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td style="text-align: center;"><?php echo $row['plan_name']; ?></td>
                            <td style="text-align: center;"><?php echo $row['plan_type']; ?></td>
                            <td style="text-align: center;"><?php echo $row['interest_rate']; ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-sm" href="showAjaxModal('<?php echo base_url();?>index.php?admin/product_master/delete/<?php echo $row['relation_id'];?>');">
                                        <i class="entypo-trash"></i>
                                    </button>
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
function calculate() {

    var type = document.getElementById('plan_type').value;

    var duration  = document.getElementById('plan_duration').value;

    var amount1 = parseInt(document.getElementById('cosideration_amount').value);
    var amount =amount1;
    var interest_rate = document.getElementById('interest_rate').value;

    var test_amount = 0;
    if (type == 'FD') {
        
        var duration_mounth = 12*duration;
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

function inputenable(selected) {
    if (selected == 'FD') {
        document.getElementById('monthly_amount').disabled = true;
        document.getElementById('half_year_amount').disabled = true;
        document.getElementById('yearly_amount').disabled = true;
        document.getElementById('quarterly_amount').disabled = true;
        document.getElementById('rd_payment_mode').style.display = 'none';
        document.getElementById('cosideration_amount').disabled = false;

    }
    if (selected == 'RD') {
        document.getElementById('monthly_amount').disabled = false;
        document.getElementById('half_year_amount').disabled = false;
        document.getElementById('yearly_amount').disabled = false;
        document.getElementById('quarterly_amount').disabled = false;
        document.getElementById('rd_payment_mode').style.display = 'block';
        document.getElementById('cosideration_amount').disabled = true;
    }
    if (selected == 'DRD') {
        document.getElementById('monthly_amount').disabled = true;
        document.getElementById('half_year_amount').disabled = true;
        document.getElementById('yearly_amount').disabled = true;
        document.getElementById('quarterly_amount').disabled = true;
        document.getElementById('rd_payment_mode').style.display = 'none';
        document.getElementById('cosideration_amount').disabled = false;
    }
    if (selected == 'MIS') {
        document.getElementById('monthly_amount').disabled = true;
        document.getElementById('half_year_amount').disabled = true;
        document.getElementById('yearly_amount').disabled = true;
        document.getElementById('quarterly_amount').disabled = true;
        document.getElementById('rd_payment_mode').style.display = 'none';
        document.getElementById('cosideration_amount').disabled = false;
    }
}
function modeenable(selected) {

  
        if (selected == 'Monthly') {
            document.getElementById('monthly_amount').disabled = false;
            document.getElementById('half_year_amount').disabled = true;
            document.getElementById('yearly_amount').disabled = true;
            document.getElementById('quarterly_amount').disabled = true;
        }
        if (selected == 'Quarterly') {
            document.getElementById('monthly_amount').disabled = true;
            document.getElementById('half_year_amount').disabled = true;
            document.getElementById('yearly_amount').disabled = true;
            document.getElementById('quarterly_amount').disabled = false;
        }
        if (selected == 'Half_Yearly') {
            document.getElementById('monthly_amount').disabled = true;
            document.getElementById('half_year_amount').disabled = false;
            document.getElementById('yearly_amount').disabled = true;
            document.getElementById('quarterly_amount').disabled = true;
        }
        if (selected == 'Yearly') {
            document.getElementById('monthly_amount').disabled = true;
            document.getElementById('half_year_amount').disabled = true;
            document.getElementById('yearly_amount').disabled = false;
            document.getElementById('quarterly_amount').disabled = true;
        }
    }

</script>