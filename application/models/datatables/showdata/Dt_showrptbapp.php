<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptbapp extends CI_Model 
	{

		var $table = 'trx_bapp a';
		var $column_order = array(null,'appr_code','appr_contract_end','loc_name','cust_name','bapp_code','bapp_date');
		var $column_search = array('appr_code','appr_contract_end','loc_name','cust_name','bapp_code','bapp_date');
		var $order = array('b.appr_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{	
			if ($this->input->post('custid')) 
			{
				$this->db->like('b.cust_id', $this->input->post('custid') );
			}
			if ($this->input->post('locid')) 
			{
				$this->db->like('b.loc_id', $this->input->post('locid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('tgl_start') != null AND $this->input->post('tgl_end') != null ) {
				$this->db->where('a.bapp_date >=', $this->input->post('tgl_start'));
        		$this->db->where('a.bapp_date <=', $this->input->post('tgl_end'));  
			}
			$this->db->from($this->table);
			$this->db->join('trx_approvalbill b','b.appr_id = a.appr_id');
			$this->db->join('master_location c','c.loc_id = b.loc_id');
			$this->db->join('master_customer d','d.cust_id = b.cust_id');
			$this->db->join('master_user e','e.user_id = b.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');			
			$i = 0;
			foreach ($this->column_search as $item)
			{
				if($_POST['search']['value'])
				{			
					if($i===0)
					{
						$this->db->group_start();
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i)
						$this->db->group_end();
				}
				$i++;
			}		
			if(isset($_POST['order']))
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		public function get_datatables()
		{
			$this->_get_datatables_query();
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered()
		{
			$this->_get_datatables_query();
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function count_all()
		{
			$this->db->from($this->table);
			return $this->db->count_all_results();
		}
	}
?>