<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agent extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
   

    public function index()
    {
        if ($this->session->userdata('agent_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('agent_login') == 1)
            redirect(base_url() . 'index.php?agent/dashboard', 'refresh');
    }
    function dashboard()
    {
        if ($this->session->userdata('agent_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('Agent_dashboard');
        $page_data['edit_data']  = $this->db->get_where('agent', array('agent_id' => $this->session->userdata('agent_id')))->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
    function user_add()
    {
        if ($this->session->userdata('agent_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'client_add';
        $page_data['page_title'] = get_phrase('Add_New_Application');
        $this->load->view('backend/index', $page_data);
    }

    function applications($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('agent_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['agent_id']  = $this->session->userdata('agent_id');
        $page_data['page_name']  = 'my_application';
        $page_data['page_title'] = get_phrase('My_application');
        $this->load->view('backend/index', $page_data);
    }
    function first($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('agent_login') != 1)
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
            $data['agent_id']           = $this->session->userdata('agent_id');
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
            redirect(base_url() . 'index.php?agent/dashboard/', 'refresh');
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
            redirect(base_url() . 'index.php?agent/first_approvel/', 'refresh');
        } 

        if ($param2 == 'delete') {
            $this->db->where('application_id', $param3);
            $this->db->delete('user');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?agent/first_approvel/', 'refresh');
        }
    }
    
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('agent_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']        = $this->input->post('name');
            $data['email']       = $this->input->post('email');
            
            $this->db->where('agent_id', $this->session->userdata('agent_id'));
            $this->db->update('agent', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/agent_image/' . $this->session->userdata('agent_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'index.php?agent/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = sha1($this->input->post('password'));
            $data['new_password']         = sha1($this->input->post('new_password'));
            $data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));
            
            $current_password = $this->db->get_where('agent', array(
                'agent_id' => $this->session->userdata('agent_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('agent_id', $this->session->userdata('agent_id'));
                $this->db->update('agent', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'index.php?agent/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('agent', array(
            'agent_id' => $this->session->userdata('agent_id')))->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
   
}