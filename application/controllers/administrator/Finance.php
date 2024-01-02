<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Finance extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('CRUD/M_finance','finance');
			$this->load->model('datatables/Dt_coa_parent','srch_acc');
			$this->load->model('datatables/Dt_coa_account','srch_acc2');
			$this->load->model('datatables/Dt_coa','srch_acc3');
			$this->load->model('datatables/Dt_srchcust','srch_cust');
			$this->load->model('datatables/Dt_srchcurr','srch_curr');
			$this->load->model('datatables/Dt_srchappr','srch_appr');
			$this->load->model('datatables/Dt_srchsupp','srch_supp');
		    $this->load->model('datatables/Dt_srchbank','srch_bank');
		    $this->load->model('datatables/search/Dt_srchapprinv','srch_apprinv');
		    $this->load->model('datatables/search/Dt_srchcashin','srch_km');
		    $this->load->model('datatables/search/Dt_srchcashout','srch_kk');
		    $this->load->model('datatables/Dt_srchprc','srch_prc');
		    $this->load->model('datatables/Dt_srchprcbyid','srch_prcbyid');
		    $this->load->model('datatables/search/Dt_srchbudget','srch_ra');
		    $this->load->model('datatables/search/Dt_srchbankin','srch_bm');
		    $this->load->model('datatables/search/Dt_srchbankout','srch_bk');
            $this->load->model('datatables/search/Dt_srchgiroin','srch_gm');
            $this->load->model('datatables/search/Dt_srchgiroinrec','srch_gmrec');
            $this->load->model('datatables/search/Dt_srchgiroout','srch_gk');
            $this->load->model('datatables/search/Dt_srchgirooutrec','srch_gkrec');
            $this->load->model('datatables/search/Dt_srchinvbyid','s_inv');
            $this->load->model('datatables/showdata/Dt_showinvppn','showinvppn');
		}

		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='dash_finance';
			$data['isi']='menu/administrator/finance/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function get_numbsp($value)
		{
			$data['terbilang'] = $this->gen->number_conv($value);
			echo json_encode($data);
		}

		public function get_printbankinv($id)
		{
			$data = $this->db->get_where('other_settings',array('branch_id'=>$id))->row();
			echo json_encode($data);
		}

		public function gen_invo()
		{
			$gen = $this->gen->gen_numinvo();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['invo_code'];
			echo json_encode($data);
		}

        public function gen_cashin()
		{
			$gen = $this->gen->gen_numcashin();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['csh_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

        public function gen_cashout()
		{
			$gen = $this->gen->gen_numcashout();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['csho_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_bankin()
		{
			$gen = $this->gen->gen_numbankin();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['bnk_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_bankout()
		{
			$gen = $this->gen->gen_numbankout();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['bnko_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_giroin()
		{
			$gen = $this->gen->gen_giroin();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['grin_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_giroout()
		{
			$gen = $this->gen->gen_giroout();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['grout_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_tax()
		{
			$data['id'] = '7';
			$data['kode'] = 'FP/1801/000001';
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_pos_ppn()
		{
			$data['id'] = '1';
			$data['kode'] = 'PC/1802/000001';
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function fin_invoice()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='inv';
			$data['isi']='menu/administrator/finance/trx_fin_invoice';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_invoice($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_inv';
			$this->load->view('menu/administrator/finance/print_inv_new',$data);
		}

		public function print_invoicetax($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_inv';
			$this->load->view('menu/administrator/finance/print_invoicetax',$data);
		}

		public function rpt_invoice()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_invoice';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_rptinv()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['cust'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['appr'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['rpttype'] = ($this->uri->segment(9) == 'null') ? '' : $this->uri->segment(9);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_reportinvoice',$data);
		}

		public function gen_rptinv()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('cust_id'))
			{
				$this->db->where('b.cust_id', $this->input->post('cust_id') );
			}
			if ($this->input->post('appr_id'))
			{
				$this->db->where('a.appr_id', $this->input->post('appr_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		$this->db->where('b.inv_date <=', $this->input->post('date_end'));
			}
			$this->db->from('inv_details a');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->join('trx_approvalbill c','c.appr_id = a.appr_id');
			$this->db->join('master_location d','d.loc_id = c.loc_id');
			$this->db->join('master_customer e','e.cust_id = b.cust_id');
			$this->db->join('master_branch f','f.branch_id = b.branch_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function gen_rptinvtax()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('cust_id'))
			{
				$this->db->where('b.cust_id', $this->input->post('cust_id') );
			}
			if ($this->input->post('appr_id'))
			{
				$this->db->where('a.appr_id', $this->input->post('appr_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		$this->db->where('b.inv_date <=', $this->input->post('date_end'));
			}
			$this->db->where('a.invdet_id NOT IN (select invdet_id from tax_inv_details)');
			$this->db->from('inv_details a');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->join('trx_approvalbill c','c.appr_id = a.appr_id');
			$this->db->join('master_location d','d.loc_id = c.loc_id');
			$this->db->join('master_customer e','e.cust_id = b.cust_id');
			$this->db->join('master_branch f','f.branch_id = b.branch_id');			
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function gen_rptaccrcv()
		{  
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('cust_id'))
			{
				$this->db->where('b.cust_id', $this->input->post('cust_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		$this->db->where('b.inv_date <=', $this->input->post('date_end'));
			}
			$this->db->from('inv_details a');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->join('master_customer e','e.cust_id = b.cust_id');
			$this->db->join('master_branch f','f.branch_id = b.branch_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function gen_rptaccrcvsummary()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('cust_id'))
			{
				$this->db->where('b.cust_id', $this->input->post('cust_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.inv_date >=', $this->input->post('date_start'));
        		$this->db->where('b.inv_date <=', $this->input->post('date_end'));
			}
			$this->db->select('d.BRANCH_NAME as BRANCH_NAME,c.cust_code as kode, c.cust_name as nama,b.inv_code, sum(a.INVDET_AMOUNT) as total');
			$this->db->from('inv_details a');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->join('master_customer c','c.cust_id = b.cust_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('c.cust_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function gen_rptaccpay()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('supp_id'))
			{
				$this->db->where('c.supp_id', $this->input->post('supp_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('b.prc_date <=', $this->input->post('date_end'));
			}
			$this->db->from('prc_details a');
			$this->db->join('trx_procurement b','b.prc_id = a.prc_id');
			$this->db->join('trx_po c','c.po_id = b.po_id');
			$this->db->join('master_supplier e','e.supp_id = c.supp_id');
			$this->db->join('master_branch f','f.branch_id = b.branch_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function gen_rptaccpaysummary()
		{
			if ($this->input->post('branch'))
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('supp_id'))
			{
				$this->db->where('c.supp_id', $this->input->post('supp_id') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('b.prc_date <=', $this->input->post('date_end'));
			}
			$this->db->select('f.BRANCH_NAME as BRANCH_NAME,e.supp_code as kode, e.supp_name as nama,b.prc_code, sum(a.PRCDET_SUB) as total');
			$this->db->from('prc_details a');
			$this->db->join('trx_procurement b','b.prc_id = a.prc_id');
			$this->db->join('trx_po c','c.po_id = b.po_id');
			$this->db->join('master_supplier e','e.supp_id = c.supp_id');
			$this->db->join('master_branch f','f.branch_id = b.branch_id');
			$this->db->group_by('c.supp_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function rpt_accrcv()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_accrcv';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function rpt_agercv()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_agercv';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function rpt_accpay()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_accpay';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function rpt_cash()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_cash';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_rptcash()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['coa'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_reportcash',$data);
		}

		public function print_rptdcash()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['coa'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_reportdcash',$data);
		}

		public function gen_rptcash()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coa_id'))?$this->input->post('coa_id'):NULL;
			$datestr = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->finance->get_trxcashin($brc,$coa,$datestr,$dateend);
			$data['b'] = $this->finance->get_trxcashout($brc,$coa,$datestr,$dateend);
			$data['g'] = $this->finance->gen_saldostr($brc,$coa,$datestr,$dateend);
			$data['c'] = $this->finance->get_cashsaldosum('trx_cash_in a','sum(d.CSHDETIN_AMOUNT) as SUM','cashin_det d','d.csh_id = a.csh_id','a.csh_date <',$this->input->post('branch'),$this->input->post('coa_id'),$this->input->post('date_start'));
			$data['d'] = $this->finance->get_cashsaldosum('trx_cash_out a','sum(d.CSHODET_AMOUNT) as SUM','cashout_det d','d.csho_id = a.csho_id','a.csho_date <',$this->input->post('branch'),$this->input->post('coa_id'),$this->input->post('date_start'));
			$get = $this->db->get_where('other_settings',array('branch_id'=>$brc));
			$notafin = $get->row()->NOTAFIN_ACC;
			$data['e'] = $this->finance->get_notafinsum('trx_cash_in a','sum(d.CSHDETIN_AMOUNT) as SUM','cashin_det d','d.csh_id = a.csh_id','a.csh_date <',$this->input->post('branch'),$notafin,$this->input->post('date_start'));
			$data['f'] = $this->finance->get_notafinsum('trx_cash_out a','sum(d.CSHODET_AMOUNT) as SUM','cashout_det d','d.csho_id = a.csho_id','a.csho_date <',$this->input->post('branch'),$notafin,$this->input->post('date_start'));
			$data['g'] = $this->db->get_where('chart_of_account',array('coa_id'=>$coa))->row();
			echo json_encode($data);
		}

		public function gen_rptcashsaldostr()
		{
			$this->db->select('sum(d.CSHDETIN_AMOUNT) as SUMD');
			$this->db->from('trx_cash_in a');
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('cashin_det d','d.csh_id = a.csh_id');
			$this->db->where('b.branch_id', $this->input->post('branch'));
			$this->db->where('c.coa_id', $this->input->post('coa_id'));
			$this->db->where('a.csh_date <', $this->input->post('date_start'));
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data['a'] = $que->row();
			$this->db->select('sum(d.CSHODET_AMOUNT) as SUMC');
			$this->db->from('trx_cash_out a');
			$this->db->join('master_branch b','b.branch_id = a.branch_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('cashout_det d','d.csho_id = a.csho_id');
			$this->db->where('b.branch_id', $this->input->post('branch'));
			$this->db->where('c.coa_id', $this->input->post('coa_id'));
			$this->db->where('a.csho_date <', $this->input->post('date_start'));
			$this->db->group_by('a.coa_id');
			$queb = $this->db->get();
			$data['b'] = $queb->row();
			echo json_encode($data);
		}

		public function rpt_bank()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/report_bank';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_rptbank()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['coa'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_reportbank',$data);
		}

		public function print_rptdbank()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['coa'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_reportdbank',$data);
		}

		public function gen_rptbank()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coa_id'))?$this->input->post('coa_id'):NULL;
			$datestr = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->finance->get_trxbankin($brc,$coa,$datestr,$dateend);
			$data['b'] = $this->finance->get_trxbankout($brc,$coa,$datestr,$dateend);
			$data['c'] = $this->finance->get_trxgiroin($brc,$coa,$datestr,$dateend);
			$data['d'] = $this->finance->get_trxgiroout($brc,$coa,$datestr,$dateend);
			$data['e'] = $this->finance->get_banksaldosum('trx_bankin a','sum(d.BNKDET_AMOUNT) as SUM','bankin_det d','d.bnk_id = a.bnk_id','a.bnk_date <',$brc,$coa,$datestr,'d.bnkdet_type = "T"');
			$data['f'] = $this->finance->get_banksaldosum('trx_bankout a','sum(d.BNKODET_AMOUNT) as SUM','bankout_det d','d.bnko_id = a.bnko_id','a.bnko_date <',$brc,$coa,$datestr,'d.bnkodet_type = "T"');
			$data['g'] = $this->finance->get_girosaldosum('trx_giro_in a','sum(d.GRINDET_AMOUNT) as SUM','giroin_det d','d.grin_id = a.grin_id','a.grin_date <',$brc,$coa,$datestr);
			$data['h'] = $this->finance->get_girosaldosum('trx_giro_out a','sum(d.GROUTDET_AMOUNT) as SUM','giroout_det d','d.grout_id = a.grout_id','a.grout_date <',$brc,$coa,$datestr);
			$data['i'] = $this->db->get_where('chart_of_account',array('coa_id'=>$coa))->row();
			echo json_encode($data);
		}

		public function cash_in()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Kas Masuk';
			$data['menu']='finance';
			$data['menulist']='cashin';
			$data['account'] = $this->crud->get_coa();
			$data['customer'] = $this->crud->get_cst();
			$data['mu'] = $this->crud->get_mu();
			$data['isi']='menu/administrator/finance/fin_/trx_cashin';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function cash_out()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Kas Keluar';
			$data['menu']='finance';
			$data['menulist']='cashout';
			$data['account'] = $this->crud->get_coa();
			$data['supplier'] = $this->crud->get_supplier();
			$data['mu'] = $this->crud->get_mu();
			$data['isi']='menu/administrator/finance/fin_/trx_cashout';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function bank_in()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Bank Masuk';
			$data['menu']='finance';
			$data['menulist']='bankin';
			$data['account'] = $this->crud->get_coa();
			$data['customer'] = $this->crud->get_cst();
			$data['bank'] = $this->crud->get_bank();
			$data['mu'] = $this->crud->get_mu();
			$data['isi']='menu/administrator/finance/fin_/trx_bankin';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function bank_out()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Bank Keluar';
			$data['menu']='finance';
			$data['menulist']='bankout';
			$data['account'] = $this->crud->get_coa();
			$data['supplier'] = $this->crud->get_supplier();
			$data['bank'] = $this->crud->get_bank();
			$data['mu'] = $this->crud->get_mu();
			$data['isi']='menu/administrator/finance/fin_/trx_bankout';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function bg_in()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Giro Masuk';
			$data['menu']='finance';
			$data['menulist']='bgin';
			$data['bank'] = $this->crud->get_bank();
			$data['isi']='menu/administrator/finance/fin_/trx_giroin';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function bg_out()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Giro Keluar';
			$data['menu']='finance';
			$data['menulist']='bgout';
			$data['bank'] = $this->crud->get_bank();
			$data['isi']='menu/administrator/finance/fin_/trx_giroout';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function f_pjk()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Giro Keluar';
			$data['menu']='finance';
			$data['menulist']='fpjk';
			$data['invoice'] = $this->crud->get_inv();
			$data['isi']='menu/administrator/finance/fin_/trx_taxinvoice';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function branch_ppn()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Posting PPN Cabang';
			$data['menu']='finance';
			$data['menulist']='ppnbrc';
			$data['invoice'] = $this->crud->get_inv();
			$data['isi']='menu/administrator/finance/fin_/trx_posting_ppn_cabang';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Report';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/finance/fin_/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_km()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_km';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_km($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/km_print_new',$data);
		}

		public function print_kk()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_kk';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_kk($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/kk_print_new',$data);
		}

		public function print_bm()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bm';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_bm($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bm_print_new',$data);
		}

		public function print_bk()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bk';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_bk($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bk_print_new',$data);
		}

        public function print_gm()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_gm';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_gm($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/gm_print',$data);
		}

		public function print_gk()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_gk';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_gk($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/gk_print',$data);
		}

		public function print_bkas()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bkas';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_bkas($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bkas_print',$data);
		}

		public function print_bbank()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bbank';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_bbank($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bbank_print',$data);
		}

        public function print_giro_tr()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_tr($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_print',$data);
		}

		public function print_giro_tgl()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_tgl';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_tgl($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_tgl_print',$data);
		}

		public function print_giro_supp()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_supp';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_supp($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_supp_print',$data);
		}

		public function print_giro_cust()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_cust';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_cust($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_cust_print',$data);
		}

		public function print_giro_blm_cr()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_belum_cair';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_blm_cr($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_belum_cair_print',$data);
		}

        public function print_giro_masuk_sdh_cr()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_masuk_sudah_cair';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_giro_keluar_sdh_cr()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_keluar_sudah_cair';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_masuk_sdh_cr($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_masuk_sudah_cair_print',$data);
		}

		public function pageprint_giro_keluar_sdh_cr($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_keluar_sudah_cair_print',$data);
		}

		public function print_giro_in()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_masuk';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_in($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_masuk_print',$data);
		}

		public function print_giro_out()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_bgiro_keluar';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_giro_out($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/bgiro_keluar_print',$data);
		}

		public function pageprint_bfaktur($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['id'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/fin_/faktur_print',$data);
		}

		public function print_FP_Nomor()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_fp_nomor';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_FP_Nomor()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/Finance/fin_/fp_nomor_print',$data);
		}

		public function print_FP_Nomor_Summary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_fp_nomor_summary';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_FP_Nomor_Summary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/Finance/fin_/fp_nomor_summary_print',$data);
		}

		public function print_FP_Customer()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_fp_customer';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_FP_Customer()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/Finance/fin_/fp_customer_print',$data);
		}

		public function print_FP_Proyek()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_fp_proyek';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_FP_Proyek()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/Finance/fin_/fp_proyek_print',$data);
		}

		public function print_FP_Invoice()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$data['isi']='menu/administrator/Finance/fin_/lgt_print_fp_invoice';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_FP_Invoice()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/Finance/fin_/fp_invoice_print',$data);
		}

		public function ajax_pick_acc($id)
		{
			$data = $this->crud->get_by_id('chart_of_account',array('COA_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_cst($id)
		{
			$data = $this->crud->get_by_id('master_customer',array('CUST_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_curr($id)
		{
			$data = $this->crud->get_by_id('master_currency',array('CURR_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_appr($id)
		{
			$data = $this->crud->get_by_id('trx_approvalbill',array('APPR_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_apprinv($id)
		{
			$data = $this->crud->get_by_id6('inv_details','trx_approvalbill','appr_terms_det','master_location',array('inv_details.INVDET_ID' => $id),'inv_details.appr_id=trx_approvalbill.appr_id','appr_terms_det.appr_id=trx_approvalbill.appr_id','trx_approvalbill.loc_id=master_location.loc_id');
        	echo json_encode($data);
		}

        public function ajax_pick_supp($id)
		{
			$data = $this->crud->get_by_id('master_supplier',array('SUPP_ID' => $id));
        	echo json_encode($data);
		}
		
		public function ajax_pick_dept($id)
		{
			$data = $this->crud->get_by_id('master_dept',array('DEPT_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_bank($id)
		{
			$data = $this->crud->get_by_id('master_bank',array('BANK_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_branch($id)
		{
			$data = $this->crud->get_by_id('master_branch',array('BRANCH_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_location($id)
		{
			$data = $this->crud->get_by_id('master_location',array('LOC_ID' => $id));
        	echo json_encode($data);
		}

        public function ajax_srch_cust()
		{
			$list = $this->srch_cust->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CUST_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->CUST_ADDRESS;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cust('."'".$dat->CUST_CODE."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_cust->count_all(),
							"recordsFiltered" => $this->srch_cust->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_inv($id)
		{
			$list = $this->s_inv->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->INV_INFO;								
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_inv('."'".$dat->INV_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_inv->count_all(),
							"recordsFiltered" => $this->s_inv->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_inv_ppn()
		{
			$list = $this->s_inv->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INV_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->INV_INFO;								
				$row[] = '<input type="checkbox" id="pilih" name="pilih" onclick="pick_inv_ppn('."'".$dat->INV_ID."'".')">';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_inv->count_all(),
							"recordsFiltered" => $this->s_inv->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_curr()
		{
			$list = $this->srch_curr->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CURR_CODE;
				$row[] = $dat->CURR_NAME;
				$row[] = $dat->CURR_RATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_curr('."'".$dat->CURR_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_curr->count_all(),
							"recordsFiltered" => $this->srch_curr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_acc($id)
		{
			$list = $this->srch_acc2->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_acc('."'".$dat->COA_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_acc2->count_all(),
							"recordsFiltered" => $this->srch_acc2->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_acc2()
		{
			$list = $this->srch_acc3->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_acc('."'".$dat->COA_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_acc3->count_all(),
							"recordsFiltered" => $this->srch_acc3->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_anggaran()
		{
			$list = $this->srch_ra->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BUD_CODE;
				$row[] = $dat->BUD_DATE;	
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->BUD_ADDRESS;			
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_anggaran('."'".$dat->BUD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_appr->count_all(),
							"recordsFiltered" => $this->srch_appr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_appr()
		{
			$list = $this->srch_appr->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;	
				$row[] = $dat->LOC_ADDRESS;			
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_appr('."'".$dat->APPR_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_appr->count_all(),
							"recordsFiltered" => $this->srch_appr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_apprinv($id)
		{
			$list = $this->srch_apprinv->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;	
				$row[] = $dat->LOC_ADDRESS;			
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprinv('."'".$dat->INVDET_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_apprinv->count_all($id),
							"recordsFiltered" => $this->srch_apprinv->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_srch_supp()
		{
			$list = $this->srch_supp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SUPP_CODE;
				$row[] = $dat->SUPP_NAME;
				$row[] = $dat->SUPP_ADDRESS;				
				$row[] = $dat->SUPP_CITY;
				$row[] = $dat->SUPP_PHONE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_supp('."'".$dat->SUPP_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_supp->count_all(),
							"recordsFiltered" => $this->srch_supp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_srch_dept()
		{
			$list = $this->srch_dept->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->DEPT_CODE;
				$row[] = $dat->DEPT_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_supp('."'".$dat->DEPT_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_supp->count_all(),
							"recordsFiltered" => $this->srch_supp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_bank()
		{
			$list = $this->srch_bank->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BANK_CODE;
				$row[] = $dat->BANK_NAME;
				$row[] = $dat->BANK_ACC.' A/N '.$dat->BANK_ACCNAME.', Cabang '.$dat->BANK_BRANCH.', '.$dat->BANK_PRODTYPE.', '.$dat->BANK_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bank('."'".$dat->BANK_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_bank->count_all(),
							"recordsFiltered" => $this->srch_bank->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_srch_giroin()
		{
			$list = $this->srch_gmrec->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRX_NUM;
				$row[] = number_format($dat->BNKTRX_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroin('."'".$dat->BNKTRX_NUM."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gmrec->count_all(),
							"recordsFiltered" => $this->srch_gmrec->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_giroout()
		{
			$list = $this->srch_gkrec->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRXO_NUM;
				$row[] = $dat->BNKTRXO_AMOUNT;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroout('."'".$dat->BNKTRXO_NUM."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gkrec->count_all(),
							"recordsFiltered" => $this->srch_gkrec->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_simpan_cash_in()
		{
			$cd = $this->input->post('kas_kode_customer');
			$cst = (substr($cd,0,4) != 'CST-')?NULL:$this->input->post('kas_customer_id');
			$csti = (substr($cd,0,4) != 'CSTI')?NULL:$this->input->post('kas_customer_id');
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'csh_code' => $this->input->post('kas_nomor'),
                'cust_id' => $cst,
                'cstin_id' => $csti,
	            'coa_id' => $this->input->post('acc_id'),
				'curr_id' => $this->input->post('curr_id'),
				'csh_sts' => '2',
				'csh_date' => $this->input->post('kas_tgl'),
				'csh_info' => $this->input->post('kas_info'),
				'csh_acc' => $this->input->post('kas_acc')
	            );
	        $update = $this->crud->update('trx_cash_in',$data,array('csh_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashin_save($this->input->post('kas_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_cash_in()
		{
			$data = array(
				'csh_sts' => '1'
	            );
	        $update = $this->crud->update('trx_cash_in',$data,array('csh_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashin_save($this->input->post('kas_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	        $cashin_code = $this->input->post('kas_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$cashin_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$infos = 'Kas Masuk '.$cashin_code.', '.$this->input->post('kas_info');
	    	$getsum = $this->finance->get_sumcashindet($this->input->post('kas_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$cashin_code,
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
	    	    $que2 = $this->db->get_where('cashin_det',array('csh_id'=>$this->input->post('kas_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->CSHDETIN_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$cashin_code,
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
				$que2 = $this->db->get_where('cashin_det',array('csh_id'=>$this->input->post('kas_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->CSHDETIN_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_cash_in()
		{
			$data = array(
				'csh_sts' => '0'
	            );
	        $update = $this->crud->update('trx_cash_in',$data,array('csh_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashin_save($this->input->post('kas_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_cash_in_detail()
		{
            $data = array(
                    'csh_id' => $this->input->post('kas_id'),
                    'coa_id' => $this->input->post('acc_id_detail'),
                    'cashindet_invid' => $this->input->post('invoice_id'),
                    'cshindet_reff' => $this->input->post('no_jual'),
                    'cshindet_info' => $this->input->post('ket_detail'),
                    'cshdetin_amount' => $this->input->post('nominal')
            	);
            $update = $this->crud->save('cashin_det',$data);
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_cash_in_detail($id)
		{
            $hapus = $this->crud->delete_by_id('cashin_det',array('cshindet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_cash_out()
		{
			$dpt = ($this->input->post('dept_id') != '')?$this->input->post('dept_id'):NULL;
			$supp = ($this->input->post('supp_id') != '')?$this->input->post('supp_id'):NULL;
			$appr = ($this->input->post('appr_id') != '')?$this->input->post('appr_id'):NULL;
			$bdg = ($this->input->post('anggaran_id') != '')?$this->input->post('anggaran_id'):NULL;
			$data = array(
	                'user_id' => $this->input->post('user_id'),
                    'csho_code' => $this->input->post('kas_nomor'),
                   	'csho_date' => $this->input->post('kas_tgl'),
                    'csho_appr' => $appr,
                    'csho_supp' => $supp,
                    'dept_id' => $dpt,
	                'coa_id' => $this->input->post('acc_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'csho_taxheadcode' => $this->input->post('head_taxnumber'),
	                'csho_taxcode' => $this->input->post('taxnumber'),
	                'csho_sts' => '2',
	                'csho_info' => $this->input->post('kas_keterangan'),
	                'csho_budget' => $bdg
	            );
	        $update = $this->crud->update('trx_cash_out',$data,array('csho_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashout_save($this->input->post('kas_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_cash_out()
		{
			$data = array(
	                'csho_sts' => '1'
	            );
	        $update = $this->crud->update('trx_cash_out',$data,array('csho_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashout_save($this->input->post('kas_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	        $cashout_code = $this->input->post('kas_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$cashout_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$infos = 'Kas Keluar '.$cashout_code.', '.$this->input->post('kas_keterangan');
	    	$getsum = $this->finance->get_sumcashoutdet($this->input->post('kas_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$cashout_code,
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
	    	    $que2 = $this->db->get_where('cashout_det',array('csho_id'=>$this->input->post('kas_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>$dat->CSHODET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$cashout_code,
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
				$que2 = $this->db->get_where('cashout_det',array('csho_id'=>$this->input->post('kas_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>$dat->CSHODET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_cash_out()
		{
			$data = array(
	                'csho_sts' => '0'
	            );
	        $update = $this->crud->update('trx_cash_out',$data,array('csho_id'=>$this->input->post('kas_id')));
	        $this->logupd_cashout_save($this->input->post('kas_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_cash_out_detail()
		{
            $data = array(
                    'csho_id' => $this->input->post('kas_id'),
                    'coa_id' => $this->input->post('acc_id_detail'),
                    'cshodet_prcid' => $this->input->post('id_beli'),
                    'cshodet_reff' => $this->input->post('no_beli'),
                    'cshodet_info' => $this->input->post('ket_detail'),
                    'cshodet_amount' => $this->input->post('nominal')
                );
            $update = $this->crud->save('cashout_det',$data);
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_cash_out_detail($id)
		{
            $hapus = $this->crud->delete_by_id('cashout_det',array('cshodet_id'=>$id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_bank_in()
		{
			$cd = $this->input->post('bank_kode_customer');
			$cst = (substr($cd,0,4) != 'CST-')?NULL:$this->input->post('bank_customer_id');
			$csti = (substr($cd,0,4) != 'CSTI')?NULL:$this->input->post('bank_customer_id');
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
                    'bnk_code' => $this->input->post('bank_nomor'),
                    'bank_id' => $this->input->post('kode_bank'),
                    'coa_id' => $this->input->post('acc_id'),
                    'cust_id' => $cst,
                    'cstin_id' => $csti,
	                'curr_id' => $this->input->post('curr_id'),
	                'bnk_sts' => '2',
	                'bnk_date' => $this->input->post('bank_tgl'),
	                'bnk_info' => $this->input->post('bank_info')              
	            );
	        $update = $this->crud->update('trx_bankin',$data,array('bnk_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankin_save($this->input->post('bank_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_bank_in()
		{
			$data = array(
	                'bnk_sts' => '1'            
	            );
	        $update = $this->crud->update('trx_bankin',$data,array('bnk_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankin_save($this->input->post('bank_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	        $bankin_code = $this->input->post('bank_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$bankin_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$infos = 'Bank Masuk '.$bankin_code.', '.$this->input->post('bank_info');
	    	$getsum = $this->finance->get_sumbankindet($this->input->post('bank_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$bankin_code,
						'jou_date'=>$this->input->post('bank_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id' => $get->JOU_ID));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
	    	    $que2 = $this->db->get_where('bankin_det',array('bnk_id'=>$this->input->post('bank_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->BNKDET_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$bankin_code,
						'jou_date'=>$this->input->post('bank_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
				$que2 = $this->db->get_where('bankin_det',array('bnk_id'=>$this->input->post('bank_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->BNKDET_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_bank_in()
		{
			$data = array(
	                'bnk_sts' => '0'            
	            );
	        $update = $this->crud->update('trx_bankin',$data,array('bnk_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankin_save($this->input->post('bank_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_bank_in_detail1()
		{
            $data = array(
                'bnk_id' => $this->input->post('bank_id'),
                'bnktrx_type' => $this->input->post('bank_type1'),
                'bnktrx_num' => $this->input->post('bank_no_giro1'),
                'bnktrx_date' => $this->input->post('bank_giro_tgl'),
                'bnktrx_amount' => $this->input->post('nominal1')
                );
            $update = $this->crud->save('bankin_trxdet',$data);
            $bnktrx= $this->db->insert_id();
            $type = $this->input->post('bank_type1');
            if ($type=='G')
            {
                $giro = array( 
            	    'bnktrx_id' => $bnktrx,
            	    'gir_reffcode' => $this->input->post('bank_no_giro1')
                    );
                $simpan_giroin_record = $this->crud->save('giroin_record',$giro);
            }
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_bank_in_detail2()
		{
            $data = array(
                'bnk_id' => $this->input->post('bank_id'),
                'coa_id' => $this->input->post('acc_id_detail'),
                'bnkdet_invid' => $this->input->post('invoice_id'),
                'bnkdet_num' => $this->input->post('bank_no_giro2'),
                'bnkdet_type' => $this->input->post('bank_type2'),
                'bnkdet_reff' => $this->input->post('no_jual'),
                'bnkdet_info' => $this->input->post('ket_detail'),
                'bnkdet_amount' => $this->input->post('nominal2')
                );
            $update = $this->crud->save('bankin_det',$data);
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_bank_in_detail1($id)
		{
			$get = $this->db->get_where('bankin_trxdet',array('bnktrx_id'=>$id))->row();
			if($get->BNKTRX_TYPE == 'G')
			{
				$idgirorc = $this->finance->get_idgiroinrc($id,$get->BNKTRX_NUM);
				$hapusgiroinrc = $this->crud->delete_by_id('giroin_record',array('gir_id'=>$idgirorc));
			}			
            $hapus = $this->crud->delete_by_id('bankin_trxdet',array('bnktrx_id'=>$id));
	        echo json_encode(array("status" => TRUE, "get" => $get)); 
		}

		public function ajax_hapus_bank_in_detail2($id)
		{
			$get = $this->db->get_where('bankin_det',array('bnkdet_id'=>$id))->row();
            $hapus = $this->crud->delete_by_id('bankin_det',array('bnkdet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_bank_out()
		{
			$appr = ($this->input->post('appr_id') != '')?$this->input->post('appr_id'):NULL;
			$supp = ($this->input->post('supp_id') != '')?$this->input->post('supp_id'):NULL;
			$loc = ($this->input->post('loc_id') != '')?$this->input->post('loc_id'):NULL;
			$dept = ($this->input->post('dept_id') != '')?$this->input->post('dept_id'):NULL;
			$bdg = ($this->input->post('anggaran_id') != '')?$this->input->post('anggaran_id'):NULL;
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
                    'bnko_code' => $this->input->post('bank_nomor'),
                    'bank_id' => $this->input->post('kode_bank'),
                    'coa_id' => $this->input->post('acc_id'),
                    'curr_id' => $this->input->post('curr_id'),
                    'dept_id' => $dept,
                    'bnko_supp' => $supp,
                    'bnko_loc' => $loc,
                    'bnko_appr' => $appr,
                    'bnko_budget' => $bdg,
	                'bnko_taxheadcode' => $this->input->post('head_taxnumber'),
	                'bnko_taxcode' => $this->input->post('taxnumber'),
	                'bnko_sts' => '2',
	                'bnko_date' => $this->input->post('bank_tgl'),
	                'bnko_info' => $this->input->post('bank_info')               
	            );
	        $update = $this->crud->update('trx_bankout',$data,array('bnko_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankout_save($this->input->post('bank_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_bank_out()
		{
			$data = array(
	                'bnko_sts' => '1'
	            );
	        $update = $this->crud->update('trx_bankout',$data,array('bnko_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankout_save($this->input->post('bank_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	    	$bankout_code = $this->input->post('bank_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$bankout_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$infos = 'Bank Keluar '.$bankout_code.', '.$this->input->post('bank_info');
	    	$getsum = $this->finance->get_sumbankoutdet($this->input->post('bank_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$bankout_code,
						'jou_date'=>$this->input->post('bank_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id' => $get->JOU_ID));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
	    	    $que2 = $this->db->get_where('bankout_det',array('bnko_id'=>$this->input->post('bank_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>$dat->BNKODET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$bankout_code,
						'jou_date'=>$this->input->post('bank_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
	    	    $que2 = $this->db->get_where('bankout_det',array('bnko_id'=>$this->input->post('bank_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat)
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$dat->COA_ID,
						'joudet_debit'=>$dat->BNKODET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_bank_out()
		{
			$data = array(
	                'bnko_sts' => '0'
	            );
	        $update = $this->crud->update('trx_bankout',$data,array('bnko_id'=>$this->input->post('bank_id')));
	        $this->logupd_bankout_save($this->input->post('bank_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_bank_out_detail1()
		{
            $data = array(
                'bnko_id' => $this->input->post('bank_id'),
                'bnktrxo_type' => $this->input->post('bank_type1'),
                'bnktrxo_num' => $this->input->post('bank_no_giro1'),
                'bnktrxo_date' => $this->input->post('bank_giro_tgl'),
                'bnktrxo_amount' => $this->input->post('nominal1')
                );
            $update = $this->crud->save('bankout_trxdet',$data);
            $bnktrx= $this->db->insert_id();
            $type = $this->input->post('bank_type1');
            if ($type=='G')
            {
                $giro = array( 
            	    'bnktrxo_id' => $bnktrx,
            	    'gor_reffcode' => $this->input->post('bank_no_giro1')
                    );
                $simpan_giroout_record = $this->crud->save('giroout_record',$giro);
            }
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_bank_out_detail2()
		{
            $data = array(
                'bnko_id' => $this->input->post('bank_id'),
                'coa_id' => $this->input->post('acc_id_detail'),
                'bnkodet_prcid' => $this->input->post('id_beli'),
                'bnkodet_num' => $this->input->post('bank_no_giro2'),
                'bnkodet_type' => $this->input->post('bank_type2'),
                'bnkodet_reff' => $this->input->post('no_beli'),
                'bnkodet_info' => $this->input->post('ket_detail'),
                'bnkodet_amount' => $this->input->post('nominal2')
                );
            $update = $this->crud->save('bankout_det',$data);
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_bank_out_detail1($id)
		{
			$get = $this->db->get_where('bankout_trxdet',array('bnktrxo_id'=>$id))->row();
			if($get->BNKTRXO_TYPE == 'G')
			{
				$idgirorc = $this->finance->get_idgirooutrc($id,$get->BNKTRXO_NUM);
				$hapusgirooutrc = $this->crud->delete_by_id('giroout_record',array('gor_id'=>$idgirorc));
			}			
            $hapus = $this->crud->delete_by_id('bankout_trxdet',array('bnktrxo_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_bank_out_detail2($id)
		{
			$get = $this->db->get_where('bankout_det',array('bnkodet_id'=>$id))->row();
            $hapus = $this->crud->delete_by_id('bankout_det',array('bnkodet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_giro_in()
		{
			$data = array(
	                'user_id' => $this->input->post('user_id'),
                    'grin_code' => $this->input->post('giro_nomor'),
                    'bank_id' => $this->input->post('giro_bank_id'),
                    'coa_id' => $this->input->post('giro_bank_acc_id'),
	                'grin_sts' => '2',
	                'grin_date' => $this->input->post('giro_tgl'),
	                'grin_info' => $this->input->post('giro_info')	                
	            );
	        $update = $this->crud->update('trx_giro_in',$data,array('grin_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroin_save($this->input->post('giro_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_giro_in()
		{
			$data = array(
	                'grin_sts' => '1'
	            );
	        $update = $this->crud->update('trx_giro_in',$data,array('grin_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroin_save($this->input->post('giro_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	        $giroin_code = $this->input->post('giro_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$giroin_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$coabank = $this->input->post('giro_bank_acc_id');
	    	$coagiro = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->ACCRCVGIRO_ACC;
	    	$infos = 'Pencairan Giro ke '.$this->input->post('giro_nama_bank').', '.$this->input->post('giro_info');
	    	$getsum = $this->finance->get_sumgrindet($this->input->post('giro_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$giroin_code,
						'jou_date'=>$this->input->post('giro_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id' => $get->JOU_ID));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$coagiro,
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
	    	    $que2 = $this->db->get_where('giroin_det',array('grin_id'=>$this->input->post('giro_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$coabank,
						'joudet_debit'=>$dat->GRINDET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$giroin_code,
						'jou_date'=>$this->input->post('giro_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$coagiro,
						'joudet_debit'=>0,
						'joudet_credit'=>$getsum
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
				$que2 = $this->db->get_where('giroin_det',array('grin_id'=>$this->input->post('giro_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$coabank,
						'joudet_debit'=>$dat->GRINDET_AMOUNT,
						'joudet_credit'=>0
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_giro_in()
		{
			$data = array(
	                'grin_sts' => '0'
	            );
	        $update = $this->crud->update('trx_giro_in',$data,array('grin_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroin_save($this->input->post('giro_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_giro_in_detail()
		{
            $data = array(
                    'grin_id' => $this->input->post('giro_id'),
                    'gir_id' => $this->input->post('gir_id'),
                    'grindet_date' => $this->input->post('tgl_giro'),
                    'grindet_code' => $this->input->post('nomor_giro'),
                    'grindet_amount' => $this->input->post('nominal')
                );
            $id = array('gr_number' => $this->input->post('nomor_giro'));
            $update = $this->crud->save('giroin_det',$data);
            $dtgirorec = array(
						'gir_dtsts' => '1'
					);
			$upgirorec = $this->crud->update('giroin_record',$dtgirorec,array('gir_id'=>$this->input->post('gir_id')));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_giro_in_detail($id)
		{
			$gircode = $this->db->get_where('giroin_det',array('grindet_id'=>$id))->row()->GRINDET_CODE;
			$girid = $this->db->get_where('giroin_record',array('gir_reffcode'=>$gircode))->row()->GIR_ID;
			$dtgirorec = array(
						'gir_dtsts' => '0'
					);
			$upgirorec = $this->crud->update('giroin_record',$dtgirorec,array('gir_id'=>$girid));
            $hapus = $this->crud->delete_by_id('giroin_det',array('grindet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_simpan_giro_out()
		{
			$data = array(
				    'user_id' => $this->input->post('user_id'),
                    'grout_code' => $this->input->post('giro_nomor'),
                    'bank_id' => $this->input->post('giro_bank_id'),
                    'coa_id' => $this->input->post('giro_bank_acc_id'),
	                'grout_sts' => '2',
	                'grout_date' => $this->input->post('giro_tgl'),
	                'grout_info' => $this->input->post('giro_info')
	            );
	        $update = $this->crud->update('trx_giro_out',$data,array('grout_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroout_save($this->input->post('giro_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approve_giro_out()
		{
			$data = array(
	                'grout_sts' => '1'
	            );
	        $update = $this->crud->update('trx_giro_out',$data,array('grout_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroout_save($this->input->post('giro_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	        $giroout_code = $this->input->post('giro_nomor');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$giroout_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$coabank = $this->input->post('giro_bank_acc_id');
	    	$coagiro = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->DEBTGIRO_ACC;
	    	$infos = 'Pencairan Giro dari '.$this->input->post('giro_nama_bank').', '.$this->input->post('giro_info');
	    	$getsum = $this->finance->get_sumgroutdet($this->input->post('giro_id'));
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$giroout_code,
						'jou_date'=>$this->input->post('giro_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id' => $get->JOU_ID));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$coagiro,
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
	    	    $que2 = $this->db->get_where('giroout_det',array('grout_id'=>$this->input->post('giro_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$coabank,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->GROUTDET_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    }
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$giroout_code,
						'jou_date'=>$this->input->post('giro_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$coagiro,
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
				$que2 = $this->db->get_where('giroout_det',array('grout_id'=>$this->input->post('giro_id')));
	    	    $get2 = $que2->result();
	    	    foreach($get2 as $dat) 
	    	    {
					$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$coabank,
						'joudet_debit'=>0,
						'joudet_credit'=>$dat->GROUTDET_AMOUNT
						);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprove_giro_out()
		{
			$data = array(
	                'grout_sts' => '0'
	            );
	        $update = $this->crud->update('trx_giro_out',$data,array('grout_id'=>$this->input->post('giro_id')));
	        $this->logupd_giroout_save($this->input->post('giro_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_giro_out_detail()
		{
            $data = array(
                    'grout_id' => $this->input->post('giro_id'),
                    'gor_id' => $this->input->post('gor_id'),
                    'groutdet_date' => $this->input->post('tgl_giro'),
                    'groutdet_code' => $this->input->post('nomor_giro'),
                    'groutdet_amount' => $this->input->post('nominal')
                );
            $id = array('gr_number' => $this->input->post('nomor_giro'));
            $update = $this->crud->save('giroout_det',$data);
            $dtgirorec = array(
						'gor_dtsts' => '1'
					);
			$upgirorec = $this->crud->update('giroout_record',$dtgirorec,array('gor_id'=>$this->input->post('gor_id')));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_giro_out_detail($id)
		{
			$gorcode = $this->db->get_where('giroout_det',array('groutdet_id'=>$id))->row()->GROUTDET_CODE;
			$gorid = $this->db->get_where('giroout_record',array('gor_reffcode'=>$gorcode))->row()->GOR_ID;
			$dtgirorec = array(
						'gor_dtsts' => '0'
					);
			$upgirorec = $this->crud->update('giroout_record',$dtgirorec,array('gor_id'=>$gorid));
            $hapus = $this->crud->delete_by_id('giroout_det',array('groutdet_id'=>$id));
	        echo json_encode(array("status" => TRUE, "gor"=>$gorcode)); 
		}

		public function ajax_simpan_tax()
		{
			$tgl = date('Y-m-d');
			$data = array(
				    'USER_ID' => '1',
				    'CUST_ID'  => $this->input->post('cust_id'),
                    'TINV_CODE' => $this->input->post('tax_nomor'),
                    'TINV_TAXHEADCODE' => $this->input->post('head_taxnumber'),
                    'TINV_TAXCODE' => $this->input->post('taxnumber'),
                    'INV_ID' => $this->input->post('invoice_id'),
	                'TINV_STS' => '1',
	                'TINV_DATE' => $tgl               
	            );
	        $update = $this->crud->save('trx_tax_invoice',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_tax_detail()
		{
			// $appr = null;
			// if($this->input->post('appr_id') != null)
			// {
			// 	$appr = $this->input->post('appr_id');
			// }
			$tgl = date('Y-m-d');
			echo $this->input->post('tax_id');
			$data = array(	                
	                // 'user_id' => $this->input->post('user_id'),
	                // 'appr_id' => $appr,
				    // 'USER_ID' => '1',
				    // 'CUST_ID'  => $this->input->post('cust_id'),
                    'TINV_ID' => $this->input->post('tax_id'),
                    'TINVDET_SUB' => $this->input->post('nominal'),
                    'TINVDET_PPN' => $this->input->post('ppn'),
                    'TINVDET_PPH' => $this->input->post('pph'),
                    'TINVDET_SUM' => $this->input->post('jumlah'),
                    'TINVDET_INFO' => $this->input->post('keterangan'),
	                'TINVDET_STS' => '1',
	                // 'TINV_DATE' => $tgl               
	            );
	        $update = $this->crud->save('tax_inv_details',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_hapus_tax_detail($id)
		{
            $hapus = $this->crud->delete_by_id('tax_inv_details',array('tinvdet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_srch_km()
		{
			$list = $this->srch_km->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CSH_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->CSH_DATE;				
				$row[] = $dat->CSH_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_km('."'".$dat->CSH_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_km->count_all(),
							"recordsFiltered" => $this->srch_km->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_km($id)
		{
			$data = $this->crud->get_by_id('trx_cash_in',array('CSH_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_kmfull($id)
		{
			$data = $this->db->select('a.*,b.CUST_CODE,c.CSTIN_CODE')->join('master_customer b','b.cust_id = a.cust_id','left')->join('master_cust_intern c','c.cstin_id = a.cstin_id','left')->get_where('trx_cash_in a',array('CSH_ID' => $id))->row();
        	echo json_encode($data);
		}

        public function ajax_pick_cust($id)
		{
			if (substr($id,0,4)!='CSTI')
			{
			    $data = $this->crud->get_by_id('master_customer',array('CUST_CODE' => $id));
			}
			if (substr($id,0,4)=='CSTI')
			{
			    $data = $this->crud->get_by_id2('master_cust_intern','master_person',array('master_cust_intern.CSTIN_CODE' => $id),'master_cust_intern.PERSON_ID = master_person.PERSON_ID');
			}
        	echo json_encode($data);
		}

		public function ajax_pick_custbyid($par)
		{
			if (substr($id,0,4)!='CSTI')
			{
			    $data = $this->crud->get_by_id('master_customer',array('CUST_CODE' => $id));
			}
			if (substr($id,0,4)=='CSTI')
			{
			    $data = $this->crud->get_by_id2('master_cust_intern','master_person',array('master_cust_intern.CSTIN_CODE' => $id),'master_cust_intern.PERSON_ID = master_person.PERSON_ID');
			}
        	echo json_encode($data);
		}

		public function ajax_pick_cust_ex($id)
		{
			$data = $this->crud->get_by_id('master_customer',array('CUST_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_cust_in($id)
		{
			
			$data = $this->crud->get_by_id2('master_cust_intern','master_person',array('master_cust_intern.CSTIN_ID' => $id),'master_cust_intern.PERSON_ID = master_person.PERSON_ID');
        	echo json_encode($data);
		}

		 public function ajax_pick_cust_id($id)
		{
			$data = $this->crud->get_by_id('master_customer',array('CUST_ID' => $id));
			echo json_encode($data);
		}		

		public function ajax_pick_anggaran($id)
		{
			$data = $this->crud->get_by_id('trx_budget',array('BUD_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_inv($id)
		{
			$data = $this->crud->get_by_id('trx_invoice',array('inv_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_inv_ppn($id)
		{
			$data = $this->crud->get_by_id('inv_details',array('inv_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_kmdet($id)
		{
			$data = $this->crud->get_by_id3('cashin_det','chart_of_account','trx_cash_in',array('cashin_det.CSH_ID' => $id),'chart_of_account.COA_ID=cashin_det.COA_ID','cashin_det.CSH_ID=trx_cash_in.CSH_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_km($id)
		{
			$data = $this->crud->sub_km($id);
        	echo json_encode($data);
        }

        public function ajax_srch_kk()
		{
			$list = $this->srch_kk->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CSHO_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->CSHO_DATE;				
				$row[] = $dat->CSHO_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kk('."'".$dat->CSHO_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_kk->count_all(),
							"recordsFiltered" => $this->srch_kk->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_kk($id)
		{
			$data = $this->crud->get_by_id('trx_cash_out',array('CSHO_ID' => $id));
        	echo json_encode($data);
		}

        public function ajax_pick_kkdet($id)
		{
			$data = $this->crud->get_by_id3('cashout_det','chart_of_account','trx_cash_out',array('cashout_det.CSHO_ID' => $id),'chart_of_account.COA_ID=cashout_det.COA_ID','cashout_det.CSHO_ID=trx_cash_out.CSHO_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_kk($id)
		{
			$data = $this->crud->sub_kk($id);
        	echo json_encode($data);
        }

        public function ajax_srch_bm()
		{
			$list = $this->srch_bm->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNK_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->BNK_DATE;				
				$row[] = $dat->BNK_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bm('."'".$dat->BNK_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_bm->count_all(),
							"recordsFiltered" => $this->srch_bm->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_bm($id)
		{
			$data = $this->crud->get_by_id('trx_bankin',array('BNK_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_bmfull($id)
		{
			$data = $this->db->select('a.*,b.CUST_CODE,c.CSTIN_CODE')->join('master_customer b','b.cust_id = a.cust_id','left')->join('master_cust_intern c','c.cstin_id = a.cstin_id','left')->get_where('trx_bankin a',array('BNK_ID' => $id))->row();
        	echo json_encode($data);
		}
    
        public function ajax_pick_bmdet($id)
		{
			$data = $this->crud->get_by_id3('bankin_det','chart_of_account','trx_bankin',array('bankin_det.BNK_ID' => $id),'chart_of_account.COA_ID=bankin_det.COA_ID','bankin_det.BNK_ID=trx_bankin.BNK_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_bmtrxdet($id)
		{
			$data = $this->crud->get_by_id2('trx_bankin','bankin_trxdet',array('trx_bankin.BNK_ID' => $id),'trx_bankin.BNK_ID = bankin_trxdet.BNK_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_bm($id)
		{
			$data = $this->crud->sub_bm($id);
        	echo json_encode($data);
        }

        public function ajax_srch_bk()
		{
			$list = $this->srch_bk->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKO_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->BNKO_DATE;				
				$row[] = $dat->BNKO_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bk('."'".$dat->BNKO_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_bk->count_all(),
							"recordsFiltered" => $this->srch_bk->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_bk($id)
		{
			$data = $this->crud->get_by_id('trx_bankout',array('BNKO_ID' => $id));
        	echo json_encode($data);
		}
    
        public function ajax_pick_bkdet($id)
		{
			$data = $this->crud->get_by_id3('bankout_det','chart_of_account','trx_bankout',array('bankout_det.BNKO_ID' => $id),'chart_of_account.COA_ID=bankout_det.COA_ID','bankout_det.BNKO_ID=trx_bankout.BNKO_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_bktrxdet($id)
		{
			$data = $this->crud->get_by_id2('trx_bankout','bankout_trxdet',array('trx_bankout.BNKO_ID' => $id),'trx_bankout.BNKO_ID = bankout_trxdet.BNKO_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_bk($id)
		{
			$data = $this->crud->sub_bk($id);
        	echo json_encode($data);
        }

        public function ajax_srch_gm()
		{
			$list = $this->srch_gm->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GRIN_CODE;
				// $row[] = $dat->COA_ACCNAME;
				$row[] = $dat->GRIN_DATE;				
				$row[] = $dat->GRIN_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_gm('."'".$dat->GRIN_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gm->count_all(),
							"recordsFiltered" => $this->srch_gm->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_gm($id)
		{
			$data = $this->crud->get_by_id('trx_giro_in',array('GRIN_ID' => $id));
        	echo json_encode($data);
		}
    
        public function ajax_pick_gmdet($id)
		{
			$data = $this->crud->get_by_id3('giroin_det','giroin_record','trx_giro_in',array('giroin_det.GRIN_ID' => $id),'giroin_record.GIR_ID=giroin_det.GIR_ID','giroin_det.GRIN_ID=trx_giro_in.GRIN_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_gm($id)
		{
			$data = $this->crud->sub_gm($id);
        	echo json_encode($data);
        }

        public function ajax_srch_gk()
		{
			$list = $this->srch_gk->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GROUT_CODE;
				// $row[] = $dat->COA_ACCNAME;
				$row[] = $dat->GROUT_DATE;				
				$row[] = $dat->GROUT_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_gk('."'".$dat->GROUT_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gk->count_all(),
							"recordsFiltered" => $this->srch_gk->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

        public function ajax_pick_gk($id)
		{
			$data = $this->crud->get_by_id('trx_giro_out',array('GROUT_ID' => $id));
        	echo json_encode($data);
		}
    
        public function ajax_pick_gkdet($id)
		{
			$data = $this->crud->get_by_id3('giroout_det','giroout_record','trx_giro_out',array('giroout_det.GROUT_ID' => $id),'giroout_record.GOR_ID=giroout_det.GOR_ID','giroout_det.GROUT_ID=trx_giro_out.GROUT_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_gk($id)
		{
			$data = $this->crud->sub_gk($id);
        	echo json_encode($data);
        }

        public function ajax_pick_giroin_record($id)
		{
			$data = $this->crud->get_by_id('giroin_record',array('GIR_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_giroin($id)
		{
			$data = $this->crud->get_by_id2('bankin_trxdet','giroin_record',array('BNKTRX_NUM' => $id),'giroin_record.BNKTRX_ID=bankin_trxdet.BNKTRX_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_giroout($id)
		{
			$data = $this->crud->get_by_id2('bankout_trxdet','giroout_record',array('BNKTRXO_NUM' => $id),'giroout_record.BNKTRXO_ID=bankout_trxdet.BNKTRXO_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_bankin_trxdet($id)
		{
			$data = $this->crud->get_by_id('bankin_trxdet',array('BNKTRX_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_trx_bankin($id)
		{
			$data = $this->crud->get_by_id('trx_bankin',array('BNK_ID' => $id));
        	echo json_encode($data);
		}

        public function show_gmdet($id)
        {
        	$this->db->from('giroin_det a');
        	$this->db->join('giroin_record b','b.gir_id = a.gir_id');
        	$this->db->join('bankin_trxdet c','c.bnktrx_id = b.bnktrx_id');
        	$this->db->join('trx_bankin d','d.bnk_id = c.bnk_id');
        	$this->db->join('master_customer e','e.cust_id = d.cust_id');
        	$this->db->where('a.grin_id',$id);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_gkdet($id)
        {
        	$this->db->from('giroout_det a');
        	$this->db->join('giroout_record b','b.gor_id = a.gor_id');
        	$this->db->join('bankout_trxdet c','c.bnktrxo_id = b.bnktrxo_id');
        	$this->db->join('trx_bankout d','d.bnko_id = c.bnko_id');
        	$this->db->join('master_supplier e','e.supp_id = d.bnko_supp');
        	$this->db->where('a.grout_id',$id);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_awal_kas_debet($acc)
        {
        	$tgl1 = $this->input->post('tgl1');
        	$this->db->select('sum(csh_amount) debet');
        	$this->db->from('buku_kas');
        	$this->db->where('substr(csh_code,1,2)="KM"');
        	$this->db->where('acc="'.$acc.'"');
        	$this->db->where('csh_date <',$tgl1);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_awal_kas_kredit($acc)
        {
        	$tgl1 = $this->input->post('tgl1');
        	$this->db->select('sum(csh_amount) kredit');
        	$this->db->from('buku_kas');
        	$this->db->where('substr(csh_code,1,2)="KK"');
        	$this->db->where('acc="'.$acc.'"');
        	$this->db->where('csh_date <',$tgl1);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function get_accsaldo()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	// $this->db->from('trx_cash_in a');
        	// $this->db->join('cashin_det b','a.csh_id = b.csh_id');
        	// $this->db->join('chart_of_account c','c.coa_id = b.coa_id');
        	// $this->db->select('distinct(d.coa_acc) as acc');
        	$this->db->select('d.coa_acc as acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id','desc');
        	$this->db->where('csh_date >=',$tgl1);
        	$this->db->where('csh_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date >=',$tgl1);
        	$this->db->where('a.csh_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_faktur()
        {
        	$id = $this->input->post('tax_id');
        	$this->db->from('trx_tax_invoice a');
        	$this->db->join('trx_invoice b','a.inv_id=b.inv_id');
        	$this->db->join('master_customer c','b.cust_id=c.cust_id');
        	$this->db->where('a.tinv_id =',$id);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_faktur_details()
        {
        	$id = $this->input->post('tax_id');
        	$this->db->from('tax_inv_details a');
        	$this->db->where('a.tinv_id =',$id);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_fp_nomor()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('tax_inv_details a');
        	$this->db->join('trx_tax_invoice b','b.tinv_id=a.tinv_id');
        	$this->db->join('trx_invoice c','c.inv_id=b.inv_id');
        	$this->db->join('inv_details d','d.inv_id=c.inv_id');
        	$this->db->join('trx_approvalbill e','e.appr_id=d.appr_id');
        	$this->db->join('master_customer f','f.cust_id=c.cust_id');
        	$this->db->join('master_user g','g.user_id=b.user_id');
        	$this->db->join('master_branch h','h.branch_id=g.branch_id');
        	$this->db->join('master_location i','i.loc_id=e.loc_id');
        	$this->db->order_by('b.tinv_code');
        	$this->db->order_by('g.branch_id');
        	$this->db->where('b.tinv_date >=',$tgl1);
        	$this->db->where('b.tinv_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_fp_customer()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('tax_inv_details a');
        	$this->db->join('trx_tax_invoice b','b.tinv_id=a.tinv_id');
        	$this->db->join('trx_invoice c','c.inv_id=b.inv_id');
        	$this->db->join('inv_details d','d.inv_id=c.inv_id');
        	$this->db->join('trx_approvalbill e','e.appr_id=d.appr_id');
        	$this->db->join('master_customer f','f.cust_id=c.cust_id');
        	$this->db->join('master_user g','g.user_id=b.user_id');
        	$this->db->join('master_branch h','h.branch_id=g.branch_id');
        	$this->db->join('master_location i','i.loc_id=e.loc_id');
        	$this->db->order_by('c.cust_id');
        	$this->db->order_by('g.branch_id');
        	$this->db->where('b.tinv_date >=',$tgl1);
        	$this->db->where('b.tinv_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_fp_proyek()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('tax_inv_details a');
        	$this->db->join('trx_tax_invoice b','b.tinv_id=a.tinv_id');
        	$this->db->join('trx_invoice c','c.inv_id=b.inv_id');
        	$this->db->join('inv_details d','d.inv_id=c.inv_id');
        	$this->db->join('trx_approvalbill e','e.appr_id=d.appr_id');
        	$this->db->join('master_customer f','f.cust_id=c.cust_id');
        	$this->db->join('master_user g','g.user_id=b.user_id');
        	$this->db->join('master_branch h','h.branch_id=g.branch_id');
        	$this->db->join('master_location i','i.loc_id=e.loc_id');
        	$this->db->order_by('e.appr_id');
        	$this->db->order_by('g.branch_id');
        	$this->db->where('b.tinv_date >=',$tgl1);
        	$this->db->where('b.tinv_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_fp_invoice()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('tax_inv_details a');
        	$this->db->join('trx_tax_invoice b','b.tinv_id=a.tinv_id');
        	$this->db->join('trx_invoice c','c.inv_id=b.inv_id');
        	$this->db->join('inv_details d','d.inv_id=c.inv_id');
        	$this->db->join('trx_approvalbill e','e.appr_id=d.appr_id');
        	$this->db->join('master_customer f','f.cust_id=c.cust_id');
        	$this->db->join('master_user g','g.user_id=b.user_id');
        	$this->db->join('master_branch h','h.branch_id=g.branch_id');
        	$this->db->join('master_location i','i.loc_id=e.loc_id');
        	$this->db->order_by('c.inv_id');
        	$this->db->order_by('g.branch_id');
        	$this->db->where('b.tinv_date >=',$tgl1);
        	$this->db->where('b.tinv_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_awal_debet()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$this->db->select('sum(csh_amount) as debet,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <',$tgl1);
        	$this->db->where('substr(a.csh_code,1,2) ="KM"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_awal_kredit()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$this->db->select('sum(csh_amount) as kredit,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <',$tgl1);
        	$this->db->where('substr(a.csh_code,1,2) ="KK"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_awal_total()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$this->db->select('sum(csh_amount) as kredit,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <',$tgl1);
        	// $this->db->where('substr(a.csh_code,1,2) ="KK"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_total_debet()
        {
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->select('sum(csh_amount) as debet,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <=',$tgl2);
        	$this->db->where('substr(a.csh_code,1,2) ="KM"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_total_kredit()
        {
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->select('sum(csh_amount) as kredit,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <=',$tgl2);
        	$this->db->where('substr(a.csh_code,1,2) ="KK"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_total()
        {
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->select('sum(if(substr(a.csh_code,1,2) ="KM",csh_amount,csh_amount * -1)) as total,acc');
        	$this->db->from('buku_kas a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id');
        	$this->db->where('a.csh_date <=',$tgl2);
        	// $this->db->where('substr(a.csh_code,1,2) ="KK"');
        	$this->db->group_by('a.acc');
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_tgl_terima()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	// $this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.receive_date');
            $this->db->order_by('a.bnk_code','desc');
        	// $this->db->order_by('a.coa_id');
        	$this->db->where('a.receive_date >=',$tgl1);
        	$this->db->where('a.receive_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_tgl_giro()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	// $this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.gr_date');
            $this->db->order_by('a.bnk_code','desc');
        	// $this->db->order_by('a.coa_id');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_supp()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.cust_supp_id');
            $this->db->order_by('a.bnk_code','desc');
        	$this->db->where('substr(a.bnk_code,1,2) ="BK"');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_cust()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.cust_supp_id');
            $this->db->order_by('a.bnk_code','desc');
        	$this->db->where('substr(a.bnk_code,1,2) ="BM"');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_blm_cair()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_bank c','a.bank_id=c.bank_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('a.bnk_code');
        	$this->db->order_by('a.bank_id');
        	$this->db->where('a.cair_sts !=1');
        	$this->db->where('a.blokir_sts !=1');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_sdh_cair()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_bank c','a.bank_id=c.bank_id');
        	$this->db->join('master_customer d','a.cust_supp_id=d.cust_id');
        	$this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('a.bnk_code');
        	$this->db->order_by('a.bank_id');
        	$this->db->where('a.cair_sts !=0');
        	$this->db->where('a.blokir_sts !=1');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_masuk()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_bank d','a.bank_id=d.bank_id');
        	$this->db->join('master_customer e','a.cust_supp_id=e.cust_id');
        	// $this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.bank_id');
        	$this->db->order_by('a.gr_date');
        	$this->db->where('a.cair_sts !=0');
        	$this->db->where('a.blokir_sts !=1');
        	$this->db->where('substr(a.bnk_code,1,2) ="BM"');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_giro_keluar()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_giro a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('master_bank d','a.bank_id=d.bank_id');
        	$this->db->join('master_customer e','a.cust_supp_id=e.cust_id');
        	// $this->db->join('master_supplier e','a.cust_supp_id=e.supp_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.bank_id');
        	$this->db->order_by('a.gr_date');
        	$this->db->where('a.cair_sts !=0');
        	$this->db->where('a.blokir_sts !=1');
        	$this->db->where('substr(a.bnk_code,1,2) ="BK"');
        	$this->db->where('a.gr_date >=',$tgl1);
        	$this->db->where('a.gr_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_bank()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('buku_bank a');
        	$this->db->join('master_user b','a.user_id=b.user_id');
        	$this->db->join('master_branch c','b.branch_id=c.branch_id');
        	$this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('b.branch_id');
        	$this->db->order_by('a.coa_id','desc');
        	$this->db->where('bnk_date >=',$tgl1);
        	$this->db->where('bnk_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_kas_keluar()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('trx_cash_out a');
        	$this->db->join('cashout_det b','a.csho_id = b.csho_id');
        	$this->db->join('chart_of_account c','c.coa_id = b.coa_id');
        	$this->db->where('a.csho_date >=',$tgl1);
        	$this->db->where('a.csho_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        //Fungsi Halaman Invoice
        public function get_inv($id)
        {
        	$data = $this->crud->get_by_id2('trx_invoice a','master_customer b',array('a.inv_id'=>$id),'a.cust_id = b.cust_id');
        	echo json_encode($data);
        }

        public function get_invdet($id)
        {
        	$this->db->from('inv_details a');
        	$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
        	$this->db->join('trx_approvalbill c','c.appr_id = a.appr_id');
        	$this->db->join('appr_terms_det e','e.termsdet_id = a.invdet_termid');
        	$this->db->join('master_location d','d.loc_id = c.loc_id');
        	$this->db->where('a.inv_id',$id);
        	$que = $this->db->get();
        	$data = $que->result();
        	echo json_encode($data);
        }

        public function get_invdetfull($id)
        {
        	$data = $this->db->join('appr_terms_det e','e.termsdet_id = a.invdet_termid')->join('trx_approvalbill c','c.appr_id = a.appr_id')->join('master_location d','d.loc_id = c.loc_id')->join('trx_invoice b','b.inv_id = a.inv_id')->get_where('inv_details a',array('a.inv_id'=>$id))->result();
        	echo json_encode($data);
        }

        public function get_apprcost($id)
        {
        	$data = $this->db->join('trx_approvalbill b','b.appr_id = a.appr_id')->join('master_location c','c.loc_id = b.loc_id')->join('appr_cost_det d','d.appr_id = b.appr_id')->get_where('appr_terms_det a',array('a.termsdet_id'=>$id))->result();
        	echo json_encode($data);
        }

		public function get_apprterm($id)
		{
			// $data = $this->crud->get_by_id4('appr_terms_det',array('appr_id'=>$id));
			$this->db->from('appr_terms_det a');
			$this->db->where('a.appr_id',$id);
			$this->db->where('a.termsdet_id NOT IN (select b.invdet_termid from inv_details b join trx_invoice c on c.inv_id = b.inv_id where c.inv_type = '.$this->input->post('inv_typechk').')');
			$res = $this->db->get();
			$data = $res->result();
			echo json_encode($data);
		}

		public function get_apprtermbrc($id)
		{
			// $data = $this->crud->get_by_id4('appr_terms_det',array('appr_id'=>$id));
			$this->db->from('appr_terms_det a');			
			$this->db->where('a.appr_id',$id);			
			$this->db->where('a.termsdet_id NOT IN (select b.invdet_termbrcid from inv_details b join trx_invoice c on c.inv_id = b.inv_id where c.inv_type = '.$this->input->post('inv_typechk').')');
			$res = $this->db->get();
			$data = $res->result();
			echo json_encode($data);
		}

		public function get_apprtermnom($id)
		{
			$data = $this->crud->get_by_id('appr_terms_det',array('termsdet_id'=>$id));
			echo json_encode($data);
		}

		public function get_subinvdet($id)
		{
			$this->db->from('inv_details a');
			$this->db->select('sum(a.invdet_amount) as gt1, sum(a.invdet_brcamount) as gt2, sum(a.invdet_sub) as sub1, sum(a.invdet_brcsub) as sub2, sum(a.invdet_ppnam) as ppn1, sum(a.invdet_ppnbrcam) as ppn2, sum(a.invdet_ppham) as pph1, sum(a.invdet_pphbrcam) as pph2');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->where('b.inv_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
		}

		public function add_invdet()
		{
			$this->_validate_invdet();
			$data = array(
					'inv_id'=>$this->input->post('inv_id'),
					'appr_id'=>$this->input->post('inv_apprid'),
					'invdet_termid'=>$this->input->post('inv_term'),
					'invdet_term'=>$this->input->post('inv_termcode'),
					'invdet_amount'=>$this->input->post('invdet_sub'),
					'invdet_sub'=>$this->input->post('inv_termsub'),
					'invdet_ppnam'=>$this->input->post('inv_termppn'),
					// 'invdet_ppham'=>$this->input->post('inv_termpph'),
					'invdet_termbrcid'=>$this->input->post('inv_termbrc'),
					'invdet_brcterm'=>$this->input->post('inv_termbrccode'),
					'invdet_brcsub'=>$this->input->post('inv_termsubbrc'),
					'invdet_brcamount'=>$this->input->post('invdet_brcsub'),
					'invdet_ppnbrcam'=>$this->input->post('inv_termppnbrc'),
					// 'invdet_pphbrcam'=>$this->input->post('inv_termpphbrc')
					);
			$update = $this->crud->save('inv_details',$data);
			echo json_encode(array('status'=>TRUE));
		}

		public function del_invdet($id)
		{
			$this->crud->delete_by_id('inv_details',array('invdet_id' => $id));
        	echo json_encode(array("status" => TRUE));
		}

		public function _validate_invdet()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;

	        if($this->input->post('inv_apprcode') == '')
	        {
	            $data['inputerror'][] = 'inv_apprcode';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('inv_curr') == '')
	        {
	            $data['inputerror'][] = 'inv_curr';
	            $data['status'] = FALSE;
	        }

	        // if($this->input->post('inv_term') == '')
	        // {
	        //     $data['inputerror'][] = 'inv_term';
	        //     $data['status'] = FALSE;
	        // }

	        // if($this->input->post('inv_termbrc') == '')
	        // {
	        //     $data['inputerror'][] = 'inv_termbrc';
	        //     $data['status'] = FALSE;
	        // }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function save_inv()
	    {
	    	$this->_validate_inv();
	    	$data = array(
	    			'inc_id'=>$this->input->post('inv_typeid'),
	    			'user_id'=>$this->input->post('user_id'),
	    			'cust_id'=>$this->input->post('inv_custid'),
	    			'curr_id'=>$this->input->post('inv_currid'),
	    			'inc_id'=>$this->input->post('inv_typeid'),
	    			'inv_code'=>$this->input->post('inv_code'),
	    			'inv_info'=>$this->input->post('inv_info'),
	    			'inv_term'=>$this->input->post('inv_terms'),
	    			'inv_date'=>$this->input->post('inv_date'),
	    			'inv_type'=>$this->input->post('inv_typechk'),
	    			'inv_sts'=>'2'
	    			);
	    	$update = $this->crud->update('trx_invoice',$data,array('inv_id'=>$this->input->post('inv_id')));
	    	$this->logupd_inv_save($this->input->post('inv_id'),$this->input->post('user_name'),'Posted');
	    	//Simpan Faktur Pajak
	    	// if($this->input->post('inv_taxhead') || $this->input->post('inv_taxcode'))
	    	// {
	    	// 	$que2 = $this->db->get_where('trx_tax_invoice',array('inv_id'=>$this->input->post('inv_id')));
	    	// 	if($que2->num_rows() > 0)
	    	// 	{
	    	// 		$invid = $que2->row()->TINV_ID;
	    	// 		$datasv = array(
	    	// 				'user_id'=>$this->input->post('user_id'),
	    	// 				'cust_id'=>$this->input->post('inv_custid'),
	    	// 				'inv_id'=>$this->input->post('inv_id'),
	    	// 				'tinv_date'=>$this->input->post('inv_date'),
	    	// 				'tinv_taxheadcode'=>$this->input->post('inv_taxhead'),
	    	// 				'tinv_taxcode'=>$this->input->post('inv_taxcode'),
	    	// 				'tinv_sts'=>'1',
	    	// 				'tinv_info'=>$this->input->post('inv_info'),
	    	// 				);
	    	// 		$update = $this->crud->update('trx_tax_invoice',$datasv,array('tinv_id'=>$invid));
	    	// 	}
	    	// 	else
	    	// 	{
	    	// 		$datasv = array(
	    	// 				'user_id'=>$this->input->post('user_id'),
	    	// 				'cust_id'=>$this->input->post('inv_custid'),
	    	// 				'inv_id'=>$this->input->post('inv_id'),
	    	// 				'tinv_date'=>$this->input->post('inv_date'),
	    	// 				'tinv_taxheadcode'=>$this->input->post('inv_taxhead'),
	    	// 				'tinv_taxcode'=>$this->input->post('inv_taxcode'),
	    	// 				'tinv_sts'=>'1',
	    	// 				'tinv_info'=>$this->input->post('inv_info'),
	    	// 				);
	    	// 		$savetaxinv = $this->crud->save('trx_tax_invoice',$datasv);
	    	// 	}
	    	// }
	    	echo json_encode(array('status'=>TRUE));
	    }

	    public function approve_inv()
	    {
	    	$this->_validate_inv();
	    	$data = array(
	    			'inv_sts'=>'1'
	    			);
	    	$update = $this->crud->update('trx_invoice',$data,array('inv_id'=>$this->input->post('inv_id')));
	    	$this->logupd_inv_save($this->input->post('inv_id'),$this->input->post('user_name'),'Approved');
	    	//cek jurnal
	    	$inv_code = $this->input->post('inv_code');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$inv_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$ppn = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->INV_COAPPN;
	    	$infos = 'Invoice : '.$this->input->post('inv_code').' - '.$this->input->post('inv_cust');
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$inv_code,
						'jou_date'=>$this->input->post('inv_date'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Deatil Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('inv_accrcvid'),
						'joudet_debit'=>$this->input->post('inv_gtotappr'),
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
				$joudet2 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('inv_accincid'),
						'joudet_debit'=>0,
						'joudet_credit'=>$this->input->post('inv_subappr'),
						);
				$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				if($this->input->post('inv_ppnappr')!='0')
				{
					$joudet3 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$ppn,
							'joudet_debit'=>0,
							'joudet_credit'=>$this->input->post('inv_ppnappr'),
							);
					$insjoudet3 = $this->crud->save('jou_details',$joudet3);
				}
	    	}
	    	else
	    	{
	    		//Simpan Jurnal Baru
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$inv_code,
						'jou_date'=>$this->input->post('inv_date'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Debet
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('inv_accrcvid'),
						'joudet_debit'=>$this->input->post('inv_gtotappr'),
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Kredit
				$joudet2 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('inv_accincid'),
						'joudet_debit'=>0,
						'joudet_credit'=>$this->input->post('inv_subappr'),
						);
				$insjoudet2 = $this->crud->save('jou_details',$joudet2);
				if($this->input->post('inv_ppnappr')!='0')
				{
					$joudet3 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$ppn,
							'joudet_debit'=>0,
							'joudet_credit'=>$this->input->post('inv_ppnappr'),
							);
					$insjoudet3 = $this->crud->save('jou_details',$joudet3);
				}
	    	}
	    	echo json_encode(array('status'=>TRUE));
	    }

	    public function disapprove_inv()
	    {
	    	$this->_validate_inv();
	    	$data = array(
	    			'inv_sts'=>'0'
	    			);
	    	$update = $this->crud->update('trx_invoice',$data,array('inv_id'=>$this->input->post('inv_id')));
	    	$this->logupd_inv_save($this->input->post('inv_id'),$this->input->post('user_name'),'Disapproved');
	    	echo json_encode(array('status'=>TRUE));
	    }

	    public function _validate_inv()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;

	        if($this->input->post('inv_typename') == '')
	        {
	            $data['inputerror'][] = 'inv_typename';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('inv_code') == '')
	        {
	            $data['inputerror'][] = 'inv_code';
	            $data['status'] = FALSE;
	        }

	        // if($this->input->post('inv_branch') == '')
	        // {
	        //     $data['inputerror'][] = 'inv_branch';
	        //     $data['status'] = FALSE;
	        // }

	        if($this->input->post('inv_cust') == '')
	        {
	            $data['inputerror'][] = 'inv_cust';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('inv_info') == '')
	        {
	            $data['inputerror'][] = 'inv_info';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('inv_terms') == '')
	        {
	            $data['inputerror'][] = 'inv_terms';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function ajax_pick_sum_dpp_ppn_pph_total($id)
		{
			$data = $this->crud->sub_dpp_ppn_pph_total($id);
        	echo json_encode($data);
        }
	  
	    public function ajax_srch_prc($id)
		{
			$list = $this->srch_prcbyid->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRC_CODE;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->PRC_INVOICE;
				$row[] = $dat->PRC_DATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prc('."'".$dat->PRC_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_prcbyid->count_all($id),
							"recordsFiltered" => $this->srch_prcbyid->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_pick_prc($id)
		{
			$data = $this->crud->get_by_id2('trx_procurement','trx_po',array('prc_id' => $id),'trx_po.po_id = trx_procurement.po_id');
        	echo json_encode($data);
		}

		//Histori Log Invoice
		public function open_inv($id)
		{
			$user = $this->input->post('user_name');
			$get = $this->db->get_where('trx_invoice',array('inv_id'=>$id));
			$code = $get->row()->INV_CODE;
			$string = array();
			$bnk = $this->finance->check_inv('bankin_det',array('bnkdet_reff'=>$code),null);
			if($bnk > 0)
			{
				$string[] = 'Bank Masuk';
			}
			$csh = $this->finance->check_inv('cashin_det',array('cshindet_reff'=>$code),null);
			if($csh > 0)
			{
				$string[] = 'Kas Masuk';
			}
			if(sizeof($string) > 0)
			{
				$data['status'] = FALSE;
				$data['string'] = implode(', ',$string);
			}
			else
			{
				$get_inv = $this->db->get_where('trx_invoice',array('inv_id'=>$id))->row();
				$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_inv->INV_CODE,'branch_id'=>$this->session->userdata('user_branch')));
				if($get_jou->num_rows() > 0)
				{
					$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
				}
				$dt = array('inv_sts'=>'0');
				$update = $this->crud->update('trx_invoice',$dt,array('inv_id' => $id));
				$his = $this->finance->getlog_inv($id);
				$dthis = array(
						'inv_id' => $id,
						'hisinv_sts' => 'Open by User '.$user,
						'hisinv_old' => $his->HISINV_STS,
						'hisinv_new' => 'Open By User '.$user,
						'hisinv_info' => 'Open Record by Invoice form',
						'hisinv_date' => date('Y-m-d'),
						'hisinv_time' => date('H:i:s'),
						'hisinv_upcount' => $his->HISINV_UPCOUNT+1
					);
				$this->db->insert('his_inv',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function logupd_inv_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_inv($id);
	    	if ($his->HISINV_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'inv_id' => $id,
						'hisinv_sts' => $sts.' by User '.$user,
						'hisinv_old' => $his->HISINV_STS,
						'hisinv_new' => $sts.' By User '.$user,
						'hisinv_info' => 'Original Save by Invoice form',
						'hisinv_date' => date('Y-m-d'),
						'hisinv_time' => date('H:i:s'),
						'hisinv_upcount' => $his->HISINV_UPCOUNT+1
					);
				$this->db->insert('his_inv',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'inv_id' => $id,
						'hisinv_sts' => $sts.' by User '.$user,
						'hisinv_old' => $his->HISINV_STS,
						'hisinv_new' => $sts.' By User '.$user,
						'hisinv_info' => 'Update by '.$user.' from Invoice form',
						'hisinv_date' => date('Y-m-d'),
						'hisinv_time' => date('H:i:s'),
						'hisinv_upcount' => $his->HISINV_UPCOUNT
					);
				$this->db->insert('his_inv',$data);
	    	}
	    }

	    public function open_cashin($id)
		{
			$user = $this->input->post('user_name');
			$get_cashin = $this->db->get_where('trx_cash_in',array('csh_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_cashin->CSH_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('csh_sts'=>'0');
			$update = $this->crud->update('trx_cash_in',$dt,array('csh_id' => $id));
			$his = $this->finance->getlog_cashin($id);
			$dthis = array(
					'csh_id' => $id,
					'hischin_sts' => 'Open by User '.$user,
					'hischin_old' => $his->HISCHIN_STS,
					'hischin_new' => 'Open By User '.$user,
					'hischin_info' => 'Open Record by Cash In form',
					'hischin_date' => date('Y-m-d'),
					'hischin_time' => date('H:i:s'),
					'hischin_upcount' => $his->HISCHIN_UPCOUNT+1
				);
			$this->db->insert('his_cashin',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_cashin_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_cashin($id);
	    	if ($his->HISCHIN_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'csh_id' => $id,
						'hischin_sts' => $sts.' by User '.$user,
						'hischin_old' => $his->HISCHIN_STS,
						'hischin_new' => $sts.' By User '.$user,
						'hischin_info' => 'Original Save by Cash In form',
						'hischin_date' => date('Y-m-d'),
						'hischin_time' => date('H:i:s'),
						'hischin_upcount' => $his->HISCHIN_UPCOUNT+1
					);
				$this->db->insert('his_cashin',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'csh_id' => $id,
						'hischin_sts' => $sts.' by User '.$user,
						'hischin_old' => $his->HISCHIN_STS,
						'hischin_new' => $sts.' By User '.$user,
						'hischin_info' => 'Update by '.$user.' from Cash In form',
						'hischin_date' => date('Y-m-d'),
						'hischin_time' => date('H:i:s'),
						'hischin_upcount' => $his->HISCHIN_UPCOUNT
					);
				$this->db->insert('his_cashin',$data);
	    	}
	    }

		public function open_cashout($id)
		{
			$user = $this->input->post('user_name');
			$get_cashout = $this->db->get_where('trx_cash_out',array('csho_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_cashout->CSHO_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('csho_sts'=>'0');
			$update = $this->crud->update('trx_cash_out',$dt,array('csho_id' => $id));
			$his = $this->finance->getlog_cashout($id);
			$dthis = array(
					'csho_id' => $id,
					'hiscsho_sts' => 'Open by User '.$user,
					'hiscsho_old' => $his->HISCSHO_STS,
					'hiscsho_new' => 'Open By User '.$user,
					'hiscsho_info' => 'Open Record by Cash Out form',
					'hiscsho_date' => date('Y-m-d'),
					'hiscsho_time' => date('H:i:s'),
					'hiscsho_upcount' => $his->HISCSHO_UPCOUNT+1
				);
			$this->db->insert('his_cashout',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_cashout_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_cashout($id);
	    	if ($his->HISCSHO_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'csho_id' => $id,
						'hiscsho_sts' => $sts.' by User '.$user,
						'hiscsho_old' => $his->HISCSHO_STS,
						'hiscsho_new' => $sts.' By User '.$user,
						'hiscsho_info' => 'Original Save by Cash Out form',
						'hiscsho_date' => date('Y-m-d'),
						'hiscsho_time' => date('H:i:s'),
						'hiscsho_upcount' => $his->HISCSHO_UPCOUNT+1
					);
				$this->db->insert('his_cashout',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'csho_id' => $id,
						'hiscsho_sts' => $sts.' by User '.$user,
						'hiscsho_old' => $his->HISCSHO_STS,
						'hiscsho_new' => $sts.' By User '.$user,
						'hiscsho_info' => 'Update by '.$user.' from Cash Out form',
						'hiscsho_date' => date('Y-m-d'),
						'hiscsho_time' => date('H:i:s'),
						'hiscsho_upcount' => $his->HISCSHO_UPCOUNT
					);
				$this->db->insert('his_cashout',$data);
	    	}
	    }

		public function open_bankin($id)
		{
			$user = $this->input->post('user_name');
			$get_bankin = $this->db->get_where('trx_bankin',array('bnk_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_bankin->BNK_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('bnk_sts'=>'0');
			$update = $this->crud->update('trx_bankin',$dt,array('bnk_id' => $id));
			$his = $this->finance->getlog_bankin($id);
			$dthis = array(
					'bnk_id' => $id,
					'hisbnk_sts' => 'Open by User '.$user,
					'hisbnk_old' => $his->HISBNK_STS,
					'hisbnk_new' => 'Open By User '.$user,
					'hisbnk_info' => 'Open Record by Bank Masuk form',
					'hisbnk_date' => date('Y-m-d'),
					'hisbnk_time' => date('H:i:s'),
					'hisbnk_upcount' => $his->HISBNK_UPCOUNT+1
				);
			$this->db->insert('his_bankin',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_bankin_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_bankin($id);
	    	if ($his->HISBNK_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'bnk_id' => $id,
						'hisbnk_sts' => $sts.' by User '.$user,
						'hisbnk_old' => $his->HISBNK_STS,
						'hisbnk_new' => $sts.' By User '.$user,
						'hisbnk_info' => 'Original Save by Bank In form',
						'hisbnk_date' => date('Y-m-d'),
						'hisbnk_time' => date('H:i:s'),
						'hisbnk_upcount' => $his->HISBNK_UPCOUNT+1
					);
				$this->db->insert('his_bankin',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'bnk_id' => $id,
						'hisbnk_sts' => $sts.' by User '.$user,
						'hisbnk_old' => $his->HISBNK_STS,
						'hisbnk_new' => $sts.' By User '.$user,
						'hisbnk_info' => 'Update by '.$user.' from Bank In form',
						'hisbnk_date' => date('Y-m-d'),
						'hisbnk_time' => date('H:i:s'),
						'hisbnk_upcount' => $his->HISBNK_UPCOUNT
					);
				$this->db->insert('his_bankin',$data);
	    	}
	    }

		public function open_bankout($id)
		{
			$user = $this->input->post('user_name');
			$get_bankout = $this->db->get_where('trx_bankout',array('bnko_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_bankout->BNKO_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('bnko_sts'=>'0');
			$update = $this->crud->update('trx_bankout',$dt,array('bnko_id' => $id));
			$his = $this->finance->getlog_bankout($id);
			$dthis = array(
					'bnko_id' => $id,
					'hisbnko_sts' => 'Open by User '.$user,
					'hisbnko_old' => $his->HISBNKO_STS,
					'hisbnko_new' => 'Open By User '.$user,
					'hisbnko_info' => 'Open Record by Bank Keluar form',
					'hisbnko_date' => date('Y-m-d'),
					'hisbnko_time' => date('H:i:s'),
					'hisbnko_upcount' => $his->HISBNKO_UPCOUNT+1
				);
			$this->db->insert('his_bankout',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_bankout_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_bankout($id);
	    	if ($his->HISBNKO_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'bnko_id' => $id,
						'hisbnko_sts' => $sts.' by User '.$user,
						'hisbnko_old' => $his->HISBNKO_STS,
						'hisbnko_new' => $sts.' By User '.$user,
						'hisbnko_info' => 'Original Save by Bank Out form',
						'hisbnko_date' => date('Y-m-d'),
						'hisbnko_time' => date('H:i:s'),
						'hisbnko_upcount' => $his->HISBNKO_UPCOUNT+1
					);
				$this->db->insert('his_bankout',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'bnko_id' => $id,
						'hisbnko_sts' => $sts.' by User '.$user,
						'hisbnko_old' => $his->HISBNKO_STS,
						'hisbnko_new' => $sts.' By User '.$user,
						'hisbnko_info' => 'Update by '.$user.' from Bank Out form',
						'hisbnko_date' => date('Y-m-d'),
						'hisbnko_time' => date('H:i:s'),
						'hisbnko_upcount' => $his->HISBNKO_UPCOUNT
					);
				$this->db->insert('his_bankout',$data);
	    	}
	    }

		public function open_giroin($id)
		{
			$user = $this->input->post('user_name');
			$get_giroin = $this->db->get_where('trx_giro_in',array('grin_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_giroin->GRIN_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('grin_sts'=>'0');
			$update = $this->crud->update('trx_giro_in',$dt,array('grin_id' => $id));
			$his = $this->finance->getlog_giroin($id);
			$dthis = array(
					'grin_id' => $id,
					'hisgrin_sts' => 'Open by User '.$user,
					'hisgrin_old' => $his->HISGRIN_STS,
					'hisgrin_new' => 'Open By User '.$user,
					'hisgrin_info' => 'Open Record by Giro In form',
					'hisgrin_date' => date('Y-m-d'),
					'hisgrin_time' => date('H:i:s'),
					'hisgrin_upcount' => $his->HISGRIN_UPCOUNT+1
				);
			$this->db->insert('his_giroin',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_giroin_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_giroin($id);
	    	if ($his->HISGRIN_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'grin_id' => $id,
						'hisgrin_sts' => $sts.' by User '.$user,
						'hisgrin_old' => $his->HISGRIN_STS,
						'hisgrin_new' => $sts.' By User '.$user,
						'hisgrin_info' => 'Original Save by Giro In form',
						'hisgrin_date' => date('Y-m-d'),
						'hisgrin_time' => date('H:i:s'),
						'hisgrin_upcount' => $his->HISGRIN_UPCOUNT+1
					);
				$this->db->insert('his_giroin',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'grin_id' => $id,
						'hisgrin_sts' => $sts.' by User '.$user,
						'hisgrin_old' => $his->HISGRIN_STS,
						'hisgrin_new' => $sts.' By User '.$user,
						'hisgrin_info' => 'Update by '.$user.' from Giro In form',
						'hisgrin_date' => date('Y-m-d'),
						'hisgrin_time' => date('H:i:s'),
						'hisgrin_upcount' => $his->HISGRIN_UPCOUNT
					);
				$this->db->insert('his_giroin',$data);
	    	}
	    }

		public function open_giroout($id)
		{
			$user = $this->input->post('user_name');
			$user = $this->input->post('user_name');
			$get_giroout = $this->db->get_where('trx_giro_out',array('grout_id'=>$id))->row();
			$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_giroout->GROUT_CODE,'branch_id'=>$this->session->userdata('user_branch')));
			if($get_jou->num_rows() > 0)
			{
				$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
			}
			$dt = array('grout_sts'=>'0');
			$update = $this->crud->update('trx_giro_out',$dt,array('grout_id' => $id));
			$his = $this->finance->getlog_giroout($id);
			$dthis = array(
					'grout_id' => $id,
					'hisgrout_sts' => 'Open by User '.$user,
					'hisgrout_old' => $his->HISGROUT_STS,
					'hisgrout_new' => 'Open By User '.$user,
					'hisgrout_info' => 'Open Record by Giro Out form',
					'hisgrout_date' => date('Y-m-d'),
					'hisgrout_time' => date('H:i:s'),
					'hisgrout_upcount' => $his->HISGROUT_UPCOUNT+1
				);
			$this->db->insert('his_giroin',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function logupd_giroout_save($id,$user,$sts)
	    {
	    	$his = $this->finance->getlog_giroout($id);
	    	if ($his->HISGRO_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'grout_id' => $id,
						'hisgro_sts' => $sts.' by User '.$user,
						'hisgro_old' => $his->HISGRO_STS,
						'hisgro_new' => $sts.' By User '.$user,
						'hisgro_info' => 'Original Save by Giro Out form',
						'hisgro_date' => date('Y-m-d'),
						'hisgro_time' => date('H:i:s'),
						'hisgro_upcount' => $his->HISGRO_UPCOUNT+1
					);
				$this->db->insert('his_giroout',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'grout_id' => $id,
						'hisgro_sts' => $sts.' by User '.$user,
						'hisgro_old' => $his->HISGRO_STS,
						'hisgro_new' => $sts.' By User '.$user,
						'hisgro_info' => 'Update by '.$user.' from Giro Out form',
						'hisgro_date' => date('Y-m-d'),
						'hisgro_time' => date('H:i:s'),
						'hisgro_upcount' => $his->HISGRO_UPCOUNT
					);
				$this->db->insert('his_giroout',$data);
	    	}
	    }

		public function open_taxinvoice($id)
		{
			$user = $this->input->post('user_name');
			$get = $this->db->get_where('trx_tax_invoice',array('tinv'=>$id));
			$code = $get->row()->TINV_CODE;
			$dt = array('tinv_sts'=>'0');
			$update = $this->crud->update('trx_tax_invoice',array('tinv' => $id));
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function print_rptaccrcv()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['cust'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			// $data['appr'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_rptaccrcv',$data);
		}

		public function print_rptaccrcvsummary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['cust'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			// $data['appr'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_rptaccrcvsummary',$data);
		}

		public function print_rptaccpay()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['supp'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			// $data['appr'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_rptaccpay',$data);
		}

		public function print_rptaccpaysummary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'FIN');
			$data['supp'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			// $data['appr'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpttype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_finance';
			$this->load->view('menu/administrator/finance/print_rptaccpaysummary',$data);
		}

		public function get_total_cashin($id)
		{
			$data = $this->db->select('SUM(CSHDETIN_AMOUNT) as TOTAL')->get_where('cashin_det', array('csh_id'=>$id))->row();
			echo json_encode($data);
		}

		public function get_total_cashout($id)
		{
			$data = $this->db->select('SUM(CSHODET_AMOUNT) as TOTAL')->get_where('cashout_det', array('csho_id'=>$id))->row();
			echo json_encode($data);
		}

		public function get_total_bankout($id)
		{
			$data = $this->db->select('SUM(BNKODET_AMOUNT) as TOTAL')->get_where('bankout_det', array('bnko_id'=>$id))->row();
			echo json_encode($data);
		}

		public function get_total_banktrxout($id)
		{
			$data = $this->db->select('SUM(BNKTRXO_AMOUNT) as TOTAL')->get_where('bankout_trxdet', array('bnko_id'=>$id))->row();
			echo json_encode($data);
		}

		public function get_total_bankin($id)
		{
			$data = $this->db->select('SUM(BNKDET_AMOUNT) as TOTAL')->get_where('bankin_det', array('bnk_id'=>$id))->row();
			echo json_encode($data);
		}

		public function get_total_bankintrx($id)
		{
			$data = $this->db->select('SUM(BNKTRX_AMOUNT) as TOTAL')->get_where('bankin_trxdet', array('bnk_id'=>$id))->row();
			echo json_encode($data);
		}
	}
?>