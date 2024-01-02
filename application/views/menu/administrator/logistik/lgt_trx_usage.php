<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pemakaian Barang</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_usg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> Cetak</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_lgtusg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_lgtusg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#usg" data-toggle="tab">Data Pemakaian</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_usg">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="usg">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Pemakaian</h2>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor Pakai</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" id="genbtn" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="usg_code" value="" readonly>
                                            <input type="hidden" name="usg_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class='input-group date' id='dtp1'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control text-center" name="usg_tgl" value="<?= date('Y-m-d')?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Approval</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="appr_code" readonly>
                                            <input type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_loc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="loc_name" readonly>
                                            <input type="hidden" name="loc_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea name="loc_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="usg_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <!-- mulai -->
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
                                            <input type="hidden" name="gd_price" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info Barang</label>
                                        <div class="col-sm-8">
                                            <textarea name="gd_info" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Stock</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_stock" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Pakai</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_usg">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_unit2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-4">
                                            <button type="button" onclick="add_barang()" class="btn btn-sm btn-primary" id="addbtn"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_usage" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Harga
                                                        </th>
                                                        <th class="text-center">
                                                            Jumlah
                                                        </th>
                                                        <th class="text-center">
                                                            Satuan
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <!-- selesai -->
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_usg()" class="btn btn-block btn-primary btn-default">Simpan</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
                                        <th>PO</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
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
    <div class="modal fade" id="modal_goods" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_good" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Stock</th>
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
    <div class="modal fade" id="modal_usg_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_usg_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pakai</th>
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
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            var id = $('[name="usg_id"]').val();
            barang(id);
        });
        function print_usg()
        {
            var ids = $('[name=usg_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_usg/')?>"+ids,'_blank');
        }
        function tambah()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_usage_lgt') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="usg_code"]').val(data.kode);
                    $('[name="usg_id"]').val(data.id);
                    $('#genbtn').attr('disabled',true);
                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }
        function save_usg()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_simpanusg')?>",
                type: "POST",
                data: $('#form_usg').serialize(),
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
        function add_barang()
        {
            stockchk();
            if ($('[name="gd_usg"]').parent().parent().hasClass('has-error') != 1)
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Logistik/ajax_add_brgusg')?>",
                    type: "POST",
                    data: $('#form_usg').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Ditambahkan');
                            id = $('[name="usg_id"]').val();
                            barang(id);
                            bersih();
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
                alert('error');
            }
        }
        function del_brg(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Logistik/ajax_del_brgusg/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="usg_id"]').val();
                        barang(id);                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function stockchk()
        {
            var old = $('[name="gd_stock"]').val();
            var curr = $('[name="gd_usg"]').val();

            if ((curr*1) > (old*1))
            {
                $('[name="gd_usg"]').parent().parent().addClass('has-error');
                $('[name="gd_usg"]').next().text('Stok Tidak Cukup');
            }
            if (curr <= 0)
            {
                $('[name="gd_usg"]').parent().parent().addClass('has-error');
                $('[name="gd_usg"]').next().text('Jumlah Tidak Valid');                
            }
            if (isNaN($('[name="gd_usg"]').val()))
            {
                $('[name="gd_usg"]').parent().parent().addClass('has-error');
                $('[name="gd_usg"]').next().text('Harus Angka'); 
            }
            if (curr == '')
            {
                $('[name="gd_usg"]').parent().parent().addClass('has-error');
                $('[name="gd_usg"]').next().text('Tidak Boleh Kosong');
            }
            if (curr <= old && curr != 0)
            {
                $("input").change(function(){
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });                
            }            
        }
        function barang(id)
        {
            table = $('#dtb_usage').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_brgusg')?>/"+id,
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_appr')?>",
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
            brcid = $('[name="user_branch"]').val();
            $('#modal_goods').modal('show');
            $('.modal-title').text('Cari Barang');            
            table = $('#dtb_good').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_gdbybrc/')?>"+brcid,
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
        function pick_appr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    $('[name="loc_id"]').val(data.LOC_ID);
                    $('[name="loc_name"]').val(data.LOC_NAME);
                    $('[name="loc_address"]').val(data.LOC_ADDRESS);
                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
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
                    $('[name="gd_info"]').val(data.GD_INFO);
                    $('[name="gd_stock"]').val(data.GD_STOCK);
                    $('[name="gd_unit1"]').val(data.GD_UNIT);
                    $('[name="gd_unit2"]').val(data.GD_UNIT);
                    $('[name="gd_price"]').val(data.GD_PRICE);
                    $('#modal_goods').modal('hide');
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
                    $('[name="loc_address"]').val(data.LOC_ADDRESS);
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
            $('[name="gd_info"]').val('');
            $('[name="gd_stock"]').val('');
            $('[name="gd_usg"]').val('');
            $('[name="gd_unit1"]').val('');
            $('[name="gd_unit2"]').val('');
        }
        function edit_lgtusg()
        {
            $('#modal_usg_edit').modal('show');
            $('.modal-title').text('Cari Pemakaian');
            table = $('#dtb_usg_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_usgbysts')?>",
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
        function open_lgtusg()
        {
            $('#modal_usg_edit').modal('show');
            $('.modal-title').text('Cari Pemakaian');            
            table = $('#dtb_usg_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_usgbysts')?>",
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
        function pick_usglgtopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/open_lgtusg/')?>" + id,
                type: "POST",
                data: $('#form_usg').serialize(),
                dataType: "JSON",
                success: function(data)
                {   
                    if(data.status)
                    {
                        alert('Record Pemakaian Logistik Sukses Dibuka');
                        $('#modal_usg_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Pemakaian Logistik masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_usglgtedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_usglgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="usg_id"]').val(data.USG_ID);
                    $('[name="usg_code"]').val(data.USG_CODE);
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="loc_id"]').val(data.LOC_ID);
                    pick_appr(data.APPR_ID);
                    pick_loc(data.LOC_ID);
                    $('[name="usg_info"]').val(data.USG_INFO);
                    barang(id);
                    $('#modal_usg_edit').modal('hide');
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