<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/loan_track' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
<div class="row" style="font-size: 14px;padding: 10%;">
	<div class="col-sm-12">
		<?php $loan_data = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->result_array(); ?>
		<?php foreach ($loan_data as $row): ?>

			<div class="col-sm-12" style="margin-bottom: 20px;">
				Name : <?php echo $this->db->get_where('members',array('member_code'=>$row['member_id']))->row()->member_name; ?><br>
				member Code : <?php echo $row['member_id']; ?>
                <br>
				Loan A/c : <?php echo $row['loan_code']; ?>
			</div>




				<?php 
				$terms = $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->max_term;
				$roi = $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->roi_max;
				$loan_amount = $terms*$row['emi'];

				$emi = $row['emi'];

				$data = $this->db->get_where('daily_deposit',array('loan_id'=>$row['loan_code']))->result_array();
				$count = 1;$total=0;
				 ?>
				<table>
					<thead>
						<tr>
							<th>EMI No</th>
							<th>Date</th>
							<th>EMI Amount</th>
							<th>Paid Amount</th>
							<th>Loan Amount</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $row1) : ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo date('d-m-Y',$row1['renewal_date']); ?></td>
								<td><?php echo $row1['collection_amount']; ?></td>
								<td><?php echo $total=+$row1['collection_amount']; ?></td>
								<td><?php 


								if ($count=='1') {
									echo $loan_amount;
								}else{
									echo $loan_amount =$loan_amount-$row1['collection_amount'];
								}
						
						
$count=$count+1;
						


								 ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

		<?php endforeach; ?>
	</div>
</div>