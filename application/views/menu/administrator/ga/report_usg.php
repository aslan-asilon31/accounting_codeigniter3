<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Pemakaian</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_rptusg" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="usg_branch" readonly>
                                <input type="hidden" name="usg_branchid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="usg_datestart" type='text' class="form-control input-group-addon" name="usg_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="usg_dateend" type='text' class="form-control input-group-addon" name="usg_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Laporan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="rptusg_type" name="rptusg_type">
                                    <option value="">Pilih</option>
                                    <option value="1">Per Nomor Detail</option>
                                    <option value="2">Per Nomor Summary</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_usg()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="print_usg()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_usg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        No Pakai
                                    </th>
                                    <th class="text-center">
                                        Tanggal
                                    </th>
                                    <th class="text-center">
                                        Info
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            dt_usg();            
        });
        function filter_usg()
        {
            $('#dtb_usg').DataTable().ajax.reload(null,false);
        }
        function print_usg()
        {
            if($('[name="rptusg_type"]').val() == '')
            {
                alert('Pilih Jenis Laporan');
            }
            else
            {
                var seg1 = $('[name="usg_datestart"]').val()?$('[name="usg_datestart"]').val():'null';
                var seg2 = $('[name="usg_dateend"]').val()?$('[name="usg_dateend"]').val():'null';
                var seg3 = $('[name="usg_branchid"]').val()?$('[name="usg_branchid"]').val():'null';
                var seg4 = $('[name="rptusg_type"]').val()?$('[name="rptusg_type"]').val():'null';
                window.open ( "<?php echo site_url('administrator/Genaff/print_rptusg/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
            }
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_usg()
        {            
            table = $('#dtb_usg').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showrpt_usgga')?>",
                    "type": "POST",
                    "data": function(data)
                    {
                        data.date_start = $('[name="usg_datestart"]').val();
                        data.date_end = $('[name="usg_dateend"]').val();
                        data.branch = $('[name="usg_branchid"]').val();
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                {
                    "targets": ['_all'], "className": "text-center"
                },
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
                    $('[name="usg_branchid"]').val(data.BRANCH_ID);
                    $('[name="usg_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
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