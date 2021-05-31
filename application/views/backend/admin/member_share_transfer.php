<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/share_allotment/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
        <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Code');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code" value="" oninput="get_memberdata(this.value)" autofocus>
                        </div>
                        
        </div>

            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="member_name" id="member_name" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Joining_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining" id="date_of_joining" required="required" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_No');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" id="phone_no" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no" id="application_no" required="required" value="" autofocus>
                        </div>
                      
            </div>

            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Total_No_of_Share');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="no_of_share" id="no_of_share" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Total_Share_Amount');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="share_amount" id="share_amount" value="" autofocus>
                        </div>
            </div>

            
			</div>
            <div class="col-sm-6">
        <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Code');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="member_code2" value="" oninput="get_memberdata2(this.value)" autofocus>
                        </div>
                        
        </div>

            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Member_Name');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="member_name2" id="member_name2" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Joining_Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date_of_joining2" id="date_of_joining2" required="required" value="" autofocus>
                        </div>
                      
            </div>
            <div class="form-group">
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_No');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no2" id="phone_no2" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Application_No');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="application_no2" id="application_no2" required="required" value="" autofocus>
                        </div>
                      
            </div>

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Share_Amount');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="share_amount2" value="" oninput="putvalues(this.value);" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('No_of_Share');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="no_of_share2" id="no_of_share2" value="" autofocus>
                        </div>
            </div>
                        <center>
              <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </center>
            <?php echo form_close();?>
		</div>
</div>
</div>

<hr>
<div class="row" style="font-size: 14px;">
	<div class="col-sm-8" style="text-align: center;">
			<div class="col-sm-11">
		<table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Expence Category</th>
                            <th>Deposit Amount</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $paymentlist = $this->db->get_where('daily_deposit',array('payment_desc' => '2'))->result_array();$count =1; ?>
                        <?php foreach ($paymentlist as $row): ?>
                        <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo $this->db->get_where('ledger_master',array('ledger_id' => $row['ledger_id']))->row()->name; ?></td>
                            <td><?php echo $row['widthdraw_amount']; ?></td>
                            <td><?php echo date('d-m-Y',$row['renewal_date']); ?></td>
                            <td style="text-align: center;">
                                <div class="btn-group">
                                    <a href="<?php echo base_url();?>index.php?admin/loadpage/voucher_print/<?php echo $row['deposit_id'];?>" class="btn btn-default btn-sm" style="margin-right: 10px;">
                                        <i class="entypo-pencil"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
	</div>
	</div>

</div>
<script type="text/javascript">
function get_memberdata(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj.member_name;
            document.getElementById('member_name').value = obj.member_name;
            document.getElementById('application_no').value = obj.application_no;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('no_of_share').value = obj.no_of_share;
            document.getElementById('share_amount').value = obj.share_amount;
            document.getElementById('date_of_joining').value = timestamptodate(obj.date_of_joining);


    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_memberdata/'; ?>" + value, true);
  xhttp.send();
}
function get_memberdata2(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj.member_name;
            document.getElementById('member_name2').value = obj.member_name;
            document.getElementById('application_no2').value = obj.application_no;
            document.getElementById('phone_no2').value = obj.phone_no;
            document.getElementById('date_of_joining2').value = timestamptodate(obj.date_of_joining);


    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_memberdata/'; ?>" + value, true);
  xhttp.send();
}
function timestamptodate(timeStamp_value) {
var theDate = new Date(timeStamp_value * 1000);
dateString = theDate.toGMTString();
date = theDate.getDate()+'/'+(theDate.getMonth()+1)+'/'+theDate.getFullYear();
return date;
//alert(date);
}

function putvalues(amount) {
        var no_of_share = document.getElementById('no_of_share').value;
        var share_amount = document.getElementById('share_amount').value;
        var share_value = share_amount/no_of_share;
        document.getElementById('no_of_share2').value = amount/share_value;
    }
</script>