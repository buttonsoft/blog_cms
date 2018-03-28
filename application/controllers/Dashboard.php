<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : Kang Disman
* Email  : kang.disman@gmail.com
* Blog   : http://dismaninfo.wordpress.com
*/

class Dashboard extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('dashboard_m');
		$this->load->model('article_m');
	}

	public function index() {
		$data['countArticle'] = $this->article_m->count_article();
		$data['title'] = "My Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer', $data);
	}

	
}