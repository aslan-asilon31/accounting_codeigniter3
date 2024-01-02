<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Genaff extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('CRUD/M_genaff','genaff');
			$this->load->model('datatables/Dt_pogadet','gdpo');
			$this->load->model('datatables/Dt_srchgd','srch_gd');
			$this->load->model('datatables/Dt_srchgdusg','srch_gdusg');
			$this->load->model('datatables/Dt_srchsupp','srch_supp');
			$this->load->model('datatables/Dt_srchappr','srch_appr');
			$this->load->model('datatables/Dt_srchcurr','srch_curr');
			$this->load->model('datatables/search/Dt_srchpo_ga','srch_po');
			$this->load->model('datatables/search/Dt_srchprc_ga','srch_prc');
			$this->load->model('datatables/Dt_srchretprc','srch_retprc');
			$this->load->model('datatables/Dt_srchusage_ga','srch_usage');
			$this->load->model('datatables/Dt_prcgadet','gdprc');
			$this->load->model('datatables/Dt_usggadet','gdusg');
			$this->load->model('datatables/Dt_usggartdet','gdrtusg');
			$this->load->model('datatables/Dt_retprcgadet','gdretprc');
			$this->load->model('datatables/Dt_lap_po_ga','lap_po');
			$this->load->model('datatables/Dt_lap_prc_ga','lap_prc');
			$this->load->model('datatables/Dt_lap_retprc_ga','lap_retprc');
		}

		//menu link
		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='dash_ga';
			$data['isi']='menu/administrator/ga/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lap_po()
	    {
	    	$this->authsys->trx_check_($_SESSION['user_id'],'GA');
	    	$data['title']='Match Terpadu - Laporan PO GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/report_po';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function lap_pembelian()
	    {
	    	$this->authsys->trx_check_($_SESSION['user_id'],'GA');
	    	$data['title']='Match Terpadu - Laporan Pembelian GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/report_prc';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function lap_pemakaian()
	    {
	    	$this->authsys->trx_check_($_SESSION['user_id'],'GA');
	    	$data['title']='Match Terpadu - Laporan Pembelian GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/report_usg';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_po_ga()
		{
			$gen = $this->gen->gen_numpoga();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['poga_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_bl_ga()
		{
			$gen = $this->gen->gen_numblga();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['prcga_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_ret_ga()
		{
			$gen = $this->gen->gen_numretga();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['rtprc_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_usage_ga()
		{
			$gen = $this->gen->gen_numusagega();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['usgga_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_adj_ga()
		{
			$gen = $this->gen->gen_num_adjga();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['adjga_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ga_trx_po()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			// $id=$this->crud->add_po();
			// $data['po'] = $this->crud->get_by_id('trx_po',array('po_id' => $id));
			$data['title']='Match Terpadu - PO GA';
			$data['menu']='ga';
			$data['menulist']='po_ga';
			$data['isi']='menu/administrator/ga/ga_trx_po';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ga_trx_prc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			// $id=$this->crud->add_bl();
			// $data['prc'] = $this->crud->get_by_id('trx_procurement',array('prc_id' => $id));
			$data['title']='Match Terpadu - Pembelian GA';
			$data['menu']='ga';
			$data['menulist']='prc_ga';
			$data['isi']='menu/administrator/ga/ga_trx_prc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ga_trx_retprc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$id=$this->crud->add_rb();
			$data['rb'] = $this->crud->get_by_id('procurement_ret',array('rtprc_id' => $id));
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='retprc_ga';
			$data['isi']='menu/administrator/ga/ga_trx_retprc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ga_trx_usage()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			// $id=$this->crud->add_usg();
			// // $id = '1';
			// $data['usg'] = $this->crud->get_by_id('trx_usage',array('usg_id' => $id));
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='usage_ga';
			$data['isi']='menu/administrator/ga/ga_trx_usage';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ga_trx_retusage()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			// $id=$this->crud->add_retusg();
			// $id = '1';
			// $data['usg'] = $this->crud->get_by_id('usage_ret',array('rtusg_id' => $id));
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='retusg_ga';
			$data['isi']='menu/administrator/ga/ga_trx_retusg';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_retusage_ga()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$gen = $this->gen->gen_num_retusagega();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['rtusgga_code'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ga_trx_adjust()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			// $id=$this->crud->add_adj();
			// // $id = '1';
			// $data['adj'] = $this->crud->get_by_id('trx_adjustment',array('adj_id' => $id));
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='adjust_ga';
			$data['isi']='menu/administrator/ga/ga_trx_adjust';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_po()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/lgt_print_po';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_po($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/po_print_new',$data);
		}

		public function print_prc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/lgt_print_prc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_prc($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/prc_print_new',$data);
		}

		public function print_retprc()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$data['isi']='menu/administrator/ga/lgt_print_retprc';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pageprint_retprc($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/retprc_print',$data);
		}

		public function pageprint_usgga($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/usg_print',$data);
		}

		public function pageprint_adjga($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'GA');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/adj_print',$data);
		}

		//Ajax Search
		public function ajax_srch_po()
		{
			$list = $this->srch_po->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->POGA_CODE;
				// $row[] = $dat->APPR_CODE;
				$row[] = $dat->SUPP_NAME;
				$row[] = $dat->POGA_ORDNUM;				
				$row[] = $dat->POGA_DATE;				
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->POGA_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_po->count_all(),
							"recordsFiltered" => $this->srch_po->count_filtered(),
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
				$row[] = $dat->PRCGA_CODE;
				$row[] = $dat->POGA_CODE;
				$row[] = $dat->PRCGA_INV;				
				$row[] = $dat->PRCGA_DATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prc('."'".$dat->PRCGA_ID."'".')">Pilih</a>';
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

		public function ajax_srch_usg()
		{
			$list = $this->srch_usage->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USGGA_CODE;
				$row[] = $dat->USGGA_DATE;
				$row[] = $dat->USGGA_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usage('."'".$dat->USGGA_ID."'".')">Pilih</a>';
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

		public function ajax_filter_po()
		{

			$list = $this->lap_po->get_datatables();
			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->POGA_CODE;
				// $row[] = $dat->APPR_CODE;
				$row[] = $dat->SUPP_NAME;
				$row[] = $dat->POGA_ORDNUM;				
				$row[] = $dat->POGA_DATE;				
				$row[] = '<center><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-print"></span> Print</a></center>';
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
				$row[] = $dat->PRCGA_CODE;
				$row[] = $dat->POGA_CODE;
				// $row[] = $dat->APPR_CODE;
				// $row[] = $dat->CUST_NAME;
				// $row[] = $dat->PO_CODE;
				// $row[] = $dat->APPR_CODE;
				// $row[] = $dat->CUST_NAME;
				$row[] = $dat->PRCGA_DATE;				
				$row[] = '<center><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-print"></span> Print</a></center>';
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

		public function ajax_filter_retprc()
		{

			$list = $this->lap_retprc->get_datatables();
			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->RTPRCGA_CODE;
				$row[] = $dat->PRCGA_CODE;
				// $row[] = $dat->APPR_CODE;
				// $row[] = $dat->CUST_NAME;
				// $row[] = $dat->PO_CODE;
				// $row[] = $dat->APPR_CODE;
				// $row[] = $dat->CUST_NAME;
				$row[] = $dat->RTPRCGA_DATE;				
				$row[] = '<center><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_po('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-print"></span> Print</a></center>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->lap_retprc->count_all(),
							"recordsFiltered" => $this->lap_retprc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Ajax CRUD
		public function ajax_simpanpo()
		{
			$data = array(	                
		            'user_id' => $this->input->post('user_id'),
		            'curr_id' => $this->input->post('curr_id'),
		            'supp_id' => $this->input->post('supp_id'),
		            'poga_sts' => '2',
		            'poga_code' => $this->input->post('po_code'),
		            'poga_date' => $this->input->post('po_tgl'),
		            'poga_ordnum' => $this->input->post('po_so'),
		            'poga_term' => $this->input->post('po_term'),
		            'poga_info' => $this->input->post('po_info'),
		            'poga_sub' => $this->input->post('po_subs'),
		            'poga_gtotal' => $this->input->post('po_subs')
	            );
	        $update = $this->crud->update('trx_po_ga',$data,array('poga_id' => $this->input->post('po_id')));
	        $this->logupd_poga_save($this->input->post('po_id'),$this->input->post('user_name'));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approvepo()
		{
			$data = array(
	                'poga_sts' => '1'
	            );
	        $update = $this->crud->update('trx_po_ga',$data,array('poga_id' => $this->input->post('po_id')));
	        $this->logupd_poga_save($this->input->post('po_id'),$this->input->post('user_name'),'Approved');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprovepo()
		{
			$data = array(
	                'poga_sts' => '0'
	            );
	        $update = $this->crud->update('trx_po_ga',$data,array('poga_id' => $this->input->post('po_id')));
	        $this->logupd_poga_save($this->input->post('po_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_poga_save($id,$user)
	    {
	    	$his = $this->genaff->getlog_poga($id);
	    	if ($his->HISPOGA_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'poga_id' => $id,
						'hispoga_sts' => 'Posted by User '.$user,
						'hispoga_old' => $his->HISPOGA_STS,
						'hispoga_new' => 'Posted By User '.$user,
						'hispoga_info' => 'Original Save by PO GA form',
						'hispoga_date' => date('Y-m-d'),
						'hispoga_time' => date('H:i:s'),
						'hispoga_upcount' => $his->HISPOGA_UPCOUNT+1
					);
				$this->db->insert('his_poga',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'poga_id' => $id,
						'hispoga_sts' => 'Posted by User '.$user,
						'hispoga_old' => $his->HISPOGA_STS,
						'hispoga_new' => 'Posted By User '.$user,
						'hispoga_info' => 'Update by '.$user.' from PO GA form',
						'hispoga_date' => date('Y-m-d'),
						'hispoga_time' => date('H:i:s'),
						'hispoga_upcount' => $his->HISPOGA_UPCOUNT
					);
				$this->db->insert('his_poga',$data);
	    	}
	    }

		public function ajax_del_brgpo($id)
	    {
	    	$this->crud->delete_by_id('poga_details',array('pgdet_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

		public function ajax_simpanprc()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'poga_id' => $this->input->post('po_id'),	                
	                'prcga_sts' => '2',
	                'prcga_code' => $this->input->post('prc_code'),
	                'prcga_date' => $this->input->post('prc_tgl'),
	                'prcga_inv' => $this->input->post('prc_inv'),	                
	                'prcga_info' => $this->input->post('po_info'),
	                'prcga_sub' => $this->input->post('po_subs'),
	                'prcga_disc' => $this->input->post('prc_disc'),
	                'prcga_ppn' => $this->input->post('prc_ppn'),
	                'prcga_cost' => $this->input->post('prc_cost'),
	                'prcga_gtotal' => $this->input->post('prc_gtotal')	                
	            );
	        $update = $this->crud->update('trx_prc_ga',$data,array('prcga_id' => $this->input->post('prc_id')));
	        $this->logupd_prcga_save($this->input->post('prc_id'),$this->input->post('user_name'),'Posted');
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approveprc()
		{
			$data = array(
	                'prcga_sts' => '1'
	            );
	        $update = $this->crud->update('trx_prc_ga',$data,array('prcga_id'=>$this->input->post('prc_id')));
	        $this->logupd_prcga_save($this->input->post('prc_id'),$this->input->post('user_name'),'Approved');
	        //cek jurnal
	    	$prc_code = $this->input->post('prc_code');
	    	$brc = $this->input->post('user_branch');
	    	$que = $this->db->get_where('account_journal',array('jou_reff'=>$prc_code,'branch_id'=>$brc));
	    	$get = $que->row();
	    	$hppnom = ($this->input->post('prc_gtotal')-($this->input->post('prc_disc')+$this->input->post('prc_ppn')+$this->input->post('prc_cost')));
	    	$hpp = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRCGA_COASUPPLY;
	    	$dbt = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRCGA_COADEBT;
	    	$disc = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRCGA_COADISC;
	    	$ppn = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRCGA_COAPPN;
	    	$cost = $this->db->get_where('other_settings',array('branch_id'=>$brc))->row()->PRCGA_COACOST;
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
				$que2 = $this->db->get_where('prcga_details',array('prcga_id'=>$this->input->post('prc_id')));
	    	    $get2 = $que2->result();
	    	    foreach ($get2 as $dat)
	    	    {
	    	    	$joudet2 = array(
							'jou_id'=>$get->JOU_ID,
							'coa_id'=>$hpp,
							'joudet_debit'=>$dat->PRCGADET_SUB,
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
				$que2 = $this->db->get_where('prcga_details',array('prcga_id'=>$this->input->post('prc_id')));
	    	    $get2 = $que2->result();
	    	    foreach ($get2 as $dat)
	    	    {
	    	    	$joudet2 = array(
							'jou_id'=>$jouid,
							'coa_id'=>$hpp,
							'joudet_debit'=>$dat->PRCGADET_SUB,
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
	                'prcga_sts' => '0'
	            );
	        $update = $this->crud->update('trx_prc_ga',$data,array('prcga_id' => $this->input->post('prc_id')));
	        $this->logupd_prcga_save($this->input->post('prc_id'),$this->input->post('user_name'),'Disapproved');
	        echo json_encode(array("status" => TRUE));
		}

		public function logupd_prcga_save($id,$user)
	    {
	    	$his = $this->genaff->getlog_prcga($id);
	    	if ($his->HISPRCGA_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'prcga_id' => $id,
						'hisprcga_sts' => 'Posted by User '.$user,
						'hisprcga_old' => $his->HISPRCGA_STS,
						'hisprcga_new' => 'Posted By User '.$user,
						'hisprcga_info' => 'Original Save by Pembelian GA form',
						'hisprcga_date' => date('Y-m-d'),
						'hisprcga_time' => date('H:i:s'),
						'hisprcga_upcount' => $his->HISPRCGA_UPCOUNT+1
					);
				$this->db->insert('his_prcga',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'prcga_id' => $id,
						'hisprcga_sts' => 'Posted by User '.$user,
						'hisprcga_old' => $his->HISPRCGA_STS,
						'hisprcga_new' => 'Posted By User '.$user,
						'hisprcga_info' => 'Update by '.$user.' from Pembelian GA form',
						'hisprcga_date' => date('Y-m-d'),
						'hisprcga_time' => date('H:i:s'),
						'hisprcga_upcount' => $his->HISPRCGA_UPCOUNT
					);
				$this->db->insert('his_prcga',$data);
	    	}
	    }

		public function ajax_simpan_adj()
		{
			$data = array(	                
	                'gd_id' => $this->input->post('gd_id'),
	                'user_id' => $this->input->post('user_id'),
	                'adjga_date' => $this->input->post('adj_tgl'),
	                'adjga_dtsts' => '1',
	                'adjga_info' => $this->input->post('adj_info'),
	                'adjga_oldqty' => $this->input->post('gd_stock'),
	                'adjga_curqty' => $this->input->post('adj_curr'),
	                'adjga_plus' => $this->input->post('adj_plus'),
	                'adjga_minus' => $this->input->post('adj_minus'),
	                'adjga_diff' => $this->input->post('adj_diff')
	            );
	        $update = $this->crud->update('trx_adj_ga',$data,array('adjga_id' => $this->input->post('adj_id')));
	        $data2 = array(
	        		'gd_stock' => $this->input->post('adj_curr')
	        	);
	        $update2 = $this->crud->update('master_goods',$data2,array('gd_id' => $this->input->post('gd_id'))); 
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_add_brg()
	    {
	      	$table = 'poga_details';
	        $data = array(
	                'poga_id' => $this->input->post('po_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'pgdet_qtyunit' => $this->input->post('po_qty'),
	                'pgdet_sub' => $this->input->post('po_sub')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_add_brgretprc()
	    {
	      	$this->_validate_ret();
	      	$table = 'retprcga_details';
	        $data = array(
	                'rtprcga_id' => $this->input->post('ret_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'rtprcgadet_qty' => $this->input->post('ret_qty'),
	                'rtprcgadet_sub' => $this->input->post('ret_sub')
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
				$row[] = $dat->RTPRCGADET_QTY;
				$row[] = $dat->RTPRCGADET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->RTPRCGADET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
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

		public function ajax_del_brgretprc($id)
	    {
	    	$getprc = $this->crud->get_by_id('retprcga_details',array('rtprcgadet_id' => $id));
	    	$gdid = $getprc->GD_ID;
	    	$add =  $getprc->RTPRCGADET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock + $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('retprcga_details',array('rtprcgadet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanretprc()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'curr_id' => $this->input->post('curr_id'),
	                'prcga_id' => $this->input->post('prc_id'),	                
	                'rtprcga_sts' => '1',
	                'rtprcga_date' => $this->input->post('retprc_tgl'),
	                'rtprcga_info' => $this->input->post('po_info'),
	                'rtprcga_sub' => $this->input->post('po_subs'),
	                'rtprcga_disc' => $this->input->post('prc_disc'),
	                'rtprcga_ppn' => $this->input->post('prc_ppn'),
	                'rtprcga_cost' => $this->input->post('prc_cost'),
	                'rtprcga_gtotal' => $this->input->post('prc_gtotal')	                
	            );
	        $update = $this->crud->update('prcga_ret',$data,array('rtprcga_id' => $this->input->post('ret_id')));
	        echo json_encode(array("status" => TRUE));
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
				$row[] = $dat->GD_MEASURE;				
				$row[] = $dat->GD_UNIT;				
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

		public function ajax_add_brgrtusg()
	    {
	      	$this->_validate_rtusg();
	      	$table = 'retusgga_details';
	        $data = array(
	                'rtusgga_id' => $this->input->post('rtusg_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'rtusggadet_qty' => $this->input->post('gd_usg')	                
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
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->RTUSGGADET_QTY;
				$row[] = $dat->GD_UNIT;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->RTUSGGADET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
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

		public function ajax_del_brgrtusg($id)
	    {
	    	$getusg = $this->crud->get_by_id('retusgga_details',array('rtusggadet_id' => $id));
	    	$gdid = $getusg->GD_ID;
	    	$add =  $getusg->RTUSGGADET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock - $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('retusgga_details',array('rtusggadet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanrtusg()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),
	                'usgga_id' => $this->input->post('usg_id'),               
	                'rtusgga_date' => $this->input->post('rtusg_tgl'),
	                'rtusgga_sts' => '1',
	                'rtusgga_info' => $this->input->post('rtusg_info')
	            );
	        $update = $this->crud->update('usage_ga_ret',$data,array('rtusgga_id' => $this->input->post('rtusg_id')));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_add_brgusg()
	    {
	      	$this->_validate_usg();
	      	$price = $this->input->post('gd_price');
	      	$usg = $this->input->post('gd_usg');
	      	$sub = $price * $usg;
	      	$table = 'usg_ga_details';
	        $data = array(
	                'usgga_id' => $this->input->post('usg_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'usggadet_qty' => $this->input->post('gd_usg'),
	                'usggadet_sub' => $sub
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
	        echo json_encode(array("status" => TRUE));	        
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
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->USGGADET_QTY;
				$row[] = $dat->GD_UNIT;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->USGGADET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
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

		public function ajax_del_brgusg($id)
	    {
	    	$getusg = $this->crud->get_by_id('usg_ga_details',array('usggadet_id' => $id));
	    	$gdid = $getusg->GD_ID;
	    	$add =  $getusg->USGGADET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock + $add;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('usg_ga_details',array('usggadet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
	    }

	    public function ajax_simpanusg()
		{
			$data = array(	                
	                'user_id' => $this->input->post('user_id'),            
	                'usgga_date' => $this->input->post('usg_tgl'),
	                'usgga_sts' => '1',
	                'usgga_info' => $this->input->post('usg_info')

	            );
	        $update = $this->crud->update('trx_usage_ga',$data,array('usgga_id' => $this->input->post('usg_id')));
	        echo json_encode(array("status" => TRUE));
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
				$row[] = $dat->PGDET_QTYUNIT;
				$row[] = $dat->PGDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->PGDET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
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

		public function ajax_dtprc_ga($id)
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
				$row[] = $dat->PRCGADET_QTY;
				$row[] = $dat->PRCGADET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_retprc('."'".$dat->PRCGADET_ID."'".')">Pilih</a>';
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

		public function ajax_subretgabl($id)
	    {
	    	$data = $this->crud->sub_retgabl($id);
        	echo json_encode($data);
	    }

		public function ajax_sub_ga($id)
	    {
	    	$data = $this->crud->sub_po_ga($id);
        	echo json_encode($data);
	    }

	    public function ajax_pick_po($id)
		{
			$data = $this->crud->get_by_id('trx_po_ga',array('poga_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_supp($id)
		{
			$data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_usage($id)
		{
			$data = $this->crud->get_by_id('trx_usage_ga',array('usgga_id' => $id));
			echo json_encode($data);
		}

		public function ajax_pick_usgdet($id)
		{
			$this->db->from('usg_ga_details a');
			$this->db->join('trx_usage_ga b','b.usgga_id = a.usgga_id');
			$this->db->join('master_goods c','c.gd_id = a.gd_id');			
			$this->db->where('a.usgga_id',$id);
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function ajax_pick_adj($id)
		{
			$this->db->from('trx_adj_ga a');			
			$this->db->join('master_goods b','b.gd_id = a.gd_id');			
			$this->db->where('a.adjga_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
		}

		public function ajax_pick_podet($id)
		{
			$data = $this->crud->get_by_id3('poga_details','master_goods','trx_po_ga',array('poga_details.poga_id' => $id),'master_goods.gd_id = poga_details.gd_id','trx_po_ga.poga_id = poga_details.poga_id');
        	echo json_encode($data);
		}

		public function ajax_pick_podet2($id)
		{
			$data = $this->crud->get_by_id3('poga_details','master_goods','trx_po_ga',array('poga_details.pgdet_id' => $id),'master_goods.gd_id = poga_details.gd_id','trx_po_ga.poga_id = poga_details.poga_id');
        	echo json_encode($data);
		}

		public function ajax_pick_prc2($id)
		{
			$data = $this->crud->get_by_id2('trx_prc_ga','trx_po_ga',array('prcga_id' => $id),'trx_po_ga.poga_id = trx_prc_ga.poga_id');
        	echo json_encode($data);
		}

		public function ajax_pick_prcdet2($id)
		{
			$data = $this->crud->get_by_id3('prcga_details a','master_goods b','trx_prc_ga c',array('a.prcga_id' => $id),'b.gd_id = a.gd_id','c.prcga_id = a.prcga_id');
        	echo json_encode($data);
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
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = $dat->PGDET_QTYUNIT;
				$row[] = $dat->PGDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_podet('."'".$dat->PGDET_ID."'".')">Pilih</a>';
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

		public function ajax_add_brgprc()
	    {
	      	$this->_validate_po();
	      	$table = 'prcga_details';
	        $data = array(
	                'prcga_id' => $this->input->post('prc_id'),
	                'gd_id' => $this->input->post('gd_id'),
	                'prcgadet_qty' => $this->input->post('po_qty'),
	                'prcgadet_sub' => $this->input->post('po_sub')
	            );
	        $insert = $this->crud->save($table,$data);
	        $getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $this->input->post('gd_id')));
	        $stock = $getinv->GD_STOCK;
	        $add = $this->input->post('po_qty');
	        $up = $stock + $add; 
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $this->input->post('gd_id')));
	        echo json_encode(array("status" => TRUE));	        
	    }

	    public function ajax_del_brgprc($id)
	    {
	    	$getprc = $this->crud->get_by_id('prcga_details',array('prcgadet_id' => $id));
	    	$gdid = $getprc->GD_ID;
	    	$substract =  $getprc->PRCGADET_QTY;
	    	$getinv = $this->crud->get_by_id('master_goods',array('gd_id' => $gdid));
	    	$stock = $getinv->GD_STOCK;
	        $up = $stock - $substract;
	        $data_up = array (
	        		'gd_stock' => $up
	        	);
	        $update = $this->crud->update('master_goods',$data_up,array('gd_id' => $gdid));
	    	$this->crud->delete_by_id('prcga_details',array('prcgadet_id' => $id));
        	echo json_encode(array("status" => TRUE));        	
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
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->PRCGADET_QTY;
				$row[] = 'Rp '.number_format($dat->PRCGADET_SUB);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_brg('."'".$dat->PRCGADET_ID."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
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

		public function ajax_subbl($id)
	    {
	    	$data = $this->crud->sub_bl_ga($id);
        	echo json_encode($data);
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

	    //Laporan
		public function print_rptpo()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['rpt_type'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/print_rptpo',$data);
		}

		public function gen_rptpo_t1($order)
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.poga_date >=', $this->input->post('date_start'));
        		$this->db->where('b.poga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('poga_details a');
			$this->db->join('trx_po_ga b','b.poga_id = a.poga_id');			
			$this->db->join('master_supplier c','c.supp_id = b.supp_id');
			$this->db->join('master_user d','d.user_id = b.user_id');
			$this->db->join('master_branch e','e.branch_id = d.branch_id');
			$this->db->join('master_goods f','f.gd_id = a.gd_id');
			$this->db->order_by($order);
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function print_rptprc()
		{
			$data['supp'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['rpt_type'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/print_rptprc',$data);
		}

		public function gen_rptprc_t1()
		{
			if ($this->input->post('suppid')) 
			{
				$this->db->like('c.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('e.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.prcga_date >=', $this->input->post('date_start'));
        		$this->db->where('b.prcga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('prcga_details a');
			$this->db->join('trx_prc_ga b','b.prcga_id = a.prcga_id');
			$this->db->join('trx_po_ga c','c.poga_id = b.poga_id');
			$this->db->join('master_supplier d','d.supp_id = c.supp_id');
			$this->db->join('master_user e','e.user_id = b.user_id');
			$this->db->join('master_branch f','f.branch_id = e.branch_id');
			$this->db->join('master_goods g','g.gd_id = a.gd_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('d.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prcga_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prcga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('trx_prc_ga a');			
			$this->db->join('trx_po_ga b','b.poga_id = a.poga_id');
			$this->db->join('master_supplier c','c.supp_id = b.supp_id');
			$this->db->join('master_user d','d.user_id = a.user_id');
			$this->db->join('master_branch e','e.branch_id = d.branch_id');
			$que = $this->db->get();
			$data['b'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptprc_t2()
		{
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('d.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prcga_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prcga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('trx_prc_ga a');			
			$this->db->join('trx_po_ga b','b.poga_id = a.poga_id');
			$this->db->join('master_supplier c','c.supp_id = b.supp_id');
			$this->db->join('master_user d','d.user_id = a.user_id');
			$this->db->join('master_branch e','e.branch_id = d.branch_id');			
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptprc_t2b($v)
		{
			if ($this->input->post('suppid')) 
			{
				$this->db->like('b.supp_id', $this->input->post('suppid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('d.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.prcga_date >=', $this->input->post('date_start'));
        		$this->db->where('a.prcga_date <=', $this->input->post('date_end'));  
			}
			$this->db->select($v.', sum(a.prcga_sub) as sub, sum(a.prcga_disc) disc, sum(a.prcga_ppn) as ppn, sum(a.prcga_cost) cost, sum(a.prcga_gtotal) as gt');
			$this->db->from('trx_prc_ga a');			
			$this->db->join('trx_po_ga b','b.poga_id = a.poga_id');
			$this->db->join('master_supplier c','c.supp_id = b.supp_id');
			$this->db->join('master_user d','d.user_id = a.user_id');
			$this->db->join('master_branch e','e.branch_id = d.branch_id');
			$this->db->group_by($v);		
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function print_rptusg()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['rpt_type'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Match Terpadu - Dashboard GA';
			$data['menu']='ga';
			$data['menulist']='report_ga';
			$this->load->view('menu/administrator/ga/print_rptusg',$data);
		}

		public function gen_rptusg_t1()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.usgga_date >=', $this->input->post('date_start'));
        		$this->db->where('b.usgga_date <=', $this->input->post('date_end'));  
			}
			$this->db->from('usg_ga_details a');
			$this->db->join('trx_usage_ga b','b.usgga_id = a.usgga_id');
			$this->db->join('master_user c','c.user_id = b.user_id');
			$this->db->join('master_branch d','d.branch_id = c.branch_id');
			$this->db->join('master_goods e','e.gd_id = a.gd_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptusg_t2()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->like('c.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.usgga_date >=', $this->input->post('date_start'));
        		$this->db->where('b.usgga_date <=', $this->input->post('date_end'));  
			}
			$this->db->select('b.usgga_code, b.usgga_date, b.usgga_info, sum(a.usggadet_sub) as sub');
			$this->db->from('usg_ga_details a');
			$this->db->join('trx_usage_ga b','b.usgga_id = a.usgga_id');
			$this->db->join('master_user c','c.user_id = b.user_id');
			$this->db->join('master_branch d','d.branch_id = c.branch_id');
			$this->db->join('master_goods e','e.gd_id = a.gd_id');
			$this->db->group_by('a.usgga_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function open_gapo($id)
		{
			$user = $this->input->post('user_name');
			$string = array();
			$prc = $this->genaff->check_po('trx_prc_ga',$id,'prcga_sts');
			if($prc > 0)
			{
				$string[] = 'Pembelian GA';
			}
			if(sizeof($string) > 0)
			{
				$data['status'] = FALSE;
				$data['string'] = implode(', ',$string);
			}
			else
			{
				$dt = array('poga_sts'=>'0');
				$update = $this->crud->update('trx_po_ga',$dt,array('poga_id' => $id));
				$his = $this->genaff->getlog_poga($id);
				$dthis = array(
						'poga_id' => $id,
						'hispoga_sts' => 'Open by User '.$user,
						'hispoga_old' => $his->HISPOGA_STS,
						'hispoga_new' => 'Open By User '.$user,
						'hispoga_info' => 'Open Record by PO GA form',
						'hispoga_date' => date('Y-m-d'),
						'hispoga_upcount' => $his->HISPOGA_UPCOUNT+1
					);
				$this->db->insert('his_poga',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function open_gaprc($id)
		{
			$user = $this->input->post('user_name');
			$get = $this->db->get_where('trx_prc_ga',array('prcga_id'=>$id));
			$code = $get->row()->PRCGA_CODE;
			$string = array();
			$retprc = $this->genaff->check_prc('prcga_ret',$id,'rtprcga_sts');
			if($retprc > 0)
			{
				$string[] = 'Retur Pembelian GA';
			}
			$bankout = $this->genaff->check_prc('bankout_det',array('bnkodet_reff'=>$code),null);
			if($bankout > 0)
			{
				$string[] = 'Bank Keluar';
			}
			$bankout = $this->genaff->check_prc('cashout_det',array('cshodet_reff'=>$code),null);
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
				$dt = array('prcga_sts'=>'0');
				$update = $this->crud->update('trx_prc_ga',$dt,array('prcga_id' => $id));
				$his = $this->genaff->getlog_prcga($id);
				$dthis = array(
						'prcga_id' => $id,
						'hisprcga_sts' => 'Open by User '.$user,
						'hisprcga_old' => $his->HISPRCGA_STS,
						'hisprcga_new' => 'Open By User '.$user,
						'hisprcga_info' => 'Open Record by Pembelian GA form',
						'hisprcga_date' => date('Y-m-d'),
						'hisprcga_upcount' => $his->HISPRCGA_UPCOUNT+1
					);
				$this->db->insert('his_prcga',$dthis);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}
	}
?>