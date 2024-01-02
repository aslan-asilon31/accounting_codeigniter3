<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_cashindet extends CI_Model 
	{

		var $table = 'cashin_det a';
		var $column_order = array(null,'coa_acc','cshindet_reff','cshindet_info','cshindet_amount');
		var $column_search = array('coa_acc','cshindet_reff','cshindet_info','cshindet_amount');
		var $order = array('cshindet_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($id)
		{
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('chart_of_account c', 'c.coa_id = a.coa_id');
			$this->db->from($this->table);
			$this->db->where('a.csh_id',$id);
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
		public function get_datatables($id)
		{
			$this->_get_datatables_query($id);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered($id)
		{
			$this->_get_datatables_query($id);
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