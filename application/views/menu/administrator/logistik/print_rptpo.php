<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Project Match Terpadu" content="Match Terpadu">
    <meta name="Author" content="Kaisha Satrio">
    <title><?php echo $title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">   
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
    <!-- sbadmin -->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/rowGroup.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {
            background-color: white;
        }
        .bg-table
        {
            min-height: 1000px;
        }
        .bt-border
        {
            border-bottom: solid 2px black;
        }
        .border-pay
        {
            border: solid 2px black;
            min-height: 50px;
        }
        tr.group,
        tr.group:hover {
            background-color: #ddd !important;
        }

        tr.subgroup,
        tr.subgroup {
           background-color: cornsilk !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="form_rptpo">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="apprid" value="<?php echo $appr; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="rpt_type" value="<?php echo $rpt_type; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u><span name="rptpo_type"></span> </u></h2>
                <h3 class="text-center" name="rptpo_branch"></h3>
                <h4 class="text-center" name="rptpo_period"></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpo_t1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
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
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Barang
                            </th>                            
                            <th class="text-center">
                                Jumlah
                            </th>
                            <th class="text-center">
                                Harga
                            </th>
                            <th class="text-center">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp1"></tbody>
                </table>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpappr_t2" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                No PI
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th> 
                            <th class="text-center">
                                Approval
                            </th>
                            <th class="text-center">
                                Ukuran
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Ijin
                            </th>
                            <th class="text-center">
                                Rekening
                            </th>
                            <th class="text-center">
                                Nominal
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp2"></tbody>
                    <tfoot>
                        <tr>
                            <th colspan="7" class="text-right">Grand Total</th>
                            <th class="text-right" name="grand-total"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptpappr_t3" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                NO PI
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th> 
                            <th class="text-center">
                                Ijin
                            </th>
                            <th class="text-center">
                                Lokasi
                            </th>
                            <th class="text-center">
                                Periode Ijin
                            </th>
                            <th class="text-center">
                                Bukti
                            </th>                            
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp3"></tbody>
                </table>
            </div>
        </div> -->
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptpo_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }
        });

        function check_()
        {
            var tp = $('[name="rpt_type"]').val();            
            if(tp == '1')
            {
                $('[name="rptpo_type"]').text('LAPORAN ORDER PEMBELIAN PER NOMOR');
                gen_tp1(0);
            }
            if(tp == '2')
            {
                $('[name="rptpo_type"]').text('LAPORAN ORDER PEMBELIAN PER PROYEK');
                gen_tp1(2);
            }
            if(tp == '3')
            {
                $('[name="rptpo_type"]').text('LAPORAN HISTORY ORDER PEMBELIAN');
                gen_tp2(2);
            }
            if(tp == '4')
            {
                $('[name="rptpo_type"]').text('LAPORAN SISA ORDER PEMBELIAN');
                gen_tp3(4);
            }
        }

        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_rptpo_t1')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var appr = (data['a'][i]["APPR_CODE"] != null) ? data['a'][i]["APPR_CODE"] : '-';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PO_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["PO_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+appr+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SUPP_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PODET_QTYUNIT"]+' '+data['a'][i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["GD_PRICE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PODET_SUB"]+'</td>'),
                            ).appendTo('#tb_content_tp1');
                    }
                    dt_tp1(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function gen_tp2(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Permit/gen_rptpappr_t2')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PAPPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["PAPPR_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PAPPR_WIDTH"]+'m X '+data['a'][i]["PAPPR_LENGTH"]+'m X '+data['a'][i]["PAPPR_PLCSUM"]+' Muka'+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PRMTTYP_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PPAY_AMOUNT"]+'</td>'),
                            ).appendTo('#tb_content_tp2');
                    }
                    dt_tp2(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function gen_tp3()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Permit/gen_rptpappr_t3')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PAPPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["PAPPR_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PRMTTYP_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["PDOC_DATESTART"]).format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["PDOC_DATEEND"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PDOC_RCVNUM"]+' / '+moment(data['a'][i]["PDOC_DATERCV"]).format('DD-MMMM-YYYY')+'</td>')
                            ).appendTo('#tb_content_tp3');
                    }
                    dt_tp3(v);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function dt_tp1(v)
        {
            $('#dtb_rptpo_t1').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    // {visible: false, targets: v},
                    {orderable: false, targets: '_all'}
                ],
                dom: 'Bfrtip',
                buttons: 
                {
                    dom: 
                    {
                        button: 
                        {
                            tag: 'button',
                            className: 'btn btn-sm btn-info'
                        }
                    },
                    buttons: ['excelHtml5']
                },
                // order: [[0, 'asc']],
                // rowGroup:
                // {
                //     endRender: function(rows, group)
                //     {
                //         var sum = rows.data().pluck(8)
                //         .reduce(function(a,b)
                //         {
                //             return a+b.replace(/[^\d]/g, '')*1;
                //         }, 0);                        
                //         sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                //         return $('<tr/>')                        
                //         .append( '<td colspan="7" class="text-right">Sub Total</td>' )
                //         .append( '<td class="text-right">'+sum+'</td>');
                //     },
                //     dataSrc: v
                // },
            });
        }

        function dt_tp2(v)
        {
            $('#dtb_rptpappr_t2').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(7)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        return $('<tr/>')                        
                        .append( '<td colspan="6" class="text-right">Sub Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>');
                    },
                    dataSrc: v
                },
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(7).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    $('[name="grand-total"]').text(sum);
                }
            });
        }

        function dt_tp3()
        {
            $('#dtb_rptpappr_t3').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
            });
        }

        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rptpo_branch"]').text(data.BRANCH_NAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
    </script>
</body>
</html>