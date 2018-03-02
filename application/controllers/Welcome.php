<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()

	{
parent::__construct();

	$this->load->model('blog_model');
	}

		public function index(){
			$data['blogs'] = $this->blog_model->blogs();
			$this->load->template('welcome', $data);
			}
  	public function home()
		{
			$data['blogs'] = $this->blog_model->blogs();
			$this->load->template('home', $data);
		}
		public function welcome()
		{
			$data['blog1'] = $this->blog_model->blog1();
			$this->load->template('welcome', $data);
		}
}
