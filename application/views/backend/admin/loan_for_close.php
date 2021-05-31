<hr />
<div class="row">
    <div class="col-sm-12" style="text-align: center;text-transform: uppercase;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<style type="text/css">
    label,input,textarea,select{
        font-size: 14px;
    }
</style>
<div class="row" style="font-size: 14px;">


        <div class="col-sm-12">
            <?php echo form_open(base_url() . 'index.php?admin/loan_deposit/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            
            <div class="col-sm-6">
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Id');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="loan_id" id="loan_code" oninput="get_loandata(this.value);"  value=""  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Form_No');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="form_no" id="form_no" value="" disabled="disabled" autofocus>
                        </div>      
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_ID');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control" name="member_code" id="member_code"  value=""  autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-3">
                           <input type="text" class="form-control datepicker" disabled="disabled" name="date" value="" autofocus>
                        </div>      
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Applicant_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="applicant_name" id="member_name" disabled="disabled" value="" autofocus>
                        </div>
                         
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" style="font-size: 16px;" ><?php echo get_phrase('Branch_Name/Code :');?></label>
                        
                       <div class="col-sm-9 input-field">
                            <select name="branch_id" id="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" disabled="disabled">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;" disabled="disabled"><?php echo get_phrase('Gurdian_Name');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" id="father_name" disabled="disabled" value="" autofocus>
                        </div>
                         
            </div>


            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Holder\'DOB');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="holder_dob" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Load Holder\'s Age');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="age" id="age" disabled="disabled" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                       
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Address');?></label>
                        
                        <div class="col-sm-9">
                            <textarea class="col-sm-12" name="address" id="address" disabled="disabled" style="height: 70px;font-size: 14px;"></textarea>
                        </div>           
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Education');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="education" disabled="disabled" id="education" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('PIN_Code');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="pin_code" id="pin_code" disabled="disabled" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" id="phone_no" disabled="disabled" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Gender');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="gender" id="gender" disabled="disabled" value="" autofocus>
                        </div>           
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Product_Name');?></label>
                
               <div class="col-sm-3">
                <select name="product_id" id="product_id" class="form-control" disabled="disabled" onchange="get_loandetail(this.value);">
                    <option value=""><?php echo get_phrase('select');?></option>
                    <?php $loan_type = $this->db->get('loan_master')->result_array(); ?>
                    <?php foreach ($loan_type as $row): ?>
                        <option value="<?php echo $row['loan_id'] ?>"><?php echo $row['loan_name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Term');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_term" disabled="disabled" id="max_term" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Type');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="loan_type" id="loan_type" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Mode');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="loan_mode" disabled="disabled" id="loan_mode" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Amount');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="loan_amount" disabled="disabled" id="loan_amount" value="" oninput="emicalculate(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('ROI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" name="roi" id="roi_max" class="form-control" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-1 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('EMI');?></label>
                        
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="emi" id="emi" disabled="disabled" value="" autofocus>
                        </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Interest_Type');?></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="interest_type" disabled="disabled" id="interest_mode" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_By:');?></label>
                        
                        <div class="col-sm-3 input-field">
                            <select name="payment_method" id="payment_type" class="form-control" disabled="disabled" onchange="enableaccount(this.value);">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="Cash">Cash</option>
                              <option value="Cheque">Cheque</option>
                              <option value="Saving_Account">Saving_Account</option>
                          </select>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_No:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_no" id="cheque_no" disabled="disabled" value="" autofocus>
                        </div>
            </div>
            
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Bank_Name:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="bank_name" id="bank_name" disabled="disabled" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('From_A/C:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="account_no" id="account_no" disabled="disabled" value="" autofocus>
                        </div>
            </div>

            <div class="form-group">
           
                <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Loan_Purpose');?></label>
                
                <div class="col-sm-9">
                    <textarea class="col-sm-12" name="loan_purpose"id="loan_purpose" disabled="disabled" style="height: 70px;font-size: 14px;"></textarea>
                </div>           
            </div>
        </div>
            <div class="col-sm-6">
                <div style="text-align: center;">Membership Fees And Other Deductions</div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Total_Payable_Rs:');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="total_payable_rs" id="total_payable_rs" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Total_paid :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="total_paid" id="total_paid" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Due_Amount :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="due_amount" id="due_amount" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Advance_Amount :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="adv_ammount" id="adv_ammount" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('payment_no :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="installment_no" id="paid_installment" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Amount :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="collection_amount" id="pay_amount" oninput="total_payment(this.value)" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Total_amount :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="total_amount" id="total_amount" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date :');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="date" id="date" value="" autofocus>
                        </div>
                         
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Deposit_Branch :');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <?php $branch = $this->db->get('branch')->result_array(); ?>
                              <?php foreach ($branch as $row) : ?>
                              <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['code'] . ' - ' . $row['name'];?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Penalty_Deduct :');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="branch_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_By :');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="payment_type" class="form-control" onchange="get_savingaccount();">
                              <option value="" selected="selected" disabled="disabled"><?php echo get_phrase('select');?></option>
                              <option value="Cash">Cash</option>
                              <option value="Cheque">Cheque</option>
                              <option value="Saving_Account">Saving_Account</option>
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Cheque_date:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="cheque_date" id="cheque_date" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Receive_A/C:');?></label>
                        
                       <div class="col-sm-3 input-field">
                            <select name="account_no1" id="account_no1" class="form-control" >
                             
                          </select>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Panelty_Charge:');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="panelty_charge" id="panelty_charge" value="" autofocus>
                        </div>
            </div>
            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Payment_Remark :');?></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="payment_remark" id="payment_remark" value="" autofocus>
                        </div>
                         
            </div>


            
            <center>
                <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('PAID');?></button>
            </center>

             <?php echo form_close();?>
           <div class="col-sm-12">
                <div class="col-sm-10">
                    <table>
                        <thead>
                            <tr>
                                <td>EMI No.</td>
                                <td>Due Date</td>
                                <td>Pay Date</td>
                                <td>Amount</td>
                                <td>Latefine</td>
                            </tr>
                        </thead>
                        <tbody id="table">
                            
                        </tbody>
                    </table>
                </div>
               
            </div>
            </div>
        </div>
</div>
<div id="demo"></div>
<script>
function emicalculate(value) {
        var roi = document.getElementById('roi_max').value;
        var term = document.getElementById('max_term').value;
        var monthlyInterestRatio = (parseInt(roi) / 100) / 12;
        var top = Math.pow((1 + monthlyInterestRatio), term);
        var bottom = top - 1;
        var sp = top / bottom;
        var emi = ((value * monthlyInterestRatio) * sp);

        document.getElementById('emi').value = Math.round(emi);
}



function get_loandata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = this.responseText;
            document.getElementById('form_no').value = obj.form_no;
            document.getElementById('member_code').value = obj.member_code;
            document.getElementById('member_name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('age').value = obj.age;
            document.getElementById('branch_id').value = obj.branch_id;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('education').value = obj.education;
            document.getElementById('gender').value = obj.gender;
            document.getElementById('product_id').value = obj.product_id;
            document.getElementById('loan_mode').value = obj.loan_mode;
            document.getElementById('roi_max').value = obj.roi_max;
            document.getElementById('loan_amount').value = obj.loan_amount;
            document.getElementById('max_term').value = obj.max_term;
            document.getElementById('loan_purpose').value = obj.loan_purpose;
            document.getElementById('interest_mode').value = obj.interest_mode;
            document.getElementById('bank_name').value = obj.bank_name;
            document.getElementById('account_no').value = obj.account_no;
            document.getElementById('cheque_no').value = obj.cheque_no;
            document.getElementById('payment_type').value = obj.payment_type;
            emicalculate(obj.loan_amount);
            var emi = document.getElementById('emi').value;
            document.getElementById('total_payable_rs').value = emi*obj.max_term;
            get_loanamount(value);

}
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_loandata/'; ?>" + value, true);
  xhttp.send();
}

