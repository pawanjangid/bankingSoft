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
				$amount = $row['loan_amount'];
				
				$loanamt = $row['emi']*$terms;
				$emi = $row['emi'];



				 ?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>EMI No</th>
							<th>Due Date</th>
							<th>Priciple Amount</th>
							<th>EMI Amount</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=1; $i <= $terms; $i++): ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<?php
						echo date('d-m-Y',strtotime(date('d-m-Y',$row['payment_date']). '+ '.$i.' month')); ?>
							
						</td>
						<td><?php 
						$loanamt=$loanamt-$emi;
						if ($loanamt < 0) {
							echo '0';
						}else {
							echo $loanamt;
						}


						 ?></td>
						<td><?php echo $emi; ?></td>
					</tr>
					<?php endfor; ?>
					</tbody>
				</table>

		<?php endforeach; ?>
	</div>
</div>