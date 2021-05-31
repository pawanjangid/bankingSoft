<div class="row">
<div class="col-md-5">
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


            <a href="javascript:;" style="margin-right: 10px;"  onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_take_payment/');"
                class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('Take_Account_Payment');?>
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
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('agent');?>" 
                    		data-postfix="" data-duration="800" data-delay="0" style="color: #0000ff;">0</div>
                    
                    <h3 style="color: #0000ff;"><?php echo get_phrase('Agent');?></h3>
                </div>
                
            </div>
           
    </div>
    <div class="col-md-7">
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

</div>
    