<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Transaction extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//$this->load->model('frontend/M_dashboard','M_dash');
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('datatables/Dt_coa','srch_acc');
			$this->load->model('datatables/Dt_srchappr','srch_appr');
            $this->load->model('datatables/Dt_location','srch_loc');
            $this->load->model('datatables/search/Dt_srchbudget','srch_ra');
		}

		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu';
			$data['menu']='transact';
			$data['menulist']='dash_transact';
			$data['isi']='menu/administrator/transaction/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_budget()
		{
			$gen = $this->gen->gen_numbudg();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['bud_code'];
			// $data['id'] = '1';
			// $data['kode'] = 'RA/1712/000001';
			$data['status'] = TRUE;
			echo json_encode($data);
		}

        public function trn_trx_budget()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Anggaran';
			$data['menu']='transaction';
			$data['menulist']='budget';
			// $data['account'] = $this->crud->get_coa();
			// $data['customer'] = $this->crud->get_cst();
			// $data['mu'] = $this->crud->get_mu();
			$data['isi']='menu/administrator/transaction/trx_anggaran';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ajax_srch_acc()
		{
			$list = $this->srch_acc->get_datatables();
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
							"recordsTotal" => $this->srch_acc->count_all(),
							"recordsFiltered" => $this->srch_acc->count_filtered(),
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

		public function ajax_srch_loc()
		{
			$list = $this->srch_loc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->LOC_CODE;
				$row[] = $dat->LOC_NAME;	
				$row[] = $dat->LOC_ADDRESS;	
				$row[] = $dat->LOC_CITY;			
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_loc('."'".$dat->LOC_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_loc->count_all(),
							"recordsFiltered" => $this->srch_loc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_pick_acc($id)
		{
			$data = $this->crud->get_by_id('chart_of_account',array('COA_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_appr($id)
		{
			$data = $this->crud->get_by_id('trx_approvalbill',array('APPR_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_pick_location($id)
		{
			$data = $this->crud->get_by_id('master_location',array('LOC_ID' => $id));
        	echo json_encode($data);
		}

		public function ajax_simpan_budget()
		{
			// $appr = null;
			// if($this->input->post('appr_id') != null)
			// {
			// 	$appr = $this->input->post('appr_id');
			// }
			$tgl = date('Y-m-d');
			$data = array(	                
	                // 'user_id' => $this->input->post('user_id'),
	                // 'appr_id' => $appr,
				    'USER_ID' => '1',
                    'BUD_CODE' => $this->input->post('budget_nomor'),
                    'BUD_APPR' => $this->input->post('appr_id'),
                    'BUD_LOC' => $this->input->post('loc_id'),
                    'BUD_PROJECT' => $this->input->post('budget_type'),
                    'BUD_ADDRESS' => $this->input->post('budget_lokasi_ket'),
	                'BUD_DATE' => $tgl,
	                'BUD_INFO' => $this->input->post('budget_keterangan')            
	            );
	        // $update = $this->crud->save('trx_budget',$data);
	        $jenisanggaran=$this->input->post('budget_type');
	        $approval=$this->input->post('appr_id');
	        if (($jenisanggaran=='Proyek') && ($approval=='')){
	        	alert('Nomor Approval harus diisi!');
			} else {$update = $this->crud->update('trx_budget',$data,array('bud_id'=>$this->input->post('budget_id')));}
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_simpan_budget_detail()
		{
			$tgl = date('Y-m-d');
            $data = array(
                    'BUD_ID' => $this->input->post('budget_id'),
                    'COA_ID' => $this->input->post('acc_id_detail'),
                    'BUDDET_INFO' => $this->input->post('ket_detail'),
                    'BUDDET_SUM' => $this->input->post('jumlah'),
                    'BUDDET_AMOUNT' => $this->input->post('nominal')
                );
            $update = $this->crud->save('budget_det',$data);
	        echo json_encode(array("status" => TRUE)); 
		}

		public function ajax_hapus_budget_detail($id)
		{
            $hapus = $this->crud->delete_by_id('budget_det',array('buddet_id'=>$id));
	        echo json_encode(array("status" => TRUE)); 
		}

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Report';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			// $data['bank'] = $this->crud->get_bank();
			$data['isi']='menu/administrator/transaction/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_anggaran()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$data['isi']='menu/administrator/transaction/lgt_print_budget';
			$this->load->view('layout/administrator/wrapper',$data);
		}

        public function print_anggaran_proyek_detail()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$data['isi']='menu/administrator/transaction/lgt_print_anggaran_proyek_detail';
			$this->load->view('layout/administrator/wrapper',$data);
		}

        public function print_anggaran_proyek_summary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$data['isi']='menu/administrator/transaction/lgt_print_anggaran_proyek_summary';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_anggaran_lokasi_detail()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$data['isi']='menu/administrator/transaction/lgt_print_anggaran_lokasi_detail';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_anggaran_lokasi_summary()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$data['isi']='menu/administrator/transaction/lgt_print_anggaran_lokasi_summary';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ajax_srch_ra()
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
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_ra('."'".$dat->BUD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->srch_ra->count_all(),
							"recordsFiltered" => $this->srch_ra->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		 public function ajax_pick_ra($id)
		{
			$data = $this->crud->get_by_id2('trx_budget','trx_approvalbill',array('BUD_ID' => $id),'trx_budget.BUD_APPR=trx_approvalbill.APPR_ID');
        	echo json_encode($data);
		}

		public function ajax_pick_sum_ra($id)
		{
			$data = $this->crud->sub_ra($id);
        	echo json_encode($data);
        }

         public function ajax_pick_budgetdet($id)
		{
			$data = $this->crud->get_by_id5('budget_det','trx_budget',array('budget_det.BUD_ID' => $id),'trx_budget.BUD_ID=budget_det.BUD_ID');
        	echo json_encode($data);
		}

		public function get_numbsp($value)
		{
			$data['terbilang'] = $this->gen->number_conv($value);
			echo json_encode($data);
		}

		public function show_anggaran_proyek_detail()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('budget_det a');
        	$this->db->join('trx_budget b','a.bud_id=b.bud_id');
        	$this->db->join('master_user c','b.user_id=c.user_id');
        	$this->db->join('master_branch d','c.branch_id=d.branch_id');
        	$this->db->join('trx_approvalbill e','b.bud_appr=e.appr_id');
        	$this->db->join('master_location f','b.bud_loc=f.loc_id');
        	$this->db->join('chart_of_account g','a.coa_id=g.coa_id');
        	// $this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('c.branch_id');
        	$this->db->order_by('b.bud_appr');
        	$this->db->order_by('a.bud_id');
        	// $this->db->order_by('a.coa_id');
        	$this->db->where('b.bud_date >=',$tgl1);
        	$this->db->where('b.bud_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function show_anggaran_lokasi_detail()
        {
        	$tgl1 = $this->input->post('tgl1');
        	$tgl2 = $this->input->post('tgl2');
        	$this->db->from('budget_det a');
        	$this->db->join('trx_budget b','a.bud_id=b.bud_id');
        	$this->db->join('master_user c','b.user_id=c.user_id');
        	$this->db->join('master_branch d','c.branch_id=d.branch_id');
        	$this->db->join('trx_approvalbill e','b.bud_appr=e.appr_id');
        	$this->db->join('master_location f','b.bud_loc=f.loc_id');
        	$this->db->join('chart_of_account g','a.coa_id=g.coa_id');
        	// $this->db->join('chart_of_account d','a.coa_id=d.coa_id');
        	$this->db->order_by('c.branch_id');
        	$this->db->order_by('a.bud_id');
            $this->db->order_by('b.bud_loc');
        	// $this->db->order_by('a.coa_id');
        	$this->db->where('b.bud_date >=',$tgl1);
        	$this->db->where('b.bud_date <=',$tgl2);
        	$res = $this->db->get();
        	$data = $res->result();
        	echo json_encode($data);
        }

        public function pageprint_ra($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'TRX');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$this->load->view('menu/administrator/transaction/budget_print',$data);
		}

		public function pageprint_anggaran_proyek_detail($id)
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$this->load->view('menu/administrator/transaction/anggaran_proyek_detail_print',$data);
		}

		public function pageprint_anggaran_proyek_summary($id)
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$this->load->view('menu/administrator/transaction/anggaran_proyek_summary_print',$data);
		}

		public function pageprint_anggaran_lokasi_detail($id)
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$this->load->view('menu/administrator/transaction/anggaran_lokasi_detail_print',$data);
		}

		public function pageprint_anggaran_lokasi_summary($id)
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['title']='Match Terpadu - Dashboard Transaction';
			$data['menu']='transaction';
			$data['menulist']='report_transaction';
			$this->load->view('menu/administrator/transaction/anggaran_lokasi_summary_print',$data);
		}

		public function open_budget($id)
		{
			$user = $this->input->post('user_name');
			$get = $this->db->get_where('trx_budget',array('bud_id'=>$id));
			$code = $get->row()->BUD_CODE;
			$dt = array('bud_sts'=>'0');
			$update = $this->crud->update('trx_budget',$dt,array('bud_id' => $id));
			$data['status'] = TRUE;
			echo json_encode($data);
		}
	}
?>