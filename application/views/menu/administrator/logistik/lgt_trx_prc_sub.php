<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchasing Logistik - Sub Kontrak</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_prcsub()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> Cetak</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_lgtprcsub()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_lgtprcsub()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_lgtprcsub()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_lgtprcsub()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#po" data-toggle="tab">Data Pembelian</a>
                            </li>
                            <li>
                                <a href="#barang" data-toggle="tab">Data Barang</a>
                            </li>
                            <li>
                                <a href="#biaya" data-toggle="tab">Data Biaya</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="po">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Pembelian</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" name="prcsub_type" value="0" onclick="prcsubchk()" checked>Main Vendor</label>
                                            <label class="radio-inline"><input type="radio" name="prcsub_type" value="1" onclick="prcsubchk()">Sub Vendor</label> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor BL</label>
                                        <div class="col-sm-1">
                                            <a id="genbtn" href="javascript:void(0)" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                             <input class="form-control" type="text" name="prc_code" value="" >
                                            <input type="hidden" name="prc_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                    <div class="form-group subHide">
                                        <label class="col-sm-3 control-label">Nomor BL Induk</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_prcparent()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="prcpar_code" readonly>
                                            <input type="hidden" name="prcpar_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date' id='dtp1'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="po_tgl" type='text' class="form-control text-center" name="prc_tgl" value="<?= date('Y-m-d')?>"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor Faktur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="prc_inv">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor PO</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_po()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="po_code" readonly>
                                            <input type="hidden" name="po_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor SO</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="po_so" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Approval</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="appr_code" readonly>
                                            <input type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="loc_name" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Supplier</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="supp_name" readonly>
                                            <input type="hidden" name="supp_id">
                                            <input type="hidden" name="inv_coasupp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea name="supp_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea name="supp_info" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="tab-pane fade" id="barang">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Barang</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h4>Daftar PO</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="data_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Harga Pokok
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Harga
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="gd_name" readonly>
                                            <input type="hidden" name="gd_id" value="">
                                            <input type="hidden" name="gd_typestock" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Harga Satuan</label>
                                        <div class="col-sm-4">
                                            <input class="form-control curr-num-perc" type="text" name="gd_price" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Beli</label>
                                        <div class="col-sm-4">
                                            <input onchange="hitung()" class="form-control" type="text" name="po_qty" readonly>
                                            <span class="help-block"></span>
                                            <input type="hidden" name="po_qty_old">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sub Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num-perc" type="text" name="po_sub" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-4">
                                            <a href="javascript:void(0)" onclick="add_barang()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_barang" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Harga Pokok
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Harga
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="tab-pane fade" id="biaya">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Biaya</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Termin</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">Hari</span>
                                                <input class="form-control curr-num" type="text" name="po_term">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea name="po_info" class="form-control" rows="2" style="resize: vertical;"></textarea>       
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="fgroup">
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
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sub Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num-perc" type="text" name="po_subs" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Discount</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="disc_perc">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control curr-num" type="text" name="prc_disc" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">PPN</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="ppn_perc">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control curr-num" type="text" name="prc_ppn" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Biaya</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num" type="text" name="prc_cost">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Grand Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num-perc" type="text" name="prc_gtotal" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="saveprc()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="aprprc()" class="btn btn-block btn-primary btn-default btnApr" disabled>Approve</button>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="disaprprc()" class="btn btn-block btn-primary btn-default btnApr" disabled>Disapprove</button>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search -->
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
    <div class="modal fade" id="modal_barang" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_brg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Ukuran</th>
                                        <th>Info</th>
                                        <th>Harga</th>
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
    <div class="modal fade" id="modal_po" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>PO</th>
                                        <th>Approval</th>
                                        <th>Klien</th>
                                        <th>SO</th>
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
    <div class="modal fade" id="modal_prc_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_prc_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No BL</th>
                                        <th>No PO</th>
                                        <th>Approval</th>
                                        <th>Tanggal</th>
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            prcsubchk();
            id=$('[name="prc_id"]').val();            
            barang(id);
            prc = 0; qty = 0; sub = 0;
            $('[name=po_qty]').on('input', function() {
                hitung();
                gtotal();
            });
            $('[name=disc_perc]').on('input', function() {
                disc();
                gtotal();
            });
            $('[name=ppn_perc]').on('input', function() {
                ppn();
                gtotal();
            });
            $('[name=prc_cost]').on('input', function() {
                gtotal();
            });
        });
        function prcsubchk()
        {
            if($('[name="prcsub_type"][value="0"]').is(':checked'))
            {
                $('.subHide').css({'display':'none'});
                $('[name="prcpar_id"]').val('');
                $('[name="prcpar_code"]').val('');
            }
            if($('[name="prcsub_type"][value="1"]').is(':checked'))
            {
                $('.subHide').css({'display':'block'});
                $('[name="prcpar_id"]').val('');
                $('[name="prcpar_code"]').val('');
            }
        }
        function print_prcsub()
        {
            var ids = $('[name=prc_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_prcsub/')?>"+ids,'_blank');
        }
        function tambah()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_blsub_lgt') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="prc_code"]').val(data.kode);
                    $('[name="prc_id"]').val(data.id);
                    $('#genbtn').attr('disabled',true);
                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }
        function saveprc()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_simpanprcsub')?>",
                type: "POST",
                data: $('#form_po').serialize(),
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
        function aprprc()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_approveprcsub')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Logistik/lgt_trx_prc_sub')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disaprprc()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_disapproveprcsub')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Logistik/lgt_trx_prc_sub')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function hitung()
        {
            prc = $('[name="gd_price"]').val();
            qty = $('[name="po_qty"]').val();
            sub = qty * prc;
            $('[name="po_sub"]').val(sub);            
        }
        function gtotal()
        {
            var total = 0;
            var sub = $('[name=po_subs]').val();
            var disc = $('[name=prc_disc]').val();
            total = sub - disc;
            var ppn = $('[name=prc_ppn]').val();
            var total2 = 0;
            total2 = total + (ppn*1);
            var cost = $('[name=prc_cost]').val();
            var total3 = 0;
            total3 = total2 + (cost*1);
            $('[name=prc_gtotal]').val(total3);
        }
        function disc()
        {
            var disc = $('[name=disc_perc]').val();
            var subt = $('[name=po_subs]').val();
            var sum = disc/100 * subt;
            $('[name=prc_disc]').val(sum);
        }
        function ppn()
        {
            var disc = $('[name=ppn_perc]').val();
            var subt = $('[name=po_subs]').val()-($('[name="prc_disc"]').val()*1);
            var sum = disc/100 * subt;
            $('[name=prc_ppn]').val(sum);
        }
        function sub_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_subbl/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_subs"]').val(data.Subtotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function brg_po(id)
        {
            table = $('#data_po').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_dtpo/')?>"+id,
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
        function barang(id)
        {
            table = $('#dtb_barang').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_brg_prc/')?>"+id,
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
        function barang_(id)
        {
            table = $('#dtb_barang').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_brg_prc_/')?>"+id,
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
        function add_barang()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_add_brgprc')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Ditambahkan');
                        id = $('[name="prc_id"]').val();
                        barang(id);
                        sub_total(id);
                        bersih();
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
        function del_brg(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Logistik/ajax_del_brgprc/')?>"+id,
                    type: "POST",
                    data: $('#form_po').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="prc_id"]').val();
                        barang(id);
                        sub_total(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function srch_prcparent()
        {
            $('#modal_prc_edit').modal('show');
            $('.modal-title').text('Cari BL Induk');
            table = $('#dtb_prc_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcsubpar')?>",
                    "type": "POST",
                    "data": function(data){
                        data.brch = $('[name="user_branch"]').val();
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
        function srch_po()
        {
            $('#modal_po').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_po').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_po')?>",
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
        function pick_po(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_po/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="no_po"]').text(data.PO_CODE);
                    $('[name="po_info"]').text(data.PO_INFO);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="po_so"]').val(data.PO_ORDNUM);
                    $('[name="po_term"]').val(data.PO_TERM);
                    pick_supp($('[name="supp_id"]').val());
                    pick_loc(data.LOC_ID);
                    if(data.APPR_ID != null)
                    {
                        pick_appr($('[name="appr_id"]').val());
                    }
                    brg_po($('[name="po_id"]').val());
                    $('#modal_po').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_brg()
        {
            suppid = $('[name="supp_id"]').val();
            $('#modal_barang').modal('show');
            $('.modal-title').text('Cari Barang');            
            table = $('#dtb_brg').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_brg/')?>"+suppid,
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
        function pick_brg(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_brg/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data.GD_ID);
                    $('[name="gd_name"]').val(data.GD_NAME);
                    $('[name="gd_unit1"]').val(' / ' +data.GD_UNIT+' '+data.GD_MEASURE);
                    $('[name="gd_price"]').val(data.GD_PRICE);
                    prc = $('[name="gd_price"]').val();
                    $('[name="gd_unit2"]').val(data.GD_MEASURE);
                    $('#modal_barang').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_supp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_supp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="supp_name"]').val(data.SUPP_NAME);
                    $('[name="supp_address"]').val(data.SUPP_ADDRESS+', '+data.SUPP_CITY);
                    $('[name="supp_info"]').val(data.SUPP_DUE);
                    $('[name="inv_coasupp"]').val(data.COA_ID);
                    $('#modal_supp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_appr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    $('[name="loc_name"]').val(data.LOC_NAME);                   
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_prcsubpar(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_prclgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="prcpar_id"]').val(data.PRC_ID);
                    $('[name="prcpar_code"]').val(data.PRC_CODE);
                    $('#modal_prc_edit').modal('hide');
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_curr')?>",
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_curr/')?>" + id,
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
        function pick_podet(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_podet2/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data[0]["GD_ID"]);
                    $('[name="gd_name"]').val(data[0]["GD_NAME"]);
                    $('[name="gd_typestock"]').val(data[0]["GD_TYPESTOCK"]);
                    $('[name="gd_unit1"]').val(' / '+data[0]["GD_UNIT"]+' '+data[0]["GD_MEASURE"]);
                    $('[name="gd_price"]').val(data[0]["GD_PRICE"]);
                    $('[name="gd_unit2"]').val(data[0]["GD_MEASURE"]);
                    $('[name="po_qty"]').val(data[0]["PODET_QTYUNIT"]);
                    $('[name="po_qty_old"]').val(data[0]["PODET_QTYUNIT"]);
                    hitung();                    
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
                    $('[name="loc_name"]').val(data.LOC_NAME);                    
                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function bersih()
        {
            $('[name="gd_id"]').val('');
            $('[name="gd_name"]').val('');
            $('[name="gd_unit1"]').val('');
            $('[name="gd_price"]').val('');
            $('[name="gd_unit2"]').val('');
            $('[name="po_qty"]').val('');
            $('[name="po_qty_old"]').val('');
            $('[name="po_sub"]').val('');
        }
        function edit_lgtprcsub()
        {
            $('#modal_prc_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');
            table = $('#dtb_prc_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcsubbysts')?>",
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
        function open_lgtprcsub()
        {
            $('#modal_prc_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');            
            table = $('#dtb_prc_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcsubbysts')?>",
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
        function check_lgtprcsub()
        {
            $('#modal_prc_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');            
            table = $('#dtb_prc_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcsubbysts')?>",
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
        function apr_lgtprcsub()
        {
            $('#modal_prc_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');            
            table = $('#dtb_prc_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_prcsubbysts')?>",
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
        function pick_prcsublgtopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/open_lgtprc/')?>" + id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {   
                    if(data.status)
                    {
                        alert('Record Pembelian Logistik Sukses Dibuka');
                        $('#modal_prc_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Pembelian Logistik masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_prcsublgtedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_prclgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    (data.PRC_SUBSTS != '1')?$('[name="prcsub_type"][value="0"]').prop('checked',true):$('[name="prcsub_type"][value="1"]').prop('checked',true);
                    prcsubchk();
                    $('[name="prcpar_id"]').val(data.PRC_SUBID);
                    $('[name="prcpar_code"]').val(data.PRC_SUBCODE);
                    $('[name="prc_id"]').val(data.PRC_ID);
                    $('[name="prc_code"]').val(data.PRC_CODE);
                    $('[name="prc_tgl"]').val(data.PRC_DATE);
                    $('[name="prc_inv"]').val(data.PRC_INVOICE);
                    pick_po(data.PO_ID);
                    barang(data.PRC_ID);
                    pick_curr(data.CURR_ID);
                    sub_total(data.PRC_ID);
                    $('[name="prc_disc"]').val(data.PRC_DISC);
                    $('[name="disc_perc"]').val(Math.abs(data.PRC_DISC/data.PRC_SUB*100));
                    $('[name="prc_ppn"]').val(data.PRC_PPN);
                    $('[name="ppn_perc"]').val(Math.abs(data.PRC_PPN/(data.PRC_SUB-data.PRC_DISC)*100));
                    $('[name="prc_cost"]').val(data.PRC_COST);
                    $('[name="prc_gtotal"]').val(data.PRC_GTOTAL);
                    $('#modal_prc_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_prcsublgtchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_prclgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    (data.PRC_SUBSTS != '1')?$('[name="prcsub_type"][value="0"]').prop('checked',true):$('[name="prcsub_type"][value="1"]').prop('checked',true);
                    prcsubchk();
                    $('[name="prcpar_id"]').val(data.PRC_SUBID);
                    $('[name="prcpar_code"]').val(data.PRC_SUBCODE);
                    $('[name="prc_id"]').val(data.PRC_ID);
                    $('[name="prc_code"]').val(data.PRC_CODE);
                    $('[name="prc_tgl"]').val(data.PRC_DATE);
                    $('[name="prc_inv"]').val(data.PRC_INVOICE);
                    pick_po(data.PO_ID);                    
                    barang_(data.PRC_ID);
                    pick_curr(data.CURR_ID);
                    sub_total(data.PRC_ID);
                    $('[name="prc_disc"]').val(data.PRC_DISC);
                    $('[name="disc_perc"]').val(Math.abs(data.PRC_DISC/data.PRC_SUB*100));
                    $('[name="prc_ppn"]').val(data.PRC_PPN);
                    $('[name="ppn_perc"]').val(Math.abs(data.PRC_PPN/(data.PRC_SUB-data.PRC_DISC)*100));
                    $('[name="prc_cost"]').val(data.PRC_COST);
                    $('[name="prc_gtotal"]').val(data.PRC_GTOTAL);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_prc_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_prcsublgtapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_prclgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="prc_id"]').val(data.PRC_ID);
                    $('[name="prc_code"]').val(data.PRC_CODE);
                    $('[name="prc_tgl"]').val(data.PRC_DATE);
                    $('[name="prc_inv"]').val(data.PRC_INVOICE);
                    pick_po(data.PO_ID);                    
                    barang_(data.PRC_ID);
                    pick_curr(data.CURR_ID);
                    sub_total(data.PRC_ID);
                    $('[name="prc_disc"]').val(data.PRC_DISC);
                    $('[name="disc_perc"]').val(Math.abs(data.PRC_DISC/data.PRC_SUB*100));
                    $('[name="prc_ppn"]').val(data.PRC_PPN);
                    $('[name="ppn_perc"]').val(Math.abs(data.PRC_PPN/(data.PRC_SUB-data.PRC_DISC)*100));
                    $('[name="prc_cost"]').val(data.PRC_COST);
                    $('[name="prc_gtotal"]').val(data.PRC_GTOTAL);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_prc_edit').modal('hide');
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