<?php
$application_info   =   $this->db->get_where('user' , array('application_id' => $param2 ))->result_array();
foreach($application_info as $row):?>

<div class="profile-env">
    
    <header class="row">
       
        
        <div class="col-sm-9">
            
            <ul class="profile-info-sections">
                <li style="padding:0px; margin:0px;">
                    <div class="profile-name">
                            <h3>
                                <?php echo $row['name'];?>                     
                            </h3>
                    </div>
                </li>
            </ul>
            
        </div>
        
        
    </header>
    
    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table table-bordered">
                
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                        <td><?php echo get_phrase('Category');?></td>
                        <td><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
                    <?php endif;?>
                    <tr>
                        <td><?php echo get_phrase('Aadhar Number');?></td>
                        <td><b><?php echo $row['aadhar'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('PAN_Number');?></td>
                        <td><b><?php echo $row['pan_number'];?></b></td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Mobile_number');?></td>
                        <td><b><?php echo $row['phone'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $row['gender'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Address');?></td>
                        <td><b><?php echo $row['address'];?></b></td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Requested_amount');?></td>
                        <td><b><?php echo $row['amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('date');?></td>
                        <td><b><?php echo $row['date'];?></b></td>
                    </tr>
                    <tr>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Agent</td>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Detail</td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Agent');?></td>
                        <td><b><?php echo $this->db->get_where('employee', array('employee_id' => $row['agent_id']))->row()->name;?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Code');?></td>
                        <td><b><?php echo $this->db->get_where('employee', array('employee_id' => $row['agent_id']))->row()->code;?></b></td>
                    </tr>
                </table>
            </div>
        </div>      
    </section>
    
    
    
</div>


<?php endforeach;?>