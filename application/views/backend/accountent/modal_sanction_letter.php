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
Dear Sir/Madam<br/>
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
<center>
<div style="width: 80%;margin-top: 100px;">
    <div style="float: left">Applicant</div>
<div style="float: right;">Co Applicant</div>
</div>
</center>
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