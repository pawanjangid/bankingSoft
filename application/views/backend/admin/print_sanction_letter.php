
<?php

$loan_data = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->result_array();


 ?>
 <?php foreach ($loan_data as $row) : ?>
<div class="row" style="font-size: 14px;padding: 10%;">
	To,
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->db->get_where('members',array('member_code'=>$row['member_id']))->row()->member_name; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address : <?php echo $this->db->get_where('members',array('member_code'=>$row['member_id']))->row()->address; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact : <?php echo $this->db->get_where('members',array('member_code'=>$row['member_id']))->row()->phone_no; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan A/c : <?php echo $row['loan_code']; ?>
	<p style="margin-left: 10%;margin-top: 20px;font-size: 14px;">
		Dear Sir/Madam <br>
We are delighted to inform you that you loan application for Personal Loan is considered by the company . we are pleased to inform you ,the we have in principle ,sanctioned the loan on the conditions given below and additional conditions printed overleaf.
	</p>
	<div class="col-sm-12" style="margin-top: 20px;">
		<center><h2>YOUR APPLICATION FOR PERSONAL LOAN SANCTION LETTER</h2></center>
	</div>
	<div class="col-sm-12">
		<table>
			<thead>
			<tr>
				<th>Particular</th>
				<th>Amount</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td style="padding: 5px;">Sanction amount</td>
					<td style="padding: 5px;"><?php echo $row['loan_amount']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Loan Sanction Date</td>
					<td style="padding: 5px;"><?php echo date('d-m-Y',$row['payment_date']); ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Rate of interest</td>
					<td style="padding: 5px;"><?php echo $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->roi_max; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Number of EMI</td>
					<td style="padding: 5px;"><?php echo $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->max_term; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">EMI Mode</td>
					<td style="padding: 5px;"><?php echo $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->loan_mode; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">EMI Amount</td>
					<td style="padding: 5px;"><?php echo $row['emi']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Date of 1<sup>st</sup>  installment</td>
					<td style="padding: 5px;"><?php echo date('d-m-Y',strtotime(date('d-m-Y',$row['payment_date']). '+ 1 month')); ?></td>

				</tr>
				<tr>
					<td style="padding: 5px;">Processing Fees</td>
					<td style="padding: 5px;"><?php echo $row['processing_fee']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">GST</td>
					<td style="padding: 5px;"><?php echo $row['gst_tax']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Advance EMI</td>
					<td style="padding: 5px;"><?php echo $row['service_tax']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Pre EMI</td>
					<td style="padding: 5px;"><?php echo $row['insurance_amount']; ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Total Amount</td>
					<td style="padding: 5px;"><?php echo $row['processing_fee']+$row['gst_tax']+$row['service_tax']+$row['insurance_amount']; ?></td>
				</tr>
			</tbody>
			
		</table>
	</div>
	<div class="col-sm-12" style="margin-top: 20px;">
		<ol>
			<li>
				We are enclosing herewith term sheet highlighting key terms and conditions of our offer. Detailed terms will be as per loan agreement. Please note that this offer letter contains indicative terms and conditions and not create any obligation on the part of HARI SAGAR NIDHI LIMITED to disburse the loan.
			</li>
			<li>
				The offer is forwarded in duplicate to enable you to confirm in writing that the terms and conditions mentioned in the offer are acceptable. Kindly sing & return the duplicate copy.
			</li>
			<li>If you require any further clarification on your loan account /please feel free to call our relationship manager. Our relationship team would be glad to assist you.</li>
		</ol>
		<ul>
			<li>ROL is linked to HARI SAGAR NIDHI LIMITED‘s MCLR Prevailing as on date.</li>
			<li>The sanctioned loan will be disbursed only after the scrutiny and clearance of proposed property by HARI SAGAR NIDHI LIMITED and as per the rules of HARI SAGAR NIDHI LIMITED.</li>
			<li>Per –EML interest at the rate at which the EML has been calculated, shall be charged from the respective date (s) of disbursements to the date of commencement of EML in respect of the loan.</li>
			<li>the EML comprises of principal and interest calculated on the basis of monthly/yearly rest at the rate applicable ,which is rounded off to the next higher rupee.</li>
			<li>
				HARI SAGAR NIDHI LIMITED limited may at its sole discretion alter the rate of interest, suitably and prospectively under unforeseen or extraordinary changes in the money market conditions.
			</li>
			<li>
				the loan will be disbursed as per the stages of construction and the rules of the HARI SAGAR NIDHI LIMITED in that behalf and not necessarily ,as per the builder ‘s agreement.
			</li>
			<li>
				the loan will not be disbursed in part or full, until own contribution (Margin) has been paid in full, i.e., the cost of the dwelling unit less loan sanctioned by HARI SAGAR NIDHI LIMITED
The EMIS , pre –EML interests are to paid on or before your cycle date of every month.
			</li>
			<li>
				the loan will be secured by first mortgage of the property proposed for availing this loan and / or such other security as HARI SAGAR NIDHI LIMITED may find necessary and acceptable. Such documents/ reports/ evidence as may be required by HARI SAGAR NIDHI LIMITED shall be produced to ascertain that the property to be mortgaged with HARI SAGAR NIDHI LIMITED has a clear and marketable title the original title deeds to the property proposed to be purchased shall be deposited by the borrower for securing the loan.
			</li>
			<li>
				In case of additional limits, the existing mortgage shall be extended to cover the proposed additional limit and / or as per the sanctioned conditions.
			</li>
			<li>
				HARI SAGAR NIDHI LIMITED shall be informed in writing about any change : in correspondence address/contact details change in employment, los of job , business ,profession ,as the case maybe immediately after such change/loss, notify the causes of delay, loss/damage to the property, notify the additions/alterations to the property.
			</li>
			<li>
				All stamp duty and registration change , if any .as per state stamp act of any document executed by you in favour of HARI SAGAR NIDHI LIMITED shall be payable by you in full.
			</li>
			<li>
				in the event of any non – compliance of legal and technical formalities required by HARI SAGAR NIDHI LIMITED , all the fees paid to HARI SAGAR NIDHI LIMITED will be non – refundable.
			</li>
			<li>
				the issuance of this letter of offer ,does not give /confer any legal rights and HARI SAGAR NIDHI LIMITED will be at full liberty to revoke this offer, due to any of the reasons mentioned above or otherwise
			</li>
			<li>
				the rate of interest mentioned in the letter of offer ,is based on the current prevailing RPLR, and financial money market conditions . this same may very at the time of disbursement of the loan ,as well as during the tenure of the loan.
			</li>
			<li>
				as a result of the variation in the rate of interest , the number of EMLS is liable to very , from time to time .
you are required to provide 12/24/36, post –dated cheques(PDC’S), to replenished as and when they are exhausted towards payment of balance EML’S, TILL SUCH TIME THE ENTIRE LOAN IS PAID OFF .
			</li>
			<li>
				This letter of offer is valid for a period of 90 days from the date of sanction .

			</li>
			<li>
				This letter offer shall stand revoked and cancelled and shall be absolutely null and void if:
Any material changes occur in proposal for which this loan is, in principle sanctioned:
Any material fact concerning income ,or ability to repay or any other relevant aspect of the proposal or application for loan is withheld, suppressed ,concealed or not made known to HARI SAGAR NIDHI LIMITED:
any statement made in the loan application is found to be incorrect or untrue:
			</li>
		</ul>
		



















	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-3"><?php echo 'Applicant'; ?></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"><?php
		echo 'Co-Applicant'







		 ?>
			
		</div>
	</div>
</div>

 <?php endforeach; ?>