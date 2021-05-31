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
                <?php echo $this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->row()->select_plan; ?>
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
            <td>Month</td>
            <td>Date</td>
            <td>Days(From 1 to End)</td>
            <td>(No.)Paid in Month</td>
            <td>Amount Paid</td>
            <td>Interest</td>
            <td>Total Amount</td>

        </tr>
    </thead>
    <?php $plan = $this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->row()->select_plan;
    $rate = $this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->row()->interest_rate; ?>
<?php
?>
<?php 
$smonth =date('m',$this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->row()->date);
$syear = date('Y',$this->db->get_where('daily_accounting' , array('daily_account_id' => $param2 ))->row()->date);
$newdate = '01' . '/' . $smonth . '/' . $syear;


function convertdate($date) {
$array = explode('-', $date);
$tmp = $array[0];
$array[0] = $array[1];
$array[1] = $tmp;
unset($tmp);
$date = implode('/', $array);
return strtotime($date);
}

function nodayinmonth($value,$year)
{
    if (($value == '1') || ($value == '3') || ($value == '5') || ($value == '7') || ($value == '8') || ($value == '10') ||( $value == '12')) {
        return 31;
    }elseif ($value == '2') {
        if ((0 == $year%4) && (0 != $year%100) || (0 == $year%400)) {
            return 29;
        }
        else{
            return 28;
        }
    }
    else {
        return 30;
    }
}
?>
<?php
$amount = 0;
$totalamount = 0;
for ($i=1; $i <= $plan; $i++): ?>

<?php       $sdate  = '01' . '-' . $smonth . '-' . $syear;
            $edate = nodayinmonth($smonth,$syear) . '-' . $smonth . '-' . $syear; 
            $sdatestr = convertdate($sdate);
            $edatestr = convertdate($edate);
            $this->db->where('date BETWEEN "'. $sdatestr. '" and "'. $edatestr.'"');
            $this->db->where('account_type','daily_account');
            $this->db->where('account_id',$param2);
            $result=$this->db->get('account_payment')->result_array();
            $value = array_sum(array_column($result,'amount'));
            $amount=$amount+$value;
?>
<tr>        
            <td><?php echo $i; ?></td>
            <td><?php echo date('d-m-Y',$sdatestr) . ' - ' . date('d-m-Y',$edatestr);  ?></td>
            <td>[<?php foreach ($result as $key) {
                echo date('d',$key['date']).',';
            } ?>]</td>
            <td><?php echo sizeof($result); ?></td>
             <td><?php echo $amount ?></td>
            <td><?php echo  $interest = round($amount*$rate/1200,2); ?></td>
            <td><?php echo $totalamount = $totalamount+$value+$interest; ?> </td>
            
 </tr>

<?php  
    if ($smonth < 12) {
        $smonth = $smonth + 1;
    }
    else {
        $smonth = 1;
        $syear = $syear + 1;
    }
?>

<?php endfor; ?> 

 <tr style="font-size: 24px;color: green;">
            <td>Total</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo $totalamount; ?></td>
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