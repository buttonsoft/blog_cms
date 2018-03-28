<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Category extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('category_m');
		$this->load->model('article_m');
	}

	public function index() {
		$data['category'] = $this->category_m->get_all_category();
		$data['countArticle'] = $this->article_m->count_article();		
		$data['title'] = "Category";
		$this->load->view('template/header', $data);
		$this->load->view('category/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function get_all_category() {
		$data = $this->category_m->get_all_category();
		echo json_encode($data);
	}

	public function add_category() {
		$data = $this->category_m->add_category();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function edit_category() {
		$data = $this->category_m->edit_category();
		echo json_encode($data);
	}

	public function update_category() {
		$data = $this->category_m->update_category();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function delete_category() {
		$data = $this->category_m->delete_category();
		$msg['success'] = false;
		if ($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}