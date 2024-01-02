<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptprc extends CI_Model 
	{
		var $table = 'trx_procurement a';
		var $column_order = array(null,'prc_code','prc_date','appr_code','supp_name');
		var $column_search = array('prc_code','prc_date','appr_code','supp_name');
		var $order = array('prc_date' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{	
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->from($this->table);
			$this->db->join('trx_po b','b.po_id = a.po_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_supplier d','d.supp_id = b.supp_id');
			$this->db->join('master_user e','e.user_id = a.user_id');
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