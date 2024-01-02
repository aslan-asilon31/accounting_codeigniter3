<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_gen extends CI_Model
	{
		function __construct()
		{
		  	parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
		}
		//Generate Angka to Terbilang
		public function number_conv($value)
		{
			$nilai = abs($value);
			$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
			$temp = "";
			if ($nilai < 12) 
			{
				$temp = " ". $huruf[$nilai];
			} 
			else if ($nilai <20) 
			{
				$temp = $this->number_conv($nilai - 10). " Belas ";
			} 
			else if ($nilai < 100) 
			{
				$temp = $this->number_conv($nilai/10)." Puluh ". $this->number_conv($nilai % 10);
			} 
			else if ($nilai < 200) 
			{
				$temp = " Seratus " . $this->number_conv($nilai - 100);
			} 
			else if ($nilai < 1000) 
			{
				$temp = $this->number_conv($nilai/100) . " Ratus " . $this->number_conv($nilai % 100);
			} 
			else if ($nilai < 2000) 
			{
				$temp = " Seribu " . $this->number_conv($nilai - 1000);
			} 
			else if ($nilai < 1000000) 
			{
				$temp = $this->number_conv($nilai/1000) . " Ribu " . $this->number_conv($nilai % 1000);
			} 
			else if ($nilai < 1000000000) 
			{
				$temp = $this->number_conv($nilai/1000000) . " Juta " . $this->number_conv($nilai % 1000000);
			} 
			else if ($nilai < 1000000000000) 
			{
				$temp = $this->number_conv($nilai/1000000000) . " Milyar " . $this->number_conv(fmod($nilai,1000000000));
			} 
			else if ($nilai < 1000000000000000) 
			{
				$temp = $this->number_conv($nilai/1000000000000) . " Trilyun " . $this->number_conv(fmod($nilai,1000000000000));
			}
			if($value<0) 
			{
				$hasil = "Minus ". trim($temp);
			} 
			else 
			{
				$hasil = trim($temp);
			}
			return $hasil;
		}
		
		//Gen Nomor Transaksi
		public function gen_num_($tb,$col,$affix)
		{
			$this->db->select_max($col,'code');
			$que = $this->db->get($tb);
			$ext = $que->row();
			$max = $ext->code;
			$len = strlen($affix)+1;
			$mon = substr($max,$len,-7);
			if($max == null || $mon != date('ym'))
			{
				$max = $affix.'/'.date('ym').'/000000';
			}
			// $num = (int) substr($max,8,6);
			$num = (int) substr($max,-6);
			$num++;
			$kode = $affix.'/'.date('ym').'/';
			$res = $kode . sprintf('%06s',$num);
			return $res;
		}

		public function gen_numbybrc_($tb,$col,$brc,$affix)
		{
			$this->db->select_max($col,'code');
			$que = $this->db->get_where($tb,array('branch_id'=>$brc));
			$ext = $que->row();
			$max = $ext->code;
			$len = strlen($affix)+1;
			$mon = substr($max,$len,-7);
			if($max == null || $mon != date('ym'))
			{
				$max = $affix.'/'.date('ym').'/000000';
			}
			// $num = (int) substr($max,8,6);
			$num = (int) substr($max,-6);
			$num++;
			$kode = $affix.'/'.date('ym').'/';
			$res = $kode . sprintf('%06s',$num);
			return $res;
		}

		//Gen Nomor Kas Masuk
		public function gen_numcashin()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_cash_in','csh_code','KM');
			$res = $this->gen_numbybrc_('trx_cash_in','csh_code',$brc,'KM');
			$check = $this->db->get_where('trx_cash_in',array('csh_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_cash_in','csh_code','KM');
				$res = $this->gen_numbybrc_('trx_cash_in','csh_code',$brc,'KM');
			}
			$data = array(
					'csh_code'=>$res,
					'branch_id'=>$brc,
					'csh_date'=>date('Y-m-d'),
					'csh_sts'=>'0'
				);			
			$this->db->insert('trx_cash_in',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['csh_code'] = $res;
			$data2 = array(
					'csh_id' => $insID,
					'hischin_sts' => 'Void By System',
					'hischin_old' => 'None',
					'hischin_new' => 'None',
					'hischin_info' => 'Create By System',
					'hischin_date' => date('Y-m-d'),
					'hischin_time' => date('H:i:s'),
					'hischin_upcount' => 0
				);
			$this->db->insert('his_cashin',$data2);
			return  $out;
		}

		//Gen Nomor Kas Keluar
		public function gen_numcashout()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_cash_out','csho_code','KK');
			$res = $this->gen_numbybrc_('trx_cash_out','csho_code',$brc,'KK');
			$check = $this->db->get_where('trx_cash_out',array('csho_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_cash_out','csho_code','KK');
				$res = $this->gen_numbybrc_('trx_cash_out','csho_code',$brc,'KK');
			}
			$data = array(
					'csho_code'=>$res,
					'branch_id'=>$brc,
					'csho_date'=>date('Y-m-d'),
					'csho_sts'=>'0'
				);			
			$this->db->insert('trx_cash_out',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['csho_code'] = $res;
			$data2 = array(
					'csho_id' => $insID,
					'hiscsho_sts' => 'Void By System',
					'hiscsho_old' => 'None',
					'hiscsho_new' => 'None',
					'hiscsho_info' => 'Create By System',
					'hiscsho_date' => date('Y-m-d'),
					'hiscsho_time' => date('H:i:s'),
					'hiscsho_upcount' => 0
				);
			$this->db->insert('his_cashout',$data2);
			return  $out;
		}

		//Gen Nomor Bank Masuk
		public function gen_numbankin()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_bankin','bnk_code','BM');
			$res = $this->gen_numbybrc_('trx_bankin','bnk_code',$brc,'BM');
			$check = $this->db->get_where('trx_bankin',array('bnk_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_bankin','bnk_code','BM');
				$res = $this->gen_numbybrc_('trx_bankin','bnk_code',$brc,'BM');
			}
			$data = array(
					'bnk_code'=>$res,
					'branch_id'=>$brc,
					'bnk_date'=>date('Y-m-d'),
					'bnk_sts'=>'0'
				);			
			$this->db->insert('trx_bankin',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['bnk_code'] = $res;
			$data2 = array(
					'bnk_id' => $insID,
					'hisbnk_sts' => 'Void By System',
					'hisbnk_old' => 'None',
					'hisbnk_new' => 'None',
					'hisbnk_info' => 'Create By System',
					'hisbnk_date' => date('Y-m-d'),
					'hisbnk_time' => date('H:i:s'),
					'hisbnk_upcount' => 0
				);
			$this->db->insert('his_bankin',$data2);
			return  $out;
		}

		//Gen Nomor Bank Keluar
		public function gen_numbankout()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_bankout','bnko_code','BK');
			$res = $this->gen_numbybrc_('trx_bankout','bnko_code',$brc,'BK');
			$check = $this->db->get_where('trx_bankout',array('bnko_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_bankout','bnko_code','BK');
				$res = $this->gen_numbybrc_('trx_bankout','bnko_code',$brc,'BK');
			}
			$data = array(
					'bnko_code'=>$res,
					'branch_id'=>$brc,
					'bnko_date'=>date('Y-m-d'),
					'bnko_sts'=>'0'
				);			
			$this->db->insert('trx_bankout',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['bnko_code'] = $res;
			$data2 = array(
					'bnko_id' => $insID,
					'hisbnko_sts' => 'Void By System',
					'hisbnko_old' => 'None',
					'hisbnko_new' => 'None',
					'hisbnko_info' => 'Create By System',
					'hisbnko_date' => date('Y-m-d'),
					'hisbnko_time' => date('H:i:s'),
					'hisbnko_upcount' => 0
				);
			$this->db->insert('his_bankout',$data2);
			return  $out;
		}

		//Gen Nomor Giro Masuk
		public function gen_giroin()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_giro_in','grin_code','GM');
			$res = $this->gen_numbybrc_('trx_giro_in','grin_code',$brc,'GM');
			$check = $this->db->get_where('trx_giro_in',array('grin_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_giro_in','grin_code','GM');
				$res = $this->gen_numbybrc_('trx_giro_in','grin_code',$brc,'GM');
			}
			$data = array(
					'grin_code'=>$res,
					'branch_id'=>$brc,
					'grin_date'=>date('Y-m-d'),
					'grin_sts'=>'0'
				);			
			$this->db->insert('trx_giro_in',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['grin_code'] = $res;
			$data2 = array(
					'grin_id' => $insID,
					'hisgrin_sts' => 'Void By System',
					'hisgrin_old' => 'None',
					'hisgrin_new' => 'None',
					'hisgrin_info' => 'Create By System',
					'hisgrin_date' => date('Y-m-d'),
					'hisgrin_time' => date('H:i:s'),
					'hisgrin_upcount' => 0
				);
			$this->db->insert('his_giroin',$data2);
			return  $out;
		}

		//Gen Nomor Giro Keluar
		public function gen_giroout()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_giro_out','grout_code','GK');
			$res = $this->gen_numbybrc_('trx_giro_out','grout_code',$brc,'GK');
			$check = $this->db->get_where('trx_giro_out',array('grout_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_giro_out','grout_code','GK');
				$res = $this->gen_numbybrc_('trx_giro_out','grout_code',$brc,'GK');
			}
			$data = array(
					'grout_code'=>$res,
					'branch_id'=>$brc,
					'grout_date'=>date('Y-m-d'),
					'grout_sts'=>'0'
				);			
			$this->db->insert('trx_giro_out',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['grout_code'] = $res;
			$data2 = array(
					'grout_id' => $insID,
					'hisgro_sts' => 'Void By System',
					'hisgro_old' => 'None',
					'hisgro_new' => 'None',
					'hisgro_info' => 'Create By System',
					'hisgro_date' => date('Y-m-d'),
					'hisgro_time' => date('H:i:s'),
					'hisgro_upcount' => 0
				);
			$this->db->insert('his_giroout',$data2);
			return  $out;
		}

		//Gen Nomor Anggaran
		public function gen_numbudg()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_budget','bud_code','RA');
			$res = $this->gen_numbybrc_('trx_budget','bud_code',$brc,'RA');
			$check = $this->db->get_where('trx_budget',array('bud_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_budget','bud_code','RA');
				$res = $this->gen_numbybrc_('trx_budget','bud_code',$brc,'RA');
			}
			$data = array(
					'bud_code'=>$res,
					'branch_id'=>$brc,
					'bud_date'=>date('Y-m-d'),
					'bud_dtsts'=>'0'
				);			
			$this->db->insert('trx_budget',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['bud_code'] = $res;
			$data2 = array(
					'bud_id' => $insID,
					'hisbdg_sts' => 'Void By System',
					'hisbdg_old' => 'None',
					'hisbdg_new' => 'None',
					'hisbdg_info' => 'Create By System',
					'hisbdg_date' => date('Y-m-d'),
					'hisbdg_upcount' => 0
				);
			$this->db->insert('his_budget',$data2);
			return  $out;
		}

		//Gen Nomor PO GAgit 
		public function gen_numpoga()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_po_ga','poga_code','POG');
			$res = $this->gen_numbybrc_('trx_po_ga','poga_code',$brc,'OB');
			$check = $this->db->get_where('trx_po_ga',array('poga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_po_ga','poga_code','POG');
				$res = $this->gen_numbybrc_('trx_po_ga','poga_code',$brc,'OB');
			}
			$data = array(
					'poga_code'=>$res,
					'branch_id'=>$brc,
					'poga_date'=>date('Y-m-d'),
					'poga_sts'=>'0'
				);			
			$this->db->insert('trx_po_ga',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['poga_code'] = $res;
			$data2 = array(
					'poga_id' => $insID,
					'hispoga_sts' => 'Void By System',
					'hispoga_old' => 'None',
					'hispoga_new' => 'None',
					'hispoga_info' => 'Create By System',
					'hispoga_date' => date('Y-m-d'),
					'hispoga_upcount' => 0
				);
			$this->db->insert('his_poga',$data2);
			return  $out;
		}

		public function gen_numblga()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_prc_ga','prcga_code','BLG');
			$res = $this->gen_numbybrc_('trx_prc_ga','prcga_code',$brc,'PB');
			$check = $this->db->get_where('trx_prc_ga',array('prcga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_prc_ga','prcga_code','BLG');
				$res = $this->gen_numbybrc_('trx_prc_ga','prcga_code',$brc,'PB');
			}
			$data = array(
					'prcga_code'=>$res,
					'branch_id'=>$brc,
					'prcga_date'=>date('Y-m-d'),
					'prcga_sts'=>'0'
				);			
			$this->db->insert('trx_prc_ga',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['prcga_code'] = $res;
			$data2 = array(
					'prcga_id' => $insID,
					'hisprcga_sts' => 'Void By System',
					'hisprcga_old' => 'None',
					'hisprcga_new' => 'None',
					'hisprcga_info' => 'Create By System',
					'hisprcga_date' => date('Y-m-d'),
					'hisprcga_upcount' => 0
				);
			$this->db->insert('his_prcga',$data2);
			return  $out;
		}

		public function gen_numretga()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('prcga_ret','rtprcga_code','RBG');
			$res = $this->gen_numbybrc_('prcga_ret','rtprcga_code',$brc,'RBG');
			$check = $this->db->get_where('prcga_ret',array('rtprcga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('prcga_ret','rtprcga_code','RBG');
				$res = $this->gen_numbybrc_('prcga_ret','rtprcga_code',$brc,'RBG');
			}
			$data = array(
					'rtprcga_code'=>$res,
					'branch_id'=>$brc,
					'rtprcga_date'=>date('Y-m-d'),
					'rtprcga_sts'=>'0'
				);			
			$this->db->insert('prcga_ret',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['rtprc_code'] = $res;
			$data2 = array(
					'rtprcga_id' => $insID,
					'hisrtprcga_sts' => 'Void By System',
					'hisrtprcga_old' => 'None',
					'hisrtprcga_new' => 'None',
					'hisrtprcga_info' => 'Create By System',
					'hisrtprcga_date' => date('Y-m-d'),
					'hisrtprcga_upcount' => 0
				);
			$this->db->insert('his_rtprcga',$data2);
			return  $out;
		}

		public function gen_numusagega()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_usage_ga','usgga_code','PKG');
			$res = $this->gen_numbybrc_('trx_usage_ga','usgga_code',$brc,'PKG');
			$check = $this->db->get_where('trx_usage_ga',array('usgga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_usage_ga','usgga_code','PKG');
				$res = $this->gen_numbybrc_('trx_usage_ga','usgga_code',$brc,'PKG');
			}
			$data = array(
					'usgga_code'=>$res,
					'branch_id'=>$brc,
					'usgga_date'=>date('Y-m-d'),
					'usgga_sts'=>'0'
				);			
			$this->db->insert('trx_usage_ga',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['usgga_code'] = $res;
			$data2 = array(
					'usgga_id' => $insID,
					'hisusgga_sts' => 'Void By System',
					'hisusgga_old' => 'None',
					'hisusgga_new' => 'None',
					'hisusgga_info' => 'Create By System',
					'hisusgga_date' => date('Y-m-d'),
					'hisusgga_upcount' => 0
				);
			$this->db->insert('his_usgga',$data2);
			return  $out;
		}

		public function gen_num_retusagega()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('usage_ga_ret','rtusgga_code','RPG');
			$res = $this->gen_numbybrc_('usage_ga_ret','rtusgga_code',$brc,'RPG');
			$check = $this->db->get_where('usage_ga_ret',array('rtusgga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('usage_ga_ret','rtusgga_code','RPG');
				$res = $this->gen_numbybrc_('usage_ga_ret','rtusgga_code',$brc,'RPG');
			}
			$data = array(
					'rtusgga_code'=>$res,
					'branch_id'=>$brc,
					'rtusgga_date'=>date('Y-m-d'),
					'rtusgga_sts'=>'0'
				);			
			$this->db->insert('usage_ga_ret',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['rtusgga_code'] = $res;
			$data2 = array(
					'rtusgga_id' => $insID,
					'hisrtusgga_sts' => 'Void By System',
					'hisrtusgga_old' => 'None',
					'hisrtusgga_new' => 'None',
					'hisrtusgga_info' => 'Create By System',
					'hisrtusgga_date' => date('Y-m-d'),
					'hisrtusgga_upcount' => 0
				);
			$this->db->insert('his_rtusgga',$data2);
			return  $out;
		}

		//Gen Logistik
		public function gen_numpolgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_po','po_code','PO');
			$res = $this->gen_numbybrc_('trx_po','po_code',$brc,'PO');
			$check = $this->db->get_where('trx_po',array('po_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_po','po_code','PO');
				$res = $this->gen_numbybrc_('trx_po','po_code',$brc,'PO');
			}
			$data = array(
					'po_code'=>$res,
					'branch_id'=>$brc,
					'po_date'=>date('Y-m-d'),
					'po_sts'=>'0'
				);
			$this->db->insert('trx_po',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['po_code'] = $res;
			$data2 = array(
					'po_id' => $insID,
					'hispo_sts' => 'Void By System',
					'hispo_old' => 'None',
					'hispo_new' => 'None',
					'hispo_info' => 'Create By System',
					'hispo_date' => date('Y-m-d'),
					'hispo_time' => date('H:i:s'),
					'hispo_upcount' => 0
				);
			$this->db->insert('his_po',$data2);
			return  $out;
		}

		public function gen_numbllgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_procurement','prc_code','BL');
			$res = $this->gen_numbybrc_('trx_procurement','prc_code',$brc,'BL');
			$check = $this->db->get_where('trx_procurement',array('prc_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_procurement','prc_code','BL');
				$res = $this->gen_numbybrc_('trx_procurement','prc_code',$brc,'BL');
			}
			$data = array(
					'prc_code'=>$res,
					'branch_id'=>$brc,
					'prc_date'=>date('Y-m-d'),
					'prc_sts'=>'0'
				);			
			$this->db->insert('trx_procurement',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['prc_code'] = $res;
			$data2 = array(
					'prc_id' => $insID,
					'hisprc_sts' => 'Void By System',
					'hisprc_old' => 'None',
					'hisprc_new' => 'None',
					'hisprc_info' => 'Create By System',
					'hisprc_date' => date('Y-m-d'),
					'hisprc_time' => date('H:i:s'),
					'hisprc_upcount' => 0
				);
			$this->db->insert('his_prc',$data2);
			return  $out;
		}

		public function gen_numblsublgt()
		{
			$brc = $this->session->userdata('user_branch');
			$res = $this->gen_numbybrc_('trx_procurement','prc_code',$brc,'BL');
			$check = $this->db->get_where('trx_procurement',array('prc_code' => $res));
			if($check->num_rows() > 0)
			{
				$res = $this->gen_numbybrc_('trx_procurement','prc_code',$brc,'BL');
			}
			$data = array(
					'prc_code'=>$res,
					'branch_id'=>$brc,
					'prc_substs'=>'0',
					'prc_date'=>date('Y-m-d'),
					'prc_sts'=>'0'
				);			
			$this->db->insert('trx_procurement',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['prc_code'] = $res;
			$data2 = array(
					'prc_id' => $insID,
					'hisprc_sts' => 'Void By System',
					'hisprc_old' => 'None',
					'hisprc_new' => 'None',
					'hisprc_info' => 'Create By System',
					'hisprc_date' => date('Y-m-d'),
					'hisprc_time' => date('H:i:s'),
					'hisprc_upcount' => 0
				);
			$this->db->insert('his_prc',$data2);
			return  $out;
		}

		public function gen_numretlgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('procurement_ret','rtprc_code','RB');
			$res = $this->gen_numbybrc_('procurement_ret','rtprc_code',$brc,'RB');
			$check = $this->db->get_where('procurement_ret',array('rtprc_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('procurement_ret','rtprc_code','RB');
				$res = $this->gen_numbybrc_('procurement_ret','rtprc_code',$brc,'RB');
			}
			$data = array(
					'rtprc_code'=>$res,
					'branch_id'=>$brc,
					'rtprc_date'=>date('Y-m-d'),
					'rtprc_sts'=>'0'
				);			
			$this->db->insert('procurement_ret',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['rtprc_code'] = $res;
			$data2 = array(
					'rtprc_id' => $insID,
					'hisrtprc_sts' => 'Void By System',
					'hisrtprc_old' => 'None',
					'hisrtprc_new' => 'None',
					'hisrtprc_info' => 'Create By System',
					'hisrtprc_date' => date('Y-m-d'),
					'hisrtprc_upcount' => 0
				);
			$this->db->insert('his_retprc',$data2);
			return  $out;
		}

		public function gen_numusagelgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_usage','usg_code','PK');
			$res = $this->gen_numbybrc_('trx_usage','usg_code',$brc,'PK');
			$check = $this->db->get_where('trx_usage',array('usg_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_usage','usg_code','PK');
				$res = $this->gen_numbybrc_('trx_usage','usg_code',$brc,'PK');
			}
			$data = array(
					'usg_code'=>$res,
					'branch_id'=>$brc,
					'usg_date'=>date('Y-m-d'),
					'usg_sts'=>'0'
				);			
			$this->db->insert('trx_usage',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['usg_code'] = $res;
			$data2 = array(
					'usg_id' => $insID,
					'hisusg_sts' => 'Void By System',
					'hisusg_old' => 'None',
					'hisusg_new' => 'None',
					'hisusg_info' => 'Create By System',
					'hisusg_date' => date('Y-m-d'),
					'hisusg_upcount' => 0
				);
			$this->db->insert('his_usg',$data2);
			return  $out;
		}

		public function gen_num_retusagelgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('usage_ret','rtusg_code','RPK');
			$res = $this->gen_numbybrc_('usage_ret','rtusg_code',$brc,'RPK');
			$check = $this->db->get_where('usage_ret',array('rtusg_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('usage_ret','rtusg_code','RPK');
				$res = $this->gen_numbybrc_('usage_ret','rtusg_code',$brc,'RPK');
			}
			$data = array(
					'rtusg_code'=>$res,
					'branch_id'=>$brc,
					'rtusg_date'=>date('Y-m-d'),
					'rtusg_sts'=>'0'
				);			
			$this->db->insert('usage_ret',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['rtusg_code'] = $res;
			$data2 = array(
					'rtusg_id' => $insID,
					'hisrtusg_sts' => 'Void By System',
					'hisrtusg_old' => 'None',
					'hisrtusg_new' => 'None',
					'hisrtusg_info' => 'Create By System',
					'hisrtusg_date' => date('Y-m-d'),
					'hisrtusg_upcount' => 0
				);
			$this->db->insert('his_retusg',$data2);
			return  $out;
		}

		public function gen_num_adjlgt()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_adjustment','adj_code','PS');
			$res = $this->gen_numbybrc_('trx_adjustment','adj_code',$brc,'PS');
			$check = $this->db->get_where('trx_adjustment',array('adj_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_adjustment','adj_code','PS');
				$res = $this->gen_numbybrc_('trx_adjustment','adj_code',$brc,'PS');
			}
			$data = array(
					'adj_code'=>$res,
					'branch_id'=>$brc,
					'adj_date'=>date('Y-m-d'),
					'adj_dtsts'=>'0'
				);			
			$this->db->insert('trx_adjustment',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['adj_code'] = $res;
			$data2 = array(
					'adj_id' => $insID,
					'hisadj_sts' => 'Void By System',
					'hisadj_old' => 'None',
					'hisadj_new' => 'None',
					'hisadj_info' => 'Create By System',
					'hisadj_date' => date('Y-m-d'),
					'hisadj_upcount' => 0
				);
			$this->db->insert('his_adj',$data2);
			return  $out;
		}

		public function gen_num_adjga()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_adj_ga','adjga_code','PSG');
			$res = $this->gen_numbybrc_('trx_adj_ga','adjga_code',$brc,'PSG');
			$check = $this->db->get_where('trx_adj_ga',array('adjga_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_adj_ga','adjga_code','PSG');
				$res = $this->gen_numbybrc_('trx_adj_ga','adjga_code',$brc,'PSG');
			}
			$data = array(
					'adjga_code'=>$res,
					'branch_id'=>$brc,
					'adjga_date'=>date('Y-m-d'),
					'adjga_dtsts'=>'0'
				);			
			$this->db->insert('trx_adj_ga',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['adjga_code'] = $res;
			$data2 = array(
					'adjga_id' => $insID,
					'hisadjga_sts' => 'Void By System',
					'hisadjga_old' => 'None',
					'hisadjga_new' => 'None',
					'hisadjga_info' => 'Create By System',
					'hisadjga_date' => date('Y-m-d'),
					'hisadjga_upcount' => 0
				);
			$this->db->insert('his_adjga',$data2);
			return  $out;
		}

		public function gen_num_bapplgt()
		{
			$brc = $this->session->userdata('user_branch');
			$res = $this->gen_numbybrc_('trx_bapplog','balg_code',$brc,'B1');
			$check = $this->db->get_where('trx_bapplog',array('balg_code' => $res));
			if($check->num_rows() > 0)
			{
				$res = $this->gen_numbybrc_('trx_bapplog','balg_code',$brc,'B1');
			}
			$data = array(
					'balg_code'=>$res,
					'branch_id'=>$brc,
					'balg_date'=>date('Y-m-d'),
					'balg_sts'=>'0'
				);			
			$this->db->insert('trx_bapplog',$data);			
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['bapp_code'] = $res;
			$data2 = array(
					'balg_id' => $insID,
					'hisbalg_sts' => 'Void By System',
					'hisbalg_old' => 'None',
					'hisbalg_new' => 'None',
					'hisbalg_info' => 'Create By System',
					'hisbalg_date' => date('Y-m-d'),
					'hisbalg_time' => date('H:i:s'),
					'hisbalg_upcount' => 0
				);
			$this->db->insert('his_bapplog',$data2);
			return  $out;
		}

		//Gen Nomor Approval
		public function gen_numappr()
		{
			$brc = $this->session->userdata('user_branch');
			$res = $this->gen_numbybrc_('trx_approvalbill','appr_code',$brc,'AB');
			$check = $this->db->get_where('trx_approvalbill',array('appr_code' => $res));
			if($check->num_rows() > 0)
			{
				$res = $this->gen_numbybrc_('trx_approvalbill','appr_code',$brc,'AB');
			}
			$data = array(
					'appr_code'=>$res,
					'branch_id'=>$brc,
					'appr_date'=>date('Y-m-d'),
					'appr_sts'=>'0'
				);			
			$this->db->insert('trx_approvalbill',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['appr_code'] = $res;
			$data2 = array(
					'appr_id' => $insID,
					'hisappr_sts' => 'Void By System',
					'hisappr_old' => 'None',
					'hisappr_new' => 'None',
					'hisappr_info' => 'Create By System',
					'hisappr_date' => date('Y-m-d'),
					'hisappr_time' => date('H:i:s'),
					'hisappr_upcount' => 0
				);
			$this->db->insert('his_approvalbill',$data2);
			return  $out;
		}

		//Gen Nomor BAPP
		public function gen_numbapp()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_bapp','bapp_code','BA');
			$res = $this->gen_numbybrc_('trx_bapp','bapp_code',$brc,'BA');
			$check = $this->db->get_where('trx_bapp',array('bapp_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_bapp','bapp_code','BA');
				$res = $this->gen_numbybrc_('trx_bapp','bapp_code',$brc,'BA');
			}
			$data = array(
					'bapp_code'=>$res,
					'branch_id'=>$brc,
					'bapp_date'=>date('Y-m-d'),
					'bapp_sts'=>'0'
				);			
			$this->db->insert('trx_bapp',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['bapp_code'] = $res;
			$data2 = array(
					'bapp_id' => $insID,
					'hisbapp_sts' => 'Void By System',
					'hisbapp_old' => 'None',
					'hisbapp_new' => 'None',
					'hisbapp_info' => 'Create By System',
					'hisbapp_date' => date('Y-m-d'),
					'hisbapp_time' => date('H:i:s'),
					'hisbapp_upcount' => 0
				);
			$this->db->insert('his_bapp',$data2);
			return  $out;
		}

		//Gen Nomor Invoice
		public function gen_numinvo()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_invoice','inv_code','INV');
			$res = $this->gen_numbybrc_('trx_invoice','inv_code',$brc,'INV');
			$check = $this->db->get_where('trx_invoice',array('inv_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_invoice','inv_code','INV');
				$res = $this->gen_numbybrc_('trx_invoice','inv_code',$brc,'INV');
			}
			$data = array(
					'inv_code'=>$res,
					'branch_id'=>$brc,
					'inv_date'=>date('Y-m-d'),
					'inv_sts'=>'0'
				);			
			$this->db->insert('trx_invoice',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['invo_code'] = $res;
			$data2 = array(
					'inv_id' => $insID,
					'hisinv_sts' => 'Void By System',
					'hisinv_old' => 'None',
					'hisinv_new' => 'None',
					'hisinv_info' => 'Create By System',
					'hisinv_date' => date('Y-m-d'),
					'hisinv_time' => date('H:i:s'),
					'hisinv_upcount' => 0
				);
			$this->db->insert('his_inv',$data2);
			return  $out;
		}

		//Gen Nomor Journal
		public function gen_numjou()
		{
			$res = $this->gen_num_('account_journal','jou_code','JOU');
			$check = $this->db->get_where('account_journal',array('jou_code' => $res));
			if($check->num_rows() > 0)
			{
				$res = $this->gen_num_('account_journal','jou_code','JOU');
			}
			$data = array(
					'jou_code'=>$res,
					'jou_sts'=>'0'
				);			
			$this->db->insert('account_journal',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['jou_code'] = $res;
			return  $out;
		}

		//Gen Nomor Permit Approval
		public function gen_numpermitappr()
		{
			$brc = $this->session->userdata('user_branch');
			// $res = $this->gen_num_('trx_permitappr','pappr_code','PI');
			$res = $this->gen_numbybrc_('trx_permitappr','pappr_code',$brc,'PI');
			$check = $this->db->get_where('trx_permitappr',array('pappr_code' => $res));
			if($check->num_rows() > 0)
			{
				// $res = $this->gen_num_('trx_permitappr','pappr_code','PI');
				$res = $this->gen_numbybrc_('trx_permitappr','pappr_code',$brc,'PI');
			}
			$data = array(
					'pappr_code'=>$res,
					'branch_id'=>$brc,
					'pappr_date'=>date('Y-m-d'),
					'pappr_sts'=>'0'
				);			
			$this->db->insert('trx_permitappr',$data);
			$insID = $this->db->insert_id();
			$out['insertId'] = $insID;
			$out['pappr_code'] = $res;
			$data2 = array(
					'pappr_id' => $insID,
					'hispappr_sts' => 'Void By System',
					'hispappr_old' => 'None',
					'hispappr_new' => 'None',
					'hispappr_info' => 'Create By System',
					'hispappr_date' => date('Y-m-d'),
					'hispappr_upcount' => 0
				);
			$this->db->insert('his_pappr',$data2);
			return  $out;
		}
	}
?>