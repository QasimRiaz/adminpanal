<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managecontent extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/managecontent_model', 'managecontent');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		
		
		$data['title'] = 'Page List';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/managecontent/index', $data);
		$this->load->view('admin/includes/_footer');
	}


	//---------------------------------------------------------
		
	function list_data(){

		$data['info'] = $this->managecontent->get_all();

		$this->load->view('admin/managecontent/list',$data);
	}

	//-----------------------------------------------------------
	function change_status(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->managecontent->change_status();
	}
	
	//--------------------------------------------------
	function add(){

		$this->rbac->check_operation_access(); // check opration permission

		$data = [];

		if($this->input->post('submit')){
				$this->form_validation->set_rules('menuname', 'Menuname', 'trim|required');
				$this->form_validation->set_rules('menuurl', 'Menuurl', 'trim|required');
				$this->form_validation->set_rules('menuorder', 'Menuorder', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/managecontent/add'),'refresh');
				}
				else{
					$data = array(
						'menuname' => $this->input->post('menuname'),
						'menuurl' => $this->input->post('menuurl'),
						'menuorder' => $this->input->post('menuorder'),
						'status' => $this->input->post('status'),
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);

					$data = $this->security->xss_clean($data);
					$result = $this->managemenu->add_menu($data);
					if($result){

						// Activity Log 
						//$this->activity_model->add_log(4);

						$this->session->set_flashdata('success', 'Menu has been added successfully!');
						redirect(base_url('admin/managemenu'));
					}
				}
			}
			else
			{
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/managecontent/add');
        		$this->load->view('admin/includes/_footer');
			}
	}

	//--------------------------------------------------
	function edit($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		$data = [];

		if($this->input->post('submit')){
			$this->form_validation->set_rules('menuname', 'Menuname', 'trim|required');
				$this->form_validation->set_rules('menuurl', 'Menuurl', 'trim|required');
				$this->form_validation->set_rules('menuorder', 'Menuorder', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/managecontent/edit/'.$id),'refresh');
			}
			else{
				$data = array(
					'post_title' => $this->input->post('menuname'),
					'post_content' => $this->input->post('menuurl'),
					'menu_order' => $this->input->post('menuorder'),
					'post_status' => $this->input->post('status'),
					'post_modified' => date('Y-m-d : h:m:s'),
				);

				

				$data = $this->security->xss_clean($data);
				$result = $this->managemenu->edit_admin($data, $id);

				if($result){
					// Activity Log 
					//$this->activity_model->add_log(5);

					$this->session->set_flashdata('success', 'Menu has been updated successfully!');
					redirect(base_url('admin/managecontent'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/managecontent');
		}
		else{
			$data['admin'] = $this->managemenu->get_menu_by_id($id);
			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/managecontent/edit', $data);
			$this->load->view('admin/includes/_footer');
		}		
	}

	//--------------------------------------------------
	
	function delete($id=''){
	   
		$this->rbac->check_operation_access(); // check opration permission

		$this->managemenu->delete($id);

		// Activity Log 
		//$this->activity_model->add_log(6);

		$this->session->set_flashdata('success','Page has been Deleted Successfully.');	
		redirect('admin/managecontent');
	}
	
}

?>