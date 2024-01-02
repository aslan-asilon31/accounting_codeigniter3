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
            font-family: 'times new roman';
            font-size: 14px;
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
        .row-start
        {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form id="form_rptprc">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="suppid" value="<?php echo $supp; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="rpt_type" value="<?php echo $rpt_type; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png">
            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u><span name="rptprc_type"></span> </u></h2>
                <h3 class="text-center" name="rptprc_branch"></h3>
                <h4 class="text-center" name="rptprc_period"></h4>
            </div>
        </div>
        <div id="tp1" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptprc_t1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                No Beli
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Data PO
                            </th>
                            <th class="text-center">
                                Faktur
                            </th>
                            <th class="text-center">
                                Barang
                            </th>
                            <th class="text-center">
                                Jumlah
                            </th>
                            <th class="col-xs-2 text-center">
                                Harga
                            </th>
                            <th class="col-xs-2 text-center">
                                Sub
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp1"></tbody>
                </table>
            </div>
        </div>
        <div id="tp2" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptprc_t2" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                No Beli
                            </th>
                            <th class="text-center">
                                Supplier
                            </th>
                            <th class="text-center">
                                Sub Total
                            </th>
                            <th class="text-center">
                                Disc
                            </th>
                            <th class="text-center">
                                PPN
                            </th>
                            <th class="text-center">
                                Biaya
                            </th>
                            <th class="text-center">
                                Total
                            </th>                            
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp2"></tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">Grand Total</th>
                            <th class="text-right" name="gt-sub"></th>
                            <th class="text-right" name="gt-disc"></th>
                            <th class="text-right" name="gt-ppn"></th>
                            <th class="text-right" name="gt-cst"></th>
                            <th class="text-right" name="gt-total"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div id="tp2b" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptprc_t2b" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" name="th-txt">
                                Tanggal
                            </th>
                            <th class="text-center">
                                Sub Total
                            </th>
                            <th class="text-center">
                                Disc
                            </th>
                            <th class="text-center">
                                PPN
                            </th>
                            <th class="text-center">
                                Biaya
                            </th>
                            <th class="text-center">
                                Total
                            </th>                            
                        </tr>
                    </thead>
                    <tbody id="tb_content_tp2b"></tbody>
                    <tfoot>
                        <tr>
                            <th class="text-right">Grand Total</th>
                            <th class="text-right" name="gt-sub2"></th>
                            <th class="text-right" name="gt-disc2"></th>
                            <th class="text-right" name="gt-ppn2"></th>
                            <th class="text-right" name="gt-cst2"></th>
                            <th class="text-right" name="gt-total2"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptprc_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
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
                $('#tp1').removeClass('row-start');
                $('[name="rptprc_type"]').text('LAPORAN PEMBELIAN PER NOMOR');
                gen_tp1(0);
                gen_tp1b();
            }
            if(tp == '2')
            {
                $('#tp2').removeClass('row-start');
                $('[name="rptprc_type"]').text('LAPORAN PEMBELIAN HARIAN DETAIL');
                gen_tp2(0);
            }
            if(tp == '3')
            {
                $('#tp2b').removeClass('row-start');
                $('[name="rptprc_type"]').text('LAPORAN PEMBELIAN HARIAN SUMMARY');
                gen_tp2b('a.prcga_date');
            }
            if(tp == '4')
            {
                $('#tp2').removeClass('row-start');
                $('[name="rptprc_type"]').text('LAPORAN PEMBELIAN PER SUPPLIER DETAIL');
                gen_tp2(2);
            }
            if(tp == '5')
            {
                $('#tp2b').removeClass('row-start');
                $('[name="rptprc_type"]').text('LAPORAN PEMBELIAN PER SUPPLIER SUMMARY');
                $('[name="th-txt"]').text('Supplier');
                gen_tp2c('c.supp_name');
            }
        }
        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptprc_t1')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PRCGA_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["PRCGA_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["POGA_CODE"]+'<br>'+data['a'][i]["SUPP_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PRCGA_INV"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["GD_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PRCGADET_QTY"]+' '+data['a'][i]["GD_MEASURE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["GD_PRICE"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGADET_SUB"]+'</td>'),
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
        function gen_tp1b()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptprc_t1')?>",
                type: "POST",
                data: $('#form_rptpo').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        $('[name="dsc'+data['b'][i]["PRCGA_CODE"]+'"]').text('Rp '+money_conv(data['b'][i]["PRCGA_DISC"]));
                        $('[name="ppn'+data['b'][i]["PRCGA_CODE"]+'"]').text('Rp '+money_conv(data['b'][i]["PRCGA_PPN"]));
                        $('[name="cst'+data['b'][i]["PRCGA_CODE"]+'"]').text('Rp '+money_conv(data['b'][i]["PRCGA_COST"]));
                        $('[name="gt'+data['b'][i]["PRCGA_CODE"]+'"]').text('Rp '+money_conv(data['b'][i]["PRCGA_GTOTAL"]));
                    }
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
                url : "<?php echo site_url('administrator/Genaff/gen_rptprc_t2')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['a'][i]["PRCGA_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["PRCGA_CODE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SUPP_NAME"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGA_SUB"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGA_DISC"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGA_PPN"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGA_COST"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["PRCGA_GTOTAL"]+'</td>')
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
        function gen_tp2b(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptprc_t2b/')?>"+v,
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+moment(data['a'][i]["prcga_date"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["sub"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["disc"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["ppn"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["cost"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["gt"]+'</td>')
                            ).appendTo('#tb_content_tp2b');
                    }
                    dt_tp2b();
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp2c(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Genaff/gen_rptprc_t2b/')?>"+v,
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["supp_name"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["sub"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["disc"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["ppn"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["cost"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["gt"]+'</td>')
                            ).appendTo('#tb_content_tp2b');
                    }
                    dt_tp2b();
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
        function gen_tp2d(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/gen_rptprc_t2b/')?>"+v,
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var appr = (data['a'][i]["appr_code"] != null) ? data['a'][i]["appr_code"] : '-';
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+appr+'<br>'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["sub"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["disc"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["ppn"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["cost"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["gt"]+'</td>')
                            ).appendTo('#tb_content_tp2b');
                    }
                    dt_tp2b();
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
            $('#dtb_rptprc_t1').DataTable({
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
                        .append( '<td colspan="6" class="text-right">Sub Total<br>Disc.<br>PPN<br>Biaya<br>Grand Total</td>' )
                        .append( '<td class="text-right">'+sum+'<br><span name="dsc'+group+'"></span><br><span name="ppn'+group+'"></span><br><span name="cst'+group+'"></span><br><span style="border-bottom: 3px double;" name="gt'+group+'"></span></td>');
                    },
                    dataSrc: v
                },
            });
        }
        function dt_tp2(v)
        {
            $('#dtb_rptprc_t2').DataTable({
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
                        var sum = rows.data().pluck(3)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        var sum2 = rows.data().pluck(4)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum2);
                        var sum3 = rows.data().pluck(5)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum3);
                        var sum4 = rows.data().pluck(6)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum4 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum4);
                        var sum5 = rows.data().pluck(7)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum5 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum5);
                        return $('<tr/>')
                        .append( '<td colspan="2" class="text-right">Sub Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>')
                        .append( '<td class="text-right">'+sum2+'</td>')
                        .append( '<td class="text-right">'+sum3+'</td>')
                        .append( '<td class="text-right">'+sum4+'</td>')
                        .append( '<td class="text-right">'+sum5+'</td>');
                    },
                    dataSrc: v
                },
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(3).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    total2 = api.column(4).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total2);
                    total3 = api.column(5).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total3);
                    total4 = api.column(6).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum4 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total4);
                    total5 = api.column(7).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum5 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total5);
                    $('[name="gt-sub"]').text(sum);
                    $('[name="gt-disc"]').text(sum2);
                    $('[name="gt-ppn"]').text(sum3);
                    $('[name="gt-cst"]').text(sum4);
                    $('[name="gt-total"]').text(sum5);
                }
            });
        }
        function dt_tp2b()
        {
            $('#dtb_rptprc_t2b').DataTable({
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
                // order: [[0, 'asc']],
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(1).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    total2 = api.column(2).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum2 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total2);
                    total3 = api.column(3).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum3 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total3);
                    total4 = api.column(4).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum4 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total4);
                    total5 = api.column(5).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum5 = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total5);
                    $('[name="gt-sub2"]').text(sum);
                    $('[name="gt-disc2"]').text(sum2);
                    $('[name="gt-ppn2"]').text(sum3);
                    $('[name="gt-cst2"]').text(sum4);
                    $('[name="gt-total2"]').text(sum5);
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
                    $('[name="rptprc_branch"]').text(data.BRANCH_NAME);
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