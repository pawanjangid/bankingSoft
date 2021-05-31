<div class="row">
<div class="col-md-12">
			
                <?php 
                $this->db->select_sum('amount');
                $this->db->from('income');
                $query = $this->db->get();
                $amount=$query->row()->amount;
                $this->db->select_sum('processing_fee');
                $this->db->from('approve');
                $query = $this->db->get();
                $processing_fee=$query->row()->processing_fee;
                $this->db->select_sum('technical_charges');
                $this->db->from('approve');
                $query = $this->db->get();
                $technical_charges=$query->row()->technical_charges;
                $this->db->select_sum('pre_emi');
                $this->db->from('approve');
                $query = $this->db->get();
                $pre_emi=$query->row()->pre_emi;
                
                $this->db->select_sum('basic');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $basic=$query->row()->basic;
                $this->db->select_sum('HRA');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $HRA=$query->row()->HRA;
                $this->db->select_sum('conveyance');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $conveyance=$query->row()->conveyance;
                $this->db->select_sum('provident_fund');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $provident_fund=$query->row()->provident_fund;
                $this->db->select_sum('esi');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $esi=$query->row()->esi;
                $this->db->select_sum('loan');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $loan=$query->row()->loan;
                $this->db->select_sum('profession');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $profession=$query->row()->profession;

                $this->db->select_sum('incentive');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $incentive=$query->row()->incentive;

                $this->db->select_sum('TSD_IT');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $TSDIT=$query->row()->TSD_IT;
                $this->db->select_sum('official_charge');
                $this->db->from('employ_salary');
                $query = $this->db->get();
                $official_charge=$query->row()->official_charge;

                $this->db->select_sum('amount');
                    $this->db->from('payment');
                    $this->db->where('payment_type','expense');
                    $query = $this->db->get();
                    $expence=$query->row()->amount;


                 $totalexp=$expence+$basic+$HRA+$conveyance+$incentive;
                $income = $amount+$processing_fee+$technical_charges+$pre_emi+$official_charge+$TSDIT+$profession+$loan+$esi+$provident_fund;
                 ?>



            <div class="col-md-12">
            
                <div class="tile-stats" style="background: mediumseagreen; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="num" data-start="0" data-end="<?php
                    echo $income;?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('Gross Income');?></h3>
                    <h4 style="color: white;">By Manual payment : <?php echo $income; ?><b></b>, Processing Fess : <?php echo $processing_fee; ?>,  Technical Charges : <?php echo $technical_charges;?>, Pre_EMI : <?php echo $pre_emi; ?></h4>
                    <h4 style="color: white;">Other Total from Employees : Provident Fund : <?php echo $provident_fund; ?>, ESI : <?php echo $esi;?>, TSD IT : <?php echo $TSDIT;?>, Profession : <?php echo $profession;?>, LOAN <?php echo $loan; ?>, Offical Provident Fund : <?php echo $official_charge; ?></h4>
                </div>
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats col-md-12" style="background: violet; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php
                    echo $totalexp;?>" 
                    		data-postfix="" data-duration="1000" data-delay="500" style="color: #0000ff;">0</div>
                    
                    <h3 style="color: #0000ff;"><?php echo get_phrase('Total Expences');?></h3>
                    <h4 style="color: white;">Total expences : <?php echo $expence; ?></h4>
                    <h4 style="color: white;">Other Total from Employees : Basic Salary : <?php echo $basic; ?>, HRA : <?php echo $HRA;?>, Conveyance : <?php echo $conveyance;?>, Incentive : <?php echo $incentive;?></h4>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats col-md-3" style="background: aqua; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php
                    $this->db->select_sum('sanction_loan');
                    $this->db->from('approve');
                    $query = $this->db->get();
                     echo $loan=$query->row()->sanction_loan;?>" 
                            data-postfix="" data-duration="1500" data-delay="1000" style="color: #0000ff;">0</div>
                    
                    <h3 style="color: #0000ff;"><?php echo get_phrase('Sanction Loan');?></h3>
                   <p style="color: #0000ff;"></p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats col-md-3" style="background: #9209bc; -moz-box-shadow: 3px 3px 5px 6px #ccc; -webkit-box-shadow: 3px 3px 5px 6px #ccc; box-shadow: 3px 3px 5px 6px #ccc;">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php
                     echo $Net_Income=$income-$totalexp-$loan;?>" 
                            data-postfix="" data-duration="2000" data-delay="1500" style="color: white;">0</div>
                    
                    <h3 style="color: #ffffff;"><?php echo get_phrase('Net_Income');?></h3>
                   <p style="color: #0000ff;"></p>
                </div>
                
            </div>
           
    </div>

</div>

</div>
  
