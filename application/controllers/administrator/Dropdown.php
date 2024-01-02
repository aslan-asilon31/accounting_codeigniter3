<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Dropdown extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_dropdown','dropdown');
		}

		//Dropdown cabang global
		public function drop_branch()
		{
			$data = $this->dropdown->getdrop_branch();
			echo json_encode($data);
		}

		//Dropdown COA global
		public function drop_coa()
		{
			$data = $this->dropdown->getdrop_coa();
			echo json_encode($data);
		}

		//Dropdown person global
		public function drop_person()
		{
			$data = $this->dropdown->getdrop_person();
			echo json_encode($data);
		}
	}
?>