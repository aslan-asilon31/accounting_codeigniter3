<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
		}

		public function index()
		{
			redirect('administrator/Dashboard');
		}

		public function login_()
		{
			$data['title']='Match Terpadu';
			$data['menu']='dashboard';
			$data['menulist']='';
			$this->load->view('menu/general/login',$data);
		}

		public function loginauth()
		{
			$user = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$res = $this->authsys->login($user,$pass);
			if ($res == '1')
			{
				$data['tes'] = 'Sukses Login'.$res.$pass;
				$data['status'] = TRUE;
			}
			else
			{
				$data['tes'] = 'Gagal Login'.$res.$pass;
				$data['status'] = FALSE;
			}
			echo json_encode($data);
		}

		public function logout()
		{
			$this->authsys->logout();
		}

		public function pass_change()
		{
			$id = $this->input->post('user_id');
			$oldpass = md5($this->input->post('old_pass'));
			$newpass = md5($this->input->post('new_pass'));
			$data['error_string'] = array();
	        $data['inputerror'] = array();
			//Cek Password Lama
			$get = $this->db->get_where('master_user',array('user_id'=>$id));
			if($oldpass != $get->row()->USER_PASSWORD)
			{
				$data['inputerror'][] = 'old_pass';
				$data['error_string'][] = 'Password Lama Salah';
				$data['status'] = FALSE;
			}
			else
			{
				$dtup = array('user_password'=>$newpass);
				$update = $this->crud->update('master_user',$dtup,array('user_id' =>$id));
				$data['status'] = TRUE;				
			}
			echo json_encode($data);
		}

		public function menu_trx()
		{
			$get = $this->db->get('master_menutrx');
			$data = $get->result();
			echo json_encode($data);
		}

		public function menu_master()
		{
			$get = $this->db->get('master_menumaster');
			$data = $get->result();
			echo json_encode($data);
		}

		public function get_menulist()
		{
			$getmst = $this->db->get_where('master_menu',array('menu_sts'=>0));
			$data['mst'] = $getmst->result();
			$gettrx = $this->db->get_where('master_menu',array('menu_sts'=>1));
			$data['trx'] = $gettrx->result();
			echo json_encode($data);
		}

		public function get_useraccess($id)
		{
			$get = $this->db->get_where('group_user',array('user_id'=>$id));
			$data = $get->result();
			echo json_encode($data);
		}

		public function get_user()
		{
			$get = $this->db->from('master_user')->where('user_dtsts','1')->order_by('user_name')->get();
			$data = $get->result();
			echo json_encode($data);
		}

		public function add_useraccess()
		{
			$user = $this->input->post('user_list');
			$data['arr'] = $this->input->post('trx');
			$data['arr2'] = $this->input->post('mstr');
			$del_acc = $this->crud->delete_by_id('group_user',array('user_id'=>$user));
			if(sizeof($data['arr'])>0)
			{
				foreach($data['arr'] as $trx)
				{
					$dt_trx = array(
							'user_id' => $user,
							'menu_code' => $trx
						);
					$ins_trx = $this->crud->save('group_user',$dt_trx);
				}
			}
			if(sizeof($data['arr2'])>0)
			{
				foreach($data['arr2'] as $mst)
				{
					$dt_mst = array(
							'user_id' => $user,
							'menu_code' => $mst
						);
					$ins_mst = $this->crud->save('group_user',$dt_mst);
				}
			}
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function get_appdata($id)
		{
			$get = $this->db->get_where('other_settings',array('branch_id'=>$id));
			$data = $get->row();
			echo json_encode($data);
		}

		public function save_prccoa()
		{
			$brc = $this->input->post('os_branch');
			$deb = ($this->input->post('os_prccoadeb') != '')?$this->input->post('os_prccoadeb'):NULL;
			$crd = ($this->input->post('os_prccoacrd') != '')?$this->input->post('os_prccoacrd'):NULL;
			$maincrd = ($this->input->post('os_prccoamaincrd') != '')?$this->input->post('os_prccoamaincrd'):NULL;
			$subcrd = ($this->input->post('os_prccoasubcrd') != '')?$this->input->post('os_prccoasubcrd'):NULL;
			$disc = ($this->input->post('os_prccoadisc') != '')?$this->input->post('os_prccoadisc'):NULL;
			$ppn = ($this->input->post('os_prccoappn') != '')?$this->input->post('os_prccoappn'):NULL;
			$cost = ($this->input->post('os_prccoacost') != '')?$this->input->post('os_prccoacost'):NULL;
			$getdeb = ($deb != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$deb))->row()->COA_ACCNAME:NULL;
			// $debname = $getdeb->row()->COA_ACCNAME;
			$getcrd = ($crd != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$crd))->row()->COA_ACCNAME:NULL;
			// $crdname = $getcrd->row()->COA_ACCNAME;
			$getmaincrd = ($maincrd != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$maincrd))->row()->COA_ACCNAME:NULL;
			$getsubcrd = ($subcrd != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$subcrd))->row()->COA_ACCNAME:NULL;
			// $subcrdname = $getsubcrd->row()->COA_ACCNAME;
			$getdisc = ($disc != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$disc))->row()->COA_ACCNAME:NULL;
			// $discname = $getdisc->row()->COA_ACCNAME;
			$getppn = ($ppn != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$ppn))->row()->COA_ACCNAME:NULL;
			// $ppnname = $getppn->row()->COA_ACCNAME;
			$getcost = ($cost != NULL)?$this->db->get_where('chart_of_account',array('coa_id'=>$cost))->row()->COA_ACCNAME:NULL;
			// $costname = $getcost->row()->COA_ACCNAME;
			$getlist = $this->db->get_where('other_settings',array('branch_id'=>$brc))->num_rows();
			if($getlist > 0)
			{
				$d_up = array(
						'prc_coa'=>$deb,
						'prc_coaname'=>$getdeb,
						'prc_coamain'=>$maincrd,
						'prc_coamainname'=>$getmaincrd,
						'prc_coasub'=>$subcrd,
						'prc_coasubname'=>$getsubcrd,
						'prc_coaag'=>$crd,
						'prc_coanameag'=>$getcrd,
						'prc_coadisc'=>$disc,
						'prc_coanamedisc'=>$getdisc,
						'prc_coappn'=>$ppn,
						'prc_coanameppn'=>$getppn,
						'prc_coacost'=>$cost,
						'prc_coanamecost'=>$getcost
						);
				$update = $this->crud->update('other_settings',$d_up,array('branch_id'=>$brc));
				$data['status'] = TRUE;
			}
			else
			{
				$d_ins = array(
						'branch_id'=>$brc,
						'prc_coa'=>$deb,
						'prc_coaname'=>$getdeb,
						'prc_coamain'=>$maincrd,
						'prc_coamainname'=>$getmaincrd,
						'prc_coasub'=>$subcrd,
						'prc_coasubname'=>$getsubcrd,
						'prc_coaag'=>$crd,
						'prc_coanameag'=>$getcrd,
						'prc_coadisc'=>$disc,
						'prc_coanamedisc'=>$getdisc,
						'prc_coappn'=>$ppn,
						'prc_coanameppn'=>$getppn,
						'prc_coacost'=>$cost,
						'prc_coanamecost'=>$getcost
						);
				$update = $this->db->insert('other_settings',$d_ins);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function save_bankinfo()
		{
			$brc = $this->input->post('os_branch');
			$ppn = $this->input->post('os_bankinvppn');			
			$getppn = $this->db->get_where('chart_of_account',array('coa_id'=>$ppn));
			$ppnname = $getppn->row()->COA_ACCNAME;
			$getlist = $this->db->get_where('other_settings',array('branch_id'=>$brc))->num_rows();
			if($getlist > 0)
			{
				$d_up = array(
						'print_bankinvoice'=>$this->input->post('stg_infoinvc'),
						'inv_coappn'=>$ppn,
						'inv_coanameppn'=>$ppnname
						);
				$update = $this->crud->update('other_settings',$d_up,array('branch_id'=>$brc));
				$data['status'] = TRUE;
			}
			else
			{
				$d_ins = array(
						'branch_id'=>$brc,
						'print_bankinvoice'=>$this->input->post('stg_infoinvc'),
						'inv_coappn'=>$ppn,
						'inv_coanameppn'=>$ppnname
						);
				$update = $this->db->insert('other_settings',$d_ins);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function save_notafin()
		{
			$nota = $this->input->post('os_nota');
			$brc = $this->input->post('os_branch');
			$getnota = $this->db->get_where('chart_of_account',array('coa_id'=>$nota));
			$notaname = $getnota->row()->COA_ACCNAME;
			$getlist = $this->db->get_where('other_settings',array('branch_id'=>$brc))->num_rows();
			if($getlist > 0)
			{
				$d_up = array(
						'notafin_acc'=>$nota,
						'notafin_accname'=>$notaname
						);
				$update = $this->crud->update('other_settings',$d_up,array('branch_id'=>$brc));
				$data['status'] = TRUE;
			}
			else
			{
				$d_ins = array(
						'branch_id'=>$brc,
						'notafin_acc'=>$nota,
						'notafin_accname'=>$notaname
						);
				$insert = $this->db->insert('other_settings',$d_ins);
				$data['status'] = TRUE;	
			}
			echo json_encode($data);
		}

		public function save_prcgacoa()
		{
			$brc = $this->input->post('os_branch');
			$deb = $this->input->post('os_prcgacoadeb');
			$crd = $this->input->post('os_prcgacoacrd');
			$disc = $this->input->post('os_prcgacoadisc');
			$ppn = $this->input->post('os_prcgacoappn');
			$cost = $this->input->post('os_prcgacoacost');
			$getdeb = $this->db->get_where('chart_of_account',array('coa_id'=>$deb));
			$debname = $getdeb->row()->COA_ACCNAME;
			$getcrd = $this->db->get_where('chart_of_account',array('coa_id'=>$crd));
			$crdname = $getcrd->row()->COA_ACCNAME;
			$getdisc = $this->db->get_where('chart_of_account',array('coa_id'=>$disc));
			$discname = $getdisc->row()->COA_ACCNAME;
			$getppn = $this->db->get_where('chart_of_account',array('coa_id'=>$ppn));
			$ppnname = $getppn->row()->COA_ACCNAME;
			$getcost = $this->db->get_where('chart_of_account',array('coa_id'=>$cost));
			$costname = $getcost->row()->COA_ACCNAME;
			$getlist = $this->db->get_where('other_settings',array('branch_id'=>$brc))->num_rows();
			if($getlist > 0)
			{
				$d_up = array(
						'prcga_coasupply'=>$deb,
						'prcga_coanamesupply'=>$debname,
						'prcga_coadebt'=>$crd,
						'prcga_coanamedebt'=>$crdname,
						'prcga_coadisc'=>$disc,
						'prcga_coanamedisc'=>$discname,
						'prcga_coappn'=>$ppn,
						'prcga_coanameppn'=>$ppnname,
						'prcga_coacost'=>$cost,
						'prcga_coanamecost'=>$costname
						);
				$update = $this->crud->update('other_settings',$d_up,array('branch_id'=>$brc));
				$data['status'] = TRUE;
			}
			else
			{
				$d_ins = array(
						'branch_id'=>$brc,
						'prcga_coasupply'=>$deb,
						'prcga_coanamesupply'=>$debname,
						'prcga_coadebt'=>$crd,
						'prcga_coanamedebt'=>$crdname,
						'prcga_coadisc'=>$disc,
						'prcga_coanamedisc'=>$discname,
						'prcga_coappn'=>$ppn,
						'prcga_coanameppn'=>$ppnname,
						'prcga_coacost'=>$cost,
						'prcga_coanamecost'=>$costname
						);
				$update = $this->db->insert('other_settings',$d_ins);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function save_giroacc()
		{
			$accrcv = $this->input->post('os_giroaccrcv');
			$debt = $this->input->post('os_girodebt');
			$getaccrcv = $this->db->get_where('chart_of_account',array('coa_id'=>$accrcv));
			$accrcvname = $getaccrcv->row()->COA_ACCNAME;
			$getdebt = $this->db->get_where('chart_of_account',array('coa_id'=>$debt));
			$debtname = $getdebt->row()->COA_ACCNAME;
			$brc = $this->input->post('os_branch');
			$getlist = $this->db->get_where('other_settings',array('branch_id'=>$brc))->num_rows();
			if($getlist > 0)
			{
				$d_up = array(
						'accrcvgiro_acc'=>$accrcv,
						'accrcvgiro_accname'=>$accrcvname,
						'debtgiro_acc'=>$debt,
						'debtgiro_accname'=>$debtname
						);
				$update = $this->crud->update('other_settings',$d_up,array('branch_id'=>$brc));
				$data['status'] = TRUE;
			}
			else
			{
				$d_ins = array(
						'branch_id'=>$brc,
						'accrcvgiro_acc'=>$accrcv,
						'accrcvgiro_accname'=>$accrcvname,
						'debtgiro_acc'=>$debt,
						'debtgiro_accname'=>$debtname
						);
				$insert = $this->db->insert('other_settings',$d_ins);
				$data['status'] = TRUE;
			}
			echo json_encode($data);
		}

		public function test()
		{
			$tb = 'trx_approvalbill';
			$col = 'appr_code';
			$affix = 'AB';
			$brc = '3';
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
			$data['tes'] = $res;
			echo json_encode($data);
		}

		public function tes()
		{
			$data['title']='Match Terpadu';
			$data['menu']='dashboard';
			$data['menulist']='';
			$data['isi']='menu/administrator/dashboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}
	}
?>