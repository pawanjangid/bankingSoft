<?php
function inwords($number='')
{
	$no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  return $result . "Rupees And " . $points . " Paise";
}
   
 ?> 

<div class="row">
	<div class="col-sm-12">
		<?php $payment = $this->db->get_where('daily_deposit', array('deposit_id' => $data_id))->row_array(); ?>
		<div class="col-sm-10 offset-sm-1">
			<div class="col-sm-12">
				<div class="col-sm-7">
					<div><h3>Payment Voucher</h3></div>
					<hr>
					<div>Voucher No. <?php echo $payment['ledger_id']; ?></div>
				</div>

				<div class="col-sm-5">
					<table>
						<tr>
							<td>Branch</td>
							<td><?php echo  $this->db->get_where('branch', array('branch_id
							' => $payment['branch_id']))->row()->name; ?></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><?php echo date('d-m-Y',$payment['renewal_date']); ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-sm-12">
			<br><br><br>
			</div>
			
			<div class="col-sm-12">
				<table class="table-bordered">
					<tr>
						<td>Particular</td>
						<td>Debit</td>
						<td>Credit</td>
					</tr>
					<tr>
						<td>
							BY: CASH A/C<br>

							TO : <?php echo $this->db->get_where('ledger_master', array('ledger_id' => $payment['ledger_id']))->row()->name; ?>
						</td>
						<td style="text-align: right;">
							0.00<br>
							<?php echo $payment['widthdraw_amount'] . '.00'; ?>
						</td>
						<td style="text-align: right;">
							<?php echo $payment['widthdraw_amount'] . '.00'; ?><br>
							0.00
						</td>
					</tr>
					<tr>
						<td>TOTAL</td>
						<td style="text-align: right;"><?php echo $payment['widthdraw_amount'] . '.00'; ?></td>
						<td style="text-align: right;"><?php echo $payment['widthdraw_amount'] . '.00'; ?></td>
					</tr>
				</table>
				<div class="col-sm-12">
					<div class="col-sm-3">
						Cheque Detail
					</div>

				</div>
				<div class="col-sm-12">
					Amount In Words : <span><?php echo inwords($payment['widthdraw_amount']); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>