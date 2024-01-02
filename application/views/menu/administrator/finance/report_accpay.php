<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Finance - Laporan Kartu Hutang</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_rptaccrcv" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptaccrcv_branch" readonly>
                                <input type="hidden" name="rptaccrcv_branchid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="rptaccrcv_datestart" type='text' class="form-control input-group-addon" name="rptaccrcv_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="rptaccrcv_dateend" type='text' class="form-control input-group-addon" name="rptaccrcv_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Suplier</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_supp()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="rptaccrcv_supp" readonly>
                                <input type="hidden" name="rptaccrcv_suppid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Laporan Per</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" name="group" value="1"> Detail
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="group" value="2"> Summary
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_rptaccpay()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="show_rptaccpay()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_rptaccpay" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        Kode Suplier
                                    </th>
                                    <th class="text-center">
                                        Nama Suplier
                                    </th>
                                    <th class="col-sm-2 text-center">
                                        Nominal
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
            dt_rptaccpay();
        });
        function filter_rptaccpay()
        {
            $('#dtb_rptaccpay').DataTable().ajax.reload(null,false);
        }
        function show_rptaccpay()
        {
            var n = checkradio();
            if(n != null)
            {
                var seg1 = $('[name="rptaccrcv_suppid"]').val()?$('[name="rptaccrcv_suppid"]').val():'null';
                var seg2 = $('[name="rptaccrcv_datestart"]').val()?$('[name="rptaccrcv_datestart"]').val():'null';
                var seg3 = $('[name="rptaccrcv_dateend"]').val()?$('[name="rptaccrcv_dateend"]').val():'null';
                var seg4 = $('[name="rptaccrcv_branchid"]').val()?$('[name="rptaccrcv_branchid"]').val():'null';
                var seg5 = n;
                if (n==1) {
                    window.open ( "<?php echo site_url('administrator/Finance/print_rptaccpay/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4+'/'+seg5,'_blank');
                }else {
                    window.open ( "<?php echo site_url('administrator/Finance/print_rptaccpaysummary/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4+'/'+seg5,'_blank');
                }
            }
            else
            {
                alert('Pilih Salah Satu Jenis Laporan');
            }
        }
        function checkradio()
        {
            var n = $('[name="group"]:checked').val();
            return n;
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_rptaccpay()
        {        
            table = $('#dtb_rptaccpay').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showrpt_accpay')?>",
                    "type": "POST",
                    "data": function(data){
                        data.branch = $('[name="rptaccrcv_branchid"]').val();
                        data.supp = $('[name="rptaccrcv_suppid"]').val();
                        data.date_start = $('[name="rptaccrcv_datestart"]').val();
                        data.date_end = $('[name="rptaccrcv_dateend"]').val();
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "className": "text-right", "targets": [3]
                }
                ],
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
                    "data": function(data){
                        data.branch = $('[name="rptaccrcv_branchid"]').val();
                        data.client = $('[name="rptaccrcv_custid"]').val();
                        data.date_start = $('[name="rptaccrcv_datestart"]').val();
                        data.date_end = $('[name="rptaccrcv_dateend"]').val();
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
        function srch_supp()
        {
            $('#modal_supp').modal('show');
            $('.modal-title').text('Cari Suplier');            
            table = $('#dtb_supp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_supp')?>",
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
                    $('[name="rptaccrcv_branchid"]').val(data.BRANCH_ID);
                    $('[name="rptaccrcv_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
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
                url : "<?php echo site_url('administrator/Searchdata/pick_supp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rptaccrcv_suppid"]').val(data.SUPP_ID);
                    $('[name="rptaccrcv_supp"]').val(data.SUPP_NAME);
                    $('#modal_supp').modal('hide');
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