<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Retur Pemakaian Barang</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="print_retusg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-print"> Cetak</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_lgtretusg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_lgtretusg()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#retusg" data-toggle="tab">Data Retur Pemakaian</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_rtusg">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="retusg">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Pemakaian</h2>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor Retur</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" id="genbtn" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="rtusg_code" value="" readonly>
                                            <input type="hidden" name="rtusg_id" value="0">
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
                                                <input type='text' class="form-control text-center" name="retusg_tgl" value="<?= date('Y-m-d')?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Pemakaian</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_usg()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="usg_code" readonly>
                                            <input type="hidden" name="usg_id">
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
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea name="loc_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <textarea name="rtusg_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Barang</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_usage_1" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                                            Total
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
                                        <!-- <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_brg()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                                        </div> -->
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="gd_name" readonly>
                                            <input type="hidden" name="gd_id" value="">
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
                                        <label class="col-sm-3 control-label">Jumlah Retur</label>
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
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="save_rtusg()" class="btn btn-block btn-primary btn-default">Simpan</a>
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
    <div class="modal fade" id="modal_usg" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_usg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tanggal</th>
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
                                        <th>Satuan</th>                                        
                                        <th>Stock</th>
                                        <th>Pilih</th>
                                        <th>Info</th>
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
    <div class="modal fade" id="modal_rtusg_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_rtusg_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Retur</th>
                                        <th>No Pakai</th>
                                        <th>Tanggal</th>
                                        <th>Approval</th>
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
            var id = $('[name="rtusg_id"]').val();
            barang(id);

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                   .columns.adjust()
                   .responsive.recalc();
            });

            $("input").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
        });
        function tambah()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_retusage_lgt') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="rtusg_code"]').val(data.kode);
                    $('[name="rtusg_id"]').val(data.id);
                    $('#genbtn').attr('disabled',true);
                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }
        function save_rtusg()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_simpanrtusg')?>",
                type: "POST",
                data: $('#form_rtusg').serialize(),
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
                    url : "<?php echo site_url('administrator/Logistik/ajax_add_brgrtusg')?>",
                    type: "POST",
                    data: $('#form_rtusg').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Ditambahkan');
                            id = $('[name="rtusg_id"]').val();
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
                    url : "<?php echo site_url('administrator/Logistik/ajax_del_brgrtusg/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="rtusg_id"]').val();
                        barang(id);
                        bersih();
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_brgrtusg/')?>"+id,
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
        function brg_usg(id)
        {
            table = $('#dtb_usage_1').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/show_usgtopick/')?>"+id,
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
        function srch_usg()
        {
            $('#modal_usg').modal('show');
            $('.modal-title').text('Cari Approval');
            table = $('#dtb_usg').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_usg')?>",
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
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_brgusg')?>",
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
        function pick_usage(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_usage/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="usg_id"]').val(data.USG_ID);
                    $('[name="usg_code"]').val(data.USG_CODE);
                    $('[name="rtusg_info"]').val(data.USG_INFO);
                    if(data.APPR_ID != null)
                    {
                        var appr_id = data.APPR_ID;
                        pick_appr(appr_id);
                    }
                    brg_usg(data.USG_ID);
                    $('#modal_usg').modal('hide');
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
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    $('[name="loc_name"]').val(data.LOC_NAME);
                    $('[name="loc_address"]').val(data.LOC_ADDRESS);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_usgtopick(id)
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
                    $('[name="gd_unit1"]').val(data.GD_MEASURE);
                    $('[name="gd_unit2"]').val(data.GD_MEASURE);
                    $('#modal_goods').modal('hide');
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
        function edit_lgtretusg()
        {
            $('#modal_rtusg_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');
            table = $('#dtb_rtusg_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_rtusgbysts')?>",
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
        function open_lgtretusg()
        {
            $('#modal_rtusg_edit').modal('show');
            $('.modal-title').text('Cari Pembelian');            
            table = $('#dtb_rtusg_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_rtusgbysts')?>",
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
        function pick_rtusglgtopen(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/open_lgtrtusg/')?>" + id,
                type: "POST",
                data: $('#form_rtusg').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Record Retur Pemakaian Logistik Sukses Dibuka');
                        $('#modal_rtusg_edit').modal('hide');
                    }
                    else
                    {
                        alert('Record Retur Pemakaian Logistik masih digunakan di transaksi '+data.string);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_rtusglgtedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_rtusglgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rtusg_id"]').val(data.RTUSG_ID);
                    $('[name="rtusg_code"]').val(data.RTUSG_CODE);
                    pick_usage(data.USG_ID);
                    barang(data.RTUSG_ID);
                    $('[name="rtusg_info"]').val(data.RTUSG_INFO);
                    $('#modal_rtusg_edit').modal('hide');
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