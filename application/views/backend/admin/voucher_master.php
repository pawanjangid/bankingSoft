
<div class="row">
    <hr style="max-width: 100%;">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
    <hr style="max-width: 100%;">
</div>

<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/voucher_master/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
			<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Voucher_Name');?></label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" required="required" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Date:_From');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_from"  value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-2 control-label"><?php echo get_phrase('To');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_to" value="" autofocus>
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
                            <th>id</th>
                            <th>voucher Name</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $voucher=$this->db->get('voucher_master')->result_array(); ?>
                        <?php foreach ($voucher as $row) : ?>
                        <tr>
                            <td><?php echo $row['voucher_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo date('d-m-Y',$row['date_from']);  ?></td>
                            <td>
                               <?php echo date('d-m-Y', $row['date_to']); ?>
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
