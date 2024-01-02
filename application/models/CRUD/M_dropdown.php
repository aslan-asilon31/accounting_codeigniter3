<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_dropdown extends CI_Model
	{
		//Dropdown Global
		public function getdrop_branch()
		{
			$this->db->where('branch_dtsts','1');
			$que = $this->db->get('master_branch');
			return $que->result();
		}

		public function getdrop_coa()
		{
			$this->db->where('coa_dtsts','1');
			$que = $this->db->get('chart_of_account');
			return $que->result();
		}

		public function getdrop_person()
		{
			$this->db->where('person_dtsts','1');
			$que = $this->db->get('master_person');
			return $que->result();
		}
	}
?>