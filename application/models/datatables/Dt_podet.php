<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_podet extends CI_Model 
	{

		var $table = 'po_details';
		var $column_order = array(null,'gd_name','gd_price','podet_qtyunit','podet_sub');
		var $column_search = array('gd_name','gd_price','podet_qtyunit','podet_sub');
		var $order = array('podet_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($id)
		{		
			$this->db->from($this->table);
			$this->db->join('master_goods', 'master_goods.gd_id = po_details.gd_id');
			$this->db->join('trx_po', 'trx_po.po_id = po_details.po_id');
			$this->db->where('po_details.po_id',$id);
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