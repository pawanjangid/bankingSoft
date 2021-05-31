<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/share_master/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="name" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Share_Amount');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="share_value" required="required" value="" autofocus>
                        </div>
                        <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </div>
            
            <?php echo form_close();?>
			</div>
		</div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-12" style="text-align: center;">
	   <div class="col-sm-10 offset-sm-1">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Share Value</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $share = $this->db->get('share_master')->result_array();$count=1; ?>
                        <?php foreach ($share as $row): ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $count;$count=$count+1; ?></td>
                            <td style="text-align: center;"><?php echo $row['name']; ?></td>
                            <td style="text-align: center;"><?php echo $row['share_value']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">

</script>