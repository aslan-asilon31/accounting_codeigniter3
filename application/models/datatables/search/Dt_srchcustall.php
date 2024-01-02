<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchcustall extends CI_Model 
	{
		var $table = 'master_customer';
		var $column_order = array(null,'code','name','address');
		var $column_search = array('code','name','address');
		var $order = array('code' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			$this->db->query("select cust_code as code, cust_name as name, cust_address as address from master_customer where cust_dtsts = '1' union all select a.cstin_code as code, b.person_name as name, b.person_address as address from master_cust_intern a join master_person b on b.person_id = a.person_id;");	
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
			// if(isset($_POST['order']))
			// {
			// 	$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			// } 
			// else if(isset($this->order))
			// {
			// 	$order = $this->order;
			// 	$this->db->order_by(key($order), $order[key($order)]);
			// }
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
			// $this->_get_datatables_query();
			$query = $this->_get_datatables_query();
			return $query->num_rows();
		}
		public function count_all()
		{
			$this->db->from($this->table);
			return $this->db->count_all_results();
		}
	}
?>