function get_loanamount(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = this.responseText;
             document.getElementById('total_paid').value = obj.paid_amount;
             document.getElementById('paid_installment').value = obj.paid_installment;
             var total = document.getElementById('total_payable_rs').value;
             var due_amount = total-obj.paid_amount;
             if (due_amount <= 0) {
                alert('Account Has Been Closed');
             }
             document.getElementById('due_amount').value = due_amount;
             document.getElementById('adv_ammount').value = '0';
             document.getElementById('paid_installment').value = obj.count;
             document.getElementById('table').innerHTML = obj.paid_table;
            
             


    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_loanamount/'; ?>" + value, true);
  xhttp.send();
}


function total_payment(value) {
    var adv= document.getElementById('adv_ammount').value;
    document.getElementById('total_amount').value = parseInt(value)+parseInt(adv);

}

function get_loandetail(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = this.responseText;
             document.getElementById('loan_mode').value = obj.loan_mode;
             document.getElementById('loan_term').value = obj.max_term;
             document.getElementById('roi').value = obj.roi_max;
             document.getElementById('loan_type').value = obj.loan_type;
             document.getElementById('interest_type').value = obj.interest_mode;

    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_loandetail/'; ?>" + value, true);
  xhttp.send();
}

function get_savingaccount() {
var member_code = document.getElementById('member_code').value;
alert(member_code);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
            document.getElementById('account_no1').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_accountdeatil/'; ?>" + member_code, true);
  xhttp.send();
}
</script>

