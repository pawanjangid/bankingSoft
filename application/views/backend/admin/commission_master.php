<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" >
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/commission/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-4">
                <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Agent_Rank');?></label>
                        
                        <div class="col-sm-3">
                           <select name="rank_id" class="form-control select" id="rank" required="required" onchange="put2values(this.value)">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $rank = $this->db->get('rank')->result_array(); ?>
                                <?php foreach ($rank as $row) : ?>
                                <option value="<?php echo $row['rank_id']; ?>"><?php echo $row['rank'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Designation');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="Designation" id="Designation" required="required" value="" autofocus>
                        </div>           
            </div>
           <div style="text-align: center;">Plan Detail</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Plan Code:');?></label>
                        
                        <div class="col-sm-9">
                           <select name="product_id" class="form-control select" id="product_id" required="required">
                              <option value="" selected="selected"><?php echo get_phrase('select');?></option>
                              <?php $plans = $this->db->get('product_master')->result_array(); ?>
                                <?php foreach ($plans as $row3) : ?>
                                <option value="<?php echo $row3['product_id']; ?>"><?php echo $row3['plan_name'];?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>
                         
            </div>
            <center>NEW</center>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Commission_Self:');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="commission_new_self" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Commission_Team');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="commission_new_team" name="commission_new_team" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <center>OLD</center>
            <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Commission_Self:');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="commission_old_self" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="font-size: 14px;color: green;" ><?php echo get_phrase('Commission_Team');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="commission_old_team" name="commission_old_team" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                        </div>
            </div>
            <center><button type="submit" class="btn btn-info" style="width: 100px;font-weight: 600;"><?php echo get_phrase('ADD');?></button></center>
            
			</div>
            <div class="col-sm-8">
                        <div class="col-sm-12">
                        <table class="table table-bordered" id="">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Rank</th>
                                        <th>Designation</th>
                                        <th>Plan</th>
                                        <th>Commission : NEW</th>
                                        <th>Commission : OLD</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $commission = $this->db->get('commission')->result_array();$count = 1; ?>
                                    <?php foreach ($commission as $row): ?>
                                    <tr style="font-size: 14px;">
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $this->db->get_where('rank',array('rank_id' => $row['rank_id']))->row()->rank; ?></td>
                                        <td><?php echo $this->db->get_where('rank',array('rank_id' => $row['rank_id']))->row()->Designation; ?></td>
                                        <td><?php echo $this->db->get_where('product_master',array('product_id' => $row['product_id']))->row()->plan_name; ?></td>
                                        <td><?php echo $row['commission_new_self']+$row['commission_new_team']; ?></td>
                                        <td><?php echo $row['commission_old_self']+$row['commission_old_team']; ?></td>
                                        <td>
                                <div class="btn-group" style="text-align: center;">
                                    <a href="<?php echo base_url();?>index.php?admin/updatepage/update_commission_master/<?php echo $row['commission_id'];?>" class="btn btn-default btn-sm" style="margin-right: 10px;">
                                        <i class="entypo-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" href="showAjaxModal('<?php echo base_url();?>index.php?admin/relation/delete/<?php echo $row['relation_id'];?>');">
                                        <i class="entypo-trash"></i>
                                    </button>
                                </div>
                            </td>
                                    </tr>
                                    <?php $count++; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                    </div>
            </div>
		</div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>
<script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        
</script>
<script type="text/javascript">
    function calculateExp(birthDate) {
    birthDate = new Date(birthDate);
    var now = new Date();
    otherDate = new Date(now.getFullYear(),now.getMonth(),now.getDate());
    var years = (otherDate.getFullYear() - birthDate.getFullYear() );
    if (otherDate.getMonth() < birthDate.getMonth() || otherDate.getMonth() == birthDate.getMonth() && otherDate.getDate() < birthDate.getDate()) {
        years--;
    }
 document.getElementById('age').value = years;
}
    function put2values(code) {
        var rank = <?php echo json_encode($rank); ?>;
        for (var i = rank.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(rank[i]);
           var obj = JSON.parse(txt);
           if (obj.rank_id == code) {
            document.getElementById('Designation').value = obj.Designation;
           }
        }
    }
</script>