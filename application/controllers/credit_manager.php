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


class credit_manager extends CI_Controller
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

	/***default functin, redirects to login page if no credit_manager logged in yet***/
	public function index()
	{
		if ($this->session->userdata('credit_manager_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('credit_manager_login') == 1)
			redirect(base_url() . 'index.php?credit_manager/dashboard', 'refresh');
	}

	/***credit_manager DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('credit_manager_login') != 1)
			redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('credit_manager_dashboard');
		$this->load->view('backend/index', $page_data);
	}

    function first($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
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
            redirect(base_url() . 'index.php?credit_manager/dashboard/', 'refresh');
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
            redirect(base_url() . 'index.php?credit_manager/first_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?credit_manager/first_approvel/', 'refresh');
        }
    }
     function confirm($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
            redirect('login', 'refresh');
    
        if ($param1 == 'send') {
            $data['application_at']           =  5;
            $this->db->where('application_id', $param2);
            $this->db->update('user', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?credit_manager/history/', 'refresh');
        }
    }

    function second($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
            redirect('login', 'refresh');
        $running_year = $this->db->get_where('settings' , array(
            'type' => 'running_year'
        ))->row()->description;
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['fname']           = $this->input->post('fname');
            $data['phone']          = $this->input->post('phone');
            $data['aadhar']          = $this->input->post('aadhar');
            $data['pan_number']          = $this->input->post('pan_number');
            $data['address']          = $this->input->post('address');
            $data['amount']          = $this->input->post('amount');
            $data['agent_id']           = $this->input->post('agent_id');
            $data['address']           =  $this->input->post('address');
            $data['remark']           =  $this->input->post('remark');
            $data2['account_number']           = $this->input->post('account_number');
            $data2['ifsc_code']           = $this->input->post('ifsc_code');
            $data2['bank_name']          = $this->input->post('bank_name');
            $data2['bank_address']          = $this->input->post('bank_address');
            $data2['bill_k_number']           = $this->input->post('bill_k_number');
            $data2['discussion']          = $this->input->post('discussion');
            $data2['FI_report']          = $this->input->post('FI_report');
            $data2['cibil_score']          = $this->input->post('cibil_score');
            $data2['previous_loan'] = $this->input->post('loan_running');
            if ($data2['previous_loan'] == 'yes') {
                $data2['previous_loan_amount'] = $this->input->post('loan_amount');
                $data2['loan_date'] = $this->input->post('loan_date');
                $data2['emi_amount'] = $this->input->post('emi_amount');
                $data2['emi_type'] = $this->input->post('emi_type');
            }
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/applicant_image/' . $param2 . '.jpg');
            $this->db->where('application_id', $param2);
            $this->db->insert('user', $data);
            $this->db->where('application_id', $param2);
            $this->db->update('loan_detail', $data2);

            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
        }
    }


        function co_applicant($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'add') {
            $data['application_id'] = $param2;
            $data['co_applicant_type'] = $this->input->post('co_applicant_type');
            $data['name'] = $this->input->post('name');
            $data['fathername']  = $this->input->post('fathername');
            $data['address']  = $this->input->post('address');
            $data['contact_number'] = $this->input->post('phone');
            $data['date_of_birth']  = $this->input->post('date_of_birth');
            $data['aadhar_number']  = $this->input->post('aadhar');
            $data['pan_number']   = $this->input->post('pan_number');
            $data['gender'] = $this->input->post('sex');
            $data['account_number'] = $this->input->post('account_number');
            $data['bank_name'] = $this->input->post('bank_name');
            $data['ifsc_code']  =  $this->input->post('ifsc_code');
            $data['bank_address'] = $this->input->post('bank_address');
            $data['cibil_score']          = $this->input->post('cibil_score');
            
            $this->db->insert('co_applicant', $data);
            $coapplicant_id = $this->db->insert_id();
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/co_applicant/photo_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['aadhar_card']['tmp_name'], 'uploads/co_applicant/aadhar_card_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['aadhar_card_back']['tmp_name'], 'uploads/co_applicant/aadhar_card_back_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['pan_card']['tmp_name'], 'uploads/co_applicant/pan_card_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['id_card']['tmp_name'], 'uploads/co_applicant/id_card_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['id_card_back']['tmp_name'], 'uploads/co_applicant/id_card_back_' . $coapplicant_id . '.jpg');
            move_uploaded_file($_FILES['banking']['tmp_name'], 'uploads/co_applicant/banking_' . $coapplicant_id . '.jpg');

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
        }

        if ($param2 == 'delete') {
            $this->db->where('co_applicant_id', $param3);
            $this->db->delete('co_applicant');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?credit_manager/first_approvel/' . $param1, 'refresh');
        }
    }

    function forward_to_second($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
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
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
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
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?credit_manager/first_approvel/' . $param1, 'refresh');
        }
    }
    function upload_application($param1 = '' , $param2 = '') {
        if ($this->session->userdata('credit_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'upload') {
        
            move_uploaded_file($_FILES['check']['tmp_name'], 'uploads/documents/check_' . $param2 . '.jpg');
            move_uploaded_file($_FILES['bank_passbook']['tmp_name'], 'uploads/documents/bank_passbook_' . $param2 . '.jpg');

            $files = $_FILES['file_name'];
            $this->load->library('upload');
            $config['upload_path']   =  'uploads/properties/';
            $config['allowed_types'] =  '*';
            $_FILES['file_name']['name']     = $files['name'];
            $_FILES['file_name']['type']     = $files['type'];
            $_FILES['file_name']['tmp_name'] = $files['tmp_name'];
            $_FILES['file_name']['size']     = $files['size'];
            $this->upload->initialize($config);
            $this->upload->do_upload('file_name');
            $name=$this->db->get_where('user', array('application_id' =>  $param2))->row()->name;
            $data['file_name'] = $_FILES['file_name']['name'];
            $this->db->where('application_id',$param2);
            $this->db->update('loan_detail',$data);
            move_uploaded_file($_FILES['signature']['tmp_name'], 'uploads/documents/signature_' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('Data_Uploads_successfully'));
            redirect(base_url() . 'index.php?credit_manager/second_approvel/', 'refresh');
        }
        if ($param1 == 'forward') {
            $data['application_at']           =  3;
            $this->db->where('application_id', $param2);
            $this->db->update('user', $data);
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?credit_manager/final_approvel/', 'refresh');
        } 
    }

    function second_approvel($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('credit_manager_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'second_approvel';
        $page_data['page_title'] = get_phrase('Second_Approvel');
        $this->load->view('backend/index', $page_data);
    }

    function final_approvel($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('credit_manager_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'final_approvel';
        $page_data['page_title'] = get_phrase('final_Approvel');
        $this->load->view('backend/index', $page_data);
    }

    function approve($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('credit_manager_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'insert') {
            $data['application_id']           = $param2;
            $data['sanction_loan']           = $this->input->post('sanction_loan');
            $data['date']          = convertdate($this->input->post('date'));
            $data['date_first_emi']           = $this->input->post('date_of_first_emi');
            $data['rate_of_interest']          = $this->input->post('rate_of_interest');
            $data['number_of_emi']          = $this->input->post('number_of_emi');
            $data['processing_fee']          = $this->input->post('processing_fee');
            $data['technical_charges']           =  $this->input->post('technical_charge');
            $data['emi_mode'] = $this->input->post('emi_mode');
            $data['advance_emi'] = $this->input->post('advance_emi');
            $data['pre_emi'] = $this->input->post('pre_emi');
            $this->db->insert('approve', $data);
            $approved_id = $this->db->insert_id();
            $data2['application_at'] = 4;
            $this->db->where('application_id', $param2);
            $this->db->update('user',$data2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?credit_manager/approved/', 'refresh');
        }
                if ($param1 == 'do_update') {
            $data['sanction_loan']           = $this->input->post('sanction_loan');
            $data['date']          = convertdate($this->input->post('date'));
            $data['date_first_emi']           = $this->input->post('date_of_first_emi');
            $data['rate_of_interest']          = $this->input->post('rate_of_interest');
            $data['number_of_emi']          = $this->input->post('number_of_emi');
            $data['processing_fee']          = $this->input->post('processing_fee');
            $data['technical_charges']           =  $this->input->post('technical_charge');
            $data['emi_mode'] = $this->input->post('emi_mode');
            $data['advance_emi'] = $this->input->post('advance_emi');
            $data['pre_emi'] = $this->input->post('pre_emi');
            $this->db->where('application_id', $param2);
            $this->db->update('approve', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?credit_manager/approved/', 'refresh');
        }

        if ($param1 == 'delete') {
            
            $delete = $this->db->get_where('approve', array('application_id' => $param2))->result_array();
            foreach ($delete as $key) {
                $data['account_number'] = $key['approve_id'];
                $data['sanction_loan'] = $key['sanction_loan'];
                $data['date'] = $key['date'];
            }
            $data['reason'] = $this->input->post('reason');
            $data['name'] = $this->db->get_where('user', array('application_id' => $param2))->row()->name;
            $data['number'] = $this->db->get_where('user', array('application_id' => $param2))->row()->phone;
            $this->db->insert('deleted',$data);
            $this->db->where('application_id', $param2);
            $this->db->delete('user');
            $this->db->where('application_id', $param2);
            $this->db->delete('loan_detail');
            $this->db->where('application_id', $param2);
            $this->db->delete('approve');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?credit_manager/approved/', 'refresh');
        }
    }

    function approved($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('credit_manager_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'approved';
        $page_data['page_title'] = get_phrase('Approved');
        $this->load->view('backend/index', $page_data);
    }

    function contact_us() {

    	if ($this->session->userdata('credit_manager_login') != 1)
    		redirect('login', 'refresh');
    	$page_data['page_name']  = 'contact_us';
    	$page_data['page_title'] = "Contact Us";
    	$this->load->view('backend/index', $page_data); 
    }
    function about_developer() {

    	if ($this->session->userdata('credit_manager_login') != 1)
    		redirect('login', 'refresh');
    	$page_data['page_name']  = 'about_developer';
    	$page_data['page_title'] = "About Developer";
    	$this->load->view('backend/index', $page_data); 
    }

    
    function update( $task = '', $purchase_code = '' ) {

    	if ($this->session->userdata('credit_manager_login') != 1)
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
    	redirect(base_url() . 'index.php?credit_manager/system_settings');
    }

    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
    	if ($this->session->userdata('credit_manager_login') != 1)
    		redirect(base_url() . 'index.php?login', 'refresh');
    	if ($param1 == 'update_profile_info') {
    		$data['name']  = $this->input->post('name');
    		$data['email'] = $this->input->post('email');

    		$this->db->where('employee_id', $this->session->userdata('employee_id'));
    		$this->db->update('credit_manager', $data);
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/credit_manager_image/' . $this->session->userdata('credit_manager_id') . '.jpg');
    		$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
    		redirect(base_url() . 'index.php?credit_manager/manage_profile/', 'refresh');
    	}
    	if ($param1 == 'change_password') {
    		$data['password']             = sha1($this->input->post('password'));
    		$data['new_password']         = sha1($this->input->post('new_password'));
    		$data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));

    		$current_password = $this->db->get_where('credit_manager', array(
    			'employee_id' => $this->session->userdata('employee_id')
    		))->row()->password;
    		if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
    			$this->db->where('employee_id', $this->session->userdata('employee_id'));
    			$this->db->update('credit_manager', array(
    				'password' => $data['new_password']
    			));
    			$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
    		} else {
    			$this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
    		}
    		redirect(base_url() . 'index.php?credit_manager/manage_profile/', 'refresh');
    	}
    	$page_data['page_name']  = 'manage_profile';
    	$page_data['page_title'] = get_phrase('manage_profile');
    	$page_data['edit_data']  = $this->db->get_where('credit_manager', array(
    		'employee_id' => $this->session->userdata('employee_id')
    	))->result_array();
    	$this->load->view('backend/index', $page_data);
    }

}
















