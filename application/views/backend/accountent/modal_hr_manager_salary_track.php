
<?php
$employees   =   $this->db->get_where('hr_manager' , array('employee_id' => $param2 ))->result_array();
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
        <h3>Salary Statement</h3>
        <div style="clear: both;"></div>
          <br />
    </center>
    <div class="profile-env">
    

    <section class="profile-info-tabs">
        
        <div class="row">
            
            <div class="">
                    <br>
                <table class="table" style="border : 1px solid black;border-collapse: collapse;;width: 100%;">
                  <tr>
                    <td colspan="2" style="border : 1px solid black;border-collapse: collapse;">
                        
                    </td>

                    <td colspan="4" style="border : 1px solid black;border-collapse: collapse;text-align: center;">
                      <h4>  Additions amount </h4>
                    </td>
                    
                     <td colspan="6" style="border : 1px solid black;border-collapse: collapse;text-align: center;">
                        <h4>Deductions</h4>
                    </td>
                   
                    <td style="border : 1px solid black;border-collapse: collapse;">
                     
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                     
                    </td>
                <tr>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        Date
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        Salary Month
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                        Basic Salary
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      HRA
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      Conveyance
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      Incentive
                    </td>

                     <td style="border : 1px solid black;border-collapse: collapse;">
                        Provident Fund
                    </td>
                   
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      ESI
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      LOAN
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      PROFESSION TAX 
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      TDS IT
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      Official Provident Fund
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      NET salary 
                    </td>
                    <td style="border : 1px solid black;border-collapse: collapse;">
                      TOTAL Amount 
                    </td>
                </tr>
                <?php 
                $total_amount = 0;
                $salary_detail = $this->db->get_where('employ_salary',  array('employee_id' =>  $param2,'authentic' => '1' , 'authentic_type' => '1'))->result_array(); ?>
                <?php foreach ($salary_detail as $key): ?>
                  <tr>
                    <td><?php echo date('d-m-Y',$key['date']); ?></td>
                    <td><?php echo date('M-Y',$key['payment_date']); ?></td>
                    <td><?php echo $key['basic']; ?></td> 
                    <td><?php echo $key['HRA']; ?></td>
                    <td><?php echo $key['conveyance']; ?></td>
                    <td><?php echo $key['incentive']; ?></td>
                    <td><?php echo $key['provident_fund']; ?></td>
                    <td><?php echo $key['esi']; ?></td>
                    <td><?php echo $key['loan']; ?></td>
                    <td><?php echo $key['profession']; ?></td>
                    <td><?php echo $key['TSD_IT']; ?></td>
                    <td><?php echo $key['official_charge']; ?></td>
                    <td><?php echo $amount = $key['basic']+$key['HRA']+$key['conveyance']+$key['incentive']-$key['provident_fund']-$key['esi']-$key['loan']-$key['profession']-$key['official_charge']-$key['TSD_IT'];
                      $total_amount =  $total_amount + $amount; ?></td>
                    <td><?php echo $total_amount; ?></td>
                  </tr>

                <?php endforeach; ?>
                <tr>
                    <td colspan="13" style="border-top:  1px solid black;">TOTAL AMOUNT</td>

                    <td style="border-top:  1px solid black;"><?php echo $total_amount; ?></td>
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