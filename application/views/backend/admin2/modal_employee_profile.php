<?php
$employees   =   $this->db->get_where('employees' , array('category_id' => $param2 ))->result_array();
foreach($employees as $row):?>

<div class="profile-env">
    
   
    
    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table table-bordered">
                    <td><img src="<?php echo base_url() . '/uploads/employees_image/' . $row['category_id'] . '.jpg'; ?>" class="img-square" width="130" alt="..."/></td>
                    <tr>
                        <td><h3><?php echo get_phrase('General_Detail');?></h3></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Name');?></td>
                        <td><b><?php echo $row['name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Father_Name');?></td>
                        <td><b><?php echo $row['fathername'];?></b></td>
                    </tr>
                    
                    <tr>
                        <td><?php echo get_phrase('Mother_Name');?></td>
                        <td><b><?php echo $row['mothername'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Designation');?></td>
                        <td><b><?php echo $row['name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('DOB');?></td>
                        <td><b><?php echo $row['birthday'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $row['gender'];?></b></td>
                    </tr>
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
                        <td colspan="2"><h3><?php echo get_phrase('Bank_Detail_&_Salary_Detail');?></h3></td>
                    </tr>
                    
                     <tr>
                        <td><?php echo get_phrase('Salary_Amount');?></td>
                        <td><b><?php echo $row['employee_salary'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Account');?></td>
                        <td><b><?php echo $row['account_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Name');?></td>
                        <td><b><?php echo $row['bank_name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('IFSC_code');?></td>
                        <td><b><?php echo $row['ifsc_code'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Address');?></td>
                        <td><b><?php echo $row['bank_address'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('date');?></td>
                        <td><b><?php echo $row['date'];?></b></td>
                    </tr>
                    
                </table>
            </div>
        </div>      
    </section>
    
    
    
</div>


<?php endforeach;?>