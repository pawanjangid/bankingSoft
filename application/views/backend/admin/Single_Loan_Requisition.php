
<div class="row">
    <hr>
    <div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>

<div class="row" style="font-size: 14px;">
        <div class="col-sm-12">
            <?php echo form_open(base_url() . 'index.php?admin/Single Loan Requisition/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-6">
        
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="loan_name" name="loan_name" value="" required="required" autofocus>
                        </div>
            </div>
             <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Code');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="loan_code" name="loan_code" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Mode');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="loan_mode" name="loan_mode" required="required" value="" autofocus>
                        </div>          
            </div>

             <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Min_Amount_Rs');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="min_amount" name="min_amount" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Max_Amount_Rs');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="max_amount" name="max_amount" value="" autofocus>
                        </div>          
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Min_Term');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="min_term" name="min_term" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Max_Term');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="max_term" name="max_term" value="" autofocus>
                        </div>          
            </div>

              <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('ROI_Min');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="roi_min" name="roi_min" required="required"  value="" autofocus>
                        </div>
                        <div class="col-sm-1">
                            %
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('ROI_Max');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="roi_max" name="roi_max" required="required" value="" autofocus>
                        </div>
                        <div class="col-sm-1">
                           %
                        </div>      
            </div>

                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Type');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="loan_type" name="loan_type" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Proc_Fees_Min');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="Proc_fees" name="Proc_fees" required="required" value="" autofocus>
                        </div>
            </div>             

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Legal_Amt_Min');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="Legal_amt_min" name="Legal_amt_min" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Legal_Amt_Max');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="legal_amt_max" name="legal_amt_max" required="required" value="" autofocus>
                        </div>          
            </div>

             <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Other_Chrg_Min');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="other_charge_min" name="other_charge_min" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Other_Chrg_Max');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="other_charge_max" required="required" name="other_charge_max" value="" autofocus>
                        </div>          
            </div> 

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Min_Age');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="min_age" name="min_age" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Max_Age');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="max_age" name="max_age" required="required" value="" autofocus>
                        </div>          
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Tax_Rate');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tax_rate" name="tax_rate" required="required" value="" autofocus>
                        </div>
                        <div class="col-sm-1">
                            (%)
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Penalty_Interest');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="penalty_int" name="penalty_int" required="required" placeholder="Par Inst" value="" autofocus>
                        </div>
                        <div class="col-sm-1">
                           %
                        </div>         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Grace_Period_Days');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="grace_period" name="grace_period" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Interest_Mode:');?></label>
                        
                        <div class="col-sm-3">
                            <select name="interest_mode" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                                <option value="Flat">Flat</option>
                                <option value="Reducing">Reducing</option>
                          </select>
                        </div>         
            </div>
            <div class="form-group">
                       
            </div> 
             <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Type');?></label>
                        
                        <div class="col-sm-3">
                            <select name="loan_type" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                                <option value="Property_Loan">Property Loan</option>
                                <option value="Personal_Loan">Personal Loan</option>
                                <option value="Gold_Loan">Gold Loan</option>
                                <option value="Vehicle_Loan">Vehicle Loan</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Loan_Type');?></label>
                        
                       <div class="col-sm-3">
                            <input type="text" class="form-control" id="security_type" name="security_type" required="required" value="" autofocus>
                        </div>
            </div>
            </div>
            <div class="col-sm-12">
           <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </center>
            </div>

<?php echo form_close();?>
</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
    <div class="col-sm-12" style="text-align: center;">
       <div class="col-sm-10 offset-sm-1">
        <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>LoanTableNo</th>
                            <th>Loan Name</th>
                            <th>Min Amount</th>
                            <th>Max Amount</th>
                            <th>Loan Type</th>
                            <th>Min Term</th>
                            <th>Max Term</th>
                            <th>Mode</th>
                            <th>ROI</th>
                            <th>ROI Max</th>
                            <th>Processing</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <?php $dataget = $this->db->get('loan_master')->result_array();$count = 1; ?>
                    <?php foreach ($dataget as $row): ?>
                        <tr>

                            <td style="text-align: center;"><?php echo $row['loan_code']; ?></td>
                            <td style="text-align: center;"><?php echo $row['loan_name']; ?></td>
                            <td><?php echo $row['min_amount']; ?></td>
                            <td><?php echo $row['max_amount']; ?></td>
                            <td><?php echo $row['loan_type']; ?></td>
                            <td><?php echo $row['min_term']; ?></td>
                            <td><?php echo $row['max_term']; ?></td>
                            <td><?php echo $row['loan_mode']; ?></td>
                            <td><?php echo $row['roi_min']; ?></td>
                            <td><?php echo $row['roi_max']; ?></td>
                            <td><?php echo $row['Proc_fees']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
    </div>
    </div>

</div>
<script type="text/javascript">

</script>