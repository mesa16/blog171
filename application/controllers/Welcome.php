<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()

	{
parent::__construct();
	$this->load->model('blog_model');
	}
	public function index(){
		$this->load->template('welcome');
}
public function home()
	{
		$data['blogs'] = $this->blog_model->blogs();
		$this->load->template('home', $data);
	}
}
