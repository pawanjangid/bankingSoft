 <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/open_account/');" 
                class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('Open_New_Account');?>
                </a> 
<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('ser_no');?></div></th>
                            
                            <th><div><?php echo get_phrase('name');?></div></th>
                             <th><div>Mobile Number</div></th>
                           
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   $count = 1;
                                $students   =   $this->db->get_where('nidhi_account', array('account_type' => 'Saving_Account'))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php 
                                    echo $row['name'];
                                ?></td>
                            
                            <td>
                                <?php 
                                 echo $row['number'];
                                ?>
                            </td>
                           
                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                       
                                        
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_profile_account/<?php echo $row['nidhi_account_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('Account_Profile');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_nidhi_account/<?php echo $row['nidhi_account_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('Edit');?>
                                                </a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_bond_print/<?php echo $row['nidhi_account_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Bond_print');?>
                                                </a>
                                        </li>
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/nidhi_account/delete/<?php echo $row['nidhi_account_id'];?>>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
                                    </li>
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                    
            </div>

        
        
    </div>
</div>
                     
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 1, 2, 3, 4]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 1, 2, 3, 4]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(5, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(5, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});



</script>