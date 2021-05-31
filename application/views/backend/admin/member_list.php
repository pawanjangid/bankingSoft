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
                            <th>Name</th>
                            <th>Joining Date</th>
                            <th>Father/husbanb Name</th>
                            <th>Member type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $member_list = $this->db->get('members')->result_array();$count = 1; ?>
                        <?php foreach ($member_list as $row): ?>
                        <tr>
                            <th><?php echo $count; ?></th>
                            <th><?php echo $row['member_code']; ?></th>
                            <th><?php echo $row['member_name']; ?></th>
                            <th><?php echo date('d-m-Y',$row['date_of_joining']); ?></th>
                            <th><?php echo $row['father_name']; ?></th>
                            <th><?php echo $row['member_type']; ?></th>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
</div>
<script type="text/javascript">

</script>