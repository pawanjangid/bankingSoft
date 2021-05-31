
<?php
$employees   =   $this->db->get_where('credit_manager' , array('employee_id' => $param2 ))->result_array();
foreach($employees as $row):?>

<div class="profile-env" id="printarea">
    

    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table" style="border : 1px solid black;border-collapse: collapse;;width: 100%;">
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <h4>
                                <p style="font-size: 20px;"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?></p>
                               Address : <?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?>
                                <br>
                                Contact : <?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description; ?>                     
                        </h4>
                    </td>
                </tr>
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Name :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['name']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Bank Name :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['bank_name']; ?>
                   </td>
               </tr style="border : 1px solid black;border-collapse: collapse;">
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Designation :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo 'HR MANAGER'; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Account Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['account_number']; ?>
                   </td>
               </tr >
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Aadhar Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['aadhar']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       IFSC :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['ifsc_code']; ?>
                   </td>
               </tr >
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      PAN Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['pan_number']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Address :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['address']; ?>
                   </td>
               </tr style="border : 1px solid black;border-collapse: collapse;">
               <tr>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      Gender :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['gender']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       Date of Birth :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['birthday']; ?>
                   </td>
               </tr>
               <tr style="border : 1px solid black;border-collapse: collapse;">
                   <td style="border : 1px solid black;border-collapse: collapse;">
                      joinging Date :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $row['joining']; ?>
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       PF Account Number :
                   </td>
                   <td style="border : 1px solid black;border-collapse: collapse;">
                       <?php echo $row['pf_account']; ?>
                   </td>
               </tr>
                    
                </table>
            </div>
        </div>      
    </section>

    <center>
        <h3>SALARY SLIP - 
        <?php 

$salary_detail = $this->db->get_where('employ_salary',  array('employee_id' =>  $param2,'authentic' => '1' , 'authentic_type' => '3'))->result_array();
$i = sizeof($salary_detail);
$str = $salary_detail[$i-1]['date'];
echo date('M-Y',$salary_detail[$i-1]['payment_date']);
?>
        </h3>
        <div style="clear: both;"></div>
          <br>
    </center>
    <div class="profile-env">
    

    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table" style="border : 1px solid black;border-collapse: collapse;;width: 100%;">
                <tr>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        <h3>Earning</h3>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                       <h3> Deductions</h3>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                    </td>
                </tr>
                <?php $salary_detail = $this->db->get_where('employ_salary',  array('employee_id' =>  $param2,'authentic' => '1' , 'authentic_type' => '3'))->result_array();
$i = sizeof($salary_detail);
$key = $salary_detail[$i-1]; ?>
                
                    <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Basic &amp; DA
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['basic']; ?>
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        provident Fund
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['provident_fund']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        HRA
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['HRA']; ?>
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        E.S.I.
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['esi']; ?>
                    </td>
                    
                    
                </tr>
                <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Conveyance
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['conveyance']; ?>
                   
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Loan
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['loan']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Incentive
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['incentive']; ?>
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Profession Tax
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['profession']; ?>
                    </td>
                </tr>
                 <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        TSD/IT
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['TSD_IT']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        Official Provident Fund
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        <?php echo $key['official_charge']; ?>
                    </td>
                </tr>
                 <tr>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                      .  
                    </td style="border-bottom : 1px solid black;border-collapse: collapse;">
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                      
                    </td>
                    <td style="border-bottom : 1px solid black;border-collapse: collapse;">
                      
                    </td>
                </tr>
                 <tr>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                     <h3>   Total Addition </h3>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $amount = $key['basic']+$key['HRA']+$key['conveyance']+$key['incentive']; ?>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      <h3>  Total Deduction </h3>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $deduction = $key['provident_fund']+$key['esi']+$key['loan']+$key['profession']+$key['TSD_IT']+$key['official_charge']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                       <h3> NET Salary </h3>
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        <?php echo $amount-$deduction; ?>
                    </td>
                </tr>
                </table>
            </div>
        </div>      
    </section>
    
    
    
</div>
    
<div style="margin-top: 100px;float: left;">
    Authorised Signature
</div>
<div style="margin-top: 100px;float: right;">
    Receiver Signature
</div>

</div>

<div style="clear: both;"></div>
<?php endforeach;?>


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