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


class hr_manager extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');

		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');

	}

	/***default functin, redirects to login page if no hr_manager logged in yet***/
	public function index()
	{
		if ($this->session->userdata('hr_manager_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('hr_manager_login') == 1)
			redirect(base_url() . 'index.php?hr_manager/dashboard', 'refresh');
	}

	/***hr_manager DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('hr_manager_login') != 1)
			redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('HR_Manager_Dashboard');
		$this->load->view('backend/index', $page_data);
	}

	/****MANAGE STUDENTS CLASSWISE*****/
	function user_add()
	{
		if ($this->session->userdata('hr_manager_login') != 1)
			redirect(base_url(), 'refresh');

		$page_data['page_name']  = 'client_add';
		$page_data['page_title'] = get_phrase('add_new_Borrower');
		$this->load->view('backend/index', $page_data);
	}

	function get_sections($class_id)
	{
		$page_data['class_id'] = $class_id;
		$this->load->view('backend/hr_manager/student_bulk_add_sections' , $page_data);
	}

	function applicant_information($class_id = '')
	{
		if ($this->session->userdata('hr_manager_login') != 1)
			redirect('login', 'refresh');

		$page_data['page_name']  	= 'user_information';
		$page_data['page_title'] 	= get_phrase('Applicant_information'). " - ".get_phrase('category')." : ".
		$this->crud_model->get_class_name($class_id);
		$page_data['class_id'] 	= $class_id;
		$this->load->view('backend/index', $page_data);
	}

function income_information($mode_id = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');

        $page_data['page_name']     = 'income_detail';
        $page_data['page_title']    = get_phrase('Income_Detail_for') . " - " . get_phrase('category') . " : " .
        $this->db->get_where('income_mode', array('mode_id' => $mode_id ))->row()->name;
        $page_data['mode_id']  = $mode_id;
        $this->load->view('backend/index', $page_data);
    }
function add_income_mode($mode_id = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']     = 'income_mode';
        $page_data['page_title']    = get_phrase('Income');
        $this->load->view('backend/index', $page_data);
    }

function income_info($param1 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']     = 'income_info';
        $page_data['page_title']    = get_phrase('Income_Statement');
        $this->load->view('backend/index', $page_data);
    }

function income_mode($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        $running_year = $this->db->get_where('settings' , array(
            'type' => 'running_year'
        ))->row()->description;
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['detail']          = $this->input->post('detail');
            $this->db->insert('income_mode', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/add_income_mode/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['detail']          = $this->input->post('detail');
            
            $this->db->where('mode_id', $param2);
            $this->db->update('income_mode', $data);
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/add_income_mode/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('mode_id', $param3);
            $this->db->delete('income');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/add_income_mode/', 'refresh');
        }
    }

    function income_statement($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');

            $page_data['start_date']  = $this->input->post('start_date');
            $page_data['end_date']   = $this->input->post('end_date');
            $page_data['page_name']  = 'income_statement';
            $page_data['page_title'] = get_phrase('Income_Statement');
            $this->load->view('backend/index', $page_data);
       
    }

    function get_applicant_detail($approve_id)
    {
        $account = $this->db->get_where('approve' , array('approve_id' => $approve_id))->result_array();
        foreach ($account as $row) {
            $account_number = 'PLRD' . str_pad($row['approve_id'], 7, "0",STR_PAD_LEFT);
            echo 'Account Number : <input class="form-control" value="' . $account_number . '">';
            $name = $this->db->get_where('user', array('application_id' => $row['application_id']))->row()->name;
            echo 'Name : <input class="form-control" name="name" value="' . $name . '" disabled="disabled">';
            $phone = $this->db->get_where('user', array('application_id' => $row['application_id']))->row()->phone;
            echo 'Contact Number : <input class="form-control" value="' . $phone . '" disabled="disabled">';
            echo '<input type="hidden" name="application_id" value="' . $row['application_id'] . '"  >';
            $number =  $row['number_of_emi'];
            $amount = $row['sanction_loan'];
            $rate = $row['rate_of_interest'];
            $interest = $amount*$rate/1200;
            $emi_amount = $interest+($amount/$number);
            echo 'EMI Amount : <input name="amount" value="' . ceil($emi_amount) . '" class="form-control" readonly>';
            echo 'Date : <input type="text" name="date" class="form-control" data-start-view="2" placeholder="dd/mm/yyyy">';
            echo '<button type="submit" class="btn btn-info">' . get_phrase('Take_payment') . '</button>';


        }
    }
function take_emi($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'take') {
            $data['application_id']           = $this->input->post('application_id');
            $data['amount']           = $this->input->post('amount');
            $data['date']          = convertdate($this->input->post('date'));
            $data['detail'] = 'yes';
            $data['income_mode_id'] = 1;

            $this->db->insert('income', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/dashboard/', 'refresh');
        }
    }
    function take_payment($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'take') {
            $data['title']           = $this->input->post('title');
            $data['amount']           = $this->input->post('amount');
            $data['date']          = convertdate($this->input->post('date'));
            $data['income_mode_id'] =$this->input->post('income_mode');
            $data['detail'] = 'no';
            $this->db->insert('income', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/dashboard/', 'refresh');
        }
    }



   function expense($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   convertdate($this->input->post('timestamp'));
            $data['year']                =   $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description;
            $this->db->insert('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/expense', 'refresh');
        }

        if ($param1 == 'edit') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   convertdate($this->input->post('timestamp'));
            $data['year']                =   $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description;
            $this->db->where('payment_id' , $param2);
            $this->db->update('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/expense', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('payment_id' , $param2);
            $this->db->delete('payment');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/expense', 'refresh');
        }

        $page_data['page_name']  = 'expense';
        $page_data['page_title'] = get_phrase('expenses');
        $this->load->view('backend/index', $page_data); 
    }
    


    function employee_category($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['privilege'] = $this->input->post('privilege');
            $data['name']   =   $this->input->post('name');
            $this->db->insert('employee_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/employee_category');
        }
        if ($param1 == 'edit') {
            $data['privilege'] = $this->input->post('privilege');
            $data['name']   =   $this->input->post('name');
            $this->db->where('category_id' , $param2);
            $this->db->update('employee_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/employee_category');
        }
        if ($param1 == 'delete') {
            $this->db->where('category_id' , $param2);
            $this->db->delete('employee_category');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/employee_category');
        }

        $page_data['page_name']  = 'employee_category';
        $page_data['page_title'] = get_phrase('employee_category');
        $this->load->view('backend/index', $page_data);
    }

    function employees($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['employee_category_id']         = $this->input->post('employee_category_id');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('employees', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['employee_category_id']         = $this->input->post('employee_category_id');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('category_id', $param2);
            $this->db->update('employees', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('category_id', $param2);
            $this->db->delete('employees');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        }
        $page_data['employee']   = $this->db->get('employees')->result_array();
        $page_data['page_name']  = 'employees';
        $page_data['page_title'] = get_phrase('Manage_Employement');
        $this->load->view('backend/index', $page_data);
    }


    function hr_manager($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('hr_manager', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['employee_category_id']         = $this->input->post('employee_category_id');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('employee_id', $param2);
            $this->db->update('hr_manager', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('employee_id', $param2);
            $this->db->delete('hr_manager');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/hr_manager/', 'refresh');
        }
        $page_data['employee']   = $this->db->get('hr_manager')->result_array();
        $page_data['page_name']  = 'hr_manager';
        $page_data['page_title'] = get_phrase('HR_Manager');
        $this->load->view('backend/index', $page_data);
    }

    function accountent($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('accountent', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/accountent/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['employee_category_id']         = $this->input->post('employee_category_id');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('employee_id', $param2);
            $this->db->update('accountent', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/accountent/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('category_id', $param2);
            $this->db->delete('employees');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/accountent/', 'refresh');
        }
        $page_data['employee']   = $this->db->get('accountent')->result_array();
        $page_data['page_name']  = 'accountent';
        $page_data['page_title'] = get_phrase('Accountent');
        $this->load->view('backend/index', $page_data);
    }
    
    function credit_manager($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('credit_manager', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/credit_manager/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('employee_id', $param2);
            $this->db->update('credit_manager', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/credit_manager/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('employee_id', $param2);
            $this->db->delete('credit_manager');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/credit_manager/', 'refresh');
        }
        $page_data['employee']   = $this->db->get('credit_manager')->result_array();
        $page_data['page_name']  = 'Credit_Manager';
        $page_data['page_title'] = get_phrase('Credit_Manager');
        $this->load->view('backend/index', $page_data);
    }

    function branch_manager($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('branch_manager', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/branch_manager_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/branch_manager/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['employee_category_id']         = $this->input->post('employee_category_id');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('employee_id', $param2);
            $this->db->update('branch_manager', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/branch_manager_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/branch_manager/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('employee_id', $param2);
            $this->db->delete('branch_manager');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/branch_manager/', 'refresh');
        }
        $page_data['page_name']  = 'branch_manager';
        $page_data['page_title'] = get_phrase('Branch_Manager');
        $this->load->view('backend/index', $page_data);
    }

    function business_manager($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['fathername']        = $this->input->post('fathername');
            $data['mothername']        = $this->input->post('mothername');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['employee_salary']       = $this->input->post('employee_salary');
            $data['salary_method']       = $this->input->post('salary_method');
            $data['basic']       = $this->input->post('basic');
            $data['house_rent']       = $this->input->post('house_rent');
            $data['conyevance']       = $this->input->post('conyevance');
            $data['medical']       = $this->input->post('medical');
            $data['special']       = $this->input->post('special');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
            $data['pf_account']       = $this->input->post('pf_account');
            $data['joining']       = $this->input->post('joining_date');
            $data['password']    = sha1($this->input->post('password'));
            $this->db->insert('business_manager', $data);
            $employee_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $employee_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/business_manager/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['gender']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

            $this->db->where('employee_id', $param2);
            $this->db->update('business_manager', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employees_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?hr_manager/business_manager/', 'refresh');
        } 
        if ($param1 == 'delete') {
            $this->db->where('employee_id', $param2);
            $this->db->delete('business_manager');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/business_manager/', 'refresh');
        }
        $page_data['page_name']  = 'business_manager';
        $page_data['page_title'] = get_phrase('Business_Manager');
        $this->load->view('backend/index', $page_data);
    }

    function employee_salary($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'add') {
            $data['employee_id']        = $param2;
            $data['basic']        = $this->input->post('basic');
            $data['HRA']        = $this->input->post('HRA');
            $data['authentic']        = 0;
            $data['authentic_type']        = 0;
            $data['conveyance']        = $this->input->post('conveyance');
            $data['provident_fund']        = $this->input->post('provident_fund');
            $data['esi']        = $this->input->post('esi');
            $data['loan']        = $this->input->post('loan');
            $data['profession']        = $this->input->post('profession');
            $data['TSD_IT']        = $this->input->post('tsd_it');
            $data['incentive']        = $this->input->post('incentive');
            $data['official_charge']        = $this->input->post('official_charge');
            $data['status']        = $this->input->post('status');
            $data['date']    = convertdate($this->input->post('date'));
            $data['payment_date']    = convertdate($this->input->post('payment_month'));
            $data['method']         = $this->input->post('method');
            $data['account_number']     = $this->db->get_where('employees', array('category_id' => $param2))->row()->account_number;
            $data['bank_name']       = $this->db->get_where('employees', array('category_id' => $param2))->row()->bank_name;

            $this->db->insert('employ_salary', $data);

            $this->session->set_flashdata('flash_message' , get_phrase('salary_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('salary_id', $param2);
            $this->db->delete('employ_salary');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/employ_salary/', 'refresh');
        }
        $page_data['page_name']  = 'employ_salary';
        $page_data['page_title'] = get_phrase('Employee_salary');
        $this->load->view('backend/index', $page_data);
    }
    function authentic_salary($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'add') {
            $data['employee_id']        = $param2;
            $data['basic']        = $this->input->post('basic');
            $data['HRA']        = $this->input->post('HRA');
            $data['conveyance']        = $this->input->post('conveyance');
            $data['provident_fund']        = $this->input->post('provident_fund');
            $data['esi']        = $this->input->post('esi');
            $data['authentic']        = 1;
            $data['authentic_type']        = $this->input->post('authentic_type');
            $data['loan']        = $this->input->post('loan');
            $data['profession']        = $this->input->post('profession');
            $data['TSD_IT']        = $this->input->post('tsd_it');
            $data['incentive']        = $this->input->post('incentive');
            $data['official_charge']        = $this->input->post('official_charge');
            $data['status']        = $this->input->post('status');
            $data['date']    = convertdate($this->input->post('date'));
            $data['payment_date']    = convertdate($this->input->post('payment_month'));
            $data['method']         = $this->input->post('method');
            if ($data['authentic_type'] =='1') {
                $data['account_number']     = $this->db->get_where('hr_manager', array('employee_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('hr_manager', array('employee_id' => $param2))->row()->bank_name;
            }if ($data['authentic_type'] =='2') {
                $data['account_number']     = $this->db->get_where('accountent', array('employee_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('accountent', array('employee_id' => $param2))->row()->bank_name;
            }if ($data['authentic_type'] =='3') {
                $data['account_number']     = $this->db->get_where('credit_manager', array('employee_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('credit_manager', array('employee_id' => $param2))->row()->bank_name;
            }if ($data['authentic_type'] =='4') {
                $data['account_number']     = $this->db->get_where('branch_manager', array('employee_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('branch_manager', array('employee_id' => $param2))->row()->bank_name;
            }if ($data['authentic_type'] =='5') {
                $data['account_number']     = $this->db->get_where('business_manager', array('employee_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('business_manager', array('employee_id' => $param2))->row()->bank_name;
            }else{
                $data['account_number']     = $this->db->get_where('employees', array('category_id' => $param2))->row()->account_number;
                $data['bank_name']       = $this->db->get_where('employees', array('category_id' => $param2))->row()->bank_name; 
            }
            $this->db->insert('employ_salary', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('salary_added_successfully'));
            if ($this->input->post('authentic_type')=='1') {
                redirect(base_url() . 'index.php?hr_manager/hr_manager/', 'refresh');
            }if ($this->input->post('authentic_type')=='2') {
                redirect(base_url() . 'index.php?hr_manager/accountent/', 'refresh');
            }if ($this->input->post('authentic_type')=='3') {
                redirect(base_url() . 'index.php?hr_manager/credit_manager/', 'refresh');
            }if ($this->input->post('authentic_type')=='4') {
                redirect(base_url() . 'index.php?hr_manager/branch_manager/', 'refresh');
            }if ($this->input->post('authentic_type')=='5') {
                redirect(base_url() . 'index.php?hr_manager/business_manager/', 'refresh');
            }else{
               redirect(base_url() . 'index.php?hr_manager/employees/', 'refresh'); 
            }
        }
        if ($param1 == 'delete') {
            $this->db->where('salary_id', $param2);
            $this->db->delete('employ_salary');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?hr_manager/employ_salary/', 'refresh');
        }
        $page_data['page_name']  = 'employ_salary';
        $page_data['page_title'] = get_phrase('Employee_salary');
        $this->load->view('backend/index', $page_data);
    }



    function get_employee_salary($param1 = '') {
        if ($this->session->userdata('hr_manager_login') != 1)
            redirect('login', 'refresh');
        $salary = $this->db->get_where('employee_salary', array('employee_id' => $param1 ))->result_array();
        foreach ($salary as $row) {
            echo '<tr><td>' . $this->db->get_where('employees',array('category_id' => $row['employee_id']))->row()->name  . '</td><td>' . $row['amount'] . '</td><td>' . $row['date'] . '</td>'.$row['account_number'].'</tr>';
        }
    }


    /****MANAGE TEACHERS*****/
    function agent($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');
    	if ($param1 == 'create') {
    		$data['name']        = $this->input->post('name');
    		$data['birthday']    = $this->input->post('birthday');
    		$data['sex']         = $this->input->post('sex');
    		$data['address']     = $this->input->post('address');
    		$data['phone']       = $this->input->post('phone');
    		$data['email']       = $this->input->post('email');
            $data['aadhar']         = $this->input->post('aadhar');
            $data['pan_number']     = $this->input->post('pan_number');
            $data['account_number']       = $this->input->post('account_number');
            $data['ifsc_code']       = $this->input->post('ifsc_code');
            $data['bank_name']         = $this->input->post('bank_name');
            $data['bank_address']     = $this->input->post('bank_address');
    		$data['password']    = sha1($this->input->post('password'));
    		$this->db->insert('employee', $data);
    		$employee_id = $this->db->insert_id();
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $employee_id . '.jpg');
    		$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?hr_manager/agent/', 'refresh');
        }
        if ($param1 == 'do_update') {
        	$data['name']        = $this->input->post('name');
        	$data['birthday']    = $this->input->post('birthday');
        	$data['sex']         = $this->input->post('sex');
        	$data['address']     = $this->input->post('address');
        	$data['phone']       = $this->input->post('phone');
        	$data['email']       = $this->input->post('email');
            $data['password']    = sha1($this->input->post('password'));

        	$this->db->where('employee_id', $param2);
        	$this->db->update('employee', $data);
        	move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employee_image/' . $param2 . '.jpg');
        	$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
        	redirect(base_url() . 'index.php?hr_manager/agent/', 'refresh');
        } else if ($param1 == 'personal_profile') {
        	$page_data['personal_profile']   = true;
        	$page_data['current_teacher_id'] = $param2;
        }
        if ($param1 == 'delete') {
        	$this->db->where('employee_id', $param2);
        	$this->db->delete('employee');
        	$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
        	redirect(base_url() . 'index.php?hr_manager/agent/', 'refresh');
        }
        $page_data['employee']   = $this->db->get('employee')->result_array();
        $page_data['page_name']  = 'agent';
        $page_data['page_title'] = get_phrase('manage_Agent');
        $this->load->view('backend/index', $page_data);
    }
    
       /****MANAGE CLASSES*****/
   


    
    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');
    	if ($param1 == 'create') {
    		$data['name']         = $this->input->post('name');
    		$data['name_numeric'] = $this->input->post('name_numeric');
    		$this->db->insert('class', $data);
    		$class_id = $this->db->insert_id();
            //create a section by default
    		$data2['class_id']  =   $class_id;
    		$data2['name']      =   'A';
    		$this->db->insert('section' , $data2);

    		$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
    		redirect(base_url() . 'index.php?hr_manager/classes/', 'refresh');
    	}
    	if ($param1 == 'do_update') {
    		$data['name']         = $this->input->post('name');
    		$data['name_numeric'] = $this->input->post('name_numeric');

    		$this->db->where('class_id', $param2);
    		$this->db->update('class', $data);
    		$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
    		redirect(base_url() . 'index.php?hr_manager/classes/', 'refresh');
    	} else if ($param1 == 'edit') {
    		$page_data['edit_data'] = $this->db->get_where('class', array(
    			'class_id' => $param2
    		))->result_array();
    	}
    	if ($param1 == 'delete') {
    		$this->db->where('class_id', $param2);
    		$this->db->delete('class');
    		$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
    		redirect(base_url() . 'index.php?hr_manager/classes/', 'refresh');
    	}
    	$page_data['classes']    = $this->db->get('class')->result_array();
    	$page_data['page_name']  = 'class';
    	$page_data['page_title'] = get_phrase('manage_category');
    	$this->load->view('backend/index', $page_data);
    }
  

    /****MANAGE SECTIONS*****/
    function section($class_id = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');
        // detect the first class
    	if ($class_id == '')
    		$class_id           =   $this->db->get('class')->first_row()->class_id;

    	$page_data['page_name']  = 'section';
    	$page_data['page_title'] = get_phrase('manage_sub_category');
    	$page_data['class_id']   = $class_id;
    	$this->load->view('backend/index', $page_data);    
    }

    function sections($param1 = '' , $param2 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');
    	if ($param1 == 'create') {
    		$data['name']       =   $this->input->post('name');
    		$data['nick_name']  =   $this->input->post('nick_name');
    		$data['class_id']   =   $this->input->post('class_id');
    		$data['teacher_id'] =   $this->input->post('teacher_id');
    		$this->db->insert('section' , $data);
    		$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
    		redirect(base_url() . 'index.php?hr_manager/section/' . $data['class_id'] , 'refresh');
    	}

    	if ($param1 == 'edit') {
    		$data['name']       =   $this->input->post('name');
    		$data['nick_name']  =   $this->input->post('nick_name');
    		$data['class_id']   =   $this->input->post('class_id');
    		$data['teacher_id'] =   $this->input->post('teacher_id');
    		$this->db->where('section_id' , $param2);
    		$this->db->update('section' , $data);
    		$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
    		redirect(base_url() . 'index.php?hr_manager/section/' . $data['class_id'] , 'refresh');
    	}

    	if ($param1 == 'delete') {
    		$this->db->where('section_id' , $param2);
    		$this->db->delete('section');
    		$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
    		redirect(base_url() . 'index.php?hr_manager/section' , 'refresh');
    	}
    }

    function get_class_section($class_id)
    {
    	$sections = $this->db->get_where('section' , array(
    		'class_id' => $class_id
    	))->result_array();
    	foreach ($sections as $row) {
    		echo '<option value="' . $row['section_id'] . '">' . $row['name'] . '</option>';
    	}
    }

   
      

    function contact_us() {

    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect('login', 'refresh');
    	$page_data['page_name']  = 'contact_us';
    	$page_data['page_title'] = "Contact Us";
    	$this->load->view('backend/index', $page_data); 
    }
    function about_developer() {

    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect('login', 'refresh');
    	$page_data['page_name']  = 'about_developer';
    	$page_data['page_title'] = "About Developer";
    	$this->load->view('backend/index', $page_data); 
    }





    function message($param1 = '', $param2 = '', $param3 = '') {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');
    	if ($param1 == 'single') {
    		$student_id   = $this->input->post('Contact_number');
    		$data['contact_number'] = $this->db->get_where('student',array('student_id' => $student_id))->row()->phone;
    		$data['message'] = $this->input->post('smstext');
    		$message=$this->input->post('smstext');
            $sender="OXFORD"; //ex:INVITE
            $username="freesmswebapp";
            $password="rohit45671234@@";
            $mobile_number=$data['contact_number'];
            $mobile_number=substr($mobile_number,-10);
            $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
            // $url="loggerleet.ddns.net/sgp/smsgateway.php?pass=1337&number=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender);
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_scraped_page = curl_exec($ch);
            curl_close($ch);
            $this->session->set_flashdata('flash_message',"SMS Sent Successfully");
        }
        if ($param1 == 'bulk_sms') {
        	foreach ($this->input->post('student_id') as $id) {
        		$number=$this->db->get_where('student',array('student_id'=>$id))->row()->phone;
        		$number=substr($number,-10);
        		$numbers = $numbers . $number.',';
        	}
        	echo $numbers;
        	$message=$this->input->post('Bulk_SMS');
            $sender="OXFORD"; //ex:INVITE
            $mobile_number=$numbers;
            $username="freesmswebapp";
            $password="rohit45671234@@";
            $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
            // $url="loggerleet.ddns.net/sgp/smsgateway.php?pass=1337&number=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender);
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_scraped_page = curl_exec($ch);
            curl_close($ch);
            $this->session->set_flashdata('flash_message',"SMS Sent Successfully");
        }
        if ($param1 == 'whole_sms') {
        	$array1 = $this->db->query("SELECT `phone` FROM `student`")->result_array();
        	$arr = array_map (function($value){ return $value['phone'];} , $array1);
        	$tmp = implode(', ', $arr);
        	for ($i=0; $i < count($arr); $i++) { 
        		$number=substr($arr[$i],-10);
        		$numbers = $numbers . $number.',';
        	}
        	$message=$this->input->post('Whole_SMS');
            $sender="OXFORD"; //ex:INVITE
            $mobile_number=$numbers;
            $username="freesmswebapp";
            $password="rohit45671234@@";
            $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
            // $url="loggerleet.ddns.net/sgp/smsgateway.php?pass=1337&number=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender);
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_scraped_page = curl_exec($ch);
            curl_close($ch);
            $this->session->set_flashdata('flash_message',"SMS Sent Successfully");
        }
        file_put_contents('sentmessages.txt', $url.PHP_EOL, FILE_APPEND);
        $page_data['message_inner_page_name']   = $param1;
        $page_data['page_name']                 = 'message';
        $page_data['page_title']                = 'Send SMS';
        $this->load->view('backend/index', $page_data);
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');

    	if ($param1 == 'do_update') {

    		$data['description'] = $this->input->post('school_name');
    		$this->db->where('type' , 'school_name');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('school_address');
    		$this->db->where('type' , 'school_address');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('school_contact_no');
    		$this->db->where('type' , 'school_contact_no');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('school_registeration_number');
    		$this->db->where('type' , 'school_registeration_number');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('system_email');
    		$this->db->where('type' , 'system_email');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('system_name');
    		$this->db->where('type' , 'system_name');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('language');
    		$this->db->where('type' , 'language');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('text_align');
    		$this->db->where('type' , 'text_align');
    		$this->db->update('settings' , $data);

    		$data['description'] = $this->input->post('running_year');
    		$this->db->where('type' , 'running_year');
    		$this->db->update('settings' , $data);

    		$this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
    		redirect(base_url() . 'index.php?hr_manager/system_settings/', 'refresh');
    	}
    	if ($param1 == 'upload_logo') {
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
    		$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
    		redirect(base_url() . 'index.php?hr_manager/system_settings/', 'refresh');
    	}
    	if ($param1 == 'change_skin') {
    		$data['description'] = $param2;
    		$this->db->where('type' , 'skin_colour');
    		$this->db->update('settings' , $data);
    		$this->session->set_flashdata('flash_message' , get_phrase('theme_selected')); 
    		redirect(base_url() . 'index.php?hr_manager/system_settings/', 'refresh'); 
    	}
    	$page_data['page_name']  = 'system_settings';
    	$page_data['page_title'] = get_phrase('system_settings');
    	$page_data['settings']   = $this->db->get('settings')->result_array();
    	$this->load->view('backend/index', $page_data);
    }

 
    
    /***** UPDATE PRODUCT *****/
    
    function update( $task = '', $purchase_code = '' ) {

    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');

        // Create update directory.
    	$dir    = 'update';
    	if ( !is_dir($dir) )
    		mkdir($dir, 0777, true);

    	$zipped_file_name   = $_FILES["file_name"]["name"];
    	$path               = 'update/' . $zipped_file_name;

    	move_uploaded_file($_FILES["file_name"]["tmp_name"], $path);

        // Unzip uploaded update file and remove zip file.
    	$zip = new ZipArchive;
    	$res = $zip->open($path);
    	if ($res === TRUE) {
    		$zip->extractTo('update');
    		$zip->close();
    		unlink($path);
    	}

    	$unzipped_file_name = substr($zipped_file_name, 0, -4);
    	$str                = file_get_contents('./update/' . $unzipped_file_name . '/update_config.json');
    	$json               = json_decode($str, true);



		// Run php modifications
    	require './update/' . $unzipped_file_name . '/update_script.php';

        // Create new directories.
    	if(!empty($json['directory'])) {
    		foreach($json['directory'] as $directory) {
    			if ( !is_dir( $directory['name']) )
    				mkdir( $directory['name'], 0777, true );
    		}
    	}

        // Create/Replace new files.
    	if(!empty($json['files'])) {
    		foreach($json['files'] as $file)
    			copy($file['root_directory'], $file['update_directory']);
    	}

    	$this->session->set_flashdata('flash_message' , get_phrase('product_updated_successfully'));
    	redirect(base_url() . 'index.php?hr_manager/system_settings');
    }


    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');

    	if ($param1 == 'edit_phrase') {
    		$page_data['edit_profile'] 	= $param2;	
    	}
    	if ($param1 == 'update_phrase') {
    		$language	=	$param2;
    		$total_phrase	=	$this->input->post('total_phrase');
    		for($i = 1 ; $i < $total_phrase ; $i++)
    		{
				//$data[$language]	=	$this->input->post('phrase').$i;
    			$this->db->where('phrase_id' , $i);
    			$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
    		}
    		redirect(base_url() . 'index.php?hr_manager/manage_language/edit_phrase/'.$language, 'refresh');
    	}
    	if ($param1 == 'do_update') {
    		$language        = $this->input->post('language');
    		$data[$language] = $this->input->post('phrase');
    		$this->db->where('phrase_id', $param2);
    		$this->db->update('language', $data);
    		$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
    		redirect(base_url() . 'index.php?hr_manager/manage_language/', 'refresh');
    	}
    	if ($param1 == 'add_phrase') {
    		$data['phrase'] = $this->input->post('phrase');
    		$this->db->insert('language', $data);
    		$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
    		redirect(base_url() . 'index.php?hr_manager/manage_language/', 'refresh');
    	}
    	if ($param1 == 'add_language') {
    		$language = $this->input->post('language');
    		$this->load->dbforge();
    		$fields = array(
    			$language => array(
    				'type' => 'LONGTEXT'
    			)
    		);
    		$this->dbforge->add_column('language', $fields);

    		$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
    		redirect(base_url() . 'index.php?hr_manager/manage_language/', 'refresh');
    	}
    	if ($param1 == 'delete_language') {
    		$language = $param2;
    		$this->load->dbforge();
    		$this->dbforge->drop_column('language', $language);
    		$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));

    		redirect(base_url() . 'index.php?hr_manager/manage_language/', 'refresh');
    	}
    	$page_data['page_name']        = 'manage_language';
    	$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
    	$this->load->view('backend/index', $page_data);	
    }

    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url(), 'refresh');

    	if ($operation == 'create') {
    		$this->crud_model->create_backup($type);
    	}
    	if ($operation == 'restore') {
    		$this->crud_model->restore_backup();
    		$this->session->set_flashdata('backup_message', 'Backup Restored');
    		redirect(base_url() . 'index.php?hr_manager/backup_restore/', 'refresh');
    	}
    	if ($operation == 'delete') {
    		$this->crud_model->truncate($type);
    		$this->session->set_flashdata('backup_message', 'Data removed');
    		redirect(base_url() . 'index.php?hr_manager/backup_restore/', 'refresh');
    	}

    	$page_data['page_info']  = 'Create backup / restore from backup';
    	$page_data['page_name']  = 'backup_restore';
    	$page_data['page_title'] = get_phrase('manage_backup_restore');
    	$this->load->view('backend/index', $page_data);
    }

    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');
    	if ($param1 == 'update_profile_info') {
    		$data['name']  = $this->input->post('name');
    		$data['email'] = $this->input->post('email');

    		$this->db->where('hr_manager_id', $this->session->userdata('hr_manager_id'));
    		$this->db->update('hr_manager', $data);
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/hr_manager_image/' . $this->session->userdata('hr_manager_id') . '.jpg');
    		$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
    		redirect(base_url() . 'index.php?hr_manager/manage_profile/', 'refresh');
    	}
    	if ($param1 == 'change_password') {
    		$data['password']             = sha1($this->input->post('password'));
    		$data['new_password']         = sha1($this->input->post('new_password'));
    		$data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));

    		$current_password = $this->db->get_where('hr_manager', array(
    			'hr_manager_id' => $this->session->userdata('hr_manager_id')
    		))->row()->password;
    		if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
    			$this->db->where('hr_manager_id', $this->session->userdata('hr_manager_id'));
    			$this->db->update('hr_manager', array(
    				'password' => $data['new_password']
    			));
    			$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
    		} else {
    			$this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
    		}
    		redirect(base_url() . 'index.php?hr_manager/manage_profile/', 'refresh');
    	}
    	$page_data['page_name']  = 'manage_profile';
    	$page_data['page_title'] = get_phrase('manage_profile');
    	$page_data['edit_data']  = $this->db->get_where('hr_manager', array(
    		'hr_manager_id' => $this->session->userdata('hr_manager_id')
    	))->result_array();
    	$this->load->view('backend/index', $page_data);
    }

    // VIEW QUESTION PAPERS
    function question_paper($param1 = "", $param2 = "")
    {
    	if ($this->session->userdata('hr_manager_login') != 1)
    	{
    		$this->session->set_userdata('last_page', current_url());
    		redirect(base_url(), 'refresh');
    	}

    	$data['page_name']  = 'question_paper';
    	$data['page_title'] = get_phrase('question_paper');
    	$this->load->view('backend/index', $data);
    }

   
}
















