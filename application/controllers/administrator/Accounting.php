<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Accounting extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('CRUD/M_accounting','accounting');
		}

		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='dash_account';
			$data['isi']='menu/administrator/accounting/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_journal()
		{
			$gen = $this->gen->gen_numjou();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['jou_code'];
			// $data['id'] = '1';
			// $data['kode'] = 'JOU/1801/000001';
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function saldo_acc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='saldoacc';
			$data['isi']='menu/administrator/accounting/acc_saldo';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function journal_acc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='journal';
			$data['isi']='menu/administrator/accounting/acc_journal';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function journal_adj()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='journal_adj';
			$data['isi']='menu/administrator/accounting/adj_journal';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function journal_pay()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='journal_pay';
			$data['isi']='menu/administrator/accounting/pay_journal';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ledger_acc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='ledger';
			$data['isi']='menu/administrator/accounting/acc_ledger';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_journal()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/report_journal';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_ledger()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/acc_ledger';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_trialbalance()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/report_trialbal';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_profitloss()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/report_profitloss';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_balancesheet()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'ACC');
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$data['isi']='menu/administrator/accounting/report_balsheet';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_journal()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_journal',$data);
		}

		public function gen_rptjournal()
		{
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			if($this->input->post('coa_id'))
			{
				$this->db->where('a.coa_id',$this->input->post('coa_id'));
			}
			if($this->input->post('date_start'))
			{
				$this->db->where('b.jou_date >=',$this->input->post('date_start'));
			}
			if($this->input->post('date_end'))
			{
				$this->db->where('b.jou_date <=',$this->input->post('date_end'));
			}
			if($this->input->post('branch'))
			{
				$this->db->where('b.branch_id',$this->input->post('branch'));
			}
			$this->db->where('b.jou_sts','1');
			$this->db->order_by('b.jou_code');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function print_ledger()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_ledger_t1',$data);
		}

		public function print_ledger2()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_ledger_t2',$data);
		}

		public function gen_rptledger()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coaid'))?$this->input->post('coaid'):NULL;
			$datestart = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->accounting->gen_ledger($brc,$coa,$datestart,$dateend);
			$data['b'] = $this->accounting->gen_saldostr($brc,$coa,$datestart,$dateend);
			echo json_encode($data);
		}

		public function gen_rptledger2()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coaid'))?$this->input->post('coaid'):NULL;
			$datestart = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->accounting->gen_ledger2($brc,$coa,$datestart,$dateend);
			$data['b'] = $this->accounting->gen_saldostr2($brc,$coa,$datestart);
			echo json_encode($data);
		}

		public function gen_rptldgsaldo()
		{
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			$this->db->where('b.jou_date <', $this->input->post('date_start'));
			$this->db->select('c.*,b.*,
				sum(a.joudet_debit) as ssd,
				sum(a.joudet_credit) as ssc
				');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function print_trialbalance()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_trialbalance',$data);
		}

		public function gen_trialbalance()
		{
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.jou_date >=', $this->input->post('date_start'));
        		$this->db->where('b.jou_date <=', $this->input->post('date_end'));
			}
			$this->db->select('c.*,b.*,d.*,
				sum(a.joudet_debit) as md,
				sum(a.joudet_credit) as mc
				');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			$this->db->where('b.jou_date <', $this->input->post('date_start'));
			$this->db->select('c.*,b.*,
				sum(a.joudet_debit) as ssd,
				sum(a.joudet_credit) as ssc
				');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
			$que2 = $this->db->get();
			$data['b'] = $que2->result();
			echo json_encode($data);
		}

		public function print_profitloss()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_profitloss',$data);
		}

		public function gen_profitloss()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coaid'))?$this->input->post('coaid'):NULL;
			$datestart = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->accounting->gen_income($brc,$coa,$datestart,$dateend);
			$data['b'] = $this->accounting->gen_outcome($brc,$coa,$datestart,$dateend);
			echo json_encode($data);
		}

		public function gen_saldoprofitloss()
		{
			$brc = $this->session->userdata('user_branch');
			$coa = '2140003';
			$dateend = date('Y-m-d');
			$data['a'] = $this->accounting->gen_saldomodal($brc,$coa,$dateend);
			$data['b'] = $this->accounting->gen_realtimeinc($brc,$dateend);
			$data['c'] = $this->accounting->gen_realtimeout($brc,$dateend);
			echo json_encode($data);
		}

		public function post_profitloss()
		{
			if(floatval($this->input->post('saldo_rt')) == floatval($this->input->post('saldo_rtp')))
			{
				$data['status'] = FALSE;
			}
			else
			{
				$user = $this->session->userdata('user_id');
				$brc = $this->session->userdata('user_branch');
				$sum = floatval($this->input->post('saldo_rt'))-floatval($this->input->post('saldo_rtp'));
				$dateend = date('Y-m-d');
				$post = $this->accounting->post_profitloss($user,$brc,$sum,$dateend);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function print_balancesheet()
		{
			$data['coaid'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Accounting';
			$data['menu']='accounting';
			$data['menulist']='report_accounting';
			$this->load->view('menu/administrator/accounting/print_balsheet',$data);
		}

		public function gen_balancesheet()
		{
			$brc = ($this->input->post('branch'))?$this->input->post('branch'):NULL;
			$coa = ($this->input->post('coaid'))?$this->input->post('coaid'):NULL;
			$datestart = ($this->input->post('date_start'))?$this->input->post('date_start'):NULL;
			$dateend = ($this->input->post('date_end'))?$this->input->post('date_end'):NULL;
			$data['a'] = $this->accounting->gen_bal2($brc,$coa,$datestart,$dateend);
			$data['b'] = $this->accounting->gen_bal1($brc,$coa,$datestart,$dateend);
			$data['c'] = $this->accounting->gen_saldomodal($brc,'2140001',$dateend);
			$data['d'] = $this->accounting->gen_saldomodal($brc,'2140003',$dateend);
			echo json_encode($data);
		}

		public function test()
		{
			$brc = ($this->input->post('balsh_branchid'))?$this->input->post('balsh_branchid'):NULL;
			$coa = ($this->input->post('balsh_coaid'))?$this->input->post('balsh_coaid'):NULL;
			$datestart = ($this->input->post('balsh_datestart'))?$this->input->post('balsh_datestart'):NULL;
			$dateend = ($this->input->post('balsh_dateend'))?$this->input->post('balsh_dateend'):NULL;
			$data['a'] = $this->accounting->gen_inc_bal($brc,$datestart,$dateend);
			$data['b'] = $this->accounting->gen_out_bal($brc,$datestart,$dateend);
			$data['c'] = $this->accounting->gen_saldomodal($brc,'2140001',$dateend);
			$data['d'] = $this->accounting->gen_saldomodal($brc,'2140003',$dateend);
			// Journal Check
			$this->db->from('account_journal');
	    	$this->db->where('jou_reff','LR');
	    	$this->db->where('branch_id',$brc);
	    	$que = $this->db->get();
	    	$get = $que->row();
	    	$cou = count($get);
	    	$infos = 'Jurnal Laba Rugi';
	    	$getsum = $data['a'];
	    	if($cou > 0)
	    	{
	    		$jou = array(
		    			'branch_id'=>$this->input->post('user_branch'),
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$this->input->post('kas_nomor'),
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	$this->crud->delete_by_id('jou_details',array('jou_id' => $get->JOU_ID));
		    	//Input Detail Jurnal Debet
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Jurnal Kredit
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
		    	$gen = $this->gen->gen_numjou();
				$jouid = $gen['insertId'];
				$joucode = $gen['jou_code'];
		    	$jou = array(
		    			'branch_id'=>$this->input->post('user_branch'),
						'user_id'=>$this->input->post('user_id'),
						'jou_code'=>$joucode,
						'jou_reff'=>$this->input->post('kas_nomor'),
						'jou_date'=>$this->input->post('kas_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Jurnal Debet
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$this->input->post('acc_id'),
						'joudet_debit'=>$getsum,
						'joudet_credit'=>0,
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Jurnal Kredit
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
			echo json_encode($data);
		}

		public function tes()
		{
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.jou_date >=', $this->input->post('date_start'));
        		$this->db->where('b.jou_date <=', $this->input->post('date_end'));
			}
			$this->db->select('c.*,b.*,d.*,
				sum(a.joudet_debit) as md,
				sum(a.joudet_credit) as mc
				');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			$this->db->where('b.jou_date <', $this->input->post('date_start'));
			$this->db->select('c.*,b.*,
				sum(a.joudet_debit) as ssd,
				sum(a.joudet_credit) as ssc
				');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
			$que2 = $this->db->get();
			$data['b'] = $que2->result();
			echo json_encode($data);
		}

		public function tes2()
		{
			if ($this->input->post('coaid')) 
			{
				$this->db->where('a.coa_id', $this->input->post('coaid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.jou_date >=', $this->input->post('date_start'));
        		$this->db->where('b.jou_date <=', $this->input->post('date_end'));
			}
			$this->db->select('c.*,sum(a.joudet_debit) as debit, sum(a.joudet_credit) as credit');
			$this->db->from('jou_details a');
			$this->db->join('account_journal b','b.jou_id = a.jou_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$this->db->join('master_branch d','d.branch_id = b.branch_id');
			$this->db->group_by('a.coa_id');
		}

		public function tes_kasmasuk()
		{
			$this->db->from('cashin_det a');
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$que = $this->db->get();
			$data =$que->result();
			echo json_encode($data);
		}

		public function tes_kaskeluar()
		{
			$this->db->from('cashin_det a');
			$this->db->join('trx_cash_in b','b.csh_id = a.csh_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$que = $this->db->get();
			$data['b'] =$que->result();
			$this->db->from('cashout_det a');
			$this->db->join('trx_cash_out b','b.csho_id = a.csho_id');
			$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
			$que = $this->db->get();
			$data['a'] =$que->result();
			echo json_encode($data);
		}

		//CRUD
		public function add_joudet()
		{
			$this->_validate_joudet();
			$data = array(
					'branch_id'=>$this->input->post('jou_branchid'),
					'user_id'=>$this->input->post('user_id'),
					'jou_code'=>$this->input->post('jou_code'),
					'jou_reff'=>$this->input->post('jou_reff'),
					'jou_date'=>$this->input->post('jou_date'),
					'jou_info'=>$this->input->post('jou_info'),
					'jou_sts'=>'1'
					);
			$update = $this->crud->update('account_journal',$data,array('jou_id'=>$this->input->post('jou_id')));
			$datadet = array(
					'jou_id'=>$this->input->post('jou_id'),
					'coa_id'=>$this->input->post('jou_accdet'),
					'joudet_debit'=>$this->input->post('jou_accdebetsum'),
					'joudet_credit'=>$this->input->post('jou_acccreditsum'),
					);
			$insertdet = $this->crud->save('jou_details',$datadet);
			echo json_encode(array("status" => TRUE));
		}

		public function add_joudetadj()
		{
			$this->_validate_joudet();
			$data = array(
					'branch_id'=>$this->input->post('jou_branchid'),
					'user_id'=>$this->input->post('user_id'),
					'jou_code'=>$this->input->post('jou_code'),
					'jou_reff'=>$this->input->post('jou_reff'),
					'jou_date'=>$this->input->post('jou_date'),
					'jou_info'=>$this->input->post('jou_info'),
					'jou_sts'=>'2'
					);
			$update = $this->crud->update('account_journal',$data,array('jou_id'=>$this->input->post('jou_id')));
			$datadet = array(
					'jou_id'=>$this->input->post('jou_id'),
					'coa_id'=>$this->input->post('jou_accdet'),
					'joudet_debit'=>$this->input->post('jou_accdebetsum'),
					'joudet_credit'=>$this->input->post('jou_acccreditsum'),
					);
			$insertdet = $this->crud->save('jou_details',$datadet);
			echo json_encode(array("status" => TRUE));
		}

		public function add_joupaydet()
		{
			$this->_validate_joupaydet();
			$data = array(
					'branch_id'=>$this->input->post('jou_branchid'),
					'user_id'=>$this->input->post('user_id'),
					'jou_code'=>$this->input->post('jou_code'),
					'jou_reff'=>$this->input->post('jou_reff'),
					'jou_date'=>$this->input->post('jou_date'),
					'jou_info'=>$this->input->post('jou_info'),
					'jou_sts'=>'1'
					);
			$update = $this->crud->update('account_journal',$data,array('jou_id'=>$this->input->post('jou_id')));
			$datadet = array(
					'jou_id'=>$this->input->post('jou_id'),
					'coa_id'=>$this->input->post('jou_accdet'),
					'joudet_debit'=>$this->input->post('jou_accdebetsum'),
					'joudet_credit'=>$this->input->post('jou_acccreditsum'),
					);
			$insertdet = $this->crud->save('jou_details',$datadet);
			$piutangdet = array(
					'jou_id'=>$this->input->post('jou_id'),
					'coa_id'=>$this->input->post('jou_invaccrcvid'),
					'joudet_debit'=>$this->input->post('jou_acccreditsum'),
					'joudet_credit'=>$this->input->post('jou_accdebetsum'),
					);
			$inspiutangdet = $this->crud->save('jou_details',$piutangdet);
			echo json_encode(array("status" => TRUE));
		}

		public function delete_joudet($id)
		{
			$this->crud->delete_by_id('jou_details',array('joudet_id' => $id));
        	echo json_encode(array("status" => TRUE));
		}

		public function _validate_joudet()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('jou_code') == '')
	        {
	            $data['inputerror'][] = 'jou_code';
	            $data['error_string'][] = 'Nomor Jurnal Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_branch') == '')
	        {
	            $data['inputerror'][] = 'jou_branch';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_info') == '')
	        {
	            $data['inputerror'][] = 'jou_info';
	            $data['error_string'][] = 'Keterangan Jurnal Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_accdet') == '')
	        {
	            $data['inputerror'][] = 'jou_accdet';
	            $data['error_string'][] = 'Nomor Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_accdebetsum') == '')
	        {
	            $data['inputerror'][] = 'jou_accdebetsum';
	            $data['error_string'][] = 'Debet Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_acccreditsum') == '')
	        {
	            $data['inputerror'][] = 'jou_acccreditsum';
	            $data['error_string'][] = 'Kredit Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function _validate_joupaydet()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('jou_code') == '')
	        {
	            $data['inputerror'][] = 'jou_code';
	            $data['error_string'][] = 'Nomor Jurnal Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_branch') == '')
	        {
	            $data['inputerror'][] = 'jou_branch';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_invaccrcv') == '')
	        {
	            $data['inputerror'][] = 'jou_invaccrcv';
	            $data['error_string'][] = 'Nomor Piutang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_info') == '')
	        {
	            $data['inputerror'][] = 'jou_info';
	            $data['error_string'][] = 'Keterangan Jurnal Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_accdet') == '')
	        {
	            $data['inputerror'][] = 'jou_accdet';
	            $data['error_string'][] = 'Nomor Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_accdebetsum') == '')
	        {
	            $data['inputerror'][] = 'jou_accdebetsum';
	            $data['error_string'][] = 'Debet Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jou_acccreditsum') == '')
	        {
	            $data['inputerror'][] = 'jou_acccreditsum';
	            $data['error_string'][] = 'Kredit Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function sub_inv($id)
		{
			$this->db->select('sum(a.invdet_amount) as sub');
			$this->db->from('inv_details a');
			$this->db->join('trx_invoice b','b.inv_id = a.inv_id');
			$this->db->where('a.inv_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
		}

		public function save_saldoacc()
		{
			$data = array(
				'coa_debit'=>$this->input->post('sal_accdebetsum'),
				'coa_credit'=>$this->input->post('sal_acccreditsum')
			);
			$update = $this->crud->update('chart_of_account',$data,array('coa_id'=>$this->input->post('salstr_acc')));
			echo json_encode(array("status" => TRUE));
		}
	}
?>