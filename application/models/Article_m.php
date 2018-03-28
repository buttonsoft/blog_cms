<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Article_m extends CI_Model {

	private $table 	 = 'article';
	private $primary = 'article_id';

	/**
	 * Show all article
	 */
	public function count_article() {
        $query = $this->db->query("SELECT * FROM article");
        $total = $query->num_rows();
        return $total;
    }

	public function get_all_article() {
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function add_article() {
		$articleTitle = $this->input->post('article_title');
		$articlePost = $this->input->post('article_post');
		$createdAt = date('Y-m-d H:i:s');
		// if ($categoryName == '') {
		// 	$result['msg'] = "Category name is not empty";
		// } else {
		// 	$result['ms'] = "";
		// }
		$data = array(
			'article_title' => $articleTitle,
			'article_post' => $articlePost,
			'created_at' => $createdAt
			);
		$this->db->insert($this->table, $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function edit_article() {
		$where = $this->input->get($this->primary);
		$this->db->where($this->primary, $where);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function update_article() {
		$where = $this->input->post($this->primary);
		$articleTitle = $this->input->post('article_title');
		$articlePost = $this->input->post('article_post');
		$createdAt = date('Y-m-d H:i:s');
		$data = array(
			'article_title' => $articleTitle,
			'article_post' => $articlePost,
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

	public function delete_article() {
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