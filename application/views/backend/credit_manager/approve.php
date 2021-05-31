
<?php
$application_info   =   $this->db->get_where('user' , array('application_id' => $param2 ))->result_array();
foreach($application_info as $row):?>

<div class="profile-env">
    
    <header class="row">
       
        
        <div class="col-sm-9">
            
            <ul class="profile-info-sections">
                <li style="padding:0px; margin:0px;">
                    <div class="profile-name">
                            <h3>
                                <?php echo $row['name'];?>                     
                            </h3>
                    </div>
                </li>
            </ul>
            
        </div>
        
        
    </header>
    
    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table table-bordered">
                
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                        <td><?php echo get_phrase('Category');?></td>
                        <td><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
                    <?php endif;?>
                    <tr>
                        <td><?php echo get_phrase('Aadhar Number');?></td>
                        <td><b><?php echo $row['aadhar'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('PAN_Number');?></td>
                        <td><b><?php echo $row['pan_number'];?></b></td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Mobile_number');?></td>
                        <td><b><?php echo $row['phone'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $row['gender'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Address');?></td>
                        <td><b><?php echo $row['address'];?></b></td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Requested_amount');?></td>
                        <td><b><?php echo $row['amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('date');?></td>
                        <td><b><?php echo $row['date'];?></b></td>
                    </tr>
                    <tr>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Agent</td>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Detail</td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Agent');?></td>
                        <td><b><?php echo $this->db->get_where('employee', array('employee_id' => $row['agent_id']))->row()->name;?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Code');?></td>
                        <td><b><?php echo $this->db->get_where('employee', array('employee_id' => $row['agent_id']))->row()->code;?></b></td>
                    </tr>
                </table>
            </div>
        </div>      
    </section>
    
    
    
</div>


<?php endforeach;?>

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
					<?php echo get_phrase('Approve_Application');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?credit_manager/forward_to_second/insert/'.$row['application_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
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
							<input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('IFSC_Code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="ifsc_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bank_Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('bank_address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('bill_k_number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bill_k_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cibil_score');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="cibil_score" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('discussion');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="discussion" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('FI Report');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="FI_report" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Remark');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="Remark" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Previous_Running_loan');?></label>
                        
						<div class="col-sm-5">
							<select name="loan_running" class="form-control selectboxit" onchange="getinfo(this.value);">
                             <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                             <option value="no"><?php echo get_phrase('no');?></option>
                             <option value="yes"><?php echo get_phrase('yes');?></option>
                          </select>
						</div> 
					</div>
					<div id="Previous_loan" style="display: none;">
							<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('loan_amount');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="loan_amount">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('loan_date');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="loan_date">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('emi_amount');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="emi_amount">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('emi_type');?></label>
	                        
							<div class="col-sm-5">
								<input type="text" class="form-control" name="emi_type">
							</div>
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_Borrower');?></button>
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
