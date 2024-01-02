        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kas Keluar</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_cash_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_cash_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_cash_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_cash_out()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#myKas" data-toggle="tab">Kas Keluar</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_kas">
                            <div class="tab-content">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                <div class="tab-pane fade in active" id="myKas">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Kas Keluar</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Kas Keluar</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="gen_cashout()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="kas_nomor" readonly>
                                            <input type="hidden" name="kas_id" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date dtp' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control input-group-addon" name="kas_tgl" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No Akun</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_acc()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="kas_acc" readonly>
                                            <input class="form-control" type="hidden" name="acc_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. Approval</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_appr()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="kas_approval" readonly>
                                            <input type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="kas_lokasi" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="kas_lokasi_ket" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Supplier</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_supp()"><span class="glyphicon glyphicon-search"></span></button>
                                            <input type="hidden" name="supp_id">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="kas_sup" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="kas_sup_ket" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NPWP Supplier</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="kas_sup_npwp" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="kas_keterangan" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_dept()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="kas_dept" readonly>
                                            <input class="form-control" type="hidden" name="dept_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. Anggaran</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_anggaran()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="kas_anggaran" readonly>
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
                                        <label class="col-sm-3 control-label">Detail Kas Keluar</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio0" name="det_radio">Tampilkan</label>
                                            <label class="radio-inline"><input type="radio" onclick="hide_()" id="det_radio1" name="det_radio">Sembunyikan</label>
                                        </div>
                                    </div>
                                    <div id="det_cashout" class="col-sm-offset-3">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">No Akun</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_acc2()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="acc_detail">
                                                <input type="hidden" name="acc_id_detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">No Beli</label>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-info btn-block" onclick="srch_prc()"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" name="no_beli">
                                                <input type="hidden" name="id_beli">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Keterangan</label>
                                            <div class="col-sm-7">
                                                <textarea name="ket_detail" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nominal</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control curr-num-perc" name="nominal">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <a href="javascript:void(0)" onclick="save_cash_out_detail()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 table-responsive">
                                                <table id="dtb_kas_out_detail" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">No Acc</th>
                                                            <th class="text-center">No Beli</th>
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
                                            <a href="javascript:void(0)" onclick="save_cash_out()" class="btn btn-block btn-primary btn-default btnCh">
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
                                            <button type="button" onclick="approve_cash_out()" class="btn btn-block btn-primary btnApr" disabled>
                                                Approve
                                            </button>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="disapprove_cash_out()" class="btn btn-block btn-primary btnApr" disabled>
                                                Disapprove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
     <!-- Modal Account -->
    <div class="modal fade" id="modal_account" name="modal_account" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formku" action="<?php echo base_url('Finance/cash_in') ; ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <!-- <input type="text" class="form-control" name="dept"> -->
                    <div class="row">
                        <!-- <input type="text" name="id_meeting" >
                        <input type="text" name="title" >
                        <input type="text" name="tgl" >
                        <input type="text" name="jam" > -->
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
                <!-- <div class="modal-footer">
                    <button type="button" onclick="kirim_email()" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-send"></span> Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- modal account selesai -->
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
    <!-- modal customer selesai -->
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
    <!-- modal Approval selesai -->
    <!-- Modal Supplier Search -->
    <div class="modal fade" id="modal_supp" role="dialog">
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
    <!-- modal Supplier selesai -->
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
    <!-- modal Supplier selesai -->
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
    <!-- modal Anggaran selesai -->
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
    <!-- modal Pembelian selesai -->
    <!-- Modal Search -->
    <div class="modal fade" id="modal_cash_out_edit" name="modal_cash_out_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_cash_out_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kas Keluar</th>
                                        <th>Nama Supplier</th>
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function() 
        {
            $('#det_radio0').prop('checked',true);
            $('#myDIV').css({'display':'none'});
            var id = $('[name="kas_id"]').val();
            kas_keluar_detail(id);
            gen_total(id);
        })
        function hide_()
        {
            if($('#det_radio1').is(':checked'))
            {
                $('#det_cashout').css({'display':'none'});
            }
            if($('#det_radio0').is(':checked'))
            {
                $('#det_cashout').css({'display':'block'});
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
                        $('[name="kas_acc"]').val(data.COA_ACC);
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
        function gen_cashout()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/gen_cashout')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="kas_id"]').val(data.id);
                    $('[name="kas_nomor"]').val(data.kode);
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
                url : "<?php echo site_url('administrator/Finance/get_total_cashout/')?>"+id,
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
                    "url": "<?php echo site_url('administrator/Searchdata/srch_coa_cash')?>",
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
        function pick_coacash(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_coagb/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="kas_acc"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
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
                        $('[name="kas_acc"]').val(data.COA_ACC +" - "+ data.COA_ACCNAME);
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
                    $('[name="kas_approval"]').val(data.APPR_CODE);
                    pick_location(data.LOC_ID);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_supp()
        {
            $('#modal_supp').modal('show');
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
                    $('[name="kas_sup"]').val(data.SUPP_NAME);
                    $('[name="kas_sup_ket"]').val(data.SUPP_ADDRESS);
                    $('[name="kas_sup_npwp"]').val(data.SUPP_NPWPCODE);
                    $('#modal_supp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
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
                    $('[name="kas_dept"]').val(data.DEPT_NAME);
                    $('#modal_dept').modal('hide');
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
                    $('[name="kas_anggaran"]').val(data.BUD_CODE);
                    $('#modal_anggaran').modal('hide');
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
            var id = ($('[name="supp_id"]').val()!='')?$('[name="supp_id"]').val():0;
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
                url : "<?php echo site_url('administrator/Finance/ajax_pick_prc/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="no_beli"]').val(data.PRC_CODE);
                    $('[name="nominal"]').val(data.PRC_GTOTAL);
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
                    $('[name="nominal"]').val(data.PRCGA_GTOTAL);
                    $('[name="id_beli"]').val(data.PRCGA_ID);
                    $('#modal_pembelian').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function edit_cst(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_cst/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_kode_customer"]').val(data.CUST_CODE);
                    $('[name="kas_nama_customer"]').val(data.CUST_NAME);
                    $('#modal_customer').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function add_gd(t)
        {
            sts=t;
            $('#modal_account').modal('show');
            $('.modal-title').text('Daftar Account');
        }
        function add_cst(t)
        {
            $('#modal_customer').modal('show');
            $('.modal-title').text('Daftar Customer');
        }
        function myFunction() 
        {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none")
            {
                x.style.display = "block";
            }
            else
            {
                x.style.display = "none";
            }
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
                        $('[name="kas_kurs"]').val(data.CURR_RATE);
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
        function pick_location(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_pick_location/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="kas_lokasi"]').val(data.LOC_CODE);
                    $('[name="kas_lokasi_ket"]').val(data.LOC_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function printPre()
        {
            var ids = $('[name=kas_id]').val();
            window.open ( "<?php echo site_url('administrator/Finance/pageprint_kk/')?>"+ids,'_blank');
        }
        function save_cash_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_cash_out')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
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
        function approve_cash_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_approve_cash_out')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/cash_out')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disapprove_cash_out()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_disapprove_cash_out')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Finance/cash_out')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function save_cash_out_detail()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_simpan_cash_out_detail')?>",
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');
                        var id = $('[name="kas_id"]').val();
                        kas_keluar_detail(id);
                        gen_total(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function kas_keluar_detail(id)
        {
            table = $('#dtb_kas_out_detail').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showdetail_cashout')?>/"+id,
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
        function delete_cshodet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/ajax_hapus_cash_out_detail')?>/"+id,
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Dihapus');
                        var id = $('[name="kas_id"]').val();
                        kas_keluar_detail(id);
                        gen_total(id);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function edit_cash_out()
        {
            $('#modal_cash_out_edit').modal('show');
            $('.modal-title').text('Cari Kas Keluar');
            table = $('#dtb_cash_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_out_bysts')?>",
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
        function open_cash_out()
        {
            $('#modal_cash_out_edit').modal('show');
            $('.modal-title').text('Cari Kas Keluar');
            table = $('#dtb_cash_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_out_bysts')?>",
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
        function check_cash_out()
        {
            $('#modal_cash_out_edit').modal('show');
            $('.modal-title').text('Cari Kas Keluar');
            table = $('#dtb_cash_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_out_bysts')?>",
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
        function apr_cash_out()
        {
            $('#modal_cash_out_edit').modal('show');
            $('.modal-title').text('Cari Kas Keluar');
            table = $('#dtb_cash_out_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cash_out_bysts')?>",
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
        function pick_cashoutopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Finance/open_cashout/')?>" + id,
                type: "POST",
                data: $('#form_kas').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Kas Keluar Sukses Dibuka');
                        $('#modal_cash_out_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Kas Keluar masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashoutedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSHO_ID);
                    $('[name="kas_nomor"]').val(data.CSHO_CODE);
                    $('[name="kas_tgl"]').val(data.CSHO_DATE);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="kas_keterangan"]').val(data.CSHO_INFO);
                    if(data.CSHO_APPR != null){pick_appr(data.CSHO_APPR);}
                    if(data.CSHO_SUPP != null){pick_supp(data.CSHO_SUPP);}
                    $('[name="kas_info"]').val(data.CSHO_INFO);
                    if(data.DEPT_ID != null){pick_dept(data.DEPT_ID);}
                    if(data.CSHO_BUDGET != null){pick_anggaran(data.CSHO_BUDGET);}
                    $('[name="head_taxnumber"]').val(data.CSHO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.CSHO_TAXCODE);
                    pick_curr(data.CURR_ID);
                    kas_keluar_detail(data.CSHO_ID);
                    gen_total(data.CSHO_ID);
                    $('#modal_cash_out_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashoutchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSHO_ID);
                    $('[name="kas_nomor"]').val(data.CSHO_CODE);
                    $('[name="kas_tgl"]').val(data.CSHO_DATE);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="kas_keterangan"]').val(data.CSHO_INFO);
                    pick_appr(data.CSHO_APPR);
                    pick_supp(data.CSHO_SUPP);
                    $('[name="kas_info"]').val(data.CSHO_INFO);
                    pick_dept(data.DEPT_ID);
                    pick_anggaran(data.CSHO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.CSHO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.CSHO_TAXCODE);
                    pick_curr(data.CURR_ID);
                    kas_keluar_detail(data.CSHO_ID);
                    gen_total(data.CSHO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_cash_out_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_cashoutapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cashoutgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_kas')[0].reset();
                    $('[name="kas_id"]').val(data.CSHO_ID);
                    $('[name="kas_nomor"]').val(data.CSHO_CODE);
                    $('[name="kas_tgl"]').val(data.CSHO_DATE);
                    sts=1;
                    pick_acc(data.COA_ID);
                    $('[name="kas_keterangan"]').val(data.CSHO_INFO);
                    pick_appr(data.CSHO_APPR);
                    pick_supp(data.CSHO_SUPP);
                    $('[name="kas_info"]').val(data.CSHO_INFO);
                    pick_dept(data.DEPT_ID);
                    pick_anggaran(data.CSHO_BUDGET);
                    $('[name="head_taxnumber"]').val(data.CSHO_TAXHEADCODE);
                    $('[name="taxnumber"]').val(data.CSHO_TAXCODE);
                    pick_curr(data.CURR_ID);
                    kas_keluar_detail(data.CSHO_ID);
                    gen_total(data.CSHO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_cash_out_edit').modal('hide');
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