<div class="row">
	<div class="col-sm-10">
		<div class="col-sm-4">
			<label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('First_Date');?></label>
			<div class="col-sm-6">
				<input type="text" name="first_date" id="first_date" class="form-control datepicker" required="required">
			</div>
			
		</div>
		<div class="col-sm-4">
			<label for="field-2" class="col-sm-4 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Last_Date');?></label>
			<div class="col-sm-6">
				<input type="text" name="first_date" id="last_date" class="form-control datepicker" required="required">
			</div>
			
		</div>
		<div class="col-sm-4">
			<div class="col-sm-6">
				<button class="btn btn-primary" onclick="get_content_table()" value="Get Data">Get Data</button>
			</div>
			
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-sm-10 offset-sm-1">
		<table class="table table-bordered">
			<thead>
				<tr style="font-size: 14px;">
					<td>Date</td>
					<td>Particular</td>
					<td>Debit Amount</td>
					<td>Credit Amount</td>
					<td>Mode</td>
					<td>Inst. NO</td>
					<td>Type</td>
				</tr>
			</thead>
			<tbody id="content_table">
				
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	function get_content_table() {
		document.getElementById('content_table').innerHTML = '';
		var first_date = document.getElementById('first_date').value;
		first_date = first_date.replace("/","-");
		first_date = first_date.replace("/","-");
		var last_date = document.getElementById('last_date').value;
		last_date = last_date.replace("/","-");
		last_date = last_date.replace("/","-");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('content_table').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_content_table/'; ?>" + first_date + "/" + last_date , true);
  xhttp.send();
}
</script>