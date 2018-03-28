<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Dashboard_m extends CI_Model {
	
	private $table = 'category';
	private $primary = 'category_id';

	/**
	 * Get all data category
	 */
	public function get_all_contact() {
		
	}

	/**
	 * Grouping data contact pertanggal
	 */
	// public function group_by_date() {
	// 	$this->db->select('register_date, count(register_date) as total');
	// 	$this->db->group_by('register_date');
	// 	$query = $this->db->get($this->table);
	// 	return $query->result();
	// }

	/**
	 * Get all data contact where date
	 */
	// public function get_all_date() {
	// 	$this->db->group_by('register_date');
	// 	$query = $this->db->get($this->table);
	// 	return $query->result();
	// }

	/**
	 * Count data contact
	 */
	// public function total_rows() {
	// 	return $this->db->count_all($this->table);
	// }

	/**
	 * 
	 */
	// public function fetch_data($limit, $id) {
	// 	$this->db->limit($limit);
	// 	$this->db->where($this->primary, $id);
	// 	$query = $this->db->get($this->table);
	// 	if ($query->num_rows() > 0) {
	// 		foreach ($query->result() as $row) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// 	return false;
	// }


}





















