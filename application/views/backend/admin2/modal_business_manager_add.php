<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_Employees');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/business_manager/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="" alt="...">
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
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Father/Husband Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fathername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Mother_name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="mothername" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar_Number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="aadhar" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PAN_Number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="pan_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" >
						</div> 
					</div>
					<div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Category');?></label>
                                <div class="col-sm-5">
                                    <select name="employee_category_id" class="form-control selectboxit">
                                        <?php $category = $this->db->get('employee_category')->result_array(); ?>
                                        <?php foreach ($category as $key) : ?>
                                        <option value="<?php echo $key['category_id'] ?>"><?php echo $key['name'];?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                    </div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                        
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" value="" >
						</div> 
					</div>

				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Employee_Salary_Amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="employee_salary" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>
				<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Salary_package');?></label>
                        
						<div class="col-sm-5">
							<select name="salary_method" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="annual"><?php echo get_phrase('Annual');?></option>
                              <option value="monthly"><?php echo get_phrase('Monthly');?></option>
                          </select>
						</div> 
				</div>
				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Basic');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="basic" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>
				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('House_Rent_Allowance');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="house_rent" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>

				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Conveyance_Re-imbursement');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="conyevance" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>

				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Medical_Re-imbursement');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="medical" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>

				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Special_Allowance');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="special" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
				</div>


				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Account_Number');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="account_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('IFSC_Code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="ifsc_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bank_Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bank_Address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bank_address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('PF_Account');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="pf_account" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Joining_Date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="joining_date" value="" data-start-view="2">
						</div> 
					</div>
			
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Add_Business_Manager');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>