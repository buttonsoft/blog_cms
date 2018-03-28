<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Category_m extends CI_Model {

	private $table 	 = 'category';
	private $primary = 'category_id'; 

	public function get_all_category() {
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function add_category() {
		$categoryName = $this->input->post('category_name');
		$createdAt = date('Y-m-d H:i:s');
		// if ($categoryName == '') {
		// 	$result['msg'] = "Category name is not empty";
		// } else {
		// 	$result['ms'] = "";
		// }
		$data = array(
			'category_name' => $categoryName,
			'created_at' => $createdAt
			);
		$this->db->insert($this->table, $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function edit_category() {
		$where = $this->input->get($this->primary);
		$this->db->where($this->primary, $where);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function update_category() {
		$where = $this->input->post($this->primary);
		$categoryName = $this->input->post('category_name');
		$createdAt = date('Y-m-d H:i:s');
		$data = array(
			'category_name' => $categoryName,
			'created_at' => $createdAt
			);
		$this->db->where($this->primary, $where);
		$this->db->update($this->table, $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete_category() {
		$where = $this->input->get($this->primary);
		$this->db->where($this->primary, $where);
		$this->db->delete($this->table);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}