<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Master extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('datatables/Dt_person','master_person');
			$this->load->model('datatables/Dt_user','master_user');
			$this->load->model('datatables/Dt_customer','master_cust');
			$this->load->model('datatables/Dt_location','master_loc');
			$this->load->model('datatables/Dt_govern','master_gov');
			$this->load->model('datatables/Dt_branch','master_brc');
			$this->load->model('datatables/Dt_sales','master_sls');
			$this->load->model('datatables/Dt_supplier','master_sup');
			$this->load->model('datatables/Dt_goods','master_gd');
			$this->load->model('datatables/Dt_pattype','master_ptyp');
			$this->load->model('datatables/Dt_permit','master_pat');
			$this->load->model('datatables/Dt_currency','master_crc');
			$this->load->model('datatables/Dt_bboard','master_bb');
			$this->load->model('datatables/Dt_coaparent','master_coapr');
			$this->load->model('datatables/Dt_coa','master_coa');
			$this->load->model('datatables/Dt_invtype','master_invtype');
			$this->load->model('datatables/Dt_placement','master_plc');
			$this->load->model('CRUD/M_crud','crud');
		}

		//Menu Master Person
		public function person()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Match Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$data['isi']='menu/administrator/master/person';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_person()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Match Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$this->load->view('menu/administrator/master/print_person',$data);
	    }

	    public function get_masterperson()
	    {
	    	$data = $this->crud->get_datamaster('master_person',array('person_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function export_user()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Match Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$this->load->view('menu/administrator/master/print_user',$data);
	    }

	    public function get_masteruser()
	    {
	    	$this->db->join('master_person b','b.person_id = a.person_id');
	    	$this->db->join('master_branch c','c.branch_id = a.branch_id');
	    	$this->db->where('user_dtsts','1');
	    	$get = $this->db->get('master_user a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_person()
		{
			$res = $this->crud->gen_numb('person_code','master_person','KRY');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_user()
		{
			$res = $this->crud->gen_numb('user_code','master_user','USR');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getperson()
		{
			$data = $this->crud->get_person();
	        echo json_encode($data);
		}

		public function getbranch()
		{
			$data = $this->crud->get_branch();
	        echo json_encode($data);
		}

		public function ajax_person()
		{
			$list = $this->master_person->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PERSON_CODE;
				$row[] = $dat->PERSON_NAME;
				$row[] = $dat->PERSON_ADDRESS;				
				$row[] = $dat->PERSON_PHONE;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_person->count_all(),
							"recordsFiltered" => $this->master_person->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_user()
		{
			$list = $this->master_user->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USER_CODE;
				$row[] = $dat->PERSON_NAME;
				$row[] = $dat->USER_NAME;
				$row[] = $dat->BRANCH_NAME;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_user->count_all(),
							"recordsFiltered" => $this->master_user->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_person($id)
	    {
	    	$data = $this->crud->get_by_id('master_person',array('person_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_edit_user($id)
	    {
	    	$data = $this->crud->get_by_id('master_user',array('user_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_lihat_user($id)
	    {
	    	$data = $this->crud->get_by_id3b('master_user','master_person','master_branch',array('user_id' => $id),'master_person.person_id = master_user.person_id','master_branch.branch_id = master_user.branch_id');
        	echo json_encode($data);
	    }

	    public function ajax_add_person()
	    {
	        $this->_validate_person();
	        $table = $this->input->post('tb');
	        $data = array(
	                'person_code' => $this->input->post('code'),
	                'person_name' => $this->input->post('nama'),
	                'person_address' => $this->input->post('alamat'),
	                'person_phone' => $this->input->post('notlp'),
	                'person_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_add_user()
	    {
	        $this->_validate_user();
	        $table = $this->input->post('tbu');	        
	        $data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_password' => md5($this->input->post('password')),
	                'user_level' => $this->input->post('level'),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_person()
	    {
	    	$this->_validate_person();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'person_code' => $this->input->post('code'),
	                'person_name' => $this->input->post('nama'),
	                'person_address' => $this->input->post('alamat'),
	                'person_phone' => $this->input->post('notlp'),
	                'person_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('person_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_user()
	    {
	    	$this->_validate_user();
	    	$table = $this->input->post('tbu');
	    	if($this->input->post('password') == '')
	    	{
	    		$data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_level' => $this->input->post('level'),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	    	}
	    	else
	    	{
	    		$data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_password' => md5($this->input->post('password')),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	    	}	    	
	    	$update = $this->crud->update($table,$data,array('user_id' => $this->input->post('idu')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_person($id)
	    {
	    	$data = array(
	                'person_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_person',$data,array('person_id' => $id) );	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_user($id)
	    {
	    	$data = array(
	                'user_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_user',$data,array('user_id' => $id) );
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_person()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_person.PERSON_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('nama', 'Nama', 'is_unique[master_person.PERSON_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'nama';
		            $data['error_string'][] = 'Nama Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_user()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('codeu') == '')
	        {
	            $data['inputerror'][] = 'codeu';
	            $data['error_string'][] = 'Kode User Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('checku') == '0')
	        {
	        	$this->form_validation->set_rules('codeu', 'Kode', 'is_unique[master_user.USER_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'codeu';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('person') == '')
	        {
	            $data['inputerror'][] = 'person';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('branch') == '')
	        {
	            $data['inputerror'][] = 'branch';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('username') == '')
	        {
	            $data['inputerror'][] = 'username';
	            $data['error_string'][] = 'Username Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('checku') == '0')
	        {
	        	$this->form_validation->set_rules('username', 'Username', 'is_unique[master_user.USER_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'username';
		            $data['error_string'][] = 'Username Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        // if($this->input->post('username') != '')
	        // {
	        // 	$this->form_validation->set_rules('username', 'Username', 'is_unique[master_user.USER_NAME]');
	        // 	if($this->form_validation->run() == FALSE)
		       //  {
		       //  	$data['inputerror'][] = 'username';
		       //      $data['error_string'][] = 'Username Tidak Boleh Sama';
		       //      $data['status'] = FALSE;
		       //  }
	        // }
	        if($this->input->post('checku') == '0')
	        {
	        	if($this->input->post('password') == '')
		        {
		            $data['inputerror'][] = 'password';
		            $data['error_string'][] = 'Password Tidak Boleh Kosong';
		            $data['status'] = FALSE;
		        }
	        }	        
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

		//Menu Master Customer
		public function customer()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'CUST');
			$data['title']='Match Terpadu - Master Customer';
			$data['menu']='master';
			$data['menulist']='customer';
			$data['isi']='menu/administrator/master/customer';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_cust()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'CUST');
			$data['title']='Match Terpadu - Master Customer';
			$data['menu']='master';
			$data['menulist']='customer';
			$this->load->view('menu/administrator/master/print_cust',$data);
	    }

	    public function get_mastercust()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('cust_dtsts','1');
	    	$get = $this->db->get('master_customer a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_cust()
		{
			$res = $this->crud->gen_numb('cust_code','master_customer','CST');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function add_cust()
		{
			$data['title']='Match Terpadu - Master Customer Add';
			$data['menu']='master';
			$data['menulist']='customer';
			$data['isi']='menu/administrator/master/customer_add';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ajax_cust()
		{
			$list = $this->master_cust->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CUST_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->CUST_ADDRESS;
				$row[] = $dat->CUST_CITY;
				$row[] = $dat->CUST_PHONE;
				$row[] = $dat->CUST_NPWPACC;
				$row[] = $dat->CUST_NPKP;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_cust->count_all(),
							"recordsFiltered" => $this->master_cust->count_filtered(),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}

		public function ajax_edit_cust($id)
	    {
	    	// $data = $this->crud->get_by_id('master_customer',array('cust_id' => $id));
	    	$data = $this->crud->get_by_id2b('master_customer a','chart_of_account b',array('a.cust_id'=>$id),'b.coa_id = a.coa_id','left');
        	echo json_encode($data);
	    }

		public function ajax_add_cust()
	    {
	        $this->_validate_cust();
	        $coa = ($this->input->post('accpiutang') != '') ? $this->input->post('accpiutang'):null;
	        $table = $this->input->post('tb');
	        $data = array(
	                'cust_code' => $this->input->post('code'),
	                'coa_id' => $coa,
	                'cust_name' => $this->input->post('nama'),
	                'cust_address' => $this->input->post('alamat'),
	                'cust_city' => $this->input->post('kota'),
	                'cust_postal' => $this->input->post('area'),
	                'cust_prov' => $this->input->post('prov'),
	                'cust_phone' => $this->input->post('notlp'),
	                'cust_fax' => $this->input->post('fax'),
	                // 'cust_acc' => $this->input->post('accpiutang'),
	                'cust_npwpname' => $this->input->post('namanpwp'),
	                'cust_npwpacc' => $this->input->post('nonpwp'),
	                'cust_npwpadd' => $this->input->post('almtnpwp'),
	                'cust_npkp' => $this->input->post('npkp'),
	                'cust_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_cust()
	    {
	    	$this->_validate_cust();
	    	$coa = ($this->input->post('accpiutang') != '') ? $this->input->post('accpiutang'):null;
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'cust_code' => $this->input->post('code'),
	                'coa_id' => $coa,
	                'cust_name' => $this->input->post('nama'),
	                'cust_address' => $this->input->post('alamat'),
	                'cust_city' => $this->input->post('kota'),
	                'cust_postal' => $this->input->post('area'),
	                'cust_prov' => $this->input->post('prov'),
	                'cust_phone' => $this->input->post('notlp'),
	                'cust_fax' => $this->input->post('fax'),
	                // 'cust_acc' => $this->input->post('accpiutang'),
	                'cust_npwpname' => $this->input->post('namanpwp'),
	                'cust_npwpacc' => $this->input->post('nonpwp'),
	                'cust_npwpadd' => $this->input->post('almtnpwp'),
	                'cust_npkp' => $this->input->post('npkp'),
	                'cust_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('cust_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_cust($id)
	    {
	    	$data = array(
	                'cust_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_customer',$data,array('cust_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_cust()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_customer.CUST_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('area') == '')
	        {
	            $data['inputerror'][] = 'area';
	            $data['error_string'][] = 'Area Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('prov') == '')
	        {
	            $data['inputerror'][] = 'prov';
	            $data['error_string'][] = 'Provinsi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('fax') == '')
	        // {
	        //     $data['inputerror'][] = 'fax';
	        //     $data['error_string'][] = 'No Fax Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('accpiutang') == '')
	        // {
	        //     $data['inputerror'][] = 'accpiutang';
	        //     $data['error_string'][] = 'Acc. Piutang Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($this->input->post('namanpwp') == '')
	        {
	            $data['inputerror'][] = 'namanpwp';
	            $data['error_string'][] = 'Nama NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('nonpwp') == '')
	        {
	            $data['inputerror'][] = 'nonpwp';
	            $data['error_string'][] = 'No NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('almtnpwp') == '')
	        {
	            $data['inputerror'][] = 'almtnpwp';
	            $data['error_string'][] = 'Alamat NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('npkp') == '')
	        {
	            $data['inputerror'][] = 'npkp';
	            $data['error_string'][] = 'NPKP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu Master Customer Internal
		public function gen_custin()
		{
			$res = $this->crud->gen_numb('cstin_code','master_cust_intern','CSTI');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_custin($id)
	    {
	    	$data = $this->crud->get_by_id2('master_cust_intern a','master_person b',array('a.cstin_id'=>$id),'b.person_id = a.person_id');
        	echo json_encode($data);
	    }

		public function ajax_add_custin()
	    {
	        $this->_validate_custin();
	        $table = $this->input->post('tb_in');
	        $data = array(
	                'cstin_code' => $this->input->post('code_in'),
	                'person_id' => $this->input->post('empl'),
	                'cstin_info' => $this->input->post('custininfo'),
	                'cstin_dtsts' => $this->input->post('sts_in')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_custin()
	    {
	    	$this->_validate_custin();
	    	$table = $this->input->post('tb_in');
	    	$data = array(
	                'cstin_code' => $this->input->post('code_in'),
	                'person_id' => $this->input->post('empl'),
	                'cstin_info' => $this->input->post('custininfo'),
	                'cstin_dtsts' => $this->input->post('sts_in')
	            );
	    	$update = $this->crud->update($table,$data,array('cstin_id' => $this->input->post('id_in')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_custin($id)
	    {
	    	$data = array(
	                'cstin_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_cust_intern',$data,array('cstin_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_custin()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code_in') == '')
	        {
	            $data['inputerror'][] = 'code_in';
	            $data['error_string'][] = 'Kode Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_cust_intern.CSTIN_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code_in';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('empl') == '')
	        {
	            $data['inputerror'][] = 'empl';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('custininfo') == '')
	        {
	            $data['inputerror'][] = 'custininfo';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master lokasi
	    public function location()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['gov']=$this->crud->get_gov();
			$data['title']='Match Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$data['isi']='menu/administrator/master/location';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_gov()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['title']='Match Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$this->load->view('menu/administrator/master/print_gov',$data);
	    }

	    public function get_mastergov()
	    {
	    	$data = $this->crud->get_datamaster('master_gov_type',array('gov_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function export_loc()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['title']='Match Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$this->load->view('menu/administrator/master/print_loc',$data);
	    }

	    public function get_masterloc()
	    {
	    	$this->db->join('master_gov_type b','b.gov_id = a.gov_id');
	    	$this->db->where('loc_dtsts','1');
	    	$get = $this->db->get('master_location a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_gov()
		{
			$res = $this->crud->gen_numb('gov_code','master_gov_type','GOV');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_loc()
		{
			$res = $this->crud->gen_numb('loc_code','master_location','LOC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getgov()
		{
			$data = $this->crud->get_gov();
	        echo json_encode($data);
		}

		public function ajax_gov()
		{
			$list = $this->master_gov->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GOV_CODE;				
				$row[] = $dat->GOV_NAME;
				$row[] = $dat->GOV_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_gov->count_all(),
							"recordsFiltered" => $this->master_gov->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_loc()
		{
			$list = $this->master_loc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->LOC_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->GOV_NAME;
				$row[] = $dat->LOC_ADDRESS;
				$row[] = $dat->LOC_CITY;
				$row[] = $dat->LOC_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_loc->count_all(),
							"recordsFiltered" => $this->master_loc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_gov($id)
	    {
	    	$data = $this->crud->get_by_id('master_gov_type',array('gov_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_edit_loc($id)
	    {
	    	$data = $this->crud->get_by_id('master_location',array('loc_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_add_gov()
	    {
	        $this->_validate_gov();
	        $table = $this->input->post('gtb');
	        $data = array(
	                'gov_code' => $this->input->post('gcode'),	                
	                'gov_name' => $this->input->post('gname'),
	                'gov_info' => $this->input->post('ginfo'),
	                'gov_dtsts' => $this->input->post('gsts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

		public function ajax_add_loc()
	    {
	        $this->_validate_loc();
	        $table = $this->input->post('ltb');
	        $data = array(
	                'loc_code' => $this->input->post('lcode'),
	                'gov_id' => $this->input->post('gov'),
	                'loc_name' => $this->input->post('lname'),
	                'loc_address' => $this->input->post('lalamat'),
	                'loc_city' => $this->input->post('lkota'),
	                'loc_info' => $this->input->post('lket'),
	                'loc_dtsts' => $this->input->post('lsts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_gov()
	    {
	    	$this->_validate_gov();
	    	$table = $this->input->post('gtb');
	    	$data = array(
	                'gov_code' => $this->input->post('gcode'),	                
	                'gov_name' => $this->input->post('gname'),
	                'gov_info' => $this->input->post('ginfo'),
	                'gov_dtsts' => $this->input->post('gsts')
	            );
	    	$update = $this->crud->update($table,$data,array('gov_id' => $this->input->post('gid')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_loc()
	    {
	    	$this->_validate_loc();
	    	$table = $this->input->post('ltb');
	    	$data = array(
	                'loc_code' => $this->input->post('lcode'),
	                'gov_id' => $this->input->post('gov'),
	                'loc_name' => $this->input->post('lname'),
	                'loc_address' => $this->input->post('lalamat'),
	                'loc_city' => $this->input->post('lkota'),
	                'loc_info' => $this->input->post('lket'),
	                'loc_dtsts' => $this->input->post('lsts')
	            );
	    	$update = $this->crud->update($table,$data,array('loc_id' => $this->input->post('lid')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_gov($id)
	    {
	    	$data = array(	                
	                'gov_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_gov_type',$data,array('gov_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_loc($id)
	    {
	    	$data = array(	                
	                'loc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_location',$data,array('loc_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_gov()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('gcode') == '')
	        {
	            $data['inputerror'][] = 'gcode';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('gcheck') == '0')
	        {
	        	$this->form_validation->set_rules('gcode', 'Kode', 'is_unique[master_gov_type.GOV_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'gcode';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('gname') == '')
	        {
	            $data['inputerror'][] = 'gname';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('ginfo') == '')
	        {
	            $data['inputerror'][] = 'ginfo';
	            $data['error_string'][] = 'Keterangan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_loc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('lcode') == '')
	        {
	            $data['inputerror'][] = 'lcode';
	            $data['error_string'][] = 'Kode Lokasi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lname') == '')
	        {
	            $data['inputerror'][] = 'lname';
	            $data['error_string'][] = 'Kode Lokasi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('gov') == '')
	        {
	            $data['inputerror'][] = 'gov';
	            $data['error_string'][] = 'Kode Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lcheck') == '0')
	        {
	        	$this->form_validation->set_rules('lcode', 'Kode', 'is_unique[master_location.LOC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'lcode';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('lalamat') == '')
	        {
	            $data['inputerror'][] = 'lalamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lkota') == '')
	        {
	            $data['inputerror'][] = 'lkota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lket') == '')
	        {
	            $data['inputerror'][] = 'lket';
	            $data['error_string'][] = 'Keterangan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master branch
	    public function branch()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'BRC');
			$data['title']='Match Terpadu - Master Cabang';
			$data['menu']='master';
			$data['menulist']='branch';
			$data['isi']='menu/administrator/master/branch';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_branch()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BRC');
			$data['title']='Match Terpadu - Master Cabang';
			$data['menu']='master';
			$data['menulist']='branch';
			$this->load->view('menu/administrator/master/print_branch',$data);
	    }

	    public function get_masterbrc()
	    {
	    	$data = $this->crud->get_datamaster('master_branch',array('branch_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_brc()
		{
			$res = $this->crud->gen_numb('branch_code','master_branch','BRC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_brc()
		{
			$url = base_url();
			$list = $this->master_brc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BRANCH_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->BRANCH_ADDRESS;			
				$row[] = $dat->BRANCH_CITY;
				$row[] = $dat->BRANCH_PHONE;
				$row[] = '<img src="'.$url.'assets/img/branchlogo/'.$dat->BRANCH_LOGO.'" class="img-responsive">';
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_brc->count_all(),
							"recordsFiltered" => $this->master_brc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_brc($id)
	    {
	    	$data = $this->crud->get_by_id('master_branch',array('branch_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_brc()
	    {
	        $this->_validate_brc();
	        $table = $this->input->post('tb');
	        $data = array(
	                'branch_code' => $this->input->post('code'),
	                'branch_name' => $this->input->post('nama'),
	                'branch_init' => $this->input->post('inisial'),
	                'branch_status' => $this->input->post('stat'),
	                'branch_address' => $this->input->post('alamat'),
	                'branch_city' => $this->input->post('kota'),
	                'branch_phone' => $this->input->post('notlp'),
	                'branch_fax' => $this->input->post('fax'),
	                'branch_dtsts' => $this->input->post('sts')
	            );
	        if (!empty($_FILES))
	        {
	        	$name = $this->input->post('code');
				$this->img_conf($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
	        	$data['branch_logo'] = $logo['file_name'];
	        }
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE, 'error' => $this->upload->display_errors()));
	    }

	    public function ajax_update_brc()
	    {
	    	$this->_validate_brc();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'branch_code' => $this->input->post('code'),
	                'branch_name' => $this->input->post('nama'),
	                'branch_init' => $this->input->post('inisial'),
	                'branch_status' => $this->input->post('stat'),
	                'branch_address' => $this->input->post('alamat'),
	                'branch_city' => $this->input->post('kota'),
	                'branch_phone' => $this->input->post('notlp'),
	                'branch_fax' => $this->input->post('fax'),
	                'branch_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('branch_id' => $this->input->post('id')));
	    	if (!empty($_FILES)) 
			{
				$imgpath = $this->db->get_where('master_branch',array('branch_id'=>$this->input->post('id')))->row()->BRANCH_LOGO;
				@unlink('./assets/img/branchlogo/'.$imgpath);
				$name = $this->input->post('code');
				$this->img_conf($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
				$dtup = array ('branch_logo'=>$logo['file_name']);
				$update = $this->crud->update($table,$dtup,array('branch_id'=>$this->input->post('id')));
			}
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_brc($id)
	    {
	    	$data = array(	                
	                'branch_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_branch',$data,array('branch_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_brc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_branch.BRANCH_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('fax') == '')
	        {
	            $data['inputerror'][] = 'fax';
	            $data['error_string'][] = 'No Fax Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master COA	    
	    public function coa()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'COA');
			$data['title']='Match Terpadu - Master COA';
			$data['menu']='master';
			$data['menulist']='coa';
			$data['isi']='menu/administrator/master/coa';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_coa()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'COA');
			$data['title']='Match Terpadu - Master COA';
			$data['menu']='master';
			$data['menulist']='coa';
			$this->load->view('menu/administrator/master/print_coa',$data);
	    }

	    public function get_mastercoa()
	    {
	    	$this->db->join('parent_chart b','b.par_id = a.par_id');
	    	$this->db->join('parent_type c','c.partp_id = b.partp_id');
	    	$this->db->where('coa_dtsts','1');
	    	$get = $this->db->get('chart_of_account a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function ajax_coaparent()
		{
			$list = $this->master_coapr->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PAR_ACC;
				$row[] = $dat->PAR_ACCNAME;
				$row[] = $dat->PARTP_NAME;			
				$row[] = $dat->PAR_INFO;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_coapr->count_all(),
							"recordsFiltered" => $this->master_coapr->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_coa()
		{
			$list = $this->master_coa->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PAR_ACC.'-'.$dat->PAR_ACCNAME;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_coa->count_all(),
							"recordsFiltered" => $this->master_coa->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function getcoapr()
		{
			$data = $this->crud->get_coapr();
	        echo json_encode($data);
		}

		public function getcoabrc()
		{
			$data = $this->db->get_where('master_branch',array('branch_dtsts'=>'1'))->result();
	        echo json_encode($data);
		}

		public function getcoaprtp()
		{
			$this->db->where('partp_dtsts','1');
			$que = $this->db->get('parent_type');
			$data = $que->result();
	        echo json_encode($data);
		}

		public function getcoa()
		{
			$data = $this->crud->get_coa();
	        echo json_encode($data);
		}

		public function add_coaprtp()
		{
			$this->_validate_coaprtp();
			$table = 'parent_type';
			$data = array (
					'partp_name' => $this->input->post('partp_name'),
					'partp_sts' => $this->input->post('partp_sts'),
					'partp_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status"=>TRUE));
		}

		public function add_coapr()
		{
			$this->_validate_coapr();
			$table = $this->input->post('par_tb');
			$data = array (
					'par_acc' => $this->input->post('par_acc'),
					'par_accname' => $this->input->post('par_name'),
					// 'par_type' => $this->input->post('par_type'),
					'partp_id' => $this->input->post('par_type'),
					'par_info' => $this->input->post('par_info'),
					'par_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status" => TRUE));
		}		

		public function add_coa()
		{
			$this->_validate_coa();
			$table = $this->input->post('coa_tb');
			$data = array (
					'coa_acc' => $this->input->post('coa_acc'),
					'coa_accname' => $this->input->post('coa_accname'),
					'par_id' => $this->input->post('coa_par'),
					'branch_id' => $this->input->post('coa_brc'),
					'coa_debit' => 0,
					'coa_credit' => 0,
					'coa_saldo' => 0,
					'coa_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status" => TRUE));
		}

		public function edit_coaprtp($id)
	    {
	    	$data = $this->crud->get_by_id('parent_type',array('partp_id' => $id));
        	echo json_encode($data);
	    }

		public function edit_coapr($id)
	    {
	    	$data = $this->crud->get_by_id('parent_chart',array('par_id' => $id));
        	echo json_encode($data);
	    }

	    public function edit_coa($id)
	    {
	    	$data = $this->crud->get_by_id('chart_of_account',array('coa_id' => $id));
        	echo json_encode($data);
	    }

	    public function update_coaprtp()
	    {
	    	$this->_validate_coaprtp();
	    	$table = 'parent_type';
	    	$data = array(
	    			'partp_name' => $this->input->post('partp_name'),
					'partp_sts' => $this->input->post('partp_sts')
	            );
	    	$update = $this->crud->update($table,$data,array('partp_id' => $this->input->post('partp_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_coapr()
	    {
	    	$this->_validate_coapr();
	    	$table = $this->input->post('par_tb');
	    	$data = array(
	                'par_acc' => $this->input->post('par_acc'),
					'par_accname' => $this->input->post('par_name'),
					// 'par_type' => $this->input->post('par_type'),
					'partp_id' => $this->input->post('par_type'),
					'par_info' => $this->input->post('par_info')
	            );
	    	$update = $this->crud->update($table,$data,array('par_id' => $this->input->post('par_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_coa()
	    {
	    	$this->_validate_coa();
	    	$table = $this->input->post('coa_tb');
	    	$data = array(
	                'coa_acc' => $this->input->post('coa_acc'),
					'coa_accname' => $this->input->post('coa_accname'),
					'par_id' => $this->input->post('coa_par'),
					'branch_id' => $this->input->post('coa_brc'),
	            );
	    	$update = $this->crud->update($table,$data,array('coa_id' => $this->input->post('coa_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coaprtp($id)
	    {
	    	$data = array(	                
	                'partp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('parent_type',$data,array('partp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coapr($id)
	    {
	    	$data = array(	                
	                'par_dtsts' => '0'
	            );
	    	$update = $this->crud->update('parent_chart',$data,array('par_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coa($id)
	    {
	    	$data = array(	                
	                'coa_dtsts' => '0'
	            );
	    	$update = $this->crud->update('chart_of_account',$data,array('coa_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_coaprtp()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('partp_name') == '')
	        {
	            $data['inputerror'][] = 'partp_name';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('partp_check') == '0')
	        {
	        	$this->form_validation->set_rules('partp_name', 'Nama', 'is_unique[parent_type.PARTP_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'partp_name';
		            $data['error_string'][] = 'Nama Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('partp_sts') == '')
	        {
	            $data['inputerror'][] = 'partp_sts';
	            $data['error_string'][] = 'Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function _validate_coapr()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('par_acc') == '')
	        {
	            $data['inputerror'][] = 'par_acc';
	            $data['error_string'][] = 'No. Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('par_check') == '0')
	        {
	        	$this->form_validation->set_rules('par_acc', 'No Rekening', 'is_unique[parent_chart.PAR_ACC]|trim|alpha_numeric');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'par_acc';
		            $data['error_string'][] = 'No. Rekening Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('par_name') == '')
	        {
	            $data['inputerror'][] = 'par_name';
	            $data['error_string'][] = 'Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('par_type') == '')
	        {
	            $data['inputerror'][] = 'par_type';
	            $data['error_string'][] = 'Jenis Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('par_info') == '')
	        {
	            $data['inputerror'][] = 'par_info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function _validate_coa()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('coa_acc') == '')
	        {
	            $data['inputerror'][] = 'coa_acc';
	            $data['error_string'][] = 'No. Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('coa_check') == '0')
	        {
	        	$this->form_validation->set_rules('coa_acc', 'No Rekening', 'is_unique[chart_of_account.COA_ACC]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'coa_acc';
		            $data['error_string'][] = 'No. Rekening Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('coa_accname') == '')
	        {
	            $data['inputerror'][] = 'coa_accname';
	            $data['error_string'][] = 'Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('coa_par') == '')
	        {
	            $data['inputerror'][] = 'coa_par';
	            $data['error_string'][] = 'Induk Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('coa_brc') == '')
	        {
	            $data['inputerror'][] = 'coa_brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		//Menu master invoice type
	    public function invoice_type()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'INVT');
			$data['title']='Match Terpadu - Master Jenis Invoice';
			$data['menu']='master';
			$data['menulist']='invtyp';
			$data['isi']='menu/administrator/master/invtype';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_invt()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'INVT');
			$data['title']='Match Terpadu - Master Jenis Invoice';
			$data['menu']='master';
			$data['menulist']='invtyp';
			$this->load->view('menu/administrator/master/print_invt',$data);
	    }

	    public function get_masterinvt()
	    {
	    	$data = $this->crud->get_datamaster('invoice_type',array('inc_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_invtype()
		{
			$res = $this->crud->gen_numb('inc_code','invoice_type','IVT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_invtype()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->master_invtype->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INC_CODE;
				$row[] = $dat->INC_NAME;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->INC_ACCRCVNAME;			
				$row[] = $dat->INC_ACCINCNAME;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_invtype->count_all(),
							"recordsFiltered" => $this->master_invtype->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function edit_invtype($id)
	    {
	    	$data = $this->crud->get_by_id('invoice_type',array('inc_id' => $id));
        	echo json_encode($data);
	    }

		public function add_invtype()
	    {
	        $this->_validate_invtype();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'branch_id' => $this->input->post('brc'),
	                'inc_code' => $this->input->post('code'),
	                'inc_name' => $this->input->post('nama'),
	                'inc_accrcv' => $this->input->post('accrcv'),
	                'inc_accrcvname' => $this->input->post('accrcvname'),
	                'inc_accinc' => $this->input->post('accinc'),
	                'inc_accincname' => $this->input->post('accincname'),
	                'inc_dtsts' => $this->input->post('sts')	                
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_invtype()
	    {
	    	$this->_validate_invtype();
	    	$table = $this->input->post('tb');
	    	$data = array(
	    			'branch_id' => $this->input->post('brc'),
	                'inc_code' => $this->input->post('code'),
	                'inc_name' => $this->input->post('nama'),
	                'inc_accrcv' => $this->input->post('accrcv'),
	                'inc_accrcvname' => $this->input->post('accrcvname'),
	                'inc_accinc' => $this->input->post('accinc'),
	                'inc_accincname' => $this->input->post('accincname')
	            );
	    	$update = $this->crud->update($table,$data,array('inc_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function delete_invtype($id)
	    {
	    	$data = array(	                
	                'inc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('invoice_type',$data,array('inc_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_invtype()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Jenis Invoice Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('brc') == '')
	        {
	            $data['inputerror'][] = 'brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[invoice_type.INC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Jenis Invoice Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('accrcv') == '')
	        {
	            $data['inputerror'][] = 'accrcv';
	            $data['error_string'][] = 'Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('accinc') == '')
	        {
	            $data['inputerror'][] = 'accinc';
	            $data['error_string'][] = 'Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master sales
	    public function salesforce()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'SLS');
			$data['person']=$this->crud->get_person();
			$data['branch']=$this->crud->get_branch();
			$data['title']='Match Terpadu - Master Sales';
			$data['menu']='master';
			$data['menulist']='sales';
			$data['isi']='menu/administrator/master/salesforce';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_sales()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'SLS');
			$data['title']='Match Terpadu - Master Sales';
			$data['menu']='master';
			$data['menulist']='sales';
			$this->load->view('menu/administrator/master/print_sales',$data);
	    }

	    public function get_mastersales()
	    {
	    	$this->db->join('master_person b','b.person_id = a.person_id');
	    	$this->db->join('master_branch c','c.branch_id = a.branch_id');
	    	$this->db->where('sales_dtsts','1');
	    	$get = $this->db->get('master_sales a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_sls()
		{
			$res = $this->crud->gen_numb('sales_code','master_sales','SLF');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_sls()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->master_sls->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SALES_CODE;
				$row[] = $dat->PERSON_NAME;				
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->SALES_PHONE;
				$row[] = $dat->SALES_EMAIL;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_sls->count_all(),
							"recordsFiltered" => $this->master_sls->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_sls($id)
	    {
	    	$data = $this->crud->get_by_id('master_sales',array('sales_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_sls()
	    {
	        $this->_validate_sls();
	        $table = $this->input->post('tb');
	        $data = array(
	                'person_id' => $this->input->post('person'),
	                'branch_id' => $this->input->post('brc'),
	                'sales_code' => $this->input->post('code'),	                
	                'sales_phone' => $this->input->post('notlp'),
	                'sales_email' => $this->input->post('mail'),
	                'sales_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_sls()
	    {
	    	$this->_validate_sls();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'person_id' => $this->input->post('person'),
	                'branch_id' => $this->input->post('brc'),
	                'sales_code' => $this->input->post('code'),	                
	                'sales_phone' => $this->input->post('notlp'),
	                'sales_email' => $this->input->post('mail'),
	                'sales_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('sales_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_sls($id)
	    {
	    	$data = array(
	                'sales_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_sales',$data,array('sales_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_sls()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Sales Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_sales.SALES_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('person') == '')
	        {
	            $data['inputerror'][] = 'person';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('brc') == '')
	        {
	            $data['inputerror'][] = 'brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('mail') == '')
	        {
	            $data['inputerror'][] = 'mail';
	            $data['error_string'][] = 'Email Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        $this->form_validation->set_rules('mail', 'Email', 'valid_email');
	        if($this->form_validation->run() == FALSE)
	        {
	        	$data['inputerror'][] = 'mail';
	            $data['error_string'][] = 'Email Tidak Valid';
	            $data['status'] = FALSE;
	        }       

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master currency
	    public function currency()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'CURR');
			$data['title']='Match Terpadu - Master Currency';
			$data['menu']='master';
			$data['menulist']='currency';
			$data['isi']='menu/administrator/master/currency';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_curr()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'CURR');
			$data['title']='Match Terpadu - Master Currency';
			$data['menu']='master';
			$data['menulist']='currency';
			$this->load->view('menu/administrator/master/print_curr',$data);
	    }

	    public function get_mastercurr()
	    {
	    	$data = $this->crud->get_datamaster('master_currency',array('curr_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_crc()
		{
			$res = $this->crud->gen_numb('curr_code','master_currency','CUR');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_crc()
		{
			$list = $this->master_crc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CURR_CODE;
				$row[] = $dat->CURR_SYMBOL;				
				$row[] = $dat->CURR_NAME;
				$row[] = $dat->CURR_RATE;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_crc->count_all(),
							"recordsFiltered" => $this->master_crc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_crc($id)
	    {
	    	$data = $this->crud->get_by_id('master_currency',array('curr_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_crc()
	    {
	        $this->_validate_crc();
	        $table = $this->input->post('tb');
	        $data = array(
	                'curr_code' => $this->input->post('code'),
	                'curr_name' => $this->input->post('nama'),
	                'curr_symbol' => $this->input->post('cr_code'),
	                'curr_rate' => $this->input->post('rate'),
	                'curr_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_crc()
	    {
	    	$this->_validate_crc();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'curr_code' => $this->input->post('code'),
	                'curr_name' => $this->input->post('nama'),
	                'curr_symbol' => $this->input->post('cr_code'),
	                'curr_rate' => $this->input->post('rate'),
	                'curr_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('curr_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_crc($id)
	    {
	    	$data = array(
	                'curr_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_currency',$data,array('curr_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_crc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_currency.CURR_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Mata Uang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('cr_code') == '')
	        {
	            $data['inputerror'][] = 'cr_code';
	            $data['error_string'][] = 'Simbol Mata Uang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rate') == '')
	        {
	            $data['inputerror'][] = 'rate';
	            $data['error_string'][] = 'Rate Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master billboard
	    public function billboard()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Match Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$data['isi']='menu/administrator/master/billboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_bb()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Match Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$this->load->view('menu/administrator/master/print_bb',$data);
	    }

	    public function get_masterbb()
	    {
	    	$data = $this->crud->get_datamaster('master_bboard',array('bb_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_bb()
		{
			$res = $this->crud->gen_numb('bb_code','master_bboard','BBO');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_bb()
		{
			$list = $this->master_bb->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BB_CODE;
				$row[] = $dat->BB_NAME;				
				$row[] = $dat->BB_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_bb->count_all(),
							"recordsFiltered" => $this->master_bb->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_bb($id)
	    {
	    	$data = $this->crud->get_by_id('master_bboard',array('bb_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_bb()
	    {
	        $this->_validate_bb();
	        $table = $this->input->post('tb');
	        $data = array(
	                'bb_code' => $this->input->post('code'),
	                'bb_name' => $this->input->post('nama'),
	                'bb_info' => $this->input->post('info'),	                
	                'bb_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_bb()
	    {
	    	$this->_validate_bb();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'bb_code' => $this->input->post('code'),
	                'bb_name' => $this->input->post('nama'),
	                'bb_info' => $this->input->post('info'),	                
	                'bb_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('bb_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_bb($id)
	    {
	    	$data = array(
	                'bb_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_bboard',$data,array('bb_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_bb()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_bboard.BB_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Reklame Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master placement
		public function gen_plc()
		{
			$res = $this->crud->gen_numb('plc_code','master_placement','PLC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function export_plc()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Match Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$this->load->view('menu/administrator/master/print_plc',$data);
	    }

	    public function get_masterplc()
	    {
	    	$data = $this->crud->get_datamaster('master_placement',array('plc_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function ajax_plc()
		{
			$list = $this->master_plc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PLC_CODE;
				$row[] = $dat->PLC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_plc->count_all(),
							"recordsFiltered" => $this->master_plc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_plc($id)
	    {
	    	$data = $this->crud->get_by_id('master_placement',array('plc_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_plc()
	    {
	        $this->_validate_plc();
	        $table = $this->input->post('tb2');
	        $data = array(
	                'plc_code' => $this->input->post('code2'),
	                'plc_name' => $this->input->post('nama2'),	                
	                'plc_dtsts' => $this->input->post('sts2')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_plc()
	    {
	    	$this->_validate_plc();
	    	$table = $this->input->post('tb2');
	    	$data = array(
	                'plc_code' => $this->input->post('code2'),
	                'plc_name' => $this->input->post('nama2'),	                
	                'plc_dtsts' => $this->input->post('sts2')
	            );
	    	$update = $this->crud->update($table,$data,array('plc_id' => $this->input->post('id2')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_plc($id)
	    {
	    	$data = array(
	                'plc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_placement',$data,array('plc_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_plc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code2') == '')
	        {
	            $data['inputerror'][] = 'code2';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check2') == '0')
	        {
	        	$this->form_validation->set_rules('code2', 'Kode', 'is_unique[master_placement.PLC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code2';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama2') == '')
	        {
	            $data['inputerror'][] = 'nama2';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master permit type
	    public function permit()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'PAT');
			$data['loc']=$this->crud->get_loc();
			$data['pattyp']=$this->crud->get_pattyp();
			$data['title']='Match Terpadu - Master Permit Type';
			$data['menu']='master';
			$data['menulist']='permit';
			$data['isi']='menu/administrator/master/permittype';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_patt()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'PAT');
			$data['title']='Match Terpadu - Master Permit Type';
			$data['menu']='master';
			$data['menulist']='permit';
			$this->load->view('menu/administrator/master/print_patt',$data);
	    }

	    public function get_masterpatt()
	    {
	    	$data = $this->crud->get_datamaster('master_permit_type',array('prmttyp_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_ptyp()
		{
			$res = $this->crud->gen_numb('prmttyp_code','master_permit_type','PMT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_ptyp()
		{
			$list = $this->master_ptyp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRMTTYP_CODE;
				$row[] = $dat->PRMTTYP_NAME;				
				$row[] = $dat->PRMTTYP_INFO;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_ptyp->count_all(),
							"recordsFiltered" => $this->master_ptyp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_locpat()
		{
			$list = $this->master_pat->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PERMIT_CODE;
				$row[] = $dat->LOC_NAME;				
				$row[] = $dat->PRMTTYP_NAME;
				$row[] = $dat->PERMIT_DESC;
				$row[] = $dat->PERMIT_END_DATE;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_pat->count_all(),
							"recordsFiltered" => $this->master_pat->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_ptyp($id)
	    {
	    	$data = $this->crud->get_by_id('master_permit_type',array('prmttyp_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_edit_locpat($id)
	    {
	    	$data = $this->crud->get_by_id('master_permit',array('permit_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_ptyp()
	    {
	        $this->_validate_ptyp();
	        $table = $this->input->post('tb');
	        $data = array(
	                'prmttyp_code' => $this->input->post('code'),
	                'prmttyp_name' => $this->input->post('nama'),
	                'prmttyp_info' => $this->input->post('info'),	                
	                'prmttyp_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_ptyp()
	    {
	    	$this->_validate_ptyp();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'prmttyp_code' => $this->input->post('code'),
	                'prmttyp_name' => $this->input->post('nama'),
	                'prmttyp_info' => $this->input->post('info'),	                
	                'prmttyp_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('prmttyp_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_ptyp($id)
	    {
	    	$data = array(
	                'prmttyp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_permit_type',$data,array('prmttyp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_ptyp()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_permit_type.PRMTTYP_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master supplier
	    public function supplier()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'SUPP');
			$data['title']='Match Terpadu - Master Supplier';
			$data['menu']='master';
			$data['menulist']='supplier';
			$data['isi']='menu/administrator/master/supplier';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_supp()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'SUPP');
			$data['title']='Match Terpadu - Master Supplier';
			$data['menu']='master';
			$data['menulist']='supplier';
			$this->load->view('menu/administrator/master/print_supp',$data);
	    }

	    public function get_mastersupp()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('supp_dtsts','1');
	    	$get = $this->db->get('master_supplier a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_supp()
		{
			$res = $this->crud->gen_numb('supp_code','master_supplier','SUP');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_sup()
		{
			$list = $this->master_sup->get_datatables();
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
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_sup->count_all(),
							"recordsFiltered" => $this->master_sup->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_sup($id)
	    {
	    	// $data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
	    	$data = $this->crud->get_by_id2b('master_supplier a','chart_of_account b',array('a.supp_id'=>$id),'b.coa_id = a.coa_id','left');
        	echo json_encode($data);
	    }

		public function ajax_add_sup()
	    {
	        $this->_validate_sup();
	        $coa = ($this->input->post('acc') != '') ? $this->input->post('acc'):null;
	        $table = $this->input->post('tb');
	        $data = array(
	                'supp_code' => $this->input->post('code'),
	                'coa_id' => $coa,
	                'supp_name' => $this->input->post('nama'),
	                'supp_address' => $this->input->post('alamat'),	                
	                'supp_city' => $this->input->post('kota'),
	                'supp_postal' => $this->input->post('postal'),
	                'supp_phone' => $this->input->post('phone'),
	                'supp_fax' => $this->input->post('fax'),
	                'supp_due' => $this->input->post('jtempo'),
	                'supp_otherctc' => $this->input->post('other'),
	                'supp_npwpname' => $this->input->post('npwpname'),
	                'supp_npwpcode' => $this->input->post('npwpacc'),
	                'supp_npwpadd' => $this->input->post('npwpadd'),
	                'supp_nppkpcode' => $this->input->post('nppkpacc'),
	                // 'supp_acc' => $this->input->post('acc'),
	                'supp_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_sup()
	    {
	    	$this->_validate_sup();
	    	$coa = ($this->input->post('acc') != '') ? $this->input->post('acc'):null;
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'supp_code' => $this->input->post('code'),
	                'coa_id' => $coa,
	                'supp_name' => $this->input->post('nama'),
	                'supp_address' => $this->input->post('alamat'),	                
	                'supp_city' => $this->input->post('kota'),
	                'supp_postal' => $this->input->post('postal'),
	                'supp_phone' => $this->input->post('phone'),
	                'supp_fax' => $this->input->post('fax'),
	                'supp_due' => $this->input->post('jtempo'),
	                'supp_otherctc' => $this->input->post('other'),
	                'supp_npwpname' => $this->input->post('npwpname'),
	                'supp_npwpcode' => $this->input->post('npwpacc'),
	                'supp_npwpadd' => $this->input->post('npwpadd'),
	                'supp_nppkpcode' => $this->input->post('nppkpacc'),
	                // 'supp_acc' => $this->input->post('acc'),
	                'supp_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('supp_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_sup($id)
	    {
	    	$data = array(
	                'supp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_supplier',$data,array('supp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_sup()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_supplier.SUPP_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('postal') == '')
	        {
	            $data['inputerror'][] = 'postal';
	            $data['error_string'][] = 'Kode Pos Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('phone') == '')
	        {
	            $data['inputerror'][] = 'phone';
	            $data['error_string'][] = 'Telepon Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('fax') == '')
	        // {
	        //     $data['inputerror'][] = 'fax';
	        //     $data['error_string'][] = 'Fax Supplier Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        // if($this->input->post('acc') == '')
	        // {
	        //     $data['inputerror'][] = 'acc';
	        //     $data['error_string'][] = 'Rek. Akuntansi Supplier Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master barang
	    public function goods()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'GD');
			$data['supplier']=$this->crud->get_supplier();
			$data['title']='Match Terpadu - Master Barang';
			$data['menu']='master';
			$data['menulist']='barang';
			$data['isi']='menu/administrator/master/goods';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_goods()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'GD');
			$data['title']='Match Terpadu - Master Barang';
			$data['menu']='master';
			$data['menulist']='barang';
			$this->load->view('menu/administrator/master/print_goods',$data);
	    }

	    public function get_mastergd()
	    {
	    	$this->db->join('master_supplier b','b.supp_id = a.supp_id');
	    	$this->db->where('gd_dtsts','1');
	    	$get = $this->db->get('master_goods a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_gd()
		{
			$res = $this->crud->gen_numb('gd_code','master_goods','BRG');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getsupp()
		{
			$data = $this->crud->get_supplier();
	        echo json_encode($data);
		}

		public function ajax_gd()
		{
			$list = $this->master_gd->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_CODE;
				$row[] = $dat->SUPP_NAME;				
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_UNIT;
				$row[] = $dat->GD_MEASURE;
				$row[] = number_format($dat->GD_PRICE,2);
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_gd->count_all(),
							"recordsFiltered" => $this->master_gd->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_gd($id)
	    {
	    	$data = $this->crud->get_by_id('master_goods',array('gd_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_gd()
	    {
	        $this->_validate_gd();
	        $table = $this->input->post('tb');
	        $data = array(
	                'gd_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'supp_id' => $this->input->post('supp'),
	                'gd_name' => $this->input->post('nama'),
	                'gd_unit' => $this->input->post('unit'),	                
	                'gd_measure' => $this->input->post('ukuran'),
	                'gd_price' => $this->input->post('harga'),
	                'gd_info' => $this->input->post('info'),
	                'gd_sts' => $this->input->post('stats'),
	                'gd_type' => $this->input->post('jenis'),
	                'gd_typestock' => $this->input->post('jstock'),
	                'gd_stock' => '0',
	                'gd_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_gd()
	    {
	    	$this->_validate_gd();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'gd_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'supp_id' => $this->input->post('supp'),
	                'gd_name' => $this->input->post('nama'),
	                'gd_unit' => $this->input->post('unit'),	                
	                'gd_measure' => $this->input->post('ukuran'),
	                'gd_price' => $this->input->post('harga'),
	                'gd_info' => $this->input->post('info'),
	                'gd_sts' => $this->input->post('stats'),
	                'gd_type' => $this->input->post('jenis'),
	                'gd_typestock' => $this->input->post('jstock')
	                // 'gd_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('gd_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_gd($id)
	    {
	    	$data = array(
	                'gd_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_goods',$data,array('gd_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_gd()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_goods.GD_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Barang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('unit') == '')
	        {
	            $data['inputerror'][] = 'unit';
	            $data['error_string'][] = 'Satuan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('ukuran') == '')
	        {
	            $data['inputerror'][] = 'ukuran';
	            $data['error_string'][] = 'Ukuran Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('harga') == '')
	        {
	            $data['inputerror'][] = 'harga';
	            $data['error_string'][] = 'Harga Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('stats') == '')
	        {
	            $data['inputerror'][] = 'stats';
	            $data['error_string'][] = 'Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Master Departemen
	    public function department()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'DEPT');
			$data['title']='Match Terpadu - Master Departemen';
			$data['menu']='master';
			$data['menulist']='department';
			$data['isi']='menu/administrator/master/department';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function export_dept()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'DEPT');
			$data['title']='Match Terpadu - Master Departemen';
			$data['menu']='master';
			$data['menulist']='department';
			$this->load->view('menu/administrator/master/print_dept',$data);
	    }

	    public function get_masterdpt()
	    {
	    	$data = $this->crud->get_datamaster('master_dept',array('dept_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function gen_dept()
		{
			$res = $this->crud->gen_numb('dept_code','master_dept','DPT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_dept($id)
	    {
	    	$data = $this->crud->get_by_id('master_dept',array('dept_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_dept()
	    {
	        $this->_validate_dept();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'dept_code' => $this->input->post('code'),
	                'dept_name' => $this->input->post('dept_name'),
	                'dept_info' => $this->input->post('dept_info'),
	                'dept_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_dept()
	    {
	    	$this->_validate_dept();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'dept_code' => $this->input->post('code'),
	                'dept_name' => $this->input->post('dept_name'),
	                'dept_info' => $this->input->post('dept_info')
	            );
	    	$update = $this->crud->update($table,$data,array('dept_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_dept($id)
	    {
	    	$data = array(
	                'dept_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_dept',$data,array('dept_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_dept()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_dept.DEPT_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('dept_name') == '')
	        {
	            $data['inputerror'][] = 'dept_name';
	            $data['error_string'][] = 'Nama Departemen Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('dept_info') == '')
	        {
	            $data['inputerror'][] = 'dept_info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Master Bank
	    public function bank()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BNK');
			$data['title']='Match Terpadu - Master Bank';
			$data['menu']='master';
			$data['menulist']='bank';
			$data['isi']='menu/administrator/master/bank';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function export_bank()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BNK');
			$data['title']='Match Terpadu - Master Bank';
			$data['menu']='master';
			$data['menulist']='bank';
			$this->load->view('menu/administrator/master/print_bank',$data);
	    }

	    public function get_masterbank()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('bank_dtsts','1');
	    	$get = $this->db->get('master_bank a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

	    public function gen_bank()
		{
			$res = $this->crud->gen_numb('bank_code','master_bank','BNK');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_bank($id)
	    {
	    	$data = $this->crud->get_by_id2('master_bank a','chart_of_account b',array('bank_id' => $id),'b.coa_id = a.coa_id');
        	echo json_encode($data);
	    }

		public function ajax_add_bank()
	    {
	        $this->_validate_bank();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'bank_code' => $this->input->post('code'),
	        		'coa_id' => $this->input->post('acc_bank'),
	                'bank_name' => $this->input->post('nama'),
	                'bank_acc' => $this->input->post('rekening'),
	                'bank_accname' => $this->input->post('rekatsnama'),
	                'bank_prodtype' => $this->input->post('jenisproduk'),
	                'bank_branch' => $this->input->post('cabang'),
	                'bank_curr' => $this->input->post('kurensi'),
	                'bank_info' => $this->input->post('info'),
	                'bank_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_bank()
	    {
	    	$this->_validate_bank();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'bank_code' => $this->input->post('code'),
	                'coa_id' => $this->input->post('acc_bank'),
	                'bank_name' => $this->input->post('nama'),
	                'bank_acc' => $this->input->post('rekening'),
	                'bank_accname' => $this->input->post('rekatsnama'),
	                'bank_prodtype' => $this->input->post('jenisproduk'),
	                'bank_branch' => $this->input->post('cabang'),
	                'bank_curr' => $this->input->post('kurensi'),
	                'bank_info' => $this->input->post('info')
	            );
	    	$update = $this->crud->update($table,$data,array('bank_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_bank($id)
	    {
	    	$data = array(
	                'bank_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_bank',$data,array('bank_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_bank()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_bank.BANK_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('acc_bank') == '')
	        {
	            $data['inputerror'][] = 'acc_bank';
	            $data['error_string'][] = 'Nama Akun Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rekening') == '')
	        {
	            $data['inputerror'][] = 'rekening';
	            $data['error_string'][] = 'Nomor Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rekatsnama') == '')
	        {
	            $data['inputerror'][] = 'rekatsnama';
	            $data['error_string'][] = 'Atas Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jenisproduk') == '')
	        {
	            $data['inputerror'][] = 'jenisproduk';
	            $data['error_string'][] = 'Jenis Produk Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('cabang') == '')
	        {
	            $data['inputerror'][] = 'cabang';
	            $data['error_string'][] = 'Nama Cabang Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kurensi') == '')
	        {
	            $data['inputerror'][] = 'kurensi';
	            $data['error_string'][] = 'Kurensi Akun Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Image Config
	    public function img_conf($name)
		{
			$nmfile='logo_'.$name.'_';
			$config['upload_path']='./assets/img/branchlogo/';			
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='3000';
			$config['file_name']=$nmfile;
			$this->upload->initialize($config);
		}
	}
?>