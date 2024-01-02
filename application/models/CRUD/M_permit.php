<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_permit extends CI_Model
	{
		//Fungsi untuk cek pemakaian persetujuan ijin di tabel lain
		public function check_pappr($tb,$id,$sts)
		{
			$que = ($sts != null)?$this->db->get_where($tb,array('pappr_id'=>$id,$sts=>'1')):$this->db->get_where($tb,array('pappr_id'=>$id));
			$cou = $que->num_rows();
			return $cou;
		}

		//Funsgi ambil log history untuk persetujuan ijin
		public function getlog_pappr($id)
		{
			$this->db->where('pappr_id',$id);
	    	$this->db->where('hispappr_upcount = (select max(hispappr_upcount) from his_pappr where pappr_id = '.$id.')');
			$que = $this->db->get('his_pappr');
			return $que->row();
		}
	}
?>