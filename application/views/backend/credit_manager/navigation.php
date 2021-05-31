<div class="sidebar-menu">
    <header class="logo-env" >

        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">

        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?credit_manager/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>


        <li class="<?php if ($page_name == 'final_approvel') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?credit_manager/final_approvel">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Finals_approvel'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?credit_manager/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>


        <li >
            <a href="<?php echo base_url(); ?>index.php?credit_manager/contact_us">
                <i class="entypo-mobile"></i>
                <span> Contact Us</span>
            </a>
        </li>

    </ul>

</div>
<div style="clear: both;"></div>