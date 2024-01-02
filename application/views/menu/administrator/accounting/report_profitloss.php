<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Accounting - Laba Rugi</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_trbal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="trbal_branch" readonly>
                                <input type="hidden" name="trbal_branchid">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor Rekening</label>
                            <div class="col-sm-8">
                                <select class="form-control text-center" name="trbal_coaid" id="trbal_coaid" data-live-search="true">
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="trbal_datestart" type='text' class="form-control input-group-addon" name="trbal_datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="trbal_dateend" type='text' class="form-control input-group-addon" name="trbal_dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_profloss()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div> -->
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="print_profloss()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_trbal" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                </div> -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Saldo Laba Rugi</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_posting">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Saldo Laba Rugi Saat Ini</label>
                            <div class="col-sm-8">
                                <input type="text" name="saldo_rt" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Saldo Laba Rugi Terposting</label>
                            <div class="col-sm-8">
                                <input type="text" name="saldo_rtp" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="post_profloss()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-book"> Posting</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <h4 class="text-center">Histori Saldo Laba Rugi</h4>
                        <table id="dtb_histproloss" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        Akun
                                    </th>
                                    <th class="text-center">
                                        Tanggal
                                    </th>
                                    <th class="text-center">
                                        No Jurnal
                                    </th>
                                    <th class="text-center">
                                        No Bukti
                                    </th>
                                    <th class="text-center">
                                        Keterangan
                                    </th>
                                    <th class="text-center">
                                        Debet
                                    </th>
                                    <th class="text-center">
                                        Kredit
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
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
            dt_his();
            // drop_coa();
            pick_saldo();
        });

        function filter_trbal()
        {
            $('#dtb_trbal').DataTable().ajax.reload(null,false);
        }

        function reload()
        {
            $('#dtb_histproloss').DataTable().ajax.reload(null,false);
        }

        function print_profloss()
        {
            var seg1 = $('[name="trbal_coaid"]').val()?$('[name="trbal_coaid"]').val():'null';
            var seg2 = $('[name="trbal_datestart"]').val()?$('[name="trbal_datestart"]').val():'null';
            var seg3 = $('[name="trbal_dateend"]').val()?$('[name="trbal_dateend"]').val():'null';
            var seg4 = $('[name="trbal_branchid"]').val()?$('[name="trbal_branchid"]').val():'null';
            window.open ( "<?php echo site_url('administrator/Accounting/print_profitloss/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
        }

        function post_profloss()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/post_profitloss')?>",
                type: "POST",
                data: $('#form_posting').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Sukses Di Posting');
                        pick_saldo();
                        reload();
                    }
                    else
                    {
                        alert('Saldo Sudah Sama');
                        pick_saldo();
                        reload();
                    }
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
        // function dt_trialbal()
        // {
        //     table = $('#dtb_trbal').DataTable({
        //         "info": false,
        //         "destroy": true,
        //         "responsive": true,
        //         "processing": true,
        //         "serverSide": true,
        //         "order": [],
        //         "ajax": {
        //             "url": "<?php echo site_url('administrator/Showdata/showrpt_trialbal')?>",
        //             "type": "POST",
        //             "data": function(data){
        //                 data.coaid = $('[name="trbal_coaid"]').val();
        //                 data.date_start = $('[name="trbal_datestart"]').val();
        //                 data.date_end = $('[name="trbalg_dateend"]').val();
        //                 data.branch = $('[name="trbal_branchid"]').val();
        //             },
        //         },                
        //         "columnDefs": [
        //         { 
        //             "targets": [ 0 ],
        //             "orderable": false,
        //         },
        //         ],
        //     });
        // }
        function dt_his()
        {
            table = $('#dtb_histproloss').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Showdata/showphisroloss_saldo')?>",
                    "type": "POST",
                },                
                "columnDefs": [
                    {visible: false, targets: 0},
                    {type: 'date-dd-mmm-yyyy', targets: 1},
                    {orderable: false, targets: '_all'},
                    {className:"chgnum", "targets": [5,6]},
                ],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);
                        
                        var sum2 = rows.data().pluck(6)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);

                        var sum3 = (sum2-sum)*1;
                        sum3 = (sum3 > 0) ? $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum3) : '('+$.fn.dataTable.render.number(',','.',2,'Rp ').display(Math.abs(sum3))+')';
                        sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum2);

                        return $('<tr/>')                        
                        .append( '<td colspan="4"></td>' )
                        .append( '<td class="text-right">'+sum+'<br>Saldo</td>')
                        .append( '<td class="text-right">'+sum2+'<br>'+sum3+'</td>' );
                    },
                    dataSrc: 0
                }, 
            });
        }
        function dt_journal()
        {
            $('#dtb_histproloss').DataTable({
                info: false,
                searching: false,                
                bLengthChange: false,
                paging: false,
                columnDefs:
                [                    
                    {visible: false, targets: 1},
                    {type: 'date-dd-mmm-yyyy', targets: 0},
                    {orderable: false, targets: '_all'}
                ],
                order: [[1, 'asc'],[7, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);
                        
                        var sum2 = rows.data().pluck(6)
                        .reduce(function(a,b)
                        {
                            return a+b*1;
                        }, 0);

                        var sum3 = (sum-sum2)*1;
                        sum3 = (sum3 > 0) ? $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum3) : '('+$.fn.dataTable.render.number(',','.',2,'Rp ').display(Math.abs(sum3))+')';
                        sum = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum);
                        sum2 = $.fn.dataTable.render.number(',','.',2,'Rp ').display(sum2);

                        return $('<tr/>')                        
                        .append( '<td colspan="4"></td>' )
                        .append( '<td class="text-right">'+sum+'<br>Saldo</td>')
                        .append( '<td class="text-right">'+sum2+'<br>'+sum3+'</td>' );
                    },
                    dataSrc: 1
                },               
            });
            $('th').removeClass('sorting_asc');
            $('th').removeClass('sorting_desc');
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
                    var select = document.getElementById('trbal_coaid');
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
                    $('#trbal_coaid').selectpicker({
                        dropupAuto: false
                    });
                    $('#trbal_coaid').selectpicker('refresh');                    
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
                    $('[name="trbal_branchid"]').val(data.BRANCH_ID);
                    $('[name="trbal_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_saldo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_saldoprofitloss')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    saldoposted = data['a'][0]["saldo"];
                    saldoinc = data['b'][0]['saldo'];
                    saldoout = data['c'][0]['saldo'];
                    saldort = (saldoinc-saldoout)*1;
                    $('[name="saldo_rt"]').val(parseFloat(saldort).toFixed(2));
                    $('[name="saldo_rtp"]').val(parseFloat(saldoposted).toFixed(2));
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