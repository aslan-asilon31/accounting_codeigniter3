<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_crud extends CI_Model
	{
		//insert
		public function save($tb,$data)
	    {
	        $this->db->insert($tb, $data);
	        return $this->db->insert_id();
	    }
		public function insert_data($table,$data)
		{
			$this->db->insert($table,$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}
		//update
		public function update($tb,$data,$id)
		{
			$this->db->update($tb, $data, $id);
        	return $this->db->affected_rows();
		}
		public function update_data($table,$id_table,$id,$data)
		{
			$this->db->where($id_table,$id);
			$this->db->update($table,$data);
			if ($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}
		//delete
		public function delete_by_id($tb,$id)
	    {
	        $this->db->where($id);
	        $this->db->delete($tb);
	    }

		public function delete_data($table,$id_table,$id)
		{
			$this->db->where($id_table,$id);
			$this->db->delete($table);
		}

		//get data by id
		public function get_by_id($tb,$id)
	    {
	        $this->db->from($tb);
	        $this->db->where($id);
	        $query = $this->db->get();
	        return $query->row();
	    }

	    public function get_by_id2($tb1,$tb2,$id1,$id2)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->row();
	    }

	    public function get_by_id2b($tb1,$tb2,$id1,$id2,$l)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2,$l);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->row();
	    }

	    public function get_by_id3($tb1,$tb2,$tb3,$id1,$id2,$id3)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2);
	        $this->db->join($tb3,$id3);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->result();
	    }

	    public function get_by_id3b($tb1,$tb2,$tb3,$id1,$id2,$id3)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2);
	        $this->db->join($tb3,$id3);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->row();
	    }

	    public function get_by_id4($tb,$id)
	    {
	        $this->db->from($tb);
	        $this->db->where($id);
	        $query = $this->db->get();
	        return $query->result();
	    }

	    public function get_by_id5($tb1,$tb2,$id1,$id2)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->result();
	    }

	    public function get_by_id6($tb1,$tb2,$tb3,$tb4,$id1,$id2,$id3,$id4)
	    {
	        $this->db->from($tb1);
	        $this->db->join($tb2,$id2);
	        $this->db->join($tb3,$id3);
	        $this->db->join($tb4,$id4);
	        $this->db->where($id1);
	        $query = $this->db->get();
	        return $query->row();
	    }

	    //get data for master dropdown
	    public function get_branch()
		{
			$this->db->where('branch_dtsts','1');
			$que=$this->db->get('master_branch');			
			return $que->result();
		}
		public function get_person()
		{
			$this->db->where('person_dtsts','1');
			$que=$this->db->get('master_person');
			return $que->result();
		}
		public function get_gov()
		{
			$this->db->where('gov_dtsts','1');
			$que=$this->db->get('master_gov_type');
			return $que->result();
		}
		public function get_loc()
		{
			$this->db->where('loc_dtsts','1');
			$que=$this->db->get('master_location');
			return $que->result();
		}
		public function get_pattyp()
		{
			$this->db->where('prmttyp_dtsts','1');
			$que=$this->db->get('master_permit_type');
			return $que->result();
		}
		public function get_supplier()
		{
			$this->db->where('supp_dtsts','1');			
			$que=$this->db->get('master_supplier');
			return $que->result();
		}
		public function get_coapr()
		{
			$this->db->where('par_dtsts','1');
			$que=$this->db->get('parent_chart');
			return $que->result();
		}
		public function get_coa()
		{
			$this->db->order_by('coa_acc','asc');
			$this->db->where('coa_dtsts','1');
			$que=$this->db->get('chart_of_account');
			return $que->result();
		}

		public function get_inv()
		{
			$this->db->order_by('inv_id','asc');
			$this->db->where('inv_dtsts','1');
			$que=$this->db->get('trx_invoice');
			return $que->result();
		}

		//add approval
		public function add_appr()
		{
			$nomor = $this->db->count_all_results('trx_approvalbill') + 1;
			$kode = 'AB/'.date('dm').'/';
			$res = $kode . sprintf('%05s',$nomor);			
			$check = $this->db->get_where('trx_approvalbill',array('appr_code' => $res));
	        if($check->num_rows()>0)
	        {
	        	$nomor = $this->db->count_all_results('trx_approvalbill') + 1;
				$kode = 'AB/'.date('dm').'/';
				$res = $kode . sprintf('%05s',$nomor);				
	        }
			$data = array(
					'appr_code'=>$res,
					'appr_sts'=>'0'
				);			
			$this->db->insert('trx_approvalbill',$data);
			$insertId = $this->db->insert_id();
			$data2 = array(
					'appr_id' => $insertId,
					'hisappr_sts' => 'Void By System',
					'hisappr_old' => 'None',
					'hisappr_new' => 'None',
					'hisappr_info' => 'Create By System',
					'hisappr_upcount' => 0
				);
			$this->db->insert('his_approvalbill',$data2);
			return  $insertId;
		}

		public function gen_appr()
		{
			$this->db->select_max('appr_code','code');
			$que = $this->db->get('trx_approvalbill');
			$ext = $que->row();
			$max = $ext->code;
			if($max == null)
			{
				$max = 'AB/'.date('dm').'/00000';
			}
			$num = (int) substr($max,8,5);
			$num++;
			$kode = 'AB/'.date('dm').'/';
			$res = $kode . sprintf('%05s',$num);
			$data = array(
					'appr_code'=>$res,
					'appr_sts'=>'0'
				);			
			$this->db->insert('trx_approvalbill',$data);
			$insertId = $this->db->insert_id();
			$data2 = array(
					'appr_id' => $insertId,
					'hisappr_sts' => 'Void By System',
					'hisappr_old' => 'None',
					'hisappr_new' => 'None',
					'hisappr_info' => 'Create By System',
					'hisappr_upcount' => 0
				);
			$this->db->insert('his_approvalbill',$data2);
			return  $insertId;
		}

		//add bapp
		public function add_bapp()
		{
			$nomor = $this->db->count_all_results('trx_bapp') + 1;
			$kode = 'BAPP/'.date('dm').'/';
			$res = $kode . sprintf('%05s',$nomor);			
			$check = $this->db->get_where('trx_bapp',array('bapp_code' => $res));
	        if($check->num_rows()>0)
	        {
	        	$nomor = $this->db->count_all_results('trx_bapp') + 1;
				$kode = 'BAPP/'.date('dm').'/';
				$res = $kode . sprintf('%05s',$nomor);				
	        }
			$data = array(
					'bapp_code'=>$res,
					'bapp_sts'=>'0'
				);			
			$this->db->insert('trx_bapp',$data);
			$insertId = $this->db->insert_id();
			// $data2 = array(
			// 		'appr_id' => $insertId,
			// 		'hisappr_sts' => 'Void By System',
			// 		'hisappr_old' => 'None',
			// 		'hisappr_new' => 'None',
			// 		'hisappr_info' => 'Create By System',
			// 		'hisappr_upcount' => 0
			// 	);
			// $this->db->insert('his_approvalbill',$data2);
			return  $insertId;
		}

		//add po
		public function add_po()
		{
			$rand=random_string('nozero','5');
			$input='PO/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[trx_po.PO_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='PO/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'po_code'=>$input,
					'po_sts'=>'0'
				);			
			$this->db->insert('trx_po',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		public function gen_ponumber()
		{
			$this->db->select_max('po_code','code');
			$que = $this->db->get('trx_po');
			$ext = $que->row();
			$max = $ext->code;
			if($max == null)
			{
				$max = 'PO/'.date('dm').'/00000';
			}
			$num = (int) substr($max,8,5);
			$num++;
			$kode = 'PO/'.date('dm').'/';
			$res = $kode . sprintf('%05s',$num);
			$data = array(
					'po_code'=>$res,
					'po_sts'=>'0'
				);			
			$this->db->insert('trx_po',$data);
			$insertId = $this->db->insert_id();
			$data2 = array(
					'po_id' => $insertId,
					'hispo_sts' => 'Void By System',
					'hispo_old' => 'None',
					'hispo_new' => 'None',
					'hispo_info' => 'Create By System',
					'hispo_upcount' => 0
				);
			$this->db->insert('his_po',$data2);
			return  $insertId;
		}

		//get po sub
		public function sub_po($id)
		{					
			$this->db->select_sum('po_details.podet_sub', 'Subtotal');
			$this->db->join('trx_po','trx_po.po_id = po_details.po_id');
			$this->db->where('trx_po.po_id',$id);
			$query = $this->db->get('po_details');
	        return $query->row();
		}

		//get po sub
		public function sub_po_ga($id)
		{					
			$this->db->select_sum('poga_details.pgdet_sub', 'Subtotal');
			$this->db->join('trx_po_ga','trx_po_ga.poga_id = poga_details.poga_id');
			$this->db->where('trx_po_ga.poga_id',$id);
			$query = $this->db->get('poga_details');
	        return $query->row();
		}

		//add BL
		public function add_bl()
		{
			$rand=random_string('nozero','5');
			$input='BL/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[trx_procurement.PRC_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='BL/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'prc_code'=>$input,
					'prc_sts'=>'0'
				);			
			$this->db->insert('trx_procurement',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		//get bl sub ga
		public function sub_bl_ga($id)
		{					
			$this->db->select_sum('prcga_details.prcgadet_sub', 'Subtotal');
			$this->db->join('trx_prc_ga','trx_prc_ga.prcga_id = prcga_details.prcga_id');
			$this->db->where('trx_prc_ga.prcga_id',$id);
			$query = $this->db->get('prcga_details');
	        return $query->row();
		}

		//get bl sub
		public function sub_bl($id)
		{					
			$this->db->select_sum('prc_details.prcdet_sub', 'Subtotal');
			$this->db->join('trx_procurement','trx_procurement.prc_id = prc_details.prc_id');
			$this->db->where('trx_procurement.prc_id',$id);
			$query = $this->db->get('prc_details');
	        return $query->row();
		}

		//add Retur BL
		public function add_rb()
		{
			$rand=random_string('nozero','5');
			$input='RB/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[procurement_ret.RTPRC_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='RB/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'rtprc_code'=>$input,
					'rtprc_sts'=>'0'
				);			
			$this->db->insert('procurement_ret',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		//get retbl sub
		public function sub_retbl($id)
		{					
			$this->db->select_sum('retprc_details.retprcdet_sub', 'Subtotal');
			$this->db->join('procurement_ret','procurement_ret.rtprc_id = retprc_details.rtprc_id');
			$this->db->where('procurement_ret.rtprc_id',$id);
			$query = $this->db->get('retprc_details');
	        return $query->row();
		}


		//get retbl sub
		public function sub_retgabl($id)
		{					
			$this->db->select_sum('retprcga_details.rtprcgadet_sub', 'Subtotal');
			$this->db->join('prcga_ret','prcga_ret.rtprcga_id = retprcga_details.rtprcga_id');
			$this->db->where('prcga_ret.rtprcga_id',$id);
			$query = $this->db->get('retprcga_details');
			return $query->row();
		}

		public function sub_km($id)
		{					
			$this->db->select_sum('cashin_det.cshdetin_amount', 'SubTotal');
			$this->db->join('trx_cash_in','trx_cash_in.CSH_ID = cashin_det.CSH_ID');
			$this->db->where('trx_cash_in.CSH_ID',$id);
			$query = $this->db->get('cashin_det');
	        return $query->row();
		}

		public function sub_kk($id)
		{					
			$this->db->select_sum('cashout_det.cshodet_amount', 'SubTotal');
			$this->db->join('trx_cash_out','trx_cash_out.CSHO_ID = cashout_det.CSHO_ID');
			$this->db->where('trx_cash_out.CSHO_ID',$id);
			$query = $this->db->get('cashout_det');
	        return $query->row();
		}

		public function sub_bm($id)
		{					
			$this->db->select_sum('bankin_det.bnkdet_amount', 'SubTotal');
			$this->db->join('trx_bankin','trx_bankin.BNK_ID = bankin_det.BNK_ID');
			$this->db->where('trx_bankin.BNK_ID',$id);
			$query = $this->db->get('bankin_det');
	        return $query->row();
		}

		public function sub_bk($id)
		{					
			$this->db->select_sum('bankout_det.BNKODET_AMOUNT', 'SubTotal');
			$this->db->join('trx_bankout','trx_bankout.BNKO_ID = bankout_det.BNKO_ID');
			$this->db->where('trx_bankout.BNKO_ID',$id);
			$query = $this->db->get('bankout_det');
	        return $query->row();
		}

		public function sub_gm($id)
		{					
			$this->db->select_sum('giroin_det.grindet_amount', 'SubTotal');
			$this->db->join('trx_giro_in','trx_giro_in.GRIN_ID = giroin_det.GRIN_ID');
			$this->db->where('trx_giro_in.GRIN_ID',$id);
			$query = $this->db->get('giroin_det');
	        return $query->row();
		}

        public function sub_gk($id)
		{					
			$this->db->select_sum('giroout_det.groutdet_amount', 'SubTotal');
			$this->db->join('trx_giro_out','trx_giro_out.GROUT_ID = giroout_det.GROUT_ID');
			$this->db->where('trx_giro_out.GROUT_ID',$id);
			$query = $this->db->get('giroout_det');
	        return $query->row();
		}

		public function sub_ra($id)
		{					
			$this->db->select_sum('budget_det.buddet_amount', 'SubTotal');
			$this->db->join('trx_budget','trx_budget.BUD_ID = budget_det.BUD_ID');
			$this->db->where('trx_budget.BUD_ID',$id);
			$query = $this->db->get('budget_det');
	        return $query->row();
		}

		//add usage
		public function add_usg()
		{
			$rand=random_string('nozero','5');
			$input='PK/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[trx_usage.USG_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='PK/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'usg_code'=>$input,
					'usg_sts'=>'0'
				);			
			$this->db->insert('trx_usage',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		//add ret usage
		public function add_retusg()
		{
			$rand=random_string('nozero','5');
			$input='RPK/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[usage_ret.RTUSG_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='RPK/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'rtusg_code'=>$input,
					'rtusg_sts'=>'0'
				);			
			$this->db->insert('usage_ret',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		//add adjust
		public function add_adj()
		{
			$rand=random_string('nozero','5');
			$input='PS/'.date('dm').'/'.$rand;
			$this->form_validation->set_rules($input, 'Kode', 'is_unique[trx_adjustment.ADJ_CODE]');
	        if($this->form_validation->run() == FALSE)
		    {
		        $rand=random_string('nozero','5');
				$input='PS/'.date('dm').'/'.$rand;
		    }
			$data = array(
					'adj_code'=>$input,
					'adj_dtsts'=>'0'
				);			
			$this->db->insert('trx_adjustment',$data);
			$insertId = $this->db->insert_id();
			return  $insertId;
		}

		//get all images
		public function get_images($id)
		{
			$this->db->where('bapp_id',$id);
			$que=$this->db->get('bapp_details');			
			return $que->result();
		}

		//generate number
		public function gen_numb($col,$table,$suf)
		{
			$this->db->select_max($col,'code');
			$que = $this->db->get($table);
			$ext = $que->row();
			$max = $ext->code;
			if($max == null)
			{
				$max = $suf.'-00000';
			}
			// $num = (int) substr($max,4,5);
			$num = (int) substr($max,-5);
			$num++;
			$kode = $suf.'-';
			$res = $kode . sprintf('%05s',$num);
			return $res;
		}

		public function get_cst()
		{
			$this->db->where('cust_dtsts','1');
			$que=$this->db->get('master_customer');
			return $que->result();
		}
		public function get_mu()
		{
			$this->db->where('curr_dtsts','1');
			$que=$this->db->get('master_currency');
			return $que->result();
		}
		public function get_bank()
		{
			$this->db->where('bank_dtsts','1');
			$que=$this->db->get('master_bank');
			return $que->result();
		}

		public function sub_dpp_ppn_pph_total($id)
		{					
			$this->db->select_sum('inv_details.invdet_amount', 'total');
			$this->db->select_sum('inv_details.invdet_sub','dpp');
			$this->db->select_sum('inv_details.invdet_ppnam','ppn');
			$this->db->select_sum('inv_details.invdet_ppham','pph');
			$this->db->join('trx_invoice','trx_invoice.INV_ID = inv_details.INV_ID');
			$this->db->where('trx_invoice.BRANCH_ID',$id);
			$this->db->group_by('trx_invoice.BRANCH_ID');
			$query = $this->db->get('inv_details');
	        return $query->row();
		}

		//Get Data Master
		public function get_datamaster($table,$sts)
		{
			$get = $this->db->get_where($table,$sts);
			return $get->result();
		}
	}
?>