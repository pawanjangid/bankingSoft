<hr />

<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('ser_no');?></div></th>
                            
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('agent');?></div></th>
                            <th class="span2"><div>amount</div></th>
                            <th><div>ins amount</div></th>
                            <th><div>ins paid</div></th>
                             <th><div>last payment</div></th>
                             <th><div>Due-amount</div></th>
                             <th><div>Remark</div></th>
                           
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $students   =   $this->db->get_where('user' , array(
                                    'class_id' => $class_id,'status' => 'unpaid'))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php 
                                    echo $row['name'];
                                ?></td>
                            <td>
                                <?php $agent = $this->db->get_where('teacher',array('teacher_id' => $row['agent_id']))->result_array();
                                echo $agent[0]['name']; ?>
                                
                            </td>
                            <td>
                                <?php 
                                 echo $row['amount'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                 echo $row['instalment_amount'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['paid_ins'];

                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['last_date'];

                                ?>
                            </td>
                            <?php  
                     $DATE =  date('d/m/Y');
                     $last = $row['last_date'];
                     $date = strtotime(str_replace('/', '-', $DATE));
                     $last = strtotime(str_replace('/', '-', $last));
                     $diff = $date - $last;
                     $number =  round($diff / 86400);
                    
                      $due = $row['instalment'] - $row['paid_ins'];
                      if ($number > $due) {
                        $number = $due;
                      }elseif ($number < 0) {
                        $number = 0;
                      }
                      
                     
               ?>           
                            <td>
                                <?php 
                                    echo $number . ' - ' . $number*$row['instalment_amount'];

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
                                       
                                        
                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_profile/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_take_payment/<?php echo $row['student_id'];?>');">
                                            <i class="entypo-bookmarks"></i>
                                            <?php echo get_phrase('take_payment');?>
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