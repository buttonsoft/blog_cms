<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Article extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('article_m');
	}

	public function index() {
		$data['article'] = $this->article_m->get_all_article();
		$data['countArticle'] = $this->count_article();
		// $data['countArticle'] = $this->article_m->count_article();
		$data['title'] = "Article";
		$this->load->view('template/header', $data);
		$this->load->view('article/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function count_article() {
		$data = $this->article_m->count_article();
		echo json_encode($data);
	}

	public function get_all_article() {
		$data = $this->article_m->get_all_article();
		echo json_encode($data);
	}

	public function add_article() {
		$data = $this->article_m->add_article();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function edit_article() {
		$data = $this->article_m->edit_article();
		echo json_encode($data);
	}

	public function update_article() {
		$data = $this->article_m->update_article();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function delete_article() {
		$data = $this->article_m->delete_article();
		$msg['success'] = false;
		if ($data) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}
