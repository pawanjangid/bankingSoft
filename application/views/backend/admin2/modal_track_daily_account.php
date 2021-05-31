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
$account   =   $this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->result_array();
foreach($account as $row):?>
<center>
<div class="row">
    <div class="col-sm-12" style="text-align: left;">
        <table style="width: 100%;" class="table_style">
            <tr>
                <td style="width: 20%;">Name : </td>
                <td style="width: 30%;"><?php echo $row['name']; ?></td>
                <td style="width: 20%;">Amount</td>
                <td style="width: 20%;">Interest Rate</td>
            </tr>
        </table>
    </div>
</div>

<?php endforeach;?>
</center>
<hr>
<center>
    <div><h2>Track Detail</h2></div>
</center>

<table style="width: 100%;" class="table_style">
    <thead>
        <tr>
            <td>Date</td>
            <td>Amount</td>
            <td>Interest</td>
            <td>Total amount</td>
        </tr>
    </thead>
    <?php $amount = 0; $amounting = $this->db->get_where('account_payment', array('account_type' => 'daily_account','account_id' => $param2))->result_array(); ?>
    <?php foreach ($amounting as $row) : ?>
    <tr>
            <td><?php echo date('d-m-Y',$row['date']); ?></td>
            <td><?php echo  $row['amount']; ?></td>
            <td><?php echo  'H'; ?></td>
            <td><?php echo $amount=$amount+$row['amount']; ?></td>
    </tr>
<?php endforeach; ?>
 <tr>
            <td>Total</td>
            <td></td>
            <td></td>
            <td><?php echo $amount; ?></td>
    </tr>
</table>

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