<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Permit extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('CRUD/M_gen','gen');
			$this->load->model('CRUD/M_permit','permit');
		}

		public function index()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$data['title']='Match Terpadu';
			$data['menu']='permit';
			$data['menulist']='dash_permit';
			$data['isi']='menu/administrator/permit/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function gen_permitappr()
		{
			$gen = $this->gen->gen_numpermitappr();
			$data['id'] = $gen['insertId'];
			$data['kode'] = $gen['pappr_code'];
			// $data['id'] = '5';
			// $data['kode'] = 'PI/1712/000003';
			// $data['status'] = TRUE;
			echo json_encode($data);
		}

		public function permit_approval()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$data['title']='Match Terpadu';
			$data['menu']='permit';
			$data['menulist']='permit_appr';
			$data['isi']='menu/administrator/permit/permit_approval';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$data['title']='Match Terpadu';
			$data['menu']='permit';
			$data['menulist']='report_permit';
			$data['isi']='menu/administrator/permit/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_permitappr($id)
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$data['id']=$id;
			$data['title']='Match Terpadu - Dashboard Finance';
			$data['menu']='finance';
			$data['menulist']='report_inv';
			$this->load->view('menu/administrator/permit/print_permitappr',$data);
		}

		public function report_permitappr()
		{
			$this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$data['title']='Match Terpadu';
			$data['menu']='permit';
			$data['menulist']='report_permit';
			$data['isi']='menu/administrator/permit/report_permitappr';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function open_pappr($id)
		{
			$user = $this->input->post('user_name');
			$string = array();
			$dt = array('pappr_sts'=>'0');
			$update = $this->crud->update('trx_permitappr',$dt,array('pappr_id' => $id));
			$his = $this->permit->getlog_pappr($id);
			$dthis = array(
					'pappr_id' => $id,
					'hispappr_sts' => 'Open by User '.$user,
					'hispappr_old' => $his->HISPAPPR_STS,
					'hispappr_new' => 'Open By User '.$user,
					'hispappr_info' => 'Open Record by permit form',
					'hispappr_date' => date('Y-m-d'),
					'hispappr_upcount' => $his->HISPAPPR_UPCOUNT+1
				);
			$this->db->insert('his_pappr',$dthis);
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		//Laporan
		public function print_rptpappr()
		{
			$data['location'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['datestart'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['dateend'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['branch'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['pattype'] = ($this->uri->segment(8) == 'null') ? '' : $this->uri->segment(8);
			$data['appr'] = ($this->uri->segment(9) == 'null') ? '' : $this->uri->segment(9);
			$data['rpt_type'] = ($this->uri->segment(10) == 'null') ? '' : $this->uri->segment(10);
			$data['title']='Match Terpadu - Dashboard Permit';
			$data['menu']='permit';
			$data['menulist']='report_permit';
			$this->load->view('menu/administrator/permit/print_rptpermitappr',$data);
		}

		public function gen_rptpappr_t1()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->where('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('locid')) 
			{
				$this->db->where('b.loc_id', $this->input->post('locid') );
			}
			if ($this->input->post('prmttypid')) 
			{
				$this->db->where('b.prmttyp_id', $this->input->post('prmttypid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('f.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.pappr_date >=', $this->input->post('date_start'));
        		$this->db->where('b.pappr_date <=', $this->input->post('date_end'));
			}
			$this->db->from('permitdoc_det a');
			$this->db->join('trx_permitappr b','b.pappr_id = a.pappr_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_permit_type e','e.prmttyp_id = b.prmttyp_id');
			$this->db->join('master_user f','f.user_id = b.user_id');
			$this->db->join('master_branch g','g.branch_id = f.branch_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptpappr_t2()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->where('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('locid')) 
			{
				$this->db->where('b.loc_id', $this->input->post('locid') );
			}
			if ($this->input->post('prmttypid')) 
			{
				$this->db->where('b.prmttyp_id', $this->input->post('prmttypid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('f.branch_id', $this->input->post('branch') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('b.pappr_date >=', $this->input->post('date_start'));
        		$this->db->where('b.pappr_date <=', $this->input->post('date_end'));
			}
			$this->db->from('permitpay_det a');
			$this->db->join('trx_permitappr b','b.pappr_id = a.pappr_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_permit_type e','e.prmttyp_id = b.prmttyp_id');
			$this->db->join('master_user f','f.user_id = b.user_id');
			$this->db->join('master_branch g','g.branch_id = f.branch_id');
			$this->db->join('chart_of_account h','h.coa_id = a.coa_id');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_rptpappr_t3()
		{
			if ($this->input->post('apprid')) 
			{
				$this->db->where('b.appr_id', $this->input->post('apprid') );
			}
			if ($this->input->post('locid')) 
			{
				$this->db->where('b.loc_id', $this->input->post('locid') );
			}
			if ($this->input->post('prmttypid')) 
			{
				$this->db->where('b.prmttyp_id', $this->input->post('prmttypid') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->where('f.branch_id', $this->input->post('branch') );
			}
			$this->db->from('permitdoc_det a');
			$this->db->join('trx_permitappr b','b.pappr_id = a.pappr_id');
			$this->db->join('trx_approvalbill c','c.appr_id = b.appr_id','left');
			$this->db->join('master_location d','d.loc_id = b.loc_id');
			$this->db->join('master_permit_type e','e.prmttyp_id = b.prmttyp_id');
			$this->db->join('master_user f','f.user_id = b.user_id');
			$this->db->join('master_branch g','g.branch_id = f.branch_id');
			$this->db->where('a.pdoc_dateend >=', $this->input->post('date_start'));
			$this->db->where('a.pdoc_dateend <=', $this->input->post('date_end'));
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		//CRUD
		public function save_permitappr()
		{
			$appr = null;
			if($this->input->post('pi_apprid') != null)
			{
				$appr = $this->input->post('pi_apprid');
			}
			$this->_validate_pi();
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'appr_id' => $appr,
				'gov_id' => $this->input->post('pi_plcid'),
				'cust_id' => $this->input->post('pi_custid'),
				'bb_id' => $this->input->post('pi_bbtypeid'),
				'loc_id' => $this->input->post('pi_locid'),
				// 'plc_id' => $this->input->post('pi_plcid'),
				'prmttyp_id' => $this->input->post('pi_pattypeid'),
				'pappr_code' => $this->input->post('pi_code'),
				'pappr_date' => $this->input->post('pi_date'),
				'pappr_urg' => $this->input->post('pi_urg'),
				'pappr_width' => $this->input->post('pi_width'),
				'pappr_length' => $this->input->post('pi_length'),
				'pappr_height' => $this->input->post('pi_height'),
				'pappr_sumsize' => $this->input->post('pi_sumsize'),
				'pappr_plcsum' => $this->input->post('pi_plcsum'),
				'pappr_side' => $this->input->post('pi_side'),
				'pappr_info' => $this->input->post('pi_info'),
				'pappr_sts' => '1'
			);
			$update = $this->crud->update('trx_permitappr',$data,array('pappr_id' => $this->input->post('pi_id')));
			$this->logupd_pappr_save($this->input->post('pi_id'),$this->input->post('user_name'));
			echo json_encode(array("status"=>TRUE));
		}

		public function logupd_pappr_save($id,$user)
	    {
	    	$his = $this->permit->getlog_pappr($id);
	    	if ($his->HISPAPPR_UPCOUNT == '0') 
	    	{
	    		$data = array(
						'pappr_id' => $id,
						'hispappr_sts' => 'Posted by User '.$user,
						'hispappr_old' => $his->HISPAPPR_STS,
						'hispappr_new' => 'Posted By User '.$user,
						'hispappr_info' => 'Original Save by permit form',
						'hispappr_date' => date('Y-m-d'),
						'hispappr_upcount' => $his->HISPAPPR_UPCOUNT+1
					);
				$this->db->insert('his_pappr',$data);
	    	}
	    	else
	    	{
	    		$data = array(
						'pappr_id' => $id,
						'hispappr_sts' => 'Posted by User '.$user,
						'hispappr_old' => $his->HISPAPPR_STS,
						'hispappr_new' => 'Posted By User '.$user,
						'hispappr_info' => 'Update by '.$user.' from permit form',
						'hispappr_date' => date('Y-m-d'),
						'hispappr_upcount' => $his->HISPAPPR_UPCOUNT
					);
				$this->db->insert('his_pappr',$data);
	    	}
	    }

		public function add_costpi()
		{
			$this->_validate_costpi();
			$data = array(
				'coa_id' => $this->input->post('pi_accdet'),
				'pappr_id' => $this->input->post('pi_id'),
				'ppay_info' => $this->input->post('pi_costinfo'),
				'ppay_amount' => $this->input->post('pi_costamount')
			);
			$insert = $this->crud->save('permitpay_det',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function delete_costpi($id)
		{
			$this->crud->delete_by_id('permitpay_det',array('ppay_id' => $id));
        	echo json_encode(array("status" => TRUE));
		}

		public function add_docpi()
		{
			$this->_validate_docpi();
			$data = array(				
				'pappr_id' => $this->input->post('pi_id'),
				'pdoc_datestart' => $this->input->post('pidet_datestart'),
				'pdoc_dateend' => $this->input->post('pidet_dateend'),
				'pdoc_datercv' => $this->input->post('pidet_datercv'),
				'pdoc_rcvnum' => $this->input->post('pidet_rcvnum')
			);
			$insert = $this->crud->save('permitdoc_det',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function delete_docpi($id)
		{
			$this->crud->delete_by_id('permitdoc_det',array('pdoc_id' => $id));
        	echo json_encode(array("status" => TRUE));
		}

		public function _validate_pi()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('pi_locid') == '')
	        {
	            $data['inputerror'][] = 'pi_loc';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pi_bbtypeid') == '')
	        {
	            $data['inputerror'][] = 'pi_bbtype';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pi_plcid') == '')
	        {
	            $data['inputerror'][] = 'pi_plc';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pi_pattypeid') == '')
	        {
	            $data['inputerror'][] = 'pi_pattype';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

		public function _validate_costpi()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('pi_accdet') == '')
	        {
	            $data['inputerror'][] = 'pi_accdet';	            
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pi_costinfo') == '')
	        {
	            $data['inputerror'][] = 'pi_costinfo';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pi_costamount') == '')
	        {
	            $data['inputerror'][] = 'pi_costamount';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

		public function _validate_docpi()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('pidet_datestart') == '')
	        {
	            $data['inputerror'][] = 'pidet_datestart';	            
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pidet_dateend') == '')
	        {
	            $data['inputerror'][] = 'pidet_dateend';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pidet_datercv') == '')
	        {
	            $data['inputerror'][] = 'pidet_datercv';
	            $data['status'] = FALSE;
	        }

	        if($this->input->post('pidet_rcvnum') == '')
	        {
	            $data['inputerror'][] = 'pidet_rcvnum';
	            $data['status'] = FALSE;
	        }

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Cetak dan Laporan
	    public function gen_permitapprprint($id)
	    {
	    	$this->db->from('permitpay_det a');
	    	$this->db->join('trx_permitappr b','b.pappr_id = a.pappr_id');
	    	$this->db->join('chart_of_account c','c.coa_id = a.coa_id');
	    	$this->db->where('b.pappr_id',$id);
	    	$que = $this->db->get();
	    	$data = $que->result();
	    	echo json_encode($data);
	    }
	}
?>