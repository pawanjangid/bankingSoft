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


class business_manager extends CI_Controller
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


	public function index()
	{
		if ($this->session->userdata('business_manager_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('business_manager_login') == 1)
			redirect(base_url() . 'index.php?business_manager/dashboard', 'refresh');
	}

	/***business_manager DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('business_manager_login') != 1)
			redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('business_manager');
		$this->load->view('backend/index', $page_data);
	}

    function first_approvel($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('business_manager_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'first_apporvel';
        $page_data['page_title'] = get_phrase('First_Approvel');
        $this->load->view('backend/index', $page_data);
    }
    function first($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('business_manager_login') != 1)
            redirect('login', 'refresh');
        $running_year = $this->db->get_where('settings' , array(
            'type' => 'running_year'
        ))->row()->description;
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['fname']           = $this->input->post('fathername');
            $data['aadhar']          = $this->input->post('aadhar');
            $data['pan_number']          = $this->input->post('pan_number');
            $data['gender']           = $this->input->post('sex');
            $data['address']          = $this->input->post('address');
            $data['permanent_address'] = $this->input->post('permanent_address');
            $data['phone']          = $this->input->post('number');
            $data['marital_status']          = $this->input->post('marital_status');
            $data['birthday']          = $this->input->post('birthday');
            $data['amount']          = $this->input->post('amount');
            $data['class_id']       = $this->input->post('class_id');
            $data['agent_id']           = $this->input->post('agent_id');
            $data['date']           =  $this->input->post('date');
            $data['application_at']           =  1;
            $data['remark']           =  $this->input->post('remark');
            $this->db->insert('user', $data);
            $insert_id = $this->db->insert_id();
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/applicant_image/photo_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['aadhar_card_front']['tmp_name'], 'uploads/documents/aadhar_card_front_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['aadhar_card_back']['tmp_name'], 'uploads/documents/aadhar_card_back_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['electricity_bill']['tmp_name'], 'uploads/documents/electricity_bill_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['pan_card']['tmp_name'], 'uploads/documents/PAN_Card_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['id_card_front']['tmp_name'], 'uploads/documents/id_card_front_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['id_card_back']['tmp_name'], 'uploads/documents/id_card_back_' . $insert_id . '.jpg');
            

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?business_manager/dashboard/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['fname']           = $this->input->post('fathername');
            $data['aadhar']          = $this->input->post('aadhar');
            $data['pan_number']          = $this->input->post('pan_number');
            $data['gender']           = $this->input->post('sex');
            $data['address']          = $this->input->post('address');
            $data['phone']          = $this->input->post('number');
            $data['birthday']          = $this->input->post('birthday');
            $data['marital_status']          = $this->input->post('marital_status');
            $data['amount']          = $this->input->post('amount');
            $data['date']           =  $this->input->post('date');
            $data['application_at']           =  1;
            $data['remark']           =  $this->input->post('remark');
            $this->db->where('application_id', $param2);
            $this->db->update('user', $data);

            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/applicant_image/photo_' . $param2 . '.jpg');
            move_uploaded_file($_FILES['aadhar_card_front']['tmp_name'], 'uploads/documents/aadhar_card_front_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['aadhar_card_back']['tmp_name'], 'uploads/documents/aadhar_card_back_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['electricity_bill']['tmp_name'], 'uploads/documents/electricity_bill_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['pan_card']['tmp_name'], 'uploads/documents/PAN_Card_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['id_card_front']['tmp_name'], 'uploads/documents/id_card_front_' . $insert_id . '.jpg');
            move_uploaded_file($_FILES['id_card_back']['tmp_name'], 'uploads/documents/id_card_back_' . $insert_id . '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?business_manager/first_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?business_manager/first_approvel/', 'refresh');
        }
    }



    function forward_to_second($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('business_manager_login') != 1)
            redirect('login', 'refresh');
        $running_year = $this->db->get_where('settings' , array(
            'type' => 'running_year'
        ))->row()->description;
        if ($param1 == 'insert') {
            $data['application_id']           = $param2;
            $data['account_number']           = $this->input->post('account_number');
            $data['ifsc_code']           = $this->input->post('ifsc_code');
            $data['bank_name']          = $this->input->post('bank_name');
            $data['bank_address']          = $this->input->post('bank_address');
            $data['bill_k_number']           = $this->input->post('bill_k_number');
            $data['id_number']          = $this->input->post('id_number');
            $data['check_number']           = $this->input->post('check_number');
            $data['discussion']          = $this->input->post('discussion');
            $data['FI_report']          = $this->input->post('FI_report');
            $data2['application_at']           =  2;
            $data['cibil_score']          = $this->input->post('cibil_score');
            $data2['remark']           =  $this->input->post('remark');
            $data['previous_loan'] = $this->input->post('loan_running');
            if ($data['previous_loan'] == 'yes') {
                $data['previous_loan_amount'] = $this->input->post('loan_amount');
                $data['loan_date'] = $this->input->post('loan_date');
                $data['emi_amount'] = $this->input->post('emi_amount');
                $data['emi_type'] = $this->input->post('emi_type');
            }

            $count = 0;
            foreach ($this->input->post('visit_photo') as $id) {
                 move_uploaded_file($_FILES[$id[$count]]['tmp_name'], 'uploads/visit_document/visit_photo_' . $param2 . '_' . $count . '.jpg');  
              $count = $count +1;
            }

            $count = 0;
            foreach ($this->input->post('other_document') as $id) {
                 move_uploaded_file($_FILES[$id[$count]]['tmp_name'], 'uploads/other_document/other_doc_' . $param2 . '_' . $count . '.jpg');  
              $count = $count +1;
            }
            $this->db->insert('loan_detail', $data);
            $this->db->where('application_id', $param2);
            $this->db->update('user', $data2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?business_manager/second_approvel/', 'refresh');
        }
        if ($param1 == 'do_update') {

            $data['account_number']           = $this->input->post('account_number');
            $data['ifsc_code']           = $this->input->post('ifsc_code');
            $data['bank_name']          = $this->input->post('bank_name');
            $data['bank_address']          = $this->input->post('bank_address');
            $data['bill_k_number']           = $this->input->post('bill_k_number');
            $data['discussion']          = $this->input->post('discussion');
            $data['FI_report']          = $this->input->post('FI_report');
            $data2['application_at']           =  2;
            $data['cibil_score']          = $this->input->post('cibil_score');
            $data['remark']           =  $this->input->post('remark');
            $data['previous_loan'] = $this->input->post('loan_running');
            if ($data['previous_loan'] = 'yes') {
                $data['loan_amount'] = $this->input->post('loan_amount');
                $data['date'] = $this->input->post('date');
                $data['emi_amount'] = $this->input->post('emi_amount');
                $data['emi_type'] = $this->input->post('emi_type');
            }
            $this->db->where('application_id', $param2);
            $this->db->update('user', $data);
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?business_manager/second_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?business_manager/first_approvel/' . $param1, 'refresh');
        }
    }
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('business_manager_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');
    	if ($param1 == 'update_profile_info') {
    		$data['name']  = $this->input->post('name');
    		$data['email'] = $this->input->post('email');

    		$this->db->where('employee_id', $this->session->userdata('employee_id'));
    		$this->db->update('business_manager', $data);
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/business_manager_image/' . $this->session->userdata('employee_id') . '.jpg');
    		$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
    		redirect(base_url() . 'index.php?business_manager/manage_profile/', 'refresh');
    	}
    	if ($param1 == 'change_password') {
    		$data['password']             = sha1($this->input->post('password'));
    		$data['new_password']         = sha1($this->input->post('new_password'));
    		$data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));

    		$current_password = $this->db->get_where('business_manager', array(
    			'employee_id' => $this->session->userdata('employee_id')
    		))->row()->password;
    		if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
    			$this->db->where('employee_id', $this->session->userdata('employee_id'));
    			$this->db->update('business_manager', array(
    				'password' => $data['new_password']
    			));
    			$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
    		} else {
    			$this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
    		}
    		redirect(base_url() . 'index.php?business_manager/manage_profile/', 'refresh');
    	}
    	$page_data['page_name']  = 'manage_profile';
    	$page_data['page_title'] = get_phrase('manage_profile');
    	$page_data['edit_data']  = $this->db->get_where('business_manager', array(
    		'employee_id' => $this->session->userdata('employee_id')
    	))->result_array();
    	$this->load->view('backend/index', $page_data);
    }

}
















