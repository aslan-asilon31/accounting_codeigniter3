<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_logistik extends CI_Model
	{
		//Journal Check

		//Fungsi untuk cek pemakaian PO di tabel lain
		public function check_po($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('po_id'=>$id,$sts=>'1')):$this->db->get_where($tb,array('po_id'=>$id));
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk PO Logistik
		public function getlog_polgt($id)
		{
			$this->db->where('po_id',$id);
			$this->db->where('hispo_upcount = (select max(hispo_upcount) from his_po where po_id = '.$id.')');
			$que = $this->db->get('his_po');
			return $que->row();
		}

		//Fungsi untuk cek pemakaian Pembelian di tabel lain
		public function check_prc($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('prc_id'=>$id,$sts=>'1')):$this->db->get_where($tb,$id);
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk Pembelian Logistik
		public function getlog_prclgt($id)
		{
			$this->db->where('prc_id',$id);
			$this->db->where('hisprc_upcount = (select max(hisprc_upcount) from his_prc where prc_id = '.$id.')');
			$que = $this->db->get('his_prc');
			return $que->row();
		}

		//Fungsi untuk cek pemakaian Retur Pembelian di tabel lain
		public function check_rtprc($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('rtprc_id'=>$id,$sts=>'1')):$this->db->get_where($tb,$id);
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk Retur Pembelian Logistik
		public function getlog_rtprclgt($id)
		{
			$this->db->where('rtprc_id',$id);
			$this->db->where('hisrtprc_upcount = (select max(hisrtprc_upcount) from his_retprc where rtprc_id = '.$id.')');
			$que = $this->db->get('his_retprc');
			return $que->row();
		}

		//Fungsi untuk cek pemakaian Pemakaian di tabel lain
		public function check_usg($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('usg_id'=>$id,$sts=>'1')):$this->db->get_where($tb,array('usg_id'=>$id));
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk Pemakaian Logistik
		public function getlog_usglgt($id)
		{
			$this->db->where('usg_id',$id);
			$this->db->where('hisusg_upcount = (select max(hisusg_upcount) from his_usg where usg_id = '.$id.')');
			$que = $this->db->get('his_usg');
			return $que->row();
		}

		//Fungsi untuk cek pemakaian Retur Pemakaian di tabel lain
		public function check_rtusg($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('rtusg_id'=>$id,$sts=>'1')):$this->db->get_where($tb,array('rtusg_id'=>$id));
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk Retur Pemakaian Logistik
		public function getlog_rtusglgt($id)
		{
			$this->db->where('rtusg_id',$id);
			$this->db->where('hisrtusg_upcount = (select max(hisrtusg_upcount) from his_retusg where rtusg_id = '.$id.')');
			$que = $this->db->get('his_retusg');
			return $que->row();
		}

		//Fungsi untuk cek pemakaian BAPP Logistik di tabel lain
		public function check_bapp($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('balg_id'=>$id,$sts=>'1')):$this->db->get_where($tb,array('balg_id'=>$id));
			$cou = $que->num_rows();
			return $cou;
		}

		//Fungsi ambil log histori untuk BAPP Logistik Logistik
		public function getlog_bapplgt($id)
		{
			$this->db->where('balg_id',$id);
			$this->db->where('hisbalg_upcount = (select max(hisbalg_upcount) from his_bapplog where balg_id = '.$id.')');
			$que = $this->db->get('his_bapplog');
			return $que->row();
		}

		//Fungsi untuk laporan stock
		public function get_allgd()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('a.branch_id',$this->input->post('branch'));
			}
			$this->db->from('master_goods a');
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->where('a.gd_dtsts','1');
			$this->db->where('a.gd_typestock','0');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_prcgd()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id',$this->input->post('branch'));
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('b.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('c.gd_id, c.gd_name, sum(a.prcdet_qty) as sub');
			$this->db->from('prc_details a');
			$this->db->join('trx_procurement b','b.prc_id = a.prc_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');
			$this->db->where('c.gd_typestock','0');
			$this->db->group_by('a.gd_id');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_retprcgd()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id',$this->input->post('branch'));
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.rtprc_date >=', $this->input->post('date_start'));
        		$this->db->where('b.rtprc_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('c.gd_id, c.gd_name, sum(a.retprcdet_qty) as sub');
			$this->db->from('retprc_details a');
			$this->db->join('procurement_ret b','b.rtprc_id = a.rtprc_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');
			$this->db->where('c.gd_typestock','0');
			$this->db->group_by('a.gd_id');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_usggd()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id',$this->input->post('branch'));
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.usg_date >=', $this->input->post('date_start'));
        		$this->db->where('b.usg_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('c.gd_id, c.gd_name, sum(a.usgdet_qty) as sub');
			$this->db->from('usage_details a');
			$this->db->join('trx_usage b','b.usg_id = a.usg_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');
			$this->db->where('c.gd_typestock','0');
			$this->db->group_by('a.gd_id');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_retusggd()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id',$this->input->post('branch'));
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.rtusg_date >=', $this->input->post('date_start'));
        		$this->db->where('b.rtusg_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('c.gd_id, c.gd_name, sum(a.retusgdet_qty) as sub');
			$this->db->from('retusg_details a');
			$this->db->join('usage_ret b','b.rtusg_id = a.rtusg_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');
			$this->db->where('c.gd_typestock','0');
			$this->db->group_by('a.gd_id');
			$que = $this->db->get();
			return $que->result();
		}
	}
?>