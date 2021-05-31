<hr />

<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th>serial</th>
                            <th style="max-width: 30px;"><div><?php echo get_phrase('Account_Number');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('category');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $user_approved   =   $this->db->get_where('user' , array('application_at' => '4'))->result_array();
                                $count = 1;
                                foreach($user_approved as $row):?>
                        <tr>
                            <td>
                            <?php
                            $count = 1+$count;
                             echo $count; ?>
                        </td>
                            <td>
                                <?php 
                                $input = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->approve_id;
                                 echo 'PLRD' . str_pad($input, 7, "0",STR_PAD_LEFT);
                                ?>
                            </td>
                            <td><?php 
                                    echo $row['name'];
                                ?></td>
                                <td><?php 
                                echo $this->db->get_where('class', array('class_id' => $row['class_id']))->row()->name;
                                ?></td>
                            
                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                       
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_approve_profile/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>
                                       <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_approve_loan_edit/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('Edit');?>
                                                </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_sanction_letter/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('sanction_letter');?>
                                                </a>
                                        </li>
                                         <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_confirm_loan/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Confirm');?>
                                                </a>
                                        </li>
                                         <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_delete_application/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Delete');?>
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