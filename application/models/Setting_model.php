<?php
class Setting_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//-----------------------------------------------------
	public function update_general_setting($data){
		$this->db->where('id', 1);
		$this->db->update('ci_general_settings', $data);
		return true;

	}
	
	
	//---------Blogsettingsupdate--------------------------------------------
	public function update_blog_general_setting($sdata){


		

		if(!empty($sdata)){

			$result = $this->db->get_where('ci_posts',array('post_type ' => "blogsettings"))->row_array();

			if(!empty($result)){

				$postID = $result['ID'];

			}else{

				$data = array(
					'post_author' => '1',
					'menu_order' => 'john.doe@xyz.com',
					'post_content' => '',
					'post_title' => 'Site Settings',
					'post_status' => 'publish',
					'post_type ' => 'blogsettings',
					'post_date' => date('Y-m-d : h:m:s'),
					'post_modified' => date('Y-m-d : h:m:s'),
					);
					
				$this->db->insert('ci_posts',$data);
				$postID = $this->db->insert_id();

			}

			foreach($sdata as $sdatakey=>$sdatavalue){

				$this->update_post_meta($postID,$sdatakey,$sdatavalue);

			}
			
			


		}
		
		//$this->db->where('id', 1);
		//$this->db->update('ci_general_settings', $data);
		return true;

	}
	


	public function update_post_meta($postID,$key,$value){

		
		


		$this->db->where('post_id',$postID);
        $this->db->where('meta_key',$key);
		$q = $this->db->get('ci_postmeta');
		$dataarray = $q->row_array();
		$this->db->reset_query();

		$data['post_id'] = $postID;
		$data['meta_key'] = $key;
		$data['meta_value'] = $value;


		if ( $q->num_rows() > 0 ) 
		{
			
			$this->db->where('meta_id', $dataarray['meta_id'])->update('ci_postmeta', $data);

		} else {
			
			$this->db->insert('ci_postmeta', $data);

		}


	}

	

	public function get_blog_settings(){


		$postresult = $this->db->get_where('ci_posts',array('post_type ' => "blogsettings"))->row_array();
        
		$postmetaresult = $this->db->get_where('ci_postmeta',array('post_id ' => $postresult['ID']))->result_array();

		
		
		return $postmetaresult;
	
	}


	//-----------------------------------------------------
	public function get_general_settings(){
		$this->db->where('id', 1);
        $query = $this->db->get('ci_general_settings');
        return $query->row_array();
	}

	public function get_all_languages()
	{
		$this->db->where('status',1);
		return $this->db->get('ci_language')->result_array();
	}

	/*--------------------------
	   Email Template Settings
	--------------------------*/

	function get_email_templates()
	{
		return $this->db->get('ci_email_templates')->result_array();
	}

	function update_email_template($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('ci_email_templates', $data);
		return true;
	}

	function get_email_template_content_by_id($id)
	{
		return $this->db->get_where('ci_email_templates',array('id' => $id))->row_array();
	}

	function get_email_template_variables_by_id($id)
	{
		return $this->db->get_where('ci_email_template_variables',array('template_id' => $id))->result_array();
	}

	
}
?>