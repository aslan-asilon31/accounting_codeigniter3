<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bank Keluar</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_bank_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_bank_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_bank_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_bank_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myKas" data-toggle="tab">Bank Keluar</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_bank">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="myKas">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Bank Keluar</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Bank Keluar</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_bankout()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="bank_nomor" readonly>
                                            <input type="hidden" value='0' class="form-control" name="bank_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control input-group-addon" name="bank_tgl" value="<?= date('Y-m-d')?>"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kode Bank</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_bank()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="bank_kode" readonly>
                                            <input type="hidden" value='9' class="form-control" name="kode_bank">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Akun Kredit</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_acc('1')"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="bank_acc" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="bank_acc_info" readonly>
                                            <input class="form-control" type="hidden" name="acc_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. Approval</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_appr()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="bank_nomor_approval" readonly>
                                            <input class="form-control" type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_loc()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="bank_loc" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                            <input class="form-control" type="hidden" name="loc_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Supplier</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_supp()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="bank_kode_supplier" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="bank_nama_supplier" readonly>
                                            <input class="form-control" type="hidden" name="supp_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="bank_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_dept()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="bank_dept">
                                            <input type="hidden" name="dept_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. Anggaran</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_anggaran()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="bank_anggaran">
                                            <input class="form-control" type="hidden" name="anggaran_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. Faktur Pajak</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="head_taxnumber">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="taxnumber">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mata Uang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="curr_name" readonly>
                                            <input type="hidden" name="curr_id" value="0">
                                            <input type="hidden" name="curr_rate" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Giro</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hidegiro_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hidegiro_()" id="det_radio1" name="det_radio">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_giro" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="bank_type1">
                                                    <option value="G">Giro</option>
                                                    <option value="T">Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No. Giro/Transfer</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bank_no_giro1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal</label>
                                            <div class="col-sm-7">
                                                <div class='input-group date dtp' id='dtp1'>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                    <input type='text' class="form-control input-group-addon" name="bank_giro_tgl" value="<?= date('Y-m-d')?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control curr-num-perc" type="text" name="nominal1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_bank_out_detail1()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_bank_out_detail1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">No. Giro/Transfer</th>
                                                            <th class="text-center">Tgl Giro</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control curr-num-perc" name="grand_total_" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Bank Keluar</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hidebm_()" id="det_radioa0" name="det_radioa">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hidebm_()" id="det_radioa1" name="det_radioa">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_bankkeluar" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Akun</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_acc2('2')"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="acc_detail" readonly>
                                                <input class="form-control" type="hidden" name="acc_id_detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" name="bank_type2">
                                                    <option value="G">Giro</option>
                                                    <option value="T">Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No. Giro/Transfer</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bank_no_giro2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Reff</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_prc()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="no_beli">
                                                <input type="hidden" name="id_beli">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan</label>
                                            <div class="col-sm-7">
                                                <textarea name="ket_detail" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input class="form-control curr-num-perc" type="text" name="nominal2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_bank_out_detail2()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_bank_out_detail2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Akun</th>
                                                            <th class="text-center">Tipe</th>
                                                            <th class="text-center">No Giro/Transfer</th>
                                                            <th class="text-center">Reff</th>
                                                            <th class="text-center">Keterangan</th>
                                                            <th class="text-center">Nominal</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control curr-num-perc" name="grand_total" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_bank_out()" class="btn btn-block btn-primary btn-default btnCh">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Simpan
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="printPre()" class="btn btn-block btn-info btn-default">
                                                <span class="glyphicon glyphicon-print"></span>
                                                Cetak
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="approve_bank_out()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapprove_bank_out()" class="btn btn-block btn-primary btnApr" disabled>
                                                Disapprove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="modal_bank_out_edit" name="modal_bank_out_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_bank_out_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Bank Keluar</th>
                                        <th>Nama Account</th>
                                        <th>Tanggal</th>  
                                        <th>Keterangan</th>                                      
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
     <!-- Modal Account -->
    <div class="modal fade" id="modal_account" name="modal_account" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                            <table id="dtb_acc" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Kode Bank -->
    <div class="modal fade" id="modal_bank" name="modal_bank" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div class="maxh">
                            <table id="dtb_bank" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Approval -->
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
                                        <th>Nomor Approval</th>
                                        <th>Kode Lokasi</th>
                                        <th>Alamat</th>
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
     <!-- Modal Supplier Search -->
    <div class="modal fade" id="modal_supplier" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_supp" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No.Tlp</th>
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
    <!-- Modal Departemen Search -->
    <div class="modal fade" id="modal_dept" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_dept" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
    <!-- Modal Currency -->
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
    <!-- Modal Anggaran Search -->
    <div class="modal fade" id="modal_anggaran" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_anggaran" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tanggal</th>
                                        <th>Nomor Approval</th>
                                        <th>Nama Lokasi</th>
                                        <th>Alamat Lokasi</th>
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
    <!-- Modal Pembelian Search -->
    <div class="modal fade" id="modal_pembelian" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h4>Pembelian Logistik</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_pembelian" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Beli</th>
                                        <th>Nomor PO</th>
                                        <th>Nomor Invoice</th>
                                        <th>Tanggal</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h4>Pembelian GA</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_pembelian_ga" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Beli</th>
                                        <th>Nomor PO</th>
                                        <th>Nomor Invoice</th>
                                        <th>Tanggal</th>
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
    <!-- Modal Lokasi -->
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            $('#det_radio0').prop('checked',true);
            $('#det_radioa0').prop('checked',true);
            $('#myDIV1').css({'display':'none'});
            $('#myDIV2').css({'display':'none'});
            $('[name="bank_no_giro1"]').on('input',function(){
                $('[name="bank_no_giro2"]').val($('[name="bank_no_giro1"]').val());
            });
            $('[name="bank_no_giro2"]').on('input',function(){
                $('[name="bank_no_giro1"]').val($('[name="bank_no_giro2"]').val());
            });
            $('[name="nominal1"]').on('input',function(){
                $('[name="nominal2"]').val($('[name="nominal1"]').val());
            });
            var id = $('[name="bank_id"]').val();
            bank_keluar_detail1(id);
            bank_keluar_detail2(id);
            gen_total(id);
            gen_total_(id);
        })
        function hidebm_()
        {
            if($('#det_radioa1').is(':checked'))
            {
                $('#det_bankkeluar').css({'display':'none'});
            }
            if($('#det_radioa0').is(':checked'))
            {
                $('#det_bankkeluar').css({'display':'block'});
            }
        }
        function hidegiro_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_giro').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_giro').css({'display':'block'});
            }
        }
        var sts;
        function edit_sch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (sts=='1')
                    {
                        $('[name="bank_acc"]').val(data.COA_ACC);
                        $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                        $('[name="acc_id"]').val(data.COA_ID);
                    }
                    else
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    }
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function gen_bankout()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_bankout')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bank_id"]').val(data.id);
                    $('[name="bank_nomor"]').val(data.kode);
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function gen_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_total_bankout/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="grand_total"]').val(data.TOTAL);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function gen_total_(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_total_banktrxout/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="grand_total_"]').val(data.TOTAL);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Kas Masuk');
                }
            });
        }
        function edit_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_kode"]').val(data.BANK_CODE);
                    $('[name="bank_id"]').val(data.BANK_ID);
                    $('#modal_bank').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_anggaran()
        {
            $('#modal_anggaran').modal('show');
            $('.modal-title').text('Cari Anggaran');
            table = $('#dtb_anggaran').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_anggaran')?>",
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
        function pick_anggaran(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_anggaran/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="anggaran_id"]').val(data.BUD_ID);
                    $('[name="bank_anggaran"]').val(data.BUD_CODE);
                    $('#modal_anggaran').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_acc()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coa_bank')?>",
                    // "url": "<?php echo site_url('administrator/Searchdata/srch_coabybrc')?>",
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
        function pick_coabank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="bank_acc"]').val(data.COA_ACC);
                    $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                    $('[name="acc_id"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_acc2()
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Cari Account');
            table = $('#dtb_acc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coabybrc')?>",
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
        function pick_coagb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="acc_detail"]').val(data.COA_ACC +" - "+data.COA_ACCNAME);
                    $('[name="acc_id_detail"]').val(data.COA_ID);
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_acc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_acc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {       
                    if (sts=='1')
                    {
                        $('[name="bank_acc"]').val(data.COA_ACC);
                        $('[name="bank_acc_info"]').val(data.COA_ACCNAME);
                        $('[name="acc_id"]').val(data.COA_ID);
                    }
                    else
                    {
                        $('[name="acc_detail"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
                        $('[name="acc_id_detail"]').val(data.COA_ID);
                    }
                    $('#modal_account').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_bank()
        {
            $('#modal_bank').modal('show');
            $('.modal-title').text('Cari Bank');
            table = $('#dtb_bank').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_bank')?>",
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
        function pick_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="bank_kode"]').val(data.BANK_CODE+' - '+data.BANK_NAME);
                    $('[name="kode_bank"]').val(data.BANK_ID);
                    $('#modal_bank').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_gd(t)
        {
            $('#modal_account').modal('show');
            $('.modal-title').text('Daftar Account');
            sts=t;
        }
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
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_appr')?>",
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
        function pick_appr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="bank_nomor_approval"]').val(data.APPR_CODE);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_supp(t)
        {
            $('#modal_supplier').modal('show');
            $('.modal-title').text('Daftar Supplier');
        }
        function srch_dept()
        {
            $('#modal_dept').modal('show');
            $('.modal-title').text('Cari Departemen');
            table = $('#dtb_dept').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_dept')?>",
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
        function pick_dept(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_dept/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="dept_id"]').val(data.DEPT_ID);
                    $('[name="bank_dept"]').val(data.DEPT_CODE);
                    $('#modal_dept').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_supp(id)
        {
            $('#modal_supplier').modal('show');
            $('.modal-title').text('Cari Supplier');
            table = $('#dtb_supp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_supp')?>",
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
        function pick_supp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_supp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="bank_kode_supplier"]').val(data.SUPP_CODE);
                    $('[name="bank_nama_supplier"]').val(data.SUPP_NAME);
                    $('#modal_supplier').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_prc()
        {
            $('#modal_pembelian').modal('show');
            $('.modal-title').text('Cari Pembelian');
            var id = $('[name="supp_id"]').val();
            table = $('#dtb_pembelian').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "pageLength": 5,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_prc/')?>" + id,
                    "type": "POST",
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
            table2 = $('#dtb_pembelian_ga').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "pageLength": 5,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcgabysupp/')?>"+id,
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
        function pick_prc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_prc/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="no_beli"]').val(data.PRC_CODE);
                    $('[name="nominal2"]').val(data.PRC_GTOTAL);
                    $('[name="id_beli"]').val(data.PRC_ID);
                    $('#modal_pembelian').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_prcgabysupp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_prcgabysupp/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="no_beli"]').val(data.PRCGA_CODE);
                    $('[name="nominal2"]').val(data.PRCGA_GTOTAL);
                    $('[name="id_beli"]').val(data.PRCGA_ID);
                    $('#modal_pembelian').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function myFunction(id) 
        {
            if (id=='1')
            {
                var x = document.getElementById("myDIV1");
                if (x.style.display === "none")
                {
                    x.style.display = "block";
                }
                else
                {
                    x.style.display = "none";
                }
            }
            else
            {
                var x = document.getElementById("myDIV2");
                if (x.style.display === "none")
                {
                    x.style.display = "block";
                }
                else
                {
                    x.style.display = "none";
                }
            }
        }
        function bank_keluar_detail1(id)
        {
            table = $('#dtb_bank_out_detail1').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_trxbankout')?>/"+id,
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
        function bank_keluar_detail2(id)
        {
            table = $('#dtb_bank_out_detail2').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_bankout')?>/"+id,
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
        function curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if (data.CURR_RATE=='NULL')
                    {
                        $('[name="kas_kurs"]').val('')
                    }
                    else
                    {
                        $('[name="bank_kurs"]').val(data.CURR_RATE);
                        $('[name="curr_id"]').val(data.CURR_ID);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
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
                    "url": "<?php echo site_url('administrator/Finance/ajax_srch_curr')?>",
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
        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_id"]').val(data.CURR_ID);
                    $('[name="curr_name"]').val(data.CURR_NAME);
                    $('[name="curr_rate"]').val(data.CURR_RATE);
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
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
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_loc')?>",
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
        function pick_loc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="loc_id"]').val(data.LOC_ID);
                    $('[name="bank_loc"]').val(data.LOC_NAME+' - '+data.LOC_ADDRESS+', '+data.LOC_CITY);
                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printPre()
        {
            var ids = $('[name=bank_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_bk/')?>"+ids,'_blank');
        }
        function save_bank_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_out')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');                        
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function approve_bank_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_approve_bank_out')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bank_out')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disapprove_bank_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_disapprove_bank_out')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/bank_out')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_bank_out_detail1()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_out_detail1')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');   
                        var id = $('[name="bank_id"]').val();
                        bank_keluar_detail1(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_bank_out_detail2()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_bank_out_detail2')?>",
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        var id = $('[name="bank_id"]').val();
                        bank_keluar_detail2(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function bank_keluar_detail1(id)
        {
            table = $('#dtb_bank_out_detail1').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_trxbankout')?>/"+id,
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
        function bank_keluar_detail2(id)
        {
            table = $('#dtb_bank_out_detail2').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_bankout')?>/"+id,
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
        function delete_bankouttrxdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_bank_out_detail1')?>/"+id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');
                        var id = $('[name="bank_id"]').val();
                        bank_keluar_detail1(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function delete_bankoutdet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_bank_out_detail2')?>/"+id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');
                        var id = $('[name="bank_id"]').val();
                        bank_keluar_detail2(id);
                        gen_total(id);
                        gen_total_(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function edit_bank_out()
        {
            $('#modal_bank_out_edit').modal('show');
            $('.modal-title').text('Cari Bank Keluar');
            table = $('#dtb_bank_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_out_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_branch"]').val();
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
        function open_bank_out()
        {
            $('#modal_bank_out_edit').modal('show');
            $('.modal-title').text('Cari Bank Keluar');
            table = $('#dtb_bank_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_out_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
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
        function check_bank_out()
        {
            $('#modal_bank_out_edit').modal('show');
            $('.modal-title').text('Cari Bank Keluar');
            table = $('#dtb_bank_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_out_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
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
        function apr_bank_out()
        {
            $('#modal_bank_out_edit').modal('show');
            $('.modal-title').text('Cari Bank Keluar');
            table = $('#dtb_bank_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_bank_out_bysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_branch"]').val();
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
        function pick_bankoutopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_bankout/')?>" + id,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Bank Keluar Sukses Dibuka');
                        $('#modal_bank_out_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Bank Masuk masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankoutedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNKO_ID);
                    $('[name="bank_nomor"]').val(data.BNKO_CODE);
                    $('[name="bank_tgl"]').val(data.BNKO_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    pick_appr(data.BNKO_APPR);
                    pick_supp(data.BNKO_SUPP);
                    pick_loc(data.BNKO_LOC);
                    $('[name="bank_info"]').val(data.BNKO_INFO);
                    pick_dept(data.DEPT_ID);
                    $('[name="bank_anggaran"]').val(data.BNKO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.BNKO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.BNKO_TAXCODE);
                    pick_curr(data.CURR_ID)
                    bank_keluar_detail1(data.BNKO_ID);
                    bank_keluar_detail2(data.BNKO_ID);
                    gen_total(data.BNKO_ID);
                    gen_total_(data.BNKO_ID);
                    $('#modal_bank_out_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankoutchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNKO_ID);
                    $('[name="bank_nomor"]').val(data.BNKO_CODE);
                    $('[name="bank_tgl"]').val(data.BNKO_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    pick_appr(data.BNKO_APPR);
                    pick_supp(data.BNKO_SUPP);
                    pick_loc(data.BNKO_LOC);
                    $('[name="bank_info"]').val(data.BNKO_INFO);
                    pick_dept(data.DEPT_ID);
                    $('[name="bank_anggaran"]').val(data.BNKO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.BNKO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.BNKO_TAXCODE);
                    pick_curr(data.CURR_ID)
                    bank_keluar_detail1(data.BNKO_ID);
                    bank_keluar_detail2(data.BNKO_ID);
                    gen_total(data.BNKO_ID);
                    gen_total_(data.BNKO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_bank_out_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_bankoutapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bankoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_bank')[0].reset();
                    $('[name="bank_id"]').val(data.BNKO_ID);
                    $('[name="bank_nomor"]').val(data.BNKO_CODE);
                    $('[name="bank_tgl"]').val(data.BNKO_DATE);
                    pick_bank(data.BANK_ID);
                    sts=1;
                    pick_acc(data.COA_ID);
                    pick_appr(data.BNKO_APPR);
                    pick_supp(data.BNKO_SUPP);
                    pick_loc(data.BNKO_LOC);
                    $('[name="bank_info"]').val(data.BNKO_INFO);
                    pick_dept(data.DEPT_ID);
                    $('[name="bank_anggaran"]').val(data.BNKO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.BNKO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.BNKO_TAXCODE);
                    pick_curr(data.CURR_ID)
                    bank_keluar_detail1(data.BNKO_ID);
                    bank_keluar_detail2(data.BNKO_ID);
                    gen_total(data.BNKO_ID);
                    gen_total_(data.BNKO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_bank_out_edit').modal('hide');
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