<?php
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$account_type       =	$this->session->userdata('login_type');
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">
<head>
	<style type="text/css">
		.background {
			background-color: #fff;
			background-repeat: no-repeat;
  			background-size: auto;
  			height: 100%;
  			color: black;
		}</style>
	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php include 'includes_top.php';?>
	
</head>
<body class="background">
	<div>
			
		<div class="main-content">
			<?php include $account_type.'/navigation.php';?>
			<?php include 'header.php';?>
			<?php include $account_type.'/'.$page_name.'.php';?>
<div style="clear: both;"></div>
			<?php include 'footer.php';?>

		</div>
		<?php //include 'chat.php';?>
        	
	</div>
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>
    
</body>
</html>