<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_hisproloss extends CI_Model 
	{
		var $table = 'jou_details a';
		var $column_order = array(null,'coa_acc','jou_date');
		var $column_search = array('coa_acc','jou_date');
		var $order = array('jou_date' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($coa,$brc)
		{		
			$this->db->from($this->table);
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->where('c.coa_acc',$coa);
			$this->db->where('b.branch_id',$brc);
			$this->db->where('b.jou_date <=',date('Y-m-d'));
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
		public function get_datatables($coa,$brc)
		{
			$this->_get_datatables_query($coa,$brc);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered($coa,$brc)
		{
			$this->_get_datatables_query($coa,$brc);
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