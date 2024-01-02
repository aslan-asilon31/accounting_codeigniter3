<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_finance extends CI_Model
	{
		//Fungsi untuk cek pemakaian Invoice di tabel lain
		public function check_inv($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('inv_id'=>$id,$sts=>'1')):$this->db->get_where($tb,$id);
			$cou = $que->num_rows();
			return $cou;
		}

		//Funsgi ambil log history untuk Invoice
		public function getlog_inv($id)
		{
			$this->db->where('inv_id',$id);
	    	$this->db->where('hisinv_upcount = (select max(hisinv_upcount) from his_inv where inv_id = '.$id.')');
			$que = $this->db->get('his_inv');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Kas Masuk
		public function getlog_cashin($id)
		{
			$this->db->where('csh_id',$id);
			$this->db->where('hischin_upcount = (select max(hischin_upcount) from his_cashin where csh_id = '.$id.')');
			$que = $this->db->get('his_cashin');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Kas Masuk
		public function getlog_cashout($id)
		{
			$this->db->where('csho_id',$id);
			$this->db->where('hiscsho_upcount = (select max(hiscsho_upcount) from his_cashout where csho_id = '.$id.')');
			$que = $this->db->get('his_cashout');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Bank Masuk
		public function getlog_bankin($id)
		{
			$this->db->where('bnk_id',$id);
			$this->db->where('hisbnk_upcount = (select max(hisbnk_upcount) from his_bankin where bnk_id = '.$id.')');
			$que = $this->db->get('his_bankin');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Bank keluar
		public function getlog_bankout($id)
		{
			$this->db->where('bnko_id',$id);
			$this->db->where('hisbnko_upcount = (select max(hisbnko_upcount) from his_bankout where bnko_id = '.$id.')');
			$que = $this->db->get('his_bankout');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Giro Masuk
		public function getlog_giroin($id)
		{
			$this->db->where('grin_id',$id);
			$this->db->where('hisgrin_upcount = (select max(hisgrin_upcount) from his_giroin where grin_id = '.$id.')');
			$que = $this->db->get('his_giroin');
			return $que->row();
		}

		//Fungsi ambil log histori untuk Giro keluar
		public function getlog_giroout($id)
		{
			$this->db->where('grout_id',$id);
			$this->db->where('hisgro_upcount = (select max(hisgro_upcount) from his_giroout where grout_id = '.$id.')');
			$que = $this->db->get('his_giroout');
			return $que->row();
		}

		//Fungsi ambil nilai jumlah detail kas masuk
		public function get_sumcashindet($id)
		{
			$this->db->select('sum(cshdetin_amount) as amount');
		    $this->db->from('cashin_det');
	    	$this->db->where('csh_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil nilai jumlah detail kas keluar
		public function get_sumcashoutdet($id)
		{
			$this->db->select('sum(cshodet_amount) as amount');
		    $this->db->from('cashout_det');
	    	$this->db->where('csho_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil nilai jumlah detail bank masuk
		public function get_sumbankindet($id)
		{
			$this->db->select('sum(bnkdet_amount) as amount');
		    $this->db->from('bankin_det');
	    	$this->db->where('bnk_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil nilai jumlah detail bank keluar
		public function get_sumbankoutdet($id)
		{
			$this->db->select('sum(bnkodet_amount) as amount');
		    $this->db->from('bankout_det');
	    	$this->db->where('bnko_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil nilai jumlah detail giro masuk
		public function get_sumgrindet($id)
		{
			$this->db->select('sum(grindet_amount) as amount');
		    $this->db->from('giroin_det');
	    	$this->db->where('grin_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil nilai jumlah detail giro keluar
		public function get_sumgroutdet($id)
		{
			$this->db->select('sum(groutdet_amount) as amount');
		    $this->db->from('giroout_det');
	    	$this->db->where('grout_id',$id);
	    	$get = $this->db->get()->row();
	    	return $get->amount;
		}

		//Fungsi ambil id untuk hapus data buku kas
		public function get_idbukukas($brc,$code,$coa)
		{
			$this->db->where('branch_id',$brc);
			$this->db->where('csh_code',$code);
			$this->db->where('coa_id',$coa);
			$get = $this->db->get('buku_kas')->row();
			return $ret = $get->CSHBOOK_ID;
		}

		//Fungsi ambil id untuk hapus data buku bank
		public function get_idbukubank($brc,$code,$coa)
		{
			$this->db->where('branch_id',$brc);
			$this->db->where('bnk_code',$code);
			$this->db->where('coa_id',$coa);
			$get = $this->db->get('buku_bank')->row();
			return $ret = $get->BNKBOOK_ID;
		}

		//Fungsi ambil id untuk hapus data buku giro
		public function get_idbukugiro($brc,$code,$gr)
		{
			$this->db->where('branch_id',$brc);
			$this->db->where('bnk_code',$code);
			$this->db->where('gr_number',$gr);
			$get = $this->db->get('buku_giro')->row();
			return $ret = $get->GRBOOK_ID;
		}

		//Fungsi ambil id untuk hapus data record giro masuk
		public function get_idgiroinrc($code,$gr)
		{
			$this->db->where('bnktrx_id',$code);
			$this->db->where('gir_reffcode',$gr);
			$get = $this->db->get('giroin_record')->row();
			return $ret = $get->GIR_ID;
		}

		//Fungsi ambil id untuk hapus data record giro keluar
		public function get_idgirooutrc($code,$gr)
		{
			$this->db->where('bnktrxo_id',$code);
			$this->db->where('gor_reffcode',$gr);
			$get = $this->db->get('giroout_record')->row();
			return $ret = $get->GOR_ID;
		}

		//fungsi untuk laporan kas
		public function get_trxcashin($brc,$coa,$datestr,$dateend)
		{
			if ($brc != NULL)
			{
				$this->db->where('b.branch_id', $brc);
			}
			if ($coa != NULL)
			{
				$this->db->where('b.coa_id', $coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.csh_date >=', $datestr);
        		$this->db->where('b.csh_date <=', $dateend);
			}
			$this->db->select('c.*, b.CSH_DATE, b.CSH_CODE, d.COA_ACC, d.COA_ACCNAME, a.CSHINDET_INFO, a.CSHDETIN_AMOUNT, e.COA_ACCNAME as COADET');
			$this->db->from('cashin_det a');
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->join('chart_of_account e','e.coa_id = a.coa_id');
			$this->db->order_by('b.csh_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_trxcashout($brc,$coa,$datestr,$dateend)
		{
			if ($brc != NULL)
			{
				$this->db->where('b.branch_id', $brc);
			}
			if ($coa != NULL)
			{
				$this->db->where('b.coa_id', $coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.csho_date >=', $datestr);
        		$this->db->where('b.csho_date <=', $dateend);
			}
			$this->db->select('c.*, b.CSHO_DATE, b.CSHO_CODE, d.COA_ACC, d.COA_ACCNAME, a.CSHODET_INFO, a.CSHODET_AMOUNT, e.COA_ACCNAME as COADET');
			$this->db->from('cashout_det a');
			$this->db->join('trx_cash_out b','b.csho_id = a.csho_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->join('chart_of_account e','e.coa_id = a.coa_id');
			$this->db->order_by('b.csho_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function gen_saldostr($brc,$coa,$datestr,$dateend)
		{
			if($brc != NULL)
			{
				$this->db->where('b.branch_id',$brc);
			}
			if($coa != NULL)
			{
				$this->db->where('b.coa_id',$coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.csh_date >=', $datestr);
        		$this->db->where('b.csh_date <=', $dateend);
			}
			$date_ = $datestr;
			$this->db->select('c.COA_ID, c.COA_ACC, c.COA_ACCNAME, c.COA_DEBIT, c.COA_CREDIT');
			$this->db->from('cashin_det a');
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('chart_of_account c','c.coa_id = b.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('b.coa_id');
			$que = $this->db->get();
			$res = $que->result();
			$data = array();
			foreach ($res as $dat)
			{
				$get = $this->get_saldostrcashin_($dat->COA_ID,$datestr);
				$get2 = $this->get_saldostrcashout_($dat->COA_ID,$datestr);
				$data[]=array(
					'COA_ACC'=>$dat->COA_ACC,
					'COA_ACCNAME'=>$dat->COA_ACCNAME,
					'SUM_DEBIT'=>($get['SUM_DEBIT'] != NULL)?$get['SUM_DEBIT']:'0',
					'SUM_CREDIT'=>($get2['SUM_CREDIT'] != NULL)?$get2['SUM_CREDIT']:'0',
					'COA_DEBIT'=>$dat->COA_DEBIT,
					'COA_CREDIT'=>$dat->COA_CREDIT
				);
			}
			return $data;
		}

		public function get_saldostrcashin_($coa,$date)
		{
			$this->db->select('c.COA_ACC, c.COA_ACCNAME, SUM(a.CSHDETIN_AMOUNT) as SUM_DEBIT, c.COA_DEBIT, c.COA_CREDIT');
			$this->db->from('cashin_det a');
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('chart_of_account c','c.coa_id = b.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->where('b.csh_date <', $date);
			$this->db->where('b.coa_id', $coa);
			$this->db->group_by('b.coa_id');
			$query = $this->db->get();
			$get = $query->row_array();
			return $get;
		}

		public function get_saldostrcashout_($coa,$date)
		{
			$this->db->select('c.COA_ACC, c.COA_ACCNAME, SUM(a.CSHODET_AMOUNT) as SUM_CREDIT, c.COA_DEBIT, c.COA_CREDIT');
			$this->db->from('cashout_det a');
			$this->db->join('trx_cash_out b','b.csho_id = a.csho_id');
			$this->db->join('chart_of_account c','c.coa_id = b.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->where('b.csho_date <', $date);
			$this->db->where('b.coa_id', $coa);
			$this->db->group_by('b.coa_id');
			$query = $this->db->get();
			$get = $query->row_array();
			return $get;
		}

		public function get_cashsaldosum($table,$sumfield,$tabledet,$idjoin,$datefield,$brc,$coa,$date)
		{
			$this->db->select($sumfield);
			$this->db->from($table);
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join($tabledet,$idjoin);
			$this->db->where('b.branch_id', $brc);
			$this->db->where('a.coa_id', $coa);
			$this->db->where($datefield, $date);
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data = ($que->num_rows() != NULL)?$que->row()->SUM:0;
			return $data;
		}

		public function get_notafinsum($table,$sumfield,$tabledet,$idjoin,$datefield,$brc,$coa,$date)
		{
			$this->db->select($sumfield);
			$this->db->from($table);
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join($tabledet,$idjoin);
			$this->db->where('b.branch_id', $brc);
			$this->db->where('d.coa_id', $coa);
			$this->db->where($datefield, $date);
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data = ($que->num_rows() != NULL)?$que->row()->SUM:0;
			return $data;
		}

		//fungsi untuk laporan bank
		public function get_trxbankin($brc,$coa,$datestr,$dateend)
		{
			if($brc != NULL)
			{
				$this->db->where('b.branch_id',$brc);
			}
			if($coa != NULL)
			{
				$this->db->where('b.coa_id',$coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.bnk_date >=', $datestr);
        		$this->db->where('b.bnk_date <=', $dateend);
			}
			$this->db->select('c.*, b.BNK_DATE, b.BNK_CODE, d.COA_ACC, d.COA_ACCNAME, a.BNKDET_INFO, a.BNKDET_AMOUNT, e.COA_ACCNAME as COADET');
			$this->db->from('bankin_det a');
			$this->db->join('trx_bankin b','b.bnk_id = a.bnk_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->join('chart_of_account e','e.coa_id = a.coa_id');
			$this->db->where('a.bnkdet_type','T');
			$this->db->order_by('b.bnk_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_trxbankout($brc,$coa,$datestr,$dateend)
		{
			if($brc != NULL)
			{
				$this->db->where('b.branch_id',$brc);
			}
			if($coa != NULL)
			{
				$this->db->where('b.coa_id',$coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.bnko_date >=', $datestr);
        		$this->db->where('b.bnko_date <=', $dateend);
			}
			$this->db->select('c.*, b.BNKO_DATE, b.BNKO_CODE, d.COA_ACC, d.COA_ACCNAME, a.BNKODET_INFO, a.BNKODET_AMOUNT, e.COA_ACCNAME as COADET');
			$this->db->from('bankout_det a');
			$this->db->join('trx_bankout b','b.bnko_id = a.bnko_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->join('chart_of_account e','e.coa_id = a.coa_id');
			$this->db->where('a.bnkodet_type','T');		
			$this->db->order_by('b.bnko_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_trxgiroin($brc,$coa,$datestr,$dateend)
		{
			if($brc != NULL)
			{
				$this->db->where('b.branch_id',$brc);
			}
			if($coa != NULL)
			{
				$this->db->where('b.coa_id',$coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.grin_date >=', $datestr);
        		$this->db->where('b.grin_date <=', $dateend);
			}
			$this->db->select('c.*, b.GRIN_DATE, b.GRIN_CODE, b.GRIN_INFO, a.GRINDET_AMOUNT, a.GRINDET_CODE');
			$this->db->from('giroin_det a');
			$this->db->join('trx_giro_in b','b.grin_id = a.grin_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->where('b.grin_sts','1');
			$this->db->order_by('b.grin_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_trxgiroout($brc,$coa,$datestr,$dateend)
		{
			if($brc != NULL)
			{
				$this->db->where('b.branch_id',$brc);
			}
			if($coa != NULL)
			{
				$this->db->where('b.coa_id',$coa);
			}
			if ($datestr != NULL AND $dateend != NULL)
			{
				$this->db->where('b.grout_date >=', $datestr);
        		$this->db->where('b.grout_date <=', $dateend);
			}
			$this->db->select('c.*, b.GROUT_DATE, b.GROUT_CODE, b.GROUT_INFO, a.GROUTDET_AMOUNT, a.GROUTDET_CODE');
			$this->db->from('giroout_det a');
			$this->db->join('trx_giro_out b','b.grout_id = a.grout_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->join('chart_of_account d','d.coa_id = b.coa_id');
			$this->db->where('b.grout_sts','1');
			$this->db->order_by('b.grout_date');
			$que = $this->db->get();
			return $que->result();
		}

		public function get_banksaldosum($table,$sumfield,$tabledet,$idjoin,$datefield,$brc,$coa,$date,$bnksts)
		{
			$this->db->select($sumfield);
			$this->db->from($table);
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join($tabledet,$idjoin);
			$this->db->where('b.branch_id', $brc);
			$this->db->where('a.coa_id', $coa);
			$this->db->where($datefield, $date);
			$this->db->where($bnksts);
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data = ($que->num_rows() != NULL)?$que->row()->SUM:0;
			return $data;
		}

		public function get_girosaldosum($table,$sumfield,$tabledet,$idjoin,$datefield,$brc,$coa,$date)
		{
			$this->db->select($sumfield);
			$this->db->from($table);
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join($tabledet,$idjoin);
			$this->db->where('b.branch_id', $brc);
			$this->db->where('a.coa_id', $coa);
			$this->db->where($datefield, $date);
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data = ($que->num_rows() != NULL)?$que->row()->SUM:0;
			return $data;
		}
	}
?>