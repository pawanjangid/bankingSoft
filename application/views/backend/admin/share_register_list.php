<hr />
<div class="row">
	<div class="col-sm-12" style="text-align: center;"><h2><?php echo get_phrase($page_name); ?></h2></div>
</div>
<hr>
<div class="row" style="font-size: 14px;">
        <div class="col-sm-10 offset-sm-1">
            <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Branch Name</th>
                            <th>Date</th>
                            <th>Member No</th>
                            <th>Member Name</th>
                            <th>Share Amount</th>
                            <th>No Share</th>
                            <th>Dno From and To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $share_list = $this->db->get('share_allotment')->result_array();$count = 1;$total_share=0;$total_amount=0;$do_from = 1;$do_to=0; ?>
                        <?php foreach ($share_list as $row): ?>
                        <tr>
                            <th><?php echo $this->db->get_where('branch', array('branch_id' => $row['branch_id']))->row()->name; ; ?></th>
                            <th><?php echo date('d-m-Y',$row['date_of_joining']); ?></th>
                            <th><?php echo $row['member_code']; ?></th>
                            <th><?php echo  $this->db->get_where('members', array('member_code' => $row['member_code']))->row()->member_name; ?></th>
                            <th><?php echo $row['share_amount'];$total_amount=$total_amount+$row['share_amount']; ?></th>
                            <th><?php echo $row['no_of_share'];$total_share=$total_share+$row['no_of_share'];$do_to =$do_to+$row['no_of_share']; ?></th>
                            <th><?php echo $do_from . ' To ' .$do_to;$do_from=$do_from+$row['no_of_share']; ?></th>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <tr style="size: 20px;font-weight: 600;">
                            <td colspan="4" style="size: 20px;font-weight: 600;">Total</td>
                            <td style="size: 20px;font-weight: 600;"><?php echo $total_amount; ?></td>
                            <td style="size: 20px;font-weight: 600;"><?php echo $total_share; ?></td>
                            <td></td>
                        </tr>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>