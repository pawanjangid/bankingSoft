<?php
$application_info   =   $this->db->get_where('user' , array('application_id' => $param2 ))->result_array();
foreach($application_info as $row):?>

<div class="profile-env">
    
    <header class="row">
       
        <div class="col-sm-3">
            
            <a href="#" class="profile-picture">
                <img src="<?php echo base_url() . '/uploads/applicant_image/photo_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/>
            </a>
            
        </div>
        <div class="col-sm-9">
            
            <ul class="profile-info-sections">
                <li style="padding:0px; margin:0px;">
                    <div class="profile-name">
                            <h1 style="color: red;">
                                <?php echo $row['name'];?>                     
                            </h1>
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
                    <tr>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Application</td>
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Detail</td>
                    </tr>
                    <?php $application_detail = $this->db->get_where('loan_detail', array('application_id' => $param2))->result_array() ?>
                    <?php foreach ($application_detail as $row2) :?> 
                    <tr>
                        <td><?php echo get_phrase('Account_number');?></td>
                        <td><b><?php echo $row2['account_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('IFSC_Code');?></td>
                        <td><b><?php echo $row2['ifsc_code'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Name');?></td>
                        <td><b><?php echo $row2['bank_name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Address');?></td>
                        <td><b><?php echo $row2['bank_address'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bill_K_Number');?></td>
                        <td><b><?php echo $row2['bill_k_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Discussion');?></td>
                        <td><b><?php echo $row2['discussion'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('FI_Report');?></td>
                        <td><b><?php echo $row2['FI_report'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Cibil_Score');?></td>
                        <td><b><?php echo $row2['cibil_score'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Previous_Loan');?></td>
                        <td><b><?php echo $row2['previous_loan'];?></b></td>
                    </tr>
                    <?php if($row2['previous_loan'] == 'yes'): ?>
                    <tr>
                        <td><?php echo get_phrase('Previous_Loan_Amount');?></td>
                        <td><b><?php echo $row2['previous_loan_amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Loan_Date');?></td>
                        <td><b><?php echo $row2['loan_date'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('EMI_Amount');?></td>
                        <td><b><?php echo $row2['emi_amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('EMI_Type');?></td>
                        <td><b><?php echo $row2['emi_type'];?></b></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
                </table>
            </div>
        </div>      
    </section>
  
</div>


<?php endforeach;?>