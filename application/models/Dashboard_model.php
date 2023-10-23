<?php
	class Dashboard_model extends CI_Model{

		public function get_all_users(){
			return $this->db->count_all('ci_users');
		}
		public function get_active_users(){
			$this->db->where('is_active', 1);
			return $this->db->count_all_results('ci_users');
		}
		public function get_deactive_users(){
			$this->db->where('is_active', 0);
			return $this->db->count_all_results('ci_users');
		}


		public function get_all_workorders(){

			$id = $this->session->userdata('admin_id');
			$roleId = $this->session->userdata('admin_role_id');

			if($roleId == 2){

				$this->db->where('ci_posts.post_author  =', $id);

			}
			$this->db->where('ci_posts.post_type  =', "blogworkorder");
			return $this->db->count_all_results('ci_posts');


		}

		public function get_all_completed_workorders(){

			$id = $this->session->userdata('admin_id');
			$roleId = $this->session->userdata('admin_role_id');

			
			$this->db->from('ci_posts');
			$this->db->where('ci_posts.post_type  =', "blogworkorder");
			if($roleId == 2){

				$this->db->where('ci_posts.post_author  =', $id);

			}

			$this->db->join('ci_postmeta', 'ci_posts.ID = ci_postmeta.post_id', 'inner');
			$this->db->where('ci_postmeta.meta_key', 'comstatus');
    		$this->db->where('ci_postmeta.meta_value', 'closed');


			$query = $this->db->get();
			return count($query->result());


		}
	}

?>
