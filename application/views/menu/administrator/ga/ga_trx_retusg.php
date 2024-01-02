<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Retur Pemakaian Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#retusg" data-toggle="tab">Data Retur Pemakaian</a>
                            </li>
                           <!--  <li>
                                <a href="#gd" data-toggle="tab">Data Barang</a>
                            </li> -->
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
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="rtusg_code" value="" readonly>
                                            <input type="hidden" name="rtusg_id" value="0">
                                            <input type="hidden" name="user_id" value="1">
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="tambah()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>     
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input type='text' class="form-control" name="retusg_tgl" placeholder="Tanggal" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Pemakaian</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="usg_code" readonly>
                                            <input type="hidden" name="usg_id">
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_usg()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Nomor Approval</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="appr_code" readonly>
                                            <input type="hidden" name="appr_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="loc_name" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-4">
                                            <textarea name="loc_address" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-4">
                                            <textarea name="rtusg_info" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Barang</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="gd_name" readonly>
                                            <input type="hidden" name="gd_id" value="">
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" onclick="srch_brg()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info Barang</label>
                                        <div class="col-sm-4">
                                            <textarea name="gd_info" class="form-control" rows="2" style="resize: vertical;" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Stock</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_stock" readonly>
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_unit1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Retur</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="gd_usg">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-sm-2">
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
                                        <div class="col-sm-2 text-center">
                                            <a href="#" class="btn btn-block btn-danger btn-default">Batal</a>
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
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>
    <script>
        function tambah(){
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_retusage_ga') ?>",
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    $('[name="rtusg_code"]').val(data.kode);
                    $('[name="rtusg_id"]').val(data.id);

                },
                error : function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            })
        }
        $(document).ready(function(){
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

        function save_rtusg()
        {
            // ajax adding data to database
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_simpanrtusg')?>",
                type: "POST",
                data: $('#form_rtusg').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status) //if success close modal and reload ajax table
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
                // alert('benar');
                // ajax adding data to database
                $.ajax({
                    url : "<?php echo site_url('administrator/Genaff/ajax_add_brgrtusg')?>",
                    type: "POST",
                    data: $('#form_rtusg').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status) //if success close modal and reload ajax table
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
                // ajax delete data to database
                $.ajax({
                    url : "<?php echo site_url('administrator/Genaff/ajax_del_brgrtusg')?>/"+id,
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
            //datatables
            table = $('#dtb_usage').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_brgrtusg')?>/"+id,
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function srch_usg()
        {            
            $('#modal_usg').modal('show');
            $('.modal-title').text('Cari Approval'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_usg').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_srch_usg')?>",
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function srch_brg()
        {            
            $('#modal_goods').modal('show');
            $('.modal-title').text('Cari Barang'); // Set title to Bootstrap modal title      
            //datatables        
            table = $('#dtb_good').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('administrator/Genaff/ajax_srch_brgusg')?>",
                    "type": "POST",                
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                ],
            });
        }

        function pick_usage(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/ajax_pick_usage/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="usg_id"]').val(data.USGGA_ID);
                    $('[name="usg_code"]').val(data.USGGA_CODE);
                    $('[name="rtusg_info"]').val(data.USGGA_INFO);
                    // if(data.APPR_ID != null)
                    // {
                    //     var appr_id = data.APPR_ID;
                    //     pick_appr(appr_id);
                    // }
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
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>/" + id,
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

        function pick_brg(id)
        {
            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_brg/')?>/" + id,
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
    </script>
</body>
</html>