<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptstock extends CI_Model 
	{
		var $table = 'master_goods a';
		var $column_order = array(null,'gd_name','gd_stock');
		var $column_search = array('gd_name','gd_stock');
		var $order = array('gd_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('a.branch_id', $this->input->post('branch') );
			}
			// if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
			// 	$this->db->where('a.po_date >=', $this->input->post('date_start'));
   //      		$this->db->where('a.po_date <=', $this->input->post('date_end'));  
			// }
			$this->db->from($this->table);
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->where('a.gd_dtsts','1');
			$this->db->where('a.gd_typestock','0');
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