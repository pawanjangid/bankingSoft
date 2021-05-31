
<div class="row">
    <hr style="max-width: 100%;">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
    <hr style="max-width: 100%;">
</div>

<div class="row" style="font-size: 14px;">
		<div class="col-sm-12" style="font-size: 14px;">
			<?php echo form_open(base_url() . 'index.php?admin/health_life/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6 offset-3" style="font-size: 14px;">
			     
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Policy_Number');?></label>
                            
                            <div class="col-sm-8">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="policy_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                           
                </div>
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Name');?></label>
                            
                            <div class="col-sm-3">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                            <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Email');?></label>
                            
                            <div class="col-sm-3">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                </div>
           
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Mobile_Number');?></label>
                            
                            <div class="col-sm-3">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="mobile_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                            <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('gender');?></label>
                            
                            <div class="col-sm-3">
                                    <select class="form-control" style="font-size: 14px;height: 40px;" name="gender" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                </div>
                    <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Address');?></label>
                                
                                <div class="col-sm-8">
                                    <textarea name="address" style="height: 100px;"></textarea>
                                </div>
                                
                    </div>
                    
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Payment_Mode');?></label>
                            
                            <div class="col-sm-3">
                                <select class="form-control" style="font-size: 14px;height: 40px;" name="payment_mode" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>

                                </select>
                            </div>
                            <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Payment_Type');?></label>
                            
                            <div class="col-sm-3">
                                <select class="form-control" style="font-size: 14px;height: 40px;" name="payment_type" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Half Year">Half Year</option>

                                </select>
                            </div>
                </div>
                <div class="form-group">
                            <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Reference');?></label>
                            
                            <div class="col-sm-2">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="reference" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>

                            <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Sum_Assure');?></label>
                            
                            <div class="col-sm-2">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="sum_assure" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>

                            <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;"><?php echo get_phrase('Company');?></label>
                            
                            <div class="col-sm-2">
                                <select class="form-control" style="font-size: 14px;height: 40px;" name="company_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                    <?php $ins_company = $this->db->get_where('ins_company')->result_array(); ?>
                                    <?php foreach ($ins_company as $row): ?>
                                        <option value="<?php echo $row['company_id'] ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                </div>
            </div>
                    
			</div>
            <div class="col-sm-12" >
                 <center><button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;margin-top: 40px;"><?php echo get_phrase('ADD');?></button></center>
            </div>
            <?php echo form_close();?>
			<div class="col-sm-1" style="font-size: 14px;">
			
			</div>
		</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-12" style="text-align: center;">
			<div class="col-sm-12">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Count</th>
                            <th>Policy Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Payment Type</th>
                            <th>Payment Mode</th>
                            <th>Sum Assure</th>
                            <th>Reference</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $branch=$this->db->get('health_life')->result_array();$count=1; ?>
                        <?php foreach ($branch as $row) : ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $count++; ?></td>
                            <td style="text-align: center;"><?php echo $row['policy_number']; ?></td>
                            <td style="text-align: center;"><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                               <?php echo $row['mobile_number'] ?>
                            </td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['payment_type'] ?></td>
                            <td><?php echo $row['payment_mode'] ?></td>
                            <td><?php echo $row['sum_assure'] ?></td>
                            <td><?php echo $row['reference'] ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group" >
                                    <center>
                                        <button type="button" class="btn btn-danger btn-sm" href="showAjaxModal('<?php echo base_url();?>index.php?admin/employee_master/delete/<?php echo $row['employee_id'];?>');">
                                        <i class="entypo-trash"></i>
                                        </button>
                                    </center>
                                    
                                </div>
                            </td>
                            
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">

</script>
