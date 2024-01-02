<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptpoga extends CI_Model 
	{
		var $table = 'trx_po_ga a';
		var $column_order = array(null,'poga_code','poga_date','poga_ordnum','supp_name');
		var $column_search = array('poga_code','poga_date','poga_ordnum','supp_name');
		var $order = array('poga_date' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.poga_date >=', $this->input->post('date_start'));
        		$this->db->where('a.poga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from($this->table);
			$this->db->join('master_supplier b','b.supp_id = a.supp_id');
			$this->db->join('master_user c','c.user_id = a.user_id');
			$this->db->join('master_branch d','d.branch_id = c.branch_id');
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