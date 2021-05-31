<?php
$application_info=$this->db->get_where('user',array('application_id' => $param2))->result_array();
foreach($application_info as $row):?>

<div class="profile-env" id="printarea">
    
    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table table-bordered" style="width: 100%;">
                
                    <?php if($row['class_id'] != ''):?>
                    <tr style="width: 100%;">
                        <td style="width: 30%;"><?php echo get_phrase('Name');?></td>
                        <td style="width: 30%;"><b><?php echo $row['name'];?></b></td>
                        <td rowspan="4" style="width: 30%;"><img style="height: 150px;width: 130px;" src="<?php echo base_url() . '/uploads/applicant_image/photo_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>
                    </tr>  
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Category');?></td>
                        <td colspan="2"><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
                    <?php endif;?>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Aadhar Number');?></td>
                        <td colspan="2"><b><?php echo $row['aadhar'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('PAN_Number');?></td>
                        <td colspan="2"><b><?php echo $row['pan_number'];?></b></td>
                    </tr style="width: 100%;">
                     <tr>
                        <td><?php echo get_phrase('Mobile_number');?></td>
                        <td ><b><?php echo $row['phone'];?></b></td>
                        <td rowspan="2"> <img style="height: 100px;width: 130px;" src="<?php echo base_url() . '/uploads/documents/signature_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $row['gender'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Address');?></td>
                        <td colspan="2"><b><?php echo $row['address'];?></b></td>
                    </tr>
                     <tr style="width: 100%;">
                        <td><?php echo get_phrase('Requested_amount');?></td>
                        <td colspan="2"><b><?php echo $row['amount'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('date');?></td>
                        <td colspan="2"><b><?php echo $row['date'];?></b></td>
                    </tr style="width: 100%;">
                    <tr style="width: 100%;">
                        <td colspan="3" style="color: #ff5656;text-align: center;font-size: 18px;">Agent Detail</td>
                    </tr>
                     <tr style="width: 100%;">
                        <td><?php echo get_phrase('Agent');?></td>
                        <td colspan="2"><b><?php echo $this->db->get_where('agent', array('agent_id' => $row['agent_id']))->row()->name;?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Code');?></td>
                        <td colspan="2"><b><?php echo $this->db->get_where('agent', array('agent_id' => $row['agent_id']))->row()->code;?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Application</td>
                        <td colspan="2" style="color: #ff5656;text-align: center;font-size: 18px;">Detail</td>
                    </tr>
                    <?php $application_detail = $this->db->get_where('loan_detail', array('application_id' => $param2))->result_array() ?>
                    <?php foreach ($application_detail as $row2) :?> 
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Account_number');?></td>
                        <td colspan="2"><b><?php echo $row2['account_number'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('IFSC_Code');?></td>
                        <td colspan="2"><b><?php echo $row2['ifsc_code'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Bank_Name');?></td>
                        <td colspan="2"><b><?php echo $row2['bank_name'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Bank_Address');?></td>
                        <td colspan="2"><b><?php echo $row2['bank_address'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Bill_K_Number');?></td>
                        <td colspan="2"><b><?php echo $row2['bill_k_number'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Discussion');?></td>
                        <td colspan="2"><b><?php echo $row2['discussion'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('FI_Report');?></td>
                        <td colspan="2"><b><?php echo $row2['FI_report'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Cibil_Score');?></td>
                        <td colspan="2" ><b><?php echo $row2['cibil_score'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Previous_Loan');?></td>
                        <td colspan="2"><b><?php echo $row2['previous_loan'];?></b></td>
                    </tr>
                    <?php if($row2['previous_loan'] == 'yes'): ?>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Previous_Loan_Amount');?></td>
                        <td colspan="2"><b><?php echo $row2['previous_loan_amount'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Loan_Date');?></td>
                        <td colspan="2"><b><?php echo $row2['loan_date'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('EMI_Amount');?></td>
                        <td colspan="2"><b><?php echo $row2['emi_amount'];?></b></td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('EMI_Type');?></td>
                        <td colspan="2"><b><?php echo $row2['emi_type'];?></b></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
                    <tr style="width: 100%;">
                        <td style="color: #ff5656;text-align: center;font-size: 18px;">Documents</td>
                        <td colspan="2" style="color: #ff5656;text-align: center;font-size: 18px;">Detail</td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Aadhar_card');?></td>
                        <td><?php echo $row['aadhar'];?></td>
                        <td>
                <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/aadhar_card_front_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/>
                    <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/aadhar_card_back_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/>
                </td>
               
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('PAN_Card');?></td>
                        <td><?php echo $row['pan_number'];?></td>
                        <td> <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/pan_card_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>

                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Id_Card');?></td>
                        <td><?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->id_number; ?></td>
                        <td>
                           <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/id_card_front_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/> <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/id_card_back_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/>
                        </td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Check');?></td>
                        <td><?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->check_number;?></td>
                        <td>
                            <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/check_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/>
                        </td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Bank_Passbook');?></td>
                        <td>Account Number :<?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->account_number;?><br>
                        ifsc code : <?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->ifsc_code;?><br>
                    Bank name : <?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->bank_name;?><br>
                Bank Address : <?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->bank_address;?></td>
                        <td>
                            <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/bank_passbook_' . $row['application_id'] . '.jpg';?>" class="img-responsive img-square" alt="Image not uploaded"/>
                        </td>
                    </tr>
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Elecricity_Bill');?></td>
                        <td><?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->bill_k_number;?></td>
                        <td><img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/electricity_bill_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>
                    </tr>
                    
                    <tr style="width: 100%;">
                        <td><?php echo get_phrase('Property_Paper');?></td>
                        <td></td>
                        <td>
                        	<?php $file = $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->file_name; ?>
                           <embed src="<?php echo base_url() . '/uploads/properties/' . $file ;?>" type="application/pdf"   height="300px" width="100%" class="responsive" />
<a href="<?php echo base_url() . '/uploads/properties/' . $file ;?>">View</a>
                        </td>
                    </tr>
                    

                </table>
            </div>
        </div>      
    </section>
</div>
<?php endforeach; ?>
<center><button onclick="print();">Print</button></center>
<script type="text/javascript">
    function print() {
    var divToPrint = document.getElementById('printarea');
    var htmlToPrint = '';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
    }
</script>