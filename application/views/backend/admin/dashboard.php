<?php $members=$this->db->from("members")->count_all_results();
 $investment=$this->db->from("investment")->count_all_results();
  $saving_account=$this->db->from("saving_account")->count_all_results();
   $associate=$this->db->from("associate")->count_all_results();

 ?><center>
<h1 style="font-size: 30px;padding: 50px;">Welcome To <?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?></h1>
	
</center>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6" style="height: 400px;width: 100%;">
			<canvas id="myChart"></canvas>

		</div>
		<div class="col-sm-6" style="height: 400px;width: 100%;">
			<canvas id="myChart2"></canvas>

		</div>
	</div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Members', 'Investments', 'Saving Accounts', 'Associate'],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $members; ?>, <?php echo $investment; ?>,<?php echo $saving_account; ?>, <?php echo $associate; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            
            xAxes: [{
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            gridLines: {
                offsetGridLines: true
            }
        }]

        }
    }
});
</script>
<script>
	<?php    $this->db->select_sum('collection_amount');
 $daily_renewal = $this->db->get_where('daily_deposit', array('payment_desc' => '1'))->row()->collection_amount;

$this->db->select_sum('collection_amount');
 $saving_account_1 = $this->db->get_where('daily_deposit', array('payment_desc' => '3'))->row()->collection_amount;

 $this->db->select_sum('widthdraw_amount');
 $widthdraw_amount = $this->db->get_where('daily_deposit', array('payment_desc' => '3'))->row()->widthdraw_amount;
 $saving_account= $saving_account_1-$widthdraw_amount;
  ?>
var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['Daily Renewal', 'Saving Account'],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $daily_renewal; ?>, <?php echo $saving_account; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            
            xAxes: [{
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            gridLines: {
                offsetGridLines: true
            }
        }]

        }
    }
});
</script>