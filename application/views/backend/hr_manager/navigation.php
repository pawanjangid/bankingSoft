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
            <a href="<?php echo base_url(); ?>index.php?hr_manager/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>










<!-- User Information -->
        <li class="<?php if ($page_name == 'employee_category' ||
                                $page_name == 'employee_List' || $page_name == 'employee_salary' ||
                                    $page_name == 'employee_salary_track' ||
                                        $page_name == 'employee_PF')
                                                echo 'opened active has-sub';
        ?>">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('Employee'); ?></span>
            </a>
            <ul>
                 <li class="<?php if ($page_name == 'employee_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/employee_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_category'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'employee_List') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/employees">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_List'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'employee_PF') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/income_info">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('employee_PF'); ?></span>
                    </a>
                </li>

                


            </ul>
        </li>

        <li class="<?php if ($page_name == 'hr_manager' ||
                                $page_name == 'accountent' || 
                                    $page_name == 'Credit_Manager' ||
                                        $page_name == 'branch_manager' ||
                                            $page_name == 'business_manager')
                                                echo 'opened active has-sub';
        ?>">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('Authoriser_Employee'); ?></span>
            </a>
            <ul>
                 <li class="<?php if ($page_name == 'hr_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/hr_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('HR_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'accountent') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/accountent">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Accountent'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'credit_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/credit_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Credit_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'branch_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/branch_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Branch_Manager'); ?></span>
                    </a>
                </li>
                
                
                <li class="<?php if ($page_name == 'business_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/business_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Business_Manager'); ?></span>
                    </a>
                </li>
                


            </ul>
        </li>









        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'agent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?hr_manager/agent">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Agent'); ?></span>
            </a>
        </li>







        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?hr_manager/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- SETTINGS -->
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?hr_manager/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?hr_manager/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>


        <li >
            <a href="<?php echo base_url(); ?>index.php?hr_manager/contact_us">
                <i class="entypo-mobile"></i>
                <span> Contact Us</span>
            </a>
        </li>

    </ul>

</div>
<div style="clear: both;"></div>