<hr />
<div class="row">
	<div class="col-md-12">

		<ul class="nav nav-tabs bordered">
			<li class="active">
				<a href="#unpaid" data-toggle="tab">
					<span class="hidden-xs"><?php echo get_phrase('Income');?></span>
				</a>
			</li>
			
		</ul>

		<div class="tab-content">
			<br>
			<div class="tab-pane active" id="unpaid">


				<table  class="table table-bordered datatable example" id="table_export">
					<thead>
						<tr>
							<th>s/n</th>
							<th><div><?php echo get_phrase('Account_No.');?></div></th>
							<th><div><?php echo get_phrase('Name');?></div></th>
							<th><div><?php echo get_phrase('Load_Category');?></div></th>
							<th><div><?php echo get_phrase('Amount');?></div></th>
							<th><div><?php echo get_phrase('Date');?></div></th>
							<th><div><?php echo get_phrase('Options');?></div></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$count = 1;
						$total = 0;
						$user = $this->db->get_where('income',array('payment_type' => 'income'))->result_array();
						

						foreach($user as $row):
							?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $row['title'];?></td>
								<td><?php echo $this->db->get_where('user',array('student_id' => $row['student_id']))->row()->name;?></td>
								<td><?php $total = $total+$row['amount']; echo  $row['amount'];?></td>
								<td><?php echo $row['timestamp'];?></td>

								<td><?php if($row['method'] == '1')
								echo "Cash";
								elseif($row['method'] == '2')
									echo "Cheque";
								elseif($row['method'] == '3')
									echo "Card";?>
								
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
                                       
                                        
                                        
                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_edit/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
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
						<?php $count=$count+1;
						 endforeach;?>
					</tbody>
				</table>

			</div>
<?php echo "Total Amount : " . $total; ?>

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

