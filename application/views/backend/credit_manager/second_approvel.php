<hr />

<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('S/n');?></div></th>
                            <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('category');?></div></th>
                            <th><div><?php echo get_phrase('loan_amount');?></div></th>
                             <th><div>Remark</div></th>
                           
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $students   =   $this->db->get_where('user' , array('application_at' => '2'))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $row['application_id'];?></td>
                            <td><img src="<?php echo base_url() . 'uploads/applicant_image/photo_' . $row['application_id'] . '.jpg';?>" class="img-circle" width="30" /></td>
                            <td><?php 
                                    echo $row['name'];
                                ?></td>
                                <td><?php 
                                echo $this->db->get_where('class', array('class_id' => $row['class_id']))->row()->name;
                                ?></td>
                            
                            <td>
                                <?php 
                                 echo $row['amount'];
                                ?>
                            </td>
                            
                            <td>
                                <?php 
                                    echo $row['Remark'];

                                ?>
                            </td>
                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                       
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_application_profile_second/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>
                                       
                                        
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_application_second_edit/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/forward_2_final/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Upload_documents');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_co_applicant_add/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Add_Co_Applicant');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/forward_final/<?php echo $row['application_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('Forward_2 _final');?>
                                                </a>
                                        </li>
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/student/<?php echo $row['class_id'];?>/delete/<?php echo $row['student_id'];?>');">
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