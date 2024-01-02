<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptpermitappr extends CI_Model 
	{

		var $table = 'permitdoc_det a';
		var $column_order = array(null,'pappr_code','pappr_date','appr_code','prmttyp_name');
		var $column_search = array('pappr_code','pappr_date','appr_code','prmttyp_name');
		var $order = array('b.pappr_id' => 'asc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->where('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('locid')) 
			{
				$this->db->where('b.loc_id', $this->input->post('locid') );
			}
			if ($this->input->post('prmttypid')) 
			{
				$this->db->where('b.prmttyp_id', $this->input->post('prmttypid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('f.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.pappr_date >=', $this->input->post('date_start'));
        		$this->db->where('b.pappr_date <=', $this->input->post('date_end'));
			}			
			$this->db->from($this->table);
			$this->db->join('trx_permitappr b','b.pappr_id = a.pappr_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_permit_type e','e.prmttyp_id = b.prmttyp_id');
			$this->db->join('master_user f','f.user_id = b.user_id');
			$this->db->join('master_branch g','g.branch_id = f.branch_id');
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