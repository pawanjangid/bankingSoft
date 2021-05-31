<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'index.php?admin/account_to_account/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="col-sm-6">
                 <div class="" style="text-align: center;">
        TRANSFER FROM SB ACCOUNT
    </div>
        <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('A/C_No');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ac_no" value="" oninput="get_saving_account(this.value)" autofocus>
                        </div>
                        
        </div>

            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="holder_name" id="holder_name" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Balance');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="balance" id="balance" value="" autofocus>
                        </div>

                      
            </div>
            <div class="form-group">
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Branch_name');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="branch_name" id="branch_name" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_no');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no" id="phone_no" required="required" value="" autofocus>
                        </div>
                      
            </div>
            
			</div>
<div class="col-sm-6">
    <div class="" style="text-align: center;">
        TRANSFER TO SB ACCOUNT
    </div>
        <div class="form-group">
                      
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('A/C_No');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ac_no2" value="" oninput="get_saving_account2(this.value)" autofocus>
                        </div>
                        
        </div>

            <div class="form-group">
                      
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Name');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="holder_name2" id="holder_name2" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Balance');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="balance2" id="balance2" value="" autofocus>
                        </div>
                        
            </div>
            <div class="form-group">
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Branch_name');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="branch_name2" id="branch_name2" required="required" value="" autofocus>
                        </div>
                         <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Phone_no');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="phone_no2" id="phone_no2" required="required" value="" autofocus>
                        </div>
                      
            </div>
                
            </div>
<div class="col-sm-6">
                    <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Date');?></label>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="date" id="date" required="required" value="" autofocus>
                        </div>
                        <label for="field-1" class="col-sm-3 control-label" style="font-size: 14px;color: green;"><?php echo get_phrase('Amonut');?></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="amount" id="amount" value="" autofocus>
                        </div>
                </div>
 <center>
              <button type="submit" class="btn btn-info" style="width: 100px;font-size: 14px;font-weight: 600;"><?php echo get_phrase('ADD');?></button>
            </center>
            
            
            <?php echo form_close();?>
		
</div>
</div>

<hr>
<script type="text/javascript">
function get_saving_account(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj;
            document.getElementById('holder_name').value = obj.member_name;
            document.getElementById('phone_no').value = obj.phone_no;
            document.getElementById('branch_name').value = obj.name;


    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_saving_account/'; ?>" + value, true);
  xhttp.send();
}

function get_saving_account2(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
            //document.getElementById('demo').innerHTML = obj;
            document.getElementById('holder_name2').value = obj.member_name;
            document.getElementById('phone_no2').value = obj.phone_no;
            document.getElementById('branch_name2').value = obj.name;


    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_saving_account/'; ?>" + value, true);
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