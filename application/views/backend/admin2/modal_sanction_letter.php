<div id="printarea">
<?php
$application_info   =   $this->db->get_where('user' , array('application_id' => $param2 ))->result_array();
foreach($application_info as $row):?>

<div class="row">
    <div>To, <br /> <?php echo $row['name']; ?></div>
    <div>Address : <?php echo $row['address']; ?></div>
    <div>Contact : <?php echo $row['phone']; ?></div>
    <div>Loan account no : <?php echo 'PLRD' . $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->approve_id; ?></div>
</div>
<br>
<br>
Dear Sir/Madam <br/>
<p>
    We are delighted to inform you that you loan application for <?php echo $this->db->get_where('class',array('class_id' => $row['class_id']))->row()->name; ?>  is considered by the company . we are pleased to inform you ,the we have in principle ,sanctioned the loan on the conditions given below and additional conditions printed overleaf.
</p>
<br>
<center><h3 style="text-transform: uppercase;">YOUR APPLICATION FOR <?php echo $this->db->get_where('class',array('class_id' => $row['class_id']))->row()->name; ?> LOAN SANCTION LETTER</h3></center>
<br>
<center>
<table style="width: 80%;" border="1">
    <tr>
        <td>Sanction amount</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->sanction_loan; ?></td>
    </tr>
    <tr>
        <td>Loan Sanction Date</td>
        <td><?php echo date('d-m-Y',$this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->date); ?></td>
    </tr>
    <tr>
        <td>Rate of interest</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->rate_of_interest . '%'; ?></td>
    </tr>
    <tr>
        <td>Number of EMI</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->number_of_emi; ?></td>
    </tr>
    <tr>
        <td>EMI Mode</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->emi_mode; ?></td>
    </tr>
    <tr>
        <td>EMI Amount</td>
        <td><?php 
              $number =  $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->number_of_emi;
              $amount = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->sanction_loan;
              $rate = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->rate_of_interest;
              $interest = $amount*$rate/1200;
              $emi_amount = $interest+($amount/$number);
              echo ceil($emi_amount);


          ?></td>
    </tr>
    <tr>
        <td>Date of 1<sup>st</sup> installment</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->date_first_emi;?></td>
    </tr>
    <tr>
        <td>Processing Fees</td>
        <td><?php echo $processing = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->processing_fee; ?></td>
    </tr>
    <tr>
        <td>Advance EMI</td>
        <td><?php echo $advemi = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->advance_emi; ?></td>
    </tr>
    <tr>
        <td>Pre EMI</td>
        <td><?php echo $pre_emi=$this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->pre_emi; ?></td>
    </tr>
    <tr>
        <td>Technical Charges</td>
        <td><?php echo $tech = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->technical_charges; ?></td>
    </tr>
    <tr>
        <td>Total Charges</td>
        <td><?php echo $processing+$pre_emi+$tech; ?></td>
    </tr>
</table>
</center>
<p>
    <ul>
        <li>
            We are enclosing herewith term sheet highlighting key terms and conditions of our offer. Detailed terms will be as per loan agreement. Please note that this offer letter contains indicative terms and conditions and not create any obligation on the part of <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> to disburse the loan.
        </li>
        <li>
            The offer is forwarded in duplicate to enable you to  confirm in writing that the terms and conditions mentioned in the offer are acceptable. Kindly sing &amp; return the duplicate copy.
        </li>
        <li>
            If you require any further clarification on your loan account /please feel free to call our relationship manager. Our relationship team would be glad to assist you.
        </li>
    </ul>
</p>
    <p>
        <ol>
            <li>
                ROL is linked to  <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?>‘s MCLR Prevailing as on date.
            </li>
            <li>
                The sanctioned loan will be disbursed only after the scrutiny and clearance of proposed property by <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> and as per the rules of <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?>. 
            </li>
            <li>
                <ul>
                    <li>Per –EML interest at the rate at which the EML has been calculated, shall be charged from the respective date (s) of disbursements to the date of commencement of EML in respect of the loan.</li>
                    <li>
                        the EML comprises of principal and interest calculated on the basis of monthly/yearly rest at the rate applicable ,which is rounded off to the next higher rupee.
                    </li>
                    <li>
                        <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> limited may at its sole discretion alter the rate of interest, suitably and prospectively under unforeseen or extraordinary changes in the money market conditions.
                    </li>

                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        the loan will be disbursed as per the stages of construction and the rules of the <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> in that behalf and not necessarily ,as per the builder ‘s agreement.
                    </li>
                    <li>
                        the loan will not be disbursed in part or full, until own contribution (Margin) has been paid in full, i.e., the cost of the dwelling unit less loan sanctioned by <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> 
                    </li>
                </ul>
            </li>
            <li>
                The EMIS , pre –EML interests are to paid on or before your cycle date of every month.
            </li>
            <li>
                the loan will be secured by first mortgage of the property proposed for availing this loan and / or such other security as <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> may find necessary and acceptable. Such documents/ reports/ evidence as may be required by <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> shall be produced to ascertain that the property to be mortgaged with <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> has a clear and marketable title the original title deeds to the property proposed to be purchased shall be deposited by the borrower for securing the loan.
            </li>
            <li>
                In case  of additional limits, the existing mortgage shall be extended to cover the proposed additional limit and / or as per the sanctioned conditions. 
            </li>
            <li>
                <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> shall be informed in writing about any change : in correspondence address/contact details change in employment, los of job , business ,profession ,as the case maybe immediately after such change/loss, notify the causes of delay, loss/damage to the property, notify the additions/alterations to the property.
            </li>
            <li>
                This letter offer shall stand  revoked and cancelled and shall be absolutely null and void if:
                <ul>
                    <li>
                        Any material changes occur in proposal for which this loan is, in principle sanctioned:
                    </li>
                    <li>
                       Any material fact concerning income ,or ability to repay or any other relevant aspect of the proposal or application for loan is withheld, suppressed ,concealed or not made known to <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?>: 
                    </li>
                    <li>
                        any statement made in the loan application is found to be incorrect or untrue:
                    </li>
                </ul>
            </li>
            <li>
                All stamp duty and registration change , if any .as per state stamp act of any document executed by you in favour of <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> shall be payable by you in full.
            </li>
            <li>
                in the event of any non – compliance of legal and technical formalities required by <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> , all the fees paid to <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> will be non – refundable.
            </li>
            <li>
                the issuance of this letter of offer ,does not give /confer any legal rights and <?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?> will be at full liberty to revoke this offer, due to any of the reasons mentioned above or otherwise
            </li>
            <li>
                the rate of interest mentioned in the letter of offer ,is based on the current prevailing RPLR, and financial money market conditions . this same may very at the time of disbursement of the loan ,as well as during the tenure of the loan.
            </li>
            <li>
                as a result of the variation in the rate of interest , the number of EMLS is liable to very , from time to  time . 
            </li>
            <li>
                you are required to provide 12/24/36, post –dated cheques(PDC’S), to replenished as and when they are exhausted towards payment of balance EML’S, TILL SUCH TIME THE ENTIRE LOAN IS PAID OFF .
            </li>
            <li>
                This letter of offer is valid for a period of 90 days from the date of sanction .
            </li>
        </ol>
    </p>
<div style="width: 80%;margin-top: 100px;">
    <div style="float: left">Borrower</div>
<div style="float: right;">CO-Borrower</div>
</div>
<?php endforeach;?>
</div>

<center><button onclick="print();">Print</button></center>
<script type="text/javascript">
    function print() {
    var divToPrint = document.getElementById('printarea');
    var htmlToPrint = '';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
    }
</script>