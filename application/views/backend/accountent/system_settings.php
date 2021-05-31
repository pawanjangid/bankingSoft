<hr />

    <div class="row">
    <?php echo form_open(base_url() . 'index.php?accountent/system_settings/do_update' , 
      array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-10">
            
            <div class="panel panel-primary" >
            
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo get_phrase('system_settings');?>
                    </div>
                </div>
                
                <div class="panel-body">
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label">system Name</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_name" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="school_address" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'school_address'))->row()->description;?>">
                      </div>
                      
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label">Phone Number</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="school_contact_no" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'school_contact_no'))->row()->description;?>">
                      </div>
                  </div>

                  
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_email" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_email'))->row()->description;?>">
                      </div>
                  </div>

                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('language');?></label>
                      <div class="col-sm-9">
                          <select name="language" class="form-control selectboxit">
                                <?php
									$fields = $this->db->list_fields('language');
									foreach ($fields as $field)
									{
										if ($field == 'phrase_id' || $field == 'phrase')continue;
										
										$current_default_language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
										?>
                                		<option value="<?php echo $field;?>"
                                        	<?php if ($current_default_language == $field)echo 'selected';?>> <?php echo $field;?> </option>
                                        <?php
									}
									?>
                           </select>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('save');?></button>
                    </div>
                  </div>
                    <?php echo form_close();?>
                    
                </div>
            
            </div>
        
        </div>

      <?php 
        $skin = $this->db->get_where('settings' , array(
          'type' => 'skin_colour'
        ))->row()->description;
      ?>
    </div>

<script type="text/javascript">
    $(".gallery-env").on('click', 'a', function () {
        skin = this.id;
        $.ajax({
            url: '<?php echo base_url();?>index.php?accountent/system_settings/change_skin/'+ skin,
            success: window.location = '<?php echo base_url();?>index.php?accountent/system_settings/'
        });
});
</script>