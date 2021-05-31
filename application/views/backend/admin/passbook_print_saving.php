
<hr />
<style type="text/css">
	tr {
	height: 20px;
	}
</style>
<?php
function get_month($value='')
{
	if ($value=='1') {
		return 'Jan';
	}
	if ($value=='2') {
		return 'FEB';
	}
	if ($value=='3') {
		return 'MAR';
	}
	if ($value=='4') {
		return 'APR';
	}
	if ($value=='5') {
		return 'MAY';
	}
	if ($value=='6') {
		return 'JUN';
	}
	if ($value=='7') {
		return 'JUL';
	}
	if ($value=='8') {
		return 'AUG';
	}
	if ($value=='9') {
		return 'SEP';
	}
	if ($value=='10') {
		return 'OCT';
	}
	if ($value=='11') {
		return 'NOV';
	}
	if ($value=='12') {
		return 'DEC';
	}

}
 ?>

<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-primary" id="button1">Print Cover</button></div>
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-primary" id="button2">Print Header</button></div>
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-primary" id="button3">Print List</button></div>
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-default" onclick="addrow()">List Space</button></div>
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-default" onclick="addrow2();">Header Space</button></div>
		<div class="col-sm-2" style="text-align: center;"><button class="btn btn-default" onclick="PrintElem(document.getElementById('print_div'));">Print</button></div>
	</div>
</div>
<center></center>
<div id="print_div">

<?php $ac_no = $this->db->get_where('saving_account',array('ac_no' => $ac_no))->row_array();
$member_Data = $this->db->get_where('members',array('member_code' => $ac_no['member_code']))->row_array();
$branch = $this->db->get_where('branch', array('branch_id' => $ac_no['branch_id']))->row_array();
$total = 0; ?>
<div class="row" id="cover_page" style="font-size: 14px;">
		<div class="col-sm-10 offset-sm-1" >
			<div style="height: 300px;position: relative;width: 100%;">
				
			</div>
			<table style="width: 90%;font-size: 20px;" id="table_print2">
				<tr>
					<td colspan="2">Branch &amp; Code : <?php echo $branch['name'] . '&' . $branch['code']; ?></td>
					<td>DOC : <?php echo date('d-m-Y',$ac_no['opening_date']); ?></td>
				</tr>
				<tr>
					<td colspan="2">Appicant Name : <?php echo $member_Data['member_name']; ?></td>
					<td>Account No : <?php echo $ac_no['ac_no']; ?></td>
				</tr>
				<tr>
					<td colspan="2">
						Address : <?php echo $member_Data['address']; ?>
					</td>
					<td>PIN No : <?php echo $member_Data['pin_code']; ?></td>
				</tr>
			
				<tr>
					<td>Member Code : <?php echo $member_Data['member_code']; ?></td>
				<td></td>
					<td>Inst Account No. : <?php echo $ac_no['amount']; ?></td>
					
				</tr>
				<tr>
					<td>Second Applicate Name : <?php echo $ac_no['joint_applicant_name	']; ?></td>
				
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3">Employee Code : </td>
					
					
				</tr>
				<tr>
					<td colspan="3">Nominee Name/Rel./Age : <?php echo $member_Data['nominee_name']. '/' . $this->db->get_where('Relation', array('relation_id' => $member_Data['relation']))->row()->name . '/' . $member_Data['age']; ?></td>
					
					
				</tr>
				<tr>
					<td colspan="3"> </td>

						
				</tr>
				<tr>
					<td colspan="2"></td>
                    <td >Authorised Signature</td>
				</tr>
			</table>

		</div>
