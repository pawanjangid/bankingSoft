<div class="row">
<div class="col-md-4">
			<div class="col-md-12">
				 <div class="tile-stats" style="background: #24b50e; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/expense_add/');" 
class="btn btn-primary pull-right">
<i class="entypo-plus-circled"></i>
<?php echo get_phrase('add_new_expense');?>
</a>
<a href="javascript:;" style="margin-right: 10px;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_teacher_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('add_new_Agent');?>
                </a> 
                
            </div>    
            </div>


            <div class="col-md-12">
                 <div class="tile-stats" style="background: #ff00c3; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_take_emi/');" 
class="btn btn-primary pull-right">
<i class="entypo-plus-circled"></i>
<?php echo get_phrase('Take_EMI');?>
</a>
<a href="javascript:;" style="margin-right: 10px;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_payment_add/');" 
                class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('Add_Payment');?>
                </a> 
                
            </div>    
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats" style="background: #8000ff; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('employees');?>" 
                            data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <h3><?php echo get_phrase('Employees');?></h3>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats" style="background: #ff8000; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('user');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('Applicant');?></h3>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats" style="background: #ffffff; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('employee');?>" 
                    		data-postfix="" data-duration="800" data-delay="0" style="color: #0000ff;">0</div>
                    
                    <h3 style="color: #0000ff;"><?php echo get_phrase('Agent');?></h3>
                </div>
                
            </div>
           
    </div>
    <div class="col-md-8">
     <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('Income_Statement');?>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open(base_url() . 'index.php?admin/income_statement/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    

                  
                   
                    
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Start_Date');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="start_date" value="" data-start-view="2" id="start_date">
                        </div> 
                    </div>

                     <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('End_Date');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="end_date" value="" data-start-view="2" id="end_date">
                        </div> 
                    </div>                   
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Get_Info');?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
   

</div>
    </div>

    
	<div class="col-md-8">
     <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('applicant');?>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open(base_url() . 'index.php?admin/first/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
    				

    				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo');?></label>
                        
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
										<input type="file" name="photo" accept="image/*" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('S/o,W/o');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="fathername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('date_of_birth');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
                        </div> 
                    </div>
                   	<div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Marital_Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="marital_status" class="form-control" data-validate="required"
                                data-message-reaquired="<?php echo get_phrase('value_required');?>">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="unmarried"><?php echo get_phrase('Unmarried');?></option>
                                <option value="married"><?php echo get_phrase('Married');?></option>
                                <option value="other"><?php echo get_phrase('Other');?></option>
                          </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="aadhar" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PAN_number');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="pan_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('mobile_no');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Permanent_Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="permanent_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="date" value="" data-start-view="2">
                        </div> 
                    </div>

                    
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Category');?></label>
                        
                        <div class="col-sm-5">
                            <select name="class_id" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
                                $classes = $this->db->get('class')->result_array();
                                foreach($classes as $row):
                                    ?>
                                    <option value="<?php echo $row['class_id'];?>">
                                            <?php echo $row['name'];?>
                                            </option>
                                <?php
                                endforeach;
                              ?>
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-5">
                            <select name="sex" class="form-control" data-validate="required" id="class_id" 
                                data-message-reaquired="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                                <option value=""><?php echo get_phrase('select');?></option>
                                <option value="male"><?php echo get_phrase('Male');?></option>
                                <option value="female"><?php echo get_phrase('Female');?></option>
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Agent');?></label>
                        
                        <div class="col-sm-5">
                            <select name="agent_id" class="form-control" data-validate="required" id="agent_id" 
                                data-message-required="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
                                $agent = $this->db->get('employee')->result_array();
                                foreach($agent as $row):
                                    ?>
                                    <option value="<?php echo $row['employee_id'];?>">
                                            <?php echo $row['name'];?>
                                            </option>
                                <?php
                                endforeach;
                              ?>
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_amount');?></label>
                        
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar_Card_front');?></label>
                        
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
										<input type="file" name="aadhar_card_front" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar_Card_Back');?></label>
                        
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
										<input type="file" name="aadhar_card_back" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PAN_Card');?></label>
                        
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
										<input type="file" name="pan_card" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Electricity_Bill');?></label>
                        
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
										<input type="file" name="electricity_bill" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Id_Card_Front');?></label>
                        
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
										<input type="file" name="id_card_front" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Id_Card_Back');?></label>
                        
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
										<input type="file" name="id_card_back" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Remark');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="remark"  value="" autofocus>
                        </div>
                    </div>
                  
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Add_Applicant');?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
   

</div>
    </div>
</div>

</div>
  
