<?php 
$edit_data	=	$this->db->get_where('credit_manager' , array('employee_id' => $param2) )->result_array();
foreach ($edit_data as $row):
?>
<section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table" style="border : 1px solid black;border-collapse: collapse;;width: 100%;">
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <h4>
                                <p style="font-size: 20px;"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?></p>
                               Address : <?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?>
                                <br>
                                Contact : <?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description; ?>                     
                        </h4>
                    </td>
                </tr>
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Name :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['name']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Bank Name :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['bank_name']; ?>
                   </td>
               </tr style="border : 1px solid black;border-collapse: collapse;">
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Designation :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo 'CREDIT MANAGER'; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Account Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['account_number']; ?>
                   </td>
               </tr >
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Aadhar Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['aadhar']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       IFSC :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['ifsc_code']; ?>
                   </td>
               </tr >
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      PAN Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['pan_number']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Address :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['address']; ?>
                   </td>
               </tr style="border : 1px solid black;border-collapse: collapse;">
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Gender :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['gender']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Date of Birth :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['birthday']; ?>
                   </td>
               </tr>
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      joinging Date :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['joining']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       PF Account Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['pf_account']; ?>
                   </td>
               </tr>
                    
                </table>
            </div>
        </div>      
    </section>
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('Pay_Salary');?>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open(base_url() . 'index.php?accountent/authentic_salary/add/'.$param2 , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Basic_Salary');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="basic" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('HRA');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="HRA" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('conveyance');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="conveyance" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Provident_fund');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="provident_fund" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('ESI');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="esi" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="loan" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Profession');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="profession" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                   
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('TSD_IT');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="tsd_it" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Incentive');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="incentive" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                      <input type="hidden" class="form-control" name="authentic_type" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="3" autofocus>
                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Official_Charge');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="official_charge" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="status" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select_type');?></option>
                              <option value="male">Paid</option>
                              <option value="female">Unpaid</option>
                              
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Payment_Method');?></label>
                        
                        <div class="col-sm-5">
                            <select name="method" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select_type');?></option>
                              <option value="male">Case</option>
                              <option value="female">Bank</option>
                              
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Payment_Month');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="payment_month" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Pay_Salary');?></button>
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