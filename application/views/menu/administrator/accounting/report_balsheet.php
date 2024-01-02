<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Accounting - Neraca</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_balsh" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="balsh_branch" readonly>
                                <input type="hidden" name="balsh_branchid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor Rekening</label>
                            <div class="col-sm-8">
                                <select class="form-control text-center" name="balsh_coaid" id="balsh_coaid" data-live-search="true">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="balsh_datestart" type='text' class="form-control input-group-addon" name="balsh_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="balsh_dateend" type='text' class="form-control input-group-addon" name="balsh_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_balsh()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="print_balsh()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" onclick="test()" class="btn btn-block btn-warning">
                                    Tes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_balsh" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        Rekening
                                    </th>
                                    <th class="col-sm-2 text-center">
                                        Debet
                                    </th>
                                    <th class="col-sm-2 text-center">
                                        Kredit
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
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            dt_balsh();
            drop_coa();
        });

        function filter_balsh()
        {
            $('#dtb_balsh').DataTable().ajax.reload(null,false);
        }

        function print_balsh()
        {
            var seg1 = $('[name="balsh_coaid"]').val()?$('[name="balsh_coaid"]').val():'null';
            var seg2 = $('[name="balsh_datestart"]').val()?$('[name="balsh_datestart"]').val():'null';
            var seg3 = $('[name="balsh_dateend"]').val()?$('[name="balsh_dateend"]').val():'null';
            var seg4 = $('[name="balsh_branchid"]').val()?$('[name="balsh_branchid"]').val():'null';
            window.open ( "<?php echo site_url('administrator/Accounting/print_balancesheet/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
        }
        function test()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/test')?>",
                type: "POST",
                data: $('#form_balsh').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert(data['a'][0]["saldo"]);
                    alert(data['b'][0]["saldo"]);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_balsh()
        {            
            table = $('#dtb_balsh').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showrpt_trialbal')?>",
                    "type": "POST",
                    "data": function(data){
                        data.coaid = $('[name="balsh_coaid"]').val();
                        data.date_start = $('[name="balsh_datestart"]').val();
                        data.date_end = $('[name="balsh_dateend"]').val();
                        data.branch = $('[name="balsh_branchid"]').val();
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
                    $('[name="balsh_branchid"]').val(data.BRANCH_ID);
                    $('[name="balsh_branch"]').val(data.BRANCH_NAME);
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