<script type="text/javascript">

    function putvalues(code) {
        var members = <?php echo json_encode($members); ?>;
        for (var i = members.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(members[i]);
           var obj = JSON.parse(txt);
           if (obj.member_code == code) {
            document.getElementById('name').value = obj.member_name;
            document.getElementById('father_name').value = obj.father_name;
            document.getElementById('address').value = obj.address;
            document.getElementById('pin_code').value = obj.pin_code;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('nominee_name').value = obj.nominee_name;
            document.getElementById('nominee_relation').value = obj.relation;
            document.getElementById('member_code').value = obj.member_code;
           }
        }
    }
    function put2values(code) {
        var plans = <?php echo json_encode($plans); ?>;
        for (var i = plans.length - 1; i >= 0; i--) {
           var txt = JSON.stringify(plans[i]);
           var obj = JSON.parse(txt);
           if (obj.product_id == code) {
            document.getElementById('term').value = 12*obj.plan_duration;
            document.getElementById('interest').value = obj.interest_rate;
            document.getElementById('mode').value = obj.plan_mode;
            document.getElementById('plan_type').value = obj.plan_type;
           }
        }
    }
function calculate(amount) {

    var type = document.getElementById('plan_type').value;

    var duration  = document.getElementById('term').value;

    var amount1 = parseInt(amount);
    var amount =amount1;
    var interest_rate = document.getElementById('interest').value;

    var test_amount = 0;
    if (type == 'FD') {
        document.getElementById('deposit_amount').value = amount;
        var duration_mounth = duration;
        for (var i = 1; i <= duration_mounth; i++) {
            interest = (interest_rate*amount)/1200;
            test_amount = test_amount+interest;
            reminder = i%4;
            if (reminder==0) {
                amount = amount+test_amount;
            }
        }
        var maturity_amount = amount1 + test_amount;

        document.getElementById('maturity_amount').value = maturity_amount;
    }
    if (type == 'RD') {
       
            var amount1 = amount;
                var duration_mounth = duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = (interest_rate*amount1)/1200;
                    test_amount = test_amount+interest;
                    amount1 = parseInt(amount1)+parseInt(amount);
                }
                var maturity_amount = duration_mounth*amount + test_amount;
                document.getElementById('deposit_amount').value = amount*duration;
                document.getElementById('maturity_amount').value = maturity_amount;
        
    }
    if (type == 'MIS') {

    }
    if (type == 'DRD') {
                var amount1 = 30*amount;
                var amount2 = amount1;
                var duration  = document.getElementById('term').value;
                document.getElementById('deposit_amount').value = duration*amount1;
                var duration_mounth = duration;
                for (var i = 1; i <= duration_mounth; i++) {
                    interest = amount1*interest_rate/2000;
                    test_amount=test_amount+interest;
                    amount1 = amount1+amount2+interest;
                }
                var maturity_amount = parseInt((30*duration*amount)+test_amount);
                document.getElementById('maturity_amount').value = maturity_amount;
    }
}

    function enableaccount(value) {
    if (value == 'Cheque') {
        
        document.getElementById('cheque_date').disabled = false;
        document.getElementById('account_no1').disabled = true;
        document.getElementById('select_amount').disabled = true;
        document.getElementById('account_no').disabled = true;
    }
    else if (value == 'Cash') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
         document.getElementById('account_balance').disabled = true;
        document.getElementById('select_amount').disabled = true;
        document.getElementById('account_no').disabled = true;
    }

    else if (value == 'Saving') {
        document.getElementById('cheque_no').disabled = true;
        document.getElementById('cheque_date').disabled = true;
        document.getElementById('bank_id').disabled = true;
         document.getElementById('account_balance').disabled = false;
        document.getElementById('select_amount').disabled = false;
        document.getElementById('account_no').disabled = false;
    }

}


</script>
