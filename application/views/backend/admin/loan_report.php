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
                            <th>Sr NO</th>
                            <th>Loan Code</th>
                            <th>Name</th>
                            <th>Loan Date</th>
                            <th>Branch Name</th>
                            <th>Loan Amount</th>
                            <th>Terms</th>
                            <th>EMI</th>
                            <th>Payable Amt</th>
                            <th>paid Amt</th>
                            <th>Due Amt</th>
                            <th>Loan Type</th>
                            
                            <th>Member Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $loan_data = $this->db->get('loan_entry')->result_array();$count = 1; ?>
                        <?php foreach ($loan_data as $row): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['loan_code']; ?></td>
                            <td><?php echo $this->db->get_where('members', array('member_code' => $row['member_id']))->row()->member_name; ?></td>
                            <td><?php echo date('d-m-Y',$row['date']); ?></td>
                            <td><?php echo $this->db->get_where('branch', array('branch_id' => $row['branch_id']))->row()->name; ?></td>
                            <td><?php echo $row['loan_amount']; ?></td>
                            <td><?php 
                            echo $terms =  $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->max_term;
                            $roi =  $this->db->get_where('loan_master',array('loan_id'=>$row['product_id']))->row()->roi_max;
                             ?></td>

                            <td><?php echo $row['emi']; ?></td>
                            <td><?php echo $row['emi']*$terms; ?></td>
                            <td><?php 
                            $data=$this->db
                                    ->select_sum('collection_amount')
                                    ->from('daily_deposit')
                                    ->where('loan_id',$row['loan_code'])
                                    ->get();

                            echo $data->row()->collection_amount;

                             ?></td>
                             <td><?php echo ($row['emi']*$terms-$data->row()->collection_amount);?></td>
                            <td><?php echo $row['loan_purpose']; ?></td>
                            <td><?php echo $row['member_id']; ?></td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>