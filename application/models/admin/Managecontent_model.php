<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managecontent_model extends CI_Model{

	
	
	//--------------------------------------------------------------------
	
	function get_menu_by_id($id)
	{
		$this->db->from('ci_posts');
		
		$this->db->where('ID',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_posts');
		$this->db->where('post_type','blogmainmenu');
		$this->db->order_by('ci_posts.menu_order','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_menu($data){


	$menuarray = array(

		'post_author' => '1',
		'menu_order' => $data['menuorder'],
		'post_content' => $data['menuurl'],
		'post_title' => $data['menuname'],
		'post_status' => $data['status'],
		'post_type ' => 'blogmainmenu',
		'post_date' => $data['created_at'],
		'post_modified' => $data['updated_at']
		
		);


	$this->db->insert('ci_posts', $menuarray);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_admin($data, $id){
	$this->db->where('ID', $id);
	$this->db->update('ci_posts', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('post_status',$this->input->post('status'));
	$this->db->where('ID',$this->input->post('id'));
	$this->db->update('ci_posts');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('ID',$id);
	$this->db->delete('ci_posts');
} 

}

?>