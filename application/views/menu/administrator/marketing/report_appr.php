<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Approval</h1>
                    </div>                    
                </div>
                <div class="row">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptappr_branch" readonly>
                                <input type="hidden" name="rptappr_branchid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Customer</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_cust()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptappr_cust" readonly>
                                <input type="hidden" name="rptappr_custid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Lokasi</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_loc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptappr_loc" readonly>
                                <input type="hidden" name="rptappr_locid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sales</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_mkt()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptappr_sls" readonly>
                                <input type="hidden" name="rptappr_slsid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Akhir Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="rptappr_datestart" type='text' class="form-control input-group-addon" name="rptappr_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="rptappr_dateend" type='text' class="form-control input-group-addon" name="rptappr_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Laporan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="rptappr_type" name="rptappr_type">
                                    <option value="">Pilih</option>
                                    <option value="1">Per Nomor</option>
                                    <option value="2">Per Lokasi</option>
                                    <option value="3">Per Customer</option>
                                    <option value="4">Tanpa PO</option>
                                    <option value="5">Sudah Invoice</option>
                                    <option value="6">Belum Invoice</option>
                                    <option value="7">Sales Detail</option>
                                    <option value="8">Sales Summary</option>
                                    <option value="9">Sudah BAPP</option>
                                    <option value="10">Belum BAPP</option>
                                    <option value="11">Jatuh Tempo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_rptappr()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="print_rptappr()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_rptappr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Approval</th>
                                    <th>Tanggal Approval</th>
                                    <th>Akhir Kontrak</th>
                                    <th>Lokasi</th>
                                    <th>Klien</th>
                                    <th>Total</th>
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            show_rptappr();
            $('#filterBtn').click(function()
            {
                $('#dtb_rptappr').DataTable().ajax.reload(null,false);
            });
            $('#rptappr_type').selectpicker({
                dropupAuto: false
            });
            $('#rptappr_type').selectpicker('refresh'); 
        });

        function filter_rptappr() 
        {
            $('#dtb_rptappr').DataTable().ajax.reload(null,false);
        }

        function show_rptappr()
        {
            table = $('#dtb_rptappr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],            
                "ajax": {
                    "url": "<?php echo base_url('administrator/Showdata/showrpt_appr')?>",
                    "type": "POST",      
                    "data": function(data){
                        data.custid = $('[name="rptappr_custid"]').val();
                        data.locid = $('[name="rptappr_locid"]').val();
                        data.salesid = $('[name="rptappr_slsid"]').val();
                        data.branch = $('[name="rptappr_branchid"]').val();
                        data.tgl_start = $('[name="rptappr_datestart"]').val();
                        data.tgl_end = $('[name="rptappr_dateend"]').val();
                    },
                },            
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className": "text-center", "targets": ['_all']
                }
                ],
            });
        }

        function print_rptappr()
        {
            if($('[name="rptappr_type"]').val() == '')
            {
                alert('Pilih Jenis Laporan');
            }
            else
            {
                var seg1 = $('[name="rptappr_custid"]').val()?$('[name="rptappr_custid"]').val():'null';
                var seg2 = $('[name="rptappr_datestart"]').val()?$('[name="rptappr_datestart"]').val():'null';
                var seg3 = $('[name="rptappr_dateend"]').val()?$('[name="rptappr_dateend"]').val():'null';
                var seg4 = $('[name="rptappr_branchid"]').val()?$('[name="rptappr_branchid"]').val():'null';
                var seg5 = $('[name="rptappr_locid"]').val()?$('[name="rptappr_locid"]').val():'null';
                var seg6 = $('[name="rptappr_slsid"]').val()?$('[name="rptappr_slsid"]').val():'null';
                var seg7 = $('[name="rptappr_type"]').val()?$('[name="rptappr_type"]').val():'null';
                window.open ( "<?php echo site_url('administrator/Marketing/print_rptappr_t1/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4+'/'+seg5+'/'+seg6+'/'+seg7,'_blank');
                // if($('[name="rptappr_type"]').val() == '1' || $('[name="rptappr_type"]').val() == '2' || $('[name="rptappr_type"]').val() == '3')
                // {
                //     var seg1 = $('[name="rptappr_custid"]').val()?$('[name="rptappr_custid"]').val():'null';
                //     var seg2 = $('[name="rptappr_datestart"]').val()?$('[name="rptappr_datestart"]').val():'null';
                //     var seg3 = $('[name="rptappr_dateend"]').val()?$('[name="rptappr_dateend"]').val():'null';
                //     var seg4 = $('[name="rptappr_branchid"]').val()?$('[name="rptappr_branchid"]').val():'null';
                //     var seg5 = $('[name="rptappr_locid"]').val()?$('[name="rptappr_locid"]').val():'null';
                //     var seg6 = $('[name="rptappr_slsid"]').val()?$('[name="rptappr_slsid"]').val():'null';
                //     var seg7 = $('[name="rptappr_type"]').val()?$('[name="rptappr_type"]').val():'null';
                //     window.open ( "<?php echo site_url('administrator/Marketing/print_rptappr_t1/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4+'/'+seg5+'/'+seg6+'/'+seg7,'_blank');
                // }
                // if($('[name="rptappr_type"]').val() == '4')
                // {

                // }
                // if($('[name="rptappr_type"]').val() == '5' || $('[name="rptappr_type"]').val() == '6')
                // {

                // }
                // if($('[name="rptappr_type"]').val() == '7')
                // {

                // }
                // if($('[name="rptappr_type"]').val() == '8')
                // {

                // }
                // if($('[name="rptappr_type"]').val() == '9' || $('[name="rptappr_type"]').val() == '10')
                // {

                // }
                // if($('[name="rptappr_type"]').val() == '11')
                // {

                // }
            }
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
                    $('[name="rptappr_branchid"]').val(data.BRANCH_ID);
                    $('[name="rptappr_branch"]').val(data.BRANCH_NAME);
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
                    $('[name="rptappr_custid"]').val(data.CUST_ID);                    
                    $('[name="rptappr_cust"]').val(data.CUST_NAME);
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
                    $('[name="rptappr_locid"]').val(data.LOC_ID);
                    $('[name="rptappr_loc"]').val(data.LOC_NAME);                    
                    $('#modal_loc').modal('hide');
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
                    $('[name="rptappr_slsid"]').val(data.SALES_ID);                    
                    $('[name="rptappr_sls"]').val(data.PERSON_NAME);
                    $('#modal_mkt').modal('hide');
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