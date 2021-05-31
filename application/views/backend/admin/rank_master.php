<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/rank/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Rank');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="rank" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;"><?php echo get_phrase('Designation');?></label>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="designation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;"><?php echo get_phrase('Monthly_Target');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="monthly_target" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                      
            </div>
            
			</div>
            <div class="col-sm-6">
                 <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </div>
            <?php echo form_close();?>
		</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-8" style="text-align: center;">
			<div class="col-sm-11">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>RANK</th>
                            <th>DESIGNATION</th>
                            <th>MONTHLY TARGET</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rank = $this->db->get('rank')->result_array();$count =1; ?>
                        <?php foreach ($rank as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo $row['rank']; ?></td>
                            <td><?php echo $row['Designation']; ?></td>
                            <td><?php echo $row['monthly_target']; ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group">
                                    <a href="<?php echo base_url();?>index.php?admin/updatepage/update_rank_master/<?php echo $row['rank_id'];?>" class="btn btn-default btn-sm" style="margin-right: 10px;">
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