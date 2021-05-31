<style>
.table_style {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.table_style td, .table_style th {
    border: 1px solid #ddd;
    padding: 8px;
}

.table_style tr:nth-child(even){background-color: #f2f2f2;}

.table_style tr:hover {background-color: #ddd;}

.table_style th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>



<div id="printarea">
<?php
$application_info   =   $this->db->get_where('user' , array('application_id' => $param2 ))->result_array();
foreach($application_info as $row):?>
<center>
<div class="row">
    <div class="col-sm-12" style="text-align: left;">
        <table style="width: 100%;" class="table_style">
            <thead>
                <tr>
                    <td colspan="2" style="text-align: left;font-size: 18px;">Basic Detail</td>
                    <td colspan="2" style="text-align: left;font-size: 18px;">Loan Detail</td>
                </tr>
            </thead>
            <tr>
                <td style="width: 20%;">Name : </td>
                <td style="width: 30%;"><?php echo $row['name']; ?></td>
                <td style="width: 20%;">Sanction amount</td>
        <td style="width: 30%;"><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->sanction_loan; ?></td>
            </tr>
            
            <tr>
                <td>Phone no. : </td>
                <td><?php echo $row['phone']; ?></td>
                <td>Loan Sanction Date</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->date; ?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><?php echo $row['address']; ?></td>
                <td>Rate of interest</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->rate_of_interest . '%'; ?></td>
            </tr>
            <tr>
                <td>Loan account no. : </td>
                <td><?php $input = $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->approve_id;
                                 echo 'PLRD' . str_pad($input, 7, "0",STR_PAD_LEFT); ?></td>
                                 <td>Number of EMI</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->number_of_emi; ?></td>

            </tr>
            <tr>
               <td></td>
               <td></td>
               <td>EMI Mode</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->emi_mode; ?></td>
            </tr>
            <tr>
               <td></td>
               <td></td>
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
               <td></td>
               <td></td>
               <td>Date of 1<sup>st</sup> installment</td>
        <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->date_first_emi;?></td>
      </tr>
        </table>
    </div>
</div>
</center>
<hr>
<center>
    <div><h2>Welcome Letter</h2></div>
</center>

<table style="width: 100%;" class="table_style">
    <thead>
        <tr>
            <td>Date</td>
            <td>Principle amount</td>
            <td>Total interest</td>
            <td>EMI</td>
            <td>Paid EMI</td>
            <td>Remaining amount</td>
        </tr>
    </thead>
    <tr>
        <td></td>
            <td><?php echo $this->db->get_where('approve', array('application_id' => $row['application_id']))->row()->sanction_loan; ?></td>
            <td><?php echo ceil($interest*$number); ?></td>
            <td><?php echo ceil($emi_amount); ?></td>
            <td>0</td>
            <td><?php  $Total =  $amount+$amount*$rate*$number/1200; 
             echo ceil($Total);
    ?></td>
    </tr>
    <?php $count = 1; ?>
    <?php $emi = $this->db->get_where('income' , array('application_id' => $row['application_id'] ))->result_array(); ?>
    <?php foreach ($emi as $key) :?>
        <tr>
        <td><?php echo date('d-m-Y',$key['date']); ?></td>
            <td><?php echo ceil($Total); ?></td>
            <td></td>
            <td><?php echo $emi_a =  ceil($emi_amount); ?></td>
            <td><?php echo $count; ?></td>
            <td><?php $Total =  ceil($Total-$emi_a);
            if ($Total <=  0) {
                echo ceil($Total) . '     (Your Loan has been completed)';
            }
            elseif($Total >= 0)
                echo ceil($Total);



             ?></td>
            <?php $count = $count+1; ?>
    </tr>


    <?php endforeach; ?>
</table>
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