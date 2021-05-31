<?php 
$edit_data		=	$this->db->get_where('approve' , array('application_id' => $param2))->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Approve_Application');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?credit_manager/approve/do_update/'.$row['application_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('sanction_loan_amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="sanction_loan" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['sanction_loan']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['date']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('rate_of_interest');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="rate_of_interest" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['rate_of_interest']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('number_of_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="number_of_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['number_of_emi']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date_of_first_emi');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date_of_first_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['date_first_emi']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Advance_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="advance_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['advance_emi']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Pre_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="pre_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['pre_emi']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('EMI_Mode');?></label>
                       
						<div class="col-sm-5">
							<select name="emi_mode" class="form-control selectboxit">
                             <option value=""><?php echo get_phrase('select');?></option>
                             <option value="daily" selected="<?php if($row['emi_mode'] == 'daily') echo 'selected'; ?>"><?php echo get_phrase('daily');?></option>
                             <option value="weekly" selected="<?php if($row['emi_mode'] == 'weekly') echo 'selected'; ?>"><?php echo get_phrase('weekly');?></option>
                             <option value="half_month" selected="<?php if($row['emi_mode'] == 'half_month') echo 'selected'; ?>"><?php echo get_phrase('Half_month');?></option>
                             <option value="monthly" selected="<?php if($row['emi_mode'] == 'monthly') echo 'selected'; ?>"><?php echo get_phrase('Monthly');?></option>
                             
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Processing_fee');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="processing_fee" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['processing_fee']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Technical_Charge');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="technical_charge" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['technical_charges']; ?>">
						</div>
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Update');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>
<script type="text/javascript">
	function getinfo(value) {

		if (value=='yes') {
			
			document.getElementById('Previous_loan').style.display = 'block';
		}
		else{
			document.getElementById('Previous_loan').style.display = 'none';
		}
			
	}
</script>
