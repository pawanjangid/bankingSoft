<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?agent/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'client_add') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?agent/user_add">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('New_Application'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'my_application') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?agent/applications">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('My_Application'); ?></span>
            </a>
        </li>


        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?agent/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>


        <li >
            <a href="<?php echo base_url(); ?>index.php?agent/contact_us">
                <i class="entypo-mobile"></i>
                <span> Contact Us</span>
            </a>
        </li>

    </ul>

</div>
<div style="clear: both;"></div>