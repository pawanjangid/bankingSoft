<?php 
$edit_data		=	$this->db->get_where('user' , array('student_id' => $param2))->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_Borrower');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/student/do_update/'.$row['student_id'].'/'.$row['class_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
								value="<?php echo $row['name']; ?>">
						</div>
					</div>

				

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="class_id" disabled
								value="<?php echo $this->db->get_where('class' , array('class_id' => $row['class_id']))->row()->name; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
                        
						<div class="col-sm-5">
							<select name="section_id" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select_section');?></option>
                              <?php
                              	$sections = $this->db->get_where('section' , array('class_id' => $row['class_id']))->result_array();
                              	foreach($sections as $row2):
                              ?>
                              <option value="<?php echo $row2['section_id'];?>"
                              	<?php if($row['section_id'] == $row2['section_id']) echo 'selected';?>><?php echo $row2['name'];?></option>
                          <?php endforeach;?>
                          </select>
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
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('start_date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="start_date" value="<?php echo $row['start_date']; ?>">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('paid_ins');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="paid_ins"
								value="<?php echo $row['paid_ins'];?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('last_date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="last_date" value="<?php echo $row['last_date']; ?>">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Status');?></label>
                        
						<div class="col-sm-5">
							<select name="section_id" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select_status');?></option>
                              
                              <option value="paid">Paid</option>
                              <option value="unpaid">UnPaid</option>
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

