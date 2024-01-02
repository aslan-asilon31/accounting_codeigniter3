<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchcust extends CI_Model 
	{
		var $table = 'master_customer a';
		var $column_order = array(null,'cust_code','cust_name','cust_address');
		var $column_search = array('cust_name');
		var $order = array('cust_id' => 'desc'); 
		var $table2 = 'master_cust_intern';
		var $order2 = array('cstin_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			$this->db->select('a.cust_id CUST_ID,a.cust_code CUST_CODE,a.cust_name CUST_NAME,a.cust_address CUST_ADDRESS');
			$this->db->from($this->table);
			$this->db->where('cust_dtsts','1');
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
				//$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				//$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		private function _get_datatables_query2()
		{
		    $this->db->select('master_cust_intern.cstin_id CUST_ID,master_cust_intern.cstin_code CUST_CODE, master_person.person_name CUST_NAME, master_person.person_address CUST_ADDRESS');
		    $this->db->from($this->table2);
			$this->db->join('master_person','master_person.person_id = master_cust_intern.person_id');
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
			if(isset($_POST['order'])) // here order processing
			{
				//$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order2 = $this->order;
				//$this->db->order_by(key($order2), $order2[key($order2)]);
			}
		}

		public function get_datatables()
		{
			$this->_get_datatables_query();
		    $query1 = $this->db->get_compiled_select();
		    $this->_get_datatables_query2();
		    $query2 = $this->db->get_compiled_select();
		    $query = $this->db->query($query1.' UNION '.$query2);
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