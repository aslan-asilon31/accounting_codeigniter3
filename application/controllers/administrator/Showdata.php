<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Showdata extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('datatables/showdata/Dt_department','master_dept');
			$this->load->model('datatables/showdata/Dt_bank','master_bank');
			$this->load->model('datatables/showdata/Dt_custintern','master_custintern');
			$this->load->model('datatables/showdata/Dt_govsts','master_govsts');
			$this->load->model('datatables/showdata/Dt_coapartp','coa_partp');
			$this->load->model('datatables/showdata/Dt_saldocoa','saldo_coa');
			$this->load->model('datatables/showdata/Dt_cashindet','det_cashin');
			$this->load->model('datatables/showdata/Dt_cashoutdet','det_cashout');
			$this->load->model('datatables/showdata/Dt_budgetdet','det_budget');
			$this->load->model('datatables/showdata/Dt_showrptappr','showrptappr');
			$this->load->model('datatables/showdata/Dt_showrptbapp','showrptbapp');
			$this->load->model('datatables/showdata/Dt_showusgtopick','showusgtopick');
			$this->load->model('datatables/showdata/Dt_bankintrxdet','bankin_trxdet');
			$this->load->model('datatables/showdata/Dt_bankindet','bankin_det');
			$this->load->model('datatables/showdata/Dt_bankouttrxdet','bankout_trxdet');
			$this->load->model('datatables/showdata/Dt_bankoutdet','bankout_det');
			$this->load->model('datatables/showdata/Dt_giroindet','giroin_det');
			$this->load->model('datatables/showdata/Dt_girooutdet','giroout_det');
			$this->load->model('datatables/showdata/Dt_taxinvdet','faktur_det');
			$this->load->model('datatables/showdata/Dt_invdet','invoice_det');
			$this->load->model('datatables/showdata/Dt_journaldet','jou_det');
			$this->load->model('datatables/showdata/Dt_showledger','ledger');
			$this->load->model('datatables/showdata/Dt_showrptjou','rpt_jou');
			$this->load->model('datatables/showdata/Dt_showrptinv','rpt_inv');
			$this->load->model('datatables/showdata/Dt_showrptaccrcv','rpt_accrcv');
			$this->load->model('datatables/showdata/Dt_showrptaccpay','rpt_accpay');
			$this->load->model('datatables/showdata/Dt_showrpttrialbal','rpt_trialbal');
			$this->load->model('datatables/showdata/Dt_picostdet','picost_det');
			$this->load->model('datatables/showdata/Dt_pidocdet','pidoc_det');
			$this->load->model('datatables/showdata/Dt_showrptpermitappr','rpt_permitappr');
			$this->load->model('datatables/showdata/Dt_showrptpo','rpt_po');
			$this->load->model('datatables/showdata/Dt_showrptprc','rpt_prc');
			$this->load->model('datatables/showdata/Dt_showrptusg','rpt_usg');
			$this->load->model('datatables/showdata/Dt_showinvppn','showinvppn');
			$this->load->model('datatables/showdata/Dt_showrptpoga','rpt_poga');
			$this->load->model('datatables/showdata/Dt_showrptprcga','rpt_prcga');
			$this->load->model('datatables/showdata/Dt_showrptusgga','rpt_usgga');
			$this->load->model('datatables/showdata/Dt_showrptstock','rpt_stock');
			$this->load->model('datatables/showdata/Dt_hisproloss','rpt_hisproloss');
		}

		//Tampil Master Departemen
		public function showmaster_dept()
		{
			$list = $this->master_dept->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->DEPT_CODE;
				$row[] = $dat->DEPT_NAME;				
				$row[] = $dat->DEPT_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_dept('."'".$dat->DEPT_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_dept('."'".$dat->DEPT_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_dept('."'".$dat->DEPT_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_dept->count_all(),
							"recordsFiltered" => $this->master_dept->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Master Bank
		public function showmaster_bank()
		{
			$list = $this->master_bank->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BANK_CODE;
				$row[] = $dat->BANK_NAME;
				$row[] = $dat->BANK_ACC.' A/N '.$dat->BANK_ACCNAME.', Cabang '.$dat->BANK_BRANCH;
				$row[] = $dat->BANK_PRODTYPE.', '.$dat->BANK_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_bank->count_all(),
							"recordsFiltered" => $this->master_bank->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Master Customer Internal
		public function showmaster_custintern()
		{
			$list = $this->master_custintern->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CSTIN_CODE;
				$row[] = $dat->PERSON_NAME;
				$row[] = $dat->PERSON_ADDRESS;
				$row[] = $dat->PERSON_PHONE;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_custin('."'".$dat->CSTIN_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_custin('."'".$dat->CSTIN_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_custin('."'".$dat->CSTIN_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_custintern->count_all(),
							"recordsFiltered" => $this->master_custintern->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Master Gov Status
		public function showmaster_govsts()
		{
			$list = $this->master_govsts->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GOV_CODE;
				$row[] = $dat->GOV_NAME;				
				$row[] = $dat->GOV_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_govsts->count_all(),
							"recordsFiltered" => $this->master_govsts->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Master Tipe Rek Induk
		public function showmaster_coapartp()
		{
			$list = $this->coa_partp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PARTP_NAME;
				$row[] = '<a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_partp('."'".$dat->PARTP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_partp('."'".$dat->PARTP_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->coa_partp->count_all(),
							"recordsFiltered" => $this->coa_partp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Approval
		public function showrpt_appr()
		{
			$list = $this->showrptappr->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = date_format(date_create($dat->APPR_DATE),"d-M-Y");
				$row[] = date_format(date_create($dat->APPR_CONTRACT_END),"d-M-Y");
				$row[] = $dat->LOC_NAME.' - '.$dat->LOC_ADDRESS.', '.$dat->LOC_CITY;
				$row[] = $dat->CUST_NAME;				
				$row[] = 'Rp '.number_format($dat->APPR_TOT_INCOME);
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptappr->count_all(),
							"recordsFiltered" => $this->showrptappr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan BAPP
		public function showrpt_bapp()
		{
			$list = $this->showrptbapp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = date_format(date_create($dat->APPR_CONTRACT_START),"d-M-Y").' s/d '.date_format(date_create($dat->APPR_CONTRACT_END),"d-M-Y");
				$row[] = $dat->LOC_NAME.' - '.$dat->LOC_ADDRESS.', '.$dat->LOC_CITY;
				$row[] = $dat->CUST_NAME;				
				$row[] = $dat->BAPP_CODE;
				$row[] = date_format(date_create($dat->BAPP_DATE),"d-M-Y");
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptbapp->count_all(),
							"recordsFiltered" => $this->showrptbapp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan PO
		public function showrpt_po()
		{
			$list = $this->rpt_po->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PO_CODE;
				$row[] = date_format(date_create($dat->PO_DATE),"d-M-Y");
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->SUPP_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_po->count_all(),
							"recordsFiltered" => $this->rpt_po->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Pembelian
		public function showrpt_prc()
		{
			$list = $this->rpt_prc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRC_CODE;
				$row[] = date_format(date_create($dat->PRC_DATE),"d-M-Y");
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->SUPP_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_prc->count_all(),
							"recordsFiltered" => $this->rpt_prc->count_filtered(),
							"data" => $data,
					);
			echo json_encode($output);
		}

		//Tampil Laporan Pemakaian
		public function showrpt_usg()
		{
			$list = $this->rpt_usg->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USG_CODE;
				$row[] = date_format(date_create($dat->USG_DATE),"d-M-Y");
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_usg->count_all(),
							"recordsFiltered" => $this->rpt_usg->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Kas Masuk
		public function showdetail_cashin($id)
		{
			$list = $this->det_cashin->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->CSHINDET_REFF;				
				$row[] = $dat->CSHINDET_INFO;
				$row[] = number_format($dat->CSHDETIN_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_cshindet('."'".$dat->CSHINDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->det_cashin->count_all(),
							"recordsFiltered" => $this->det_cashin->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Kas Keluar
		public function showdetail_cashout($id)
		{
			$list = $this->det_cashout->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->CSHODET_REFF;				
				$row[] = $dat->CSHODET_INFO;
				$row[] = number_format($dat->CSHODET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_cshodet('."'".$dat->CSHODET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->det_cashout->count_all(),
							"recordsFiltered" => $this->det_cashout->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Giro Bank Masuk
		public function showdetail_trxbankin($id)
		{
			$list = $this->bankin_trxdet->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRX_TYPE;
				$row[] = $dat->BNKTRX_NUM;
				$row[] = $dat->BNKTRX_DATE;
				$row[] = number_format($dat->BNKTRX_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bankintrxdet('."'".$dat->BNKTRX_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->bankin_trxdet->count_all(),
							"recordsFiltered" => $this->bankin_trxdet->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Bank Masuk
		public function showdetail_bankin($id)
		{
			$list = $this->bankin_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->BNKDET_TYPE;
				$row[] = $dat->BNKDET_NUM;
				$row[] = $dat->BNKDET_REFF;
				$row[] = $dat->BNKDET_INFO;
				$row[] = number_format($dat->BNKDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bankindet('."'".$dat->BNKDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->bankin_det->count_all(),
							"recordsFiltered" => $this->bankin_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Giro Bank Keluar
		public function showdetail_trxbankout($id)
		{
			$list = $this->bankout_trxdet->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRXO_TYPE;
				$row[] = $dat->BNKTRXO_NUM;
				$row[] = $dat->BNKTRXO_DATE;
				$row[] = number_format($dat->BNKTRXO_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bankouttrxdet('."'".$dat->BNKTRXO_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->bankout_trxdet->count_all(),
							"recordsFiltered" => $this->bankout_trxdet->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Bank Keluar
		public function showdetail_bankout($id)
		{
			$list = $this->bankout_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->BNKODET_TYPE;
				$row[] = $dat->BNKODET_NUM;
				$row[] = $dat->BNKODET_REFF;
				$row[] = $dat->BNKODET_INFO;
				$row[] = number_format($dat->BNKODET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bankoutdet('."'".$dat->BNKODET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->bankout_det->count_all(),
							"recordsFiltered" => $this->bankout_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Giro Masuk
		public function showdetail_giroin($id)
		{
			$list = $this->giroin_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GRINDET_CODE;
				$row[] = $dat->GRINDET_DATE;
				$row[] = number_format($dat->GRINDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_grindet('."'".$dat->GRINDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->giroin_det->count_all(),
							"recordsFiltered" => $this->giroin_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Giro Keluar
		public function showdetail_giroout($id)
		{
			$list = $this->giroout_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GROUTDET_CODE;
				$row[] = $dat->GROUTDET_DATE;
				$row[] = number_format($dat->GROUTDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_groutdet('."'".$dat->GROUTDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->giroout_det->count_all(),
							"recordsFiltered" => $this->giroout_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function showdetail_faktur($id)
		{
			$list = $this->faktur_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->TINVDET_INFO;
				$row[] = $dat->LOC_ADDRESS;
				$row[] = number_format($dat->TINVDET_SUM);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_taxdet('."'".$dat->TINVDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->faktur_det->count_all(),
							"recordsFiltered" => $this->faktur_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}
		//Tampil Detail Invoice
		public function showdetail_invoice($id)
		{
			$list = $this->invoice_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->APPR_PO;
				$row[] = $dat->INVDET_TERM;
				$row[] = number_format($dat->INVDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_invdet('."'".$dat->INVDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->invoice_det->count_all(),
							"recordsFiltered" => $this->invoice_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function showdetail_invoice_($id)
		{
			$list = $this->invoice_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->APPR_PO;
				$row[] = $dat->INVDET_TERM;
				$row[] = number_format($dat->INVDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" disabled><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->invoice_det->count_all(),
							"recordsFiltered" => $this->invoice_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Journal
		public function showdetail_journal($id)
		{
			$list = $this->jou_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->JOU_INFO;
				$row[] = number_format($dat->JOUDET_DEBIT);
				$row[] = number_format($dat->JOUDET_CREDIT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_joudet('."'".$dat->JOUDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->jou_det->count_all(),
							"recordsFiltered" => $this->jou_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Buku Besar
		public function showrpt_ledger()
		{
			$list = $this->ledger->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->JOU_CODE;
				$row[] = $dat->JOU_DATE;
				$row[] = $dat->JOU_REFF;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = number_format($dat->JOUDET_DEBIT);
				$row[] = number_format($dat->JOUDET_CREDIT);
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->ledger->count_all(),
							"recordsFiltered" => $this->ledger->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Jurnal
		public function showrpt_journal()
		{
			$list = $this->rpt_jou->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->JOU_CODE;
				$row[] = $dat->JOU_DATE;
				$row[] = $dat->JOU_REFF;
				$row[] = $dat->JOU_INFO;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->JOUDET_DEBIT;
				$row[] = $dat->JOUDET_CREDIT;
				$row[] = '<a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="pilih_ledger('."'".$dat->JOUDET_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_jou->count_all(),
							"recordsFiltered" => $this->rpt_jou->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Invoice
		public function showrpt_invoice()
		{
			$list = $this->rpt_inv->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->INVDET_TERM;
				$row[] = $dat->INVDET_AMOUNT;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_inv->count_all(),
							"recordsFiltered" => $this->rpt_inv->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Neraca Saldo
		public function showrpt_trialbal()
		{
			$list = $this->rpt_trialbal->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->debit;
				$row[] = $dat->credit;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_trialbal->count_all(),
							"recordsFiltered" => $this->rpt_trialbal->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function showdetail_budget($id)
		{
			$list = $this->det_budget->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC;				
				$row[] = $dat->BUDDET_INFO;
				$row[] = $dat->BUDDET_SUM;
				$row[] = number_format($dat->BUDDET_AMOUNT);
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_budgetdet('."'".$dat->BUDDET_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],

							"recordsTotal" => $this->det_budget->count_all(),
							"recordsFiltered" => $this->det_budget->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}
		//Tampil Detail Biaya Persetujuan Ijin
		public function showdetail_permitpay($id)
		{
			$list = $this->picost_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;				
				$row[] = $dat->PPAY_INFO;
				$row[] = number_format($dat->PPAY_AMOUNT);				
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_picostdet('."'".$dat->PPAY_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->picost_det->count_all(),
							"recordsFiltered" => $this->picost_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Dokumen Persetujuan Ijin
		public function showdetail_permitdoc($id)
		{
			$list = $this->pidoc_det->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PDOC_DATESTART;
				$row[] = $dat->PDOC_DATEEND;
				$row[] = $dat->PDOC_DATERCV;
				$row[] = $dat->PDOC_RCVNUM;				
				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_pidocdet('."'".$dat->PDOC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->pidoc_det->count_all(),
							"recordsFiltered" => $this->pidoc_det->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Persetujuan Ijin
		public function showrpt_permitappr()
		{
			$list = $this->rpt_permitappr->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PAPPR_CODE;
				$row[] = $dat->PAPPR_DATE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->PRMTTYP_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_permitappr->count_all(),
							"recordsFiltered" => $this->rpt_permitappr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Data PPN Cabang
		public function show_invppn($id)
		{
			$list = $this->showinvppn->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			// $total = 0;
			// $ppn = 0;
			// $pph = 0;
			// $dpp = 0;
			foreach ($list as $dat) {
				// $total = $total + $dat->tot;
				// $dpp = $dpp + $dat->dpp;
				// $ppn = $ppn + $dat->ppn;
				// $pph = $pph + $dat->pph;
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INV_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->tot;		
				$row[] = $dat->dpp;	
				$row[] = $dat->ppn;					
				$row[] = '<input type="checkbox" id="pilih" name="pilih" onclick="pick_inv_ppn('."'".$dat->INV_ID."'".')">';
				$data[] = $row;
			}
			// $('[name="inv_subappr"]').val($total);
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showinvppn->count_all(),
							"recordsFiltered" => $this->showinvppn->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan PO GA
		public function showrpt_poga()
		{
			$list = $this->rpt_poga->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->POGA_CODE;
				$row[] = date_format(date_create($dat->POGA_DATE),"d-M-Y");
				$row[] = $dat->POGA_ORDNUM;
				$row[] = $dat->SUPP_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_poga->count_all(),
							"recordsFiltered" => $this->rpt_poga->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Pembelian GA
		public function showrpt_prcga()
		{
			$list = $this->rpt_prcga->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRCGA_CODE;
				$row[] = date_format(date_create($dat->PRCGA_DATE),"d-M-Y");
				$row[] = $dat->PRCGA_INV;
				$row[] = $dat->SUPP_NAME;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_prcga->count_all(),
							"recordsFiltered" => $this->rpt_prcga->count_filtered(),
							"data" => $data,
					);
			echo json_encode($output);
		}

		//Tampil Laporan Pemakaian GA
		public function showrpt_usgga()
		{
			$list = $this->rpt_usgga->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USGGA_CODE;
				$row[] = date_format(date_create($dat->USGGA_DATE),"d-M-Y");
				$row[] = $dat->USGGA_INFO;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_usgga->count_all(),
							"recordsFiltered" => $this->rpt_usgga->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Stock Logistik
		public function showrpt_stock()
		{
			$list = $this->rpt_stock->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_STOCK.' '.$dat->GD_MEASURE;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_stock->count_all(),
							"recordsFiltered" => $this->rpt_stock->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Detail Pemakaian Untuk Dipilih
		public function show_usgtopick($id)
		{
			$list = $this->showusgtopick->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->USGDET_QTY. ' ' .$dat->GD_MEASURE;
				$row[] = $dat->USGDET_SUB;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usgtopick('."'".$dat->GD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showusgtopick->count_all(),
							"recordsFiltered" => $this->showusgtopick->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Kartu Piutang
		public function showrpt_accrcv()		
		{
			$list = $this->rpt_accrcv->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				if ($dat->total != 0) {$tot = $dat->total;} else {$tot = 0;};
				$row = array();
				$row[] = $no;
				$row[] = $dat->kode;
				$row[] = $dat->nama;
				$row[] = number_format($tot,2);
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_accrcv->count_all(),
							"recordsFiltered" => $this->rpt_accrcv->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Kartu Hutang
		public function showrpt_accpay()		
		{ 
			$list = $this->rpt_accpay->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++; 
				if ($dat->total != 0) {$tot = $dat->total;} else {$tot = 0;};
				$row = array();
				$row[] = $no;
				$row[] = $dat->kode;
				$row[] = $dat->nama;
				$row[] = number_format($tot,2);
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_accpay->count_all(),
							"recordsFiltered" => $this->rpt_accpay->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Saldo COA
		public function showcoa_saldo()
		{
			$list = $this->saldo_coa->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = number_format($dat->COA_DEBIT);
				$row[] = number_format($dat->COA_CREDIT);
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->saldo_coa->count_all(),
							"recordsFiltered" => $this->saldo_coa->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Saldo Laba Rugi
		public function showphisroloss_saldo()
		{
			$brc = $this->session->userdata('user_branch');
			$coa = '2140003';
			$list = $this->rpt_hisproloss->get_datatables($coa,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->JOU_DATE;
				$row[] = $dat->JOU_CODE;
				$row[] = $dat->JOU_REFF;
				$row[] = $dat->JOU_INFO;
				$row[] = $dat->JOUDET_DEBIT;
				$row[] = $dat->JOUDET_CREDIT;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->rpt_hisproloss->count_all(),
							"recordsFiltered" => $this->rpt_hisproloss->count_filtered($coa,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}
	}
?>