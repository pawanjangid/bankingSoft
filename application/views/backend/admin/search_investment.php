<div class="row">
            <div class="form-group col-sm-6">
                        <label for="field-2" class="col-sm-4 control-label" style="text-align: center;font-size: 14px;color: green;"><?php echo get_phrase('Search_By');?></label>
                        
                        <div class="col-sm-6">
                            <select name="plan_type" id="search_by" class="form-control" required="required" onchange="inputenable(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="Date"><?php echo get_phrase('Date');?></option>
                              <option value="Associate"><?php echo get_phrase('Associate');?></option>
                              <option value="Branch"><?php echo get_phrase('Branch');?></option>
                          </select>
                        </div> 
            </div>
    <div class="col-sm-10" id="date_wise" style="display: none;">
        <div class="col-sm-4">
            <label for="field-2" class="col-sm-4 control-label" style="text-align: center;font-size: 14px;color: green;"><?php echo get_phrase('First_Date');?></label>
            <div class="col-sm-4">
                <input type="text" name="first_date" id="first_date" class="form-control datepicker" required="required">
            </div>
            <div class="col-sm-4">
                <input type="text" name="first_date" id="last_date" class="form-control datepicker" required="required">
            </div>
            
        </div>
        <div class="col-sm-4">
            <div class="col-sm-6">
                <button class="btn btn-primary" onclick="get_content_date()" value="Get Data">Get Data</button>
            </div>
        </div>
        
    </div>
    <div class="col-sm-10" id="branch_wise" style="display: none;">
        <div class="col-sm-4">
            <label for="field-2" class="col-sm-4 control-label" style="text-align: center;font-size: 14px;color: green;"><?php echo get_phrase('Select_Branch');?></label>
            <div class="col-sm-8">
                        <select name="branch_id" id="branch_id" class="form-control" required="required">
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
        <div class="col-sm-4">
            <div class="col-sm-6">
                <button class="btn btn-primary" onclick="get_content_branch()" value="Get Data">Get Data</button>
            </div>
            
        </div> 
    </div>
        <div class="col-sm-10" id="agent_wise" style="display: none;">
      
            <label for="field-2" class="col-sm-2 control-label" style="text-align: center;font-size: 14px;color: green;"><?php echo get_phrase('Associate_Code');?></label>
            <div class="col-sm-4">
                <input type="text" name="associate_code" id="associate_code" class="form-control" required="required">
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary" onclick="get_content_associate()" value="Get Data">Get Data</button>
            </div>
        </div> 
    </div>

</div>
<div class="row">
    <div class="col-sm-10 offset-sm-1">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center;font-size: 14px;">
                    <td>SL No</td>
                    <td>Policy No</td>
                    <td>Application Name</td>
                    <td>DOC</td>
                    <td>Plan</td>
                    <td>Amount</td>
                    <td>Maturity Amount</td>
                    <td>M. Date</td>
                    <td>Ass. Code</td>
                    <td>Ass. Name</td>
                    <td>Branch Name</td>
                    <td>Member Number</td>
                </tr>
            </thead>
            <tbody id="content_table" style="text-align: center;font-size: 14px;">
                
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    function get_content_date() {
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
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_content_investment/date/'; ?>" + first_date + "/" + last_date , true);
  xhttp.send();
}

function get_content_associate() {
        document.getElementById('content_table').innerHTML = '';
        var associate_code = document.getElementById('associate_code').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('content_table').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_content_investment/associate/'; ?>" + associate_code , true);
  xhttp.send();
}

function get_content_branch() {
        document.getElementById('content_table').innerHTML = '';
        var branch_id = document.getElementById('branch_id').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('content_table').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url() .'index.php?admin/get_content_investment/branch/'; ?>" + branch_id, true);
  xhttp.send();
}

function inputenable(selected) {
    if (selected == 'Date') {
        document.getElementById('date_wise').style.display = 'block';
        document.getElementById('branch_wise').style.display = 'none';
        document.getElementById('agent_wise').style.display = 'none';
    }
    if (selected == 'Branch') {
        document.getElementById('branch_wise').style.display = 'block';
        document.getElementById('date_wise').style.display = 'none';
        document.getElementById('agent_wise').style.display = 'none';
    }
    if (selected == 'Associate') {
        document.getElementById('branch_wise').style.display = 'none';
        document.getElementById('date_wise').style.display = 'none';
        document.getElementById('agent_wise').style.display = 'block';
    }
}


</script>