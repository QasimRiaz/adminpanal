<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin_model', 'admin');
		$this->load->model('Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		$this->session->set_userdata('filter_type',$type);
		$this->session->set_userdata('filter_keyword','');
		$this->session->set_userdata('filter_status','');
		
		$data['admin_roles'] = $this->admin->get_admin_roles();
		
		$data['title'] = 'Admin List';

		$this->load->view('includes/_header');
		$this->load->view('user/index', $data);
		$this->load->view('includes/_footer');
	}

	//---------------------------------------------------------
	function filterdata(){

		$this->session->set_userdata('filter_type',$this->input->post('type'));
		$this->session->set_userdata('filter_status',$this->input->post('status'));
		$this->session->set_userdata('filter_keyword',$this->input->post('keyword'));
	}

	//--------------------------------------------------		
	function list_data(){

		$data['info'] = $this->admin->get_all();

		$this->load->view('user/list',$data);
	}

	//-----------------------------------------------------------
	function change_status(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin->change_status();
	}
	
	//--------------------------------------------------
	function add(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles']=$this->admin->get_admin_roles();

		if($this->input->post('submit')){
				// $this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|is_unique[ci_admin.username]|required');
				// $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
				// $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				// $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
				// $this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				// $this->form_validation->set_rules('password', 'Password', 'trim|required');
				// $this->form_validation->set_rules('role', 'Role', 'trim|required');
				// if ($this->form_validation->run() == FALSE) {
				// 	$data = array(
				// 		'errors' => validation_errors()
				// 	);
				// 	$this->session->set_flashdata('errors', $data['errors']);
				// 	redirect(base_url('add'),'refresh');
				// }
				// else{
					$data = array(
						'admin_role_id' => $this->input->post('role'),
						'username' => $this->input->post('username'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'company_name' => $this->input->post('company_name'),
						'designation' => $this->input->post('designation'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_active' => 1,
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->admin->add_admin($data);
					if($result){

						// Activity Log 
						$this->activity_model->add_log(4);

						$this->session->set_flashdata('success', 'Admin has been added successfully!');
						redirect(base_url('admin'));
					}
				//}
			}
			else
			{
				$this->load->view('includes/_header', $data);
        		$this->load->view('user/add');
        		$this->load->view('includes/_footer');
			}
	}

	//--------------------------------------------------
	function edit($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		if($this->input->post('submit')){
			// $this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|required');
			// $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
			// $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			// $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
			// $this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
			// $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]');
			// $this->form_validation->set_rules('role', 'Role', 'trim|required');
			// if ($this->form_validation->run() == FALSE) {
			// 	$data = array(
			// 		'errors' => validation_errors()
			// 	);
			// 	$this->session->set_flashdata('errors', $data['errors']);
			// 	redirect(base_url('edit/'.$id),'refresh');
			// }
			//else{
				$data = array(
					'admin_role_id' => $this->input->post('role'),
					'username' => $this->input->post('username'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'company_name' => $this->input->post('company_name'),
					'designation' => $this->input->post('designation'),
					'email' => $this->input->post('email'),
					'mobile_no' => $this->input->post('mobile_no'),
					'is_active' => 1,
					'updated_at' => date('Y-m-d : h:m:s'),
				);

				if($this->input->post('password') != '')
				$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

				$data = $this->security->xss_clean($data);
				$result = $this->admin->edit_admin($data, $id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(5);

					$this->session->set_flashdata('success', 'Admin has been updated successfully!');
					redirect(base_url('user/'));
				}
			//}
		}
		elseif($id==""){
			redirect('admin');
		}
		else{
			$data['admin'] = $this->admin->get_admin_by_id($id);
			
			$this->load->view('includes/_header');
			$this->load->view('user/edit', $data);
			$this->load->view('includes/_footer');
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

		$this->admin->delete($id);

		// Activity Log 
		$this->activity_model->add_log(6);

		$this->session->set_flashdata('success','User has been Deleted Successfully.');	
		redirect('admin');
	}
	
}

?>