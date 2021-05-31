
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
                        <td><b><?php echo $this->db->get_where('agent', array('agent_id' => $row['agent_id']))->row()->name;?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Code');?></td>
                        <td><b><?php echo $this->db->get_where('agent', array('agent_id' => $row['agent_id']))->row()->code;?></b></td>
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
				
                <?php echo form_open(base_url() . 'index.php?admin/approve/insert/'.$row['application_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('sanction_loan_amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="sanction_loan" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('rate_of_interest');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="rate_of_interest" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('number_of_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="number_of_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date_of_first_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date_of_first_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Advance_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="advance_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Pre_EMI');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="pre_emi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('EMI_Mode');?></label>
                        
						<div class="col-sm-5">
							<select name="emi_mode" class="form-control selectboxit">
                             <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                             <option value="daily"><?php echo get_phrase('daily');?></option>
                             <option value="weekly"><?php echo get_phrase('weekly');?></option>
                             <option value="half_month"><?php echo get_phrase('Half_month');?></option>
                             <option value="monthly"><?php echo get_phrase('Monthly');?></option>
                             
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Processing_fee');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="processing_fee" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Technical_Charge');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="technical_charge" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Approve');?></button>
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
