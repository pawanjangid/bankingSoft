
<div class="row">
    <hr style="max-width: 100%;">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
    <hr style="max-width: 100%;">
</div>

<div class="row" style="font-size: 14px;">
		<div class="col-sm-12" style="font-size: 14px;">
			<?php echo form_open(base_url() . 'index.php?admin/car_insurance/approve/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6 offset-3" style="font-size: 14px;">
			     
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Policy_Number');?></label>
                            
                            <div class="col-sm-8">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="policy_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                           
                </div>
                <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Quotation');?></label>
                            
                            <div class="col-sm-8">
                                <input type="text" style="font-size: 14px;height: 40px;" class="form-control" name="quotation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                            </div>
                           
                </div>
                
           
            </div>
                    
			</div>
            <div class="col-sm-3">
                 <center><button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('Confirm');?></button></center>
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
                            <th>Quotation</th>
                            <th>Status</th>
                            <th>Modal Number</th>
                            <th>Registration Date</th>
                            <th>Cubic Capacity</th>
                            <th>Sheeting Capacity</th>
                            <th>Previously Insuranced</th>
                            <th>Insurance Claimed</th>
                            <th>NCB</th>
                            <th>IDB</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $branch=$this->db->get_where('car_insurance',array('status'=>'approve'))->result_array();$count=1; ?>
                        <?php foreach ($branch as $row) : ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $count++; ?></td>
                            <td style="text-align: center;"><?php echo $row['policy_number']; ?></td>
                            <td style="text-align: center;"><?php echo $row['quotation']; ?></td>
                            <td style="text-align: center;"><?php echo $row['vehicle_number']; ?></td>
                            <td><?php echo $row['modal_number'] ?></td>
                            <td>
                               <?php echo $row['registration_date'] ?>
                            </td>
                            <td><?php echo $row['cubic_capacity'] ?></td>
                            <td><?php echo $row['sheeting_capacity'] ?></td>
                            <td><?php echo $row['previously_insuranced'] ?></td>
                            <td><?php echo $row['insurance_claimed'] ?></td>
                            <td><?php echo $row['NCB'] ?></td>
                            <td><?php echo $row['IDB'] ?></td>
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
