
<div class="row">
    <hr style="max-width: 100%;">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
    <hr style="max-width: 100%;">
</div>

<div class="row" style="font-size: 14px;">
		<div class="col-sm-12" style="font-size: 14px;">
			<?php echo form_open(base_url() . 'index.php?admin/branch/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6" style="font-size: 14px;">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;" style="font-size: 14px;"><?php echo get_phrase('Branch_Name');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Branch_Code');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Prefix');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="prefix" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Manager_Name');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="manager_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Phone_Number');?></label>
                        
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="phone_number" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Opening_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="opening_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Opening_Bal.');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="opening_balance" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
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
                            <th>Branch Name</th>
                            <th>PREFIX</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $branch=$this->db->get('branch')->result_array(); ?>
                        <?php foreach ($branch as $row) : ?>
                        <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td>
                               <?php echo $row['prefix'] ?>
                            </td>
                            <td>
                                <div class="btn-group" style="text-align: center;">
                                    <a href="<?php echo base_url();?>index.php?admin/updatepage/update_branch_master/<?php echo $row['branch_id'];?>" class="btn btn-default btn-sm" style="margin-right: 10px;">
                                        <i class="entypo-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" href="showAjaxModal('<?php echo base_url();?>index.php?admin/relation/delete/<?php echo $row['relation_id'];?>');">
                                        <i class="entypo-trash"></i>
                                    </button>
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
