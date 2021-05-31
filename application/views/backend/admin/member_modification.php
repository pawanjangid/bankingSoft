<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/member_update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Code');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="member_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('Go');?></button>
            </div>
            <?php echo form_close();?>
			</div>
		</div>
</div>
<hr>
