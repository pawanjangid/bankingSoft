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
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- User Information -->
        <li class="<?php if ($page_name == 'User_add' ||
                                $page_name == 'User_information')
                                                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('Applicant'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'user_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/User_add">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_Applicant'); ?></span>
                    </a>
                </li>

                

                <li class="<?php if ($page_name == 'User_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Applicant_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'User_information') echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/applicant_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo get_phrase('category'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>
<!-- User Information -->
        <li class="<?php if ($page_name == 'income_detail')
                                                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('Income'); ?></span>
            </a>
            <ul>
                 <li class="<?php if ($page_name == 'user_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/add_income_mode">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Add_Income_Mode'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'income_deatil') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Income_Detail'); ?></span>
                    </a>

                    <ul>
                        <?php
                        $income_detail = $this->db->get('income_mode')->result_array();
                        foreach ($income_detail as $row):
                            ?>
                            <li class="<?php if ($page_name == 'User_information') echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/income_information/<?php echo $row['mode_id']; ?>">
                                    <span><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="<?php if ($page_name == 'income_info') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income_info">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Income_Statement'); ?></span>
                    </a>
                </li>
            </ul>
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
                    <a href="<?php echo base_url(); ?>index.php?admin/employee_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_category'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'employee_List') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/employees">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_List'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'employee_salary') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/employee_salary">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_salary'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'employee_PF') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income_info">
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
                    <a href="<?php echo base_url(); ?>index.php?admin/hr_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('HR_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'accountent') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/accountent">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Accountent'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'credit_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/credit_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Credit_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'branch_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/branch_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Branch_Manager'); ?></span>
                    </a>
                </li>
                
                
                <li class="<?php if ($page_name == 'business_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/business_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Business_Manager'); ?></span>
                    </a>
                </li>
                


            </ul>
        </li>









        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'agent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/agent">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Agent'); ?></span>
            </a>
        </li>

      <li class="<?php if ($page_name == 'first_approvel') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/first_approvel">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('first_approvel'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'second_approvel') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/second_approvel">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Second_approvel'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'final_approvel') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/final_approvel">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Finals_approvel'); ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'approved') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/approved">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Approved'); ?></span>
            </a>
        </li>
        <!-- History and deleted files -->
        
        <li class="<?php if ($page_name == 'history') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/history">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('History'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'deleted') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/deleted">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('deleted'); ?></span>
            </a>
        </li>
        <!-- Category -->
        <li class="<?php
        if ($page_name == 'category' ||
                $page_name == 'sub_category')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('category'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/classes">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_category'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_sub_category'); ?></span>
                    </a>
                </li>
                
            </ul>
        </li>
        
         <li class="<?php
        if ($page_name == 'expense' ||
                    $page_name == 'expense_category')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo get_phrase('accounting'); ?></span>
            </a>
            <ul>
                 <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('income'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'income_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('income_category'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense_category'); ?></span>
                    </a>
                </li>
            </ul>
        </li>



        <li class="<?php
        if ($page_name == 'open_account' ||
                    $page_name == 'saving_account' ||
            			$page_name == 'fixed_deposit')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo get_phrase('nidhi_account'); ?></span>
            </a>
            <ul>
            	<li class="<?php if ($page_name == 'daily_account') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/daily_account_open">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Open_Daily_Account'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'daily_account_detail') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/daily_account_detail">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Daily_Accounts'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'membership_account_open') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/membership_account_open">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Membership'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'members') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/members">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Members'); ?></span>
                    </a>
                </li>
            	<li class="<?php if ($page_name == 'open_account') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/nidhi_account">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Nidhi_Account'); ?></span>
                    </a>
                </li>
                 <li class="<?php if ($page_name == 'saving_account') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/saving_account">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('saving account'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'fixed_deposit') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/fixed_deposit">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('fixed deposit'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'installment_deposit') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/installment_deposit">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('installment deposit'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/shareholders">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('shareholders'); ?></span>
                    </a>
                </li>

                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/member">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('members'); ?></span>
                    </a>
                </li>


                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('others'); ?></span>
                    </a>
                </li>+
            </ul>
        </li>


        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
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
                    <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>


        <li >
            <a href="<?php echo base_url(); ?>index.php?admin/contact_us">
                <i class="entypo-mobile"></i>
                <span> Contact Us</span>
            </a>
        </li>

    </ul>

</div>
<div style="clear: both;"></div>