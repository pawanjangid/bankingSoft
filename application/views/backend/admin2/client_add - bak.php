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
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Date of Brith');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Aadhar');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="aadhar" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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
                            <input type="text" class="form-control" name="number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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
                                $agent = $this->db->get('teacher')->result_array();
                                foreach($agent as $row):
                                    ?>
                                    <option value="<?php echo $row['teacher_id'];?>">
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
                            <input type="text" class="form-control" name="amount" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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