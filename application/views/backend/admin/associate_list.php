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
                            <th>Associate Code</th>
                            <th>Name</th>
                            <th>Joining Date</th>
                            <th>Father/husbanb Name</th>
                            <th>Rank</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $member_list = $this->db->get('associate')->result_array();$count = 1; ?>
                        <?php foreach ($member_list as $row): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['associate_code']; ?></td>
                            <td><?php echo $this->db->get_where('members', array('member_code' => $row['member_code']))->row()->member_name; ?></td>
                            <td><?php echo $row['date_of_joining']; ?></td>
                            <td><?php echo $this->db->get_where('members', array('member_code' => $row['member_code']))->row()->father_name; ?></td>
                            <td><?php echo $this->db->get_where('rank', array('rank_id' => $row['rank_id']))->row()->rank; ?></td>
                            <td><?php echo $this->db->get_where('rank', array('rank_id' => $row['rank_id']))->row()->Designation; ?></td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>