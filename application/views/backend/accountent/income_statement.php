<hr />
<?php

$start_date=convertdate($start_date);
$end_date=convertdate($end_date); 

$this->db->where('date >=', $start_date);
$this->db->where('date <=', $end_date);
$tbl1 = $this->db->get('employ_salary')->result_array();
$this->db->where('date >=', $start_date);
$this->db->where('date <=', $end_date);
$tbl2 = $this->db->get('income')->result_array();
$this->db->where('timestamp >=', $start_date);
$this->db->where('timestamp <=', $end_date);
$tbl3 = $this->db->get('payment')->result_array();
?>

<div id="printarea">
<style type="text/css">	
.row {
  margin-left: -15px;
  margin-right: -15px;
  box-sizing: border-box;
}
.col-sm-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
  float: left;
  width: 100%;
  box-sizing: border-box;
}
.col-sm-4 {
position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
  float: left;
  width: 33.33333333%;
  box-sizing: border-box;
}
td {
	padding-left: 5px;
  	padding-right: 5px;
}
</style>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4">
			<center><h3>Income Section</h3></center>
			<table style="width: 100%;">
				<tr style="border: 1px solid black;">
					<td style="border: 1px solid black;border-collapse: collapse;">
						Date
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Income Description
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Amount
					</td>
				</tr>
				<?php $net_income = 0; ?>
				<?php foreach($tbl2 as $row) : ?>
					<tr>
					<td>
						<?php echo date('d/m/Y', $row['date']); ?>
					</td>
					<td>
						<?php echo $row['title']. ' - ' . $this->db->get_where('income_mode', array('mode_id' => $row['income_mode_id']))->row()->name; ?>
					</td>
					<td>
						<?php echo $row['amount'];
						$net_income=$net_income+$row['amount'];
						?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="col-sm-4">
			<center><h3>Expences Section</h3></center>
			<table style="width: 100%;">
				<tr style="border: 1px solid black;border-collapse: collapse;"">
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Date
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Expences
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Amount
					</td style="border: 1px solid black;border-collapse: collapse;"">
				</tr>
				<?php $net_expences = 0; ?>
				<?php foreach($tbl3 as $row) : ?>
					<tr>
					<td>
						<?php echo date('d/m/Y', $row['timestamp']); ?>
					</td>
					<td>
						<?php echo $row['title']; ?>
					</td>
					<td>
						<?php echo $row['amount'];
						$net_expences=$net_expences+$row['amount'];
						?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="col-sm-4">
			<center><h3>Salary Section</h3></center>
			<table style="width: 100%;">
				<tr style="border: 1px solid black;border-collapse: collapse;"">
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Date
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Salary Paid to
					</td>
					<td style="border: 1px solid black;border-collapse: collapse;"">
						Amount
					</td>
				</tr>

				<?php $net_salary = 0; ?>
				<?php foreach($tbl1 as $row) : ?>
					<tr>
					<td>
						<?php echo date('d/m/Y', $row['date']); ?>
					</td>
					<td>
						<?php echo $this->db->get_where('employees', array('category_id' => $row['employee_id']))->row()->name; ?>
					</td>
					<td>
						<?php echo $row['basic']+$row['HRA']+$row['coveyance']+$row['incentive'];
						$net_salary=$net_salary+$row['basic']+$row['HRA']+$row['coveyance']+$row['incentive'];
						?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
	<div class="col-sm-12" style="border: 1px solid black;border-collapse: collapse;font-size: 20px;">
		<div class="col-sm-4">Total Income : <?php echo $net_income; ?></div>
		<div class="col-sm-4">Total Expences : <?php echo $net_expences; ?></div>
		<div class="col-sm-4">Total Salary Paid : <?php echo $net_salary; ?></div>
	</div>
	<div class="col-sm-12" style="border: 1px solid black;border-collapse: collapse;font-size: 20px;text-align: right;">
		Net Income : <?php echo $net_income-$net_expences-$net_salary; ?>
		
	</div>
</div>
</div>
<br>
<br>
<br>
<center><button onclick="print();">Print</button></center>
<script type="text/javascript">
    function print() {
    var divToPrint = document.getElementById('printarea');
    var htmlToPrint = '';
    htmlToPrint += divToPrint.innerHTML;
    newWin = window.open("");
    // newWin.document.write('<html><head><title></title>');
    // newWin.document.write('<link rel="stylesheet" href="./assets/css/bootstrap.css" type="text/css" />');
    // newWin.document.write('</head><body>');
    newWin.document.write(htmlToPrint);
    // newWin.document.write('</body></html>');
    
    newWin.print();
    // newWin.close();


    }
</script>
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