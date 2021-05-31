
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="<?php echo base_url() . 'assets/css/navbar.css' ?>" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-expand-md navbar-dark mb-4" role="navigation" style="background-color: #002F96;color: white;font-weight: 600;"> 
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="font-size: 14px;color: white;font-weight: 600;">
                <ul class="navbar-nav mr-auto">
                	<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php?admin/loadpage/dashboard'; ?>" style="color: white;font-size: 14px;"><i class="fa fa-home" style="font-size: 18px;"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Master</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;color: white;font-weight: 600;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/branch_master'; ?>">Branch Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/rank_master'; ?>">Rank Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/bank_master' ?>">Bank Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/relation_master' ?>">Relation Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/product_master' ?>">Product Master</a></li>
                            <li class="dropdown-item"><a href="#">Voucher Master</a></li>
                            <li class="dropdown-item"><a href="#">Gold Loan Master</a></li>
                            <li class="dropdown-item"><a href="#">Loan Master</a></li>
                            
                            <li class="dropdown-item dropdown"style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Gold Loan Master</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Item Group Master</a></li>
                                    <li class="dropdown-item"><a href="#">Locker Master</a></li>
                                    <li class="dropdown-item"><a href="#">Valuer Master</a></li>
                                    <li class="dropdown-item"><a href="#">Purity Master</a></li>
                       
                                </ul>
                            </li>




                            <li class="dropdown-item"><a href="#">Maturity Master</a></li>

                            <li class="dropdown-item dropdown" style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share Configuration</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/share_master'; ?>">Share Master</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/member_share_transfer'; ?>">Member Share Transfer</a></li>
                                    <li class="dropdown-item"><a href="#">Capital Share</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-item"><a href="#">Global Configuration</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/commission_master'; ?>">Commission master</a></li>

                            <li class="dropdown-item dropdown" style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Management</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Access Type Master</a></li>
                                    <li class="dropdown-item"><a href="#">User Master</a></li>
                                    <li class="dropdown-item"><a href="#">User Block/Unblock</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/system_settings' ?>">User Setting</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item"><a href="<?php echo base_url();?>index.php?login/logout">Logout</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Member</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/member'; ?>">New Member</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/member_share_allotment'; ?>">Share Member</a></li>
                            <li class="dropdown-item"><a href="#">Member Joining Report</a></li>
                            <li class="dropdown-item"><a href="#">Member Detail Report</a></li>
                            <li class="dropdown-item"><a href="#">Member Share Certificate</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/share_register_list'; ?>">Member Share Register</a></li>
                            <li class="dropdown-item"><a href="#">Active/Inactive Memebers</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/search_member'; ?>">Search Member</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/member_list'; ?>">Member List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Investment</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/investment' ?>">New Investment</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/Daily_Renewal'; ?>">Daily Renewal</a></li>
                            <li class="dropdown-item"><a href="#">Investment Renewal</a></li>
                            <li class="dropdown-item"><a href="#">Multi Renewal</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/print_passbook' ?>">Passbook</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/search_investment'; ?>">Search Investment</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/investment_list' ?>">Investment List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Saving Account</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/open_account' ?>">Account Opening</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/transaction_entry_section'; ?>">Account Transaction</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/search_account' ?>">Account Search</a></li>
                            <li class="dropdown-item"><a href="#">Interest Calculation</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/account_to_account_transfer' ?>">Account to Account transfer Requistion</a></li>
                            <li class="dropdown-item"><a href="#">Account to Account transfer Approval</a></li>
                            <li class="dropdown-item"><a href="#">Account Ledger</a></li>
                            <li class="dropdown-item"><a href="#">Account Report(All Category)</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/print_passbook_saving' ?>">Saving Passbook</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/saving_account_list'; ?>">Saving Account List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Associate</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/associate'; ?>">New Associate</a></li>
                            <li class="dropdown-item"><a href="#">Associate Chain</a></li>
                            <li class="dropdown-item"><a href="#">Associate Downline</a></li>
                            <li class="dropdown-item"><a href="#">I-Card Printing</a></li>
                            <li class="dropdown-item"><a href="#">associate Promotion</a></li>
                            <li class="dropdown-item"><a href="#">Active/Inacctive Associate</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/associate_list'; ?>">Associate List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Loan Section</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_master'; ?>">Loan Master</a></li>
                            <li class="dropdown-item"><a href="#">Loan Group Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_entry'; ?>">Single Loan Requisition</a></li>
                            <li class="dropdown-item"><a href="#">Gold Loan Requisition</a></li>
                            <li class="dropdown-item"><a href="#">Group Loan Requisition</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_entry_approval'; ?>">Loan Approval</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/sanction_letter'; ?>">Sanction Letter</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_entry_pay'; ?>">Loan Payment</a></li>
                            <li class="dropdown-item"><a href="#">Loan Part Payment</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_payment'; ?>">Loan Re-payment</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_for_close'; ?>">Loan For Closer</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_report'; ?>">Loan Report</a></li>
                            <li class="dropdown-item dropdown" style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loan Report</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Loan Account Ledger</a></li>
                                    <li class="dropdown-item"><a href="#">Loan Requisition Report</a></li>
                                    <li class="dropdown-item"><a href="#">Loan Approval Report</a></li>
                                    <li class="dropdown-item"><a href="#">Loan Disbursement Report</a></li>
                                    <li class="dropdown-item"><a href="#">Loan Due Report</a></li>
                                    <li class="dropdown-item"><a href="#">Loan Over Due Report</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_track'; ?>">Loan Track Report</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/loan_emi_received_report'; ?>">Loan EMI Received Report</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown" style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loan Search</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Member Wise</a></li>
                                    <li class="dropdown-item"><a href="#">Branch Wise</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item"><a href="#">Loan Account Ledger</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Modification</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">Associate Modification</a></li>
                            <li class="dropdown-item"><a href="#">Associate Promotion</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/member_modification'; ?>">Member Modification</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/investment_modification'; ?>">Investment Modifications</a></li>
                            <li class="dropdown-item"><a href="#">Renewal Modification</a></li>
                            <li class="dropdown-item"><a href="#">Daily Renewal Modification</a></li>
                            <li class="dropdown-item"><a href="#">Saving Account Modification</a></li>
                            <li class="dropdown-item"><a href="#">Saving Account Last Transaction Delete</a></li>
                            <li class="dropdown-item"><a href="#">Loan Table Modification</a></li>
                            <li class="dropdown-item"><a href="#">Loan Entry Modification</a></li>
                            <li class="dropdown-item"><a href="#">Loan Last EMI Delete</a></li>
                            <li class="dropdown-item"><a href="#">New Biz Cheque Clear Section</a></li>
                            <li class="dropdown-item"><a href="#">Re-New Biz Cheque Clear Section</a></li>
                            <li class="dropdown-item"><a href="#">Saving Account Modification</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">Acccount Group Master</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/ledger_master'; ?>">Account Ledger Master</a></li>
                            <li class="dropdown-item"><a href="#">Bank Account Master</a></li>
                            <li class="dropdown-item"><a href="#">MIS Payment</a></li>
                            <li class="dropdown-item"><a href="#">Monthly ORC Payment</a></li>
                            <li class="dropdown-item"><a href="#">Advance payment</a></li>
                            <li class="dropdown-item"><a href="#">Journal Vouchers</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/payment_voucher'; ?>">Payment Vouchers</a></li>
                            <li class="dropdown-item"><a href="#">Receipt Voucher</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/bank_entry'; ?>">Bank Entry</a></li>
                            <li class="dropdown-item"><a href="#">Cash Book Statement</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/day_book'; ?>">DayBook</a></li>
                            <li class="dropdown-item"><a href="#">Bank Book</a></li>
                            <li class="dropdown-item"><a href="#">Journal Entry Report</a></li>
                            <li class="dropdown-item"><a href="#">Ledger Report</a></li>
                            <li class="dropdown-item"><a href="#">Trial Balance</a></li>
                            <li class="dropdown-item"><a href="#">Profite And Loss</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/balance_sheet'; ?>">Balance Sheet</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Approval</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">Member joining Approval</a></li>
                            <li class="dropdown-item"><a href="#">Member Share Application Approval</a></li>
                            <li class="dropdown-item"><a href="#">Associate Joining Approval</a></li>
                            <li class="dropdown-item"><a href="#">Investment Approval</a></li>
                            <li class="dropdown-item"><a href="#">Investment Renewal Approval</a></li>
                            <li class="dropdown-item"><a href="#">Saving Account Approval</a></li>
                            <li class="dropdown-item"><a href="#">Certificate/Bond Approval</a></li>
                            <li class="dropdown-item"><a href="#">Saving Accounting Transaction Approval</a></li>
                            <li class="dropdown-item"><a href="#">Loan Approval</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Approval</a></li>
                            <li class="dropdown-item"><a href="#">payment Approval</a></li>
                            <li class="dropdown-item dropdown" style="font-size: 14px;">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chaque Business Approval</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">New Biz Cheque Clear Section</a></li>
                            <li class="dropdown-item"><a href="#">Re-New Biz Cheque Clear Section</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item"><a href="#">Loan Re-payment Approval</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Print Section</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">I-Card Printing</a></li>
                            <li class="dropdown-item"><a href="#">Joining Slip Print</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Print Policy Receipt</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">New Polict Receipt</a></li>
                            <li class="dropdown-item"><a href="#">Renewal Policy Receipt</a></li>
                            <li class="dropdown-item"><a href="#">Receipt Branch Wise</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Certificate Section</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Certificate Print</a></li>
                            <li class="dropdown-item"><a href="#">Certificate Re-Print</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Voucher</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">Voucher Master</a></li>
                            <li class="dropdown-item"><a href="#">Voucher Generation</a></li>
                            <li class="dropdown-item"><a href="#">Voucher Print Section</a></li>
                            <li class="dropdown-item"><a href="#">Voucher List Print</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Maturity</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">RD Maturity Settings</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Requisition</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Requisition Delete</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Approval</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Payment</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Part Payment</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Re-Investment</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maturity Report</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                             <li class="dropdown-item"><a href="#">Projection Report</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Budget Report</a></li>
                            <li class="dropdown-item"><a href="#">Requisition Report</a></li>
                            <li class="dropdown-item"><a href="#">Approval Report</a></li>
                            <li class="dropdown-item"><a href="#">Hold Report</a></li>
                            <li class="dropdown-item"><a href="#">Payment Report</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Status Report</a></li>
                            <li class="dropdown-item"><a href="#">Msturity Part Payment Report</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maturity Search</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Projection Report</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Budget Report</a></li>
                            <li class="dropdown-item"><a href="#">Maturity Re-Invest Report</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Reports</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item"><a href="#">Bussiness Report</a></li>
                            <li class="dropdown-item"><a href="#">Bussiness Report-Plan Wise</a></li>
                            <li class="dropdown-item"><a href="#">Bussiness Report-Summary</a></li>
                            <li class="dropdown-item"><a href="#">Associate Collection-Branch</a></li>
                            <li class="dropdown-item"><a href="#">Associate Bussiness Report Plan Wise</a></li>
                            <li class="dropdown-item"><a href="#">Associate Collection-Rank</a></li>
                            <li class="dropdown-item"><a href="#">Associate Self Collection</a></li>
                            <li class="dropdown-item"><a href="#">Associate Self Collection-Code Wise</a></li>
                            <li class="dropdown-item"><a href="#">Joining Report</a></li>
                            <li class="dropdown-item"><a href="#">Associate Phone List</a></li>
                            <li class="dropdown-item"><a href="#">Associate Rank List</a></li>
                            <li class="dropdown-item"><a href="#">Cheque Status Report</a></li>
                            <li class="dropdown-item"><a href="#">Cheque Pending Report</a></li>
                            <li class="dropdown-item"><a href="#">Bouncing Cheque Report</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url().'index.php?admin/loadpage/renewal_due_list'; ?>">Due Renewal Report</a></li>
                            <li class="dropdown-item"><a href="#">TDS Report</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">Insurance</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown11" style="font-size: 14px;">
                            
                            <li class="dropdown-item"><a href="<?php echo base_url() ?>index.php?Admin/loadpage/car_insurance">Car Insurance</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url() ?>index.php?Admin/loadpage/approve_car_insurance">Approve Car Insurance</a></li>
                            <li class="dropdown-item"><a href="<?php echo base_url() ?>index.php?Admin/loadpage/health_life">Health & Life Insurance</a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="font-size: 14px;">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;color: white;font-weight: 600;">HR Master</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1" style="font-size: 14px;">
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HR Master</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="#">Department</a></li>
                            <li class="dropdown-item"><a href="#">Designation</a></li>
                            <li class="dropdown-item"><a href="#">Salary Master</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Employee</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1" style="font-size: 14px;">
                                    <li class="dropdown-item"><a href="<?php echo base_url() ?>index.php?Admin/employee_master">Employee Master</a></li>
                            <li class="dropdown-item"><a href="#">Employee Offer Letter</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item"><a href="<?php echo base_url() ?>index.php?Admin/loadpage/employee_salary">Salary Generation</a></li>
                            <li class="dropdown-item"><a href="#">Salary Payment</a></li>
                            <li class="dropdown-item"><a href="#">Print Salary Slip</a></li>
                            <li class="dropdown-item"><a href="#">Employee Search</a></li>
                            <li class="dropdown-item"><a href="#">Block Employee</a></li>
                            <li class="dropdown-item"><a href="#">Appointment Letter</a></li>
                            <li class="dropdown-item"><a href="#">Resign Letter</a></li>
                        </ul>
                    </li>

                    
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <center style="font-size: 16px;"><?php echo $this->session->flashdata('flash_message'); ?></center>  
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script src="<?php echo base_url() . 'assets/js/navbar.js' ?>"></script>
    </body>
</html>