</div>
<div class="row">
	<div class="col-sm-10 offset-sm-1">
	<table class="table table-bordered" id="table_print" style="width: 90%;border: 1px solid #dee2e6;margin-bottom: 1rem;background-color: transparent;">
		<thead id="header">
		<tr >
			<td style="text-align: center;width: 20%;">TR ID</td>
			<td style="text-align: center;width: 15%;">DATE</td>
			<td style="text-align: center;width: 15%;">TYPE</td>
			<td style="text-align: center;width: 15%;">DEBIT</td>
			<td style="text-align: center;width: 15%;">CREDIT</td>
			<td style="text-align: center;width: 20%;">NET BAL</td>
		</tr>
		</thead>
		<?php $daily_deposit = $this->db->order_by('deposit_id','asc')->get_where('daily_deposit',array('ac_no' => $ac_no['ac_no'],'print_status'=>0,'payment_desc'=>3))->result_array();
		$total = 0;


                $this->db->select_sum('collection_amount');
                $deposit=$this->db->get_where('daily_deposit', array('payment_desc' => '3','print_status'=>'1','ac_no' => $ac_no['ac_no']))->row()->collection_amount;
                $this->db->select_sum('widthdraw_amount');
                $withdrawal=$this->db->get_where('daily_deposit', array('payment_desc' => '3','print_status'=>'1','ac_no' => $ac_no['ac_no']))->row()->widthdraw_amount;
                $net_bal = $deposit-$withdrawal;
                $count=1;
		 ?>
		<tbody id="data_list">
		
		<?php foreach ($daily_deposit as $row) : ?>
		<tr >
			<td style="text-align: center;width: 20%;"><?php echo $row['deposit_id']; ?></td>
			<td style="text-align: center;width: 15%;"><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
			<td style="text-align: center;width: 15%;"><?php if ($row['collection_amount']>0) {
				echo 'CREDIT';
			}else{
				echo 'DEBIT';
			} ?></td>
			<td style="text-align: center;width: 15%;"><?php echo $row['widthdraw_amount'];
			if ($count==1) {
				$total=$net_bal+$total-$row['widthdraw_amount'];
			}else{
				$total=$total-$row['widthdraw_amount'];
			}



			; ?></td>
			<td style="text-align: center;width: 15%;"><?php echo $row['collection_amount'];$total=$total+$row['collection_amount']; ?></td>
			<td style="text-align: center;width: 20%;"><?php echo $total;$count=$count+1 ?></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	</div>
</div>

</div>
<hr>
<div>
	<center><h1>HISTORY</h1></center>
</div>
<div class="row">
	<div class="col-sm-10 offset-sm-1">
	<table class="table table-bordered" style="width: 100%;border: 1px solid #dee2e6;margin-bottom: 1rem;background-color: transparent;">
		<thead id="header">
		<tr >
			<td>SL No</td>
			<td>TRANSACTION ID</td>
			<td>DATE</td>
			<td>TYPE</td>
			<td>DEBIT</td>
			<td>CREDIT</td>
			<td>NET BAL</td>
			<td>Remarks</td>
		</tr>
		</thead>
		<tbody id="data_list">
		<?php $daily_deposit = $this->db->order_by('deposit_id','asc')->get_where('daily_deposit',array('ac_no' => $ac_no['ac_no'],'payment_desc'=>3))->result_array();
		$total = 0;$count=0;
		 ?>
		<?php foreach ($daily_deposit as $row) : ?>
		<tr>
			<td><?php $count=$count+1;echo $count; ?></td>
			<td style="text-align: center;width: 20%;"><?php echo $row['deposit_id']; ?></td>
			<td style="text-align: center;width: 15%;"><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
			<td style="text-align: center;width: 15%;"><?php if ($row['collection_amount']>0) {
				echo 'CREDIT';
			}else{
				echo 'DEBIT';
			} ?></td>
			<td style="text-align: center;width: 15%;"><?php echo $row['widthdraw_amount'];$total=$total-$row['widthdraw_amount']; ?></td>
			<td style="text-align: center;width: 15%;"><?php echo $row['collection_amount'];$total=$total+$row['collection_amount']; ?></td>
			<td style="text-align: center;width: 20%;"><?php echo $total; ?></td>
			<td style="text-align: center;width: 20%;"><?php echo $row['remark']; ?></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	</div>
</div>
<script type="text/javascript">
	function PrintElem(elem) {
	update_print_status();
    Popup($(elem).html());
}

function Popup(data) {

    var mywindow = window.open('', 'new div', 'height=400,width=600');
    mywindow.document.write('<html><head><title></title>');
    mywindow.document.write('<link rel="stylesheet" href="css/midday_receipt.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');
    mywindow.print();
    mywindow.close();
    return true;
}
</script>
<script type="text/javascript">
$( "#button1" ).click(function() {
    $( "#cover_page" ).toggle();
});

$( "#button2" ).click(function() {
    $( "#header" ).toggle();
});
$( "#button3" ).click(function() {
    $( "#data_list" ).toggle();
});

function update_print_status() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/update_print_status2/' . $ac_no['ac_no']; ?>", true);
  xhttp.send();
}

</script>
<script>
function addrow() {
  var table = document.getElementById("table_print");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  cell1.innerHTML = ".";
  cell2.innerHTML = "";
  cell3.innerHTML = "";
  cell4.innerHTML = "";
}
function addrow2() {
  var table = document.getElementById("table_print2");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "`";
  cell2.innerHTML = "";
  cell3.innerHTML = "";
  cell4.innerHTML = "";
}
</script>