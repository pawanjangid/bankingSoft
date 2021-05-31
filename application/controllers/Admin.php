<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function convertdate($date) {
$array = explode('/', $date);
$tmp = $array[0];
$array[0] = $array[1];
$array[1] = $tmp;
unset($tmp);
$date = implode('/', $array);
return strtotime($date);
}


class Admin extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');

	}

	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('admin_login') == 1)
			redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
	}


	function dashboard()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('admin_dashboard');
		$this->load->view('backend/index', $page_data);
	}

    function loadpage($page_name = '',$data_id='')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']     = $page_name;
        $page_data['data_id']     = $data_id;
        $page_data['page_title'] = get_phrase($page_name);
        $this->load->view('backend/index', $page_data);
    }

     function updatepage($page_name = '', $data_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']     = $page_name;
        $page_data['data_id']     = $data_id;
        $page_data['page_title'] = get_phrase($page_name);
        $this->load->view('backend/index', $page_data);
    }

    function employee_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['email']           = $this->input->post('email');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['address']           = $this->input->post('address');
            $data['employee_code']           = uniqid();
            $this->db->insert('employee_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/employee_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['email']           = $this->input->post('email');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['address']           = $this->input->post('address');
            $this->db->where('employee_id', $param2);
            $this->db->update('employee_master',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/employee_master', 'refresh');
        }

        $page_data['page_name']     = 'employee_master';
        $page_data['page_title'] = 'Employee Master';
        $this->load->view('backend/index', $page_data);
    }
    function car_insurance($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['policy_number']           = $this->input->post('policy_number');
            $data['registration_date']           = $this->input->post('registration_date');
            $data['vehicle_number']           = $this->input->post('vehicle_number');
            $data['modal_number']           = $this->input->post('modal_number');
            $data['cubic_capacity']           = $this->input->post('cubic_capacity');
            $data['sheeting_capacity']           = $this->input->post('sheeting_capacity');
            $data['previously_insuranced']           = $this->input->post('previously_insuranced');
            $data['insurance_claimed']           = $this->input->post('insurance_claimed');
            $data['IDB']           = $this->input->post('IDB');
            $data['NCB']           = $this->input->post('NCB');
            $data['company_id']           = $this->input->post('company_id');
            $this->db->insert('car_insurance', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/car_insurance', 'refresh');
        }
        if ($param1 == 'approve') {
            $policy_number          = $this->input->post('policy_number');
            $data['quotation']           = $this->input->post('quotation');
            $data['status'] = 'approve';
            $this->db->where('policy_number', $policy_number);
            $this->db->update('car_insurance', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/approve_car_insurance', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['registration_date']           = $this->input->post('registration_date');
            $data['policy_number']           = $this->input->post('policy_number');
            $data['vehicle_number']           = $this->input->post('vehicle_number');
            $data['modal_number']           = $this->input->post('modal_number');
            $data['cubic_capacity']           = $this->input->post('cubic_capacity');
            $data['sheeting_capacity']           = $this->input->post('sheeting_capacity');
            $data['previously_insuranced']           = $this->input->post('previously_insuranced');
            $data['insurance_claimed']           = $this->input->post('insurance_claimed');
            $data['IDB']           = $this->input->post('IDB');
            $data['NCB']           = $this->input->post('NCB');
            $this->db->where('car_id', $param2);
            $this->db->update('car_insurance',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/car_insurance', 'refresh');
        }

        $page_data['page_name']     = 'car_insurance';
        $page_data['page_title'] = 'Car Insurance';
        $this->load->view('backend/index', $page_data);
    }

    function health_life($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['policy_number']           = $this->input->post('policy_number');
            $data['name']           = $this->input->post('name');
            $data['email']           = $this->input->post('email');
            $data['mobile_number']           = $this->input->post('mobile_number');
            $data['address']           = $this->input->post('address');
            $data['gender']           = $this->input->post('gender');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['payment_type']           = $this->input->post('payment_type');
            $data['reference']           = $this->input->post('reference');
            $data['sum_assure']           = $this->input->post('sum_assure');
            $data['company_id']           = $this->input->post('company_id');
            $this->db->insert('health_life', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/health_life', 'refresh');
        }
        
        if ($param1 == 'do_update') {
            $data['policy_number']           = $this->input->post('policy_number');
            $data['name']           = $this->input->post('name');
            $data['email']           = $this->input->post('email');
            $data['mobile_number']           = $this->input->post('mobile_number');
            $data['address']           = $this->input->post('address');
            $data['gender']           = $this->input->post('gender');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['payment_type']           = $this->input->post('payment_type');
            $data['reference']           = $this->input->post('reference');
            $data['sum_assure']           = $this->input->post('sum_assure');
            $data['company_id']           = $this->input->post('company_id');
            $this->db->where('life_id', $param2);
            $this->db->update('health_life',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/health_life', 'refresh');
        }

        $page_data['page_name']     = 'health_life';
        $page_data['page_title'] = 'Health & Life Insurance';
        $this->load->view('backend/index', $page_data);
    }
    
    function bank_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['account_number']           = $this->input->post('account_number');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['address']           = $this->input->post('address');
            $data['opening_amount']           = $this->input->post('opening_amount');
            $data['branch']           = $this->input->post('branch');

            $this->db->insert('bank_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/bank_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['account_number']           = $this->input->post('account_number');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['address']           = $this->input->post('address');
            $data['opening_amount']           = $this->input->post('opening_amount');
            $data['branch']           = $this->input->post('branch');
            $this->db->where('bank_id', $param2);
            $this->db->update('bank_master',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/bank_master', 'refresh');
        }
    }

     function product_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['plan_type']           = $this->input->post('plan_type');
            $data['plan_duration']           = $this->input->post('plan_duration');
            $data['plan_mode']           = $this->input->post('plan_mode');
            $data['cosideration_amount']           = $this->input->post('cosideration_amount');
            $data['monthly_amount']           = $this->input->post('monthly_amount');
            $data['half_year_amount']           = $this->input->post('half_year_amount');
            $data['interest_rate']           = $this->input->post('interest_rate');
            $data['maturity_amount']           = $this->input->post('maturity_amount');
            $data['quarterly_amount']           = $this->input->post('quarterly_amount');
            $data['quota_percentage']           = $this->input->post('quota_percentage');
            $data['plan_category']           = $this->input->post('plan_category');
            $data['plan_name']           = $this->input->post('plan_name');
            $data['yearly_amount']           = $this->input->post('yearly_amount');
            $this->db->insert('product_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/product_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['plan_type']           = $this->input->post('plan_type');
            $data['plan_duration']           = $this->input->post('plan_duration');
            $data['cosideration_amount']           = $this->input->post('cosideration_amount');
            $data['monthly_amount']           = $this->input->post('monthly_amount');
            $data['half_year_amount']           = $this->input->post('half_year_amount');
            $data['interest_rate']           = $this->input->post('interest_rate');
            $data['maturity_amount']           = $this->input->post('maturity_amount');
            $data['quarterly_amount']           = $this->input->post('quarterly_amount');
            $data['quota_percentage']           = $this->input->post('quota_percentage');
            $data['plan_category']           = $this->input->post('plan_category');
            $data['mode']           = $this->input->post('mode');
            $data['plan_name']           = $this->input->post('plan_name');
            $data['yearly_amount']           = $this->input->post('yearly_amount');
            $this->db->where('product_id', $param2);
            $this->db->update('product_master',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/product_master', 'refresh');
        }
    }

    function loan_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['loan_name']           = $this->input->post('loan_name');
            $data['loan_code']           = $this->input->post('loan_code');
            $data['loan_mode']           = $this->input->post('loan_mode');
            $data['min_amount']           = $this->input->post('min_amount');
            $data['max_amount']           = $this->input->post('max_amount');
            $data['min_term']           = $this->input->post('min_term');
            $data['max_term']           = $this->input->post('max_term');
            $data['roi_min']           = $this->input->post('roi_min');
            $data['roi_max']           = $this->input->post('roi_max');
            $data['loan_type']           = $this->input->post('loan_type');
            $data['Proc_fees']           = $this->input->post('Proc_fees');
            $data['Legal_amt_min']           = $this->input->post('Legal_amt_min');
            $data['Legal_amt_max']           = $this->input->post('legal_amt_max');
            $data['other_charge_min']           = $this->input->post('other_charge_min');
            $data['other_charge_max']           = $this->input->post('other_charge_max');
            $data['min_age']           = $this->input->post('min_age');
            $data['max_age']           = $this->input->post('max_age');
            $data['tax_rate']           = $this->input->post('tax_rate');
            $data['penalty_int']           = $this->input->post('penalty_int');
            $data['grace_period']           = $this->input->post('grace_period');
            $data['interest_mode']           = $this->input->post('interest_mode');
            $data['security_type']           = $this->input->post('security_type');

            $this->db->insert('loan_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/loan_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['plan_type']           = $this->input->post('plan_type');
            $data['plan_duration']           = $this->input->post('plan_duration');
            $data['cosideration_amount']           = $this->input->post('cosideration_amount');
            $data['monthly_amount']           = $this->input->post('monthly_amount');
            $data['half_year_amount']           = $this->input->post('half_year_amount');
            $data['interest_rate']           = $this->input->post('interest_rate');
            $data['maturity_amount']           = $this->input->post('maturity_amount');
            $data['quarterly_amount']           = $this->input->post('quarterly_amount');
            $data['quota_percentage']           = $this->input->post('quota_percentage');
            $data['plan_category']           = $this->input->post('plan_category');
            $data['mode']           = $this->input->post('mode');
            $data['plan_name']           = $this->input->post('plan_name');
            $data['yearly_amount']           = $this->input->post('yearly_amount');
            $this->db->where('product_id', $param2);
            $this->db->update('product_master',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/product_master', 'refresh');
        }
    }

    function loan_entry($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['member_id']           = $this->input->post('member_code');
            $data['loan_code']           = $this->input->post('loan_code');
            $data['form_no']           = $this->input->post('form_no');
            $data['date']           =   strtotime(str_replace('/', '-', $this->input->post('date')));
            $data['branch_id']           = $this->input->post('branch_id');
            $data['loan_amount']           = $this->input->post('loan_amount');
            $data['product_id']           = $this->input->post('loan_id');
            $data['loan_amount']           = $this->input->post('loan_amount');
            $data['payment_type']           = $this->input->post('payment_type');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['bank_name']           = $this->input->post('loan_bank_name');
            $data['account_no']           = $this->input->post('account_no');
            $data['loan_purpose']           = $this->input->post('loan_purpose');
            $data['processing_fee']           = $this->input->post('processing_fee');
            $data['service_tax']           = $this->input->post('service_tax');
            $data['insurance_amount']           = $this->input->post('insurance_amount');
            $data['gst_tax']           = 	$this->input->post('gst_tax');
            $data['associate_code']           = $this->input->post('associate_code');
            $data['emi']                = $this->input->post('emi');
            $guarantor_data = json_encode(array(array('member_no'=>$this->input->post('member_no1'),'guarantor_name'=>$this->input->post('guarantor_name1'),'phone_no'=>$this->input->post('phone_no1'),'address'=>$this->input->post('address1')),array('member_no'=>$this->input->post('member_no2'),'guarantor_name'=>$this->input->post('guarantor_name2'),'phone_no'=>$this->input->post('phone_no2'),'address'=>$this->input->post('address2')),array('member_no'=>$this->input->post('member_no2'),'guarantor_name'=>$this->input->post('guarantor_name2'),'phone_no'=>$this->input->post('phone_no2'),'address'=>$this->input->post('address2'))));

            $security_data = json_encode(array(array('member_no'=>$this->input->post('member_no1')),array('member_no'=>$this->input->post('member_no2'))));

            $data['guarantor_data']          = $guarantor_data;
            $data['security_data']           = $security_data;
            $data['time']  					 = time();
            $check = $this->db->get_where('loan_entry',array('loan_code'=>$data['loan_code']));
            if ($check->num_rows()<1) {
            $this->db->insert('loan_entry', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            }else{
            	$this->session->set_flashdata('flash_message' , get_phrase('data_already_successfully'));
            }
            redirect(base_url() . 'index.php?admin/loadpage/loan_entry', 'refresh');
        }
    }

    function loan_entry_approval($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'approve') {
        	$loan_code           = $this->input->post('loan_code');
            $data['approved']           = '1';
            



            $check = $this->db->get_where('loan_entry',array('loan_code'=>$data['loan_code']));
            if ($check->num_rows()<1) {
            $this->db->where('loan_code',$loan_code);
            $this->db->update('loan_entry',$data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            }else{
            	$this->session->set_flashdata('flash_message' , get_phrase('data_already_successfully'));
            }
            redirect(base_url() . 'index.php?admin/loadpage/loan_entry_approval', 'refresh');
        }
    }
    function loan_entry_payment($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'paid') {
        	$data['payment_date']          = strtotime(str_replace('/', '-', $this->input->post('payment_date')));
        	$loan_code           = $this->input->post('loan_code');
            $data['paid']           = '1';

            $data2['loan_id'] = $loan_code;
            $data2['payment_desc'] = '4';
            $data2['branch_id'] = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->branch_id;
            $data2['renewal_date'] = strtotime(str_replace('/', '-', $this->input->post('payment_date')));
            $data2['payment_type'] = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->payment_type;
            $data2['cheque_date'] = $this->input->post('cheque_date');
            $data2['cheque_no'] = $this->input->post('cheque_no');
            $data2['plan_mode'] = 'Loan';
            $data2['widthdraw_amount'] = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->loan_amount;

            $data3['loan_id'] = $loan_code;
            $data3['payment_desc'] = '4';
            $data3['branch_id'] = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->branch_id;
            $data3['renewal_date'] = strtotime(str_replace('/', '-', $this->input->post('payment_date')));
            $data3['payment_type'] = 'Cash';
            $data3['cheque_date'] = '0';
            $data3['cheque_no'] = '0';
            $data3['plan_mode'] = 'Loan';

            $gst_tax=$this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->gst_tax;
            $insurance_amount = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->insurance_amount;
            $processing_fee = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->processing_fee;
            $service_tax = $this->db->get_where('loan_entry',array('loan_code'=>$loan_code))->row()->service_tax;

            $data3['collection_amount'] = $gst_tax+$insurance_amount+$processing_fee+$service_tax;

            $check = $this->db->get_where('loan_entry',array('loan_code'=>$data['loan_code']));
            if ($check->num_rows()<1) {
            $this->db->where('loan_code',$loan_code);
            $this->db->update('loan_entry',$data);
            $this->db->insert('daily_deposit',$data2);
            $this->db->insert('daily_deposit',$data3);
            $this->session->set_flashdata('flash_message' , get_phrase('Your_Loan_has_been_successfully_paid'));
            }else{
            	$this->session->set_flashdata('flash_message' , get_phrase('Loan_already_Paid'));
            }
            redirect(base_url() . 'index.php?admin/loadpage/loan_entry_pay', 'refresh');
        }
    }

    function loan_deposit($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['loan_id']           = $this->input->post('loan_id');
            $data['branch_id']           = $this->input->post('branch_id');
            //4 = loan transaction;
            $data['payment_desc']           = 4;
            $data['installment_no']           = $this->input->post('installment_no');
            // $data['installment_no_to']           = $this->input->post('installment_no_to');
            // $data['paid']           = $this->input->post('paid_installment');
            $data['collection_amount']           = $this->input->post('collection_amount');
            $data['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('date')));
            $data['payment_type']           = $this->input->post('payment_type');
            $data['plan_mode']           = 'Loan';
            $data['late_fee']           = $this->input->post('panelty_charge');
            $data['bank_id']           = $this->input->post('bank_id');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']         = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['remark']           = $this->input->post('payment_remark');
            
            $this->db->insert('daily_deposit', $data);



            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/loan_payment', 'refresh');
        }
    }


         function members($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['member_code']           = $this->input->post('member_code');
            $data['date_of_joining']           = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['member_name']           = $this->input->post('member_name');
            $data['father_name']           = $this->input->post('father_name');
            $data['address']           = $this->input->post('address');
            $data['pin_code']           = $this->input->post('pin_code');
            $data['mail']           = $this->input->post('mail');
            $data['date_of_birth']           =strtotime(str_replace('/', '-', $this->input->post('date_of_birth')));
            $data['age']           = $this->input->post('age');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['relation']           = $this->input->post('relation');
            $data['blood_group']           = $this->input->post('blood_group');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['gender']           = $this->input->post('gender');
            $data['member_type']           = $this->input->post('member_type');
            $data['education']           = $this->input->post('education');
            $data['occupation']           = $this->input->post('occupation');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['share_amount']           = $this->input->post('share_amount');
            $data['remarks']           = $this->input->post('remarks');
            $data['pan_card']           = $this->input->post('pan_card');
            $data['aadhar_no']           = $this->input->post('aadhar_no');
            $data['id_no']           = $this->input->post('id_no');
            $data['passport_no']           = $this->input->post('passport_no');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['account_number']           = $this->input->post('account_number');

            $this->db->insert('members', $data);
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/members_photo/' . $data['member_code'] . '.jpg');
            move_uploaded_file($_FILES['signature']['tmp_name'], 'uploads/members_signature/' . $data['member_code'] . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/member', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['date_of_joining']           = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['member_name']           = $this->input->post('member_name');
            $data['father_name']           = $this->input->post('father_name');
            $data['address']           = $this->input->post('address');
            $data['pin_code']           = $this->input->post('pin_code');
            $data['mail']           = $this->input->post('mail');
            $data['date_of_birth']  = strtotime(str_replace('/', '-', $this->input->post('date_of_birth')));
            $data['age']           = $this->input->post('age');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['relation']           = $this->input->post('relation');
            $data['blood_group']           = $this->input->post('blood_group');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['gender']           = $this->input->post('gender');
            $data['member_type']           = $this->input->post('member_type');
            $data['education']           = $this->input->post('education');
            $data['occupation']           = $this->input->post('occupation');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['share_amount']           = $this->input->post('share_amount');
            $data['remarks']           = $this->input->post('remarks');
            $data['pan_card']           = $this->input->post('pan_card');
            $data['aadhar_no']           = $this->input->post('aadhar_no');
            $data['id_no']           = $this->input->post('id_no');
            $data['passport_no']           = $this->input->post('passport_no');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['account_number']           = $this->input->post('account_number');
            $this->db->where('member_code',$param2);
            $this->db->update('members', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/member', 'refresh');
        }
    }
function share_allotment($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['member_code']           = $this->input->post('member_code');
            $data['date_of_joining'] = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['branch_id']           = $this->input->post('branch_id');
            $data['share_id']           = $this->input->post('share_id');
            $data['total_no_of_share']           = $this->input->post('total_no_of_share');
            $data['share_amount']           = $this->input->post('share_amount');
            $data['no_of_share']           = $this->input->post('no_of_share');
            $data['ins_amount']           = $this->input->post('share_amount');
            $data['previous'] = 1;
            $data['remarks']           = $this->input->post('remarks');
            $data['payment_type']           = $this->input->post('payment_type');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']           = $this->input->post('cheque_date');
            $data['bank_id']           = $this->input->post('bank_id');
            $this->db->insert('share_allotment', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/member_share_allotment', 'refresh');
        }
        if ($param1 == 'do_update') {
            $member_code = $this->input->post('member_code');

            $data['share_amount']  = $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->share_amount-$this->input->post('share_amount2');
            $data['no_of_share'] = $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->no_of_share-$this->input->post('no_of_share2');
            
            $data2['member_code'] = $this->input->post('member_code2');
            $data2['date_of_joining']           = strtotime(str_replace('/', '-', $this->input->post('date_of_joining2')));
            $data2['branch_id'] = $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->branch_id;
            $data2['bank_id'] = $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->bank_id;
            $data['payment_type']= $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->payment_type;
            $data2['share_amount']  = $this->input->post('share_amount2');
            $data2['no_of_share'] = $this->input->post('no_of_share2');
            $data2['remarks'] = '0';
            $data2['previous'] = 2;
            $data2['payment_type'] = $this->db->get_where('share_allotment', array('member_code' => $member_code))->row()->payment_type;

            $this->db->where('member_code',$member_code);
            $this->db->update('share_allotment', $data);
            $this->db->insert('share_allotment', $data2);
            
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/member_share_allotment', 'refresh');
        }
    }

function rank($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['rank']           = $this->input->post('rank');
            $data['Designation']           = $this->input->post('designation');
            $data['monthly_target']           = $this->input->post('monthly_target');

            $this->db->insert('rank', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/rank_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['rank']           = $this->input->post('rank');
            $data['Designation']           = $this->input->post('Designation');
            $data['monthly_target']           = $this->input->post('monthly_target');
            $this->db->where('rank_id',$param2);
            $this->db->update('rank', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/rank_master', 'refresh');
        }
    }
    function transaction_entry_section($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['ac_no']           = $this->input->post('ac_no');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['bank_id']           = $this->input->post('bank_id');
            $data['payment_desc']           = 3;//3 = saving account entries
            if ($this->input->post('payment_detail')=='deposit') {
               $data['collection_amount']           = $this->input->post('amount');
            }else{
                $data['widthdraw_amount']           = $this->input->post('amount');
            }
            $data['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('renewal_date')));
            $data['payment_type']           = $this->input->post('payment_type');
            $data['plan_mode']           = 'Saving_Account';
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']         = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['payee_name']           = $this->input->post('payee_name');
            $data['remark']           = $this->input->post('remark');
            $this->db->insert('daily_deposit', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/transaction_entry_section', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['date_of_joining']         = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['member_name']           = $this->input->post('member_name');
            $data['father_name']           = $this->input->post('father_name');
            $data['address']           = $this->input->post('address');
            $data['pin_code']           = $this->input->post('pin_code');
            $data['mail']           = $this->input->post('mail');
            $data['date_of_birth']  = strtotime(str_replace('/', '-', $this->input->post('date_of_birth')));
            $data['age']           = $this->input->post('age');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['relation']           = $this->input->post('relation');
            $data['blood_group']           = $this->input->post('blood_group');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['gender']           = $this->input->post('gender');
            $data['member_type']           = $this->input->post('member_type');
            $data['education']           = $this->input->post('education');
            $data['occupation']           = $this->input->post('occupation');
            $data['branch_code']           = $this->input->post('branch_code');
            $data['share_amount']           = $this->input->post('share_amount');
            $data['remarks']           = $this->input->post('remarks');
            $data['pan_card']           = $this->input->post('pan_card');
            $data['passport_no']           = $this->input->post('passport_no');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['account_number']           = $this->input->post('account_number');
            $this->db->where('member_code',$param2);
            $this->db->update('members', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/transaction_entry_section', 'refresh');
        }
    }

    function account_to_account($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['ac_no']           = $this->input->post('ac_no');
            $data2['ac_no']           = $this->input->post('ac_no2');
            $data['branch_id']           = $this->db->get_where('saving_account', array('ac_no' => $data['ac_no'] ))->row()->branch_id;
            $data2['branch_id']           = $this->db->get_where('saving_account', array('ac_no' => $data2['ac_no'] ))->row()->branch_id;
            $data['widthdraw_amount']           = $this->input->post('amount');
            $data2['collection_amount']           = $this->input->post('amount');
            $data['bank_id']           = $this->input->post('bank_id');
            $data['payment_desc']           = 3;//3 = saving account entries
            $data2['payment_desc']           = 3;//3 = saving account entries

            $data['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('date')));
            $data2['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('date')));
            $data['payment_type']           = 'Cash';
            $data2['payment_type']           = 'Cash';
            $data['plan_mode']           = 'Saving_Account';
            $data2['plan_mode']           = 'Saving_Account';
            $data2['payee_name']           = 'From : ' . $this->input->post('ac_no');
            $data['remark']           = $this->input->post('remark');
            $data2['remark']           = $this->input->post('remark');
            $this->db->insert('daily_deposit', $data);
            $this->db->insert('daily_deposit', $data2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/transaction_entry_section', 'refresh');
        }
    }



function daily_deposit($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['policy_no']           = $this->input->post('policy_no');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['payment_desc']           = 1;
            $data['installment_no']           = $this->input->post('installment_no');
            $data['installment_no_to']           = $this->input->post('installment_no_to');
            $data['paid']           = $this->input->post('paid_installment');
            $data['collection_amount']           = $this->input->post('collection_amount');
            $data['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('renewal_date')));
            $data['payment_type']           = $this->input->post('payment_type');
            $data['plan_mode']           = $this->input->post('mode');
            $data['bank_id']           = $this->input->post('bank_id');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']         = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['deposit_account']           = $this->input->post('deposit_account');
            $data['saving_account']           = $this->input->post('saving_account');
            $data['saving_balance']           = $this->input->post('saving_balance');
            $data2['paid_installment']           = $this->input->post('paid_installment');
            $this->db->insert('daily_deposit', $data);
            $this->db->where('policy_no',$data['policy_no']);
            $this->db->update('investment',$data2);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/Daily_Renewal', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['date_of_joining']         = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['member_name']           = $this->input->post('member_name');
            $data['father_name']           = $this->input->post('father_name');
            $data['address']           = $this->input->post('address');
            $data['pin_code']           = $this->input->post('pin_code');
            $data['mail']           = $this->input->post('mail');
            $data['date_of_birth']  = strtotime(str_replace('/', '-', $this->input->post('date_of_birth')));
            $data['age']           = $this->input->post('age');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['relation']           = $this->input->post('relation');
            $data['blood_group']           = $this->input->post('blood_group');
            $data['phone_no']           = $this->input->post('phone_no');
            $data['gender']           = $this->input->post('gender');
            $data['member_type']           = $this->input->post('member_type');
            $data['education']           = $this->input->post('education');
            $data['occupation']           = $this->input->post('occupation');
            $data['branch_code']           = $this->input->post('branch_code');
            $data['share_amount']           = $this->input->post('share_amount');
            $data['remarks']           = $this->input->post('remarks');
            $data['pan_card']           = $this->input->post('pan_card');
            $data['passport_no']           = $this->input->post('passport_no');
            $data['bank_name']           = $this->input->post('bank_name');
            $data['account_number']           = $this->input->post('account_number');
            $this->db->where('member_code',$param2);
            $this->db->update('members', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/Daily_Renewal', 'refresh');
        }
    }
    function passbook_print()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'passbook_print';
        $page_data['policy_no'] = $this->input->post('policy_no');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function print_sanction()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'print_sanction_letter';
        $page_data['loan_code'] = $this->input->post('loan_code');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    function loan_track()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'loan_track_view';
        $page_data['loan_code'] = $this->input->post('loan_code');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    function loan_emi_received_report()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'print_loan_emi_received_report';
        $page_data['loan_code'] = $this->input->post('loan_code');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    
    function passbook_print_saving()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'passbook_print_saving';
        $page_data['ac_no'] = $this->input->post('ac_no');
        $page_data['page_title'] = get_phrase('Saving_Passbook_Print');
        $this->load->view('backend/index', $page_data);
    }

    function member_update()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'update_member';
        $page_data['member_code'] = $this->input->post('member_code');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function investment_update()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'update_investment';
        $page_data['policy_no'] = $this->input->post('policy_no');
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    function ledger_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $this->db->insert('ledger_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/ledger_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $this->db->where('ledger_id',$param2);
            $this->db->update('ledger_master', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/ledger_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('relation_id',$param2);
            $this->db->delete('relation', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/ledger_master', 'refresh');
        }
    }

    function relation($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $this->db->insert('relation', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/relation_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $this->db->where('relation_id',$param2);
            $this->db->update('relation', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/relation_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('relation_id',$param2);
            $this->db->delete('relation', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/relation_master', 'refresh');
        }
    }
    function branch($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['code']           = $this->input->post('code');
            $data['prefix']           = $this->input->post('prefix');
            $data['address']           = $this->input->post('address');
            $data['manager_name']           = $this->input->post('manager_name');
            $data['phone_number']           = $this->input->post('phone_number');
            $data['opening_date']           =strtotime(str_replace('/', '-', $this->input->post('opening_date')));
            $data['opening_balance']           = $this->input->post('opening_balance');

            $this->db->insert('branch', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
            if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['code']           = $this->input->post('code');
            $data['prefix']           = $this->input->post('prefix');
            $data['address']           = $this->input->post('address');
            $data['manager_name']           = $this->input->post('manager_name');
            $data['phone_number']           = $this->input->post('phone_number');
            $data['opening_date']           = strtotime(str_replace('/', '-', $this->input->post('opening_date')));
            $data['opening_balance']           = $this->input->post('opening_balance');
            $this->db->where('branch_id',$param2);
            $this->db->update('branch', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('branch_id',$param2);
            $this->db->delete('branch');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
    }
function associate($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['associate_code']           = $this->input->post('associate_code');
            $data['member_code']           = $this->input->post('member_code');
            $data['date_of_joining']    = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['rank_id']           = $this->input->post('rank_id');
            $data['introducer_code']           = $this->input->post('introducer_code');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['regamt']           = $this->input->post('regamt');
            $data['remarks']           = $this->input->post('remarks');
            $this->db->insert('associate', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/associate', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['member_code']           = $this->input->post('member_code');
            $data['date_of_joining']      = strtotime(str_replace('/', '-', $this->input->post('date_of_joining')));
            $data['application_no']           = $this->input->post('application_no');
            $data['rank_id']           = $this->input->post('rank_id');
            $data['introducer_code']           = $this->input->post('introducer_code');
            $data['branch_name']           = $this->input->post('branch_name');
            $data['regamt']           = $this->input->post('regamt');
            $data['remarks']           = $this->input->post('remarks');
            $this->db->where('member_code',$param2);
            $this->db->update('members', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/associate', 'refresh');
        }
    }

    function investment($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['policy_no']           = $this->input->post('policy_no');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['policy_date']     = strtotime(str_replace('/', '-', $this->input->post('policy_date')));
            $term = $this->db->get_where('product_master', array('product_id' => $this->input->post('plan')))->row()->plan_duration;
            $days = $term*365;
            $date = date('Y-m-d',$data['policy_date']);
            $maturity_date = date('Y-m-d', strtotime($date. ' + '. $days .' days'));

            $data['form_no']           = $this->input->post('form_no');
            $data['maturity_date']     = strtotime(str_replace('/', '-', $maturity_date));
            $data['folio_no']           = $this->input->post('folio_no');
            $data['mr_no']           = $this->input->post('mr_no');
            $data['member_code']           = $this->input->post('member_code');
            $data['second_name']           = $this->input->post('second_name');
            $data['second_age']           = $this->input->post('second_age');
            $data['second_relation']           = $this->input->post('second_relation');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['nominee_relation']           = $this->input->post('nominee_relation');
            $data['nominee_age']           = $this->input->post('nominee_age');
            $data['plan']           = $this->input->post('plan');
            $data['term']           = $this->input->post('term');
            $data['amount']           = $this->input->post('amount');
            $data['maturity_amount']           = $this->input->post('maturity_amount');
            $data['deposit_amount']           = $this->input->post('deposit_amount');
            $data['regamt']           = $this->input->post('regamt');
            $data['bonus']           = $this->input->post('bonus');
            $data['mis_return']           = $this->input->post('mis_return');
            $data['term2']           = $this->input->post('term2');
            $data['distinctive_no']           = $this->input->post('distinctive_no');
            $data['to_distinctive_no']           = $this->input->post('to_distinctive_no');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['plan_mode']           = $this->input->post('mode');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']        = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['account_no']           = $this->input->post('account_no');
            $data['select_amount']           = $this->input->post('select_amount');
            $data['account_balance']           = $this->input->post('account_balance');
            $data['associate_code']           = $this->input->post('associate_code');
            $data2['policy_no'] = $data['policy_no'];
            $data2['plan_mode']           = $this->input->post('mode');
            $data2['installment_no'] = 1;
            $data2['payment_desc'] = 1;
            $data2['installment_no_to'] = 1;
            $data2['paid'] = 1;
            $data2['policy_no'] = $data['policy_no'];
            $data2['renewal_date'] = strtotime(str_replace('/', '-', $this->input->post('policy_date')));
            $data2['collection_amount'] = $data['amount'];
            $data2['payment_type'] = $data['payment_mode'];
            $data2['bank_id'] = $this->input->post('bank_id');
            $data2['cheque_no']           = $this->input->post('cheque_no');
            $data2['cheque_date']        = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data2['print_status']        = 0;



            $this->db->insert('daily_deposit',$data2);
            $this->db->insert('investment', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/investment', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['branch_id']           = $this->input->post('branch_id');
            $data['form_no']           = $this->input->post('form_no');


            $data['maturity_date']           = strtotime(str_replace('/', '-', $this->input->post('maturity_date')));
            $data['folio_no']           = $this->input->post('folio_no');
            $data['entry_date']           = strtotime(str_replace('/', '-', $this->input->post('entry_date')));
            $data['mr_no']           = $this->input->post('mr_no');
            $data['member_code']           = $this->input->post('member_code');
            $data['second_name']           = $this->input->post('second_name');
            $data['second_age']           = $this->input->post('second_age');
            $data['second_relation']           = $this->input->post('second_relation');
            $data['nominee_name']           = $this->input->post('nominee_name');
            $data['nominee_relation']           = $this->input->post('nominee_relation');
            $data['nominee_age']           = $this->input->post('nominee_age');
            $data['plan']           = $this->input->post('plan');
            $data['regamt']           = $this->input->post('regamt');
            $data['bonus']           = $this->input->post('bonus');
            $data['mis_return']           = $this->input->post('mis_return');
            $data['term2']           = $this->input->post('term2');
            $data['distinctive_no']           = $this->input->post('distinctive_no');
            $data['to_distinctive_no']           = $this->input->post('to_distinctive_no');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']           = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['account_no']           = $this->input->post('account_no');
            $data['select_amount']           = $this->input->post('select_amount');
            $data['account_balance']           = $this->input->post('account_balance');
            $data['associate_code']           = $this->input->post('associate_code');
            $this->db->where('policy_no',$param2);
            $this->db->update('investment', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/investment', 'refresh');
        }
    }
    function commission($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['rank_id']           = $this->input->post('rank_id');
            $data['product_id']           = $this->input->post('product_id');
            $data['commission_new_self']           = $this->input->post('commission_new_self');
            $data['commission_new_team']           = $this->input->post('commission_new_team');
            $data['commission_old_self']           = $this->input->post('commission_old_self');
            $data['commission_old_team']           = $this->input->post('commission_old_team');
            $this->db->insert('commission', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/commission_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['rank_id']           = $this->input->post('rank_id');
            $data['product_id']           = $this->input->post('product_id');
            $data['commission_new_self']           = $this->input->post('commission_new_self');
            $data['commission_new_team']           = $this->input->post('commission_new_team');
            $data['commission_old_self']           = $this->input->post('commission_old_self');
            $data['commission_old_team']           = $this->input->post('commission_old_team');
            $this->db->where('commission_id',$param2);
            $this->db->update('commission', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/commission_master', 'refresh');
        }
    }

    function bank_transaction($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['trans_date']        = strtotime(str_replace('/', '-', $this->input->post('trans_date')));
            $data['bank_id']           = $this->input->post('bank_id');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['trans_type']           = $this->input->post('trans_type');
            $data['amount']           = $this->input->post('amount');
            $data['cheque_date']           = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));;
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['payment_method']           = $this->input->post('payment_method');
            $data['remarks']           = $this->input->post('remarks');
            $this->db->insert('account_balance', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/bank_entry', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['trans_date']           = $this->input->post('trans_date');
            $data['bank_id']           = $this->input->post('bank_id');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['amount']           = $this->input->post('amount');
            $data['cheque_date']           = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));;
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['payment_method']           = $this->input->post('payment_method');
            $data['remarks']           = $this->input->post('remarks');
            $this->db->where('trans_id',$param2);
            $this->db->update('account_balance', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/bank_entry', 'refresh');
        }
    }

    function saving_account($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['member_code']           = $this->input->post('member_code');
            $data['ac_no']           = $this->input->post('ac_no');
            $data['joint_applicant_name']           = $this->input->post('joint_applicant_name');
            $data['joint_mobile_no']           = $this->input->post('joint_mobile_no');
            $data['joint_father_name']           = $this->input->post('joint_father_name');
            $data['joint_pin_code']           = $this->input->post('joint_pin_code');
            $data['joint_date_of_birth']           = strtotime(str_replace('/', '-', $this->input->post('joint_date_of_birth')));
            $data['joint_age']           = $this->input->post('joint_age');
            $data['joint_address']           = $this->input->post('joint_address');
            $data['guarantor_ac']           = $this->input->post('guarantor_ac');
            $data['associate_code']           = $this->input->post('associate_code');
            //$data['opening_amount']           = $this->input->post('opening_amount');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']           = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['bank_id']           = $this->input->post('bank_id');
            $data['account_no']           = $this->input->post('account_no');
            $data['opening_date']           = strtotime(str_replace('/', '-', $this->input->post('opening_date')));
            $data['form_no']           = $this->input->post('form_no');
            $data2['renewal_date'] = strtotime(str_replace('/', '-', $this->input->post('opening_date')));
            $data2['payment_desc'] = 3;
            $data2['payment_type'] = $data['payment_mode'];
            $data2['plan_mode'] = 'Saving_Account';
            $data2['cheque_date'] = $data['cheque_date'];
            $data2['cheque_no'] = $data['cheque_no'];
            $data2['collection_amount'] = $this->input->post('opening_amount');
            $data2['ac_no'] = $data['ac_no'];

            $this->db->insert('saving_account', $data);
            $this->db->insert('daily_deposit', $data2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/open_account', 'refresh');
        }
        // if ($param1 == 'do_update') {
        //     $data['rank_id']           = $this->input->post('rank_id');
        //     $data['product_id']           = $this->input->post('product_id');
        //     $data['commission_new_self']           = $this->input->post('commission_new_self');
        //     $data['commission_new_team']           = $this->input->post('commission_new_team');
        //     $data['commission_old_self']           = $this->input->post('commission_old_self');
        //     $data['commission_old_team']           = $this->input->post('commission_old_team');
        //     $this->db->where('commission_id',$param2);
        //     $this->db->update('commission', $data);
        //     $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
        //     redirect(base_url() . 'index.php?admin/loadpage/commission_master', 'refresh');
        // }
    }


    function installment_take($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['policy_no']           = $this->input->post('policy_no');
            $data['collection_amount']           = $this->input->post('collection_amount');
            $data['branch_id']           = $this->input->post('branch_id');
            $data['renewal_date']           = $this->input->post('renewal_date');
            $data['payment_type']           = $this->input->post('payment_type');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']           = $this->input->post('cheque_date');
            $data['deposit_account']           = $this->input->post('deposit_account');
            $data['saving_account']           = $this->input->post('saving_account');
            $data['saving_balance']           = $this->input->post('saving_balance');
            $data['installment_no']           = $this->input->post('installment_no');
            $data['installment_no_to']           = $this->input->post('installment_no_to');
            $this->db->insert('commission', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/commission_master', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['rank_id']           = $this->input->post('rank_id');
            $data['product_id']           = $this->input->post('product_id');
            $data['commission_new_self']           = $this->input->post('commission_new_self');
            $data['commission_new_team']           = $this->input->post('commission_new_team');
            $data['commission_old_self']           = $this->input->post('commission_old_self');
            $data['commission_old_team']           = $this->input->post('commission_old_team');
            $this->db->where('commission_id',$param2);
            $this->db->update('commission', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/commission_master', 'refresh');
        }
    }
    
function payment_voucher($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['ledger_id']           = $this->input->post('ledger_id');
            $data['widthdraw_amount']           = $this->input->post('payment');
            $data['payment_desc']           = 2;
            //2 = voucher payment;
            //1 = daily deposit;
            $data['payment_type']           = $this->input->post('payment_type');
            $data['cheque_no']           = $this->input->post('cheque_no');
            $data['cheque_date']           = strtotime(str_replace('/', '-', $this->input->post('cheque_date')));
            $data['branch_id']           = $this->input->post('branch_id');
            $data['remark']           = $this->input->post('remarks');
            $data['renewal_date']           =strtotime(str_replace('/', '-', $this->input->post('date')));

            $this->db->insert('daily_deposit', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
            if ($param1 == 'do_update') {
            $data['ledger_id']           = $this->input->post('ledger_id');
            $data['payment']           = $this->input->post('payment');
            $data['payment_mode']           = $this->input->post('payment_mode');
            $data['remarks']           = $this->input->post('remarks');
            $data['date']           =strtotime(str_replace('/', '-', $this->input->post('date')));
            $this->db->where('voucher_id',$param2);
            $this->db->update('voucher', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('branch_id',$param2);
            $this->db->delete('branch');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/branch_master', 'refresh');
        }
    }

    function share_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['share_value']           = $this->input->post('share_value');


            $this->db->insert('share_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/share_master', 'refresh');
        }
            if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['share_value']           = $this->input->post('share_value');
            $this->db->where('share_id',$param2);
            $this->db->update('share_master', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/share_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('branch_id',$param2);
            $this->db->delete('branch');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/share_master', 'refresh');
        }
    }

     function voucher_master($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['date_from']           = strtotime(str_replace('/', '-', $this->input->post('date_from')));
            $data['date_to']           = strtotime(str_replace('/', '-', $this->input->post('date_to')));
            $this->db->insert('voucher_master', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/voucher_master', 'refresh');
        }
            if ($param1 == 'do_update') {
           $data['name']           = $this->input->post('name');
            $data['date_from']           = strtotime(str_replace('/', '-', $this->input->post('date_from')));
            $data['date_to']           = strtotime(str_replace('/', '-', $this->input->post('date_to')));
            $this->db->where('voucher_id',$param2);
            $this->db->update('voucher_master', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/voucher_master', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('voucher_id',$param2);
            $this->db->delete('voucher_master');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/loadpage/voucher_master', 'refresh');
        }
    }




    function update_print_status($value = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $data['print_status'] = 1;
        $this->db->where('policy_no',$value);
        $this->db->update('daily_deposit',$data);
        echo 'Success';
    }

    function update_print_status2($value = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $data['print_status'] = 1;
        $this->db->where('ac_no',$value);
        $this->db->update('daily_deposit',$data);
        echo 'Success';
    }


    function backup_restore($operation = '', $type = '')
    {
    	if ($this->session->userdata('admin_login') != 1)
    		redirect(base_url(), 'refresh');

    	if ($operation == 'create') {
    		$this->crud_model->create_backup($type);
    	}
    	if ($operation == 'restore') {
    		$this->crud_model->restore_backup();
    		$this->session->set_flashdata('backup_message', 'Backup Restored');
    		redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
    	}
    	if ($operation == 'delete') {
    		$this->crud_model->truncate($type);
    		$this->session->set_flashdata('backup_message', 'Data removed');
    		redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
    	}

    	$page_data['page_info']  = 'Create backup / restore from backup';
    	$page_data['page_name']  = 'backup_restore';
    	$page_data['page_title'] = get_phrase('manage_backup_restore');
    	$this->load->view('backend/index', $page_data);
    }

    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('admin_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');
    	if ($param1 == 'update_profile_info') {
    		$data['name']  = $this->input->post('name');
    		$data['email'] = $this->input->post('email');

    		$this->db->where('admin_id', $this->session->userdata('admin_id'));
    		$this->db->update('admin', $data);
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('admin_id') . '.jpg');
    		$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
    		redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
    	}
    	if ($param1 == 'change_password') {
    		$data['password']             = sha1($this->input->post('password'));
    		$data['new_password']         = sha1($this->input->post('new_password'));
    		$data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));

    		$current_password = $this->db->get_where('admin', array(
    			'admin_id' => $this->session->userdata('admin_id')
    		))->row()->password;
    		if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
    			$this->db->where('admin_id', $this->session->userdata('admin_id'));
    			$this->db->update('admin', array(
    				'password' => $data['new_password']
    			));
    			$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
    		} else {
    			$this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
    		}
    		redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
    	}
    	$page_data['page_name']  = 'manage_profile';
    	$page_data['page_title'] = get_phrase('manage_profile');
    	$page_data['edit_data']  = $this->db->get_where('admin', array(
    		'admin_id' => $this->session->userdata('admin_id')
    	))->result_array();
    	$this->load->view('backend/index', $page_data);
    }

    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');

        if ($param1 == 'do_update') {


            $data['description'] = $this->input->post('system_email');
            $this->db->where('type' , 'system_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('address');
            $this->db->where('type' , 'address');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('language');
            $this->db->where('type' , 'language');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('contact_no');
            $this->db->where('type' , 'contact_no');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if ($param1 == 'change_skin') {
            $data['description'] = $param2;
            $this->db->where('type' , 'skin_colour');
            $this->db->update('settings' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('theme_selected')); 
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh'); 
        }
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function get_memberdata($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $member_data = $this->db->get_where('members', array('member_code' => $param1))->row_array();
        $share_data = $this->db->get_where('share_allotment', array('member_code' => $param1))->row_array();
        if (sizeof($share_data)) {
            $return_data = array_merge($member_data,$share_data);
        }else{
            $return_data = $member_data;
        }
        
        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }

    function get_loandata($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');

        $loan_data = $this->db->get_where('loan_entry', array('loan_code' => $param1))->row_array();
        //print_r($loan_data);
        $member = $this->db->get_where('members', array('member_code' => $loan_data['member_id']))->row_array();
        $loan_master = $this->db->get_where('loan_master', array('loan_id' => $loan_data['product_id']))->row_array();
        
        if (sizeof($loan_data)) {
            $mid_data = array_merge($loan_data,$member);
            $return_data = array_merge($mid_data,$loan_master);

        }else{
            $return_data = $member;
        }
        
        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }

        function get_loanamount($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $return_data = array();
        $loan_data = $this->db->get_where('daily_deposit', array('loan_id' => $param1))->result_array();
        $total_paid = 0;
        foreach ($loan_data as $row) {
        	$total_paid = $total_paid+$row['collection_amount'];
        	$paid = $row['installment_no'];
        }
        $table = '';
        $count = 1;
        foreach ($loan_data as $row) {
            $table .= '<tr>';
            $table .= '<td>'.$count.'</td>';
            $table .= '<td></td>';
            $table .= '<td>'.date('d-m-Y',$row['renewal_date']).'</td>';
            $table .= '<td>'.$row['collection_amount'].'</td>';
            $table .= '<td>'.$row['late_fee'].'</td>';
            $table .= '</tr>';
            $count++;
        }
        
        $return_data['paid_amount']=$total_paid;
        $return_data['paid_installment']= $paid;
        $return_data['paid_table'] = $table;
        $return_data['count']   = $count;
		echo json_encode($return_data);
        
    }

    function get_loandetail($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $loan_data = $this->db->get_where('loan_master', array('loan_id' => $param1))->row_array();
        if ($loan_data) {
        	echo json_encode($loan_data);
        }else{
        	echo '0';
        }
        
    }

        function get_account($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $account = $this->db->get_where('saving_account', array('ac_no' => $param1))->row_array();
        $member_data = $this->db->get_where('members', array('member_code' => $account['member_code']))->row_array();
        if (sizeof($member_data)) {
            $return_data = array_merge($account,$member_data);
        }else{
            $return_data = $member_data;
        }
        
        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }



    function get_data($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $investment_data = $this->db->get_where('investment', array('policy_no' => $param1))->row_array();
        $member_data = $this->db->get_where('members', array('member_code' => $investment_data['member_code']))->row_array();
        $plan_data = $this->db->get_where('product_master', array('product_id' => $investment_data['plan']))->row_array();
        $merge = array_merge($investment_data,$member_data);
        $return_data = array_merge($plan_data,$merge);

        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }

    function get_saving_account($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $saving = $this->db->get_where('saving_account', array('ac_no' => $param1))->row_array();
        $branch = $this->db->get_where('branch', array('branch_id' => $saving['branch_id']))->row_array();
        $member = $this->db->get_where('members', array('member_code' => $saving['member_code']))->row_array();

        $merge = array_merge($saving,$branch);
       $return_data = array_merge($member,$merge);

        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }

    function get_accountdeatil($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $saving = $this->db->get_where('saving_account', array('member_code' => $param1))->result_array();
        foreach ($saving as $row) {
        	echo '<option value='.$row['ac_no'].'>'.$row['ac_no'].'</option>';
        }
    }

    function get_associate($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $associate = $this->db->get_where('associate', array('associate_code' => $param1))->row_array();
        $rank_data = $this->db->get_where('rank', array('rank_id' => $associate['rank_id']))->row_array();
        $member_data = $this->db->get_where('members', array('member_code' => $associate['member_code']))->row_array();
        $merge = array_merge($associate,$rank_data);
        $return_data = array_merge($member_data,$merge);
        if (sizeof($return_data)>1) {
             echo json_encode($return_data);
        }else{
            echo '0';
        }
    }
    function get_content_table($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $first_date = strtotime(str_replace('/', '-', $param1));
        $second_date = strtotime(str_replace('/', '-', $param2));
        $this->db->where('renewal_date >=', $first_date);
        $this->db->where('renewal_date <=', $second_date);
        $this->db->order_by('branch_id', "asc");
        $this->db->order_by('renewal_date', "asc");
        $total_collection=0;$total_widthdraw=0;
        $datalist = $this->db->get('daily_deposit')->result_array();
        foreach ($datalist as $row) {
            echo '<tr>';
            echo '<td>'. date("d-m-Y",$row['renewal_date']) .' </td>';
            if ($row['payment_desc']=='1') {
                $display = 'Renewal-' . $row['policy_no']; 
            }
            elseif ($row['payment_desc']=='2') {
                $display = 'Payment - ' . $this->db->get_where('ledger_master', array('ledger_id' => $row['ledger_id']))->row()->name;
            }
            elseif ($row['payment_desc']=='3') {
                $display = 'Account No - ' . $row['ac_no'];
            }
            else{
                $display = '-';
            }
            echo '<td>' . $display .'</td>';
            echo '<td>'. $row['widthdraw_amount'] .'</td>';
            $total_widthdraw = $total_widthdraw+$row['widthdraw_amount'];
            echo '<td>' . $row['collection_amount'] . '</td>';
             $total_collection = $total_collection+$row['collection_amount'];
            echo '<td>' . $row['payment_type'] . '</td>';
            echo '<td>' . $row['installment_no'] . '-' . $row['installment_no_to'] . '</td>';
            echo  '<td></td>';
            echo '</tr>';
        }
        $this->db->where('date_of_joining >=', $first_date);
        $this->db->where('date_of_joining <=', $second_date);
        $this->db->order_by('branch_id', "asc");
        $this->db->order_by('date_of_joining', "asc");
        $datalist = $this->db->get_where('share_allotment', array('previous' => '1'))->result_array();
        foreach ($datalist as $row) {
            echo '<tr>';
            echo '<td>'. date("d-m-Y",$row['date_of_joining']) .' </td>';

            echo '<td> Share - ' . $row['member_code'] .'</td>';
            echo '<td></td>';
            echo '<td>' . $row['ins_amount'] . '</td>';
            echo '<td>' . $row['payment_type'] . '</td>';
            $total_collection = $total_collection+$row['ins_amount'];
            echo '<td></td>';
            echo  '<td></td>';
            echo '</tr>';
        }
                    echo '<tr>';
            echo '<td></td>';

            echo '<td> </td>';
            echo '<td>' . $total_widthdraw .'</td>';
            echo '<td>' . $total_collection . '</td>';
            echo '<td>Different : </td>';
            echo '<td>' . ($total_collection-$total_widthdraw) . '</td>';
            echo  '<td></td>';
            echo '</tr>';
    }
        function get_balance_table($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $first_date = strtotime(str_replace('/', '-', $this->input->post('first_date')));
        $second_date = strtotime(str_replace('/', '-', $this->input->post('last_date')));
        $page_data['first_date'] = $first_date;
        $page_data['second_date'] = $second_date;
        $page_data['branch_id'] = $this->input->post('branch_id');
        $page_data['page_name'] = 'balance_sheet';
        $page_data['page_title'] = get_phrase('balance_sheet');
        $this->load->view('backend/index', $page_data);
    }

    function get_content_investment($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1=='date') {
            $first_date = strtotime(str_replace('/', '-', $param2));
            $second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('policy_date >=', $first_date);
            $this->db->where('policy_date <=', $second_date);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('investment')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['policy_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>' . date('d-m-Y', $row['policy_date']) . '</td>';
                echo '<td>' . $this->db->get_where('product_master',array('product_id'=>$row['plan']))->row()->plan_name  . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['maturity_amount'] . '</td>';
                echo '<td>' . date('d-m-Y',$row['maturity_date']) . '</td>';
                echo '<td>' . $row['associate_code'] . '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$this->db->get_where('associate', array('associate_code'=>$row['associate_code']))->row()->member_code))->row()->member_name  . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='branch') {
            //$second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('branch_id', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('investment')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['policy_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>' . date('d-m-Y', $row['policy_date']) . '</td>';
                echo '<td>' . $this->db->get_where('product_master',array('product_id'=>$row['plan']))->row()->plan_name  . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['maturity_amount'] . '</td>';
                echo '<td>' . date('d-m-Y',$row['maturity_date']) . '</td>';
                echo '<td>' . $row['associate_code'] . '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$this->db->get_where('associate', array('associate_code'=>$row['associate_code']))->row()->member_code))->row()->member_name  . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='associate') {
            $this->db->where('associate_code', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('investment')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['policy_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>' . date('d-m-Y', $row['policy_date']) . '</td>';
                echo '<td>' . $this->db->get_where('product_master',array('product_id'=>$row['plan']))->row()->plan_name  . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['maturity_amount'] . '</td>';
                echo '<td>' . date('d-m-Y',$row['maturity_date']) . '</td>';
                echo '<td>' . $row['associate_code'] . '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$this->db->get_where('associate', array('associate_code'=>$row['associate_code']))->row()->member_code))->row()->member_name  . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
        }

 function get_content_saving($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1=='date') {
            $first_date = strtotime(str_replace('/', '-', $param2));
            $second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('opening_date >=', $first_date);
            $this->db->where('opening_date <=', $second_date);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('opening_date', "asc");
            $datalist = $this->db->get('saving_account')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['ac_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>Saving</td>';
                echo '<td>' . date('d-m-Y',$row['opening_date']) . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                $this->db->select_sum('collection_amount');
                $deposit=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->collection_amount;
                $this->db->select_sum('widthdraw_amount');
                $withdrawal=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->widthdraw_amount;

                echo '<td>' . $deposit . '</td>';
                echo '<td>' . $withdrawal . '</td>';
                echo '<td>' . ($deposit-$withdrawal) . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='branch') {
            //$second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('branch_id', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('opening_date', "asc");
            $datalist = $this->db->get('saving_account')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['ac_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>Saving</td>';
                echo '<td>' . date('d-m-Y',$row['opening_date']) . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                $this->db->select_sum('collection_amount');
                $deposit=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->collection_amount;
                $this->db->select_sum('widthdraw_amount');
                $withdrawal=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->widthdraw_amount;

                echo '<td>' . $deposit . '</td>';
                echo '<td>' . $withdrawal . '</td>';
                echo '<td>' . ($deposit-$withdrawal) . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='saving') {
            $this->db->where('ac_no', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('opening_date', "asc");
            $datalist = $this->db->get('saving_account')->result_array();
            $count = 1;
           foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['ac_no']. '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>Saving</td>';
                echo '<td>' . date('d-m-Y',$row['opening_date']) . '</td>';
                echo '<td>' . $row['member_code'] . '</td>';
                $this->db->select_sum('collection_amount');
                $deposit=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->collection_amount;
                $this->db->select_sum('widthdraw_amount');
                $withdrawal=$this->db->get_where('daily_deposit', array('payment_desc' => '3','ac_no'=>$row['ac_no']))->row()->widthdraw_amount;

                echo '<td>' . $deposit . '</td>';
                echo '<td>' . $withdrawal . '</td>';
                echo '<td>' . ($deposit-$withdrawal) . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
        }





        function get_due_list($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        $total_paid = 0;
        $total_due = 0;
            if ($param1=='branch') {
            $this->db->where('branch_id', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('investment')->result_array();

            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['policy_no']. '</td>';
                 echo '<td>' . $this->db->get_where('branch', array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>' . date('d-m-Y', $row['policy_date']) . '</td>';
                echo '<td>' . $this->db->get_where('product_master',array('product_id'=>$row['plan']))->row()->plan_name  . '</td>';
                if (($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_type) == 'DRD') {
                                echo '<td>' . 360*($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_duration) . '</td>';
                            }elseif (($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_type) == 'RD') {
                                echo '<td>' . 12*$this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_duration . '</td>'; 
                            }else{
                                echo '<td>1</td>';
                            };
                echo '<td>' . $row['plan_mode'] . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                $date = date('Y-m-d',$row['policy_date']);
                $duedate = strtotime($date. ' + '. $row['paid_installment'] .' days');
                echo '<td>' . date('d-m-Y', strtotime($date. ' + '. $row['paid_installment'] .' days')). '</td>';
                echo '<td>' . $row['paid_installment'] . '</td>';

                if ($row['plan_mode']=='Monthly') {
                                    $devide = 30;
                                }else{
                                    $devide = 1;
                                }

                                 $now = new DateTime();
                                $day = $now->getTimestamp();
                               $diff = $day-$duedate;
                            $instdue = abs(round($diff / 86400 / $devide));

                            if ($row['plan_mode']=='Single') {
                                $instdue=1;
                            }
                 echo '<td>' . $instdue . '</td>';
                 $total_paid=$total_paid+$row['paid_installment']*$row['amount'];
                 echo '<td>' . ($row['paid_installment']*$row['amount']) . '</td>';
                 $total_due=$total_due+$instdue*$row['amount'];
                 echo '<td>' . ($instdue*$row['amount']) . '</td>';


                echo '<td>' . $this->db->get_where('members', array('member_code' => $this->db->get_where('associate', array('associate_code' => $row['associate_code']))->row()->member_code))->row()->member_name . '</td>';

                $count = $count+1;
                }
            }


            if ($param1=='associate') {
            $this->db->where('associate_code', $param2);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('investment')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['policy_no']. '</td>';
                 echo '<td>' . $this->db->get_where('branch', array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '<td>' . $this->db->get_where('members', array('member_code'=>$row['member_code']))->row()->member_name . '</td>';
                echo '<td>' . date('d-m-Y', $row['policy_date']) . '</td>';
                echo '<td>' . $this->db->get_where('product_master',array('product_id'=>$row['plan']))->row()->plan_name  . '</td>';
                if (($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_type) == 'DRD') {
                                echo '<td>' . 360*($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_duration) . '</td>';
                            }elseif (($this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_type) == 'RD') {
                                echo '<td>' . 12*$this->db->get_where('product_master',array('product_id' => $row['plan']))->row()->plan_duration . '</td>'; 
                            }else{
                                echo '<td></td>';
                            };
                echo '<td>' . $row['plan_mode'] . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                $date = date('Y-m-d',$row['policy_date']);
                $duedate = strtotime($date. ' + '. $row['paid_installment'] .' days');
                echo '<td>' . date('d-m-Y', strtotime($date. ' + '. $row['paid_installment'] .' days')). '</td>';
                echo '<td>' . $row['paid_installment'] . '</td>';

                if ($row['plan_mode']=='Monthly') {
                                    $devide = 30;
                                }else{
                                    $devide = 1;
                                }

                                 $now = new DateTime();
                                $day = $now->getTimestamp();
                               $diff = $day-$duedate;
                            $instdue = abs(round($diff / 86400 / $devide));
                 echo '<td>' . $instdue . '</td>';
                 $total_paid=$total_paid+$row['paid_installment']*$row['amount'];
                 echo '<td>' . ($row['paid_installment']*$row['amount']) . '</td>';
                 $total_due=$total_due+$instdue*$row['amount'];
                 echo '<td>' . ($instdue*$row['amount']) . '</td>';


                echo '<td>' . $this->db->get_where('members', array('member_code' => $this->db->get_where('associate', array('associate_code' => $row['associate_code']))->row()->member_code))->row()->member_name . '</td>';

                $count = $count+1;
                }
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td>' . $total_paid . '</td>';
                echo '<td>' . $total_due . '</td>';


                echo '<td></td>';
            }
}
        function get_content_member($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1=='date') {
            $first_date = strtotime(str_replace('/', '-', $param2));
            $second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('date_of_joining >=', $first_date);
            $this->db->where('date_of_joining <=', $second_date);
            $this->db->order_by('branch_id', "asc");
            $this->db->order_by('date_of_joining', "asc");
            $datalist = $this->db->get('members')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['member_code']. '</td>';
                echo '<td>' . $row['member_name'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . date('d-m-Y', $row['date_of_joining']) . '</td>';
                echo '<td>' . $row['member_type'] . '</td>';
                echo '<td>' . $row['pan_card'] . '</td>';
                echo '<td>' . $row['phone_no'] . '</td>';
                echo '<td>' . $row['nominee_name'] . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='branch') {
            //$second_date = strtotime(str_replace('/', '-', $param3));
            $this->db->where('branch_id', $param2);
            $this->db->order_by('branch_id', "asc");
            //$this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('members')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['member_code']. '</td>';
                echo '<td>' . $row['member_name'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . date('d-m-Y', $row['date_of_joining']) . '</td>';
                echo '<td>' . $row['member_type'] . '</td>';
                echo '<td>' . $row['pan_card'] . '</td>';
                echo '<td>' . $row['phone_no'] . '</td>';
                echo '<td>' . $row['nominee_name'] . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
            if ($param1=='member') {
            $this->db->where('member_code', $param2);
            $this->db->order_by('branch_id', "asc");
            //$this->db->order_by('policy_date', "asc");
            $datalist = $this->db->get('members')->result_array();
            $count = 1;
            foreach ($datalist as $row) {
                echo '<tr>';
                echo '<td>' . $count . '</td>';
                echo '<td>' . $row['member_code']. '</td>';
                echo '<td>' . $row['member_name'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . date('d-m-Y', $row['date_of_joining']) . '</td>';
                echo '<td>' . $row['member_type'] . '</td>';
                echo '<td>' . $row['pan_card'] . '</td>';
                echo '<td>' . $row['phone_no'] . '</td>';
                echo '<td>' . $row['nominee_name'] . '</td>';
                echo '<td>' . $this->db->get_where('branch',array('branch_id'=>$row['branch_id']))->row()->name . '</td>';
                echo '</tr>';
                $count = $count+1;
                }
            }
        }


}