
<div class="row">
    <hr style="max-width: 100%;">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
    <hr style="max-width: 100%;">
</div>

<div class="row" style="font-size: 14px;">
		<div class="col-sm-12" style="font-size: 14px;">
			<?php echo form_open(base_url() . 'index.php?admin/employee_master/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6" style="font-size: 14px;">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;" style="font-size: 14px;"><?php echo get_phrase('name');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Email');?></label>
                        
                        <div class="col-sm-3">
                            <input type="email" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Mobile No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="address" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" style="font-size: 14px;" autofocus>
                            </textarea>
                        </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Password');?></label>
                        
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="password" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            
        
			</div>
            <div class="col-sm-3">
                 <center><button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button></center>
            </div>
            <?php echo form_close();?>
			<div class="col-sm-1" style="font-size: 14px;">
			
			</div>
		</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-8" style="text-align: center;">
			<div class="col-sm-11">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>code</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $branch=$this->db->get('employee_master')->result_array(); ?>
                        <?php foreach ($branch as $row) : ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $row['employee_code']; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td>
                               <?php echo $row['email'] ?>
                            </td>
                            <td><?php echo $row['phone_no'] ?></td>
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
