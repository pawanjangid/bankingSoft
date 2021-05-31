<?php
$application_info=$this->db->get_where('user',array('application_id' => $param2))->result_array();
foreach($application_info as $row):?>

<div class="profile-env" id="printarea">
    
    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table table-bordered" style="width: 100%;">
                    <tr style="width: 100%;">
                        <td colspan="3"><h3><?php echo get_phrase('Personal_Detail_of_Application');?></h3></td>
                        
                    </tr>
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                        <td style="width: 30%;"><?php echo get_phrase('Full_Name');?></td>
                        <td style="width: 30%;"><b><?php echo $row['name'];?></b></td>
                        <td rowspan="4" style="width: 30%;"><img style="height: 150px;width: 130px;" src="<?php echo base_url() . '/uploads/applicant_image/photo_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>
                    </tr>  
                    <tr>
                        <td><?php echo get_phrase('Date_of_Birth');?></td>
                        <td colspan="2"><b><?php echo $row['birthday'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Category');?></td>
                        <td colspan="2"><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
                    <?php endif;?>
                    <tr>
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $row['gender'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Mobile_number');?></td>
                        <td ><b><?php echo $row['phone'];?></b></td>
                        <td rowspan="3"> <img style="height: 100px;width: 130px;" src="<?php echo base_url() . '/uploads/documents/signature_' . $row['application_id'] . '.jpg';?>" 
                    class="img-responsive img-square" alt="Image not uploaded"/></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Marital_Status');?></td>
                        <td colspan="2"><b><?php echo $row['marital_status'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Father_Name');?></td>
                        <td colspan="2"><b><?php echo $row['fname'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Address');?></td>
                        <td colspan="2"><b><?php echo $row['address'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Permanent_Address');?></td>
                        <td colspan="2"><b><?php echo $row['permanent_address'];?></b></td>
                    </tr>
                    <tr>
                        <td colspan="3"><h3><?php echo get_phrase('KYC_Detail');?></h3></td>
                        
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Aadhar_Number');?></td>
                        <td colspan="2"><b><?php echo $row['aadhar'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('PAN_Number');?></td>
                        <td colspan="2"><b><?php echo $row['pan_number'];?></b></td>
                    </tr>
                     <tr>
                        <td><?php echo get_phrase('Bill_K_Number');?></td>
                        <td colspan="2"><b><?php echo $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->bill_k_number;?></b></td>
                    </tr>
                   
                    <tr>
                        <td colspan="3"><h3>Bank Accoount Detail</h3></td>
                    </tr>
                    <?php $application_detail = $this->db->get_where('loan_detail', array('application_id' => $param2))->result_array() ?>
                    <?php foreach ($application_detail as $row2) :?> 
                    <tr>
                        <td><?php echo get_phrase('Account_number');?></td>
                        <td colspan="2"><b><?php echo $row2['account_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('IFSC_Code');?></td>
                        <td colspan="2"><b><?php echo $row2['ifsc_code'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Name');?></td>
                        <td colspan="2"><b><?php echo $row2['bank_name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Address');?></td>
                        <td colspan="2"><b><?php echo $row2['bank_address'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bill_K_Number');?></td>
                        <td colspan="2"><b><?php echo $row2['bill_k_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Discussion');?></td>
                        <td colspan="2"><b><?php echo $row2['discussion'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('FI_Report');?></td>
                        <td colspan="2"><b><?php echo $row2['FI_report'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Cibil_Score');?></td>
                        <td colspan="2" ><b><?php echo $row2['cibil_score'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Previous_Loan');?></td>
                        <td colspan="2"><b><?php echo $row2['previous_loan'];?></b></td>
                    </tr>
                    <?php if($row2['previous_loan'] == 'yes'): ?>
                    <tr>
                        <td><?php echo get_phrase('Previous_Loan_Amount');?></td>
                        <td colspan="2"><b><?php echo $row2['previous_loan_amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Loan_Date');?></td>
                        <td colspan="2"><b><?php echo $row2['loan_date'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('EMI_Amount');?></td>
                        <td colspan="2"><b><?php echo $row2['emi_amount'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('EMI_Type');?></td>
                        <td colspan="2"><b><?php echo $row2['emi_type'];?></b></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
                    
                    <?php $other = $this->db->get_where('co_applicant', array('application_id' =>$row['application_id']))->result_array(); ?>
                    <?php foreach ($other as $key) : ?>
                    <tr>
                        <td colspan="3"><h3><?php echo 'Personal Detail of '.$key['co_applicant_type'];?></h3></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Name');?></td>
                        <td style="text-transform: uppercase;"><b><?php echo $key['name'];?></b></td>
                        <td rowspan="3"><img src="<?php echo base_url() . '/uploads/co_applicant/photo_' . $key['co_applicant_id'] . '.jpg';?>" 
                    class="img-responsive img-square" style="height: 120px;width: 100px;" alt="Image not uploaded"/></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Father_Name');?></td>
                        <td ><b><?php echo $key['fathername'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Date_of_Birth');?></td>
                        <td><b><?php echo $key['date_of_birth'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Gender');?></td>
                        <td><b><?php echo $key['gender'];?></b></td>
                        <td rowspan="3"><img src="<?php echo base_url() . '/uploads/co_applicant/aadhar_card_' . $key['co_applicant_id'] . '.jpg';?>" 
                    class="img-responsive img-square" style="max-height: 120px;" alt="Image not uploaded"/></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Address');?></td>
                        <td><b><?php echo $key['address'];?></b></td>
                        
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Contact_Number');?></td>
                        <td><b><?php echo $key['contact_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Aadhar_Number');?></td>
                        <td><b><?php echo $key['aadhar_number'];?></b></td>
                        <td rowspan="3"><img src="<?php echo base_url() . '/uploads/co_applicant/aadhar_card_back_' . $key['co_applicant_id'] . '.jpg';?>" 
                    class="img-responsive img-square" style="max-height: 120px;" alt="Image not uploaded"/></td>
                    </tr>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Pan_Number');?></td>
                        <td><b><?php echo $key['pan_number'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Account_Number');?></td>
                        <td><b><?php echo $key['account_number'];?></b></td>
                        
                    <tr>
                        <td><?php echo get_phrase('Bank_Name');?></td>
                        <td><b><?php echo $key['bank_name'];?></b></td>
                        <td rowspan="3"><img src="<?php echo base_url() . '/uploads/co_applicant/pan_card_' . $key['co_applicant_id'] . '.jpg';?>" 
                    class="img-responsive img-square" style="max-height: 120px;" alt="Image not uploaded"/></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('IFSC_Code');?></td>
                        <td><b><?php echo $key['ifsc_code'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('Bank_Address');?></td>
                        <td><b><?php echo $key['bank_address'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('CIBIL_Score');?></td>
                        <td colspan="2"><b><?php echo $key['cibil_score'];?></b></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"><h3>Documents Detail of Applicant</h3></td>
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
                    class="img-responsive img-square" alt="Image not uploaded"/> 
                    <img style="height: 200px;width: 300px;" src="<?php echo base_url() . '/uploads/documents/id_card_back_' . $row['application_id'] . '.jpg';?>" 
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
                       <td style="width:300px; height:200px;">
                            <?php $file = $this->db->get_where('loan_detail', array('application_id' => $row['application_id']))->row()->file_name; ?>
                            <iframe src="<?php echo base_url() . '/uploads/properties/' . $file ;?>" style="max-width:100%;
max-height:100%;" frameborder="1"></iframe>

                          <!--  <embed src="<?php echo base_url() . '/uploads/properties/' . $file ;?>" type="application/pdf"   height="300px" width="100%" class="responsive" /> -->
<a href="<?php echo base_url() . '/uploads/properties/' . $file ;?>">View</a>
                        </td>
                    </tr>
                    

                </table>
            </div>
        </div>
        <center>

        <div class="row" style="border : 1px solid gray;width: 90%;border-radius: 2px;text-align: left;padding: 10px;margin-top: 30px;">
            <div>
                <h3>Declaration</h3>
            I/we declare that all the particulars and information provided in this application form are true, correct
and complete and that they shall form the basis of any loan <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> may decide to grant me/us and that any intentional or
negligent misrepresentation of the information contained in this application may result in civil liability,
including monetary damages, to any person who may suffer any loss due to reliance upon
misrepresentation that I have made on this application and/or in criminal penalties. I/we confirm that
I/we have had no insolvency proceedings against me, nor have I/we ever been adjudicated insolvent.
I/we declare that I/we have not made any payments in cash, bearer cheque or kind along with or in
connection with this application to the executive collection my/our application. I shall not hold <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>
liable for any such payments made by us to the executive collecting this application form. I/we
specifically authorise <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> and all its group/business associates companies and their agents to
exchange share or part with all or any information for any purpose including credit information
burueaus and for cross selling and referrals. This authorisation would extend to period even after
closure of all my dues to <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>. I/we understand that the rate of interest on my loan shall be dependent
on my individual credit score and I/we have no objections to the scoring method or the rate of interest
as decided by <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> and the type of amortisation/interest option offered by <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> to me for my loan.
I/We also understand that the rate of interest can be changed at any point of time during the tenure of
the loan by <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>, depending on my rate of interest option and I/we have no objections to such changes.
I/we agree that <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> may take up such references and make any enquiries in respect of this
Application as deemed necessary and verify the information provided, directly or through third party
agent. <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> may make available the information contained in this Application and other information
and documents submitted to <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> to governmental or other agencies/bank/FI/credit bureaus as may be
required. I/we further give <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> right to seek any information from any other source for considering
this application. I undertake to insure the property financed against all risks including
earthquake/riot/fire etc for the entire tenure of my loan for an amount not less than the loan amount.
<?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> and its agents, brokers, insurers servicers, successors and assigns may continuously rely on the
information provided in this application, and I am obligated to amend and/or supplement the
information provided in this application (including change in employment,business,phone
number,resedential address etc). If any of the other material facts that I have represented heron should
change. I/we also undertake to authorise my/our employer/s to deduct equated monthly installement
from my/our salary where applicable and remit the same to <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> every month I/we further agree that
my/our loan should be governed by the rules of <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> which may be in force from time to time. I/we opt
to receive SMSs e-mail/telephone calls from <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> for information related to my loan account,
promotional schemes, borrowing programmes or facilities introduced by <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> and such other
communication that <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> may deem beneficial to me from time to time I/we am/are aware that the fees
paid by me are non - refundable. I/we further confirm that I/we have read the brochures and understand
its contents
</div>
        </div> 
    </center>
<center>
        <div class="row" style="border : 1px solid gray;width: 90%;margin-top: 20px;border-radius: 2px;">
          
                    <table style="width: 100%;">
                    <tr>
                        <td style="width: 40%;">NAME</td>
                        <td style="width: 30%;">Signature</td>
                        <td style="width: 30%;">Date</td>
                    </tr>
                    <tr>
                        <td style="height: 70px;"><?php if ($row['gender'] == 'male') {
                            echo 'Mr. ' . '<p style="text-transform:uppercase;display:inline;">' . $row['name']. '</p>';
                        }elseif ($row['gender'] == 'female') {
                            echo 'Mrs. ' . '<p style="text-transform:uppercase;display:inline;">' . $row['name'] . '</p>';
                        } ?></td>
                        <td style="height: 70px;">
                            _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
                        </td>
                        <td style="height: 70px;">
                            _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
                        </td>
                    </tr>
                    <?php $co_applicant = $this->db->get_where('co_applicant', array('application_id' => $row['application_id']))->result_array(); ?>
                        <?php foreach($co_applicant as $key) : ?>
                    <tr>
                        <td style="height: 70px;"><?php if ($key['gender'] == 'male') {
                            echo 'Mr. ' . '<p style="text-transform:uppercase;display:inline;">' . $key['name']. '</p>';
                        }elseif ($key['gender'] == 'female') {
                            echo 'Mrs. ' . '<p style="text-transform:uppercase;display:inline;">' . $key['name'] . '</p>';
                        } ?></td>
                        <td style="height: 70px;">
                            _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
                        </td>
                        <td style="height: 70px;">
                            _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
                        </td>
                    </tr>

                        <?php endforeach; ?>
                   </table>
                </div>
            </center>
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