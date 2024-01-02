<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase Order General Affairs</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_po_ga()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> Cetak</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_gapo()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_gapo()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_gapo()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_gapo()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" >
                            <li class="active">
                                <a href="#po" data-toggle="tab">Data PO</a>
                            </li>
                            <li>
                                <a href="#barang" data-toggle="tab">Data Barang</a>
                            </li>
                            <li>
                                <a href="#biaya" data-toggle="tab">Data Biaya</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="po">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data PO</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor PO</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="po_code" value="" >
                                            <input type="hidden" name="po_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor Penawaran Vendor</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="po_so">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date' id='dtp1'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="po_tgl" type='text' class="form-control text-center" name="po_tgl" value="<?php echo date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Supplier</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_supp()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="supp_name" readonly>
                                            <input type="hidden" name="supp_id">
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
                                            <textarea class="form-control" rows="2" style="resize: vertical;" name="supp_info" readonly></textarea>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="tab-pane fade" id="barang">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Barang</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_brg()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="gd_name" readonly>
                                            <input type="hidden" name="gd_id" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Harga Satuan</label>
                                        <div class="col-sm-4">
                                            <input class="form-control curr-num" type="text" name="gd_price" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Beli</label>
                                        <div class="col-sm-4">
                                            <input onchange="hitung()" class="form-control" type="text" name="po_qty">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sub Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num" type="text" name="po_sub" readonly>
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
                                    <br>
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
                                        <label class="col-sm-3 control-label">Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control curr-num" type="text" name="po_subs" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="savepo()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="aprpo()" class="btn btn-block btn-primary btn-default btnApr" disabled>Approve</button>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <button type="button" onclick="disaprpo()" class="btn btn-block btn-primary btn-default btnApr" disabled>Disapprove</button>
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
    <!-- /#wrapper -->
    <!-- Modal -->
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
    <div class="modal fade" id="modal_poga_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_poga_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No PO</th>
                                        <th>Tanggal</th>
                                        <th>Supplier</th>
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
            var id; var suppid; var prc; var qty; var sub;
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            id=$('[name="po_id"]').val();
            barang(id);
            prc = 0; qty = 0; sub = 0;
            $('[name=po_qty]').on('input', function() {
                hitung();
            });
        });
        function print_po_ga()
        {
            var ids = $('[name=po_id]').val();
            window.open ( "<?php echo site_url('administrator/Genaff/pageprint_po/')?>"+ids,'_blank');
        }
        function tambah()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_po_ga') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="po_code"]').val(data.kode);
                    $('[name="po_id"]').val(data.id);
                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }
        function savepo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_simpanpo')?>",
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
        function aprpo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_approvepo')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Genaff/ga_trx_po')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disaprpo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_disapprovepo')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Genaff/ga_trx_po')?>";
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
        function sub_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_sub_ga/')?>" + id,
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
                    "url": "<?php echo site_url('administrator/Genaff/ajax_barang/')?>"+id,
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
                url : "<?php echo site_url('administrator/Genaff/ajax_add_brg')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {                        
                        alert('Data Berhasil Ditambahkan');
                        id = $('[name="po_id"]').val();
                        barang(id);
                        sub_total(id);
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
                    url : "<?php echo site_url('administrator/Genaff/ajax_del_brgpo/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="po_id"]').val();
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_supp')?>",
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_brg')?>/"+suppid,
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
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_supp/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="supp_name"]').val(data.SUPP_NAME);
                    $('[name="supp_address"]').val(data.SUPP_ADDRESS+', '+data.SUPP_CITY);
                    $('[name="supp_info"]').val(data.SUPP_OTHERCTC+'\n'+((data.SUPP_DUE != null)?data.SUPP_DUE:''));
                    $('#modal_supp').modal('hide');
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
        function edit_gapo()
        {
            $('#modal_poga_edit').modal('show');
            $('.modal-title').text('Cari PO');
            table = $('#dtb_poga_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pogabysts')?>",
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
        function open_gapo()
        {
            $('#modal_poga_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_poga_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pogabysts')?>",
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
        function check_gapo()
        {
            $('#modal_poga_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_poga_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pogabystschk')?>",
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
        function pick_pogaopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/open_gapo/')?>" + id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {   
                    if(data.status)
                    {
                        alert('Record PO GA Sukses Dibuka');
                        $('#modal_poga_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record PO GA masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_pogaedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_pogagb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_po')[0].reset();
                    $('[name="po_id"]').val(data.POGA_ID);
                    $('[name="po_code"]').val(data.POGA_CODE);
                    $('[name="po_so"]').val(data.POGA_ORDNUM);
                    $('[name="po_tgl"]').val(data.POGA_DATE);
                    pick_supp(data.SUPP_ID);
                    barang(data.POGA_ID);
                    $('[name="po_term"]').val(data.POGA_TERM);
                    $('[name="po_info"]').val(data.POGA_INFO);
                    pick_curr(data.CURR_ID);
                    sub_total(data.POGA_ID);
                    $('#modal_poga_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_pogachk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_pogagb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_po')[0].reset();
                    $('[name="po_id"]').val(data.POGA_ID);
                    $('[name="po_code"]').val(data.POGA_CODE);
                    $('[name="po_so"]').val(data.POGA_ORDNUM);
                    $('[name="po_tgl"]').val(data.POGA_DATE);
                    pick_supp(data.SUPP_ID);
                    barang(data.POGA_ID);
                    $('[name="po_term"]').val(data.POGA_TERM);
                    $('[name="po_info"]').val(data.POGA_INFO);
                    pick_curr(data.CURR_ID);
                    sub_total(data.POGA_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_poga_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_pogaapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_pogagb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#form_po')[0].reset();
                    $('[name="po_id"]').val(data.POGA_ID);
                    $('[name="po_code"]').val(data.POGA_CODE);
                    $('[name="po_so"]').val(data.POGA_ORDNUM);
                    $('[name="po_tgl"]').val(data.POGA_DATE);
                    pick_supp(data.SUPP_ID);
                    barang(data.POGA_ID);
                    $('[name="po_term"]').val(data.POGA_TERM);
                    $('[name="po_info"]').val(data.POGA_INFO);
                    pick_curr(data.CURR_ID);
                    sub_total(data.POGA_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_poga_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function apr_gapo()
        {
            $('#modal_poga_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_poga_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pogabysts')?>",
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
</body>
</html>