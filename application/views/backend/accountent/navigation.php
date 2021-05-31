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
            <a href="<?php echo base_url(); ?>index.php?accountent/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
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
                                <a href="<?php echo base_url(); ?>index.php?accountent/income_information/<?php echo $row['mode_id']; ?>">
                                    <span><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="<?php if ($page_name == 'income_info') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/income_info">
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
                 
                <li class="<?php if ($page_name == 'employee_List') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/employees">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Employee_List'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'employee_PF') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/income_info">
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
                    <a href="<?php echo base_url(); ?>index.php?accountent/hr_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('HR_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'accountent') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/accountent">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Accountent'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'credit_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/credit_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Credit_Manager'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'branch_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/branch_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Branch_Manager'); ?></span>
                    </a>
                </li>
                
                
                <li class="<?php if ($page_name == 'business_manager') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/business_manager">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Business_Manager'); ?></span>
                    </a>
                </li>
                


            </ul>
        </li>









        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'agent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?accountent/agent">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Agent'); ?></span>
            </a>
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
                    <a href="<?php echo base_url(); ?>index.php?accountent/income">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('income'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'income_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/income_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('income_category'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/expense">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense_category'); ?></span>
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
                <span><?php echo get_phrase('nidhi_account'); ?></span>
            </a>
            <ul>
                 <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/income">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('saving account'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'income_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/income_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('fixed deposit'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/expense">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('installment deposit'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('shareholders'); ?></span>
                    </a>
                </li>


                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?accountent/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('others'); ?></span>
                    </a>
                </li>+
            </ul>
        </li>






        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?accountent/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?accountent/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>


        <li >
            <a href="<?php echo base_url(); ?>index.php?accountent/contact_us">
                <i class="entypo-mobile"></i>
                <span> Contact Us</span>
            </a>
        </li>

    </ul>

</div>
<div style="clear: both;"></div>