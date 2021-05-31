<hr />
<div class="row" >
  <div class="col-sm-8">
    <div class="col-sm-7" >
      <input type="text" id="account_no" class="form-control">
    </div>
    <div class="col-sm-5">
      <input type="button" class="btn btn-info" onclick="get_detail_account()" value="Take EMI">
    </div>
  </div>
</div>
<?php echo form_open(base_url() . 'index.php?accountent/take_emi/take/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
<div id="information" class="col-sm-5">
  


</div>
<?php echo form_close();?>







<script type="text/javascript">
    function get_detail_account() {
      var account_no = document.getElementById('account_no').value
        $.ajax({
            url: '<?php echo base_url();?>index.php?accountent/get_applicant_detail/' + account_no ,
            success: function(response)
            {
                jQuery('#information').html(response);
            }
        });
    }
</script>
