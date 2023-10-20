<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/complaints_model', 'complaints');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		$this->session->set_userdata('filter_type',$type);
		$this->session->set_userdata('filter_keyword','');
		$this->session->set_userdata('filter_status','');
		
		$data['admin_roles'] = $this->complaints->get_admin_roles();
		
		$data['title'] = 'Complaints';
		$data['info'] = $this->complaints->get_all();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/complaints/index', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------------
	function filterdata(){

		$this->session->set_userdata('filter_type',$this->input->post('type'));
		$this->session->set_userdata('filter_status',$this->input->post('status'));
		$this->session->set_userdata('filter_keyword',$this->input->post('keyword'));
	}

	//--------------------------------------------------		
	function list_data(){

		$data['info'] = $this->complaints->get_all();

		
		$this->load->view('admin/complaints/list',$data);
	}

	//-----------------------------------------------------------
	function change_status(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->complaints->change_status();
	}
	
	//--------------------------------------------------
	function add(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles']=$this->complaints->get_admin_roles();

		

		if($this->input->post('submit')){
				
				$this->form_validation->set_rules('reportedby', 'Reported By', 'trim|required');
				$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
				$this->form_validation->set_rules('mobileno', 'Mobile Number', 'trim|required');
				$this->form_validation->set_rules('loction', 'Site', 'trim|required');
				$this->form_validation->set_rules('subloction', 'Location', 'trim|required');
				$this->form_validation->set_rules('subloction2', 'Sub Location', 'trim|required');
				$this->form_validation->set_rules('comstatus', 'Status', 'trim|required');
				$this->form_validation->set_rules('comtype', 'Type', 'trim|required');
				$this->form_validation->set_rules('date', 'Date&time', 'trim|required');
				$this->form_validation->set_rules('tag', 'Tag', 'trim|required');
				
				

				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/complaints/add'),'refresh');
				}
				else{

					$data = array(
						'reportedby' => $this->input->post('reportedby'),
						'designation' => $this->input->post('designation'),
						'mobileno' => $this->input->post('mobileno'),
						'loction' => $this->input->post('loction'),
						'subloction' => $this->input->post('subloction'),
						'subloction2' => $this->input->post('subloction2'),
						'comstatus' =>  $this->input->post('comstatus'),
						'comtype' => $this->input->post('comtype'),
						'tag' => $this->input->post('tag'),
						'created_at' => date('Y-m-d : h:m:s'),
						'workorderdetails' => $this->input->post('workorderdetails'),
						'loctiondetails' => $this->input->post('loctiondetails'),
						'detail' => $this->input->post('detail'),
						'date' => $this->input->post('date'),
					);

					

					if(!empty($_FILES['issuepicture']['name']))
						{
							//$this->functions->delete_file($old_favicon);
							$path="assets/img/";

							$result = $this->functions->file_insert($path, 'issuepicture', 'image', '197152');

							echo '<pre>';
							print_r($result);exit;
							if($result['status'] == 1){
								$data['issuepicture'] = $path.$result['msg'];
							}
							else{
								$this->session->set_flashdata('error', $result['msg']);
								redirect(base_url('admin/complaints/add'), 'refresh');
							}
						}

					$data = $this->security->xss_clean($data);
					$result = $this->complaints->add_new_complaints($data);

					if($result){

						// Activity Log 
						$this->activity_model->add_log(4);
						$this->session->set_flashdata('errors', []);

						$this->session->set_flashdata('success', 'Workorder has been added successfully!');
						redirect(base_url('admin/complaints'));
					}
				}
			}
			else
			{
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/complaints/add');
        		$this->load->view('admin/includes/_footer');
			}
	}

	//--------------------------------------------------
	function edit($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->complaints->get_admin_roles();

		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|required');
			$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]');
			$this->form_validation->set_rules('role', 'Role', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin/edit/'.$id),'refresh');
			}
			else{
				$data = array(
					'admin_role_id' => $this->input->post('role'),
					'username' => $this->input->post('username'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'mobile_no' => $this->input->post('mobile_no'),
					'is_active' => 1,
					'updated_at' => date('Y-m-d : h:m:s'),
				);

				if($this->input->post('password') != '')
				$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

				$data = $this->security->xss_clean($data);
				$result = $this->complaints->edit_admin($data, $id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(5);

					$this->session->set_flashdata('success', 'Admin has been updated successfully!');
					redirect(base_url('admin/admin'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/admin');
		}
		else{
			$data['admin'] = $this->complaints->get_admin_by_id($id);
			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin/edit', $data);
			$this->load->view('admin/includes/_footer');
		}		
	}

	//--------------------------------------------------
	function check_username($id=0){

		$this->db->from('admin');
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('admin_id !='.$id);
		$query=$this->db->get();
		if($query->num_rows() >0)
			echo 'false';
		else 
	    	echo 'true';
    }

    //------------------------------------------------------------
	function delete($id=''){
	   
		$this->rbac->check_operation_access(); // check opration permission

		$this->complaints->delete($id);

		// Activity Log 
		$this->activity_model->add_log(6);

		$this->session->set_flashdata('success','User has been Deleted Successfully.');	
		redirect('admin/admin');
	}
	
}

?>