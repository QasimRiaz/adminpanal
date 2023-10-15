<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints_model extends CI_Model{

	public function get_user_detail(){
		$id = $this->session->userdata('admin_id');
		$query = $this->db->get_where('ci_admin', array('admin_id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_user($data){
		$id = $this->session->userdata('admin_id');
		$this->db->where('admin_id', $id);
		$this->db->update('ci_admin', $data);
		return true;
	}
	//--------------------------------------------------------------------
	public function change_pwd($data, $id){
		$this->db->where('admin_id', $id);
		$this->db->update('ci_admin', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_admin_roles()
	{
		$this->db->from('ci_admin_roles');
		$this->db->where('admin_role_status',1);
		$query=$this->db->get();
		return $query->result_array();
	}

	//-----------------------------------------------------
	function get_admin_by_id($id)
	{
		$this->db->from('ci_admin');
		$this->db->join('ci_admin_roles','ci_admin_roles.admin_role_id=ci_admin.admin_role_id');
		$this->db->where('admin_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_posts');

		//$this->db->join('ci_postmeta','ci_postmeta.post_id=ci_posts.ID');

		$this->db->where('ci_posts.post_type  =', "blogworkorder");

		$this->db->order_by('ci_posts.ID','desc');

		$query = $this->db->get();

		$module = array();
		$postwithpostmeta = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
			foreach($module as $index=>$metavalue){

				$postmeta = $this->getthspostmeta($metavalue['ID']);

				$merged = array_merge($metavalue, $postmeta);
				$postwithpostmeta[] = $merged;

			}
		}

		

		return $postwithpostmeta;
	}


//-----------------------------------------------------
	
	public function getthspostmeta($postid){

		$this->db->from('ci_postmeta');
		$this->db->where('ci_postmeta.post_id  =', $postid);

		$query = $this->db->get();
		$postmeta = array();
		$listofmetavalues = array();

		if ($query->num_rows() > 0) 
		{
			$postmeta = $query->result_array();

			foreach($postmeta as $index=>$metavalue){

				$listofmetavalues[$metavalue['meta_key']] = $metavalue['meta_value'];

			}


		}
		
		return $listofmetavalues;
	}
	
		
	//-----------------------------------------------------
public function add_admin($data){
	$this->db->insert('ci_admin', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_admin($data, $id){
	$this->db->where('admin_id', $id);
	$this->db->update('ci_admin', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('is_active',$this->input->post('status'));
	$this->db->where('admin_id',$this->input->post('id'));
	$this->db->update('ci_admin');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('admin_id',$id);
	$this->db->delete('ci_admin');
} 

}

?>