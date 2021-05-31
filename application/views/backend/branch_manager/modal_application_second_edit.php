<?php
header("Cache-Control: no-cache, must-revalidate"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
?>

<?php 
$edit_data		=	$this->db->get_where('user' , array('application_id' => $param2))->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_application');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/second/do_update/'.$row['application_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
								value="<?php echo $row['name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('S.O./W.O.');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
								value="<?php echo $row['fname']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar Number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="aadhar" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
								value="<?php echo $row['aadhar']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PAN_number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="pan_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
								value="<?php echo $row['pan_number']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="amount"
								value="<?php echo $row['amount'];?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                        
						<div class="col-sm-5">
							<div>
								<?php echo $row['date']; ?>
							</div> 
					</div>
				</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select_gender');?></option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
						</div> 
					</div>
				

					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" 
								value="<?php echo $row['phone']; ?>" >
						</div> 
					</div>
                    <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" 
								value="<?php echo $row['address']; ?>" >
						</div> 
					</div>
					<?php 
$edit_data		=	$this->db->get_where('loan_detail' , array('application_id' => $param2))->result_array();
foreach ($edit_data as $key):
?>
<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo base_url() . '/uploads/applicant_image/photo_' . $row['application_id'] . '.jpg'; ?>" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Account_number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['account_number']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('IFSC_Code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="ifsc_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['ifsc_code']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bank_Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['bank_name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('bank_address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['bank_address']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('bill_k_number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bill_k_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['bill_k_number']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cibil_score');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="cibil_score" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $key['cibil_score']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('discussion');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="discussion" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
								<?php echo $key['discussion']; ?>
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('FI Report');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="FI_report" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
								<?php echo $key['FI_report']; ?>
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Previous_Running_loan');?></label>
                        
						<div class="col-sm-5">
							<select name="loan_running" class="form-control selectboxit" onchange="getinfo(this.value);">
                             <option value=""><?php echo get_phrase('select');?></option>
                             <option value="no" selected="<?php if($key['Previous_loan'] == 'no'){echo 'selected';} ?>""><?php echo get_phrase('no');?></option>
                             <option value="yes" selected="<?php if($key['Previous_loan'] == 'yes'){echo 'selected';} ?>"><?php echo get_phrase('yes');?></option>
                          </select>
						</div> 
					</div>
					<div id="Previous_loan" style="<?php if($key['previous_loan']=='yes') echo 'display:block'; ?>">


						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('loan_amount');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="loan_amount" value="<?php echo $key['previous_loan_amount']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('loan_date');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="loan_date" value="<?php echo $key['loan_date']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('emi_amount');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="emi_amount" value="<?php echo $key['emi_amount']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('emi_type');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="emi_type" value="<?php echo $key['emi_type']; ?>">
							</div>
						</div>
</div>

<?php
endforeach;
?>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_application');?></button>
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