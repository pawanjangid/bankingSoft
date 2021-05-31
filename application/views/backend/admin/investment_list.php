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
                            <th>Member Code</th>
                            <th>policy Number</th>
                            
                            <th>Name</th>
                            <th>Opening Date</th>
                            <th>Father/husbanb Name</th>
                            <th>Plan type</th>
                            <th>Amount</th>
                            <th>Maturity Amount</th>
                            <th>Maturity Date</th>
                            <th>Int. Code</th>
                            <th>Int. Name</th>
                            <th>Branch Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $investment = $this->db->get('investment')->result_array();$count = 1; ?>
                        <?php foreach ($investment as $row): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['member_code']; ?></td>
                            <td><?php echo $row['policy_no']; ?></td>
                            <td><?php echo $this->db->get_where('members',array('member_code' => $row['member_code']))->row()->member_name; ?></td>
                            <td><?php echo date('d-m-Y',$row['policy_date']); ?></td>
                            <td><?php echo $this->db->get_where('members',array('member_code' => $row['member_code']))->row()->father_name; ?></td>
                            <td><?php echo  $this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_type; ?></td>
                            <td><?php echo  $row['deposit_amount']; ?></td>
                            <td><?php echo  $row['maturity_amount']; ?></td>
                            <td><?php echo  date('d-m-Y',$row['maturity_date']); ?></td>
                            <td><?php echo  $row['associate_code']; ?></td>
                            <td><?php echo  $this->db->get_where('members', array('member_code' => $this->db->get_where('associate', array('associate_code' => $row['associate_code']))->row()->member_code))->row()->member_name; ?></td>
                            <td><?php echo  $this->db->get_where('branch', array('branch_id' => $row['branch_id']))->row()->name; ?></td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>