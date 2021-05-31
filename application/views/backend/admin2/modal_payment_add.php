<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_New_payment');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/take_payment/take/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="title" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
					
					
					 <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Category');?></label>
                        
                        <div class="col-sm-5">
                            <select name="income_mode" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>" >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
                                $mode = $this->db->get('income_mode')->result_array();
                                foreach($mode as $row):
                                    ?>
                                    <option value="<?php echo $row['mode_id'];?>">
                                            <?php echo $row['name'];?>
                                            </option>
                                <?php
                                endforeach;
                              ?>
                          </select>
                        </div> 
                    </div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="amount" value="" >
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date" value="" >
						</div> 
					</div>
                    
			
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('add_payment');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>