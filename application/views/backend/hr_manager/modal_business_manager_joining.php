<?php
$employees   =   $this->db->get_where('business_manager' , array('employee_id' => $param2 ))->result_array();
foreach($employees as $row):?>

<div class="row" style="width: 100%;padding: 20px;" id="printarea">
    <div style="margin: 20px;">
        To,<br>
        Mr/Miss. <?php echo $row['name'];?> <br>
        <?php echo $row['address'];?><br>
        <br>
        <center>SUBJECT : LETTER OF APPOINTMENT</center>
        <br>
        Mr./Miss <?php echo $row['name'];?><br>
        With reference to your application and subsequent interview with us, we are pleased to make you an offer of appointment as Business Manager at our <?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?> location.<br>
        <ul>
            <li>
            This appointment shall take effect from  
        <?php echo $row['joining']; ?>.
            </li>

            <li>
         The details of your remuneration and benefits are in Annexure I.
            </li>
        </ul>
        Your appointment of services is based on the following terms and conditions:
        <ul>
            <li>
                Probation: You will be on probation for period of six months starting from date of joining. This period of probation will be liable to such extension(s) as the management may deem fit in its sole discretion. Unless an order in writing, confirming your services is issued and accepted by you, you will not be deemed to have been made permanent. But if the management is not satisfied with your work, conduct, discipline etc. your services shall be liable to terminate without any notice at any time without assigning any reasons during or on completion of the initial or extended probationary period. There will be no leave (PL) during probation period. After completion of probation you will be entitled to avail leave as per company policy.
            </li>
            <li>
                Professional Ethics &amp; Confidentiality: While you are working with <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?> you are not permitted to carry on any business or profession or enter, for any part of your time, in any capacity, the services of, or be employed by or engaged with any other firm, company or person. You will devote your whole time and attention to your office work to promote the interest of the company. You will not divulge details like your compensation structure (CTC), performance rating, increment etc. and will not divulge to any person or utilize any of the company’s secrets or other related information with any external agencies, press etc. Any act in breach of this term would entail initiation of appropriate action as deemed fit by the company.
            </li>
            <li>
                IT Security Practice &amp; Procedures: While you are in the services of the company, you will adhere to the IT Security Practice &amp; procedures as prescribed by the company. Any instances of violation or any attempted violation of the aforesaid IT Security Practices and Procedures on your part shall result in disciplinary action.
            </li>
            <li>
                Notice Period: In case you decide to leave the company’s services, you will be required to give 90 day’s notice. The company in its sole discretion can decide to waive off/reduce the notice period depending upon the exigencies. In such case, you would be required to pay to the company the gross salary for the notice period so reduced/waived off.
            </li>
            <li>
               If an employee fails to serve notice period or clear any dues, the company has to right to withhold any payment due to the employee in full and final settlement.
            </li>
            <li>
               Presently the place of your work will be <?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?> however during the course of your service; you may be transferred or posted to any location of <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>.
            </li>
            <li>
                Please note that during the course of your services with the company you cannot be a member of any anti-social/national outfits or of any outfit which is declared as banned by the government. Any act in breach of this term would entail initiation of appropriate action as deemed fit by the company
            </li>
            <li>
                Please note that while joining the services of the company and during the course of your services with the company, you would be required to notify the company immediately with details of civil or criminal case/s instituted against you in any court of Law or any complaint/show cause notice/prosecution with/by any police station or by any statutory authority, as also you will notify any outcome of such complaint like filing of charge sheet/Arrest/Conviction/Acquittal/Discharge. Any act in breach of this term would entail initiation of appropriate action as deemed fit by the company.
            </li>
            <li>
                Company expects resolution of issue/s relating to your employment, if any, within the framework internally, at all time during your service period and even after cessation of services due to any reason whatsoever. As such please note that any attempt to bring any outside influence- directly or indirectly – upon any authority to further your interest/s in respect of matters pertaining to your services with the company would amount to breach of employment contract leading to initiation of appropriate action.
            </li>
            <li>
                Please note that during the course of your services with the company, you will not take part in any demonstration/agitation against the company and its official/s for or on behalf of any external bodies/political outfits – either as a member or as a sympathizer. Any act in contravention of the above would be treated as prejudicial to the interest and reputation of the company leading to initiation of appropriate action.
            </li>
            <li>
                You will not enter any commitment or dealings on behalf of the Management for which you have no express authority nor alter or be a part to any alteration of any principle or policy of the Management or exceed the authority or discretion vested in you without the prior sanction of the company or those in authority over you.
            </li>
            <li>
                You shall at all times, well and truly account for and shall when so required, make over, to responsible authority all moneys, properties and things belonging to the company which may have been placed in your custody or under your supervision or may otherwise have come into your possession or under control.
            </li>
            <li>
                Termination of Employment: Your services with the company are liable to be terminated in the event of:
                <ol>
                    <li>Any breach of the conditions mentioned in this letter on your part</li>
                    <li>Any incorrect information furnished by you like:
                        <ul>
                            <li>
                                Mismatch in your previous employment data even for a day
                            </li>
                            <li>
                               Mismatch in your previous pay slip 
                            </li>
                            <li>
                                Fake qualification certificates etc: and
                            </li>
                        </ul>
                    </li>
                    <li>
                        Suppression of any material information by you.
                    </li>
                    <li>
                       Absence for a Continuous period of ten days without prior approval of Your Manager. 
                    </li>
                    <li>
                        Any breach of the Rules and Regulations of the company as applicable/may be made applicable to you from time to time.
                    </li>
                </ol>  
            </li>
            <li>
               You will keep the Management informed of any change in your residential address.
            </li>
        </ul>
        <br>
        On behalf of the company, we wish you every success in your position and trust that our relationship will be long and mutually rewarding.
        <br>
        Yours Sincerely,
        <br>
        For <b><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?></b><br>
        <br>
        Director
        <br>
        <br>
        I am in agreement to above mentioned terms and condition. I will abide by the rules and regulations of the company.<br>
        I hereby accept this offer letter.<br>
        <br>
        <br><br><br>
       <p style="float: left;">Name</p>    <p style="float: right;">Signature</p>
       <br><br><br>
       <hr>

        <style type="text/css">
            table {
                border-collapse: collapse;
                
            }
            .trow {
                border: 1px solid black;
            }
            .darkbg {
                background-color: #f2f2f2;
            }
            .trow td {
                border: 1px solid #000000;
                padding: 1px;
            }
            .center {
                text-align: left;
            }
        </style>

        <div>
            <h4 style="text-align: center; color: #000; font-weight: 600;">Annexure-I</h4>
            <h4 style="text-align: center; color: #000; font-weight: 600;">COMPENSATION DETAILS (Salary &amp; applicable benefits)</h4>
        </div>

       <table style="border: 1px solid black;" width="100%">
            <tr class="trow">
                <td style="border: 1px solid black;">Name</td>
                <td colspan="2"><p class="center"><?php echo $row['name']; ?></p></td>
            </tr>
            <tr class="trow">
                <td>Designation</td>
                <td colspan="2"><p class="center"><?php echo $this->db->get_where('employee_category', array('category_id' => $row['employee_category_id']))->row()->name; ?></p></td>
            </tr>
            <tr class="trow darkbg">
                <td>Components</td>
                <td><p class="center">RS. PM</p></td>
                <td><p class="center">Rs. PA</p></td>
            </tr>
            <tr class="trow">
                <td>Basic</td>
                <td><p class="center"></p><?php echo $row['basic']; ?></td>
                <td><p class="center"><?php echo 12*$row['basic']; ?></td>
            </tr>
            <tr class="trow">
                <td>House Rent Allowance</td>
                <td><p class="center"><?php echo $row['house_rent']; ?></p></td>
                <td><p class="center"><?php echo 12*$row['house_rent']; ?></td>
            </tr>
            <tr class="trow">
                <td>Conveyance Re-imbursement</td>
                <td><p class="center"><?php echo $row['conyevance']; ?></p></td>
                <td><p class="center"><?php echo 12*$row['conyevance']; ?></td>
            </tr>
            <tr class="trow">
                <td>Medical Re-imbursement</td>
                <td><p class="center"><?php echo $row['medical']; ?></p></td>
                <td><p class="center"><?php echo 12*$row['medical']; ?></td>
            </tr>
            <tr class="trow">
                <td>Special Allowance</td>
                <td><p class="center"><?php echo $row['special']; ?></p></td>
                <td><p class="center"><?php echo 12*$row['special']; ?></td>
            </tr>
            <tr class="trow darkbg">
                <td><p>Total Gross</p></td>
                <td><p class="center"><?php echo  $row['special']+$row['medical']+$row['house_rent']+$row['basic']+$row['conyevance']; ?></p></td>
                <td><p class="center"><?php echo  12*($row['special']+$row['medical']+$row['house_rent']+$row['basic']+$row['conyevance']); ?></p></td>
            </tr>
       </table>  

       <br>
       <hr>

       <div><p>
           The above mentioned compensations are as per the prevalent company policy and are subject to change.
           <br>
        For <b><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?></b><br>
        <br>
        Director
        <br>
       </p>
   </div>                                                                      
    </div>
</div>
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