<hr />

<div class="row">
    <div class="col-md-12">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="100px;">serial</th>
                            <th style="max-width: 30px;"><div><?php echo get_phrase('Account_Number');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('Reason');?></div></th>
                            <th><div><?php echo get_phrase('Date');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $user_deleted   =   $this->db->get('deleted')->result_array();
                                $count = 1;
                                foreach($user_deleted as $row):?>
                        <tr>
                            <td>
                            <?php
                            $count = 1+$count;
                             echo $count; ?>
                        </td>
                            <td>
                                <?php 
                                 echo 'PLRD' . str_pad($row['account_number'], 7, "0",STR_PAD_LEFT);
                                ?>
                            </td>
                            <td><?php 
                                    echo $row['name'];
                                ?></td>
                             <td><?php 
                                
                                    echo $row['number'];
                                ?></td>
                                <td><?php 
                                
                                    echo $row['reason'];
                                ?></td>
                                <td><?php 
                                
                                    echo $row['date'];
                                ?></td>
                           
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