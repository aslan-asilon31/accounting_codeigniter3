<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Logistik extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_logistik','logistik');
			$this->load->model('datatables/Dt_srchgd','srch_gd');
			$this->load->model('datatables/Dt_srchgdusg','srch_gdusg');
			$this->load->model('datatables/Dt_srchsupp','srch_supp');
			$this->load->model('datatables/Dt_srchappr','srch_appr');
			$this->load->model('datatables/Dt_srchcurr','srch_curr');
			$this->load->model('datatables/Dt_srchpo','srch_po');
			$this->load->model('datatables/Dt_srchprc','srch_prc');
			$this->load->model('datatables/Dt_srchretprc','srch_retprc');
			$this->load->model('datatables/Dt_srchusage','srch_usage');
			$this->load->model('datatables/Dt_podet','gdpo');
			$this->load->model('datatables/Dt_prcdet','gdprc');
			$this->load->model('datatables/Dt_usgdet','gdusg');
			$this->load->model('datatables/Dt_usgrtdet','gdrtusg');
			$this->load->model('datatables/Dt_retprcdet','gdretprc');
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('datatables/Dt_lap_po','lap_po');
			$this->load->model('datatables/Dt_lap_prc','lap_prc');
		}

		//Menu Link
		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='dash_logistik';
			$data['isi']='menu/administrator/logistik/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lap_po()
	    {
	    	$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
	    	$data['title']='Match Terpadu - Laporan PO Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/lap_po';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function lap_pembelian()
	    {
	    	$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
	    	$data['title']='Match Terpadu - Laporan Pembelian Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/lap_pembelian';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_po()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/report_po';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_prc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/report_prc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_usg()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/report_usg';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_stock()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/report_stock';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_po_lgt()
		{
			$gen = $this->gen->gen_numpolgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['po_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_bl_lgt()
		{
			$gen = $this->gen->gen_numbllgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['prc_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_blsub_lgt()
		{
			$gen = $this->gen->gen_numblsublgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['prc_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_ret_lgt()
		{
			$gen = $this->gen->gen_numretlgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['rtprc_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_usage_lgt()
		{
			$gen = $this->gen->gen_numusagelgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['usg_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_retusage_lgt()
		{
			$gen = $this->gen->gen_num_retusagelgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['rtusg_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_adj_lgt()
		{
			$gen = $this->gen->gen_num_adjlgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['adj_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_bapp_lgt()
		{
			$gen = $this->gen->gen_num_bapplgt();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['bapp_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function lgt_trx_po()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->gen_ponumber();
			// $data['po'] = $this->crud->get_by_id('trx_po',array('po_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='po';
			$data['isi']='menu/administrator/logistik/lgt_trx_po';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_prc_sub()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_bl();
			// $data['prc'] = $this->crud->get_by_id('trx_procurement',array('prc_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='prc_sub';
			$data['isi']='menu/administrator/logistik/lgt_trx_prc_sub';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_prc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_bl();
			// $data['prc'] = $this->crud->get_by_id('trx_procurement',array('prc_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='prc';
			$data['isi']='menu/administrator/logistik/lgt_trx_prc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_retprc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_rb();
			// $data['rb'] = $this->crud->get_by_id('procurement_ret',array('rtprc_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='retprc';
			$data['isi']='menu/administrator/logistik/lgt_trx_retprc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_usage()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_usg();
			// // $id = '1';
			// $data['usg'] = $this->crud->get_by_id('trx_usage',array('usg_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='usage';
			$data['isi']='menu/administrator/logistik/lgt_trx_usage';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_retusage()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_retusg();
			// // $id = '1';
			// $data['usg'] = $this->crud->get_by_id('usage_ret',array('rtusg_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='retusg';
			$data['isi']='menu/administrator/logistik/lgt_trx_retusg';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_adjust()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			// $id=$this->crud->add_adj();
			// // $id = '1';
			// $data['adj'] = $this->crud->get_by_id('trx_adjustment',array('adj_id' => $id));
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='adjust';
			$data['isi']='menu/administrator/logistik/lgt_trx_adjust';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lgt_trx_bapp()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');			
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='bapplog';
			$data['isi']='menu/administrator/logistik/lgt_trx_bapp';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_po()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/lgt_print_po';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_po($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/po_print_new',$data);
		}

		public function print_prc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/lgt_print_prc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_prc($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/prc_print_new',$data);
		}

		public function print_retprc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$data['isi']='menu/administrator/logistik/lgt_print_retprc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_retprc($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/retprc_print',$data);
		}

		public function pageprint_usg($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/usg_print',$data);
		}

		public function pageprint_adj($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/adj_print',$data);
		}

		public function pageprint_bapplog($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/print_bapplog',$data);
		}

		public function pageprint_bapplogimg()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'LOG');
			$data['ids']=$this->uri->segment(4);
			$data['title']='Match Terpadu - Dashboard Marketing';
			$data['menu']='marketing';
			$data['menulist']='report_marketing';
			$this->load->view('menu/administrator/logistik/print_bapplogimg',$data);
		}

		public function open_lgtpo($id)
		{
			$user = $this->input->post('user_name');
			$string = array();
			$prc = $this->logistik->check_po('trx_procurement',$id,'prc_sts');
			if($prc > 0)
			{
				$string[] = 'Pembelian Logistik';
			}
			if(sizeof($string) > 0)
			{
				$data['status'] = FALSE;
				$data['string'] = implode(', ',$string);
			}
			else
			{
				$dt = array('po_sts'=>'0');
				$update = $this->crud->update('trx_po',$dt,array('po_id' => $id));
				$his = $this->logistik->getlog_polgt($id);
				$dthis = array(
						'po_id' => $id,
						'hispo_sts' => 'Open by User '.$user,
						'hispo_old' => $his->HISPO_STS,
						'hispo_new' => 'Open By User '.$user,
						'hispo_info' => 'Open Record by PO Logistik form',
						'hispo_date' => date('Y-m-d'),
						'hispo_time' => date('H:i:s'),
						'hispo_upcount' => $his->HISPO_UPCOUNT+1
					);
				$this->db->insert('his_po',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function open_lgtprc($id)
		{
			$user = $this->input->post('user_name');
			$get = $this->db->get_where('trx_procurement',array('prc_id'=>$id));
			$code = $get->row()->PRC_CODE;
			$string = array();
			$retprc = $this->logistik->check_prc('procurement_ret',$id,'rtprc_sts');
			if($retprc > 0)
			{
				$string[] = 'Retur Pembelian Logistik';
			}
			$bankout = $this->logistik->check_prc('bankout_det',array('bnkodet_reff'=>$code),null);
			if($bankout > 0)
			{
				$string[] = 'Bank Keluar';
			}
			$bankout = $this->logistik->check_prc('cashout_det',array('cshodet_reff'=>$code),null);
			if($bankout > 0)
			{
				$string[] = 'Kas Keluar';
			}
			if(sizeof($string) > 0)
			{
				$data['status'] = FALSE;
				$data['string'] = implode(', ',$string);
			}
			else
			{
				$get_prc = $this->db->get_where('trx_procurement',array('prc_id'=>$id))->row();
				$get_jou = $this->db->get_where('account_journal',array('jou_reff'=>$get_prc->PRC_CODE,'branch_id'=>$this->session->userdata('user_branch')));
				if($get_jou->num_rows() > 0)
				{
					$this->crud->delete_by_id('jou_details',array('jou_id'=>$get_jou->row()->JOU_ID));
				}				
				$dt = array('prc_sts'=>'0');
				$update = $this->crud->update('trx_procurement',$dt,array('prc_id'=>$id));
				$his = $this->logistik->getlog_prclgt($id);
				$dthis = array(
						'prc_id' => $id,
						'hisprc_sts' => 'Open by User '.$user,
						'hisprc_old' => $his->HISPRC_STS,
						'hisprc_new' => 'Open By User '.$user,
						'hisprc_info' => 'Open Record by Pembelian Logistik form',
						'hisprc_date' => date('Y-m-d'),
						'hisprc_time' => date('H:i:s'),
						'hisprc_upcount' => $his->HISPRC_UPCOUNT+1
					);
				$this->db->insert('his_prc',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function open_lgtrtprc($id)
		{
			$user = $this->input->post('user_name');
			$dt = array('rtprc_sts'=>'0');
			$update = $this->crud->update('procurement_ret',$dt,array('rtprc_id' => $id));
			$his = $this->logistik->getlog_rtprclgt($id);
			$dthis = array(
					'rtprc_id' => $id,
					'hisrtprc_sts' => 'Open by User '.$user,
					'hisrtprc_old' => $his->HISRTPRC_STS,
					'hisrtprc_new' => 'Open By User '.$user,
					'hisrtprc_info' => 'Open Record by Retur Pembelian Logistik form',
					'hisrtprc_date' => date('Y-m-d'),
					'hisrtprc_upcount' => $his->HISRTPRC_UPCOUNT+1
				);
			$this->db->insert('his_retprc',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function open_lgtusg($id)
		{
			$user = $this->input->post('user_name');
			$string = array();
			$rtusg = $this->logistik->check_usg('usage_ret',$id,'rtusg_sts');
			if($rtusg > 0)
			{
				$string[] = 'Retur Pemakaian Logistik';
			}
			if(sizeof($string) > 0)
			{
				$data['status'] = FALSE;
				$data['string'] = implode(', ',$string);
			}
			else
			{
				$dt = array('usg_sts'=>'0');
				$update = $this->crud->update('trx_usage',$dt,array('usg_id' => $id));
				$his = $this->logistik->getlog_usglgt($id);
				$dthis = array(
						'usg_id' => $id,
						'hisusg_sts' => 'Open by User '.$user,
						'hisusg_old' => $his->HISUSG_STS,
						'hisusg_new' => 'Open By User '.$user,
						'hisusg_info' => 'Open Record by Pemakaian Logistik form',
						'hisusg_date' => date('Y-m-d'),
						'hisusg_upcount' => $his->HISUSG_UPCOUNT+1
					);
				$this->db->insert('his_usg',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function open_lgtrtusg($id)
		{
			$user = $this->input->post('user_name');
			$dt = array('rtusg_sts'=>'0');
			$update = $this->crud->update('usage_ret',$dt,array('rtusg_id' => $id));
			$his = $this->logistik->getlog_rtusglgt($id);
			$dthis = array(
					'rtusg_id' => $id,
					'hisrtusg_sts' => 'Open by User '.$user,
					'hisrtusg_old' => $his->HISRTUSG_STS,
					'hisrtusg_new' => 'Open By User '.$user,
					'hisrtusg_info' => 'Open Record by Retur Pemakaian Logistik form',
					'hisrtusg_date' => date('Y-m-d'),
					'hisrtusg_upcount' => $his->HISRTUSG_UPCOUNT+1
				);
			$this->db->insert('his_retusg',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function open_bapplog($id)
		{
			$user = $this->input->post('user_name');
			$dt = array('balg_sts'=>'0');
			$update = $this->crud->update('trx_bapplog',$dt,array('balg_id' => $id));
			$his = $this->logistik->getlog_bapplgt($id);
			$dthis = array(
					'balg_id' => $id,
					'hisbalg_sts' => 'Open by User '.$user,
					'hisbalg_old' => $his->HISBALG_STS,
					'hisbalg_new' => 'Open By User '.$user,
					'hisbalg_info' => 'Open Record by BAPP Logistik form',
					'hisbalg_date' => date('Y-m-d'),
					'hisbalg_time' => date('H:i:s'),
					'hisbalg_upcount' => $his->HISBALG_UPCOUNT+1
				);
			$this->db->insert('his_bapplog',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		//Laporan
		public function print_rptpo()
		{
			$data['appr'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpt_type'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/print_rptpo',$data);
		}

		public function gen_rptpo_t1()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.po_date >=', $this->input->post('date_start'));
        		$this->db->where('b.po_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('po_details a');
			$this->db->join('trx_po b','b.po_id = a.po_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_supplier d','d.supp_id = b.supp_id');
			$this->db->join('master_user e','e.user_id = b.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$this->db->join('master_goods g','g.gd_id = a.gd_id');
			$this->db->join('master_location h','h.loc_id = b.loc_id');
			$this->db->order_by('b.po_code');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function print_rptprc()
		{
			$data['supp'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['appr'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['datestart'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['dateend'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['branch'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['rpt_type'] = ($this->uri->segment(9) == 'null') ? '' : $this->uri->segment(9);
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/print_rptprc',$data);
		}

		public function gen_rptprc_t1()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('c.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('suppid')) 
			{
				$this->db->like('c.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('f.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('b.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('prc_details a');
			$this->db->join('trx_procurement b','b.prc_id = a.prc_id');
			$this->db->join('trx_po c','c.po_id = b.po_id');
			$this->db->join('trx_approvalbill d','d.appr_id = c.appr_id','left');
			$this->db->join('master_supplier e','e.supp_id = c.supp_id');
			$this->db->join('master_user f','f.user_id = b.user_id');
			$this->db->join('master_branch g','g.branch_id = f.branch_id');
			$this->db->join('master_goods h','h.gd_id = a.gd_id');
			$this->db->join('master_location i','i.loc_id = c.loc_id');
			$this->db->order_by('b.prc_code');
			$que = $this->db->get();
			$data['a'] = $que->result();
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('trx_procurement a');			
			$this->db->join('trx_po b','b.po_id = a.po_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_supplier d','d.supp_id = b.supp_id');
			$this->db->join('master_user e','e.user_id = a.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$que = $this->db->get();
			$data['b'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptprc_t2()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('trx_procurement a');			
			$this->db->join('trx_po b','b.po_id = a.po_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_supplier d','d.supp_id = b.supp_id');
			$this->db->join('master_user e','e.user_id = a.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');			
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptprc_t2b($v)
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prc_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prc_date <=', $this->input->post('date_end'));  
			}
			$this->db->select($v.', g.*, sum(a.prc_sub) as sub, sum(a.prc_disc) disc, sum(a.prc_ppn) as ppn, sum(a.prc_cost) cost, sum(a.prc_gtotal) as gt');
			$this->db->from('trx_procurement a');			
			$this->db->join('trx_po b','b.po_id = a.po_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_supplier d','d.supp_id = b.supp_id');
			$this->db->join('master_user e','e.user_id = a.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$this->db->join('master_location g','g.loc_id = b.loc_id');	
			$this->db->group_by($v);		
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function print_rptusg()
		{
			$data['appr'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpt_type'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/print_rptusg',$data);
		}

		public function gen_rptusg_t1()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.usg_date >=', $this->input->post('date_start'));
        		$this->db->where('b.usg_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('usage_details a');
			$this->db->join('trx_usage b','b.usg_id = a.usg_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_user e','e.user_id = b.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$this->db->join('master_goods g','g.gd_id = a.gd_id');			
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptusg_t2()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->like('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.usg_date >=', $this->input->post('date_start'));
        		$this->db->where('b.usg_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('b.usg_code, b.usg_date, c.appr_code, d.loc_name, sum(a.usgdet_sub) as sub');
			$this->db->from('usage_details a');
			$this->db->join('trx_usage b','b.usg_id = a.usg_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_user e','e.user_id = b.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$this->db->join('master_goods g','g.gd_id = a.gd_id');
			$this->db->group_by('a.usg_id');			
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function print_rptst()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['rpt_type'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard Logistik';
			$data['menu']='logistik';
			$data['menulist']='report_logistik';
			$this->load->view('menu/administrator/logistik/print_rptstock',$data);
		}

		public function gen_rptstock()
		{
			$data['a'] = $this->logistik->get_allgd();
			$data['b'] = $this->logistik->get_prcgd();
			$data['c'] = $this->logistik->get_retprcgd();
			$data['d'] = $this->logistik->get_usggd();
			$data['e'] = $this->logistik->get_retusggd();
			echo json_encode($data);
		}

		//Ajax Search
		public function ajax_srch_po()
		{
			$brc = 'd.branch_id = '.$this->session->userdata('user_branch');
			$list = $this->srch_po->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PO_CODE;
				// $row[] = $dat->APPR_CODE;
				$row[] = '';
				// $row[] = $dat->CUST_NAME;
				$row[] = '';
				$row[] = $dat->PO_ORDNUM;				
				$row[] = $dat->PO_DATE;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->PO_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_po->count_all(),
							"recordsFiltered" => $this->srch_po->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_filter_po()
		{

			$list = $this->lap_po->get_datatables();
			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->PO_ORDNUM;				
				$row[] = $dat->PO_DATE;				
				$row[] = '<center><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-print"></span> Print</a></center>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->lap_po->count_all(),
							"recordsFiltered" => $this->lap_po->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_filter_prc()
		{

			$list = $this->lap_prc->get_datatables();
			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRC_CODE;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->CUST_NAME;
				// $row[] = $dat->PO_CODE;
				// $row[] = $dat->APPR_CODE;
				// $row[] = $dat->CUST_NAME;
				$row[] = $dat->PRC_DATE;				
				$row[] = '<center><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-print"></span> Print</a></center>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->lap_prc->count_all(),
							"recordsFiltered" => $this->lap_prc->count_filtered(),
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
				$row[] = $dat->APPR_PO;
				$row[] = $dat->APPR_DATE;				
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;				
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

		public function ajax_srch_brg($suppid)
		{
			$list = $this->srch_gd->get_datatables($suppid);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_UNIT;				
				$row[] = $dat->GD_MEASURE;
				$row[] = $dat->GD_INFO;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_brg('."'".$dat->GD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gd->count_all(),
							"recordsFiltered" => $this->srch_gd->count_filtered($suppid),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_brgusg()
		{
			$list = $this->srch_gdusg->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_CODE;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_UNIT;				
				$row[] = $dat->GD_MEASURE;				
				$row[] = $dat->GD_STOCK;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_brg('."'".$dat->GD_ID."'".')">Pilih</a>';
				$row[] = $dat->GD_INFO;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_gdusg->count_all(),
							"recordsFiltered" => $this->srch_gdusg->count_filtered(),
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

		public function ajax_srch_prc()
		{
			$list = $this->srch_prc->get_datatables();
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
							"recordsTotal" => $this->srch_prc->count_all(),
							"recordsFiltered" => $this->srch_prc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_retprc()
		{
			$list = $this->srch_retprc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->RTPRC_CODE;
				$row[] = $dat->PRC_CODE;
				$row[] = $dat->PRC_INVOICE;				
				$row[] = $dat->RTPRC_DATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_retprc('."'".$dat->RTPRC_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_retprc->count_all(),
							"recordsFiltered" => $this->srch_retprc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_srch_usg()
		{
			$list = $this->srch_usage->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USG_CODE;
				$row[] = $dat->USG_DATE;
				$row[] = $dat->USG_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usage('."'".$dat->USG_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_usage->count_all(),
							"recordsFiltered" => $this->srch_usage->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Ajax Show To Delete
		public function ajax_barang($id)
		{
			$list = $this->gdpo->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->PODET_QTYUNIT;
				$row[] = $dat->PODET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->PODET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdpo->count_all(),
							"recordsFiltered" => $this->gdpo->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_barang_($id)
		{
			$list = $this->gdpo->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->PODET_QTYUNIT;
				$row[] = $dat->PODET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" disabled><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdpo->count_all(),
							"recordsFiltered" => $this->gdpo->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_brg_prc($id)
		{
			$list = $this->gdprc->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->PRCDET_QTY;
				$row[] = $dat->PRCDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->PRCDET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdprc->count_all(),
							"recordsFiltered" => $this->gdprc->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_brg_prc_($id)
		{
			$list = $this->gdprc->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->PRCDET_QTY;
				$row[] = $dat->PRCDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" disabled><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdprc->count_all(),
							"recordsFiltered" => $this->gdprc->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_brg_retprc($id)
		{
			$list = $this->gdretprc->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->RETPRCDET_QTY;
				$row[] = $dat->RETPRCDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->RETPRCDET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdretprc->count_all(),
							"recordsFiltered" => $this->gdretprc->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_brgusg($id)
		{
			$list = $this->gdusg->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->USGDET_QTY;
				$row[] = $dat->GD_MEASURE;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->USGDET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdusg->count_all(),
							"recordsFiltered" => $this->gdusg->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_brgrtusg($id)
		{
			$list = $this->gdrtusg->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->RETUSGDET_QTY;
				$row[] = $dat->GD_MEASURE;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->RETUSGDET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdrtusg->count_all(),
							"recordsFiltered" => $this->gdrtusg->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Ajax Show To Pick
		public function ajax_dtpo($id)
		{
			$list = $this->gdpo->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->PODET_QTYUNIT;
				$row[] = $dat->PODET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_podet('."'".$dat->PODET_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdpo->count_all(),
							"recordsFiltered" => $this->gdpo->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_dtprc($id)
		{
			$list = $this->gdprc->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->PRCDET_QTY;
				$row[] = $dat->PRCDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_retprc('."'".$dat->PRCDET_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->gdprc->count_all(),
							"recordsFiltered" => $this->gdprc->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Ajax CRUD
		public function ajax_simpanpo()
		{
			$appr = null;
			if($this->input->post('appr_id') != null)
			{
				$appr = $this->input->post('appr_id');
			}
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'appr_id' => $appr,
	                'supp_id' => $this->input->post('supp_id'),
	                // 'loc_id' => $this->input->post('loc_id'),
	                'po_sts' => '2',
	                'po_code' => $this->input->post('po_code'),
	                'po_date' => $this->input->post('po_tgl'),
	                'po_ordnum' => $this->input->post('po_so'),
	                'po_term' => $this->input->post('po_term'),
	                'po_info' => $this->input->post('po_info'),
	                'po_sub' => $this->input->post('po_subs'),
	                'po_gtotal' => $this->input->post('po_subs')	                
	            );
	        $update = $this->crud->update('trx_po',$data,array('po_id' => $this->input->post('po_id')));
	        $this->logupd_polgt_save($this->input->post('po_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approvepo()
		{
			$data = array(
	                'po_sts' => '1'
	            );
	        $update = $this->crud->update('trx_po',$data,array('po_id' => $this->input->post('po_id')));
	        $this->logupd_polgt_save($this->input->post('po_id'),$this->input->post('user_name'),'Approved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprovepo()
		{
			$data = array(
	                'po_sts' => '0'
	            );
	        $update = $this->crud->update('trx_po',$data,array('po_id' => $this->input->post('po_id')));
	        $this->logupd_polgt_save($this->input->post('po_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_polgt_save($id,$user,$sts)
	    {
	    	$his = $this->logistik->getlog_polgt($id);
	    	if ($his->HISPO_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'po_id' => $id,
						'hispo_sts' => $sts.' by User '.$user,
						'hispo_old' => $his->HISPO_STS,
						'hispo_new' => $sts.' By User '.$user,
						'hispo_info' => 'Original Save by PO Logistik form',
						'hispo_date' => date('Y-m-d'),
						'hispo_time' => date('H:i:s'),
						'hispo_upcount' => $his->HISPO_UPCOUNT+1
					);
				$this->db->insert('his_po',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'po_id' => $id,
						'hispo_sts' => $sts.' by User '.$user,
						'hispo_old' => $his->HISPO_STS,
						'hispo_new' => $sts.' By User '.$user,
						'hispo_info' => 'Update by '.$user.' from PO Logistik form',
						'hispo_date' => date('Y-m-d'),
						'hispo_time' => date('H:i:s'),
						'hispo_upcount' => $his->HISPO_UPCOUNT
					);
				$this->db->insert('his_po',$data);
	    	}
	    }

		public function ajax_add_brg()
	    {
	      	$table = 'po_details';
	        $data = array(
	                'po_id' => $this->input->post('po_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'podet_qtyunit' => $this->input->post('po_qty'),
	                'podet_sub' => $this->input->post('po_sub')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_add_brgprc()
	    {
	      	$this->_validate_po();
	      	$table = 'prc_details';
	        $data = array(
	                'prc_id' => $this->input->post('prc_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'prcdet_qty' => $this->input->post('po_qty'),
	                'prcdet_sub' => $this->input->post('po_sub')
	            );
	        $insert = $this->crud->save($table,$data);
	        if($this->input->post('gd_typestock') == '0')
	        {
	        	$getid = $this->crud->get_by_id('master_goods',array('gd_id' => $this->input->post('gd_id')));
		        $stock = $getid->GD_STOCK;
		        $add = $this->input->post('po_qty');
		        $up = $stock + $add; 
		        $data_up = array (
		        		'gd_stock' => $up
		        	);
		        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $this->input->post('gd_id')));
	        }
	        echo json_encode(array("status" => TRUE));	        
	    }

	    public function ajax_del_brgprc($id)
	    {
	    	$getprc = $this->crud->get_by_id('prc_details',array('prcdet_id' => $id));
	    	$gdid = $getprc->GD_ID;
	    	$substract =  $getprc->PRCDET_QTY;
	    	if($this->input->post('gd_typestock') == '0')
	    	{
	    		$getid = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
		    	$stock = $getid->GD_STOCK;
		        $up = $stock - $substract;
		        $data_up = array (
		        		'gd_stock' => $up
		        	);
		        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	}
	    	$this->crud->delete_by_id('prc_details',array('prcdet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanprc()
		{
			$data = array(
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'po_id' => $this->input->post('po_id'),
	                'prc_sts' => '2',
	                'prc_code' => $this->input->post('prc_code'),
	                'prc_date' => $this->input->post('prc_tgl'),
	                'prc_invoice' => $this->input->post('prc_inv'),
	                'prc_info' => $this->input->post('po_info'),
	                'prc_sub' => $this->input->post('po_subs'),
	                'prc_disc' => $this->input->post('prc_disc'),
	                'prc_ppn' => $this->input->post('prc_ppn'),
	                'prc_cost' => $this->input->post('prc_cost'),
	                'prc_gtotal' => $this->input->post('prc_gtotal')
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id' => $this->input->post('prc_id')));
	        $this->logupd_prclgt_save($this->input->post('prc_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approveprc()
		{
			$data = array(
	                'prc_sts' => '1'
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id'=>$this->input->post('prc_id')));
	        $this->logupd_prclgt_save($this->input->post('prc_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	    	$prc_code = $this->input->post('prc_code');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$prc_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$hppnom = ($this->input->post('prc_gtotal')-($this->input->post('prc_disc')+$this->input->post('prc_ppn')+$this->input->post('prc_cost')));
	    	$hpp = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COA;
	    	$dbt = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAAG;
	    	$disc = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COADISC;
	    	$ppn = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAPPN;
	    	$cost = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COACOST;
	    	$infos = 'Jurnal Pembelian '.$prc_code.' dari '.$this->input->post('supp_name');
	    	if($que->num_rows() > 0)
	    	{
	    		//Update Data Jurnal
	    		$jou = array(
		    			'branch_id'=>$brc,
						'user_id'=>$this->input->post('user_id'),
						'jou_reff'=>$prc_code,
						'jou_date'=>$this->input->post('prc_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
		    	//Hapus Detail Jurnal
		    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$get->JOU_ID,
						'coa_id'=>$dbt,
						'joudet_debit'=>0,
						'joudet_credit'=>$this->input->post('prc_gtotal'),
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
				$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
	    	    $get2 = $que2->result();
	    	    foreach ($get2 as $dat)
	    	    {
	    	    	$joudet2 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$hpp,
							'joudet_debit'=>$dat->PRCDET_SUB,
							'joudet_credit'=>0,
							);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
	    	    }
				if($this->input->post('prc_disc')!='0')
				{
					$joudet3 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$disc,
							'joudet_debit'=>$this->input->post('prc_disc'),
							'joudet_credit'=>0,
							);
					$insjoudet3 = $this->crud->save('jou_details',$joudet3);
				}
				if($this->input->post('prc_ppn')!='0')
				{
					$joudet4 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$ppn,
							'joudet_debit'=>$this->input->post('prc_ppn'),
							'joudet_credit'=>0,
							);
					$insjoudet4 = $this->crud->save('jou_details',$joudet4);
				}
				if($this->input->post('prc_cost')!='0')
				{
					$joudet5 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$cost,
							'joudet_debit'=>$this->input->post('prc_cost'),
							'joudet_credit'=>0,
							);
					$insjoudet5 = $this->crud->save('jou_details',$joudet5);
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
						'jou_reff'=>$prc_code,
						'jou_date'=>$this->input->post('prc_tgl'),
						'jou_info'=>$infos,
						'jou_sts'=>'1'
		    	);
		    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
		    	//Input Detail Kredit
		    	$joudet1 = array(
						'jou_id'=>$jouid,
						'coa_id'=>$dbt,
						'joudet_debit'=>0,
						'joudet_credit'=>$this->input->post('prc_gtotal'),
						);
				$insjoudet1 = $this->crud->save('jou_details',$joudet1);
				//Input Detail Debet
				$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
	    	    $get2 = $que2->result();
	    	    foreach ($get2 as $dat)
	    	    {
	    	    	$joudet2 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$hpp,
							'joudet_debit'=>$dat->PRCDET_SUB,
							'joudet_credit'=>0,
							);
					$insjoudet2 = $this->crud->save('jou_details',$joudet2);
	    	    }
				if($this->input->post('prc_disc')!='0')
				{
					$joudet3 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$disc,
							'joudet_debit'=>$this->input->post('prc_disc'),
							'joudet_credit'=>0,
							);
					$insjoudet3 = $this->crud->save('jou_details',$joudet3);
				}
				if($this->input->post('prc_ppn')!='0')
				{
					$joudet4 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$ppn,
							'joudet_debit'=>$this->input->post('prc_ppn'),
							'joudet_credit'=>0,
							);
					$insjoudet4 = $this->crud->save('jou_details',$joudet4);
				}
				if($this->input->post('prc_cost')!='0')
				{
					$joudet5 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$cost,
							'joudet_debit'=>$this->input->post('prc_cost'),
							'joudet_credit'=>0,
							);
					$insjoudet5 = $this->crud->save('jou_details',$joudet5);
				}
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapproveprc()
		{
			$data = array(
	                'prc_sts' => '0'
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id' => $this->input->post('prc_id')));
	        $this->logupd_prclgt_save($this->input->post('prc_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpanprcsub()
		{
			$subid = ($this->input->post('prcpar_id') != '')?$this->input->post('prcpar_id'):NULL;
			$subcode = ($subid != NULL)?$this->db->get_where('trx_procurement',array('prc_id'=>$subid))->row()->PRC_CODE:NULL;
			$data = array(
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'po_id' => $this->input->post('po_id'),
	                'prc_substs' => $this->input->post('prcsub_type'),
	                'prc_subid' => $subid,
	                'prc_subcode' => $subcode,
	                'prc_sts' => '2',
	                'prc_code' => $this->input->post('prc_code'),
	                'prc_date' => $this->input->post('prc_tgl'),
	                'prc_invoice' => $this->input->post('prc_inv'),
	                'prc_info' => $this->input->post('po_info'),
	                'prc_sub' => $this->input->post('po_subs'),
	                'prc_disc' => $this->input->post('prc_disc'),
	                'prc_ppn' => $this->input->post('prc_ppn'),
	                'prc_cost' => $this->input->post('prc_cost'),
	                'prc_gtotal' => $this->input->post('prc_gtotal')
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id' => $this->input->post('prc_id')));
	        $this->logupd_prclgt_save($this->input->post('prc_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approveprcsub()
		{
			$prcid = $this->input->post('prc_id');
			$substs = $this->db->get_where('trx_procurement',array('prc_id'=>$prcid))->row()->PRC_SUBSTS;
			$data = array(
	                'prc_sts' => '1'
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id'=>$prcid));
	        $this->logupd_prclgt_save($prcid,$this->input->post('user_name'),'Approved');
	        //cek jurnal
	    	$prc_code = $this->input->post('prc_code');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$prc_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$hppnom = ($this->input->post('prc_gtotal')-($this->input->post('prc_disc')+$this->input->post('prc_ppn')+$this->input->post('prc_cost')));
	    	$infos = 'Jurnal Pembelian '.$prc_code.' dari '.$this->input->post('supp_name');
	    	switch($substs)
	    	{
	    		case '0':
	    			$hpp = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COA;
			    	$dbt = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAMAIN;
			    	$disc = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COADISC;
			    	$ppn = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAPPN;
			    	$cost = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COACOST;
	    			if($que->num_rows() > 0)
			    	{
			    		//Update Data Jurnal
			    		$jou = array(
				    			'branch_id'=>$brc,
								'user_id'=>$this->input->post('user_id'),
								'jou_reff'=>$prc_code,
								'jou_date'=>$this->input->post('prc_tgl'),
								'jou_info'=>$infos,
								'jou_sts'=>'1'
				    	);
				    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
				    	//Hapus Detail Jurnal
				    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
				    	//Input Detail Kredit
				    	$joudet1 = array(
								'jou_id'=>$get->JOU_ID,
								'coa_id'=>$dbt,
								'joudet_debit'=>0,
								'joudet_credit'=>$this->input->post('prc_gtotal'),
								);
						$insjoudet1 = $this->crud->save('jou_details',$joudet1);
						//Input Detail Debet
						$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
			    	    $get2 = $que2->result();
			    	    foreach ($get2 as $dat)
			    	    {
			    	    	$joudet2 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$hpp,
									'joudet_debit'=>$dat->PRCDET_SUB,
									'joudet_credit'=>0,
									);
							$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    	    }
						if($this->input->post('prc_disc')!='0')
						{
							$joudet3 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$disc,
									'joudet_debit'=>$this->input->post('prc_disc'),
									'joudet_credit'=>0,
									);
							$insjoudet3 = $this->crud->save('jou_details',$joudet3);
						}
						if($this->input->post('prc_ppn')!='0')
						{
							$joudet4 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$ppn,
									'joudet_debit'=>$this->input->post('prc_ppn'),
									'joudet_credit'=>0,
									);
							$insjoudet4 = $this->crud->save('jou_details',$joudet4);
						}
						if($this->input->post('prc_cost')!='0')
						{
							$joudet5 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$cost,
									'joudet_debit'=>$this->input->post('prc_cost'),
									'joudet_credit'=>0,
									);
							$insjoudet5 = $this->crud->save('jou_details',$joudet5);
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
								'jou_reff'=>$prc_code,
								'jou_date'=>$this->input->post('prc_tgl'),
								'jou_info'=>$infos,
								'jou_sts'=>'1'
				    	);
				    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
				    	//Input Detail Kredit
				    	$joudet1 = array(
								'jou_id'=>$jouid,
								'coa_id'=>$dbt,
								'joudet_debit'=>0,
								'joudet_credit'=>$this->input->post('prc_gtotal'),
								);
						$insjoudet1 = $this->crud->save('jou_details',$joudet1);
						//Input Detail Debet
						$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
			    	    $get2 = $que2->result();
			    	    foreach ($get2 as $dat)
			    	    {
			    	    	$joudet2 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$hpp,
									'joudet_debit'=>$dat->PRCDET_SUB,
									'joudet_credit'=>0,
									);
							$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    	    }
						if($this->input->post('prc_disc')!='0')
						{
							$joudet3 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$disc,
									'joudet_debit'=>$this->input->post('prc_disc'),
									'joudet_credit'=>0,
									);
							$insjoudet3 = $this->crud->save('jou_details',$joudet3);
						}
						if($this->input->post('prc_ppn')!='0')
						{
							$joudet4 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$ppn,
									'joudet_debit'=>$this->input->post('prc_ppn'),
									'joudet_credit'=>0,
									);
							$insjoudet4 = $this->crud->save('jou_details',$joudet4);
						}
						if($this->input->post('prc_cost')!='0')
						{
							$joudet5 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$cost,
									'joudet_debit'=>$this->input->post('prc_cost'),
									'joudet_credit'=>0,
									);
							$insjoudet5 = $this->crud->save('jou_details',$joudet5);
						}
			    	}
	    		break;
	    		case '1':
	    			$hpp = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAMAIN;
			    	$dbt = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COASUB;
			    	$disc = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COADISC;
			    	$ppn = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COAPPN;
			    	$cost = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRC_COACOST;
	    			if($que->num_rows() > 0)
			    	{
			    		//Update Data Jurnal
			    		$jou = array(
				    			'branch_id'=>$brc,
								'user_id'=>$this->input->post('user_id'),
								'jou_reff'=>$prc_code,
								'jou_date'=>$this->input->post('prc_tgl'),
								'jou_info'=>$infos,
								'jou_sts'=>'1'
				    	);
				    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$get->JOU_ID));
				    	//Hapus Detail Jurnal
				    	$this->crud->delete_by_id('jou_details',array('jou_id'=>$get->JOU_ID));
				    	//Input Detail Kredit
				    	$joudet1 = array(
								'jou_id'=>$get->JOU_ID,
								'coa_id'=>$dbt,
								'joudet_debit'=>0,
								'joudet_credit'=>$this->input->post('prc_gtotal'),
								);
						$insjoudet1 = $this->crud->save('jou_details',$joudet1);
						//Input Detail Debet
						$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
			    	    $get2 = $que2->result();
			    	    foreach ($get2 as $dat)
			    	    {
			    	    	$joudet2 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$hpp,
									'joudet_debit'=>$dat->PRCDET_SUB,
									'joudet_credit'=>0,
									);
							$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    	    }
						if($this->input->post('prc_disc')!='0')
						{
							$joudet3 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$disc,
									'joudet_debit'=>$this->input->post('prc_disc'),
									'joudet_credit'=>0,
									);
							$insjoudet3 = $this->crud->save('jou_details',$joudet3);
						}
						if($this->input->post('prc_ppn')!='0')
						{
							$joudet4 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$ppn,
									'joudet_debit'=>$this->input->post('prc_ppn'),
									'joudet_credit'=>0,
									);
							$insjoudet4 = $this->crud->save('jou_details',$joudet4);
						}
						if($this->input->post('prc_cost')!='0')
						{
							$joudet5 = array(
									'jou_id'=>$get->JOU_ID,
									'coa_id'=>$cost,
									'joudet_debit'=>$this->input->post('prc_cost'),
									'joudet_credit'=>0,
									);
							$insjoudet5 = $this->crud->save('jou_details',$joudet5);
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
								'jou_reff'=>$prc_code,
								'jou_date'=>$this->input->post('prc_tgl'),
								'jou_info'=>$infos,
								'jou_sts'=>'1'
				    	);
				    	$update = $this->crud->update('account_journal',$jou,array('jou_id'=>$jouid));
				    	//Input Detail Kredit
				    	$joudet1 = array(
								'jou_id'=>$jouid,
								'coa_id'=>$dbt,
								'joudet_debit'=>0,
								'joudet_credit'=>$this->input->post('prc_gtotal'),
								);
						$insjoudet1 = $this->crud->save('jou_details',$joudet1);
						//Input Detail Debet
						$que2 = $this->db->get_where('prc_details',array('prc_id'=>$this->input->post('prc_id')));
			    	    $get2 = $que2->result();
			    	    foreach ($get2 as $dat)
			    	    {
			    	    	$joudet2 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$hpp,
									'joudet_debit'=>$dat->PRCDET_SUB,
									'joudet_credit'=>0,
									);
							$insjoudet2 = $this->crud->save('jou_details',$joudet2);
			    	    }
						if($this->input->post('prc_disc')!='0')
						{
							$joudet3 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$disc,
									'joudet_debit'=>$this->input->post('prc_disc'),
									'joudet_credit'=>0,
									);
							$insjoudet3 = $this->crud->save('jou_details',$joudet3);
						}
						if($this->input->post('prc_ppn')!='0')
						{
							$joudet4 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$ppn,
									'joudet_debit'=>$this->input->post('prc_ppn'),
									'joudet_credit'=>0,
									);
							$insjoudet4 = $this->crud->save('jou_details',$joudet4);
						}
						if($this->input->post('prc_cost')!='0')
						{
							$joudet5 = array(
									'jou_id'=>$jouid,
									'coa_id'=>$cost,
									'joudet_debit'=>$this->input->post('prc_cost'),
									'joudet_credit'=>0,
									);
							$insjoudet5 = $this->crud->save('jou_details',$joudet5);
						}
			    	}
	    		break;
	    	}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapproveprcsub()
		{
			$data = array(
	                'prc_sts' => '0'
	            );
	        $update = $this->crud->update('trx_procurement',$data,array('prc_id' => $this->input->post('prc_id')));
	        $this->logupd_prclgt_save($this->input->post('prc_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_prclgt_save($id,$user,$sts)
	    {
	    	$his = $this->logistik->getlog_prclgt($id);
	    	if ($his->HISPRC_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'prc_id' => $id,
						'hisprc_sts' => $sts.' by User '.$user,
						'hisprc_old' => $his->HISPRC_STS,
						'hisprc_new' => $sts.' By User '.$user,
						'hisprc_info' => 'Original Save by Pembelian Logistik form',
						'hisprc_date' => date('Y-m-d'),
						'hisprc_time' => date('H:i:s'),
						'hisprc_upcount' => $his->HISPRC_UPCOUNT+1
					);
				$this->db->insert('his_prc',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'prc_id' => $id,
						'hisprc_sts' => $sts.' by User '.$user,
						'hisprc_old' => $his->HISPRC_STS,
						'hisprc_new' => $sts.' By User '.$user,
						'hisprc_info' => 'Update by '.$user.' from Pembelian Logistik form',
						'hisprc_date' => date('Y-m-d'),
						'hisprc_time' => date('H:i:s'),
						'hisprc_upcount' => $his->HISPRC_UPCOUNT
					);
				$this->db->insert('his_prc',$data);
	    	}
	    }

		public function ajax_add_brgretprc()
	    {
	      	$this->_validate_ret();
	      	$table = 'retprc_details';
	        $data = array(
	                'rtprc_id' => $this->input->post('ret_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'retprcdet_qty' => $this->input->post('ret_qty'),
	                'retprcdet_sub' => $this->input->post('ret_sub')
	            );
	        $insert = $this->crud->save($table,$data);
	        $getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $this->input->post('gd_id')));
	        $stock = $getinv->GD_STOCK;
	        $add = $this->input->post('ret_qty');
	        $up = $stock - $add; 
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $this->input->post('gd_id')));
	        echo json_encode(array("status" => TRUE));	        
	    }

	    public function ajax_del_brgretprc($id)
	    {
	    	$getprc = $this->crud->get_by_id('retprc_details',array('retprcdet_id' => $id));
	    	$gdid = $getprc->GD_ID;
	    	$add =  $getprc->RETPRCDET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock + $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('retprc_details',array('retprcdet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanretprc()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'prc_id' => $this->input->post('prc_id'),	                
	                'rtprc_sts' => '1',
	                'rtprc_date' => $this->input->post('retprc_tgl'),
	                'rtprc_term' => $this->input->post('po_term'),
	                'rtprc_info' => $this->input->post('po_info'),
	                'rtprc_sub' => $this->input->post('po_subs'),
	                'rtprc_disc' => $this->input->post('prc_disc'),
	                'rtprc_ppn' => $this->input->post('prc_ppn'),
	                'rtprc_cost' => $this->input->post('prc_cost'),
	                'rtprc_gtotal' => $this->input->post('prc_gtotal')	                
	            );
	        $update = $this->crud->update('procurement_ret',$data,array('rtprc_id' => $this->input->post('ret_id')));
	        $this->logupd_rtprclgt_save($this->input->post('ret_id'),$this->input->post('user_name'));
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_rtprclgt_save($id,$user)
	    {
	    	$his = $this->logistik->getlog_rtprclgt($id);
	    	if ($his->HISRTPRC_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'rtprc_id' => $id,
						'hisrtprc_sts' => 'Posted by User '.$user,
						'hisrtprc_old' => $his->HISRTPRC_STS,
						'hisrtprc_new' => 'Posted By User '.$user,
						'hisrtprc_info' => 'Original Save by Retur Pembelian Logistik form',
						'hisrtprc_date' => date('Y-m-d'),
						'hisrtprc_upcount' => $his->HISRTPRC_UPCOUNT+1
					);
				$this->db->insert('his_retprc',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'rtprc_id' => $id,
						'hisrtprc_sts' => 'Posted by User '.$user,
						'hisrtprc_old' => $his->HISRTPRC_STS,
						'hisrtprc_new' => 'Posted By User '.$user,
						'hisrtprc_info' => 'Update by '.$user.' from Retur Pembelian Logistik form',
						'hisrtprc_date' => date('Y-m-d'),
						'hisrtprc_upcount' => $his->HISRTPRC_UPCOUNT
					);
				$this->db->insert('his_retprc',$data);
	    	}
	    }

		public function ajax_add_brgusg()
	    {
	      	$this->_validate_usg();
	      	$price = $this->input->post('gd_price');
	      	$usg = $this->input->post('gd_usg');
	      	$sub = $price * $usg;
	      	$table = 'usage_details';
	        $data = array(
	                'usg_id' => $this->input->post('usg_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'usgdet_qty' => $this->input->post('gd_usg'),
	                'usgdet_sub' => $sub
	            );
	        $insert = $this->crud->save($table,$data);
	        $getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $this->input->post('gd_id')));
	        $stock = $getinv->GD_STOCK;
	        $add = $this->input->post('gd_usg');
	        $up = $stock - $add; 
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $this->input->post('gd_id')));
	        echo json_encode(array("status" => TRUE,"price"=>$price, "usg"=>$usg, "sub"=>$sub));
	    }

	    public function ajax_del_brgusg($id)
	    {
	    	$getusg = $this->crud->get_by_id('usage_details',array('usgdet_id' => $id));
	    	$gdid = $getusg->GD_ID;
	    	$add =  $getusg->USGDET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock + $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('usage_details',array('usgdet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanusg()
		{
			$appr = $this->input->post('appr_id');
			if($appr == '')
			{
				$appr = NULL;
			}
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'loc_id' => $this->input->post('loc_id'),
	                'appr_id' => $appr,	                
	                'usg_date' => $this->input->post('usg_tgl'),
	                'usg_sts' => '1',
	                'usg_info' => $this->input->post('usg_info')
	            );
	        $update = $this->crud->update('trx_usage',$data,array('usg_id' => $this->input->post('usg_id')));
	        $this->logupd_usglgt_save($this->input->post('usg_id'),$this->input->post('user_name'));
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_usglgt_save($id,$user)
	    {
	    	$his = $this->logistik->getlog_usglgt($id);
	    	if ($his->HISUSG_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'usg_id' => $id,
						'hisusg_sts' => 'Posted by User '.$user,
						'hisusg_old' => $his->HISUSG_STS,
						'hisusg_new' => 'Posted By User '.$user,
						'hisusg_info' => 'Original Save by Pemakaian Logistik form',
						'hisusg_date' => date('Y-m-d'),
						'hisusg_upcount' => $his->HISUSG_UPCOUNT+1
					);
				$this->db->insert('his_usg',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'usg_id' => $id,
						'hisusg_sts' => 'Posted by User '.$user,
						'hisusg_old' => $his->HISUSG_STS,
						'hisusg_new' => 'Posted By User '.$user,
						'hisusg_info' => 'Update by '.$user.' from Pemakaian Logistik form',
						'hisusg_date' => date('Y-m-d'),
						'hisusg_upcount' => $his->HISUSG_UPCOUNT
					);
				$this->db->insert('his_usg',$data);
	    	}
	    }

		public function ajax_add_brgrtusg()
	    {
	      	$this->_validate_rtusg();
	      	$table = 'retusg_details';
	        $data = array(
	                'rtusg_id' => $this->input->post('rtusg_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'retusgdet_qty' => $this->input->post('gd_usg')	                
	            );
	        $insert = $this->crud->save($table,$data);
	        $getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $this->input->post('gd_id')));
	        $stock = $getinv->GD_STOCK;
	        $add = $this->input->post('gd_usg');
	        $up = $stock + $add; 
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $this->input->post('gd_id')));
	        echo json_encode(array("status" => TRUE));	        
	    }

	    public function ajax_del_brgrtusg($id)
	    {
	    	$getusg = $this->crud->get_by_id('retusg_details',array('retusgdet_id' => $id));
	    	$gdid = $getusg->GD_ID;
	    	$add =  $getusg->RETUSGDET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock - $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('retusg_details',array('retusgdet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

		public function ajax_simpanrtusg()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'usg_id' => $this->input->post('usg_id'),               
	                'rtusg_date' => $this->input->post('retusg_tgl'),
	                'rtusg_sts' => '1',
	                'rtusg_info' => $this->input->post('rtusg_info')
	            );
	        $update = $this->crud->update('usage_ret',$data,array('rtusg_id' => $this->input->post('rtusg_id')));
	        $this->logupd_rtusglgt_save($this->input->post('rtusg_id'),$this->input->post('user_name'));
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_rtusglgt_save($id,$user)
	    {
	    	$his = $this->logistik->getlog_rtusglgt($id);
	    	if ($his->HISRTUSG_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'rtusg_id' => $id,
						'hisrtusg_sts' => 'Posted by User '.$user,
						'hisrtusg_old' => $his->HISRTUSG_STS,
						'hisrtusg_new' => 'Posted By User '.$user,
						'hisrtusg_info' => 'Original Save by Retur Pemakaian Logistik form',
						'hisrtusg_date' => date('Y-m-d'),
						'hisrtusg_upcount' => $his->HISRTUSG_UPCOUNT+1
					);
				$this->db->insert('his_retusg',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'rtusg_id' => $id,
						'hisrtusg_sts' => 'Posted by User '.$user,
						'hisrtusg_old' => $his->HISRTUSG_STS,
						'hisrtusg_new' => 'Posted By User '.$user,
						'hisrtusg_info' => 'Update by '.$user.' from Retur Pemakaian Logistik form',
						'hisrtusg_date' => date('Y-m-d'),
						'hisrtusg_upcount' => $his->HISRTUSG_UPCOUNT
					);
				$this->db->insert('his_retusg',$data);
	    	}
	    }

		public function ajax_simpan_adj()
		{
			$data = array(	                
	                'gd_id' => $this->input->post('gd_id'),              
	                'adj_date' => $this->input->post('adj_tgl'),
	                'adj_dtsts' => '1',
	                'adj_info' => $this->input->post('adj_info'),
	                'adj_oldqty' => $this->input->post('gd_stock'),
	                'adj_curqty' => $this->input->post('adj_curr'),
	                'adj_plus' => $this->input->post('adj_plus'),
	                'adj_minus' => $this->input->post('adj_minus'),
	                'adj_diff' => $this->input->post('adj_diff')
	            );
	        $update = $this->crud->update('trx_adjustment',$data,array('adj_id' => $this->input->post('adj_id')));
	        $data2 = array(
	        		'gd_stock' => $this->input->post('adj_curr')
	        	);
	        $update2 = $this->crud->update('master_goods',$data2,array('gd_id' => $this->input->post('gd_id'))); 
	        echo json_encode(array("status" => TRUE));
		}

		public function simpan_bapp()
		{
			$loc = ($this->input->post('loc_id') != '')?$this->input->post('loc_id'):NULL;
			$cust = ($this->input->post('cust_id') != '')?$this->input->post('cust_id'):NULL;
			$data = array(
	                'user_id' => $this->input->post('user_id'),
	                'loc_id' => $loc,
	                'cust_id' => $cust,
	                'balg_sts' => '2',
	                'balg_code' => $this->input->post('bapp_code'),
	                'balg_date' => $this->input->post('bapp_date'),
	                'balg_dealer' => $this->input->post('bapp_dealer'),
	                'balg_size' => $this->input->post('bapp_size'),
	                'balg_work' => $this->input->post('bapp_work'),
	                'balg_note' => $this->input->post('bapp_note'),
	                'balg_workdate' => $this->input->post('bapp_workdate'),
	                'balg_contractor' => $this->input->post('bapp_contr'),
	                'balg_logistic' => $this->input->post('bapp_log'),
	                'balg_prod' => $this->input->post('bapp_prod'),
	                'balg_printtype' => $this->input->post('bapp_print')
	            );
	        $update = $this->crud->update('trx_bapplog',$data,array('balg_id' => $this->input->post('bapp_id')));
	        $this->logupd_bapplgt_save($this->input->post('bapp_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function approve_bapp()
		{
			$loc = ($this->input->post('loc_id') != '')?$this->input->post('loc_id'):NULL;
			$cust = ($this->input->post('cust_id') != '')?$this->input->post('cust_id'):NULL;
			$data = array(
	                'balg_sts' => '1'
	            );
	        $update = $this->crud->update('trx_bapplog',$data,array('balg_id' => $this->input->post('bapp_id')));
	        $this->logupd_bapplgt_save($this->input->post('bapp_id'),$this->input->post('user_name'),'Approved');
	        echo json_encode(array("status" => TRUE));
		}

		public function disapprove_bapp()
		{
			$loc = ($this->input->post('loc_id') != '')?$this->input->post('loc_id'):NULL;
			$cust = ($this->input->post('cust_id') != '')?$this->input->post('cust_id'):NULL;
			$data = array(
	                'balg_sts' => '0'
	            );
	        $update = $this->crud->update('trx_bapplog',$data,array('balg_id' => $this->input->post('bapp_id')));
	        $this->logupd_bapplgt_save($this->input->post('bapp_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_bapplgt_save($id,$user,$sts)
	    {
	    	$his = $this->logistik->getlog_bapplgt($id);
	    	if ($his->HISBALG_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'balg_id' => $id,
						'hisbalg_sts' => $sts.' by User '.$user,
						'hisbalg_old' => $his->HISBALG_STS,
						'hisbalg_new' => $sts.' By User '.$user,
						'hisbalg_info' => 'Original Save by BAPP Logistik form',
						'hisbalg_date' => date('Y-m-d'),
						'hisbalg_time' => date('H:i:s'),
						'hisbalg_upcount' => $his->HISBALG_UPCOUNT+1
					);
				$this->db->insert('his_bapplog',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'balg_id' => $id,
						'hisbalg_sts' => $sts.' by User '.$user,
						'hisbalg_old' => $his->HISBALG_STS,
						'hisbalg_new' => $sts.' By User '.$user,
						'hisbalg_info' => 'Update by '.$user.' from BAPP Logistik form',
						'hisbalg_date' => date('Y-m-d'),
						'hisbalg_time' => date('H:i:s'),
						'hisbalg_upcount' => $his->HISBALG_UPCOUNT
					);
				$this->db->insert('his_bapplog',$data);
	    	}
	    }

	    //Ajax Get Data
		public function ajax_pick_po($id)
		{
			$data = $this->crud->get_by_id('trx_po',array('po_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_podet($id)
		{
			$data = $this->crud->get_by_id3('po_details','master_goods','trx_po',array('po_details.po_id' => $id),'master_goods.gd_id = po_details.gd_id','trx_po.po_id = po_details.po_id');
        	echo json_encode($data);
		}

		public function ajax_pick_appr($id)
		{
			$data = $this->crud->get_by_id2('trx_approvalbill','master_location',array('appr_id' => $id),'master_location.loc_id = trx_approvalbill.loc_id');
        	echo json_encode($data);
		}

		public function ajax_pick_apprfull($id)
		{
			$data = $this->db->join('master_location b','b.loc_id = a.loc_id')->join('master_customer c','c.cust_id = a.cust_id')->get_where('trx_approvalbill a',array('a.appr_id'=>$id))->row();
        	echo json_encode($data);
		}

		public function ajax_pick_supp($id)
		{
			$data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_brg($id)
		{
			$data = $this->crud->get_by_id('master_goods',array('gd_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_curr($id)
		{
			$data = $this->crud->get_by_id('master_currency',array('curr_id' => $id));
        	echo json_encode($data);
		}		

		public function ajax_pick_podet2($id)
		{
			$data = $this->crud->get_by_id3('po_details','master_goods','trx_po',array('po_details.podet_id' => $id),'master_goods.gd_id = po_details.gd_id','trx_po.po_id = po_details.po_id');
        	echo json_encode($data);
		}

	    public function ajax_del_brg($id)
	    {
	    	$this->crud->delete_by_id('po_details',array('podet_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_sub($id)
	    {
	    	$data = $this->crud->sub_po($id);
        	echo json_encode($data);
	    }

	    public function ajax_subbl($id)
	    {
	    	$data = $this->crud->sub_bl($id);
        	echo json_encode($data);
	    }

		public function ajax_pick_prc($id)
		{
			$data = $this->crud->get_by_id2('trx_procurement','trx_po',array('prc_id' => $id),'trx_po.po_id = trx_procurement.po_id');
        	echo json_encode($data);
		}

		public function ajax_pick_prcfull($id)
		{
			$data = $this->db->join('trx_po b','b.po_id = a.po_id')->join('master_location c','c.loc_id = b.loc_id')->get_where('trx_procurement a')->row();
        	echo json_encode($data);
		}

		public function ajax_pick_prcdet($id)
		{
			$data = $this->crud->get_by_id3('prc_details','master_goods','trx_procurement',array('prc_details.prc_id' => $id),'master_goods.gd_id = prc_details.gd_id','trx_procurement.prc_id = prc_details.prc_id');
        	echo json_encode($data);
		}

		public function ajax_pick_prcdetfull($id)
		{
			$data = $this->db->join('trx_procurement b','b.prc_id = a.prc_id')->join('master_goods c','c.gd_id = a.gd_id')->join('trx_po d','d.po_id = b.po_id')->join('master_location e','e.loc_id = d.loc_id')->get_where('prc_details a')->result();
        	echo json_encode($data);
		}

		public function ajax_pick_prc2($id)
		{
			$data = $this->crud->get_by_id('trx_procurement',array('prc_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_prcdet2($id)
		{
			$data = $this->crud->get_by_id3('prc_details','master_goods','trx_procurement',array('prc_details.prcdet_id' => $id),'master_goods.gd_id = prc_details.gd_id','trx_procurement.prc_id = prc_details.prc_id');
        	echo json_encode($data);
		}

		public function ajax_subretbl($id)
	    {
	    	$data = $this->crud->sub_retbl($id);
        	echo json_encode($data);
	    }

		public function ajax_pick_retprc($id)
		{
			$data = $this->crud->get_by_id2('procurement_ret','trx_procurement',array('rtprc_id' => $id),'trx_procurement.prc_id = procurement_ret.prc_id');
        	echo json_encode($data);
		}

		public function ajax_pick_retprcdet($id)
		{
			$data = $this->crud->get_by_id3('retprc_details','master_goods','procurement_ret',array('retprc_details.rtprc_id' => $id),'master_goods.gd_id = retprc_details.gd_id','procurement_ret.rtprc_id = retprc_details.rtprc_id');
        	echo json_encode($data);
		}

		public function ajax_pick_usage($id)
		{
			$this->db->from('trx_usage a');
			$this->db->join('trx_approvalbill b','b.appr_id = a.appr_id','left');
			$this->db->join('master_location c','c.loc_id = a.loc_id');
			$this->db->where('a.usg_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
		}

		public function ajax_pick_usgdet($id)
		{
			$this->db->from('usage_details a');
			$this->db->join('trx_usage b','b.usg_id = a.usg_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');			
			$this->db->where('a.usg_id',$id);
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function ajax_pick_adj($id)
		{
			$this->db->from('trx_adjustment a');			
			$this->db->join('master_goods b','b.gd_id = a.gd_id');			
			$this->db->where('a.adj_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
		}

	    //Validation Code
	    public function _validate_po()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('po_qty') > $this->input->post('po_qty_old'))
	        {
	            $data['inputerror'][] = 'po_qty';
	            $data['error_string'][] = 'Jumlah Melebihi PO';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('po_qty') == '')
	        {
	            $data['inputerror'][] = 'po_qty';
	            $data['error_string'][] = 'Harus Diisi';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('po_qty') == '0')
	        {
	            $data['inputerror'][] = 'po_qty';
	            $data['error_string'][] = 'Jumlah Minimum 1';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_ret()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('ret_qty') > $this->input->post('ret_qty_old'))
	        {
	            $data['inputerror'][] = 'ret_qty';
	            $data['error_string'][] = 'Jumlah Melebihi Pembelian';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('ret_qty') == '')
	        {
	            $data['inputerror'][] = 'ret_qty';
	            $data['error_string'][] = 'Harus Diisi';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('ret_qty') == '0')
	        {
	            $data['inputerror'][] = 'ret_qty';
	            $data['error_string'][] = 'Jumlah Minimum 1';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_usg()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('gd_usg') > $this->input->post('gd_stock'))
	        {
	            $data['inputerror'][] = 'gd_usg';
	            $data['error_string'][] = 'Jumlah Melebihi Stock';
	            $data['rt1'] = $this->input->post('gd_stock');
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('gd_usg') == '')
	        {
	            $data['inputerror'][] = 'gd_usg';
	            $data['error_string'][] = 'Harus Diisi';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('gd_usg') == '0')
	        {
	            $data['inputerror'][] = 'gd_usg';
	            $data['error_string'][] = 'Jumlah Minimum 1';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_rtusg()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;

	        if($this->input->post('gd_usg') == '')
	        {
	            $data['inputerror'][] = 'gd_usg';
	            $data['error_string'][] = 'Harus Diisi';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('gd_usg') == '0')
	        {
	            $data['inputerror'][] = 'gd_usg';
	            $data['error_string'][] = 'Jumlah Minimum 1';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //image configuration
	    public function img_conf($name,$path)
		{
			$nmfile='img_'.time().'_'.$name;
			$config['upload_path']='./assets/img/'.$path.'/';
			$config['allowed_types']='jpg|jpeg';
			$config['max_size']='1024';
			$config['file_name']=$nmfile;
			$this->upload->initialize($config);
		}

		public function img_resize($name,$path)
		{
			$config['source_image']='./assets/img/'.$path.'/'.$name;
			$config['new_image']='./assets/img/'.$path.'/thumbs/'.$name;
			$config['maintain_ratio']=TRUE;
			$config['width']=800;
			$config['height']=450;
			$this->image_lib->initialize($config);
			if(!$this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}
		}

	    public function upload_bapp()
		{
			if (!empty($_FILES)) 
			{
				$name = $this->input->post('bapp_code');
				$id = $this->input->post('bapp_id');
				$path = 'bapplog';
				$this->img_conf($name,$path);
				if ($this->upload->do_upload('file'))
				{
					$fileData = $this->upload->data();
					$imgname = $fileData['file_name'];
					$imgpath = './assets/img/'.$path.'/'.$imgname;
					$thumbs = './assets/img/'.$path.'/thumbs/'.$imgname;

					$this->img_resize($imgname,$path);

					$table = 'bapplog_details';
			        $data = array(
			                'balg_id' => $id,
			                'detbalg_imgname' => $imgname,
			                'detbalg_imgpath' => $imgpath,
			                'detbalg_thumbs' => $thumbs
			            );
			        $insert = $this->crud->save($table,$data);
				}
			}
		}

		//get image
		public function temp_gallery($id)
		{
			$list = $this->db->where('balg_id',$id)->get('bapplog_details')->result();
			echo json_encode($list);
		}

		public function getimgbapp($id)
		{
			$data = $this->crud->get_by_id('bapplog_details',array('detbalg_id' => $id));
        	echo json_encode($data);
		}

		public function bapp_delimg($id)
	    {
	    	$get = $this->crud->get_by_id('bapplog_details',array('detbalg_id' => $id));
	    	$imgpath = $get->DETBALG_IMGPATH;
	    	$imgthumbs = $get->DETBALG_THUMBS;
	    	@unlink($imgpath);
	    	@unlink($imgthumbs);
	    	$this->crud->delete_by_id('bapplog_details',array('detbalg_id' => $id));
        	echo json_encode(array("status" => TRUE,"img" => $imgpath, "thumbs" => $imgthumbs));
	    }

	    public function get_imgsum($id)
	    {
	    	$this->db->select('count(a.detbalg_id) as sum');
	    	$this->db->from('bapplog_details a');
	    	$this->db->join('trx_bapplog b','b.balg_id = a.balg_id');
	    	$this->db->where('a.balg_id',$id);
	    	$que = $this->db->get();
	    	$data = $que->row();
	    	echo json_encode($data);
	    }
	}
?>