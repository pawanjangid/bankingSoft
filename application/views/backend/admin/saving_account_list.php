<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
        <div class="col-sm-12">
            <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>AC No</th>
                            <th>Name</th>
                            <th>Opening Date</th>
                            <th>Member Code</th>
                            <th>Deposit</th>
                            <th>Withdraw</th>
                            <th>Balance</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $saving_account = $this->db->get('saving_account')->result_array();$count = 1; ?>
                        <?php foreach ($saving_account as $row): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['ac_no']; ?></td>
                            <td><?php echo $this->db->get_where('members',array('member_code' => $row['member_code']))->row()->member_name; ?></td>
                            <td><?php echo date('d-m-Y',$row['opening_date']); ?></td>
                            <td><?php echo $row['member_code']; ?></td>
                            <?php  
                            $this->db->select_sum('collection_amount');
                            $deposit=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->collection_amount;
                            $this->db->select_sum('widthdraw_amount');
                            $withdraw=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->widthdraw_amount; ?>
                            <td><?php echo $deposit; ?></td>
                            <td><?php echo  $withdraw; ?></td>
                            <td><?php echo  $deposit-$withdraw; ?></td>
                            <td><?php echo  $this->db->get_where('branch', array('branch_id' => $this->db->get_where('members', array('member_code' => $row['member_code']))->row()->branch_id))->row()->name; ?></td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>