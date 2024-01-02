		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">Marketing - Approval</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_appr()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> Cetak</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_appr()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_appr()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_appr()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_appr()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                		<ul class="nav nav-tabs">
                			<li class="active">
                				<a href="#1" data-toggle="tab">Data Approval</a>
                			</li>
                			<li>
                				<a href="#2" data-toggle="tab">Detail Termin</a>
                			</li>
                			<li>
                				<a href="#3" data-toggle="tab">Detail Perijinan</a>
                			</li>
                		</ul>
                		<form class="form-horizontal" id="form_appr" enctype="multipart/form-data">
                			<input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                			<input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
	                        <input type="hidden" name="user_brc" value="<?= $this->session->userdata('user_branch')?>">
	                        <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                			<div class="tab-content">
                				<div class="tab-pane fade in active" id="1">
                					<div class="form-group">
		                            	<div class="col-xs-4 col-xs-offset-3 text-center">
		                                	<h2>Data Approval</h2>
		                                </div>
	                            	</div>
	                            	<div class="form-group">
					                    <label class="col-sm-3 control-label">Nomor Approval</label>
					                    <div class="col-sm-1">
	                                        <a id="genbtn" href="javascript:void(0)" onclick="gen_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
	                                    </div>
					                    <div class="col-sm-5">
					                        <input class="form-control" type="text" name="appr_code" value="" readonly>
					                        <input type="hidden" name="appr_id" value="0">
					                	</div>
					                	<div class="col-sm-2">
					                		<input type="text" class="form-control" name="appr_init" readonly>
					                	</div>
									</div>									
									<div class="form-group hid-form">
		                            	<label class="col-sm-3 control-label">Nomor Approval Cabang</label>
		                                <div class="col-sm-1">
		                                	<a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
		                                </div>
		                                <div class="col-sm-7">
		                                	<input class="form-control" type="text" name="appr_brc" readonly>
		                                    <input type="hidden" name="appr_brcid" value="0">
		                                </div>
									</div>									
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Nomor PO</label>
	                                    <div class="col-sm-8">
	                                        <input class="form-control apprbrc" type="text" name="appr_po" placeholder="Nomor PO">
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Tanggal Pembuatan</label>
	                                    <div class="col-sm-8">
	                                    	<div class='input-group date dtp' id='dtp1'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control input-group-addon" name="tgl" value="<?= date('Y-m-d')?>" />
				                            </div>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Awal-Akhir Kontrak</label>
	                                    <div class="col-sm-4">
	                                    	<div class='input-group date dtp' id='dtp2'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control input-group-addon apprbrc" name="tgl_awal" placeholder="Awal Kontrak" />
				                            </div>
	                                    </div>
	                                    <div class="col-sm-4">
	                                    	<div class='input-group date dtp' id='dtp3'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control input-group-addon apprbrc" name="tgl_akhir" placeholder="Akhir Kontrak" />
				                            </div>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Free Recovering</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="appr_rec" class="form-control apprbrc" rows="2" style="resize: vertical;" placeholder="Keterangan Untuk Free Recovering (Cetak/Pasang)"></textarea>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Nama Klien</label>
	                                    <div class="col-sm-1">
	                                        <a href="javascript:void(0)" onclick="srch_cust()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
	                                    </div>
	                                    <div class="col-sm-3">
	                                        <input class="form-control" type="text" name="cust_code" readonly>
	                                        <input type="hidden" name="cust_id" value="">
	                                    </div>
	                                    <div class="col-sm-4">
	                                        <input class="form-control" type="text" name="cust_name" readonly>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Alamat</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="cust_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">No.Tlp || Fax</label>
	                                    <div class="col-sm-4">
	                                        <input class="form-control" type="text" name="cust_phone" readonly>
	                                    </div>
	                                    <div class="col-sm-4">
	                                        <input class="form-control" type="text" name="cust_fax" readonly>
	                                    </div>
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">Marketing</label>
	                            		<div class="col-sm-1">
			                            	<a href="javascript:void(0)" onclick="srch_mkt()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
			                            </div>
			                            <div class="col-sm-3">
			                                <input class="form-control" type="text" name="sales_code" readonly>
			                            	<input type="hidden" name="sales_id" value="">
			                            </div>
			                            <div class="col-sm-4">
			                                <input class="form-control" type="text" name="sales_name" readonly>
			                            </div>										
	                            	</div>
	                            	<div class="form-group">
	                            		<label class="col-sm-3 control-label">No.Tlp || Email</label>
			                            <div class="col-sm-4">
			                                <input class="form-control" type="text" name="sales_phone" readonly>
			                            </div>
			                            <div class="col-sm-4">
			                                <input class="form-control" type="mail" name="sales_email" readonly>
			                            </div>
	                            	</div>
	                            	<div class="form-group">
	                                    <label class="col-sm-3 control-label">Keterangan Tambahan</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="appr_info" class="form-control apprbrc" rows="2" style="resize: vertical;" placeholder="Keterangan Tambahan"></textarea>
	                                    </div>
	                                </div>
	                                <!-- <div class="form-group">
                            			<label class="col-sm-3 control-label">Pekerjaan</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="jobdesc" class="form-control" rows="2" style="resize: vertical;"></textarea>
	                                    </div>
                            		</div> -->
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">Jenis Produk</label>
                            			<div class="col-sm-1">
			                                <a href="javascript:void(0)" onclick="srch_bb()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
			                            </div>
			                            <div class="col-sm-7">
			                                <input class="form-control" type="text" name="jnsbb" readonly>
			                                <input type="hidden" name="bb_id" value="">
			                            </div>			                            
                            		</div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">Lokasi</label>
                            			<div class="col-sm-1">
			                                <a href="javascript:void(0)" onclick="srch_loc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
			                            </div>
			                            <div class="col-sm-7">
			                                <input class="form-control" type="text" name="loc_name" readonly>
			                                <input type="hidden" name="loc_id" value="">
			                            </div>			                            
                            		</div>
                            		<div class="form-group">
			                            <label class="col-sm-3 control-label">Alamat</label>
			                            <div class="col-sm-8">
			                                <textarea name="loc_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Penempatan Reklame</label>
			                            <div class="col-sm-1">
			                                <a href="javascript:void(0)" onclick="srch_plc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
			                            </div>
			                            <div class="col-sm-7">
			                                <input type="hidden" name="plc_id">
			                                <input class="form-control" type="text" name="plc_name" readonly>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Materi Visual</label>
			                            <div class="col-sm-8">
			                                <input class="form-control apprbrc" type="text" name="appr_vis" placeholder="Materi Visual">
			                            </div>
			                        </div>
                            		<div class="form-group">
			                            <label class="col-sm-3 control-label">Ukuran P-L-T</label>
			                            <div class="col-sm-2">
			                                <input class="form-control hit-luas apprbrc" type="text" name="appr_length" placeholder="panjang">
			                            </div>
			                            <div class="col-sm-2">
			                                <input class="form-control hit-luas apprbrc" type="text" name="appr_width" placeholder="lebar">
			                            </div>
			                            <!-- <div class="col-sm-2">
			                                <input class="form-control apprbrc" type="text" name="appr_height" placeholder="tinggi">
			                            </div> -->
			                            <label class="col-sm-1 control-label">Meter</label>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Luas</label>
			                            <div class="col-sm-2">
			                                <input class="form-control apprbrc" type="text" name="appr_sumsize" placeholder="luas">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Sisi Muka || Jumlah</label>
			                            <div class="col-sm-6">
			                                <input class="form-control apprbrc" type="text" name="appr_side" placeholder="depan/belakang/samping">
			                            </div>
			                            <div class="col-sm-2">
			                                <input class="form-control apprbrc" type="text" name="appr_plcsum" placeholder="jumlah">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Mata Uang || Rate</label>
			                            <div class="col-sm-1">
			                            	<a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
			                            </div>
			                            <div class="col-sm-3">
			                            	<input class="form-control" type="text" name="curr_name" readonly>
			                               	<input type="hidden" name="curr_id" value="">
			                            </div>
			                            <div class="col-sm-4">
			                            	<input class="form-control curr-num" type="text" name="curr_rate" readonly>
										</div>
			                        </div>
			                        <div class="form-group">
			                        	<label class="col-sm-3 control-label">Detail Biaya</label>
	                                    <div class="col-sm-8">
	                                        <label class="radio-inline"><input type="radio" onclick="check_()" id="det_radio0" name="detail_biaya" value="0">Tampilkan</label>
	                                        <label class="radio-inline"><input type="radio" onclick="check_()" id="det_radio1" name="detail_biaya" value="1">Sembunyikan</label> 
	                                    </div>
			                        </div>
			                        <div id="det_biaya" class="col-sm-offset-3">
			                        	<div id="det_biayabranch" class="hid-form">
			                        		<div class="form-group">
			                        			<div class="col-xs-4 col-xs-offset-3 text-center">
				                                	<h4>Detail Biaya Cabang</h4>
				                                </div>
			                        		</div>
			                        		<div class="row">
		                            			<div class="col-sm-11 col-xs-11 table-responsive">
		                            				<table id="dtb_biayabranch" class="table table-striped table-bordered" cellspacing="0" width="100%">
		                            					<thead>
		                            						<tr>
		                            							<th class="text-center">
								                                    No
								                                </th>
								                                <th class="text-center">
								                                    Deskripsi
								                                </th>
								                                <th class="text-center">
								                                    Jumlah
								                                </th>
								                                <th class="text-center">
								                                    Actions
								                                </th>
		                            						</tr>
		                            					</thead>
		                            				</table>
		                            			</div>
		                            		</div>
			                        	</div>			                        	
			                        	<div class="form-group">
	                            			<label class="col-sm-3 control-label">Ket Biaya</label>
	                            			<div class="col-sm-7">
	                            				<input class="form-control apprbrc" type="text" name="cost_code" placeholder="Keterangan Detail Biaya">
	                            			</div>
	                            		</div>
	                            		<div class="form-group">
	                            			<label class="col-sm-3 control-label">Jumlah Biaya</label>
	                            			<div class="col-sm-7">
	                            				<div class="input-group">
	                            					<span class="input-group-addon curr">Rp</span>
		                            				<input class="form-control curr-num" type="text" name="cost_amount" placeholder="Jumlah Biaya">
	                            				</div>
	                            			</div>
	                            		</div>
	                            		<div class="form-group">
	                            			<div class="col-sm-offset-3 col-sm-4">
	                            				<a href="javascript:void(0)" onclick="add_costapp()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
	                            			</div>
	                            		</div>
	                            		<div class="row">
	                            			<div class="col-sm-11 col-xs-11 table-responsive">
	                            				<table id="dtb_biaya" class="table table-striped table-bordered" cellspacing="0" width="100%">
	                            					<thead>
	                            						<tr>
	                            							<th class="text-center">
							                                    No
							                                </th>
							                                <th class="text-center">
							                                    Deskripsi
							                                </th>
							                                <th class="text-center">
							                                    Jumlah
							                                </th>
							                                <th class="text-center">
							                                    Actions
							                                </th>
	                            						</tr>
	                            					</thead>
	                            				</table>
	                            			</div>
	                            		</div>
			                        </div>
			                        <div class="form-group hid-form">
			                            <label class="col-sm-3 control-label">Nominal Cabang</label>
			                            <div class="col-sm-8">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="brc_nom" readonly>
			                            	</div>
			                            </div>
			                        </div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">DPP</label>
			                            <div class="col-sm-8">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control chgcount curr-num" type="text" name="dpp" readonly>
			                            	</div>			                                
			                            </div>
                            		</div>
                            		<div class="form-group">
			                            <label class="col-sm-3 control-label">Disc. 1</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                                	<input class="form-control chgcount curr-num-perc" type="text" name="discp1" placeholder="Diskon 1">
			                                </div>
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control chgcount curr-num" type="text" name="discn1" >
			                            	</div>			                                
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Disc. 2</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                                	<input class="form-control chgcount curr-num-perc" type="text" name="discp2" placeholder="Diskon 2">
			                                </div>
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="discn2" readonly>
			                            	</div>
			                            </div>
			                        </div>			                        
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Sub Total</label>
			                            <div class="col-sm-8">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="subtotal1" readonly>
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">PPN</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                                	<input class="form-control chgcount curr-num-perc" type="text" name="ppnp">             	
			                                </div>
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="ppnn" readonly>
			                            	</div>			                                
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Pajak Reklame</label>
			                            <div class="col-sm-8">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control chgcount curr-num" type="text" name="appr_bbtax">
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Sub Total</label>
			                            <div class="col-sm-8">
			                                <input class="form-control curr-num" type="text" name="subtotal2" readonly>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">PPH</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                                	<input class="form-control chgcount curr-num-perc" type="text" name="pphp" placeholder="PPH">
			                                </div>
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon curr">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="pphn" readonly>
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">Grand Total</label>
			                            <div class="col-sm-8">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">Rp</span>
			                            		<input class="form-control curr-num" type="text" name="gtotal" readonly>
			                            	</div>			                                
			                            </div>
			                        </div>
			                        <div class="form-group">
										<div class="col-sm-offset-3 col-sm-2 text-center">
			                            	<a href="javascript:void(0)" onclick="saveapp()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
			                            </div>
			                            <div class="col-sm-2 text-center">
			                            	<button type="button" onclick="aprapp()" class="btn btn-block btn-primary btn-default btnApr" disabled>Approve</button>
			                            </div>
			                            <div class="col-sm-2 text-center">
			                            	<button type="button" onclick="disaprapp()" class="btn btn-block btn-primary btn-default btnApr" disabled>Disapprove</button>
			                            </div>
									</div>
                				</div>
                				<div class="tab-pane fade" id="2">
                					<div class="form-group">
		                            	<div class="col-xs-4 col-xs-offset-3 text-center">
		                                	<h2>Detail Termin</h2>
		                                </div>
	                            	</div>
	                            	<div id="termappbrc" class="hid-form">
	                            		<div class="row">
	                            			<div class="col-sm-12 col-xs-12 table-responsive">
							                    <table id="dtb_terminbranch" class="table table-striped table-bordered" cellspacing="0" width="100%">
							                        <thead>
							                            <tr>
							                                <th class="text-center">
							                                    No
							                                </th>
							                                <th class="text-center">
							                                    Termin
							                                </th>                              
							                                <th class="text-center">
							                                    Tagihan
							                                </th>
							                                <th class="text-center">
							                                    Nominal
							                                </th>
							                                <th class="text-center">
							                                    DPP
							                                </th>
							                                <th class="text-center">
							                                    PPN
							                                </th>
							                                <th class="text-center">
							                                    PPH
							                                </th>
							                                <th class="text-center">
							                                    Actions
							                                </th>
							                            </tr>                            
							                        </thead>                        
							                    </table>
							                </div>
	                            		</div>
	                            	</div>
	                            	<div class="form-group">
                            			<label class="col-sm-3 control-label">Termin</label>
	                                    <div class="col-sm-8">
	                                        <input class="form-control" type="text" name="termcode">
	                                    </div>
                            		</div>
                            		<div class="form-group">
	                                    <label class="col-sm-3 control-label">Keterangan</label>
	                                    <div class="col-sm-8">
	                                        <textarea name="terminfo" class="form-control" rows="2" style="resize: vertical;"></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                            		<label class="col-sm-3 control-label">Tanggal Bayar</label>
	                                    <div class="col-sm-8">
	                                    	<div class='input-group date dtp' id='dtp1'>     
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                                <input id="tgl" type='text' class="form-control" name="tgl_term" placeholder="Tanggal" />
				                            </div>
	                                    </div>
	                            	</div>
	                                <div class="form-group">
                            			<label class="col-sm-3 control-label">DPP Approval</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">Rp</span>
	                                    		<input class="form-control termchgcount curr-num-perc" type="text" name="dpp_appr" readonly>
	                                    	</div>
	                                    </div>
                            		</div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">Pajak Reklame Approval</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">Rp</span>
	                                    		<input class="form-control termchgcount curr-num-perc" type="text" name="bbtax_appr" readonly>
	                                    		<input type="hidden" name="termbbtax">
	                                    	</div>
	                                    </div>
                            		</div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">Tagihan</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">%</span>
	                                        	<input class="form-control termchgcount curr-num-perc" type="text" name="termperc">
	                                        </div>
	                                    </div>
                            		</div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">DPP Termin</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">Rp</span>
	                                    		<input class="form-control termchgcount curr-num-perc" type="text" name="termdpp" readonly>
	                                    	</div>	                                        
	                                    </div>
                            		</div>
                            		<div class="form-group">
                            			<label class="col-sm-3 control-label">Sub Total</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">Rp</span>
	                                    		<input class="form-control termchgcount curr-num-perc" type="text" name="termsub" readonly>
	                                    	</div>
	                                    </div>
                            		</div>
                            		<div class="form-group">
			                            <label class="col-sm-3 control-label">PPN</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                            		<input class="form-control termchgcount curr-num-perc" type="text" name="termppnp">
			                            	</div>			                                
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">Rp</span>
			                            		<input class="form-control curr-num-perc" type="text" name="termppnn" readonly>
			                            	</div>			                                
			                            </div>
			                        </div>			                        
			                        <div class="form-group">
			                            <label class="col-sm-3 control-label">PPH</label>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">%</span>
			                        			<input class="form-control termchgcount curr-num-perc" type="text" name="termpphp">
			                            	</div>
			                            </div>
			                            <div class="col-sm-4">
			                            	<div class="input-group">
			                            		<span class="input-group-addon">Rp</span>
			                            		<input class="form-control curr-num-perc" type="text" name="termpphn" readonly>
			                            	</div>			                                
			                            </div>
			                        </div>
			                        <div class="form-group">
                            			<label class="col-sm-3 control-label">Total Termin</label>
	                                    <div class="col-sm-8">
	                                    	<div class="input-group">
	                                    		<span class="input-group-addon">Rp</span>
	                                    		<input class="form-control curr-num-perc" type="text" name="termsum" readonly>
	                                    	</div>	                                        
	                                    </div>
                            		</div>
			                        <div class="form-group">
                            			<div class="col-sm-offset-3 col-sm-4">
                            				<a href="javascript:void(0)" onclick="add_termapp()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                            			</div>
                            		</div>
                            		<div class="row">
                            			<div class="col-sm-12 col-xs-12 table-responsive">
						                    <table id="dtb_termin" class="table table-striped table-bordered" cellspacing="0" width="100%">
						                        <thead>
						                            <tr>
						                                <th class="text-center">
						                                    No
						                                </th>
						                                <th class="text-center">
						                                    Termin
						                                </th>                              
						                                <th class="text-center">
						                                    Tagihan
						                                </th>
						                                <th class="text-center">
						                                    Nominal
						                                </th>
						                                <th class="text-center">
						                                    DPP
						                                </th>
						                                <th class="text-center">
						                                    PPN
						                                </th>
						                                <th class="text-center">
						                                    PPH
						                                </th>
						                                <th class="text-center">
						                                    Actions
						                                </th>
						                            </tr>                            
						                        </thead>                        
						                    </table>
						                </div>
                            		</div>
                				</div>
                				<div class="tab-pane fade" id="3">
                					<div class="form-group">
		                            	<div class="col-xs-4 col-xs-offset-3 text-center">
		                                	<h2>Detail Perijinan</h2>
		                                </div>
	                            	</div>
	                            	<div id="permitappbrc" class="hid-form">
	                            		<div class="row">
	                            			<div class="col-sm-12 col-xs-12 table-responsive">
							                    <table id="dtb_ijinappbrc" class="table table-striped table-bordered" cellspacing="0" width="100%">
							                        <thead>
							                            <tr>
							                                <th class="text-center">
							                                    No
							                                </th>
							                                <th class="text-center">
							                                    Kode
							                                </th>
							                                <th class="text-center">
							                                    Nama
							                                </th>                              
							                                <th class="text-center">
							                                    Actions
							                                </th>
							                            </tr>                            
							                        </thead>                        
							                    </table>
							                </div>
	                            		</div>
	                            	</div>
	                            	<div class="form-group">
                            			<label class="col-sm-3 control-label">Jenis Ijin</label>
	                                    <div class="col-sm-8">
	                                        <select id="pattyp" name="pat_id" class="form-control" data-live-search="true">
		                                        <option value="">Pilih</option>
		                                    <?php
		                                        for($i=0; $i<count($pattyp); $i++)
		                                    { ?>
		                                        <option value="<?php echo $pattyp[$i]->PRMTTYP_ID ; ?>"><?php echo $pattyp[$i]->PRMTTYP_NAME; ?></option>
		                                    <?php
		                                        }
		                                    ?>
		                                    </select>
	                                    </div>
                            		</div>
                            		<div class="form-group">
                            			<div class="col-sm-offset-3 col-sm-4">
                            				<a href="javascript:void(0)" onclick="add_ijinapp()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                            			</div>
                            		</div>
                            		<div class="row">
                            			<div class="col-sm-12 col-xs-12 table-responsive">
						                    <table id="dtb_ijinapp" class="table table-striped table-bordered" cellspacing="0" width="100%">
						                        <thead>
						                            <tr>
						                                <th class="text-center">
						                                    No
						                                </th>
						                                <th class="text-center">
						                                    Kode
						                                </th>
						                                <th class="text-center">
						                                    Nama
						                                </th>                              
						                                <th class="text-center">
						                                    Actions
						                                </th>
						                            </tr>                            
						                        </thead>                        
						                    </table>
						                </div>
                            		</div>
                				</div>
                			</div>
                		</form>
                	<!-- </div> -->
                </div>
            </div>            
        </div>        
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="modal_cust" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_cust" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>Alamat</th>
	    								<th>Kota</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_mkt" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_mkt" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>No.Tlp</th>
	    								<th>Email</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_bb" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_bb" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>Info</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>    				
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_curr" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_curr" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>Rate</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>    				
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_loc" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_loc" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>Alamat</th>
	    								<th>Kota</th>
	    								<th>Info</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>    				
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_plc" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-sm-12 col-xs-12 table-responsive">
	    					<table id="dtb_plc" class="table table-striped table-bordered" cellspacing="0" width="100%">
	    						<thead>
	    							<tr>
	    								<th>No</th>
	    								<th>Kode</th>
	    								<th>Nama</th>
	    								<th>Pilih</th>
	    							</tr>
	    						</thead>
	    					</table>
	    				</div>
    				</div>    				
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal fade" id="modal_appr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Approval</th>
                                        <th class="col-xs-4">Nama Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Klien</th>
                                        <th>Lokasi</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_appr_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Approval</th>
                                        <th class="col-xs-4">Nama Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Klien</th>
                                        <th>Lokasi</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Search -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
    	$(document).ready(function()
    	{
            $('#pattyp').selectpicker({});
            $('#det_radio1').prop('checked',true);
            check_()
            inputchg();
            inputtermchg();
            luaschg();
            var id = $('[name="appr_id"]').val();
            ijinapp(id);
            termapp(id);
            costapp(id);
    	});
    	function print_appr()
        {
            var ids = $('[name=appr_id]').val();
            window.open ( "<?php echo site_url('administrator/Marketing/pageprint_approval/')?>"+ids,'_blank');
        }
    	function inputchg()
    	{
    		$('.chgcount').on('input', function() {
                hitung_();                
            });
    	}
    	function luaschg()
    	{
    		$('.hit-luas').on('input', function() {
                hit_luas_();                
            });
    	}
    	function inputtermchg()
    	{
    		$('.termchgcount').on('input', function() {
    			hitungterm_();
    		});
    	}
    	function gen_appr()
    	{
    		$.ajax({
    			url : "<?php echo site_url('administrator/Marketing/gen_appr')?>",
    			type: "GET",
    			dataType: "JSON",
    			success: function(data)
    			{
    				$('[name="appr_id"]').val(data.id);
    				$('[name="appr_code"]').val(data.kode);
					$('#genbtn').attr('disabled',true);
    				termapp(data.id);
            		costapp(data.id);
            		pick_init($('[name="user_brc"]').val());
    			},
    			error: function (jqXHR, textStatus, errorThrown)
    			{
    				alert('Gagal Ambil Nomor Approval');
    			}
    		});
    	}
    	function saveapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_simpanapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                    alert('Data Berhasil Disimpan');
	                    $('.nav-tabs a[href="#2"]').tab('show');	                    
	                }
	                else
	                {
	                	for (var i = 0; i < data.inputerror.length; i++) 
	                    {
	                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
	                    }
	                }
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
    	}
    	function aprapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_aproveapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                	// alert('Sukses Approve');
	                	var url = "<?php echo site_url('administrator/Marketing/mkt_trx_approval')?>";
              			window.location = url;
	                }
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data approve');
	            }
	        });
    	}
    	function disaprapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_disaproveapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                    var url = "<?php echo site_url('administrator/Marketing/mkt_trx_approval')?>";
              			window.location = url;
	                }
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
    	}
    	function check_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_biaya').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_biaya').css({'display':'block'});
            }
            if($('[name="user_brcsts"]').val() != '0')
            {
            	$('.hid-form').css({'display':'none'});
            }
        }
        function reload_table()
        {
            $('#dtb_biaya').DataTable().ajax.reload(null,false);
            $('#dtb_termin').DataTable().ajax.reload(null,false);
            $('#dtb_ijinapp').DataTable().ajax.reload(null,false);
        }
    </script>
    <!-- Fungsi Hitung -->
    <script>
    	function hitung_()
    	{
    		var currrate = $('[name="curr_rate"]').val();
    		var dpp = $('[name="dpp"]').val();
    		var discp1 = $('[name="discp1"]').val();
    		var discp2 = $('[name="discp2"]').val();
    		var discn1 = (discp1 < 1)?$('[name="discn1"]').val():dpp*discp1/100;
    		$('[name="discn1"]').val(discn1);
    		var discn2 = (dpp-discn1)*1*discp2/100;
    		$('[name="discn2"]').val(discn2);
    		var sub1 = (dpp-discn1-discn2)*1;//PPH dan PPN didapat dari ini
			$('[name="subtotal1"]').val(sub1);
			var ppnp = $('[name="ppnp"]').val();
			var ppnn = sub1*ppnp/100;
			$('[name="ppnn"]').val(ppnn);
			var bbtax = $('[name="appr_bbtax"]').val();
			var sub2 = (sub1*1)+(ppnn*1)+(bbtax*1);
			var sub3 = (sub1*1)+(bbtax*1);
			$('[name="subtotal2"]').val(sub2);
			var pphp = $('[name="pphp"]').val();
			var pphn = sub1*pphp/100;
			$('[name="pphn"]').val(pphn);			
			var grandtotal = Math.abs(((sub1*1)+(ppnn*1)+(bbtax*1)-(pphn*1))*currrate);
			$('[name="gtotal"]').val(grandtotal);
			// $('[name="dpp_appr"]').val(((sub1*1)+(bbtax*1)));
			$('[name="dpp_appr"]').val(sub1);
			$('[name="bbtax_appr"]').val(bbtax);
    	}
    	function hitungterm_()
    	{
    		var dppappr = $('[name="dpp_appr"]').val();
    		var bbappr = $('[name="bbtax_appr"]').val();
    		var trmp = $('[name="termperc"]').val();
    		var dppterm = dppappr*trmp/100;
    		var bbterm = bbappr*trmp/100;
    		$('[name="termbbtax"]').val(bbterm);
    		$('[name="termdpp"]').val(dppterm);
    		var sub1 = (dppterm+bbterm)*1;
    		$('[name="termsub"]').val(sub1);
    		var ppnptrm = $('[name="termppnp"]').val();
    		var ppnntrm = dppterm*ppnptrm/100;
    		$('[name="termppnn"]').val(ppnntrm);
    		var pphptrm = $('[name="termpphp"]').val();
    		var pphntrm = dppterm*pphptrm/100;
    		$('[name="termpphn"]').val(pphntrm);
    		var sub2 = (sub1*1)+(ppnntrm*1)-(pphntrm*1);
    		$('[name="termsum"]').val(sub2);
    	}
    	function hit_luas_()
    	{
    		var panjang = $('[name="appr_length"]').val();
    		var lebar = $('[name="appr_width"]').val();
    		var luas = Math.abs(panjang*lebar);
    		$('[name="appr_sumsize"]').val(luas);
    	}
    </script>
    <!-- Fungsi Tampilan Data Detail -->
    <script>
    	//Detail Biaya
    	function costapp(id)
    	{
	        table = $('#dtb_biaya').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_costapp/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function costapp_(id)
    	{
	        table = $('#dtb_biaya').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_costapp_/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function add_costapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_add_costapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                	$('[name="cost_code"]').val('');
	                	$('[name="cost_amount"]').val('');
	                    alert('Data Berhasil Ditambahkan');
	                    id = $('[name="appr_id"]').val();
	                    costapp(id);
	                    get_subcost(id);
	                }
	                else
	                {
	                	for (var i = 0; i < data.inputerror.length; i++) 
	                    {
	                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
	                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
	                    }
	                }	                
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
    	}
    	function del_costapp(id)
    	{
    		if(confirm('Are you sure delete this data?'))
	        {	            
	            $.ajax({
	                url : "<?php echo site_url('administrator/Marketing/ajax_del_costapp/')?>"+id,
	                type: "POST",
	                dataType: "JSON",
	                success: function(data)
	                {
	                    alert('Data Berhasil Dihapus');
	                    id = $('[name="appr_id"]').val();
	                    costapp(id);
	                    get_subcost(id);
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error deleting data');
	                }
	            });
	        }
    	}
    	function get_subcost(id)
    	{
    		$.ajax({
    			url : "<?php echo site_url('administrator/Marketing/get_subcost/')?>"+id,
    			type : "POST",
    			dataType : "JSON",
    			success : function(data)
    			{
    				if(data.subtotal != null)
    				{
    					$('[name="dpp"]').val(data.subtotal);
    				}
    				else
    				{
    					$('[name="dpp"]').val('0');
    				}
    				hitung_();
    			}
    		});
    	}
    	//Detail Biaya Cabang
    	function costappbrc(id)
    	{
	        table = $('#dtb_biayabranch').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_costappbrc/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	//Detail Termin
    	function termapp(id)
    	{
	        table = $('#dtb_termin').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_termapp/')?>"+id,
	                "type": "POST",	                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function termapp_(id)
    	{
	        table = $('#dtb_termin').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_termapp_/')?>"+id,
	                "type": "POST",	                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function add_termapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_add_termapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                    alert('Data Berhasil Ditambahkan');
	                    id = $('[name="appr_id"]').val();
	                    termapp(id);
	                }	                
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
    	}
    	function del_termapp(id)
    	{
    		if(confirm('Are you sure delete this data?'))
	        {	            
	            $.ajax({
	                url : "<?php echo site_url('administrator/Marketing/ajax_del_termapp')?>/"+id,
	                type: "POST",
	                dataType: "JSON",
	                success: function(data)
	                {
	                    alert('Data Berhasil Dihapus');
	                    id = $('[name="appr_id"]').val();
	                    termapp(id);
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error deleting data');
	                }
	            });
	        }
    	}
    	//Detail Termin Cabang
    	function termappbrc(id)
    	{
	        table = $('#dtb_terminbranch').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_termappbrc/')?>"+id,
	                "type": "POST",	                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	//Detail Permit
    	function ijinapp(id)
    	{
	        table = $('#dtb_ijinapp').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_ijinapp/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function ijinapp_(id)
    	{
	        table = $('#dtb_ijinapp').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_ijinapp_/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function add_ijinapp()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_add_ijinapp')?>",
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	                if(data.status)
	                {
	                    alert('Data Berhasil Ditambahkan');
	                    id = $('[name="appr_id"]').val();
	                    ijinapp(id);
	                }	                
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
    	}
    	function del_ijinapp(id)
    	{
    		if(confirm('Are you sure delete this data?'))
	        {	            
	            $.ajax({
	                url : "<?php echo site_url('administrator/Marketing/ajax_del_ijinapp')?>/"+id,
	                type: "POST",
	                dataType: "JSON",
	                success: function(data)
	                {
	                    alert('Data Berhasil Dihapus');
	                    id = $('[name="appr_id"]').val();
	                    ijinapp(id);
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error deleting data');
	                }
	            });
	        }
    	}
    	//Detail Permit Cabang
    	function ijinappbrc(id)
    	{
	        table = $('#dtb_ijinappbrc').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_ijinappbrc/')?>"+id,
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    </script>
    <!-- Fungsi Search -->
    <script>
    	function srch_appr()
    	{
    		$('#modal_appr').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbranch')?>",
                    "type": "POST",                
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
    	function edit_appr()
    	{
    		$('#modal_appr_edit').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '0';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
    	function open_appr()
    	{
    		$('#modal_appr_edit').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '1';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
    	function check_appr()
    	{
    		$('#modal_appr_edit').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '2';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
    	function apr_appr()
    	{
    		$('#modal_appr_edit').modal('show');
            $('.modal-title').text('Cari Approval');
            table = $('#dtb_appr_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_brc"]').val();
                        data.chk = '3';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
    	}
    	function srch_cust()
    	{
    		$('#modal_cust').modal('show');
    		$('.modal-title').text('Cari Customer');    		
	        table = $('#dtb_cust').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Searchdata/srch_cust')?>",
	                "type": "POST",                
	            },
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function srch_mkt()
    	{
    		$('#modal_mkt').modal('show');
    		$('.modal-title').text('Cari Marketing');    		
	        table = $('#dtb_mkt').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_srch_mkt')?>",
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function srch_bb()
    	{
    		$('#modal_bb').modal('show');
    		$('.modal-title').text('Cari Jenis Reklame');
	        table = $('#dtb_bb').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_srch_bb')?>",
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function srch_loc()
    	{
    		$('#modal_loc').modal('show');
    		$('.modal-title').text('Cari Lokasi');
	        table = $('#dtb_loc').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Searchdata/srch_loca')?>",
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function srch_plc()
    	{
    		$('#modal_plc').modal('show');
    		$('.modal-title').text('Cari Penempatan');
	        table = $('#dtb_plc').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_srch_plc')?>",
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    	function srch_curr()
    	{
    		$('#modal_curr').modal('show');
    		$('.modal-title').text('Cari Rate Mata Uang');	    		
	        table = $('#dtb_curr').DataTable({
	            "info": false,
	            "destroy": true,
	            "responsive": true,
	            "processing": true,
	            "serverSide": true,
	            "order": [],	            
	            "ajax": {
	                "url": "<?php echo site_url('administrator/Marketing/ajax_srch_curr')?>",
	                "type": "POST",                
	            },	            
	            "columnDefs": [
	            { 
	                "targets": [ 0 ],
	                "orderable": false,
	            },
	            ],
	        });
    	}
    </script>
    <!-- Fungsi Pick -->
    <script>
    	function pick_cust(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_cust/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="cust_id"]').val(data.CUST_ID);
	                $('[name="cust_code"]').val(data.CUST_CODE);
	                $('[name="cust_name"]').val(data.CUST_NAME);
	                $('[name="cust_address"]').val(data.CUST_ADDRESS+', '+data.CUST_CITY);
	                $('[name="cust_phone"]').val(data.CUST_PHONE);
	                $('[name="cust_fax"]').val(data.CUST_FAX);
	                $('#modal_cust').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_mkt(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_pick_mkt/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="sales_id"]').val(data.SALES_ID);
	                $('[name="sales_code"]').val(data.SALES_CODE);
	                $('[name="sales_name"]').val(data.PERSON_NAME);                
	                $('[name="sales_phone"]').val(data.SALES_PHONE);
	                $('[name="sales_email"]').val(data.SALES_EMAIL);
	                $('#modal_mkt').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_bb(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_pick_bb/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="bb_id"]').val(data.BB_ID);	                
	                $('[name="jnsbb"]').val(data.BB_NAME);                	                
	                $('#modal_bb').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_loc(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="loc_id"]').val(data.LOC_ID);
	                $('[name="loc_name"]').val(data.LOC_NAME);
	                $('[name="loc_address"]').val(data.LOC_ADDRESS+', '+data.LOC_CITY);
	                $('#modal_loc').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_plc(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_pick_plc/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="plc_id"]').val(data.PLC_ID);
	                $('[name="plc_name"]').val(data.PLC_NAME);	                
	                $('#modal_plc').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_curr(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/ajax_pick_curr/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="curr_id"]').val(data.CURR_ID);
	                $('[name="curr_name"]').val(data.CURR_NAME);
	                $('[name="curr_rate"]').val(data.CURR_RATE);
	                $('.curr').text(data.CURR_SYMBOL);
	                hitung_();
	                $('#modal_curr').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_apprbranch(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_apprbranch/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('.apprbrc').attr('readonly',true);
	                $('[name="appr_brcid"]').val(data.APPR_ID);
	                $('[name="appr_brc"]').val(data.APPR_CODE+' '+data.BRANCH_INIT);
	                $('[name="appr_po"]').val(data.APPR_PO);
	                $('[name="tgl_awal"]').val(data.APPR_CONTRACT_START);
	                $('[name="tgl_akhir"]').val(data.APPR_CONTRACT_END);
	                $('[name="appr_rec"]').val(data.APPR_RECOV);
	                $('[name="appr_vis"]').val(data.APPR_VISUAL);
	                $('[name="appr_length"]').val(data.APPR_LENGTH);
	                $('[name="appr_width"]').val(data.APPR_WIDTH);
	                $('[name="appr_height"]').val(data.APPR_HEIGHT);
	                $('[name="appr_sumsize"]').val(data.APPR_SUMSIZE);
	                $('[name="appr_side"]').val(data.APPR_SIDE);
	                $('[name="appr_plcsum"]').val(data.APPR_PLCSUM);
	                $('[name="appr_info"]').val(data.APPR_INFO);
	                $('[name="brc_nom"]').val(data.APPR_DPP_INCOME);
	                $('[name="discp1"]').val(data.APPR_DISC_PERC1);
	                $('[name="discp2"]').val(data.APPR_DISC_PERC2);
	                $('[name="appr_bbtax"]').val(data.APPR_BBTAX);
	                $('[name="ppnp"]').val(data.APPR_PPN_PERC);
	                $('[name="pphp"]').val(data.APPR_PPH_PERC);
	                pick_cust(data.CUST_ID);
	                pick_mkt(data.SALES_ID);
	                pick_bb(data.BB_ID);
	                pick_loc(data.LOC_ID);
	                pick_plc(data.PLC_ID);
	                pick_curr(data.CURR_ID);
	                costappbrc(id);
	                termappbrc(id);
	                ijinappbrc(id);
	                $('#modal_appr').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_costappbrc(id)
    	{
    		$.ajax({
	            url : "<?php echo site_url('administrator/Marketing/pick_costapprbrc/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="cost_code"]').val(data.CSTDT_CODE);
	                $('[name="cost_amount"]').val(data.CSTDT_AMOUNT);
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_termappbrc(id)
    	{
    		$.ajax({
	            url : "<?php echo site_url('administrator/Marketing/pick_termapprbrc/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="termcode"]').val(data.TERMSDET_CODE);
	                $('[name="terminfo"]').val(data.TERMSDET_INFO);
	                $('[name="tgl_term"]').val(data.TERMSDET_DATE);
	                $('[name="termperc"]').val(data.TERMSDET_PERC);
	                $('[name="termppnp"]').val(data.TERMSDET_PPN_PERC);
	                $('[name="termpphp"]').val(data.TERMSDET_PPH_PERC);
	                hitungterm_();
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_ijinappbrc(id)
    	{
    		$.ajax({
	            url : "<?php echo site_url('administrator/Marketing/pick_patapprbrc/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
					$('select#pattyp').val(data.PRMTTYP_ID);
                	$('#pattyp').selectpicker('refresh');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_init(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                $('[name="appr_init"]').val(data.BRANCH_INIT);
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_appropen(id)
    	{
    		$.ajax({
	            url : "<?php echo site_url('administrator/Marketing/open_appr/')?>" + id,
	            type: "POST",
	            data: $('#form_appr').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {   
	                if(data.status)
	                {
	                	alert('Record Approval Sukses Dibuka');
	                	$('#modal_appr_edit').modal('hide');
	                }
	                else
	                {
	                	alert('Record Approval masih digunakan di transaksi '+data.string);
	                }
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_appredit(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {
	            	$('[name="appr_id"]').val(data.APPR_ID);
	            	$('[name="appr_code"]').val(data.APPR_CODE);
	            	$('[name="appr_id"]').val(data.APPR_ID);
	                $('[name="appr_brcid"]').val(data.APPR_BRANCHID);
	                $('[name="appr_brc"]').val(data.APPR_BRANCH);
	                $('[name="appr_po"]').val(data.APPR_PO);
	                $('[name="tgl"]').val(data.APPR_DATE);
	                $('[name="tgl_awal"]').val(data.APPR_CONTRACT_START);
	                $('[name="tgl_akhir"]').val(data.APPR_CONTRACT_END);
	                $('[name="appr_rec"]').val(data.APPR_RECOV);
	                $('[name="appr_vis"]').val(data.APPR_VISUAL);
	                $('[name="appr_length"]').val(data.APPR_LENGTH);
	                $('[name="appr_width"]').val(data.APPR_WIDTH);
	                $('[name="appr_height"]').val(data.APPR_HEIGHT);
	                $('[name="appr_sumsize"]').val(data.APPR_SUMSIZE);
	                $('[name="appr_side"]').val(data.APPR_SIDE);
	                $('[name="appr_plcsum"]').val(data.APPR_PLCSUM);
	                $('[name="appr_info"]').val(data.APPR_INFO);
	                $('[name="dpp"]').val(data.APPR_DPP_INCOME);
	                get_subcost(data.APPR_ID);
	                $('[name="discp1"]').val(data.APPR_DISC_PERC1);
	                $('[name="discp2"]').val(data.APPR_DISC_PERC2);
	                $('[name="appr_bbtax"]').val(data.APPR_BBTAX);
	                $('[name="ppnp"]').val(data.APPR_PPN_PERC);
	                $('[name="pphp"]').val(data.APPR_PPH_PERC);
	                pick_cust(data.CUST_ID);
	                pick_mkt(data.SALES_ID);
	                pick_bb(data.BB_ID);
	                pick_loc(data.LOC_ID);
	                pick_plc(data.PLC_ID);
	                pick_curr(data.CURR_ID);
	                costapp(id);
	                termapp(id);
	                ijinapp(id);
	                pick_apprbrcedit(data.APPR_BRANCHID);
	                $('#modal_appr_edit').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_apprchk(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {
	            	$('[name="appr_id"]').val(data.APPR_ID);
	            	$('[name="appr_code"]').val(data.APPR_CODE);
	            	$('[name="appr_id"]').val(data.APPR_ID);
	                $('[name="appr_brcid"]').val(data.APPR_BRANCHID);
	                $('[name="appr_brc"]').val(data.APPR_BRANCH);
	                $('[name="appr_po"]').val(data.APPR_PO);
	                $('[name="tgl_awal"]').val(data.APPR_CONTRACT_START);
	                $('[name="tgl_akhir"]').val(data.APPR_CONTRACT_END);
	                $('[name="appr_rec"]').val(data.APPR_RECOV);
	                $('[name="appr_vis"]').val(data.APPR_VISUAL);
	                $('[name="appr_length"]').val(data.APPR_LENGTH);
	                $('[name="appr_width"]').val(data.APPR_WIDTH);
	                $('[name="appr_height"]').val(data.APPR_HEIGHT);
	                $('[name="appr_sumsize"]').val(data.APPR_SUMSIZE);
	                $('[name="appr_side"]').val(data.APPR_SIDE);
	                $('[name="appr_plcsum"]').val(data.APPR_PLCSUM);
	                $('[name="appr_info"]').val(data.APPR_INFO);
	                $('[name="dpp"]').val(data.APPR_DPP_INCOME);
	                $('[name="discp1"]').val(data.APPR_DISC_PERC1);
	                $('[name="discp2"]').val(data.APPR_DISC_PERC2);
	                $('[name="appr_bbtax"]').val(data.APPR_BBTAX);
	                $('[name="ppnp"]').val(data.APPR_PPN_PERC);
	                $('[name="pphp"]').val(data.APPR_PPH_PERC);
	                pick_cust(data.CUST_ID);
	                pick_mkt(data.SALES_ID);
	                pick_bb(data.BB_ID);
	                pick_loc(data.LOC_ID);
	                pick_plc(data.PLC_ID);
	                pick_curr(data.CURR_ID);
	                costapp_(id);
	                termapp_(id);
	                ijinapp_(id);
	                pick_init(data.BRANCH_ID);
	                pick_apprbrcedit(data.APPR_BRANCHID);
	                $('.btnCh').css({'display':'none'});	                
	                $('#modal_appr_edit').modal('hide');
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_apprapr(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {
	            	$('[name="appr_id"]').val(data.APPR_ID);
	            	$('[name="appr_code"]').val(data.APPR_CODE);
	            	$('[name="appr_id"]').val(data.APPR_ID);
	                $('[name="appr_brcid"]').val(data.APPR_BRANCHID);
	                $('[name="appr_brc"]').val(data.APPR_BRANCH);
	                $('[name="appr_po"]').val(data.APPR_PO);
	                $('[name="tgl_awal"]').val(data.APPR_CONTRACT_START);
	                $('[name="tgl_akhir"]').val(data.APPR_CONTRACT_END);
	                $('[name="appr_rec"]').val(data.APPR_RECOV);
	                $('[name="appr_vis"]').val(data.APPR_VISUAL);
	                $('[name="appr_length"]').val(data.APPR_LENGTH);
	                $('[name="appr_width"]').val(data.APPR_WIDTH);
	                $('[name="appr_height"]').val(data.APPR_HEIGHT);
	                $('[name="appr_sumsize"]').val(data.APPR_SUMSIZE);
	                $('[name="appr_side"]').val(data.APPR_SIDE);
	                $('[name="appr_plcsum"]').val(data.APPR_PLCSUM);
	                $('[name="appr_info"]').val(data.APPR_INFO);
	                $('[name="dpp"]').val(data.APPR_DPP_INCOME);
	                $('[name="discp1"]').val(data.APPR_DISC_PERC1);
	                $('[name="discp2"]').val(data.APPR_DISC_PERC2);
	                $('[name="appr_bbtax"]').val(data.APPR_BBTAX);
	                $('[name="ppnp"]').val(data.APPR_PPN_PERC);
	                $('[name="pphp"]').val(data.APPR_PPH_PERC);
	                pick_cust(data.CUST_ID);
	                pick_mkt(data.SALES_ID);
	                pick_bb(data.BB_ID);
	                pick_loc(data.LOC_ID);
	                pick_plc(data.PLC_ID);
	                pick_curr(data.CURR_ID);
	                costapp_(id);
	                termapp_(id);
	                ijinapp_(id);
	                pick_init(data.BRANCH_ID);
	                pick_apprbrcedit(data.APPR_BRANCHID);
	                $('#modal_appr_edit').modal('hide');
	                $('.btnCh').css({'display':'none'});
	                $('.btnApr').prop('disabled',false);
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function pick_apprbrcedit(id)
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Searchdata/pick_apprbranch/')?>" + id,
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {
	            	$('[name="appr_brcid"]').val(data.APPR_ID);
	            	$('[name="appr_brc"]').val(data.APPR_CODE+' '+data.BRANCH_INIT);
	            	$('[name="brc_nom"]').val(data.APPR_DPP_INCOME);
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    	function tes()
    	{
	        $.ajax({
	            url : "<?php echo site_url('administrator/Marketing/tes')?>",
	            type: "GET",
	            dataType: "JSON",
	            success: function(data)
	            {   
	                alert(data.tes);
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
    </script>
</body>
</html>