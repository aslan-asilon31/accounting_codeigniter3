<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptaccpay extends CI_Model 
	{
		var $table = 'trx_procurement a';
		var $column_order = array(null,'kode','nama','total');
		var $column_search = array('kode','nama','total');
		var $order = array('d.supp_id' => 'asc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			if ($this->input->post('branch'))
			{
				// $this->db->where('b.branch_id', $this->input->post('branch') );
				$this->db->where('a.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('supp'))
			{
				// $this->db->where('b.cust_id', $this->input->post('client') );
				$this->db->where('c.supp_id', $this->input->post('supp') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) 
			{
				// $this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		// $this->db->where('b.inv_date <=', $this->input->post('date_end'));
        		$this->db->where('a.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prc_date <=', $this->input->post('date_end'));
			}
			$this->db->select('d.supp_code as kode, d.supp_name as nama, sum(b.PRCDET_SUB) as total');
			$this->db->from($this->table);
			$this->db->join('prc_details b','b.prc_id = a.prc_id');
			$this->db->join('trx_po c','c.po_id = a.po_id');
			$this->db->join('master_supplier d','d.supp_id = c.supp_id','right');
			$this->db->group_by('d.supp_id');
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