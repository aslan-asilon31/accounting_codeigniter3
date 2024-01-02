<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//$this->load->model('frontend/M_dashboard','M_dash');
		}

		public function index()
		{
			$data['title']='Match Terpadu';
			$data['menu']='dashboard';
			$data['menulist']='';
			$data['isi']='menu/administrator/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function login_menu()
		{

		}
	}
?>