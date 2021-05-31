<hr />
<?php $detail = $this->db->get_where('income_mode', array('mode_id' => $mode_id))->row()->detail; ?>
<?php if ($detail == 'yes') :?>
<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('no');?></div></th>
                            <th class="span2"><div><?php echo get_phrase('Account_Number');?></div></th>
                            <th><div><?php echo get_phrase('Name');?></div></th>
                            <th><div><?php echo get_phrase('Amount');?></div></th>
                             <th><div><?php echo get_phrase('Date');?></div></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                    $income  =  $this->db->get_where('income', array('income_mode_id' => $mode_id))->result_array();
                                $count = 1;
                                $total = 0;
                                foreach($income as $row):
                        ?>

                        <tr>
                            <td><?php echo $count; $count = 1+$count;  ?></td>
                            <td><?php $input = $this->db->get_where('approve',array('application_id' => $row['application_id']))->row()->approve_id; 
                            echo 'PLRD' . str_pad($input, 7, "0",STR_PAD_LEFT);  ?></td>
                            <td>
                                <?php echo $this->db->get_where('user',array('application_id' => $row['application_id']))->row()->name;
                                 ?>
                                
                            </td>
                            <td>
                                <?php 
                                $total = $total + $row['amount'];
                                 echo $row['amount'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['date'];

                                ?>
                            </td>
                           
                        <?php endforeach;?>
                    </tbody>
                </table>
<div>
    <h1>Total Income : <?php echo $total; ?>/-</h1>
</div>
            </div>     
    </div>
</div>
<?php endif; ?>
<?php if ($detail == 'no') :?>
<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('no');?></div></th>
                            <th><div><?php echo get_phrase('Title');?></div></th>
                            <th><div><?php echo get_phrase('income_mode');?></div></th>
                            <th><div><?php echo get_phrase('Amount');?></div></th>
                             <th><div><?php echo get_phrase('Date');?></div></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                    $income  =  $this->db->get_where('income', array('income_mode_id' => $mode_id))->result_array();
                                $count = 1;
                                $total = 0;
                                foreach($income as $row):
                        ?>

                        <tr>
                            <td><?php echo $count; $count = 1+$count;  ?></td>
                            <td>
                                <?php echo $row['title']; ?>
                            </td>
                            <td>
                                <?php echo $this->db->get_where('income_mode', array('mode_id' => $mode_id))->row()->name;
                                 ?>
                                
                            </td>
                            <td>
                                <?php 
                                $total = $total + $row['amount'];
                                 echo $row['amount'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['date'];

                                ?>
                            </td>
                           
                        <?php endforeach;?>
                    </tbody>
                </table>
<div>
    <h1>Total Income : <?php echo $total; ?>/-</h1>
</div>
            </div>     
    </div>
</div>
<?php endif; ?>


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