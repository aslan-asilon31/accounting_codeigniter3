<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Invoice</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_inv()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_inv()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_inv()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_inv()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Data Invoice</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_inv">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="1">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Invoice</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Form</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" name="inv_typechk" value="0" onclick="redrop()">Invoice</label>
                                            <label class="radio-inline"><input type="radio" name="inv_typechk" value="1" onclick="redrop()">Pajak Reklame</label> 
                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Invoice</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_invo()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="inv_code" readonly>
                                            <input type="hidden" name="inv_id" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="jou_date" type='text' class="form-control input-group-addon" name="inv_date" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Invoice</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_invtype()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="inv_typename" readonly>
                                            <input type="hidden" name="inv_typeid">
                                            <input type="hidden" name="inv_accrcvid">
                                            <input type="hidden" name="inv_accincid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Rek. Pendapatan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="inv_incacc" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Rek. Piutang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="inv_rcvacc" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Client</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_cust()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="inv_cust" readonly>
                                            <input type="hidden" name="inv_custid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info Client</label>
                                        <div class="col-sm-8">
                                            <textarea name="inv_custinfo" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Termin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="inv_terms">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea name="inv_info" class="form-control" rows="2" style="resize: vertical;"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mata Uang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_curr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="inv_curr" readonly>
                                            <input type="hidden" name="inv_currid" value="0">
                                            <input type="hidden" name="inv_currrate" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Faktur Pajak</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="inv_taxhead">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="inv_taxcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Detail Approval</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="check_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="check_()" id="det_radio1" name="det_radio">Sembunyikan</label> 
                                        </div>
                                    </div>
                                    <div id="det_approval" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No Approval</label>
                                            <div class="col-sm-2">
                                                <a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="inv_apprcode" readonly>
                                                <input type="hidden" name="inv_apprid" value="0">
                                                <input type="hidden" name="inv_apprbrcid" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No PO</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" name="inv_apprpo" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Lokasi</label>
                                            <div class="col-sm-7">
                                                <textarea name="inv_apprloc" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Termin</label>
                                            <div class="col-sm-7">
                                                <select class="form-control text-center" name="inv_term" id="inv_term" data-live-search="true">
                                                    <option>Pilih</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="inv_termcode">
                                            <input type="hidden" name="inv_termppn">
                                            <input type="hidden" name="inv_termpph">
                                            <input type="hidden" name="inv_termsub">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon curr">Rp</span>
                                                    <input class="form-control curr-num chgcount" type="text" name="invdet_sub" >
                                                </div>                                          
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Termin Cabang</label>
                                            <div class="col-sm-7">
                                                <select class="form-control text-center" name="inv_termbrc" id="inv_termbrc" data-live-search="true">
                                                    <option>Pilih</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="inv_termbrccode">
                                            <input type="hidden" name="inv_termppnbrc">
                                            <input type="hidden" name="inv_termpphbrc">
                                            <input type="hidden" name="inv_termsubbrc">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal Cabang</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon curr">Rp</span>
                                                    <input class="form-control curr-num chgcount" type="text" name="invdet_brcsub" >
                                                </div>                                          
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="add_invdet()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_invdet" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                No
                                                            </th>
                                                            <th class="text-center">
                                                                Approval
                                                            </th>
                                                            <th class="text-center">
                                                                Lokasi
                                                            </th>
                                                            <th class="text-center">
                                                                PO
                                                            </th>
                                                            <th class="text-center">
                                                                Termin
                                                            </th>
                                                            <th class="text-center">
                                                                Nominal
                                                            </th>                       
                                                            <th class="text-center">
                                                                Actions
                                                            </th>
                                                        </tr>                            
                                                    </thead>                        
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <h4>Approval Data</h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Sub Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_subappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPN</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_ppnappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPH</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_pphappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Grand Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_gtotappr" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <h4>Approval Cabang</h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Sub Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_subapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPN</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_ppnapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">PPH</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_pphapprbrc" readonly>
                                                    </div>       
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Grand Total</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon curr">Rp</span>
                                                        <input class="form-control curr-num" type="text" name="inv_gtotapprbrc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_inv()" class="btn btn-block btn-primary btn-default btnCh">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Simpan
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="print_inv()" class="btn btn-block btn-info btn-default">
                                                <span class="glyphicon glyphicon-print"></span>
                                                Cetak
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="approve_inv()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapr_inv()" class="btn btn-block btn-primary btnApr" disabled>
                                                Disapprove
                                            </button>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="test()" class="btn btn-block btn-primary btn-default">Simpan</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Modal Search -->
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
    <div class="modal fade" id="modal_invtype" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_invtype" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th class="col-sm-4">Acc Piutang</th>
                                        <th class="col-sm-4">Acc Pendapatan</th>   
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
    <div class="modal fade" id="modal_branch" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_branch" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
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
    <div class="modal fade" id="modal_inv_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_inv_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Invoice</th>
                                        <th>Jenis Inv.</th>
                                        <th>Tanggal</th>
                                        <th>Client</th>
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
            $('[name="inv_typechk"][value="0"]').prop('checked',true);
            check_();
            inputchg();
            $('select').selectpicker({});
            $('#inv_term').change(function(){
                termnom($('#inv_term option:selected').val());
            });
            $('#inv_termbrc').change(function(){
                termbrcnom($('#inv_termbrc option:selected').val());
            });
        })
        function check_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_approval').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_approval').css({'display':'block'});
            }
            invdet($('[name="inv_id"]').val());
        }
        function gen_invo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_invo')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_id"]').val(data.id);
                    $('[name="inv_code"]').val(data.kode);
                    invdet(data.id);
                    get_sub();
                    $('#genbtn').attr('disabled',true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Nomor Approval');
                }
            });
        }
        function checkradio()
        {
            var n = $('[name="inv_typechk"]:checked').val();
            return n;
        }
        function save_inv()
        {
            var n = checkradio();
            if(n != null)
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/save_inv')?>",
                    type: "POST",
                    data: $('#form_inv').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Disimpan');
                            invdet($('[name="inv_id"]').val());
                            get_sub();
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
            else
            {
                alert('Jenis Form Belum Dipilih');
            }
        }
        function approve_inv()
        {
            var n = checkradio();
            if(n != null)
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/approve_inv')?>",
                    type: "POST",
                    data: $('#form_inv').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            var url = "<?php echo site_url('administrator/Finance/fin_invoice')?>";
                            window.location = url;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }
            else
            {
                alert('Jenis Form Belum Dipilih');
            }
        }
        function disapr_inv()
        {
            var n = checkradio();
            if(n != null)
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/disapprove_inv')?>",
                    type: "POST",
                    data: $('#form_inv').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            var url = "<?php echo site_url('administrator/Finance/fin_invoice')?>";
                            window.location = url;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }
            else
            {
                alert('Jenis Form Belum Dipilih');
            }
        }
        function print_inv()
        {
            var n = checkradio();
            if(n != null)
            {
                if(n == '0')
                {
                    var id = $('[name=inv_id]').val();
                    window.open ( "<?php echo site_url('administrator/Finance/print_invoice/')?>"+id,'_blank');
                }
                if(n == '1')
                {
                    var id = $('[name=inv_id]').val();
                    window.open ( "<?php echo site_url('administrator/Finance/print_invoicetax/')?>"+id,'_blank');
                }
            }
            else
            {
                alert('Jenis Form Belum Dipilih');
            }
        }
    </script>
    <!-- Search -->
    <script>
        function srch_invtype()
        {
            $('#modal_invtype').modal('show');
            $('.modal-title').text('Cari Jenis Invoice');            
            table = $('#dtb_invtype').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invtype')?>",
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
        function srch_appr()
        {
            var id = $('[name="inv_custid"]').val();
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
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprbyclientbrc/')?>"+id,
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
        function srch_brc()
        {
            $('#modal_branch').modal('show');
            $('.modal-title').text('Cari Cabang');            
            table = $('#dtb_branch').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_branch')?>",
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
        function edit_inv()
        {
            $('#modal_inv_edit').modal('show');
            $('.modal-title').text('Cari Invoice');
            table = $('#dtb_inv_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbysts')?>",
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
        function open_inv()
        {
            $('#modal_inv_edit').modal('show');
            $('.modal-title').text('Cari Invoice');            
            table = $('#dtb_inv_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbysts')?>",
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
        function check_inv()
        {
            $('#modal_inv_edit').modal('show');
            $('.modal-title').text('Cari Invoice');            
            table = $('#dtb_inv_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbysts')?>",
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
        function apr_inv()
        {
            $('#modal_inv_edit').modal('show');
            $('.modal-title').text('Cari Invoice');            
            table = $('#dtb_inv_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_invbysts')?>",
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
    </script>
    <!-- Pick -->
    <script>
        function pick_invtype(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invtype/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_typeid"]').val(data.INC_ID);
                    $('[name="inv_typename"]').val(data.INC_CODE+' - '+data.INC_NAME);
                    $('[name="inv_incacc"]').val(data.INC_ACCINCNAME);
                    $('[name="inv_rcvacc"]').val(data.INC_ACCRCVNAME);
                    $('[name="inv_accrcvid"]').val(data.INC_ACCRCV);
                    $('[name="inv_accincid"]').val(data.INC_ACCINC);
                    $('#modal_invtype').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_branchid"]').val(data.BRANCH_ID);
                    $('[name="inv_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cust(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cust/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="inv_custid"]').val(data.CUST_ID);
                    $('[name="inv_cust"]').val(data.CUST_NAME);
                    $('[name="inv_custinfo"]').val('NPWP : '+data.CUST_NPWPACC+'\n'+'NPPKP : '+data.CUST_NPKP);
                    $('#modal_cust').modal('hide');
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
                    $('[name="inv_apprloc"]').val(data.LOC_NAME+', '+data.LOC_ADDRESS+', '+data.LOC_CITY);
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
                    $('[name="inv_currid"]').val(data.CURR_ID);
                    $('[name="inv_curr"]').val(data.CURR_NAME);
                    $('[name="inv_currrate"]').val(data.CURR_RATE);
                    $('.curr').text(data.CURR_SYMBOL);
                    hit_curr();
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_apprbyclient(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="inv_apprid"]').val(data.APPR_ID);
                    // $('[name="inv_apprbrcid"]').val(data.APPR_BRANCH);
                    $('[name="inv_apprcode"]').val(data.APPR_CODE);
                    $('[name="inv_apprpo"]').val(data.APPR_PO);
                    pick_loc(data.LOC_ID);
                    var appr = data.APPR_ID;
                    var apprbrc = data.APPR_BRANCHID;
                    if(appr == null)
                    {
                        appr = '0';
                    }
                    if(apprbrc == null)
                    {
                        apprbrc = '0';
                    }
                    $('[name="inv_apprid"]').val(appr);
                    $('[name="inv_apprbrcid"]').val(apprbrc);
                    drop_term(appr);
                    drop_termbrc(apprbrc);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_taxinv(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_taxinv/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_taxhead"]').val(data.TINV_TAXHEADCODE);
                    $('[name="inv_taxcode"]').val(data.TINV_TAXCODE);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_invopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_inv/')?>" + id,
                type: "POST",
                data: $('#form_inv').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Invoice Sukses Dibuka');
                        $('#modal_inv_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Invoice masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_invedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_id"]').val(data.INV_ID);
                    $('[name="inv_code"]').val(data.INV_CODE);
                    $('[name="inv_date"]').val(data.INV_DATE);
                    $('[name="inv_typechk"][value="'+data.INV_TYPE+'"]').prop('checked',true);
                    pick_invtype(data.INC_ID);
                    pick_branch(data.BRANCH_ID);
                    pick_cust(data.CUST_ID);
                    $('[name="inv_terms"]').val(data.INV_TERM);
                    $('[name="inv_info"]').val(data.INV_INFO);
                    pick_curr(data.CURR_ID);
                    pick_taxinv(data.INV_ID);
                    invdet(data.INV_ID);
                    get_sub();
                    $('#modal_inv_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_invchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_id"]').val(data.INV_ID);
                    $('[name="inv_code"]').val(data.INV_CODE);
                    $('[name="inv_typechk"][value="'+data.INV_TYPE+'"]').prop('checked',true);
                    pick_invtype(data.INC_ID);
                    pick_branch(data.BRANCH_ID);
                    pick_cust(data.CUST_ID);
                    $('[name="inv_terms"]').val(data.INV_TERM);
                    $('[name="inv_info"]').val(data.INV_INFO);
                    pick_curr(data.CURR_ID);
                    pick_taxinv(data.INV_ID);
                    invdet_(data.INV_ID);
                    get_sub();
                    $('.btnCh').css({'display':'none'});
                    $('#modal_inv_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_invapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_invgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_id"]').val(data.INV_ID);
                    $('[name="inv_code"]').val(data.INV_CODE);
                    $('[name="inv_typechk"][value="'+data.INV_TYPE+'"]').prop('checked',true);
                    pick_invtype(data.INC_ID);
                    pick_branch(data.BRANCH_ID);
                    pick_cust(data.CUST_ID);
                    $('[name="inv_terms"]').val(data.INV_TERM);
                    $('[name="inv_info"]').val(data.INV_INFO);
                    pick_curr(data.CURR_ID);
                    pick_taxinv(data.INV_ID);
                    invdet_(data.INV_ID);
                    get_sub();
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_inv_edit').modal('hide');                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Dropdown -->
    <script>
        function drop_term(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Finance/get_apprterm/')?>"+id,
            type: "POST",
            data: $('#form_inv').serialize(),
            dataType: "JSON",
            success: function(data)
                {
                    $('#inv_term').empty();
                    var select = document.getElementById('inv_term');
                    var option;                    
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["TERMSDET_ID"]
                        option.text = data[i]["TERMSDET_CODE"]+' - '+data[i]["TERMSDET_INFO"];
                        select.add(option);
                    }
                    $('#inv_term').selectpicker({});
                    $('#inv_term').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function drop_termbrc(id)
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Finance/get_apprtermbrc/')?>"+id,
            type: "POST",
            data: $('#form_inv').serialize(),
            dataType: "JSON",
            success: function(data)
                {
                    $('#inv_termbrc').empty();
                    var select = document.getElementById('inv_termbrc');
                    var option;                    
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["TERMSDET_ID"]
                        option.text = data[i]["TERMSDET_CODE"]+' - '+data[i]["TERMSDET_INFO"];
                        select.add(option);
                    }
                    $('#inv_termbrc').selectpicker({});
                    $('#inv_termbrc').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Other -->
    <script>
        function reload_table()
        {
            $('#dtb_invdet').DataTable().ajax.reload(null,false);
        }
        function redrop()
        {
            var appr = $('[name="inv_apprid"]').val();
            var apprbrc = $('[name="inv_apprbrcid"]').val();
            if(appr == null)
            {
                appr = '0';
            }
            if(apprbrc == null)
            {
                apprbrc = '0';
            }
            drop_term(appr);
            drop_termbrc(apprbrc);
        }
        function invdet(id)
        {
            table = $('#dtb_invdet').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_invoice/')?>"+id,
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
        function invdet_(id)
        {
            table = $('#dtb_invdet').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_invoice_/')?>"+id,
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
        function add_invdet()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/add_invdet')?>",
                type: "POST",
                data: $('#form_inv').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        // invdet($('[name="inv_id"]').val());
                        reload_table();
                        get_sub();
                        var appr = $('[name="inv_apprid"]').val();
                        var apprbrc = $('[name="inv_apprbrcid"]').val();
                        if(appr == '')
                        {
                            appr = '0';
                        }
                        if(apprbrc == '')
                        {
                            apprbrc = '0';
                        }
                        drop_term(appr);
                        drop_termbrc(apprbrc);
                        term_clean_();
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
        function delete_invdet(id)
        {
            if(confirm('Are you sure delete this data?'))
            {               
                $.ajax({
                    url : "<?php echo site_url('administrator/Finance/del_invdet/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        invdet($('[name="inv_id"]').val());
                        get_sub();
                        var appr = $('[name="inv_apprid"]').val();
                        var apprbrc = $('[name="inv_apprbrcid"]').val();
                        if(appr == '')
                        {
                            appr = '0';
                        }
                        if(apprbrc == '')
                        {
                            apprbrc = '0';
                        }
                        drop_term(appr);
                        drop_termbrc(apprbrc);
                        term_clean_();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function termnom(id)
        {
            var n = checkradio();
            if(n != null)
            {
                if(n == '0')
                {
                    $.ajax({
                        url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data)
                        {
                            var nom1 = ($('[name="inv_currrate"]').val()*(Math.abs(data.TERMSDET_DPP)+Math.abs(data.TERMSDET_PPN_SUM)));
                            $('[name="invdet_sub"]').val(nom1);
                            $('[name="inv_termcode"]').val(data.TERMSDET_CODE);
                            $('[name="inv_termsub"]').val(data.TERMSDET_DPP);
                            $('[name="inv_termppn"]').val(data.TERMSDET_PPN_SUM);
                            $('[name="inv_termpph"]').val(data.TERMSDET_PPH_SUM);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Pilih Salah Satu Termin');
                        }
                    });
                }
                if(n == '1') 
                {
                    $.ajax({
                        url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data)
                        {
                            var nom1 = ($('[name="inv_currrate"]').val()*(Math.abs(data.TERMSDET_BBTAX)));
                            $('[name="invdet_sub"]').val(nom1);
                            $('[name="inv_termcode"]').val(data.TERMSDET_CODE);
                            $('[name="inv_termsub"]').val(nom1);
                            $('[name="inv_termppn"]').val(0);
                            $('[name="inv_termpph"]').val(0);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Pilih Salah Satu Termin');
                        }
                    });
                }
            }
            else
            {
                alert('Jenis Form Belum Dipilih');
                redrop();                
            }
        }
        function termbrcnom(id)
        {
            var n = checkradio();
            if(n != null)
            {
                if(n == '0')
                {
                    $.ajax({
                        url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data)
                        {
                            var nom2 = ($('[name="inv_currrate"]').val()*(Math.abs(data.TERMSDET_DPP)+Math.abs(data.TERMSDET_PPH_SUM)+Math.abs(data.TERMSDET_PPN_SUM)));
                            $('[name="invdet_brcsub"]').val(nom2);
                            $('[name="inv_termbrccode"]').val(data.TERMSDET_CODE);
                            $('[name="inv_termsubbrc"]').val(data.TERMSDET_DPP);
                            $('[name="inv_termppnbrc"]').val(data.TERMSDET_PPN_SUM);
                            $('[name="inv_termpphbrc"]').val(data.TERMSDET_PPH_SUM);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Pilih Salah Satu Termin');
                        }
                    });
                }
                if(n == '1')
                {
                    $.ajax({
                        url : "<?php echo site_url('administrator/Finance/get_apprtermnom/')?>" + id,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data)
                        {
                            var nom2 = ($('[name="inv_currrate"]').val()*(Math.abs(data.TERMSDET_BBTAX)));
                            $('[name="invdet_brcsub"]').val(nom2);
                            $('[name="inv_termbrccode"]').val(data.TERMSDET_CODE);
                            $('[name="inv_termsubbrc"]').val(nom2);
                            $('[name="inv_termppnbrc"]').val(0);
                            $('[name="inv_termpphbrc"]').val(0);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Pilih Salah Satu Termin');
                        }
                    });
                }
            }
            else
            {
                alert('Jenis Form Belum Dipilih');
                redrop();
            }
        }
        function hit_curr()
        {
            var curr = $('[name="inv_currrate"]').val();
            var nom1 = $('[name="invdet_sub"]').val();
            var nom2 = $('[name="invdet_brcsub"]').val();
            res1 = curr*nom1;
            res2 = curr*nom2;
            $('[name="invdet_sub"]').val(res1);
            $('[name="invdet_brcsub"]').val(res2);
        }
        function hitung_()
        {
            var ppn = $('[name="inv_termppn"]').val();
            if(ppn > 0)
            {
                var nom1 = $('[name="invdet_sub"]').val();
                dpp1 = nom1/1.1;
                ppn1 = dpp1*0.1;
                $('[name="inv_termsub"]').val(dpp1);
                $('[name="inv_termppn"]').val(ppn1);
                var nom2 = $('[name="invdet_brcsub"]').val();
                dpp2 = nom2/1.1;
                ppn2 = dpp2*0.1;
                $('[name="inv_termsubbrc"]').val(dpp2);
                $('[name="inv_termppnbrc"]').val(ppn2);
            }
            else
            {
                var nom1 = $('[name="invdet_sub"]').val();
                $('[name="inv_termsub"]').val(nom1);
                var nom2 = $('[name="invdet_brcsub"]').val();
                $('[name="inv_termsubbrc"]').val(nom2);
            }
        }
        function inputchg()
        {
            $('.chgcount').on('input', function() {
                hitung_();
            });
        }
        function get_sub()
        {
            var id = $('[name="inv_id"]').val();
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="inv_subappr"]').val(data.sub1);
                    $('[name="inv_ppnappr"]').val(data.ppn1);
                    $('[name="inv_pphappr"]').val(data.pph1);
                    $('[name="inv_gtotappr"]').val(data.gt1);
                    $('[name="inv_subapprbrc"]').val(data.sub2);
                    $('[name="inv_ppnapprbrc"]').val(data.ppn2);
                    $('[name="inv_pphapprbrc"]').val(data.pph2);
                    $('[name="inv_gtotapprbrc"]').val(data.gt2);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('[name="inv_subappr"]').val('');
                    $('[name="inv_ppnappr"]').val('');
                    $('[name="inv_pphappr"]').val('');
                    $('[name="inv_gtotappr"]').val('');
                    $('[name="inv_subapprbrc"]').val('');
                    $('[name="inv_ppnapprbrc"]').val('');
                    $('[name="inv_pphapprbrc"]').val('');
                    $('[name="inv_gtotapprbrc"]').val('');
                }
            });
        }
        function term_clean_()
        {
            $('[name="invdet_sub"]').val('');
            $('[name="inv_termcode"]').val('');
            $('[name="inv_termsub"]').val('');
            $('[name="inv_termppn"]').val('');
            $('[name="inv_termpph"]').val('');
            $('[name="invdet_brcsub"]').val('');
            $('[name="inv_termbrccode"]').val('');
            $('[name="inv_termsubbrc"]').val('');
            $('[name="inv_termppnbrc"]').val('');
            $('[name="inv_termpphbrc"]').val('');
        }
        function test()
        {
            var n = $('[name="inv_typechk"]:checked').val();
            // alert(n);
            // var id = $('[name="inv_id"]').val();
            // var dt = '2018-12-20';
            // var chg = moment(dt).format('DD/MM/YYYY');
            // var apprbrc = '0';
            // if ($('[name="inv_apprbrcid"]').val() != '')
            // {
            //     apprbrc = $('[name="inv_apprbrcid"]').val();
            // }
            // alert(apprbrc);
            // $.ajax({
            //     url : "<?php echo site_url('administrator/Finance/get_subinvdet/')?>"+id,
            //     type: "GET",
            //     dataType: "JSON",
            //     success: function(data)
            //     {                       
            //         $('[name="test"]').text(data.sub1+''+data.sub2);
            //     },
            //     error: function (jqXHR, textStatus, errorThrown)
            //     {
            //         alert('Error get data from ajax');
            //     }
            // });
        }
    </script>
</body>
</html>