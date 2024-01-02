<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Order Pembelian</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_rptpo" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="po_branch" readonly>
                                <input type="hidden" name="po_branchid">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Lokasi</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_loc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="pappr_loc" readonly>
                                <input type="hidden" name="pappr_locid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Ijin</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_pattype()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="pappr_pattype" readonly>
                                <input type="hidden" name="pappr_pattypeid">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Approval</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_appr()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="po_appr" readonly>
                                <input type="hidden" name="po_apprid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="po_datestart" type='text' class="form-control input-group-addon" name="po_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="po_dateend" type='text' class="form-control input-group-addon" name="po_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Laporan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="rptpo_type" name="rptpo_type">
                                    <option value="">Pilih</option>
                                    <option value="1">Per Nomor</option>
                                    <option value="2">Per Proyek</option>
                                    <!-- <option value="3">Histori PO</option>
                                    <option value="4">Sisa PO</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_po()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="print_po()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_po" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        No PO
                                    </th>
                                    <th class="text-center">
                                        Tanggal
                                    </th>
                                    <th class="text-center">
                                        Approval
                                    </th>
                                    <th class="text-center">
                                        Supplier
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Modal -->
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
    <div class="modal fade" id="modal_pattyp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_pattyp" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
    <!-- Select Bst -->
    <script src="<?php echo base_url('assets/addons/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            dt_po();            
        });

        function filter_po()
        {
            $('#dtb_po').DataTable().ajax.reload(null,false);
        }

        function print_po()
        {
            if($('[name="rptpo_type"]').val() == '')
            {
                alert('Pilih Jenis Laporan');
            }
            else
            {
                var seg1 = $('[name="po_apprid"]').val()?$('[name="po_apprid"]').val():'null';
                var seg2 = $('[name="po_datestart"]').val()?$('[name="po_datestart"]').val():'null';
                var seg3 = $('[name="po_dateend"]').val()?$('[name="po_dateend"]').val():'null';
                var seg4 = $('[name="po_branchid"]').val()?$('[name="po_branchid"]').val():'null';
                var seg5 = $('[name="rptpo_type"]').val()?$('[name="rptpo_type"]').val():'null';
                window.open ( "<?php echo site_url('administrator/Logistik/print_rptpo/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4+'/'+seg5,'_blank');
            }
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_po()
        {            
            table = $('#dtb_po').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showrpt_po')?>",
                    "type": "POST",
                    "data": function(data){
                        data.apprid = $('[name="po_apprid"]').val();
                        data.date_start = $('[name="po_datestart"]').val();
                        data.date_end = $('[name="po_dateend"]').val();
                        data.branch = $('[name="po_branchid"]').val();
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
    <!-- Dropdown -->
    <script>
        function drop_coa()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#ldg_coaid').empty();
                    var select = document.getElementById('balsh_coaid');
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#balsh_coaid').selectpicker({
                        dropupAuto: false
                    });
                    $('#balsh_coaid').selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Search -->
    <script>
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
        function srch_pattype()
        {
            $('#modal_pattyp').modal('show');
            $('.modal-title').text('Cari Jenis Ijin');            
            table = $('#dtb_pattyp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_permittype')?>",
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
                    "url": "<?php echo site_url('administrator/Searchdata/srch_appr')?>",
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
    <!-- Pick -->
    <script>
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_branchid"]').val(data.BRANCH_ID);
                    $('[name="po_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
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
                    $('[name="po_locid"]').val(data.LOC_ID);
                    $('[name="po_loc"]').val(data.LOC_NAME);                    
                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_permittype(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_permittype/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_pattypeid"]').val(data.PRMTTYP_ID);
                    $('[name="po_pattype"]').val(data.PRMTTYP_NAME);
                    $('#modal_pattyp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_apprgb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_apprid"]').val(data.APPR_ID);
                    $('[name="po_appr"]').val(data.APPR_CODE);                  
                    $('#modal_appr').modal('hide');
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