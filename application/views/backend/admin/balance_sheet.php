<div class="row">
  <div class="col-sm-10">
    <?php echo form_open(base_url() . 'index.php?admin/get_balance_table' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
    <div class="col-sm-4">
      <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 20px;" ><?php echo get_phrase('Branch :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" class="form-control" required="required">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="All" <?php if ($branch_id=="All"){
                                echo 'selected="selected"';
                              } ?>>All</option>
                              <?php $Branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($Branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>" <?php if ($branch_id==$row['branch_id']){
                                echo 'selected="selected"';
                              } ?>><?php echo $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <label for="field-2" class="col-sm-2 control-label"><?php echo get_phrase('Select_Date');?></label>
      <div class="col-sm-4">
        <input type="text" name="first_date" id="first_date" class="form-control datepicker" required="required" value="<?php if(!is_null($first_date)) echo date('d/m/Y',$first_date); ?>">
      </div>
      <label for="field-2" class="col-sm-2 control-label"><?php echo get_phrase();?></label>
      <div class="col-sm-4">
        <input type="text" name="last_date" id="last_date" class="form-control datepicker" required="required" value="<?php if(!is_null($second_date)) echo date('d/m/Y',$second_date); ?>">
      </div>
      
    </div>

    <div class="col-sm-4">
      <div class="col-sm-6">
        <button class="btn btn-primary" onclick="get_content_table()" value="Get Data">Get Data</button>
      </div>
      
    </div>
    <?php echo form_close();?>
  </div>
</div>
<div id="print_data">
<?php if (!is_null($first_date)): ?>
  <?php if ($branch_id=='All') : ?>
<div class="row">
  <div class="col-sm-10 offset-sm-1">
    <?php $payment = $this->db->get_where('daily_deposit', array('deposit_id' => $data_id))->row_array(); ?>
    <div>
      <div class="col-sm-12">
        <div class="col-sm-7">
          <div><h3>Balance Sheet</h3></div>
          <hr>
          <div>Branch : All Branch</div>
          <div>Date From <?php echo date('d-m-Y',$first_date); ?> To <?php echo date('d-m-Y',$second_date); ?></div>
        </div>
        </div>
      </div>
      <div class="col-sm-12">
      <br><br><br>
      </div>
      
      <div class="col-sm-12">
        <table class="table-bordered">
          <thead>
            <tr>
            <td>Liablities</td>
            <td>Amount</td>
            <td>Assests</td>
            <td>Amount</td>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td style="line-height: 200%;">
                Liabilities
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixed Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurring Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurring Daily Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurring Monthly Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saving A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Share A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regular Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monthly Deposit
              </td>
              <td style="line-height: 200%;">
               
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $fixed=$this->db->get_where('daily_deposit', array('payment_desc' => '1','plan_mode'=>'Single'))->row()->collection_amount;

                 ?>
                 <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $recurring=$this->db->get_where('daily_deposit', array('payment_desc' => '1','installment_no'=>'1','plan_mode'=>'Daily'))->row()->collection_amount;

                 ?>
                  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $rec_monthly=$this->db->get_where('daily_deposit', array('payment_desc' => '1','installment_no'=>'1','plan_mode'=>'Monthly'))->row()->collection_amount;

                 ?>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                $saving_collection=$this->db->get_where('daily_deposit', array('payment_desc' => '3'))->row()->collection_amount;
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
               $saving_withdraw=$this->db->get_where('daily_deposit', array('payment_desc' => '3'))->row()->widthdraw_amount;

                echo $saving = $saving_collection-$saving_withdraw;
                 ?>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                $this->db->where('date_of_joining >=', $first_date);
                $this->db->where('date_of_joining <=', $second_date);
                $this->db->select_sum('share_amount');
                echo $share_amount=$this->db->get('share_allotment')->row()->share_amount;

                 ?>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->where('installment_no >', '1');
                $this->db->select_sum('collection_amount');
                echo $regular=$this->db->get_where('daily_deposit', array('payment_desc' => '1','plan_mode'=>'Daily'))->row()->collection_amount;


                 ?>
                 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->where('installment_no >', '1');
                $this->db->select_sum('collection_amount');
                echo $monthly=$this->db->get_where('daily_deposit', array('payment_desc' => '1','plan_mode'=>'Monthly'))->row()->collection_amount;
                

                 ?>
              </td>
              <td style="line-height: 200%;">
                Assests
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash in Hand
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan Principal
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank A/C
                <br><?php $bank = $this->db->get_where('bank_master')->result_array(); ?>
                <?php foreach ($bank as $key) {
                  echo get_phrase($key['bank_name']) . ' A/C - ' . $key['account_number'] . '<br>';
                } ?>
                
                <br>Profit And Loss A/C()
              </td>
              <td style="line-height: 200%;text-align: center;">
               <br>
                <?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                 $cash_deposit=$this->db->get_where('daily_deposit', array('payment_type'=>'Cash'))->row()->collection_amount;
               //    $this->db->where('trans_date >=', $first_date);
               //  $this->db->where('trans_date <=', $second_date);
               //  $this->db->select_sum('amount');
               //   $cash_entry_credit = $this->db->get_where('account_balance', array('payment_method'=>'Cash','trans_type'=>'credit'))->row()->amount;
               //  $this->db->where('trans_date >=', $first_date);
               //  $this->db->where('trans_date <=', $second_date);
               //  $this->db->select_sum('amount');
               // $cash_entry_debit = $this->db->get_where('account_balance', array('payment_method'=>'Cash','trans_type'=>'debit'))->row()->amount;
                $cash = $cash_deposit;
                 ?>
                 <br>
                 <?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
                $widthdraw=$this->db->get_where('daily_deposit', array('payment_desc'=>'2','payment_type'=>'Cash'))->row()->widthdraw_amount;

                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
                $cash_saving_with = $this->db->get_where('daily_deposit', array('payment_desc'=>'3','payment_type'=>'Cash'))->row()->widthdraw_amount;

                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
                $loan_widthdraw=$this->db->get_where('daily_deposit', array('payment_desc'=>'4','payment_type'=>'Cash'))->row()->widthdraw_amount;

                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                $loan_fee=$this->db->get_where('daily_deposit', array('payment_desc'=>'4','payment_type'=>'Cash'))->row()->collection_amount;


                echo $cash=$cash+$loan_fee-$widthdraw-$cash_saving_with-$loan_widthdraw;
                 ?>
                <br><?php echo $loan_widthdraw; ?>
                <br>
                <br>
                <br>
                <?php $bank = $this->db->get_where('bank_master')->result_array();$bank_daily=0;$bank_saving=0;$bank_share_deposit=0;$bank_saving_with=0;$total_bank=0;$bank_entry_debit=0; ?>
                <?php foreach ($bank as $key) {
                  
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                $bank_daily = $this->db->get_where('daily_deposit', array('payment_desc'=>'1','payment_type'=>'Cheque','bank_id'=>$key['bank_id']))->row()->collection_amount;


                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $bank_saving = $this->db->get_where('daily_deposit', array('payment_desc'=>'3','payment_type'=>'Cheque','bank_id'=>$key['bank_id']))->row()->collection_amount;

                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
                $bank_saving_with = $this->db->get_where('daily_deposit', array('payment_desc'=>'3','payment_type'=>'Cheque','bank_id'=>$key['bank_id']))->row()->widthdraw_amount;

                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('widthdraw_amount');
                $bank_voucher_with = $this->db->get_where('daily_deposit', array('payment_desc'=>'2','payment_type'=>'Cheque','bank_id'=>$key['bank_id']))->row()->widthdraw_amount;

                $this->db->where('date_of_joining >=', $first_date);
                $this->db->where('date_of_joining <=', $second_date);
                $this->db->select_sum('share_amount');
                $bank_share_deposit = $this->db->get_where('share_allotment', array('payment_type'=>'Cheque','bank_id'=>$key['bank_id']))->row()->share_amount;

                $this->db->where('trans_date >=', $first_date);
                $this->db->where('trans_date <=', $second_date);
                $this->db->select_sum('amount');
                $bank_entry_debit = $this->db->get_where('account_balance', array('payment_method'=>'Cheque','bank_id'=>$key['bank_id'],'trans_type'=>'debit'))->row()->amount;

                 $this->db->where('trans_date >=', $first_date);
                $this->db->where('trans_date <=', $second_date);
                $this->db->select_sum('amount');
                $bank_entry_credit = $this->db->get_where('account_balance', array('payment_method'=>'Cheque','bank_id'=>$key['bank_id'],'trans_type'=>'credit'))->row()->amount;

                echo $bank_share_deposit+$bank_daily+$bank_saving+$bank_share+$bank_entry_credit-$bank_entry_debit-$bank_saving_with-$bank_voucher_with;
                $total_bank = $bank_share_deposit+$total_bank+$bank_daily+$bank_saving+$bank_share+$bank_entry_credit-$bank_entry_debit-$bank_saving_with-$bank_voucher_with;

                } ?>
                <br>
                <br>
                <?php echo $total_bank+$cash+$loan_widthdraw-$recurring-$regular-$saving-$rec_monthly-$fixed-$share_amount-$monthly; ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><?php echo $share_amount+$fixed+$recurring+$regular+$saving+$monthly+$rec_monthly; ?></td>
              <td></td>
              <td><?php echo $share_amount+$fixed+$recurring+$regular+$saving+$monthly+$rec_monthly; ?></td>
            </tr>

          </tbody>

        </table>

      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($branch_id !='All'): ?>
<div class="row">
  <div class="col-sm-10 offset-sm-1">
    <?php $payment = $this->db->get_where('daily_deposit', array('deposit_id' => $data_id))->row_array(); ?>
    <div>
      <div class="col-sm-12">
        <div class="col-sm-7">
          <div><h3>Balance Sheet</h3></div>
          <hr>
          <div>Branch : <?php echo $this->db->get_where('branch', array('branch_id' => $branch_id))->row()->name; ?></div>
          <div>Date From <?php echo date('d-m-Y',$first_date); ?> To <?php echo date('d-m-Y',$second_date); ?></div>
        </div>
        </div>
      </div>
      <div class="col-sm-12">
      <br><br><br>
      </div>
      
      <div class="col-sm-12">
        <table class="table-bordered">
          <thead>
            <tr>
            <td>Liablities</td>
            <td>Amount</td>
            <td>Assests</td>
            <td>Amount</td>
          </tr>
          </thead>
          
          <tbody>
            <tr>
              <td style="line-height: 200%;">
                Liabilities
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixed Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurring Deposit
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saving A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Share A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regular Deposit
              </td>
              <td style="line-height: 200%;">
               
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $fixed=$this->db->get_where('daily_deposit', array('payment_desc' => '1','branch_id' => $branch_id,'plan_mode'=>'Single'))->row()->collection_amount;

                 ?>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                 echo $recurring=$this->db->get_where('daily_deposit', array('payment_desc' => '1','installment_no'=>'1','plan_mode'=>'Daily'))->row()->collection_amount;

                 ?>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->where('installment_no >', '1');
                $this->db->select_sum('collection_amount');
                echo $regular=$this->db->get_where('daily_deposit', array('payment_desc' => '1','branch_id' => $branch_id,'plan_mode'=>'Daily'))->row()->collection_amount;

                 ?>
              </td>
              <td style="line-height: 200%;">
                Asset
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash A/C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash in Hand
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan Principal
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank A/C
                <br><?php $bank = $this->db->get_where('bank_master')->result_array(); ?>
                <?php foreach ($bank as $key) {
                  echo get_phrase($key['bank_name']) . ' A/C - ' . $key['account_number'] . '<br>';
                } ?>
                
                <br>Profit And Loss A/C()
              </td>
              <td style="line-height: 200%;text-align: center;">
                
               <br><br>
                <?php 
                $this->db->where('renewal_date >=', $first_date);
                $this->db->where('renewal_date <=', $second_date);
                $this->db->select_sum('collection_amount');
                echo $cash=$this->db->get_where('daily_deposit', array('payment_desc' => '1','payment_type'=>'Cash','branch_id' => $branch_id))->row()->collection_amount;

                 ?>
                <br>
                <br>
                <br>
                <?php $bank = $this->db->get_where('bank_master')->result_array(); ?>
                <?php foreach ($bank as $key) {
                  $bank_amount = $bank_amount+$key['opening_amount'];
                  echo $key['opening_amount'] . '<br>';
                } ?>
                <br><br>
                <?php echo $fixed+$bank_amount+$cash-$recurring-$regular; ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="text-align: center;"><?php echo $fixed+$recurring+$regular; ?></td>
              <td></td>
              <td style="text-align: center;"><?php echo $fixed+$recurring+$regular; ?></td>
            </tr>

          </tbody>

        </table>

      </div>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
</div>
<center><button onclick="PrintElem(document.getElementById('print_data'));">Print</button></center>
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
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_balance_table/'; ?>" + first_date + "/" + last_date , true);
  xhttp.send();
}
</script>
<script type="text/javascript">
  function PrintElem(elem) {
  update_print_status();
    Popup($(elem).html());
}

function Popup(data) {
    var mywindow = window.open('', 'new div', 'height=400,width=600');
    mywindow.document.write('<html><head><title></title>');
    mywindow.document.write('<link rel="stylesheet" href="css/midday_receipt.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');
    mywindow.print();
    mywindow.close();
    return true;
}
</script>