<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptinv extends CI_Model 
	{

		var $table = 'inv_details a';
		var $column_order = array(null,'inv_code','inv_date','appr_code','loc_name','invdet_term','invdet_amount');
		var $column_search = array('inv_code','inv_date','appr_code','loc_name','invdet_term','invdet_amount');
		var $order = array('a.invdet_id' => 'asc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('client'))
			{
				$this->db->where('b.cust_id', $this->input->post('client') );
			}
			if ($this->input->post('appr'))
			{
				$this->db->where('a.appr_id', $this->input->post('appr') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		$this->db->where('b.inv_date <=', $this->input->post('date_end'));
			}
			$this->db->from($this->table);
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->join('trx_approvalbill c','c.appr_id = a.appr_id');
			$this->db->join('master_location d','d.loc_id = c.loc_id');
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