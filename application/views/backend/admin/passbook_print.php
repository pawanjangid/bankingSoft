
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

<?php $data_policy = $this->db->get_where('investment',array('policy_no' => $policy_no))->row_array();
$member_Data = $this->db->get_where('members',array('member_code' => $data_policy['member_code']))->row_array();
$plan_data = $this->db->get_where('product_master', array('product_id' =>  $data_policy['plan']))->row_array();
$branch = $this->db->get_where('branch', array('branch_id' => $data_policy['branch_id']))->row_array();
$total = 0; ?>
<div class="row" id="cover_page" style="font-size: 14px;">
		<div class="col-sm-10 offset-sm-1" >
			<div style="height: 350px;position: relative;width: 100%;">
				
			</div>
			<table style="width: 100%;font-size: 18px;" id="table_print2">
				<tr>
					<td colspan="2">Branch &amp; Code : <?php echo $branch['name'] . '&' . $branch['code']; ?></td>
					<td>DOC : <?php echo date('d-m-Y',$data_policy['policy_date']); ?></td>
				</tr>
				<tr>
					<td colspan="2">Appicant Name : <?php echo $member_Data['member_name']; ?></td>
					<td>Policy No : <?php echo $data_policy['policy_no']; ?></td>
				</tr>
				<tr>
					<td colspan="3">
						Address : <?php echo $member_Data['address']; ?>
					</td>
				</tr>
				<tr>
					<td>Plan : <?php echo $plan_data['plan_name']; ?></td>
					<td>PIN No : <?php echo $member_Data['pin_code']; ?></td>
					<td>Scheme : <?php echo $plan_data['plan_type']; ?></td>
				</tr>
				<tr>
					<td>Member Code : <?php echo $member_Data['member_code']; ?></td>
					<td>Value : </td>
					<td>Inst Amount : <?php echo $data_policy['amount']; ?></td>
				</tr>
				<tr>
					<td colspan="2">Employee Code : </td>
					
					<td>Maturity Date : <?php echo date('d-m-Y',$data_policy['maturity_date']); ?></td>
				</tr>
				<tr>
					<td colspan="3">Nominee Name/Relation/Age : <?php echo $data_policy['nominee_name']. '/' . $this->db->get_where('Relation', array('relation_id' => $data_policy['nominee_relation']))->row()->name . '/' . $data_policy['nominee_age']; ?></td>
					
					
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
	<table class="table table-bordered" id="table_print" style="width: 95%;border: 1px solid #dee2e6;margin-bottom: 1rem;background-color: transparent;">
		<thead id="header">
		<tr >
			<td style="text-align: center;width: 25%;">TR Id</td>
			<td style="text-align: center;width: 25%;">Month</td>
			<td style="text-align: center;width: 25%;">Amount</td>
			<td style="text-align: center;width: 25%;">Total Amount</td>
		</tr>
		</thead>
		<?php $daily_deposit = $this->db->order_by('deposit_id','asc')->get_where('daily_deposit',array('policy_no' => $data_policy['policy_no'],'print_status'=>0,'payment_desc'=>1))->result_array();
		$last = end($daily_deposit);
		$first = $daily_deposit[0];

		 ?>
		<tbody id="data_list">
		<?php $this->db->select_sum('collection_amount');
		$daily_deposit = $this->db->get_where('daily_deposit',array('policy_no' => $data_policy['policy_no'],'print_status'=>0,'payment_desc'=>1));
		$amount=$daily_deposit->row()->collection_amount;
		;$count = 0;?>

		<tr>
		    <td style="text-align: center;width: 25%,"><?php echo $last['deposit_id']; ?></td>
			<td style="text-align: center;width: 25%;"><?php echo  date('d/m/Y',$first['renewal_date']) . ' - ' . date('d/m/Y',$last['renewal_date']); ?></td>
			<td style="text-align: center;width: 25%;"><?php echo $amount; ?></td>
			<td style="text-align: center;width: 25%;"><?php 
			$this->db->select_sum('collection_amount');
			$amount_total = $this->db->get_where('daily_deposit', array('policy_no' => $data_policy['policy_no'],'payment_desc'=>1));
			$total=$amount_total->row()->collection_amount;
			echo $total; ?></td>
		</tr>
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
			<td>Tr Id</td>
			<td>Inst. No</td>
			<td>Date</td>
			<td>Amount</td>
			<td>Late Fine</td>
			<td>Total Amount</td>
		</tr>
		</thead>
		<tbody id="data_list">
		<?php $daily_deposit = $this->db->order_by('renewal_date','asc')->get_where('daily_deposit',array('policy_no' => $data_policy['policy_no'],'payment_desc'=>1))->result_array();$count = 0;$total=0;?>
		<?php foreach ($daily_deposit as $row) : ?>
		<tr>
			<td><?php $count=$count+1;echo $count; ?></td>
			<td><?php echo $row['deposit_id']; ?></td>
			<td><?php echo $row['installment_no_to'] ?></td>
			<td><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
			<td><?php echo $row['collection_amount'];$total = $total+$row['collection_amount'] ?></td>
			<td>0</td>
			<td><?php echo $total; ?></td>
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
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/update_print_status/' . $data_policy['policy_no']; ?>", true);
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